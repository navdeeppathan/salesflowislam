<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SalesDashboardController extends Controller
{
    public function index()
    {
        // =========================
        // 📊 KPI DATA
        // =========================

        // Monthly Revenue
        $revenue = Order::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('total_price');

        // Last Month Revenue
        $lastMonthRevenue = Order::whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->sum('total_price');

        // Growth %
        $revenueGrowthPercent = $lastMonthRevenue > 0
            ? round((($revenue - $lastMonthRevenue) / $lastMonthRevenue) * 100, 1)
            : 0;

        // Orders
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->count();
        $confirmedOrders = Order::where('status', 'accepted')->count();
        $processingOrders = Order::where('status', 'processing')->count();

        // =========================
        // 👥 CUSTOMER RISK
        // =========================

        $churnRiskCount = User::whereHas('orders')
            ->whereDoesntHave('orders', function ($q) {
                $q->where('created_at', '>=', now()->subDays(30));
            })->count();

        // =========================
        // 📦 RECENT ORDERS
        // =========================

        $orders = Order::with('user')
            ->latest()
            ->limit(5)
            ->get();

        // =========================
        // 📅 TASKS (IMPORTANT 🔥)
        // =========================

        $tasks = Task::latest()->get();

        $todayTasks = Task::whereDate('due_date', today())->get();
        $pendingTasks = Task::where('status', 'pending')->count();

        // =========================
        // 📈 CHART DATA (LAST 6 MONTHS)
        // =========================

        $monthlyData = Order::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(total_price) as total')
        )
            ->where('created_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total');

        // =========================
        // RETURN VIEW
        // =========================

        $alerts = Task::where('status', 'pending')
            ->orderByRaw("FIELD(priority, 'high', 'medium', 'low')")
            ->orderBy('due_date')
            ->limit(3)
            ->get();

        $customerHealth = User::where('role', 'customer')
            ->whereNotNull('business_name')
            ->with([
                'orders' => function ($q) {
                    $q->latest();
                }
            ])
            ->get()
            ->map(function ($user) {

                // Last Order
                $lastOrder = $user->orders->first();

                // Current Month Total
                $currentMonth = $user->orders()
                    ->whereMonth('created_at', now()->month)
                    ->sum('total_price');

                // Last 3 Months Avg
                $last3Months = $user->orders()
                    ->where('created_at', '>=', now()->subMonths(3))
                    ->avg('total_price');

                // Trend %
                $trend = $last3Months > 0
                    ? round((($currentMonth - $last3Months) / $last3Months) * 100)
                    : 0;

                // Status Logic
                if ($trend < -30) {
                    $status = 'At Risk';
                } elseif ($trend < 0) {
                    $status = 'Declining';
                } elseif ($trend > 10) {
                    $status = 'Healthy';
                } else {
                    $status = 'Stale';
                }

                return [
                    'name' => $user->business_name,
                    'initials' => strtoupper(substr($user->business_name, 0, 2)),
                    'last_order_date' => optional($lastOrder)->created_at,
                    'trend' => $trend,
                    'current' => $currentMonth,
                    'status' => $status,
                    'id' => $user->id
                ];
            });

        return view('SalesRep.sales_dashboard', compact(
            'revenue',
            'revenueGrowthPercent',
            'totalOrders',
            'pendingOrders',
            'confirmedOrders',
            'processingOrders',
            'churnRiskCount',
            'orders',
            'tasks',
            'todayTasks',
            'pendingTasks',
            'monthlyData',
            'alerts',
            'customerHealth'
        ));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('SalesRep.sales_profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'target_amount' => 'required|numeric|min:1',
            'target_months' => 'required|integer|min:1|max:12',
        ]);

        $user = auth()->user();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->target_amount = $data['target_amount'];
        $user->target_months = $data['target_months'];

        $user->save();

        return back()->with('success', 'Profile Updated Successfully');
    }
}