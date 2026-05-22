{{-- resources/views/admin/passcode.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Admin Verification
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
            height:72px;
            border-radius:22px;
            border:1px solid var(--ghost);
            background:var(--bg);
            color:var(--ink);
            text-align:center;
            font-size:34px;
            letter-spacing:14px;
            outline:none;
            transition:.25s ease;
        }

        .lux-input:focus{
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

        .lux-error{
            background:#fff5f5;
            border:1px solid #fecaca;
            color:#dc2626;
            padding:16px 18px;
            border-radius:18px;
            font-size:14px;
        }

    </style>

</head>

<body>

<div class="min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">

        <div class="lux-card">

            <!-- HEADER -->
            <div
                class="p-10 text-white text-center"
                style="background:linear-gradient(135deg,#0f0d0a 0%,#1e1a14 100%)"
            >

                <div class="w-24 h-24 mx-auto rounded-full bg-white/10 border border-white/10 flex items-center justify-center text-5xl mb-6">
                    🔒
                </div>

                <div class="text-sm uppercase tracking-[4px] text-[#e8c868] mb-4">
                    Salesflowislam
                </div>

                <h1 class="font-display text-4xl font-bold">
                    Admin Verification
                </h1>

                <p class="text-gray-300 mt-4 leading-7">
                    Enter your secure 4 digit admin passcode to continue.
                </p>

            </div>

            <!-- BODY -->
            <div class="p-8 md:p-10">

                @if(session('error'))

                    <div class="lux-error mb-6">
                        {{ session('error') }}
                    </div>

                @endif

                <form
                    method="POST"
                    action="{{ url('/admin/order/verify-passcode') }}"
                >

                    @csrf

                    <input
                        type="hidden"
                        name="order_id"
                        value="{{ $id }}"
                    >

                    <!-- PASSCODE -->
                    <div class="mb-8">

                        <label class="block text-sm font-semibold mb-4">
                            Security Passcode
                        </label>

                        <input
                            type="password"
                            name="passcode"
                            maxlength="4"
                            required
                            placeholder="••••"
                            class="lux-input"
                        >

                    </div>

                    <!-- BUTTON -->
                    <button
                        type="submit"
                        class="lux-btn"
                    >
                        Verify Access
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>