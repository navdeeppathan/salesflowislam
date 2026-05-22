{{-- resources/views/admin/order-details.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Order #{{ $order->id }}
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        :root {
            --bg:      #faf8f5;
            --white:   #ffffff;
            --ink:     #0f0d0a;
            --ink2:    #1e1a14;
            --warm:    #2e2820;
            --muted:   #7a7065;
            --dim:     #b8b0a0;
            --ghost:   #e8e2d8;
            --border:  rgba(180,140,60,.15);
            --gold:    #b8932a;
            --gold2:   #d4ae50;
            --gold3:   #e8c868;
            --goldlt:  #fdf5e0;
            --r2:      18px;
        }

        body{
            font-family:'Inter',sans-serif;
            background:var(--bg);
            color:var(--ink);
        }

        .font-display{
            font-family:'Syne',sans-serif;
        }

        .lux-card{
            background:var(--white);
            border:1px solid var(--border);
            border-radius:28px;
            overflow:hidden;
            box-shadow:0 10px 40px rgba(0,0,0,.04);
        }

        .lux-input{
            width:100%;
            height:56px;
            border-radius:18px;
            border:1px solid var(--ghost);
            background:var(--bg);
            padding:0 18px;
            color:var(--ink);
            outline:none;
            transition:.25s ease;
        }

        .lux-input:focus{
            border-color:var(--gold2);
            box-shadow:0 0 0 4px rgba(212,174,80,.08);
        }

        .lux-textarea{
            width:100%;
            border-radius:18px;
            border:1px solid var(--ghost);
            background:var(--bg);
            padding:16px 18px;
            color:var(--ink);
            outline:none;
            transition:.25s ease;
        }

        .lux-textarea:focus{
            border-color:var(--gold2);
            box-shadow:0 0 0 4px rgba(212,174,80,.08);
        }

        .lux-btn{
            width:100%;
            height:58px;
            border:none;
            border-radius:18px;
            background:#000;
            color:#fff;
            font-weight:600;
            font-size:15px;
            letter-spacing:.08em;
            text-transform:uppercase;
            transition:.3s ease;
            cursor:pointer;
        }

        .lux-btn:hover{
            background:var(--warm);
            transform:translateY(-1px);
        }

        .lux-badge{
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.08);
            color:#fff;
            padding:10px 18px;
            border-radius:999px;
            font-size:13px;
        }

        .lux-bank{
            background:var(--goldlt);
            border:1px solid rgba(212,174,80,.2);
            border-radius:24px;
            padding:24px;
        }

        .lux-bank-title{
            color:var(--gold);
            font-weight:700;
            letter-spacing:.08em;
            text-transform:uppercase;
            margin-bottom:20px;
            font-size:13px;
        }

        .gold-text{
            color:var(--gold);
        }

    </style>

</head>

<body>

<div class="min-h-screen">

    <!-- HEADER -->
    <div
        class="text-white p-8 shadow-xl"
        style="background:linear-gradient(135deg,#0f0d0a 0%,#1e1a14 100%)"
    >

        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-6">

            <div>

                <div class="text-sm uppercase tracking-[3px] text-[#e8c868] mb-3">
                    Salesflowislam <br>
                    Wholesale Fragrances · Dubai
                </div>

                <h1 class="font-display text-4xl font-bold mb-3">
                    Order #{{ $order->id }}
                </h1>

                <div class="flex flex-wrap gap-3">

                    <div class="lux-badge">
                        Status:
                        <strong>{{ $order->status }}</strong>
                    </div>

                    <div class="lux-badge">
                        Payment:
                        <strong>{{ $order->payment_status }}</strong>
                    </div>

                </div>

            </div>

            <!-- CUSTOMER -->
            <div class="bg-white/5 rounded-[28px] p-6 min-w-[300px] border border-white/10">

                <div class="text-sm text-[#e8c868] mb-4 uppercase tracking-[2px]">
                    Customer Details
                </div>

                <div class="space-y-4">

                    <div>

                        <div class="text-xs text-gray-300 mb-1">
                            Name
                        </div>

                        <div class="font-semibold text-lg">
                            {{ $order->user->name ?? 'N/A' }}
                        </div>

                    </div>

                    <div>

                        <div class="text-xs text-gray-300 mb-1">
                            Email
                        </div>

                        <div>
                            {{ $order->user->email ?? 'N/A' }}
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- BODY -->
    <div class="max-w-7xl mx-auto p-6">

        @if(session('success'))

            <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-2xl">
                {{ session('success') }}
            </div>

        @endif

        <div class="grid lg:grid-cols-3 gap-6">

            <!-- ORDER ITEMS -->
            <div class="lg:col-span-2">

                <div class="lux-card">

                    <div class="p-6 border-b border-[#f1ece3]">

                        <h2 class="font-display text-2xl font-bold">
                            Order Items
                        </h2>

                    </div>

                    <div class="divide-y divide-[#f1ece3]">

                        @php
                            $subtotal = 0;
                        @endphp

                        @foreach($order->items as $item)

                            @php
                                $lineTotal = $item->price * $item->quantity;
                                $subtotal += $lineTotal;
                            @endphp

                            <div class="p-6 flex flex-col md:flex-row justify-between gap-5">

                                <div class="flex gap-4">

                                    <img
                                        src="{{ asset($item->product->image) }}"
                                        class="w-24 h-24 rounded-2xl object-cover border border-[#eee7db]"
                                    >

                                    <div>

                                        <div class="text-xs uppercase tracking-[2px] gold-text font-semibold mb-2">
                                            {{ $item->product->brand }}
                                        </div>

                                        <h3 class="font-semibold text-lg">
                                            {{ $item->product->title }}
                                        </h3>

                                        <div class="text-sm text-[#7a7065] mt-2">
                                            MOQ:
                                            {{ $item->product->moq }}
                                        </div>

                                    </div>

                                </div>

                                <div class="text-right">

                                    <div class="text-sm text-[#7a7065] mb-2">
                                        Quantity
                                    </div>

                                    <div class="text-xl font-bold mb-4">
                                        {{ $item->quantity }}
                                    </div>

                                    <div class="text-sm text-[#7a7065]">
                                        Price
                                    </div>

                                    <div class="font-bold gold-text text-lg">
                                        £{{ number_format($lineTotal,2) }}
                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

            <!-- PAYMENT -->
            <div>

                <div class="lux-card sticky top-5">

                    <div class="p-6 border-b border-[#f1ece3]">

                        <h2 class="font-display text-2xl font-bold">
                            Payment
                        </h2>

                    </div>

                    <div class="p-6">

                        @php
                            $vat = $subtotal * 0.20;
                            $grandTotal = $subtotal + $vat;
                        @endphp

                        <!-- TOTALS -->
                        <div class="space-y-4 mb-8">

                            <div class="flex justify-between">

                                <span class="text-[#7a7065]">
                                    Subtotal
                                </span>

                                <span class="font-semibold">
                                    £{{ number_format($subtotal,2) }}
                                </span>

                            </div>

                            <div class="flex justify-between">

                                <span class="text-[#7a7065]">
                                    VAT (20%)
                                </span>

                                <span class="font-semibold">
                                    £{{ number_format($vat,2) }}
                                </span>

                            </div>

                            <div class="border-t border-[#f1ece3] pt-4 flex justify-between text-xl">

                                <span class="font-bold">
                                    Grand Total
                                </span>

                                <span class="font-bold gold-text">
                                    £{{ number_format($grandTotal,2) }}
                                </span>

                            </div>

                        </div>

                        <!-- FORM -->
                        <form
                            method="POST"
                            action="{{ url('/admin/order/confirm/'.$order->id) }}"
                        >

                            @csrf

                            <!-- PAYMENT METHOD -->
                            <div class="mb-5">

                                <label class="block text-sm font-semibold mb-3">
                                    Payment Method
                                </label>

                                <select
                                    name="method"
                                    required
                                    class="lux-input"
                                >

                                    <option value="">
                                        Select Payment Method
                                    </option>

                                    <option value="bank_transfer">
                                        Bank Transfer
                                    </option>

                                    <option value="cash">
                                        Cash
                                    </option>

                                </select>

                            </div>

                            <!-- BANK DETAILS -->
                            <div
                                id="bank-details-box"
                                class="hidden mb-6 lux-bank"
                            >

                                <div class="lux-bank-title">
                                    Bank Transfer Details
                                </div>

                                <div class="space-y-3">

                                    <div>

                                        <div class="text-xs text-[#7a7065] mb-2">
                                            Bank Name
                                        </div>

                                        <input
                                            type="text"
                                            disabled
                                            value="{{ env('BANK_NAME') }}"
                                            class="lux-input"
                                        >

                                    </div>

                                    <div>

                                        <div class="text-xs text-[#7a7065] mb-2">
                                            Account Name
                                        </div>

                                        <input
                                            type="text"
                                            disabled
                                            value="{{ env('BANK_ACCOUNT_NAME') }}"
                                            class="lux-input"
                                        >

                                    </div>

                                    <div>

                                        <div class="text-xs text-[#7a7065] mb-2">
                                            Account Number
                                        </div>

                                        <input
                                            type="text"
                                            disabled
                                            value="{{ env('BANK_ACCOUNT_NUMBER') }}"
                                            class="lux-input"
                                        >

                                    </div>

                                    <div>

                                        <div class="text-xs text-[#7a7065] mb-2">
                                            IBAN
                                        </div>

                                        <input
                                            type="text"
                                            disabled
                                            value="{{ env('BANK_IBAN') }}"
                                            class="lux-input"
                                        >

                                    </div>

                                </div>

                            </div>

                            <!-- DELIVERY DATE -->
                            <div class="mb-5">

                                <label class="block text-sm font-semibold mb-3">
                                    Delivery Date
                                </label>

                                <input
                                    type="date"
                                    name="delivery_date"
                                    required
                                    class="lux-input"
                                >

                            </div>

                            <!-- DELIVERY INSTRUCTIONS -->
                            <div class="mb-6">

                                <label class="block text-sm font-semibold mb-3">
                                    Delivery Instructions
                                </label>

                                <textarea
                                    name="delivery_instructions"
                                    rows="4"
                                    placeholder="Enter delivery instructions..."
                                    class="lux-textarea"
                                ></textarea>

                            </div>

                            <!-- BUTTON -->
                            <button
                                type="submit"
                                class="lux-btn"
                            >
                                Confirm Order
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

    const methodSelect = document.querySelector('select[name="method"]');

    const bankBox = document.getElementById('bank-details-box');

    methodSelect.addEventListener('change', function () {

        if(this.value === 'bank_transfer'){

            bankBox.classList.remove('hidden');

        }else{

            bankBox.classList.add('hidden');

        }

    });

</script>

</body>
</html>