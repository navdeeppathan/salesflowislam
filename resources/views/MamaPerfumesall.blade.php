<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Mama Perfumes — Dubai Luxury Fragrances Wholesale</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<script src="https://cdn.tailwindcss.com"></script>

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,600&family=Montserrat:wght@200;300;400;500;600&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
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
      --rose:    #c8504a;
      --amber:   #c87828;
      --teal:    #1a5a4e;
      --teal2:   #2a8068;
      --wa:      #25D366;
      --wa2:     #1aab55;
      --r:       6px;
      --r2:      12px;
      --r3:      20px;
    }

    *{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:'Montserrat',sans-serif;background:var(--bg);color:var(--ink);overflow-x:hidden;cursor:none;-webkit-font-smoothing:antialiased;}
    img{display:block;width:100%;object-fit:cover;}
    a{text-decoration:none;color:inherit;}
    button{font-family:inherit;cursor:none;}

    /* ─── CURSOR ─────────────────────────────── */
    #c1,#c2{position:fixed;pointer-events:none;z-index:9999;border-radius:50%;transform:translate(-50%,-50%);}
    #c1{width:7px;height:7px;background:var(--gold2);transition:.1s;}
    #c2{width:30px;height:30px;border:1px solid rgba(212,174,80,.45);transition:left .12s ease,top .12s ease,width .25s,height .25s;}
    #c1.big{width:12px;height:12px;background:var(--gold3);}
    #c2.big{width:46px;height:46px;border-color:rgba(212,174,80,.25);}
    @media(hover:none){#c1,#c2{display:none;}}

    /* ─── TICKER ─────────────────────────────── */
    .ticker{background:var(--ink2);overflow:hidden;border-bottom:1px solid rgba(212,174,80,.2);}
    .ticker-inner{display:inline-flex;animation:tick 32s linear infinite;padding:.52rem 0;white-space:nowrap;}
    .ti{font-size:.58rem;letter-spacing:.22em;text-transform:uppercase;color:rgba(232,200,104,.55);padding:0 2.5rem;display:inline-flex;align-items:center;gap:2rem;}
    .ti .dot{width:3px;height:3px;background:rgba(212,174,80,.4);border-radius:50%;}
    @keyframes tick{from{transform:translateX(0);}to{transform:translateX(-50%);}}

    /* ─── NAV ────────────────────────────────── */
    nav{
      position:fixed;top:32px;left:0;right:0;z-index:1000;
      display:flex;align-items:center;justify-content:space-between;
      padding:0 clamp(1.2rem,4vw,3.5rem);height:66px;
      background:transparent;
      border-bottom:1px solid transparent;
      transition:top .3s,background .35s,border-color .35s,box-shadow .35s;
    }
    nav.stuck{
      top:0;
      background:rgba(250,248,245,.96);
      border-color:var(--border);
      box-shadow:0 4px 30px rgba(0,0,0,.06);
      backdrop-filter:blur(20px);
    }
    .logo{display:flex;flex-direction:column;line-height:1;}
    .logo-name{font-family:'Cormorant',serif;font-size:clamp(1.3rem,3vw,1.6rem);font-weight:500;letter-spacing:.05em;color:var(--ink);}
    .logo-sub{font-size:.48rem;letter-spacing:.28em;text-transform:uppercase;color:var(--gold);margin-top:4px;font-weight:400;}
    .nav-links{display:flex;gap:2.5rem;list-style:none;}
    .nav-links a{font-size:.62rem;letter-spacing:.18em;text-transform:uppercase;font-weight:400;color:var(--muted);cursor:none;transition:color .2s;position:relative;}
    .nav-links a::after{content:'';position:absolute;bottom:-3px;left:0;right:100%;height:1px;background:var(--gold2);transition:right .3s ease;}
    .nav-links a:hover{color:var(--gold);}
    .nav-links a:hover::after{right:0;}
    .nav-actions{display:flex;gap:.65rem;align-items:center;}
    .btn-wa-nav{
      display:inline-flex;align-items:center;gap:.4rem;
      background:transparent;border:1px solid rgba(180,140,60,.3);
      color:var(--warm);padding:.44rem 1rem;
      font-size:.58rem;letter-spacing:.16em;text-transform:uppercase;font-weight:500;
      transition:background .2s,border-color .2s;
    }
    .btn-wa-nav:hover{background:var(--goldlt);border-color:var(--gold2);}
    .btn-cart-nav{
      display:inline-flex;align-items:center;gap:.4rem;
      background:var(--ink);color:#fff;padding:.46rem 1rem;
      font-size:.58rem;letter-spacing:.16em;text-transform:uppercase;font-weight:400;
      position:relative;border:1px solid var(--ink);
      transition:background .2s;
    }
    .btn-cart-nav:hover{background:var(--warm);}
    .cbadge{
      position:absolute;top:-6px;right:-6px;
      width:16px;height:16px;border-radius:50%;
      background:var(--gold);color:#fff;
      font-size:.52rem;font-weight:600;
      display:flex;align-items:center;justify-content:center;
      border:1.5px solid var(--bg);
    }
    .nav-ham{display:none;flex-direction:column;gap:5px;background:none;border:none;padding:.3rem;}
    .nav-ham span{display:block;width:20px;height:1px;background:var(--ink);transition:.3s;}

    /* ─── HERO ───────────────────────────────── */
    .hero{
      min-height:100dvh;
      display:grid;
      grid-template-columns:1fr 1fr;
      position:relative;overflow:hidden;
    }
    /* Left — rich image */
    .hero-img{
      position:relative;overflow:hidden;
      min-height:100dvh;
    }
    .hero-img img{
      position:absolute;inset:0;width:100%;height:100%;
      object-fit:cover;object-position:center;
      transform:scale(1.04);
      animation:imgZoom 14s ease-in-out infinite alternate;
    }
    @keyframes imgZoom{from{transform:scale(1.04);}to{transform:scale(1);};}
    .hero-img-overlay{
      position:absolute;inset:0;
      background:linear-gradient(
        110deg,
        rgba(15,13,10,.55) 0%,
        rgba(15,13,10,.3) 50%,
        rgba(15,13,10,.1) 100%
      );
    }
    /* Floating badges on image */
    .hero-float{
      position:absolute;z-index:3;
      background:rgba(255,255,255,.92);
      backdrop-filter:blur(10px);
      border:1px solid rgba(180,140,60,.2);
      padding:.5rem 1.1rem;
      display:flex;align-items:center;gap:.5rem;
    }
    .hero-float .fdot{width:6px;height:6px;border-radius:50%;flex-shrink:0;}
    .hero-float .ftxt{font-size:.58rem;letter-spacing:.14em;text-transform:uppercase;font-weight:500;color:var(--warm);}
    .hf1{bottom:18%;left:6%;animation:flt1 5s ease-in-out infinite;}
    .hf2{top:22%;right:5%;animation:flt2 5.5s ease-in-out infinite;}
    @keyframes flt1{0%,100%{transform:translateY(0);}50%{transform:translateY(-6px);}}
    @keyframes flt2{0%,100%{transform:translateY(0);}50%{transform:translateY(5px);}}
    /* Bottom gradient on image panel */
    .hero-img-fade{
      position:absolute;bottom:0;left:0;right:0;height:140px;
      background:linear-gradient(0deg,rgba(15,13,10,.4),transparent);z-index:2;
    }

    /* Right — copy panel */
    .hero-copy{
      background:var(--bg);
      display:flex;flex-direction:column;justify-content:center;
      padding:clamp(5rem,10vw,8rem) clamp(2rem,5vw,4.5rem) clamp(3rem,6vw,5rem);
      position:relative;
    }
    /* Diagonal geometric accent */
    .hero-copy::before{
      content:'';position:absolute;top:0;left:0;bottom:0;width:1px;
      background:linear-gradient(180deg,transparent,var(--gold2),transparent);
      opacity:.4;
    }
    .hero-eyebrow{
      display:flex;align-items:center;gap:.8rem;
      margin-bottom:1.8rem;
      opacity:0;animation:riseUp .8s ease forwards .2s;
    }
    .eyebrow-line{width:28px;height:1px;background:var(--gold);}
    .eyebrow-text{font-size:.6rem;letter-spacing:.24em;text-transform:uppercase;font-weight:400;color:var(--gold);}
    .hero-arabic{
      font-family:'Amiri',serif;
      font-size:clamp(2rem,4vw,3.2rem);
      color:rgba(184,147,42,.2);
      direction:rtl;line-height:1;
      margin-bottom:.4rem;
      opacity:0;animation:riseUp .8s ease forwards .3s;
    }
    .hero-h1{
      font-family:'Cormorant',serif;
      font-size:clamp(2.8rem,5vw,5rem);
      font-weight:300;line-height:1.05;
      letter-spacing:-.01em;color:var(--ink);
      opacity:0;animation:riseUp .9s ease forwards .4s;
    }
    .hero-h1 em{font-style:italic;color:var(--gold2);}
    .hero-rule{
      width:52px;height:1px;
      background:linear-gradient(90deg,var(--gold2),transparent);
      margin:1.8rem 0;
      opacity:0;animation:riseUp .8s ease forwards .55s;
    }
    .hero-desc{
      font-family:'Cormorant',serif;
      font-size:clamp(1rem,1.8vw,1.18rem);
      font-style:italic;font-weight:300;
      color:var(--muted);line-height:1.8;
      max-width:380px;
      opacity:0;animation:riseUp .9s ease forwards .65s;
    }
    .hero-btns{
      display:flex;flex-wrap:wrap;gap:.7rem;
      margin-top:2.4rem;
      opacity:0;animation:riseUp .9s ease forwards .8s;
    }
    .btn-primary{
      background:var(--ink);color:#fff;
      padding:.82rem 2rem;
      font-size:.62rem;letter-spacing:.2em;text-transform:uppercase;font-weight:400;
      display:inline-flex;align-items:center;gap:.55rem;
      border:1px solid var(--ink);
      transition:background .22s,transform .2s;
    }
    .btn-primary:hover{background:var(--warm);transform:translateY(-1px);}
    .btn-primary svg{transition:transform .22s;}
    .btn-primary:hover svg{transform:translateX(3px);}
    .btn-secondary{
      background:transparent;color:var(--ink);
      padding:.82rem 1.8rem;
      font-size:.62rem;letter-spacing:.2em;text-transform:uppercase;font-weight:400;
      border:1px solid rgba(30,26,20,.22);
      display:inline-flex;align-items:center;gap:.55rem;
      transition:border-color .22s,background .22s,transform .2s;
    }
    .btn-secondary:hover{border-color:var(--gold2);background:var(--goldlt);transform:translateY(-1px);}
    .hero-stats{
      display:flex;gap:0;
      margin-top:3rem;padding-top:2rem;
      border-top:1px solid var(--border);
      opacity:0;animation:riseUp .9s ease forwards 1s;
    }
    .hstat{flex:1;padding:0 1.2rem 0 0;border-right:1px solid var(--border);}
    .hstat:not(:first-child){padding-left:1.2rem;}
    .hstat:last-child{border-right:none;}
    .hstat-val{font-family:'Cormorant',serif;font-size:1.75rem;font-weight:400;color:var(--gold);line-height:1;}
    .hstat-lbl{font-size:.54rem;letter-spacing:.16em;text-transform:uppercase;color:var(--dim);margin-top:.2rem;}

    @keyframes riseUp{from{opacity:0;transform:translateY(18px);}to{opacity:1;transform:translateY(0);}}
    @keyframes fadeIn{from{opacity:0;}to{opacity:1;}}

    /* ─── MARQUEE ────────────────────────────── */
    .mband{background:var(--ink);overflow:hidden;}
    .mband-inner{display:inline-flex;animation:mq 28s linear infinite;padding:.88rem 0;white-space:nowrap;}
    .mitem{font-family:'Cormorant',serif;font-style:italic;font-size:1.05rem;color:rgba(232,200,104,.45);padding:0 2.5rem;display:inline-flex;align-items:center;gap:2rem;}
    .mdot{width:3px;height:3px;border-radius:50%;background:rgba(212,174,80,.35);flex-shrink:0;}
    @keyframes mq{from{transform:translateX(0);}to{transform:translateX(-50%);}}

    /* ─── SHARED SECTION STYLES ─────────────── */
    .sec{padding:clamp(4rem,8vw,7rem) clamp(1.2rem,5vw,4rem);}
    .sec-label{
      display:flex;align-items:center;gap:.7rem;
      font-size:.57rem;letter-spacing:.26em;text-transform:uppercase;
      font-weight:500;color:var(--gold);margin-bottom:1.1rem;
    }
    .sec-label::before{content:'';width:18px;height:1px;background:var(--gold);}
    .sec-h2{
      font-family:'Cormorant',serif;
      font-size:clamp(2rem,4vw,3.4rem);
      font-weight:300;line-height:1.1;
      letter-spacing:-.01em;color:var(--ink);
    }
    .sec-h2 em{font-style:italic;color:var(--gold2);}
    .sec-lead{
      font-family:'Cormorant',serif;font-style:italic;
      font-size:clamp(.98rem,1.5vw,1.1rem);
      color:var(--muted);line-height:1.8;
      max-width:440px;margin-top:.7rem;
    }

    /* ─── FEATURE STRIP (3 images) ──────────── */
    .feat-strip{
      display:grid;
      grid-template-columns:1.4fr 1fr 1fr;
      gap:3px;
      background:var(--ink);
      height:clamp(260px,38vw,440px);
    }
    .feat-cell{position:relative;overflow:hidden;}
    .feat-cell img{
      width:100%;height:100%;object-fit:cover;
      transition:transform .7s ease;
    }
    .feat-cell:hover img{transform:scale(1.05);}
    .feat-cell-overlay{
      position:absolute;inset:0;
      background:linear-gradient(0deg,rgba(15,13,10,.65) 0%,rgba(15,13,10,.15) 50%,transparent 100%);
    }
    .feat-cell-label{
      position:absolute;bottom:1.2rem;left:1.2rem;z-index:2;
    }
    .fcl-sub{font-size:.54rem;letter-spacing:.18em;text-transform:uppercase;color:rgba(232,200,104,.7);margin-bottom:.2rem;}
    .fcl-name{font-family:'Cormorant',serif;font-size:1.1rem;font-weight:400;color:#fff;line-height:1.2;}

    /* ─── PRODUCTS ───────────────────────────── */
    .prod-sec{background:var(--bg);}
    .filter-row{display:flex;gap:.45rem;flex-wrap:wrap;margin:1.8rem 0 2.4rem;}
    .flt{
      background:transparent;border:1px solid var(--ghost);
      color:var(--dim);padding:.38rem 1rem;
      font-family:'Montserrat',sans-serif;
      font-size:.57rem;letter-spacing:.16em;text-transform:uppercase;
      transition:background .18s,border-color .18s,color .18s;
    }
    .flt:hover,.flt.on{background:var(--ink);border-color:var(--ink);color:#fff;}

    .pgrid{
      display:grid;
      grid-template-columns:repeat(auto-fill,minmax(290px,1fr));
      gap:1.5rem;
    }
    .pcard{
      background:var(--white);
      border:1px solid var(--border);
      border-radius:var(--r2);
      overflow:hidden;
      transition:box-shadow .3s,transform .3s;
      cursor:none;
    }
    .pcard:hover{box-shadow:0 16px 50px rgba(0,0,0,.1);transform:translateY(-4px);}
    .pcard-img{
      height:200px;position:relative;overflow:hidden;
    }
    .pcard-img img{
      height:100%;transition:transform .6s ease;
    }
    .pcard:hover .pcard-img img{transform:scale(1.06);}
    .pcard-img-overlay{
      position:absolute;inset:0;
      background:linear-gradient(0deg,rgba(15,13,10,.5) 0%,transparent 55%);
    }
    .pcard-badge-wrap{position:absolute;top:.9rem;left:.9rem;z-index:2;}
    .pbadge{
      display:inline-flex;align-items:center;gap:.3rem;
      font-size:.53rem;letter-spacing:.14em;text-transform:uppercase;font-weight:600;
      padding:.2rem .65rem;border-radius:40px;
    }
    .pbadge.bs{background:rgba(232,200,104,.2);border:1px solid rgba(232,200,104,.5);color:#e8c868;}
    .pbadge.nw{background:rgba(42,128,104,.2);border:1px solid rgba(42,128,104,.4);color:#4ab898;}
    .pbadge.ht{background:rgba(200,80,74,.2);border:1px solid rgba(200,80,74,.4);color:#e87878;}
    .pcard-body{padding:1.4rem 1.5rem 1.6rem;}
    .pcard-name{font-family:'Cormorant',serif;font-size:1.22rem;font-weight:500;color:var(--ink);line-height:1.2;margin-bottom:.15rem;}
    .pcard-arabic{font-family:'Amiri',serif;font-size:.9rem;color:rgba(184,147,42,.45);direction:rtl;margin-bottom:.55rem;}
    .pcard-desc{font-size:.78rem;color:var(--muted);line-height:1.7;margin-bottom:.9rem;}
    .pcard-notes{display:flex;gap:.3rem;flex-wrap:wrap;margin-bottom:1.2rem;}
    .pnote{
      font-size:.54rem;letter-spacing:.1em;text-transform:uppercase;
      color:var(--muted);background:var(--bg);
      border:1px solid var(--ghost);padding:.14rem .5rem;
      border-radius:3px;
    }
    .pcard-foot{
      display:flex;align-items:flex-end;justify-content:space-between;
      border-top:1px solid var(--border);padding-top:1.1rem;gap:.8rem;flex-wrap:wrap;
    }
    .pcard-price .pv{font-family:'Cormorant',serif;font-size:1.5rem;font-weight:400;color:var(--gold);}
    .pcard-price .pu{font-size:.6rem;color:var(--dim);margin-left:.1rem;}
    .pcard-price .pm{display:block;font-size:.54rem;letter-spacing:.1em;text-transform:uppercase;color:var(--dim);margin-top:.08rem;}
    .btn-add{
      background:var(--ink);color:#fff;
      font-size:.6rem;letter-spacing:.16em;text-transform:uppercase;
      padding:.54rem 1.05rem;border:none;
      display:flex;align-items:center;gap:.35rem;
      transition:background .2s;flex-shrink:0;
      border-radius:var(--r);
    }
    .btn-add:hover{background:var(--warm);}
    .btn-add.in{background:var(--teal);}

    /* ─── IMAGERY SPLIT SECTION ─────────────── */
    .split-sec{
      display:grid;
      grid-template-columns:1fr 1fr;
      min-height:clamp(400px,55vw,620px);
    }
    .split-img{position:relative;overflow:hidden;}
    .split-img img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;}
    .split-img-overlay{position:absolute;inset:0;background:rgba(15,13,10,.22);}
    .split-copy{
      background:var(--ink2);
      display:flex;flex-direction:column;justify-content:center;
      padding:clamp(2.5rem,6vw,5rem) clamp(2rem,5vw,4rem);
      position:relative;overflow:hidden;
    }
    .split-copy::before{
      content:'';position:absolute;top:0;right:0;
      width:280px;height:280px;
      background:radial-gradient(ellipse at top right,rgba(212,174,80,.1),transparent 65%);
    }
    .split-copy::after{
      content:'عود';font-family:'Amiri',serif;font-size:220px;font-weight:700;
      color:rgba(255,255,255,.025);
      position:absolute;bottom:-40px;right:-20px;line-height:1;pointer-events:none;
    }
    .split-label{font-size:.55rem;letter-spacing:.26em;text-transform:uppercase;color:rgba(212,174,80,.7);font-weight:500;margin-bottom:.7rem;}
    .split-h{font-family:'Cormorant',serif;font-size:clamp(1.8rem,3.5vw,3rem);font-weight:300;color:#f5ede0;line-height:1.15;position:relative;z-index:1;}
    .split-h em{font-style:italic;color:var(--gold3);}
    .split-body{font-family:'Cormorant',serif;font-style:italic;font-size:clamp(.92rem,1.3vw,1.05rem);color:rgba(245,237,224,.5);line-height:1.8;margin-top:.8rem;position:relative;z-index:1;}
    .split-flags{display:flex;gap:.4rem;flex-wrap:wrap;margin-top:1.3rem;position:relative;z-index:1;}
    .sflag{font-size:.6rem;letter-spacing:.06em;color:rgba(245,237,224,.5);background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);padding:.24rem .7rem;}
    .split-stat-row{
      display:grid;grid-template-columns:repeat(3,1fr);gap:1px;
      background:rgba(255,255,255,.06);
      margin-top:2rem;position:relative;z-index:1;
    }
    .sstem{background:var(--ink2);padding:1.2rem .8rem;text-align:center;}
    .sstem .sv{font-family:'Cormorant',serif;font-size:1.55rem;color:var(--gold3);display:block;line-height:1;}
    .sstem .sl{font-size:.52rem;letter-spacing:.14em;text-transform:uppercase;color:rgba(245,237,224,.3);margin-top:.15rem;}

    /* ─── WHY US CARDS ───────────────────────── */
    .why-sec{background:var(--bg);}
    .why-grid{
      display:grid;
      grid-template-columns:repeat(auto-fill,minmax(260px,1fr));
      gap:1.2rem;
      margin-top:3rem;
    }
    .why-card{
      background:var(--white);
      border:1px solid var(--border);
      border-radius:var(--r2);
      padding:2rem 1.8rem;
      transition:box-shadow .3s,transform .3s,border-color .3s;
      position:relative;overflow:hidden;
    }
    .why-card:hover{box-shadow:0 12px 40px rgba(0,0,0,.08);transform:translateY(-3px);border-color:rgba(180,140,60,.3);}
    .why-card::after{
      content:'';position:absolute;top:0;left:0;right:0;height:2px;
      background:linear-gradient(90deg,transparent,var(--gold2),transparent);
      transform:scaleX(0);transform-origin:center;
      transition:transform .5s ease;
    }
    .why-card:hover::after{transform:scaleX(1);}
    .wcard-icon{font-size:1.8rem;margin-bottom:1rem;display:block;}
    .wcard-num{font-family:'Cormorant',serif;font-style:italic;font-size:2.5rem;color:rgba(184,147,42,.14);line-height:1;position:absolute;top:1.2rem;right:1.5rem;transition:color .3s;}
    .why-card:hover .wcard-num{color:rgba(184,147,42,.3);}
    .wcard-h{font-family:'Cormorant',serif;font-size:1.12rem;font-weight:500;color:var(--ink);margin-bottom:.38rem;}
    .wcard-p{font-size:.78rem;color:var(--muted);line-height:1.72;}

    /* ─── PRIVATE LABEL BAND ─────────────────── */
    .pl-band{
      position:relative;overflow:hidden;
      min-height:clamp(280px,40vw,440px);
      display:flex;align-items:center;
    }
    .pl-band-img{position:absolute;inset:0;}
    .pl-band-img img{width:100%;height:100%;object-fit:cover;object-position:center;}
    .pl-band-overlay{
      position:absolute;inset:0;
      background:linear-gradient(90deg,rgba(15,13,10,.88) 0%,rgba(15,13,10,.65) 50%,rgba(15,13,10,.3) 100%);
    }
    .pl-band-content{
      position:relative;z-index:2;
      padding:clamp(2rem,6vw,5rem) clamp(1.5rem,5vw,4rem);
      max-width:600px;
    }
    .pl-lbl{font-size:.55rem;letter-spacing:.26em;text-transform:uppercase;color:rgba(212,174,80,.75);font-weight:500;margin-bottom:.7rem;}
    .pl-h{font-family:'Cormorant',serif;font-size:clamp(2rem,4vw,3.2rem);font-weight:300;color:#f5ede0;line-height:1.12;margin-bottom:.7rem;}
    .pl-h em{font-style:italic;color:var(--gold3);}
    .pl-p{font-family:'Cormorant',serif;font-style:italic;font-size:clamp(.95rem,1.4vw,1.08rem);color:rgba(245,237,224,.55);line-height:1.8;margin-bottom:1.8rem;}

    /* ─── PROCESS ────────────────────────────── */
    .process-sec{background:var(--bg);}
    .process-grid{
      display:grid;
      grid-template-columns:repeat(4,1fr);
      gap:1.5px;background:var(--ghost);
      margin-top:3rem;
      border-radius:var(--r2);overflow:hidden;
    }
    .pstep{
      background:var(--white);
      padding:clamp(1.5rem,3vw,2.5rem) 1.6rem;
      position:relative;transition:background .3s;
    }
    .pstep:hover{background:var(--goldlt);}
    .pstep-num{font-family:'Cormorant',serif;font-style:italic;font-size:3.2rem;color:rgba(184,147,42,.12);line-height:1;margin-bottom:1rem;transition:color .3s;}
    .pstep:hover .pstep-num{color:rgba(184,147,42,.3);}
    .pstep-ico{font-size:1.3rem;margin-bottom:.65rem;display:block;}
    .pstep h3{font-family:'Cormorant',serif;font-size:1.05rem;font-weight:500;color:var(--ink);margin-bottom:.35rem;}
    .pstep p{font-size:.76rem;color:var(--muted);line-height:1.68;}

    /* ─── FULL-WIDTH CTA ─────────────────────── */
    .cta-full{
      position:relative;overflow:hidden;
      min-height:clamp(320px,45vw,480px);
      display:flex;align-items:center;
      justify-content:center;text-align:center;
    }
    .cta-full-img{position:absolute;inset:0;}
    .cta-full-img img{width:100%;height:100%;object-fit:cover;}
    .cta-full-overlay{position:absolute;inset:0;background:rgba(15,13,10,.78);}
    .cta-full-content{position:relative;z-index:2;max-width:700px;padding:clamp(2rem,5vw,4rem) clamp(1.5rem,5vw,3rem);}
    .cta-full-content .sec-label{justify-content:center;}
    .cta-full-h{font-family:'Cormorant',serif;font-size:clamp(2.2rem,5vw,4rem);font-weight:300;color:#f5ede0;line-height:1.1;margin-bottom:.8rem;}
    .cta-full-h em{font-style:italic;color:var(--gold3);}
    .cta-full-p{font-family:'Cormorant',serif;font-style:italic;font-size:clamp(1rem,1.5vw,1.12rem);color:rgba(245,237,224,.5);margin-bottom:2rem;line-height:1.8;}
    .cta-btns{display:flex;gap:.8rem;justify-content:center;flex-wrap:wrap;}
    .btn-wa-lg{
      background:var(--wa);color:#fff;
      padding:.9rem 2.2rem;
      font-size:.64rem;letter-spacing:.2em;text-transform:uppercase;font-weight:500;
      display:inline-flex;align-items:center;gap:.6rem;
      border:none;transition:background .2s,transform .2s;
      border-radius:var(--r);
      box-shadow:0 4px 20px rgba(37,211,102,.3);
    }
    .btn-wa-lg:hover{background:var(--wa2);transform:translateY(-2px);}
    .btn-outline-lt{
      background:transparent;color:#f5ede0;
      padding:.9rem 2rem;
      font-size:.64rem;letter-spacing:.2em;text-transform:uppercase;font-weight:400;
      border:1px solid rgba(255,255,255,.22);
      display:inline-flex;align-items:center;gap:.6rem;
      transition:background .2s,transform .2s;
      border-radius:var(--r);
    }
    .btn-outline-lt:hover{background:rgba(255,255,255,.1);transform:translateY(-2px);}

    /* ─── CONTACT STRIP ──────────────────────── */
    .contact-strip{
      background:var(--ink2);
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:1px;background-color:var(--ink);
    }
    .cstrip-cell{
      background:var(--ink2);
      padding:2.2rem 2rem;
      display:flex;gap:1.1rem;align-items:flex-start;
      transition:background .3s;
    }
    .cstrip-cell:hover{background:rgba(255,255,255,.03);}
    .cstrip-icon{
      width:40px;height:40px;flex-shrink:0;
      background:rgba(212,174,80,.1);
      border:1px solid rgba(212,174,80,.2);
      display:flex;align-items:center;justify-content:center;
      font-size:.95rem;border-radius:var(--r);
    }
    .cstrip-lbl{font-size:.54rem;letter-spacing:.18em;text-transform:uppercase;color:rgba(245,237,224,.3);margin-bottom:.2rem;}
    .cstrip-val{font-size:.9rem;color:#f5ede0;letter-spacing:.02em;}
    .cstrip-sub{font-family:'Cormorant',serif;font-style:italic;font-size:.85rem;color:rgba(245,237,224,.35);margin-top:.1rem;}
    .btn-wa-strip{
      grid-column:1/-1;background:var(--wa);
      color:#fff;padding:1rem;border:none;
      font-family:'Montserrat',sans-serif;
      font-size:.64rem;letter-spacing:.2em;text-transform:uppercase;font-weight:500;
      display:flex;align-items:center;justify-content:center;gap:.6rem;
      transition:background .2s;
    }
    .btn-wa-strip:hover{background:var(--wa2);}

    /* ─── FOOTER ─────────────────────────────── */
    footer{background:var(--ink);padding:clamp(2.5rem,5vw,4rem) clamp(1.2rem,5vw,4rem) clamp(1.5rem,3vw,2.5rem);}
    .ft-grid{display:grid;grid-template-columns:1.5fr 1fr 1fr 1fr;gap:3rem;margin-bottom:2.8rem;}
    .ft-logo-name{font-family:'Cormorant',serif;font-size:1.4rem;font-weight:500;color:#f5ede0;margin-bottom:.15rem;}
    .ft-logo-sub{font-size:.47rem;letter-spacing:.26em;text-transform:uppercase;color:rgba(212,174,80,.6);margin-bottom:.75rem;}
    .ft-desc{font-size:.76rem;color:rgba(245,237,224,.38);line-height:1.75;}
    .ft-arabic{font-family:'Amiri',serif;font-size:1.05rem;color:rgba(184,147,42,.25);margin-top:.55rem;direction:rtl;}
    .ft-col h4{font-size:.52rem;letter-spacing:.22em;text-transform:uppercase;font-weight:500;color:rgba(212,174,80,.6);margin-bottom:.85rem;}
    .ft-col a,.ft-col p{display:block;font-size:.76rem;color:rgba(245,237,224,.35);margin-bottom:.42rem;transition:color .2s;line-height:1.5;}
    .ft-col a:hover{color:rgba(245,237,224,.7);}
    .ft-bottom{border-top:1px solid rgba(255,255,255,.06);padding-top:1.3rem;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:.8rem;}
    .ft-copy{font-size:.58rem;letter-spacing:.08em;color:rgba(245,237,224,.2);}
    .ft-wa{display:inline-flex;align-items:center;gap:.4rem;border:1px solid rgba(37,211,102,.2);color:rgba(100,210,140,.75);padding:.34rem .82rem;font-size:.58rem;letter-spacing:.1em;text-transform:uppercase;transition:background .2s;}
    .ft-wa:hover{background:rgba(37,211,102,.07);}

    /* ─── CART DRAWER ────────────────────────── */
    .overlay{position:fixed;inset:0;z-index:2000;background:rgba(0,0,0,.45);opacity:0;pointer-events:none;transition:opacity .3s;backdrop-filter:blur(4px);}
    .overlay.on{opacity:1;pointer-events:all;}
    .drawer{position:fixed;top:0;right:-110%;bottom:0;width:min(90vw,480px);background:var(--bg);border-left:1px solid var(--border);z-index:2001;display:flex;flex-direction:column;transition:right .4s cubic-bezier(.16,1,.3,1);box-shadow:-8px 0 40px rgba(0,0,0,.1);}
    .drawer.on{right:0;}
    .drh{padding:1.3rem 1.6rem;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;background:var(--white);}
    .drh h2{font-family:'Cormorant',serif;font-size:1.2rem;font-weight:500;color:var(--ink);}
    .drh-sub{font-size:.56rem;letter-spacing:.14em;text-transform:uppercase;color:var(--dim);margin-top:.18rem;}
    .drx{background:none;border:1px solid var(--ghost);color:var(--muted);width:32px;height:32px;border-radius:var(--r);font-size:.85rem;transition:background .2s,color .2s;}
    .drx:hover{background:var(--ink);color:#fff;}
    .drb{flex:1;overflow-y:auto;padding:1.1rem 1.6rem;}
    .dr-empty{text-align:center;padding:3.5rem 1rem;font-family:'Cormorant',serif;font-style:italic;font-size:1.05rem;color:var(--dim);line-height:1.7;}
    .dritem{display:flex;gap:.9rem;padding:1.05rem 0;border-bottom:1px solid var(--border);}
    .drico{font-size:1.75rem;width:40px;text-align:center;flex-shrink:0;}
    .drnm{font-family:'Cormorant',serif;font-size:.98rem;font-weight:500;color:var(--ink);margin-bottom:.12rem;}
    .drpr{font-size:.75rem;color:var(--gold);}
    .drqr{display:flex;align-items:center;gap:.42rem;margin-top:.38rem;}
    .qbtn{background:var(--bg);border:1px solid var(--ghost);color:var(--muted);width:24px;height:24px;border-radius:var(--r);font-size:.8rem;transition:.18s;}
    .qbtn:hover{background:var(--ink);color:#fff;border-color:var(--ink);}
    .qval{font-size:.78rem;color:var(--ink);min-width:20px;text-align:center;}
    .drrm{background:none;border:none;color:var(--dim);font-size:.68rem;transition:color .2s;}
    .drrm:hover{color:var(--rose);}
    .drf{padding:1.3rem 1.6rem;border-top:1px solid var(--border);background:var(--white);}
    .dinp{
      width:100%;background:var(--bg);
      border:1px solid var(--ghost);
      color:var(--ink);padding:.65rem .88rem;
      font-family:'Montserrat',sans-serif;font-size:.78rem;
      outline:none;transition:border-color .2s;margin-bottom:.6rem;
      border-radius:var(--r);
    }
    .dinp:focus{border-color:var(--gold2);}
    .dinp::placeholder{color:var(--dim);}
    .drtot{display:flex;justify-content:space-between;align-items:center;padding:.85rem 0;border-top:1px solid var(--border);margin-bottom:.85rem;}
    .drtot-l{font-size:.56rem;letter-spacing:.16em;text-transform:uppercase;color:var(--dim);}
    .drtot-v{font-family:'Cormorant',serif;font-size:1.45rem;color:var(--gold);}
    .btn-wa-dr{width:100%;background:var(--wa);color:#fff;border:none;padding:.88rem;font-family:'Montserrat',sans-serif;font-size:.62rem;letter-spacing:.18em;text-transform:uppercase;font-weight:500;display:flex;align-items:center;justify-content:center;gap:.52rem;transition:background .2s;border-radius:var(--r);}
    .btn-wa-dr:hover{background:var(--wa2);}
    .drnote{font-family:'Cormorant',serif;font-style:italic;font-size:.82rem;color:var(--dim);text-align:center;margin-top:.5rem;line-height:1.5;}

    /* ─── TOAST ──────────────────────────────── */
    .toast{position:fixed;bottom:2rem;left:50%;transform:translateX(-50%) translateY(40px);background:var(--ink);border-top:2px solid var(--gold);color:#f5ede0;padding:.65rem 1.8rem;font-size:.66rem;letter-spacing:.1em;z-index:3000;opacity:0;transition:.3s;pointer-events:none;white-space:nowrap;border-radius:var(--r);box-shadow:0 8px 30px rgba(0,0,0,.18);}
    .toast.on{transform:translateX(-50%) translateY(0);opacity:1;}

    /* ─── REVEAL ─────────────────────────────── */
    .rv{opacity:0;transform:translateY(22px);transition:opacity .8s ease,transform .8s ease;}
    .rv.vis{opacity:1;transform:translateY(0);}
    .d1{transition-delay:.1s;}.d2{transition-delay:.2s;}.d3{transition-delay:.3s;}.d4{transition-delay:.4s;}

    /* ─── MOBILE BREAKPOINTS ─────────────────── */
    @media(max-width:1024px){
      .hero{grid-template-columns:1fr;}
      .hero-img{min-height:55dvh;order:-1;}
      .hero-copy{padding:3rem 1.5rem 3.5rem;}
      .hero-copy::before{display:none;}
      nav .nav-links{display:none;}
      .nav-ham{display:flex;}
      nav{padding:0 1.2rem;}
      .split-sec{grid-template-columns:1fr;}
      .split-copy{padding:3rem 2rem;}
      .process-grid{grid-template-columns:1fr 1fr;}
      .ft-grid{grid-template-columns:1fr 1fr;}
      .contact-strip{grid-template-columns:1fr;}
      .feat-strip{grid-template-columns:1fr;}
      .feat-strip .feat-cell:not(:first-child){display:none;}
    }
    @media(max-width:640px){
      .hero-h1{font-size:2.6rem;}
      .process-grid{grid-template-columns:1fr;}
      .ft-grid{grid-template-columns:1fr;}
      .drawer{width:100%;}
      .hero-stats{flex-wrap:wrap;gap:1rem;}
      .hstat{min-width:40%;border-right:none!important;padding:0!important;}
      .pgrid{grid-template-columns:1fr;}
      .why-grid{grid-template-columns:1fr;}
      .cta-btns{flex-direction:column;align-items:center;}
    }
    @media(min-width:641px) and (max-width:900px){
      .pgrid{grid-template-columns:repeat(2,1fr);}
      .why-grid{grid-template-columns:repeat(2,1fr);}
    }


    .profile-dropdown {
      position: absolute;
      top: 100%;
      right: 0;
      margin-top: 0.5rem;
      background: white;
      border-radius: 1rem;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      min-width: 280px;
      opacity: 0;
      visibility: hidden;
      transform: translateY(-10px);
      transition: all 0.3s ease;
      z-index: 100;
  }

  .profile-dropdown.active {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
  }
</style>
</head>
<body>
<div id="c1"></div><div id="c2"></div>

<!-- TICKER -->
{{-- <div class="ticker">
  <div class="ticker-inner" id="tick">
    <span class="ti"><span class="dot"></span>Dubai · United Arab Emirates</span>
    <span class="ti"><span class="dot"></span>Luxury Arabian Fragrances</span>
    <span class="ti"><span class="dot"></span>100% Alcohol-Free · Halal</span>
    <span class="ti"><span class="dot"></span>Wholesale · MOQ 12 Units</span>
    <span class="ti"><span class="dot"></span>Pure Oud · Musk · Amber · Rose</span>
    <span class="ti"><span class="dot"></span>Private Label Available</span>
    <span class="ti"><span class="dot"></span>WhatsApp +971 50 000 0000</span>
    <span class="ti"><span class="dot"></span>Dubai · United Arab Emirates</span>
    <span class="ti"><span class="dot"></span>Luxury Arabian Fragrances</span>
    <span class="ti"><span class="dot"></span>100% Alcohol-Free · Halal</span>
    <span class="ti"><span class="dot"></span>Wholesale · MOQ 12 Units</span>
    <span class="ti"><span class="dot"></span>Pure Oud · Musk · Amber · Rose</span>
    <span class="ti"><span class="dot"></span>Private Label Available</span>
    <span class="ti"><span class="dot"></span>WhatsApp +971 50 000 0000</span>
  </div>
</div> --}}

<!-- NAV -->
<nav id="nav">
  <a href="#" class="logo">
    <span class="logo-name">Mama Perfumes</span>
    <span class="logo-sub">Wholesale Fragrances · Dubai</span>
  </a>
  <ul class="nav-links">
    <li><a href="#products">Collection</a></li>
    <li><a href="#story">Our Story</a></li>
    <li><a href="#process">How to Order</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <div class="nav-actions">
    <a href="https://wa.me/971500000000" target="_blank" class="btn-wa-nav">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      WhatsApp
    </a>
    @if(Auth::check())
        <!-- Profile Section -->
        <div class="relative" id="profile-container">
            <button onclick="toggleProfile()"
                class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-xl transition">
                
                <div
                    class="w-10 h-10 bg-black rounded-full flex items-center justify-center text-white font-bold">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>

                <div class="hidden md:block text-left">
                    <p class="text-sm font-semibold text-slate-900">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="text-xs text-slate-500">
                        {{ Auth::user()->role }}
                    </p>
                </div>

                <i class="fas fa-chevron-down text-slate-400 text-xs"></i>
            </button>

            <!-- Profile Dropdown -->
            <div class="profile-dropdown" id="profile-dropdown">
                <div class="p-4 border-b border-slate-100">
                    <p class="font-semibold text-slate-900">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="text-sm text-slate-500">
                        {{ Auth::user()->email }}
                    </p>
                </div>

                <div class="p-2">
                    <a href="/customer/profile"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-50 transition text-sm text-slate-700">
                        <i class="fas fa-user text-slate-400"></i>
                        My Profile
                    </a>

                    <a href="/customer/dashboard"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-50 transition text-sm text-slate-700">
                        <i class="fas fa-building text-slate-400"></i>
                        Dashboard
                    </a>
                </div>

                <div class="p-2 border-t border-slate-100">
                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-red-50 transition text-sm text-red-600">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @else
        <!-- Login/Register Button -->
        <button onclick="openModal('login')"
            class="px-5 py-2.5 text-sm font-medium bg-blue-900 text-white rounded-full hover:bg-blue-800 transition shadow-lg">
            Login / Registration
        </button>
    @endif
    <button class="btn-cart-nav" onclick="toggleCart()">
      Cart <span class="cbadge" id="cbadge">0</span>
    </button>
    <button class="nav-ham"><span></span><span></span><span></span></button>
  </div>
</nav>

<!-- HERO -->
{{-- <section class="hero" id="home">
  <!-- Left: Full image -->
  <div class="hero-img">
    <img src="https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?w=1200&q=85&fit=crop" alt="Luxury perfume bottles Dubai" loading="eager">
    <div class="hero-img-overlay"></div>
    <div class="hero-img-fade"></div>
    <!-- Floating chips -->
    <div class="hero-float hf1">
      <div class="fdot" style="background:#e8c868;"></div>
      <span class="ftxt">Halal Certified</span>
    </div>
    <div class="hero-float hf2">
      <div class="fdot" style="background:#4ab898;"></div>
      <span class="ftxt">Sourced in Dubai</span>
    </div>
  </div>
  <!-- Right: Copy -->
  <div class="hero-copy">
    <div class="hero-eyebrow">
      <div class="eyebrow-line"></div>
      <span class="eyebrow-text">Dubai · Middle East · Worldwide</span>
    </div>
    <div class="hero-arabic">عطور العود</div>
    <h1 class="hero-h1">Arabian<br><em>Luxury</em><br>Fragrances</h1>
    <div class="hero-rule"></div>
    <p class="hero-desc">Pure oud, musk, amber and rose — sourced from the finest origins across Arabia, India and the Far East. Shipped wholesale from Dubai.</p>
    <div class="hero-btns">
      <a href="#products" class="btn-primary">
        Explore Collection
        <svg width="13" height="13" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="https://wa.me/971500000000" target="_blank" class="btn-secondary">
        WhatsApp Enquiry
      </a>
    </div>
    <div class="hero-stats">
      <div class="hstat"><div class="hstat-val">50+</div><div class="hstat-lbl">Fragrances</div></div>
      <div class="hstat"><div class="hstat-val">MOQ12</div><div class="hstat-lbl">Per line</div></div>
      <div class="hstat"><div class="hstat-val">UAE</div><div class="hstat-lbl">Based</div></div>
      <div class="hstat"><div class="hstat-val">0%</div><div class="hstat-lbl">Alcohol</div></div>
    </div>
  </div>
</section> --}}

<!-- MARQUEE -->
{{-- <div class="mband">
  <div class="mband-inner" id="mband">
    <span class="mitem"><span class="mdot"></span>Pure Oud Al Hindi</span>
    <span class="mitem"><span class="mdot"></span>White Musk — Misk Al Abiyad</span>
    <span class="mitem"><span class="mdot"></span>Amber Resin — Anbar</span>
    <span class="mitem"><span class="mdot"></span>Rose of Taif</span>
    <span class="mitem"><span class="mdot"></span>Cambodian Oud</span>
    <span class="mitem"><span class="mdot"></span>Saffron & Oud Blend</span>
    <span class="mitem"><span class="mdot"></span>Dubai Sourced · Pure Oil · Halal</span>
    <span class="mitem"><span class="mdot"></span>Pure Oud Al Hindi</span>
    <span class="mitem"><span class="mdot"></span>White Musk — Misk Al Abiyad</span>
    <span class="mitem"><span class="mdot"></span>Amber Resin — Anbar</span>
    <span class="mitem"><span class="mdot"></span>Rose of Taif</span>
    <span class="mitem"><span class="mdot"></span>Cambodian Oud</span>
    <span class="mitem"><span class="mdot"></span>Saffron & Oud Blend</span>
    <span class="mitem"><span class="mdot"></span>Dubai Sourced · Pure Oil · Halal</span>
  </div>
</div> --}}
{{-- <div class="mband">
    <div class="mband-inner" id="mband">

        @foreach($products as $product)

            <span class="mitem">

                <span class="mdot"></span>

                {{ $product->title }}

            </span>

        @endforeach

    </div>
</div> --}}

{{-- <!-- FEATURE STRIP -->
<div class="feat-strip">
  <div class="feat-cell">
    <img src="https://images.unsplash.com/photo-1588405748880-12d1d2a59f75?w=600&q=85&fit=crop" alt="Luxury oud perfume">
    <div class="feat-cell-overlay"></div>
    <div class="feat-cell-label">
      <div class="fcl-sub">Signature Range</div>
      <div class="fcl-name">Pure Oud<br>Collection</div>
    </div>
  </div>
  <div class="feat-cell">
    <img src="https://images.unsplash.com/photo-1588405748880-12d1d2a59f75?w=600&q=85&fit=crop" alt="Musk perfume">
    <div class="feat-cell-overlay"></div>
    <div class="feat-cell-label">
      <div class="fcl-sub">Bestseller</div>
      <div class="fcl-name">White Musk<br>Series</div>
    </div>
  </div>
  <div class="feat-cell">
    <img src="https://images.unsplash.com/photo-1615634260167-c8cdede054de?w=600&q=85&fit=crop" alt="Rose amber perfume">
    <div class="feat-cell-overlay"></div>
    <div class="feat-cell-label">
      <div class="fcl-sub">Luxury Blend</div>
      <div class="fcl-name">Rose &<br>Amber</div>
    </div>
  </div>
</div> --}}
<!-- FEATURE STRIP -->
{{-- <div class="feat-strip">

    @foreach($products->take(3) as $product)

        <div class="feat-cell">

            <img 
                src="{{ $product->image }}" 
                alt="{{ $product->title }}"
            >

            <div class="feat-cell-overlay"></div>

            <div class="feat-cell-label">

                <div class="fcl-sub">

                    {{ $product->category->name ?? 'Luxury Fragrance' }}

                </div>

                <div class="fcl-name">

                    {{ $product->title }}

                </div>

            </div>

        </div>

    @endforeach

</div> --}}

<!-- PRODUCTS -->
<section class="prod-sec sec" id="products">
  <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1.4rem;">
    <div>
      <div class="sec-label rv">Wholesale Collection</div>
      <h2 class="sec-h2 rv">Luxury <em>Arabian</em><br>Fragrances</h2>
      <p class="sec-lead rv">Each fragrance is pure oil — no alcohol, no compromise. Sourced at origin, bottled in Dubai.</p>
    </div>
    <a href="https://wa.me/971500000000?text=Please%20send%20your%20full%20wholesale%20catalogue." target="_blank" class="btn-secondary rv" style="align-self:center;white-space:nowrap;">
      Request Catalogue →
    </a>
  </div>
  <div class="filter-row rv">
    <button class="flt on" onclick="filterP(this,'all')">All</button>
    <button class="flt" onclick="filterP(this,'oud')">Oud</button>
    <button class="flt" onclick="filterP(this,'musk')">Musk</button>
    <button class="flt" onclick="filterP(this,'amber')">Amber</button>
    <button class="flt" onclick="filterP(this,'rose')">Rose & Floral</button>
    <button class="flt" onclick="filterP(this,'blend')">Blends</button>
    <button class="flt" onclick="filterP(this,'attar')">Attar Oils</button>
  </div>
  <div class="pgrid" id="pgrid"></div>
</section>

<!-- SPLIT — STORY -->
<div class="split-sec" id="story">
  <div class="split-img">
    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=900&q=85&fit=crop&crop=center" alt="Dubai luxury fragrance sourcing">
    <div class="split-img-overlay"></div>
  </div>
  <div class="split-copy">
    <div class="split-label">Sourced & Shipped from Dubai</div>
    <h2 class="split-h rv">The Heart of<br>the <em>Middle East</em></h2>
    <p class="split-body rv">Our warehouse in Dubai positions us perfectly for fast, reliable shipping across the GCC, Middle East, UK, Europe and worldwide. Direct from source — no middlemen, no compromise on quality.</p>
    <div class="split-flags rv">
      <span class="sflag">🇦🇪 UAE</span>
      <span class="sflag">🇸🇦 Saudi Arabia</span>
      <span class="sflag">🇬🇧 United Kingdom</span>
      <span class="sflag">🇪🇺 Europe</span>
      <span class="sflag">🇵🇰 Pakistan</span>
      <span class="sflag">🇧🇩 Bangladesh</span>
      <span class="sflag">🌍 Worldwide</span>
    </div>
    <div class="split-stat-row rv">
      <div class="sstem"><span class="sv">50+</span><span class="sl">Fragrances</span></div>
      <div class="sstem"><span class="sv">500+</span><span class="sl">Clients</span></div>
      <div class="sstem"><span class="sv">8 yrs</span><span class="sl">Trading</span></div>
    </div>
  </div>
</div>

<!-- WHY US -->
<section class="why-sec sec">
  <div style="text-align:center;max-width:560px;margin:0 auto 0;">
    <div class="sec-label rv" style="justify-content:center;">Why Choose Us</div>
    <h2 class="sec-h2 rv" style="text-align:center;">Crafted for <em>Excellence</em></h2>
  </div>
  <div class="why-grid">
    <div class="why-card rv">
      <span class="wcard-num">I</span>
      <span class="wcard-icon">🏆</span>
      <div class="wcard-h">100% Alcohol-Free · Halal</div>
      <p class="wcard-p">Every fragrance is pure oil-based, non-alcoholic and halal certified. Safe for prayer, trusted globally.</p>
    </div>
    <div class="why-card rv d1">
      <span class="wcard-num">II</span>
      <span class="wcard-icon">🌿</span>
      <div class="wcard-h">Direct Source — No Middlemen</div>
      <p class="wcard-p">We work directly with growers and distillers across UAE, India, Saudi Arabia and Bangladesh.</p>
    </div>
    <div class="why-card rv d2">
      <span class="wcard-num">III</span>
      <span class="wcard-icon">✈️</span>
      <div class="wcard-h">Fast Global Shipping</div>
      <p class="wcard-p">Orders dispatched from Dubai within 24–48 hours. Full tracking worldwide. Reliable every time.</p>
    </div>
    <div class="why-card rv d3">
      <span class="wcard-num">IV</span>
      <span class="wcard-icon">🎨</span>
      <div class="wcard-h">Private Label Programme</div>
      <p class="wcard-p">Custom bottles, labels and gift boxes from MOQ 100 units. Build your own fragrance brand.</p>
    </div>
  </div>
</section>

<!-- PRIVATE LABEL BAND -->
<div class="pl-band">
  <div class="pl-band-img">
    <img src="https://images.unsplash.com/photo-1563170351-be82bc888aa4?w=1400&q=85&fit=crop" alt="Private label luxury perfume packaging">
  </div>
  <div class="pl-band-overlay"></div>
  <div class="pl-band-content">
    <div class="pl-lbl">Private Label Programme</div>
    <h2 class="pl-h rv">Launch Your Own<br><em>Fragrance Brand</em></h2>
    <p class="pl-p rv">Custom bottles, Arabic calligraphy labels, luxury gift boxes and branded packaging. Available from MOQ 100 units per fragrance.</p>
    <a href="https://wa.me/971500000000?text=I%27m%20interested%20in%20your%20private%20label%20programme." target="_blank" class="btn-primary rv">
      Enquire About Private Label
      <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </a>
  </div>
</div>

<!-- PROCESS -->
<section class="process-sec sec" id="process">
  <div style="text-align:center;max-width:520px;margin:0 auto;">
    <div class="sec-label rv" style="justify-content:center;">Simple Process</div>
    <h2 class="sec-h2 rv" style="text-align:center;">Order in <em>4 Steps</em></h2>
    <p class="sec-lead rv" style="max-width:400px;margin:0 auto;text-align:center;">Add to cart and send via WhatsApp — confirmed within the hour.</p>
  </div>
  <div class="process-grid">
    <div class="pstep rv">
      <div class="pstep-num">01</div>
      <span class="pstep-ico">🕌</span>
      <h3>Browse & Select</h3>
      <p>Explore our full collection of luxury attars and blends. Add with your desired quantity.</p>
    </div>
    <div class="pstep rv d1">
      <div class="pstep-num">02</div>
      <span class="pstep-ico">🛍</span>
      <h3>Build Your Order</h3>
      <p>Enter your business name. Minimum 12 units per product line. Mix fragrances freely.</p>
    </div>
    <div class="pstep rv d2">
      <div class="pstep-num">03</div>
      <span class="pstep-ico">💬</span>
      <h3>Send via WhatsApp</h3>
      <p>Your cart goes directly to us. We confirm and send a proforma invoice within the hour.</p>
    </div>
    <div class="pstep rv d3">
      <div class="pstep-num">04</div>
      <span class="pstep-ico">📦</span>
      <h3>Pay & We Ship</h3>
      <p>Bank transfer or payment link. Dispatched from Dubai in 24–48 hours with full tracking.</p>
    </div>
  </div>
</section>

<!-- FULL-WIDTH CTA -->
<div class="cta-full">
  <div class="cta-full-img">
    <img src="https://images.unsplash.com/photo-1590156206657-aec4e8df5f5c?w=1400&q=85&fit=crop" alt="Luxury perfume Dubai wholesale">
  </div>
  <div class="cta-full-overlay"></div>
  <div class="cta-full-content">
    <div class="sec-label rv" style="justify-content:center;">Order Direct from Dubai</div>
    <h2 class="cta-full-h rv">Where Luxury Meets<br><em>Tradition</em></h2>
    <p class="cta-full-p rv">WhatsApp your order. Confirmed within the hour. Shipped from Dubai within 48 hours.</p>
    <div class="cta-btns rv">
      <a href="https://wa.me/971500000000?text=Assalamu%20Alaikum%2C%20I%27d%20like%20to%20place%20a%20wholesale%20fragrance%20order." target="_blank" class="btn-wa-lg">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        WhatsApp Us Now
      </a>
      <a href="#products" class="btn-outline-lt">Browse Collection</a>
    </div>
  </div>
</div>

<!-- CONTACT STRIP -->
<div class="contact-strip" id="contact">
  <div class="cstrip-cell">
    <div class="cstrip-icon">💬</div>
    <div>
      <div class="cstrip-lbl">WhatsApp Orders</div>
      <div class="cstrip-val">+971 50 000 0000</div>
      <div class="cstrip-sub">Reply within the hour, 9am–7pm GST</div>
    </div>
  </div>
  <div class="cstrip-cell">
    <div class="cstrip-icon">📧</div>
    <div>
      <div class="cstrip-lbl">Email</div>
      <div class="cstrip-val">orders@nooraloud.com</div>
      <div class="cstrip-sub">Catalogue & trade enquiries</div>
    </div>
  </div>
  <div class="cstrip-cell">
    <div class="cstrip-icon">📍</div>
    <div>
      <div class="cstrip-lbl">Location</div>
      <div class="cstrip-val">Dubai, UAE</div>
      <div class="cstrip-sub">Dispatch within 24–48 hrs</div>
    </div>
  </div>
  <button class="btn-wa-strip" onclick="window.open('https://wa.me/971500000000?text=Assalamu%20Alaikum%2C%20I%27d%20like%20to%20place%20a%20wholesale%20order.','_blank')">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    Place Your Wholesale Order via WhatsApp
  </button>
</div>

<!-- FOOTER -->
<footer>
  <div class="ft-grid">
    <div>
      <div class="ft-logo-name">Mama Perfumes</div>
      <div class="ft-logo-sub">Luxury Fragrances — Wholesale Dubai</div>
      <div class="ft-desc">Dubai-based wholesale supplier of luxury Arabian fragrances. Pure oud, musk, amber and rose — sourced across the Middle East, shipped worldwide.</div>
      <div class="ft-arabic">نور العود · عطور فاخرة</div>
    </div>
    <div class="ft-col">
      <h4>Collection</h4>
      <a href="#products">Pure Oud</a>
      <a href="#products">White Musk</a>
      <a href="#products">Amber & Anbar</a>
      <a href="#products">Rose & Floral</a>
      <a href="#products">Blends</a>
      <a href="#products">Attar Oils</a>
    </div>
    <div class="ft-col">
      <h4>Wholesale</h4>
      <a href="#process">How to Order</a>
      <a href="#story">Private Label</a>
      <p>MOQ: 12 units per line</p>
      <p>Payment: Bank Transfer / Card</p>
      <p>Dispatch: 24–48 hrs Dubai</p>
    </div>
    <div class="ft-col">
      <h4>Contact</h4>
      <a href="https://wa.me/971500000000" target="_blank">+971 50 000 0000</a>
      <a href="mailto:orders@nooraloud.com">orders@nooraloud.com</a>
      <p>Dubai, United Arab Emirates</p>
      <p>Mon–Sat · 9am–7pm GST</p>
    </div>
  </div>
  <div class="ft-bottom">
    <div class="ft-copy">© 2025 The Nexteck. All rights reserved. Halal certified · Alcohol-free · Dubai, UAE.</div>
    <a href="https://wa.me/971500000000" target="_blank" class="ft-wa">
      <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      WhatsApp Order
    </a>
  </div>
</footer>

<!-- CART DRAWER -->
<div class="overlay" id="ov" onclick="toggleCart()"></div>
<div class="drawer" id="drawer">
  <div class="drh">
    <div>
      <h2>Wholesale Order</h2>
      <div class="drh-sub">Minimum 12 units per line</div>
    </div>
    <button class="drx" onclick="toggleCart()">✕</button>
  </div>
  <div class="drb" id="drb">
    <div class="dr-empty">Your order is empty.<br>Browse the collection to begin.</div>
  </div>
  <div class="drf">
    <input class="dinp" id="bizName" value="{{ Auth::user()->business_name ?? '' }}" placeholder="Business / Shop Name *" type="text">
    <input class="dinp" id="bizPhone" value="{{ Auth::user()->phone ?? '' }}" placeholder="WhatsApp / Phone Number" type="tel">
    <div class="drtot">
      <span class="drtot-l">Estimated Total</span>
      <span class="drtot-v" id="dtotal">£ 0</span>
    </div>
    <button class="btn-wa-dr" onclick="sendOrder()">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Send Order via WhatsApp
    </button>
    <div class="drnote">Prices in £ · Proforma invoice provided on WhatsApp</div>
  </div>
</div>

<!-- MODAL -->
    <div id="modal-overlay"
        class="fixed inset-0 bg-black/50 backdrop-blur z-50 opacity-0 pointer-events-none transition-opacity"
        onclick="closeModal()"></div>
    <div id="modal"
        class="fixed inset-0 z-[9999] flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity  ">
        <div class="bg-white rounded-3xl max-w-md w-full p-8 transform scale-95 transition-transform overflow-y-auto h-[98vh]"
            id="modal-content">

            <!-- Tab Navigation -->
            <div class="flex mb-6 bg-slate-100 rounded-xl p-1">
                <button onclick="switchTab('login')" id="tab-login"
                    class="flex-1 py-3 px-4 rounded-lg text-sm font-medium transition-all duration-300 text-slate-600 hover:text-slate-900">
                    Trade Login
                </button>
                <button onclick="switchTab('register')" id="tab-register"
                    class="flex-1 py-3 px-4 rounded-lg text-sm font-medium transition-all duration-300 bg-white text-blue-900 shadow-sm">
                    Open Account
                </button>
            </div>

            <!-- Close Button -->
            <div class="absolute top-6 right-6">
                <button onclick="closeModal()"
                    class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center hover:bg-slate-200 transition">
                    <i class="fas fa-times text-slate-600"></i>
                </button>
            </div>

            <!-- Login Form -->
            <div id="form-login" class="hidden">
                <div class="text-center mb-6">
                    <h3 class="font-display text-2xl font-bold text-slate-900 mb-2">Welcome Back</h3>
                    <p class="text-sm text-slate-500">Sign in to access your trade account and pricing</p>
                </div>
                {{-- <form onsubmit="event.preventDefault(); handleLogin();"> --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Business Email</label>
                                <input type="email" name="email" id="login-email"
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border-2 border-slate-200 focus:border-blue-900 focus:outline-none transition"
                                    placeholder="your@business.com" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                                <div class="relative">
                                    <input type="password" name='password' id="login-password"
                                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border-2 border-slate-200 focus:border-blue-900 focus:outline-none transition"
                                        placeholder="••••••••" required>
                                    <button type="button" onclick="togglePassword('login-password')"
                                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-slate-400 hover:text-slate-600">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox"
                                        class="w-4 h-4 rounded border-slate-300 text-blue-900 focus:ring-blue-900">
                                    <span class="text-slate-600">Remember me</span>
                                </label>
                                <a href="#" onclick="showForgotPassword()"
                                    class="text-blue-900 font-medium hover:underline">Forgot password?</a>
                            </div>
                            <button type="submit"
                                class="w-full py-4 bg-blue-900 text-white rounded-xl font-bold hover:bg-blue-800 transition shadow-lg shadow-blue-900/20">
                                Sign In
                            </button>
                            {{-- onclick="window.location.href='main.html'" --}}
                        </div>
                    </form>
                    <div class="mt-6 pt-6 border-t border-slate-200 text-center">
                        <p class="text-sm text-slate-500 mb-3">Don't have a trade account?</p>
                        <button onclick="switchTab('register')" class="text-blue-900 font-medium hover:underline">
                            Register your business <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>
            </div>

            <!-- Register Form (Original) -->
            <div id="form-register">
                <div class="text-center mb-6">
                    <h3 class="font-display text-2xl font-bold text-slate-900 mb-2">Open Trade Account</h3>
                </div>
                <form action="{{ route('register-customer') }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Business Name</label>
                            <input type="text" name="business_name"
                                class="w-full px-4 py-3 rounded-xl bg-slate-50 border-2 border-slate-200 focus:border-blue-900 focus:outline-none transition"
                                placeholder="Your Business Ltd" required>
                        </div>
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Full Name</label>
                                <input type="text" name="name"
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border-2 border-slate-200 focus:border-blue-900 focus:outline-none transition"
                                    placeholder="John Smith" required>
                            </div>
                            {{-- <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Last Name</label>
                                <input type="text" id="reg-lastname"
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border-2 border-slate-200 focus:border-blue-900 focus:outline-none transition"
                                    placeholder="Smith" required>
                            </div> --}}
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Business Email</label>
                            <input type="email" name="email"
                                class="w-full px-4 py-3 rounded-xl bg-slate-50 border-2 border-slate-200 focus:border-blue-900 focus:outline-none transition"
                                placeholder="john@yourbusiness.com" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Phone</label>
                            <input type="tel" name="phone"
                                class="w-full px-4 py-3 rounded-xl bg-slate-50 border-2 border-slate-200 focus:border-blue-900 focus:outline-none transition"
                                placeholder="020 7946 0958" required>
                        </div>

                        <div class="flex items-start gap-3">
                            <input type="checkbox" id="reg-terms"
                                class="w-4 h-4 mt-1 rounded border-slate-300 text-blue-900 focus:ring-blue-900"
                                required>
                            <label for="reg-terms" class="text-sm text-slate-600">
                                I agree to the <a href="#" class="text-blue-900 font-medium hover:underline">Terms of
                                    Trade</a> and confirm this is a legitimate business enquiry
                            </label>
                        </div>
                        <button type="submit"
                            class="w-full py-4 bg-blue-900 text-white rounded-xl font-bold hover:bg-blue-800 transition shadow-lg shadow-blue-900/20">
                            Submit Application
                        </button>

                    </div>
                </form>
                <div class="mt-6 pt-6 border-t border-slate-200 text-center">
                    <p class="text-sm text-slate-500 mb-3">Already have an account?</p>
                    <button onclick="switchTab('login')" class="text-blue-900 font-medium hover:underline">
                        Sign in here <i class="fas fa-arrow-right ml-1"></i>
                    </button>
                </div>
            </div>

            <!-- Forgot Password Form -->
            <div id="form-forgot" class="hidden">
                <div class="text-center mb-6">
                    <button onclick="switchTab('login')"
                        class="text-sm text-slate-500 hover:text-blue-900 mb-4 flex items-center gap-2">
                        <i class="fas fa-arrow-left"></i> Back to login
                    </button>
                    <h3 class="font-display text-2xl font-bold text-slate-900 mb-2">Reset Password</h3>
                    <p class="text-sm text-slate-500">Enter your email and we'll send you a reset link</p>
                </div>
                <form onsubmit="event.preventDefault(); handleForgotPassword();">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Business Email</label>
                            <input type="email" id="forgot-email"
                                class="w-full px-4 py-3 rounded-xl bg-slate-50 border-2 border-slate-200 focus:border-blue-900 focus:outline-none transition"
                                required>
                        </div>
                        <button type="submit"
                            class="w-full py-4 bg-blue-900 text-white rounded-xl font-bold hover:bg-blue-800 transition">
                            Send Reset Link
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

<div class="toast" id="toast"></div>

@if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}",
                confirmButtonColor: '#3085d6'
            });
        </script>
@endif

@if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session('error') }}",
                confirmButtonColor: '#d33'
            });
        </script>
@endif

<script>

// Profile dropdown
        function toggleProfile() {
            const dropdown = document.getElementById('profile-dropdown');
            dropdown.classList.toggle('active');
        }

        // Close profile when clicking outside
        document.addEventListener('click', (e) => {
            const container = document.getElementById('profile-container');
            const dropdown = document.getElementById('profile-dropdown');
            if (!container.contains(e.target)) {
                dropdown.classList.remove('active');
            }
        });
        // Tab switching functionality
        function switchTab(tab) {
            const loginTab = document.getElementById('tab-login');
            const registerTab = document.getElementById('tab-register');
            const loginForm = document.getElementById('form-login');
            const registerForm = document.getElementById('form-register');
            const forgotForm = document.getElementById('form-forgot');

            // Reset all forms
            forgotForm.classList.add('hidden');

            if (tab === 'login') {
                loginTab.classList.add('bg-white', 'text-blue-900', 'shadow-sm');
                loginTab.classList.remove('text-slate-600');
                registerTab.classList.remove('bg-white', 'text-blue-900', 'shadow-sm');
                registerTab.classList.add('text-slate-600');

                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
            } else {
                registerTab.classList.add('bg-white', 'text-blue-900', 'shadow-sm');
                registerTab.classList.remove('text-slate-600');
                loginTab.classList.remove('bg-white', 'text-blue-900', 'shadow-sm');
                loginTab.classList.add('text-slate-600');

                registerForm.classList.remove('hidden');
                loginForm.classList.add('hidden');
            }
        }
        // Open modal
        function openModal(type) {
            const overlay = document.getElementById('modal-overlay');
            const modal = document.getElementById('modal');
            const content = document.getElementById('modal-content');

            // Show tabs
            document.querySelector('.flex.mb-6').classList.remove('hidden');

            // Switch to appropriate tab
            if (type === 'login') {
                switchTab('login');
            } else {
                switchTab('register');
            }

            overlay.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.remove('opacity-0', 'pointer-events-none');
            content.classList.remove('scale-95');
            content.classList.add('scale-100');
        }

        // Close modal
        function closeModal() {
            const overlay = document.getElementById('modal-overlay');
            const modal = document.getElementById('modal');
            const content = document.getElementById('modal-content');

            overlay.classList.add('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-0', 'pointer-events-none');
            content.classList.remove('scale-100');
            content.classList.add('scale-95');

            // Reset to register tab after close
            setTimeout(() => {
                document.querySelector('.flex.mb-6').classList.remove('hidden');
                switchTab('register');
            }, 300);
        }


const WA='971500000000';


const IMGS={
  oud:'https://images.unsplash.com/photo-1541643600914-78b084683702?w=500&q=80&fit=crop',
  musk:'https://images.unsplash.com/photo-1588405748880-12d1d2a59f75?w=500&q=80&fit=crop',
  amber:'https://images.unsplash.com/photo-1615634260167-c8cdede054de?w=500&q=80&fit=crop',
  rose:'https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500&q=80&fit=crop',
  blend:'https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?w=500&q=80&fit=crop',
  attar:'https://images.unsplash.com/photo-1563170351-be82bc888aa4?w=500&q=80&fit=crop',
};

const products = {!! json_encode(
    $products->map(function ($p) {
        return [
            'id' => $p->id,
            'name' => $p->title,
            'arabic' => $p->brand ?? '',
            'desc' => $p->description,
            'price' => $p->price,
            'moq' => $p->moq,
            'image' => $p->image,

            'cat' => strtolower(
                str_replace(
                    [' & ', ' '],
                    ['-', '-'],
                    $p->category->name ?? 'other'
                )
            ),

            'notes' => $p->locations->map(function ($l) {
                return "Qty ".$l->quantity;
            })->take(3)->values(),

            'badge' => 'bestseller'
        ];
    })
) !!};

// const products=[
//   {id:1,name:'Oud Al Hindi',arabic:'عود الهندي',cat:'oud',badge:'bestseller',price:85,moq:12,desc:'Raw Indian oud — deep, smoky, earthy. The king of fragrances. Lasts 8–12 hours on skin.',notes:['Woody','Smoky','Earthy','Deep']},
//   {id:2,name:'White Musk',arabic:'مسك الأبيض',cat:'musk',badge:'new',price:45,moq:12,desc:'Pure white musk — clean, soft and intimate. Perfect for everyday wear.',notes:['Clean','Soft','Intimate','Light']},
//   {id:3,name:'Amber Resin',arabic:'العنبر',cat:'amber',badge:'',price:55,moq:12,desc:'Warm, sweet amber — ancient anbar traded across the Peninsula for centuries.',notes:['Warm','Sweet','Resinous','Rich']},
//   {id:4,name:'Rose of Taif',arabic:'ورد الطائف',cat:'rose',badge:'new',price:95,moq:12,desc:'The most prized rose in the Arabian world, grown in the mountains of Taif, Saudi Arabia.',notes:['Floral','Luxurious','Sweet','Royal']},
//   {id:5,name:'Oud Al Cambodi',arabic:'عود كمبودي',cat:'oud',badge:'hot',price:120,moq:6,desc:'Premium Cambodian oud — sweet, fruity and smooth. One of the most sought-after varieties worldwide.',notes:['Sweet','Fruity','Smooth','Premium']},
//   {id:6,name:'Musk Al Tahara',arabic:'مسك الطهارة',cat:'musk',badge:'bestseller',price:38,moq:24,desc:'Pure musk of purity — lightly sweet, barely there. Beloved for daily fragrance.',notes:['Pure','Soft','Clean','Light']},
//   {id:7,name:'Saffron & Oud',arabic:'زعفران وعود',cat:'blend',badge:'',price:75,moq:12,desc:'Royal saffron blended with pure oud — a classic Arabian luxury fragrance.',notes:['Spicy','Royal','Warm','Majestic']},
//   {id:8,name:'Henna Blossom',arabic:'الحناء',cat:'rose',badge:'',price:42,moq:24,desc:'Fresh henna flower — earthy, green and subtly floral. Traditional and nostalgic.',notes:['Earthy','Green','Floral','Traditional']},
//   {id:9,name:'Anbar Blend',arabic:'عنبر بلند',cat:'amber',badge:'new',price:68,moq:12,desc:'Rich amber with musk and a touch of rose. Sophisticated, complex, long-lasting.',notes:['Complex','Warm','Lasting','Sophisticated']},
//   {id:10,name:'Pure Oud Oil',arabic:'زيت العود',cat:'attar',badge:'hot',price:200,moq:6,desc:'100% pure oud oil — undiluted, no fillers. A single drop lasts all day.',notes:['Pure','Concentrated','Lasting','Luxury']},
//   {id:11,name:'Musk Al Haramain',arabic:'مسك الحرمين',cat:'musk',badge:'bestseller',price:52,moq:12,desc:'Soft musk with a hint of sandalwood — sacred, clean and devotional.',notes:['Sacred','Soft','Sandalwood','Clean']},
//   {id:12,name:'Attar Collection',arabic:'مجموعة العطور',cat:'attar',badge:'',price:35,moq:24,desc:'Six classic attars in one retail-ready set — oud, musk, rose, amber, saffron and jasmine.',notes:['Variety','Gift','Classic','Retail']},
// ];

// let cart={},catF='all';

// function imgFor(cat){return IMGS[cat]||IMGS.blend;}

// function renderP(){
//   const g=document.getElementById('pgrid');
//   const list=catF==='all'?products:products.filter(p=>p.cat===catF);
//   const bm={
//     bestseller:'<div class="pbadge bs">⭐ Bestseller</div>',
//     new:'<div class="pbadge nw">New In</div>',
//     hot:'<div class="pbadge ht">🔥 Hot</div>',
//   };
//   g.innerHTML=list.map(p=>{
//     const ic=cart[p.id]?cart[p.id].qty:0;
//     return`<div class="pcard">
//       <div class="pcard-img">
//         <img src="${imgFor(p.cat)}" alt="${p.name}" loading="lazy">
//         <div class="pcard-img-overlay"></div>
//         ${p.badge?`<div class="pcard-badge-wrap">${bm[p.badge]}</div>`:''}
//       </div>
//       <div class="pcard-body">
//         <div class="pcard-name">${p.name}</div>
//         <div class="pcard-arabic">${p.arabic}</div>
//         <div class="pcard-desc">${p.desc}</div>
//         <div class="pcard-notes">${p.notes.map(n=>`<span class="pnote">${n}</span>`).join('')}</div>
//         <div class="pcard-foot">
//           <div class="pcard-price">
//             <span class="pv">£ ${p.price}</span><span class="pu">/ unit</span>
//             <span class="pm">Min. ${p.moq} units</span>
//           </div>
//           <button class="btn-add${ic>0?' in':''}" onclick="addItem(${p.id})" id="pb${p.id}">
//             ${ic>0?`In Order (${ic})`:'+ Add'}
//           </button>
//         </div>
//       </div>
//     </div>`;
//   }).join('');
// }

// function filterP(b,c){
//   document.querySelectorAll('.flt').forEach(x=>x.classList.remove('on'));
//   b.classList.add('on');catF=c;renderP();
// }



const categories = {!! json_encode(
    $categories->map(function ($c) {
        return [
            'id' => $c->id,
            'name' => $c->name,
            'slug' => strtolower(
                str_replace(
                    [' & ', ' '],
                    ['-', '-'],
                    $c->name
                )
            )
        ];
    })
) !!};

let cart = {};
let catF = 'all';

function renderFilters() {

    const filterRow = document.querySelector('.filter-row');

    filterRow.innerHTML = `
        <button class="flt on" onclick="filterP(this,'all')">
            All
        </button>
    `;

    categories.forEach(cat => {

        filterRow.innerHTML += `
            <button class="flt" onclick="filterP(this,'${cat.slug}')">
                ${cat.name}
            </button>
        `;

    });

}

function renderP(){

    const g = document.getElementById('pgrid');

    const list = catF === 'all'
        ? products
        : products.filter(p => p.cat === catF);

    const bm = {
        bestseller:'<div class="pbadge bs">⭐ Bestseller</div>',
        new:'<div class="pbadge nw">New In</div>',
        hot:'<div class="pbadge ht">🔥 Hot</div>',
    };

    g.innerHTML = list.map(p => {

        const ic = cart[p.id] ? cart[p.id].qty : 0;

        return `
        <div class="pcard">

            <div class="pcard-img">

                <img 
                    src="${p.image}" 
                    alt="${p.name}" 
                    loading="lazy"
                >

                <div class="pcard-img-overlay"></div>

                ${p.badge
                    ? `<div class="pcard-badge-wrap">${bm[p.badge]}</div>`
                    : ''
                }

            </div>

            <div class="pcard-body">

                <div class="pcard-name">${p.name}</div>

                <div class="pcard-arabic">${p.arabic}</div>

                <div class="pcard-desc">
                    ${p.desc ?? ''}
                </div>

                <div class="pcard-notes">

                    ${p.notes.map(n => `
                        <span class="pnote">${n}</span>
                    `).join('')}

                </div>

                <div class="pcard-foot">

                    <div class="pcard-price">

                        <span class="pv">
                            £ ${p.price}
                        </span>

                        <span class="pu">
                            / unit
                        </span>

                        <span class="pm">
                            Min. ${p.moq} units
                        </span>

                    </div>

                    <button 
                        class="btn-add ${ic > 0 ? 'in' : ''}" 
                        onclick="addItem(${p.id})" 
                        id="pb${p.id}"
                    >

                        ${ic > 0
                            ? `In Order (${ic})`
                            : '+ Add'
                        }

                    </button>

                </div>

            </div>

        </div>
        `;

    }).join('');

}

function filterP(b, c){

    document
        .querySelectorAll('.flt')
        .forEach(x => x.classList.remove('on'));

    b.classList.add('on');

    catF = c;

    renderP();

}

// function addItem(id){
//   const p=products.find(x=>x.id===id);
//   if(!cart[id])cart[id]={...p,qty:p.moq};
//   else cart[id].qty+=p.moq;
//   updateCart();showToast(`${p.name} — ${cart[id].qty} units added`);
//   const b=document.getElementById('pb'+id);
//   if(b){b.classList.add('in');b.textContent=`In Order (${cart[id].qty})`;}
// }

// function updateCart(){
//   const items=Object.values(cart);
//   const total=items.reduce((s,i)=>s+i.qty*i.price,0);
//   document.getElementById('cbadge').textContent=items.length;
//   document.getElementById('dtotal').textContent=`£ ${total.toLocaleString()}`;
//   const body=document.getElementById('drb');
//   if(!items.length){body.innerHTML='<div class="dr-empty">Your order is empty.<br>Browse the collection to begin.</div>';return;}
//   body.innerHTML=items.map(it=>`
//     <div class="dritem">
//       <div class="drico">🫙</div>
//       <div style="flex:1">
//         <div class="drnm">${it.name}</div>
//         <div class="drpr">£ ${it.price} × ${it.qty} = £ ${(it.price*it.qty).toLocaleString()}</div>
//         <div class="drqr">
//           <button class="qbtn" onclick="adjQ(${it.id},-${it.moq})">−</button>
//           <span class="qval">${it.qty}</span>
//           <button class="qbtn" onclick="adjQ(${it.id},${it.moq})">+</button>
//           <button class="drrm" onclick="remItem(${it.id})">Remove</button>
//         </div>
//       </div>
//     </div>`).join('');
// }

// function adjQ(id,d){
//   if(!cart[id])return;
//   cart[id].qty=Math.max(cart[id].moq,cart[id].qty+d);
//   updateCart();
//   const b=document.getElementById('pb'+id);
//   if(b)b.textContent=`In Order (${cart[id].qty})`;
// }

// function remItem(id){
//   delete cart[id];updateCart();
//   const b=document.getElementById('pb'+id);
//   if(b){b.classList.remove('in');b.textContent='+ Add';}
// }




async function addItem(id) {
    @if(!Auth::check())

        openModal('login');

        return;

    @endif

    const p = products.find(x => x.id === id);

    try {

        const response = await fetch('/add-to-cart', {

            method: 'POST',

            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute('content')
            },

            body: JSON.stringify({
                product_id: id,
                quantity: p.moq
            })

        });

        const data = await response.json();

        if (data.status) {

            showToast(`${p.name} added to cart`);

            loadCart();

        }

    } catch (error) {

        console.log(error);

    }

}

async function loadCart() {

    try {

        const response = await fetch('/cart-items');

        const result = await response.json();

        if (!result.status) return;

        cart = {};

        result.data.forEach(item => {

            cart[item.product.id] = {

                cart_id: item.id,

                id: item.product.id,

                name: item.product.title,

                arabic: item.product.brand ?? '',

                price: item.product.price,

                moq: item.product.moq,

                qty: item.quantity

            };

        });

        updateCart();

    } catch (error) {

        console.log(error);

    }

}

function updateCart(){

    const items = Object.values(cart);

    const total = items.reduce((s, i) => {

        return s + (i.qty * i.price);

    }, 0);

    document.getElementById('cbadge').textContent =
        items.length;

    document.getElementById('dtotal').textContent =
        `£ ${total.toLocaleString()}`;

    const body = document.getElementById('drb');

    if (!items.length) {

        body.innerHTML = `
            <div class="dr-empty">
                Your order is empty.<br>
                Browse the collection to begin.
            </div>
        `;

        return;

    }

    body.innerHTML = items.map(it => `

        <div class="dritem">

            <div class="drico">🫙</div>

            <div style="flex:1">

                <div class="drnm">
                    ${it.name}
                </div>

                <div class="drpr">

                    £ ${it.price}
                    ×
                    ${it.qty}

                    =

                    £ ${(it.price * it.qty)
                        .toLocaleString()}

                </div>

                <div class="drqr">

                    <button
                        class="qbtn"
                        onclick="adjQ(
                            ${it.id},
                            -${it.moq}
                        )"
                    >
                        −
                    </button>

                    <span class="qval">
                        ${it.qty}
                    </span>

                    <button
                        class="qbtn"
                        onclick="adjQ(
                            ${it.id},
                            ${it.moq}
                        )"
                    >
                        +
                    </button>

                    <button
                        class="drrm"
                        onclick="remItem(${it.cart_id})"
                    >
                        Remove
                    </button>

                </div>

            </div>

        </div>

    `).join('');

    // UPDATE PRODUCT BUTTONS

    products.forEach(p => {

        const btn = document.getElementById('pb' + p.id);

        if (!btn) return;

        if (cart[p.id]) {

            btn.classList.add('in');

            btn.textContent =
                `In Order (${cart[p.id].qty})`;

        } else {

            btn.classList.remove('in');

            btn.textContent = '+ Add';

        }

    });

}

async function adjQ(id, qty) {

    try {

        const response = await fetch('/add-to-cart', {

            method: 'POST',

            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute('content')
            },

            body: JSON.stringify({
                product_id: id,
                quantity: qty
            })

        });

        const data = await response.json();

        if (data.status) {

           await loadCart();

        }

    } catch (error) {

        console.log(error);

    }

}

async function remItem(id){

    try {

        const response = await fetch(`/remove-cart/${id}`, {

            method: 'DELETE',

            headers: {
                'X-CSRF-TOKEN': document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute('content')
            }

        });

        const data = await response.json();

        if (data.status) {

            showToast('Item removed');

            loadCart();

        }

    } catch (error) {

        console.log(error);

    }

}


function toggleCart(){
  document.getElementById('ov').classList.toggle('on');
  document.getElementById('drawer').classList.toggle('on');
}

// function sendOrder(){
//   const items=Object.values(cart);
//   if(!items.length){showToast('Please add products to your order first.');return;}
//   const biz=document.getElementById('bizName').value.trim()||'Not provided';
//   const ph=document.getElementById('bizPhone').value.trim()||'Not provided';
//   const total=items.reduce((s,i)=>s+i.qty*i.price,0);
//   let m=`Assalamu Alaikum 🕌\n\n*WHOLESALE ORDER — Noor Al Oud*\n\n🏪 *Business:* ${biz}\n📱 *Contact:* ${ph}\n\n*ORDER:*\n`;
//   items.forEach(i=>{m+=`• ${i.name} (${i.arabic}) × ${i.qty} units @ £ ${i.price} = £ ${(i.qty*i.price).toLocaleString()}\n`;});
//   m+=`\n💰 *Est. Total: £ ${total.toLocaleString()}*\n\nPlease confirm and send proforma invoice. JazakAllah Khair.`;
//   window.open(`https://wa.me/${WA}?text=${encodeURIComponent(m)}`,'_blank');
// }

async function sendOrder(){

    const items = Object.values(cart);

    if(!items.length){

        showToast('Please add products to your order first.');

        return;
    }

    try {

        // PLACE ORDER API

        const response = await fetch('/place-order-new', {

            method: 'POST',

            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute('content')
            }

        });

        const data = await response.json();

        if(!data.status){

            showToast(data.message);

            return;
        }

        const biz =
            document.getElementById('bizName')
            .value.trim() || 'Not provided';

        const ph =
            document.getElementById('bizPhone')
            .value.trim() || 'Not provided';

        const total = items.reduce((s,i)=>{

            return s + (i.qty * i.price);

        },0);

        let m =
`Assalamu Alaikum 🕌

*WHOLESALE ORDER — Noor Al Oud*

🆔 *Order ID:* #${data.order_id}

🏪 *Business:* ${biz}

📱 *Contact:* ${ph}

*ORDER:*
`;

        items.forEach(i => {

            m +=
`• ${i.name} (${i.arabic})
× ${i.qty} units
@ £ ${i.price}
= £ ${(i.qty*i.price).toLocaleString()}

`;

        });

        m +=
`💰 *Est. Total: £ ${total.toLocaleString()}*

📦 *Admin Order Link:*
${data.admin_url}

Please confirm and send proforma invoice.
JazakAllah Khair.`;

        // OPEN WHATSAPP

        window.open(

            `https://wa.me/${WA}?text=${encodeURIComponent(m)}`,

            '_blank'

        );

        // CLEAR CART UI

        cart = {};

        updateCart();

        await loadCart();

        showToast('Order placed successfully');

    } catch(error){

        console.log(error);

        showToast('Something went wrong');

    }

}

function showToast(m){
  const t=document.getElementById('toast');
  t.textContent=m;t.classList.add('on');
  setTimeout(()=>t.classList.remove('on'),2800);
}

// Cursor
const c1=document.getElementById('c1'),c2=document.getElementById('c2');
let mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;c1.style.left=mx+'px';c1.style.top=my+'px';});
(function loop(){rx+=(mx-rx)*.13;ry+=(my-ry)*.13;c2.style.left=rx+'px';c2.style.top=ry+'px';requestAnimationFrame(loop);})();
document.querySelectorAll('a,button,.pcard,.why-card,.pstep').forEach(el=>{
  el.addEventListener('mouseenter',()=>{c1.classList.add('big');c2.classList.add('big');});
  el.addEventListener('mouseleave',()=>{c1.classList.remove('big');c2.classList.remove('big');});
});

// Nav scroll
window.addEventListener('scroll',()=>document.getElementById('nav').classList.toggle('stuck',window.scrollY>60));

// Reveal
const obs=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('vis');obs.unobserve(e.target);}});},{threshold:.1});
document.querySelectorAll('.rv').forEach(el=>obs.observe(el));

// Marquees
['mband','tick'].forEach(id=>{const el=document.getElementById(id);if(el)el.innerHTML+=el.innerHTML;});
// INITIAL LOAD
loadCart();
renderP();
</script>
</body>
</html>
