<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Payment Submission
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
            border-radius:32px;
            overflow:hidden;
            box-shadow:0 10px 40px rgba(0,0,0,.05);
        }

        .lux-input{
            width:100%;
            height:58px;
            border-radius:18px;
            border:1px solid var(--ghost);
            background:var(--bg);
            padding:0 20px;
            outline:none;
            transition:.25s ease;
            color:var(--ink);
        }

        .lux-input:focus{
            border-color:var(--gold2);
            box-shadow:0 0 0 4px rgba(212,174,80,.08);
        }

        .lux-file{
            width:100%;
            border-radius:22px;
            border:2px dashed rgba(212,174,80,.25);
            background:var(--goldlt);
            padding:28px;
            outline:none;
            transition:.25s ease;
            color:var(--ink);
        }

        .lux-file:hover{
            border-color:var(--gold2);
            background:#fff8ea;
        }

        .lux-btn{
            width:100%;
            height:60px;
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

        .gold-text{
            color:var(--gold);
        }

        .info-card{
            background:var(--goldlt);
            border:1px solid rgba(212,174,80,.15);
            border-radius:24px;
        }

    </style>

</head>

<body>

<div class="min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-2xl">

        <div class="lux-card">

            <!-- HEADER -->
            <div
                class="p-10 text-white"
                style="background:linear-gradient(135deg,#0f0d0a 0%,#1e1a14 100%)"
            >

                <div class="text-sm uppercase tracking-[4px] text-[#e8c868] mb-4">
                    Saleflowislam
                </div>

                <h1 class="font-display text-4xl font-bold mb-4">
                    Payment Submission
                </h1>

                <p class="text-gray-300 leading-8 max-w-xl">
                    Upload your payment proof and transaction details for your confirmed wholesale fragrance order.
                </p>

            </div>

            <!-- BODY -->
            <div class="p-8 md:p-10">

                @if(session('success'))

                    <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 text-green-700 px-5 py-4">
                        {{ session('success') }}
                    </div>

                @endif

                @if ($errors->any())

                    <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-5">

                        <ul class="space-y-2 text-red-600 text-sm">

                            @foreach ($errors->all() as $error)

                                <li>
                                    • {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <!-- ORDER INFO -->
                <div class="info-card p-6 mb-8">

                    <div class="grid md:grid-cols-3 gap-6">

                        <div>

                            <div class="text-xs uppercase tracking-[2px] text-[#7a7065] mb-2">
                                Order ID
                            </div>

                            <div class="font-bold text-lg">
                                #{{ $order->id }}
                            </div>

                        </div>

                        <div>

                            <div class="text-xs uppercase tracking-[2px] text-[#7a7065] mb-2">
                                Customer
                            </div>

                            <div class="font-bold text-lg">
                                {{ $order->user->name }}
                            </div>

                        </div>

                        <div>

                            <div class="text-xs uppercase tracking-[2px] text-[#7a7065] mb-2">
                                Total Amount
                            </div>

                            <div class="font-bold text-2xl gold-text">
                                £{{ number_format($order->total_price,2) }}
                            </div>

                        </div>

                    </div>

                </div>

                <!-- FORM -->
                <form 
                    method="POST"
                    action="{{ url('/payment-success/'.$order->id) }}"
                    enctype="multipart/form-data"
                    class="space-y-7"
                >

                    @csrf

                    <!-- TRANSACTION -->
                    <div>

                        <label class="block text-sm font-semibold mb-3">
                            Transaction ID
                        </label>

                        <input
                            type="text"
                            name="transaction_id"
                            placeholder="Enter Transaction ID"
                            required
                            class="lux-input"
                        >

                    </div>

                    <!-- FILE -->
                    <div>

                        <label class="block text-sm font-semibold mb-3">
                            Upload Payment Screenshot
                        </label>

                        <input
                            type="file"
                            name="payment_screenshot"
                            required
                            accept="image/*"
                            class="lux-file"
                        >

                        <div class="text-xs text-[#7a7065] mt-3">
                            JPG, PNG or WEBP supported
                        </div>

                    </div>

                    <!-- BUTTON -->
                    <button
                        type="submit"
                        class="lux-btn"
                    >
                        Submit Payment Proof
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>