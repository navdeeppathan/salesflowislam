<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\QuickbookToken;
use App\Models\User;

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
        $qb = QuickbookToken::first();
        $token = $this->getValidToken();

        $response = Http::withToken($token)
            ->post("https://sandbox-quickbooks.api.intuit.com/v3/company/{$qb->realm_id}/customer", [
                "DisplayName" => $customer->business_name,
                "PrimaryEmailAddr" => [
                    "Address" => $customer->email
                ]
            ]);

        return $response->json();
    }

    public function syncCustomer($id)
    {
        $customer = User::findOrFail($id);

        $qb = new QuickbooksController();

        $response = $qb->createCustomer($customer);

        if (isset($response['Customer']['Id'])) {
            $customer->update([
                'qb_customer_id' => $response['Customer']['Id']
            ]);
        }

        return back()->with('success', 'Synced to QuickBooks');
    }
    // 📦 CREATE ITEM
    public function createItem($product)
    {
        $qb = QuickbookToken::first();
        $token = $this->getValidToken();

        $response = Http::withToken($token)
            ->post("https://sandbox-quickbooks.api.intuit.com/v3/company/{$qb->realm_id}/item", [
                "Name" => $product->title,
                "Type" => "Service",
                "IncomeAccountRef" => [
                    "value" => "79"
                ]
            ]);

        return $response->json();
    }

    // 🧾 CREATE INVOICE
    public function createInvoice($customer, $order)
    {
        $qb = QuickbookToken::first();
        $token = $this->getValidToken();

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

        $response = Http::withToken($token)
            ->post("https://sandbox-quickbooks.api.intuit.com/v3/company/{$qb->realm_id}/invoice", [
                "CustomerRef" => [
                    "value" => $customer->qb_customer_id
                ],
                "Line" => $lines
            ]);

        return $response->json();
    }
}