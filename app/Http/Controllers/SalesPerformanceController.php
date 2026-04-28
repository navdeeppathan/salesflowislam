<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Task;
use Illuminate\Support\Facades\DB;


class SalesPerformanceController extends Controller
{
    public function index()
    {
        // ================= KPI =================

        $revenue = Order::whereMonth('created_at', now()->month)
            ->sum('total_price');

        $lastMonth = Order::whereMonth('created_at', now()->subMonth()->month)
            ->sum('total_price');

        $growth = $lastMonth > 0
            ? round((($revenue - $lastMonth) / $lastMonth) * 100, 1)
            : 0;

        $orders = Order::count();

        $avgDeal = Order::avg('total_price');

        $winRate = $orders > 0
            ? round((Order::where('status', 'accepted')->count() / $orders) * 100)
            : 0;

        // ================= ACTIVITY =================

        $calls = Task::where('task_type', 'call')->count();
        $emails = Task::where('task_type', 'email')->count();
        $visits = Task::where('task_type', 'visit')->count();
        $meetings = Task::where('task_type', 'meeting')->count();

        // ================= CHART =================

        $monthlyData = Order::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(total_price) as total')
        )
            ->where('created_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total');

        // ================= TARGET (user se) =================
        $user = auth()->user();

        $months = collect(range(0, 5))->map(function ($i) {
            return now()->subMonths(5 - $i)->format('M');
        });

        $monthlyRevenueRaw = Order::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(total_price) as total')
        )
            ->where('created_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->pluck('total', 'month');

        // Proper 6 months data
        $monthlyRevenue = [];

        for ($i = 5; $i >= 0; $i--) {
            $monthNum = now()->subMonths($i)->month;
            $monthlyRevenue[] = $monthlyRevenueRaw[$monthNum] ?? 0;
        }

        // Labels dynamic
        $labels = $months->values();

        // Target data
        $targetData = array_fill(0, count($monthlyRevenue), auth()->user()->target_amount ?? 0);
        // ================= CATEGORY DATA =================
        $categoryData = DB::table('order_items')
            ->join('products', 'order_items.product_id', '=', 'products.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select(
                'categories.name',
                DB::raw('SUM(order_items.quantity * order_items.price) as total')
            )
            ->groupBy('categories.name')
            ->pluck('total', 'categories.name');


        return view('SalesRep.sales_performance', compact(
            'revenue',
            'growth',
            'orders',
            'avgDeal',
            'winRate',
            'calls',
            'emails',
            'visits',
            'meetings',
            'monthlyData',
            'monthlyRevenue',
            'targetData',
            'labels',
            'categoryData'

        ));
    }




    public function targets()
    {
        $user = auth()->user();

        // ================= YEAR =================
        $year = now()->year;

        // ================= USER TARGET =================
        $annualTarget = $user->target_amount * ($user->target_months ?? 12);

        // ================= ACTUAL SALES =================
        $yearlyAchieved = Order::whereYear('created_at', $year)
            ->sum('total_price');

        $remaining = $annualTarget - $yearlyAchieved;

        $percentage = $annualTarget > 0
            ? round(($yearlyAchieved / $annualTarget) * 100, 1)
            : 0;

        // ================= MONTHLY DATA =================
        $monthlySalesRaw = Order::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(total_price) as total')
        )
            ->whereYear('created_at', $year)
            ->groupBy('month')
            ->pluck('total', 'month');

        $monthlyActual = [];

        for ($i = 1; $i <= 12; $i++) {
            $monthlyActual[] = $monthlySalesRaw[$i] ?? 0;
        }

        // ================= TARGET PER MONTH =================
        $monthlyTarget = array_fill(0, 12, $user->target_amount ?? 0);

        // ================= QUARTERS =================
        $quarters = [
            'Q1' => array_sum(array_slice($monthlyActual, 0, 3)),
            'Q2' => array_sum(array_slice($monthlyActual, 3, 3)),
            'Q3' => array_sum(array_slice($monthlyActual, 6, 3)),
            'Q4' => array_sum(array_slice($monthlyActual, 9, 3)),
        ];

        $quarterTarget = $annualTarget / 4;

        // ================= CURRENT MONTH =================
        $currentMonthRevenue = Order::whereMonth('created_at', now()->month)
            ->sum('total_price');

        $monthlyTargetValue = $user->target_amount ?? 0;

        $monthlyPercent = $monthlyTargetValue > 0
            ? round(($currentMonthRevenue / $monthlyTargetValue) * 100, 1)
            : 0;

        // ================= NEW CUSTOMERS =================
        $newCustomers = \App\Models\User::whereMonth('created_at', now()->month)
            ->where('role', 'customer')
            ->count();

        $newCustomerTarget = 2; // tum change kar sakte ho

        $newCustomerPercent = $newCustomerTarget > 0
            ? round(($newCustomers / $newCustomerTarget) * 100)
            : 0;

        // ================= CUSTOMER RETENTION =================
        $totalCustomers = \App\Models\User::where('role', 'customer')->count();

        $activeCustomers = \App\Models\User::where('role', 'customer')
            ->whereHas('orders', function ($q) {
                $q->whereMonth('created_at', now()->month);
            })->count();

        $retentionRate = $totalCustomers > 0
            ? round(($activeCustomers / $totalCustomers) * 100)
            : 0;

        $retentionTarget = 90;

        // ================= AVG ORDER VALUE =================
        $avgOrderValue = Order::avg('total_price');

        $avgTarget = 3500;

        $avgPercent = $avgTarget > 0
            ? round(($avgOrderValue / $avgTarget) * 100)
            : 0;

        // ================= CALLS PER DAY =================
        $totalCalls = Task::where('task_type', 'call')
            ->whereMonth('created_at', now()->month)
            ->count();

        $days = now()->day ?: 1;

        $callsPerDay = round($totalCalls / $days, 1);

        $callTarget = 4;

        $callPercent = $callTarget > 0
            ? round(($callsPerDay / $callTarget) * 100)
            : 0;

        return view('SalesRep.sales_targets', compact(
            'annualTarget',
            'yearlyAchieved',
            'remaining',
            'percentage',
            'monthlyActual',
            'monthlyTarget',
            'quarters',
            'quarterTarget',
            'currentMonthRevenue',
            'monthlyTargetValue',
            'monthlyPercent',
            'newCustomers',
            'newCustomerTarget',
            'newCustomerPercent',
            'retentionRate',
            'retentionTarget',
            'avgOrderValue',
            'avgTarget',
            'avgPercent',
            'callsPerDay',
            'callTarget',
            'callPercent'
        ));
    }
}