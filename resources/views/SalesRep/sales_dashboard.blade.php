@extends('SalesRep.layouts.app')

@section('content')
    <style>
        :root {
            --navy: #0f172a;
            --royal: #1e40af;
            --gold: #d4af37;
            --emerald: #059669;
            --crimson: #dc2626;
            --amber: #f59e0b;
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 64px;
            --transition-speed: 250ms;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .font-display {
            font-family: 'Space Grotesk', sans-serif;
        }

        /* ===== SIDEBAR STYLES ===== */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background: var(--navy);
            z-index: 50;
            transition: width var(--transition-speed) cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: rgba(255, 255, 255, 0.2) transparent;
        }

        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
        }

        /* Collapsed State */
        .sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }

        /* Header Section */
        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 80px;
        }

        .brand-container {
            display: flex;
            align-items: center;
            gap: 12px;
            overflow: hidden;
            white-space: nowrap;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .brand-text {
            opacity: 1;
            transition: opacity var(--transition-speed) ease;
        }

        .sidebar.collapsed .brand-text {
            opacity: 0;
            width: 0;
        }

        /* Toggle Button */
        .sidebar-toggle {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: #94a3b8;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }

        .sidebar-toggle:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }

        .sidebar.collapsed .sidebar-toggle {
            transform: rotate(180deg);
        }

        /* Navigation Container */
        .sidebar-nav {
            flex: 1;
            padding: 16px 12px;
            overflow-y: auto;
        }

        /* Menu Section */
        .menu-section {
            margin-bottom: 8px;
        }

        .section-header {
            padding: 8px 16px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            border-radius: 6px;
            transition: all 0.2s ease;
            user-select: none;
        }

        .section-header:hover {
            background: rgba(255, 255, 255, 0.05);
            color: #94a3b8;
        }

        .section-chevron {
            transition: transform 0.2s ease;
            font-size: 12px;
        }

        .menu-section.collapsed .section-chevron {
            transform: rotate(-90deg);
        }

        .sidebar.collapsed .section-header {
            justify-content: center;
            padding: 8px;
        }

        .sidebar.collapsed .section-label {
            display: none;
        }

        .section-content {
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .menu-section.collapsed .section-content {
            max-height: 0;
        }

        /* Navigation Items */
        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 16px;
            margin: 2px 0;
            color: #cbd5e1;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
            white-space: nowrap;
        }

        .nav-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--royal);
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .nav-item:hover {
            background: rgba(255, 255, 255, 0.08);
            color: white;
        }

        .nav-item.active {
            background: rgba(30, 64, 175, 0.2);
            color: white;
            font-weight: 500;
        }

        .nav-item.active::before {
            opacity: 1;
        }

        .nav-icon {
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 16px;
        }

        .nav-text {
            flex: 1;
            font-size: 14px;
            opacity: 1;
            transition: opacity var(--transition-speed) ease;
        }

        .sidebar.collapsed .nav-text,
        .sidebar.collapsed .nav-badge {
            opacity: 0;
            width: 0;
            display: none;
        }

        .nav-badge {
            background: var(--crimson);
            color: white;
            font-size: 11px;
            font-weight: 600;
            padding: 2px 8px;
            border-radius: 12px;
            flex-shrink: 0;
            transition: opacity var(--transition-speed) ease;
        }

        .nav-badge.warning {
            background: var(--amber);
        }

        /* Tooltip for collapsed state */
        .tooltip {
            position: absolute;
            left: calc(var(--sidebar-collapsed-width) + 12px);
            background: #1e293b;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: all 0.2s ease;
            z-index: 100;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            pointer-events: none;
        }

        .tooltip::before {
            content: '';
            position: absolute;
            left: -6px;
            top: 50%;
            transform: translateY(-50%);
            border-width: 6px 6px 6px 0;
            border-color: transparent #1e293b transparent transparent;
        }

        .sidebar.collapsed .nav-item:hover .tooltip {
            opacity: 1;
            visibility: visible;
        }

        /* Footer Section */
        .sidebar-footer {
            padding: 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: auto;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px;
            border-radius: 8px;
            transition: background 0.2s ease;
            cursor: pointer;
        }

        .user-profile:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgba(255, 255, 255, 0.2);
            flex-shrink: 0;
        }

        .user-info {
            overflow: hidden;
            opacity: 1;
            transition: opacity var(--transition-speed) ease;
        }

        .sidebar.collapsed .user-info {
            opacity: 0;
            width: 0;
            display: none;
        }

        .user-name {
            font-size: 14px;
            font-weight: 600;
            color: white;
            white-space: nowrap;
        }

        .user-role {
            font-size: 12px;
            color: #94a3b8;
            white-space: nowrap;
        }

        .logout-btn {
            width: 100%;
            margin-top: 12px;
            padding: 10px;
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #94a3b8;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 13px;
            transition: all 0.2s ease;
        }

        .logout-btn:hover {
            background: rgba(239, 68, 68, 0.1);
            border-color: rgba(239, 68, 68, 0.3);
            color: #fca5a5;
        }

        .sidebar.collapsed .logout-btn span {
            display: none;
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: margin-left var(--transition-speed) cubic-bezier(0.4, 0, 0.2, 1);
        }

        .sidebar.collapsed+.main-content {
            margin-left: var(--sidebar-collapsed-width);
        }

        /* Mobile Overlay */
        .mobile-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 40;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mobile-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Cards */
        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Alert Badges */
        .alert-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .alert-danger {
            background: #fef2f2;
            color: var(--crimson);
            border: 1px solid #fecaca;
        }

        .alert-warning {
            background: #fffbeb;
            color: #b45309;
            border: 1px solid #fcd34d;
        }

        .alert-success {
            background: #f0fdf4;
            color: var(--emerald);
            border: 1px solid #bbf7d0;
        }

        /* Customer Row */
        .customer-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 1fr 120px;
            gap: 16px;
            align-items: center;
            padding: 16px 20px;
            background: white;
            border-bottom: 1px solid #e2e8f0;
            transition: background 0.2s;
        }

        .customer-row:hover {
            background: #f8fafc;
        }

        /* Trend Indicators */
        .trend-up {
            color: var(--emerald);
        }

        .trend-down {
            color: var(--crimson);
        }

        .trend-flat {
            color: #64748b;
        }

        /* Quick Actions */
        .quick-action {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: white;
            border-radius: 12px;
            border: 2px solid transparent;
            transition: all 0.2s;
            cursor: pointer;
        }

        .quick-action:hover {
            border-color: var(--royal);
            transform: translateX(4px);
        }

        /* Progress Bar */
        .progress-bar {
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            border-radius: 4px;
            transition: width 0.5s ease;
        }

        /* Mobile Responsive */
        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(-100%);
                width: var(--sidebar-width) !important;
            }

            .sidebar.mobile-open {
                transform: translateX(0);
            }

            .sidebar.collapsed {
                width: var(--sidebar-width) !important;
            }

            .main-content {
                margin-left: 0 !important;
            }

            .sidebar-toggle {
                display: none;
            }

            .mobile-toggle {
                display: flex !important;
            }
        }

        @media (min-width: 1025px) {
            .mobile-toggle {
                display: none !important;
            }
        }

        /* Keyboard focus styles for accessibility */
        .nav-item:focus-visible,
        .section-header:focus-visible,
        .sidebar-toggle:focus-visible,
        .logout-btn:focus-visible {
            outline: 2px solid #3b82f6;
            outline-offset: 2px;
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>

    <!-- Header -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-30">
        <div class="flex items-center justify-between px-6 py-4">
            <div class="flex items-center gap-4">
                <button class="mobile-toggle p-2 hover:bg-slate-100 rounded-lg lg:hidden" onclick="openMobileSidebar()"
                    aria-label="Open menu">
                    <i class="fas fa-bars text-slate-600 text-xl"></i>
                </button>
                <div>
                    <h1 class="font-display text-2xl font-bold text-slate-900">Sales Dashboard</h1>
                    <p class="text-sm text-slate-500">Welcome back, Mike! Here's your overview for April 2026</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="hidden md:flex items-center gap-2 px-4 py-2 bg-green-50 rounded-lg border border-green-200">
                    <i class="fas fa-circle text-green-500 text-xs"></i>
                    <span class="text-sm font-medium text-green-700">Online</span>
                </div>
                <button class="relative p-2 text-slate-600 hover:text-blue-900 transition" aria-label="Notifications">
                    <i class="fas fa-bell text-xl"></i>
                    <span
                        class="absolute top-0 right-0 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center font-semibold">8</span>
                </button>
                <button class="p-2 text-slate-600 hover:text-blue-900 transition" onclick="openMessages()"
                    aria-label="Messages">
                    <i class="fas fa-envelope text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <div class="p-6">
        <!-- KPI Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="stat-card">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <p class="text-sm text-slate-500 mb-1 font-medium">Monthly Revenue</p>
                        <h3 class="font-display text-3xl font-bold text-slate-900">£ {{ number_format($revenue, 2) ?? 0}}
                        </h3>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-900">
                        <i class="fas fa-pound-sign text-xl"></i>
                    </div>
                </div>
                <!-- <div class="flex items-center gap-2">
                                        <span class="text-emerald-600 font-semibold text-sm">
                                            <i class="fas fa-arrow-up mr-1"></i>{{ $revenueGrowthPercent }}%
                                        </span>
                                        <span class="text-slate-400 text-sm">vs last month</span>
                                    </div> -->
                <!-- <div class="mt-3 progress-bar">
                                        <div class="progress-fill bg-blue-600" style="width: 78%"></div>
                                    </div>
                                    <p class="text-xs text-slate-400 mt-2">78% of monthly target (£165K)</p> -->
            </div>

            <div class="stat-card">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <p class="text-sm text-slate-500 mb-1 font-medium">Active Orders</p>
                        <h3 class="font-display text-3xl font-bold text-slate-900">{{ $totalOrders }}</h3>
                    </div>
                    <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center text-amber-700">
                        <i class="fas fa-shopping-cart text-xl"></i>
                    </div>
                </div>
                <!-- <div class="flex items-center gap-2">
                                        <span class="text-emerald-600 font-semibold text-sm">
                                            <i class="fas fa-arrow-up mr-1"></i>8.2%
                                        </span>
                                        <span class="text-slate-400 text-sm">vs last month</span>
                                    </div> -->
                <div class="mt-3 flex items-center gap-2 text-xs">
                    <span class="px-2 py-1 bg-green-100 text-green-700 rounded font-medium">{{ $confirmedOrders }}
                        Confirmed</span>
                    <span class="px-2 py-1 bg-amber-100 text-amber-700 rounded font-medium">{{ $pendingOrders }}
                        Pending</span>
                    <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded font-medium">{{ $processingOrders }}
                        Processing</span>
                </div>
            </div>

            <div class="stat-card border-2 border-red-100">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <p class="text-sm text-slate-500 mb-1 font-medium">At-Risk Customers</p>
                        <h3 class="font-display text-3xl font-bold text-red-600">{{ $churnRiskCount }}</h3>
                    </div>
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-600">
                        <i class="fas fa-exclamation-triangle text-xl"></i>
                    </div>
                </div>
                <!-- <div class="flex items-center gap-2">
                                        <span class="text-red-600 font-semibold text-sm">
                                            <i class="fas fa-arrow-up mr-1"></i>2
                                        </span>
                                        <span class="text-slate-400 text-sm">new this week</span>
                                    </div>
                                    <p class="text-xs text-red-600 mt-2 font-medium">Immediate action required</p> -->
            </div>

            <!-- <div class="stat-card">
                                            <div class="flex items-start justify-between mb-4">
                                                <div>
                                                    <p class="text-sm text-slate-500 mb-1 font-medium">Commission Earned</p>
                                                    <h3 class="font-display text-3xl font-bold text-slate-900">£3,850</h3>
                                                </div>
                                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center text-emerald-700">
                                                    <i class="fas fa-wallet text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <span class="text-emerald-600 font-semibold text-sm">
                                                    <i class="fas fa-arrow-up mr-1"></i>15.3%
                                                </span>
                                                <span class="text-slate-400 text-sm">vs last month</span>
                                            </div>
                                            <div class="mt-3 progress-bar">
                                                <div class="progress-fill bg-emerald-500" style="width: 65%"></div>
                                            </div>
                                            <p class="text-xs text-slate-400 mt-2">65% of quarterly target</p>
                                        </div> -->
        </div>

        <!-- Alerts Section -->
        <div class="bg-white rounded-2xl p-6 mb-8 shadow-sm border border-slate-200">
            <div class="flex items-center justify-between mb-4">
                <h2 class="font-display text-xl font-bold text-slate-900 flex items-center gap-2">
                    <i class="fas fa-bell text-red-500"></i>
                    Priority Alerts
                </h2>
                <a href="/sales-tasks" class="text-sm text-blue-900 hover:underline font-medium">View
                    All</a>
            </div>
            <div class="space-y-3">
                @forelse($alerts as $task)
                    <div class="flex items-center gap-4 p-4 bg-red-50 rounded-xl border border-red-100">
                        <!-- <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center text-red-600">
                                    <i class="fas fa-arrow-down"></i>
                                </div> -->
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-semibold text-slate-900"> {{ $task->title }} </h4>
                                <!-- <span class="alert-badge alert-danger">
                                                                                    <i class="fas fa-exclamation-circle"></i>
                                                                                    Order Drop -45%
                                                                                </span> -->
                            </div>
                            <p class="text-sm text-slate-600">{{ $task->description }}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="/sales-tasks" ">
                                        <button
                                            class=" px-4 py-2 bg-white text-red-600 border border-red-200 rounded-lg
                                hover:bg-red-50 transition text-sm font-medium">
                                View Details
                                </button>
                            </a>
                            <button class="px-4 py-2 rounded-lg text-white text-sm font-medium
                                        @if($task->task_type == 'call') bg-red-600 hover:bg-red-700
                                        @elseif($task->task_type == 'visit') bg-blue-600 hover:bg-blue-700
                                        @elseif($task->task_type == 'email') bg-green-600 hover:bg-green-700
                                        @else bg-amber-600 hover:bg-amber-700
                                        @endif
                                    ">

                                <i class="fas 
                                            @if($task->task_type == 'call') fa-phone
                                            @elseif($task->task_type == 'visit') fa-location-dot
                                            @elseif($task->task_type == 'email') fa-envelope
                                            @else fa-bell
                                            @endif
                                        mr-2"></i>

                                @if($task->task_type == 'call')
                                    Call Now
                                @elseif($task->task_type == 'visit')
                                    Visit Now
                                @elseif($task->task_type == 'email')
                                    Send Email
                                @else
                                    Follow Up
                                @endif

                            </button>
                        </div>
                    </div>
                @empty
                    <p class="text-sm text-slate-400">No priority tasks</p>
                @endforelse

            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Recent Orders -->
            <div class="lg:col-span-2 bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="font-display text-xl font-bold text-slate-900">Recent Orders</h2>
                    <div class="flex items-center gap-2">
                        <!-- <select class="px-3 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-blue-900 focus:ring-2 focus:ring-blue-100">
                                                        <option>All Status</option>
                                                        <option>Pending</option>
                                                        <option>Confirmed</option>
                                                        <option>Processing</option>
                                                    </select> -->
                        <a href="/sales-orders2" class="text-sm text-blue-900 hover:underline font-medium">View All</a>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                                <th class="pb-3">Order ID</th>
                                <th class="pb-3">Customer</th>
                                <th class="pb-3">Date</th>
                                <th class="pb-3">Amount</th>
                                <th class="pb-3">Status</th>
                                <th class="pb-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            @foreach($orders as $order)
                                <tr class="border-b border-slate-100 hover:bg-slate-50">
                                    <td class="py-4 font-medium text-blue-900">#SO-{{ $order->id }}</td>
                                    <td class="py-4">{{ $order->user->name ?? 'N/A' }}</td>
                                    <td class="py-4 text-slate-500">{{ $order->created_at->format('d M Y') }}</td>
                                    <td class="py-4 font-semibold">£ {{ number_format($order->total_price, 2) }}</td>
                                    <td class="py-4"><span
                                            class="px-2 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-medium">{{ ucfirst($order->status) }}</span>
                                    </td>
                                    <td class="py-4">
                                        <a href="/sales-orders2">

                                            <button class="text-blue-900 hover:underline font-medium">View</button>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quick Actions & Performance -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                    <h2 class="font-display text-lg font-bold text-slate-900 mb-4">Quick Actions</h2>
                    <div class="space-y-3">
                        <div class="quick-action" onclick="createOrder()">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-900">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">Create Order</p>
                                <p class="text-xs text-slate-500">Place order for customer</p>
                            </div>
                        </div>
                        <div class="quick-action" onclick="location.href='sales-customers'">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-green-700">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">Add Customer</p>
                                <p class="text-xs text-slate-500">Onboard new business</p>
                            </div>
                        </div>
                        <div class="quick-action" onclick="location.href='sales-orders2'">
                            <div
                                class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-700">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">Send Price List</p>
                                <p class="text-xs text-slate-500">Email latest prices</p>
                            </div>
                        </div>
                        <div class="quick-action" onclick="location.href='sales-tasks'">
                            <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center text-amber-700">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">Schedule Visit</p>
                                <p class="text-xs text-slate-500">Plan customer visit</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Today's Tasks -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="font-display text-lg font-bold text-slate-900">Today's Tasks</h2>
                        <span
                            class="text-xs bg-blue-100 text-blue-900 px-2 py-1 rounded-full font-medium">{{ $pendingTasks }}
                            Pending</span>
                    </div>
                    <div class="space-y-3">
                        <div class="space-y-3">

                            @forelse($todayTasks as $task)

                                <div
                                    class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg hover:bg-slate-100 transition cursor-pointer">

                                    <input type="checkbox"
                                        class="mt-1 w-4 h-4 text-blue-900 rounded focus:ring-blue-900 border-slate-300">

                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-slate-900">
                                            {{ $task->title }}
                                        </p>

                                        <p class="text-xs text-slate-500">
                                            {{ $task->description }}
                                        </p>
                                    </div>

                                    <!-- ✅ Dynamic Priority -->
                                    <span class="text-xs font-semibold
                                                                            @if($task->priority == 'high') text-red-600
                                                                            @elseif($task->priority == 'medium') text-amber-600
                                                                            @else text-blue-600
                                                                            @endif
                                                                        ">
                                        {{ ucfirst($task->priority) }}
                                    </span>

                                </div>

                            @empty
                                <p class="text-sm text-slate-400">No tasks for today</p>
                            @endforelse

                        </div>
                    </div>
                    <button onclick="location.href='sales-tasks'"
                        class="w-full mt-4 py-2 text-sm text-blue-900 font-medium hover:bg-blue-50 rounded-lg transition">
                        View All Tasks
                    </button>
                </div>
            </div>
        </div>

        <!-- Customer Health Overview -->
        <div class="mt-8 bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="font-display text-xl font-bold text-slate-900">Customer Health Overview</h2>
                    <p class="text-sm text-slate-500 mt-1">Monitor spending patterns and order frequency</p>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="exportReport()"
                        class="px-4 py-2 border border-slate-200 rounded-lg text-sm hover:bg-slate-50 transition font-medium">
                        <i class="fas fa-download mr-2"></i>Export
                    </button>
                    <a href="/sales-customers"
                        class="px-4 py-2 bg-blue-900 text-white rounded-lg text-sm hover:bg-blue-800 transition font-medium">
                        View All Customers
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <div class="min-w-[900px]">
                    <div class="customer-row bg-slate-50 font-semibold text-xs uppercase tracking-wider text-slate-500">
                        <div>Customer</div>
                        <div>Last Order</div>
                        <div>3-Month Trend</div>
                        <div>Current Month</div>
                        <div>Status</div>
                        <div>Action</div>
                    </div>

                    @foreach($customerHealth as $customer)

                                <div class="customer-row">

                                    <!-- Customer -->
                                    <div>
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-900 font-bold">
                                                {{ $customer['initials'] }}
                                            </div>
                                            <div>
                                                <p class="font-semibold text-slate-900">
                                                    {{ $customer['name'] }}
                                                </p>
                                                <p class="text-xs text-slate-500">
                                                    ID: C{{ $customer['id'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Last Order -->
                                    <div class="text-sm text-slate-600">
                                        {{ $customer['last_order_date']
                        ? \Carbon\Carbon::parse($customer['last_order_date'])->diffForHumans()
                        : 'No Orders' }}
                                    </div>

                                    <!-- Trend -->
                                    <div class="flex items-center gap-2">
                                        <i class="fas 
                            {{ $customer['trend'] > 0 ? 'fa-arrow-up trend-up' :
                        ($customer['trend'] < 0 ? 'fa-arrow-down trend-down' : 'fa-minus trend-flat') }}">
                                        </i>

                                        <span class="text-sm font-semibold 
                            {{ $customer['trend'] > 0 ? 'text-emerald-600' :
                        ($customer['trend'] < 0 ? 'text-red-600' : 'text-slate-600') }}">
                                            {{ $customer['trend'] }}%
                                        </span>

                                        <span class="text-xs text-slate-400">vs avg</span>
                                    </div>

                                    <!-- Current Month -->
                                    <div class="text-sm font-semibold text-slate-900">
                                        £{{ number_format($customer['current'], 2) }}
                                    </div>

                                    <!-- Status -->
                                    <div>
                                        <span class="alert-badge
                            {{ $customer['status'] == 'At Risk' ? 'alert-danger' :
                        ($customer['status'] == 'Declining' ? 'alert-warning' :
                            ($customer['status'] == 'Healthy' ? 'alert-success' : 'alert-warning')) }}">

                                            {{ $customer['status'] }}
                                        </span>
                                    </div>

                                    <!-- Action -->
                                    <div>
                                        <a href="/sales-customers">
                                            <button class="text-blue-900 hover:underline text-sm font-medium">
                                                View
                                            </button>
                                        </a>
                                    </div>

                                </div>

                    @endforeach
                </div>
            </div>
        </div>

        <!-- Performance Chart -->
        <!-- <div class="mt-8 bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-display text-xl font-bold text-slate-900">Sales Performance vs Target</h2>
                <select
                    class="px-3 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-blue-900 focus:ring-2 focus:ring-blue-100">
                    <option>Last 6 Months</option>
                    <option>Last 3 Months</option>
                    <option>This Year</option>
                </select>
            </div>
            <div class="h-80">
                <canvas id="performanceChart"></canvas>
            </div>
        </div> -->
    </div>


    <script>
        // ===== SIDEBAR COLLAPSE FUNCTIONALITY =====

        // Initialize sidebar state from localStorage
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.getElementById('sidebar');
            const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';

            if (isCollapsed && window.innerWidth > 1024) {
                sidebar.classList.add('collapsed');
            }

            // Initialize section states from localStorage
            const sections = ['section-main', 'section-analytics', 'section-tools'];
            sections.forEach(sectionId => {
                const isSectionCollapsed = localStorage.getItem(sectionId + '_collapsed') === 'true';
                if (isSectionCollapsed) {
                    document.getElementById(sectionId).classList.add('collapsed');
                }
            });
        });

        // Toggle sidebar collapse (desktop only)
        function toggleSidebar() {
            if (window.innerWidth <= 1024) return;

            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');

            // Save state to localStorage
            localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
        }

        // Toggle menu sections (accordion style)
        function toggleSection(sectionId) {
            const section = document.getElementById(sectionId);
            const isCollapsed = section.classList.toggle('collapsed');

            // Save state to localStorage
            localStorage.setItem(sectionId + '_collapsed', isCollapsed);

            // Update aria-expanded for accessibility
            const header = section.querySelector('.section-header');
            header.setAttribute('aria-expanded', !isCollapsed);
        }

        // ===== MOBILE SIDEBAR =====

        function openMobileSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobileOverlay');

            sidebar.classList.add('mobile-open');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobileOverlay');

            sidebar.classList.remove('mobile-open');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Close mobile sidebar on window resize to desktop
        window.addEventListener('resize', function () {
            if (window.innerWidth > 1024) {
                closeMobileSidebar();
            }
        });

        // ===== NAVIGATION FUNCTIONS =====

        function viewCustomer(customerId) {
            window.location.href = `sales_customer_detail.html?id=${customerId}`;
        }

        function viewOrder(orderId) {
            window.location.href = `sales_order_detail.html?id=${orderId}`;
        }

        function scheduleCall(customerId) {
            window.location.href = `sales_tasks.html?action=call&customer=${customerId}`;
        }

        function createOrder() {
            window.location.href = 'sales-orders2';
        }

        function exportReport() {
            alert('Exporting customer health report...');
        }

        function openMessages() {
            alert('Opening message center...');
        }

        function openProfile() {
            alert('Opening profile...');
        }

        function logout() {
            if (confirm('Are you sure you want to logout?')) {
                window.location.href = 'index.html';
            }
        }

        // ===== CHART CONFIGURATION =====

        const ctx = document.getElementById('performanceChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'],
                datasets: [{
                    label: 'Actual Sales',
                    data: [98000, 112000, 105000, 118000, 124000, 128450],
                    borderColor: '#1e40af',
                    backgroundColor: 'rgba(30, 64, 175, 0.1)',
                    fill: true,
                    tension: 0.4,
                    borderWidth: 3
                }, {
                    label: 'Target',
                    data: [100000, 110000, 115000, 120000, 125000, 130000],
                    borderColor: '#d4af37',
                    borderDash: [5, 5],
                    fill: false,
                    tension: 0.4,
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: {
                                family: "'Inter', sans-serif",
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: '#1e293b',
                        padding: 12,
                        cornerRadius: 8,
                        titleFont: {
                            family: "'Inter', sans-serif",
                            size: 13
                        },
                        bodyFont: {
                            family: "'Inter', sans-serif",
                            size: 12
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f1f5f9'
                        },
                        ticks: {
                            callback: function (value) {
                                return '£' + value.toLocaleString();
                            },
                            font: {
                                family: "'Inter', sans-serif",
                                size: 11
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: "'Inter', sans-serif",
                                size: 11
                            }
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index'
                }
            }
        });

        // ===== KEYBOARD ACCESSIBILITY =====

        // Allow keyboard navigation for section headers
        document.querySelectorAll('.section-header').forEach(header => {
            header.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });

        // Escape key to close mobile sidebar
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeMobileSidebar();
            }
        });
    </script>


@endsection