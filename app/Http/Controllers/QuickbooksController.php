<?php

namespace App\Http\Controllers;

use App\Models\QuickbookLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\QuickbookToken;
use App\Models\User;
use Carbon\Carbon;

class QuickbooksController extends Controller
{
    // 🔗 CONNECT
    public function connect()
    {
        $clientId = env('QB_CLIENT_ID');
        $redirectUri = urlencode(env('QB_REDIRECT_URI'));

        $scope = urlencode('com.intuit.quickbooks.accounting');

        return redirect(
            "https://appcenter.intuit.com/connect/oauth2?client_id={$clientId}&response_type=code&scope={$scope}&redirect_uri={$redirectUri}&state=123"
        );
    }

    // 🔁 CALLBACK
    public function callback(Request $request)
    {
        $code = $request->code;

        $response = Http::asForm()
            ->withBasicAuth(env('QB_CLIENT_ID'), env('QB_CLIENT_SECRET'))
            ->post('https://oauth.platform.intuit.com/oauth2/v1/tokens/bearer', [
                'grant_type' => 'authorization_code',
                'code' => $code,
                'redirect_uri' => env('QB_REDIRECT_URI'),
            ]);

        $data = $response->json();

        QuickbookToken::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'access_token' => $data['access_token'],
                'refresh_token' => $data['refresh_token'],
                'realm_id' => $request->realmId,
                'expires_at' => now()->addSeconds($data['expires_in']),
            ]
        );

        return redirect('/dashboard');
    }

    // 🔄 TOKEN HANDLER
    private function getValidToken()
    {
        $token = QuickbookToken::first();

        if (now()->greaterThan($token->expires_at)) {
            return $this->refreshToken($token);
        }

        return $token->access_token;
    }

    private function refreshToken($token)
    {
        $response = Http::asForm()
            ->withBasicAuth(env('QB_CLIENT_ID'), env('QB_CLIENT_SECRET'))
            ->post('https://oauth.platform.intuit.com/oauth2/v1/tokens/bearer', [
                'grant_type' => 'refresh_token',
                'refresh_token' => $token->refresh_token,
            ]);

        $data = $response->json();

        $token->update([
            'access_token' => $data['access_token'],
            'refresh_token' => $data['refresh_token'],
            'expires_at' => now()->addSeconds($data['expires_in']),
        ]);

        return $data['access_token'];
    }

    // 👤 CREATE CUSTOMER
    public function createCustomer($customer)
    {
        try {
            $qb = QuickbookToken::first();
            $token = $this->getValidToken();

            $url = "https://sandbox-quickbooks.api.intuit.com/v3/company/{$qb->realm_id}/customer?minorversion=75";

            $requestData = [
                "DisplayName" => $customer->business_name ?? $customer->name,
                "PrimaryEmailAddr" => [
                    "Address" => $customer->email
                ]
            ];
            $response = Http::withToken($token)
            ->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])
            ->post($url, $requestData);

            // ✅ LOG
            $this->logQB('customer', $requestData, $response);
            return $response->json();

        } catch (\Exception $e) {
            \Log::error('QuickBooks Customer Error: ' . $e->getMessage());
        }
    }

    public function syncCustomer($id)
    {
        try {
            $customer = User::findOrFail($id);


            $qb = new QuickbooksController();

            $response = $qb->createCustomer($customer);
            


            if (isset($response['Customer']['Id'])) {
                $customer->update([
                    'qb_customer_id' => $response['Customer']['Id']
                ]);
            }

            return back()->with('success', 'Synced to QuickBooks');

        } catch (\Exception $e) {
            \Log::error('QuickBooks Customer Error: ' . $e->getMessage());

            return back()->with('error', 'Failed to sync with QuickBooks');
        }
    }
    // 📦 CREATE ITEMAS
    public function createItem($product)
    {
        try {
            $qb = QuickbookToken::first();
            $token = $this->getValidToken();

            $url = "https://sandbox-quickbooks.api.intuit.com/v3/company/{$qb->realm_id}/item?minorversion=75";

            $requestData = [
                "Name" => $product->title,
                "Type" => "Inventory",
                "TrackQtyOnHand" => true,
                "QtyOnHand" => 10,
                "InvStartDate" => Carbon::now()->format('Y-m-d'),
                "IncomeAccountRef" => ["value" => "79"],
                "ExpenseAccountRef" => ["value" => "80"],
                "AssetAccountRef" => ["value" => "81"],
            ];

            $response = Http::withToken($token)
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ])
                ->post($url, $requestData);

            // ✅ LOG
            $this->logQB('item', $requestData, $response);


            // 🔥 DEBUG
            if ($response->failed()) {
                \Log::error('QB Item Error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);

               
            }

            return $response->json();

        } catch (\Exception $e) {
            \Log::error('QuickBooks Item Error: ' . $e->getMessage());
        }
    }

    // 🧾 CREATE INVOICE
    public function createInvoice($customer, $order)
    {
        try {
            $qb = QuickbookToken::first();
            $token = $this->getValidToken();

            $url = "https://sandbox-quickbooks.api.intuit.com/v3/company/{$qb->realm_id}/invoice?minorversion=75";

            $lines = [];

            foreach ($order->items as $item) {
                $lines[] = [
                    "Amount" => $item->price * $item->quantity,
                    "DetailType" => "SalesItemLineDetail",
                    "SalesItemLineDetail" => [
                        "ItemRef" => [
                            "value" => $item->product->qb_item_id
                        ],
                        "Qty" => $item->quantity,
                        "UnitPrice" => $item->price
                    ]
                ];
            }

            $requestData = [
                "CustomerRef" => [
                    "value" => $customer->qb_customer_id
                ],
                "Line" => $lines
            ];

            $response = Http::withToken($token)
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ])
                ->post($url, $requestData);

            // ✅ LOG
            $this->logQB('invoice', $requestData, $response);

            // 🔥 DEBUG (IMPORTANT)
            if ($response->failed()) {
                \Log::error('QB Invoice Error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);

                
            }

            return $response->json();

        } catch (\Exception $e) {
           \Log::error('QuickBooks Invoice Error: ' . $e->getMessage());
        }
    }

    private function logQB($type, $request, $response)
    {
        QuickbookLog::create([
            'user_id' => auth()->id(),
            'type' => $type,
            'request' => json_encode($request),
            'response' => $response->body(),
            'status' => $response->status(),
            'message' => $response->failed() ? 'Failed' : 'Success'
        ]);
    }
}