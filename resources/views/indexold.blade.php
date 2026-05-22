<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>PhoneHub Wholesale — Mobile & Accessories</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --bg:      #F0F4FA;
    --surface: #FFFFFF;
    --card:    #FFFFFF;
    --card2:   #E8EFF8;
    --border:  rgba(0,0,0,.08);
    --border2: rgba(0,0,0,.14);
    --rose:    #1D4ED8;
    --rose2:   #3B82F6;
    --rose3:   #BFDBFE;
    --teal:     #0369A1; 
    --teal2:   #0EA5E9;
    --teal3:   #BAE6FD;
    --gold:    #1D4ED8;
    --gold2:   #2563EB;
    --gold3:   #DBEAFE;
    --plum:     #0369A1; 
    --plum2:   #0284C7;
    --navy:    #0F172A;
    --text:    #1C1917;
    --muted:   #78716C;
    --muted2:  #A8A29E;
    --green:   #25D366;
    --dgrn:    #128C7E;
    --white:   #FFFFFF;
    --f-head:  'Syne', sans-serif;
    --f-body:  'Inter', sans-serif;
    --r:       12px;
    --r2:      8px;
    --shadow:  0 4px 24px rgba(0,0,0,.08);
    --shadow2: 0 12px 40px rgba(0,0,0,.12);
  }
  *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
  html{scroll-behavior:smooth;-webkit-tap-highlight-color:transparent}
  body{background:var(--bg);color:var(--text);font-family:var(--f-body);min-height:100vh;overflow-x:hidden}
  ::-webkit-scrollbar{width:4px}
  ::-webkit-scrollbar-track{background:var(--bg)}
  ::-webkit-scrollbar-thumb{background:var(--rose);border-radius:2px}

  /* ── Top banner ── */
  .top-banner{
    background:var(--teal);
    text-align:center;padding:.5rem 1rem;
    font-size:.75rem;font-weight:500;color:var(--white);
    letter-spacing:.04em;
  }

  /* ── Nav ── */
  nav{
    position:sticky;top:0;z-index:100;
    background:rgba(250,248,245,.95);
    backdrop-filter:blur(20px);
    border-bottom:1px solid var(--border);
    padding:.9rem 1.5rem;
    display:flex;align-items:center;gap:1rem;
  }
  .nav-logo{
    font-family:var(--f-head);
    font-size:1.5rem;font-weight:700;
    color:var(--text);text-decoration:none;
    flex-shrink:0;line-height:1;
    display:flex;align-items:center;gap:.5rem;
  }
  .nav-logo-mark{
    width:28px;height:28px;border-radius:50%;
    background:var(--teal);display:flex;
    align-items:center;justify-content:center;
    font-size:.7rem;color:white;font-weight:700;
    letter-spacing:.02em;flex-shrink:0;
  }
  .nav-search{flex:1;position:relative;max-width:400px;margin:0 auto}
  .nav-search input{
    width:100%;background:var(--card2);
    border:1px solid var(--border);border-radius:50px;
    padding:.6rem 1rem .6rem 2.5rem;
    font-size:.85rem;color:var(--text);
    font-family:var(--f-body);outline:none;
    transition:border-color .2s,box-shadow .2s;
  }
  .nav-search input:focus{border-color:var(--teal);box-shadow:0 0 0 3px rgba(45,125,111,.1)}
  .nav-search input::placeholder{color:var(--muted2)}
  .nav-search-icon{position:absolute;left:.85rem;top:50%;transform:translateY(-50%);color:var(--muted);font-size:.85rem;pointer-events:none}
  .nav-right{display:flex;align-items:center;gap:.75rem;margin-left:auto}
  .nav-contact{font-size:.72rem;color:var(--muted);display:flex;align-items:center;gap:.4rem}
  .cart-btn{
    position:relative;background:var(--teal);color:white;
    border:none;border-radius:50px;
    padding:.55rem 1.2rem;font-size:.8rem;font-weight:600;
    cursor:pointer;display:flex;align-items:center;gap:.5rem;
    transition:background .2s,transform .2s;font-family:var(--f-body);
  }
  .cart-btn:hover{background:var(--teal2);transform:translateY(-1px)}
  .cart-count{
    position:absolute;top:-6px;right:-6px;
    background:var(--rose);color:white;
    width:18px;height:18px;border-radius:50%;
    font-size:.6rem;font-weight:700;
    display:flex;align-items:center;justify-content:center;
    border:2px solid var(--bg);
  }

  /* ── Hero ── */
  .hero{
    position:relative;
    background:linear-gradient(135deg,#EFF6FF 0%,#E0F2FE 50%,#F0F9FF 100%);
    padding:4rem 1.5rem 3rem;text-align:center;overflow:hidden;
  }
  .hero-pattern{
    position:absolute;inset:0;opacity:.04;
    background-image:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232D7D6F' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }
  .hero-tag{
    display:inline-flex;align-items:center;gap:.5rem;
    background:rgba(45,125,111,.1);border:1px solid rgba(45,125,111,.2);
    border-radius:50px;padding:.35rem .9rem;
    font-size:.72rem;font-weight:600;color:var(--teal);
    letter-spacing:.06em;text-transform:uppercase;margin-bottom:1.2rem;
  }
  .hero h1{
    font-family:var(--f-head);
    font-size:clamp(2.2rem,5vw,3.8rem);
    font-weight:700;line-height:1.05;
    color:var(--text);margin-bottom:.8rem;
  }
  .hero h1 span{color:var(--teal)}
  .hero-sub{
    font-size:.9rem;color:var(--muted);
    max-width:480px;margin:0 auto 2rem;line-height:1.7;
  }
  .hero-cta{display:flex;gap:.75rem;justify-content:center;flex-wrap:wrap}
  .btn-primary{
    display:inline-flex;align-items:center;gap:.5rem;
    background:var(--teal);color:white;
    padding:.8rem 1.8rem;border-radius:50px;
    font-size:.88rem;font-weight:600;text-decoration:none;
    transition:background .2s,transform .2s,box-shadow .2s;
    box-shadow:0 4px 20px rgba(45,125,111,.3);
  }
  .btn-primary:hover{background:var(--teal2);transform:translateY(-2px);box-shadow:0 8px 30px rgba(45,125,111,.4)}
  .btn-secondary{
    display:inline-flex;align-items:center;gap:.5rem;
    background:transparent;color:var(--teal);
    padding:.8rem 1.8rem;border-radius:50px;
    font-size:.88rem;font-weight:500;text-decoration:none;
    border:1.5px solid var(--teal);
    transition:all .2s;
  }
  .btn-secondary:hover{background:var(--teal);color:white}
  .hero-stats{
    display:flex;gap:2rem;justify-content:center;
    flex-wrap:wrap;margin-top:2.5rem;padding-top:2rem;
    border-top:1px solid rgba(45,125,111,.15);
  }
  .h-stat-val{font-family:var(--f-head);font-size:1.8rem;font-weight:700;color:var(--teal)}
  .h-stat-lbl{font-size:.72rem;color:var(--muted);margin-top:.2rem}

  /* ── Marquee ── */
  .marquee-wrap{
    background:var(--teal);padding:.55rem 0;overflow:hidden;
  }
  .marquee-track{
    display:flex;gap:3rem;animation:marquee 22s linear infinite;
    white-space:nowrap;width:max-content;
  }
  .marquee-track:hover{animation-play-state:paused}
  @keyframes marquee{from{transform:translateX(0)}to{transform:translateX(-50%)}}
  .marquee-item{font-size:.72rem;color:rgba(255,255,255,.85);display:flex;align-items:center;gap:.5rem}
  .marquee-item .mk{color:var(--gold3);font-weight:600}

  /* ── Category bar ── */
  .cat-bar{
    display:flex;gap:.6rem;overflow-x:auto;
    padding:.9rem 1.5rem;background:var(--surface);
    border-bottom:1px solid var(--border);
    scrollbar-width:none;
  }
  .cat-bar::-webkit-scrollbar{display:none}
  .cat-pill{
    flex-shrink:0;padding:.45rem 1.1rem;
    background:var(--bg);border:1px solid var(--border);
    border-radius:50px;font-size:.78rem;font-weight:500;
    color:var(--muted);cursor:pointer;
    transition:all .2s;white-space:nowrap;
  }
  .cat-pill:hover{border-color:var(--teal);color:var(--teal)}
  .cat-pill.active{background:var(--teal);color:white;border-color:var(--teal);font-weight:600}

  /* ── Main layout ── */
  .main{padding:1.5rem;max-width:1200px;margin:0 auto}
  .section-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:1.2rem}
  .section-title{
    font-family:var(--f-head);font-size:1.3rem;font-weight:700;
    color:var(--text);display:flex;align-items:center;gap:.6rem;
  }
  .section-title::before{content:'';width:3px;height:1.2rem;background:var(--teal);border-radius:2px}
  .see-all{font-size:.75rem;color:var(--teal);cursor:pointer;font-weight:500}

  /* ── Featured banner ── */
  .featured-banner{
    background:linear-gradient(135deg,#1A2744 0%,#2D3F6B 60%,#2D7D6F 100%);
    border-radius:var(--r);padding:2.2rem;margin-bottom:2rem;
    display:flex;align-items:center;justify-content:space-between;gap:1.5rem;
    position:relative;overflow:hidden;
  }
  .featured-banner::before{
    content:'';position:absolute;top:-80px;right:-80px;
    width:280px;height:280px;border-radius:50%;
    background:radial-gradient(circle,rgba(184,150,46,.15),transparent);
  }
  .fb-left h2{font-family:var(--f-head);font-size:1.5rem;font-weight:700;color:white;margin-bottom:.4rem}
  .fb-left p{font-size:.83rem;color:rgba(255,255,255,.7);margin-bottom:1rem}
  .fb-badges{display:flex;gap:.6rem;flex-wrap:wrap}
  .fb-b{
    background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);
    border-radius:50px;padding:.28rem .75rem;
    font-size:.7rem;font-weight:500;color:white;
  }
  .fb-emoji{font-size:4.5rem;flex-shrink:0;filter:drop-shadow(0 4px 12px rgba(0,0,0,.3))}

  /* ── Collection chips ── */
  .collection-strip{
    display:flex;gap:.75rem;overflow-x:auto;margin-bottom:2rem;
    scrollbar-width:none;padding-bottom:.3rem;
  }
  .collection-strip::-webkit-scrollbar{display:none}
  .collection-chip{
    flex-shrink:0;background:var(--surface);border:1px solid var(--border);
    border-radius:var(--r);padding:.75rem 1rem;
    cursor:pointer;transition:all .25s;text-align:center;min-width:100px;
  }
  .collection-chip:hover,.collection-chip.active{border-color:var(--teal);box-shadow:0 2px 12px rgba(45,125,111,.12)}
  .cc-icon{font-size:1.6rem;margin-bottom:.35rem}
  .cc-name{font-size:.72rem;font-weight:600;color:var(--text)}
  .cc-count{font-size:.65rem;color:var(--muted);margin-top:.1rem}

  /* ── Product grid ── */
  .product-grid{
    display:grid;grid-template-columns:repeat(auto-fill,minmax(210px,1fr));
    gap:1.1rem;margin-bottom:2.5rem;
  }
  .product-card{
    background:var(--card);border:1px solid var(--border);
    border-radius:var(--r);overflow:hidden;cursor:pointer;
    transition:transform .25s,border-color .25s,box-shadow .25s;position:relative;
  }
  .product-card:hover{transform:translateY(-4px);border-color:rgba(45,125,111,.25);box-shadow:var(--shadow2)}
  .product-badge{
    position:absolute;top:.7rem;left:.7rem;z-index:2;
    font-size:.62rem;font-weight:700;padding:.22rem .65rem;border-radius:4px;
    letter-spacing:.04em;text-transform:uppercase;
  }
  .badge-new{background:var(--teal);color:white}
  .badge-hot{background:var(--rose);color:white}
  .badge-sale{background:var(--gold);color:white}
  .badge-eid{background:var(--plum);color:white}
  .badge-low{background:#F59E0B;color:white}
  .product-img{
    height:185px;display:flex;align-items:center;justify-content:center;
    font-size:4.5rem;
    position:relative;overflow:hidden;
  }
  .product-img::after{content:'';position:absolute;inset:0;background:linear-gradient(to bottom,transparent 60%,rgba(0,0,0,.04))}
  .product-info{padding:1rem}
  .product-collection{
    font-size:.65rem;color:var(--teal);font-weight:600;
    letter-spacing:.08em;text-transform:uppercase;margin-bottom:.3rem;
  }
  .product-name{font-size:.9rem;font-weight:600;color:var(--text);line-height:1.3;margin-bottom:.4rem}
  .product-desc{font-size:.75rem;color:var(--muted);line-height:1.4;margin-bottom:.6rem}
  .product-meta{display:flex;align-items:center;justify-content:space-between;margin-bottom:.6rem}
  .product-price{font-family:var(--f-head);font-size:1.1rem;font-weight:700;color:var(--rose)}
  .product-unit{font-size:.65rem;color:var(--muted);margin-left:.15rem}
  .product-moq{font-size:.65rem;color:var(--muted2);background:var(--card2);padding:.2rem .5rem;border-radius:4px}
  .product-stock{display:flex;align-items:center;gap:.4rem;font-size:.72rem;color:var(--muted);margin-bottom:.75rem}
  .stock-dot{width:6px;height:6px;border-radius:50%;flex-shrink:0}
  .stock-in{background:#10B981}.stock-low{background:#F59E0B}.stock-out{background:#EF4444}
  .colours-row{display:flex;gap:.3rem;margin-bottom:.65rem;flex-wrap:wrap}
  .colour-dot{width:16px;height:16px;border-radius:50%;border:1.5px solid var(--border);cursor:pointer;transition:transform .15s}
  .colour-dot:hover{transform:scale(1.2)}
  .colour-more{font-size:.65rem;color:var(--muted);align-self:center}
  .add-btn{
    width:100%;padding:.6rem;background:var(--teal);color:white;
    border:none;border-radius:var(--r2);font-size:.78rem;font-weight:600;
    cursor:pointer;transition:background .2s,transform .15s;font-family:var(--f-body);
    display:flex;align-items:center;justify-content:center;gap:.4rem;
  }
  .add-btn:hover{background:var(--teal2);transform:scale(1.02)}
  .add-btn:active{transform:scale(.98)}
  .add-btn.added{background:#10B981}
  .add-btn.out{background:var(--card2);color:var(--muted);cursor:not-allowed}
  .qty-control{display:none;align-items:center;gap:0;border:1.5px solid var(--teal);border-radius:var(--r2);overflow:hidden;margin-bottom:.5rem}
  .qty-control.show{display:flex}
  .qty-btn{background:transparent;border:none;color:var(--teal);font-size:1.1rem;font-weight:700;width:36px;height:32px;cursor:pointer;transition:background .15s;font-family:var(--f-body)}
  .qty-btn:hover{background:rgba(45,125,111,.08)}
  .qty-input{flex:1;background:transparent;border:none;text-align:center;color:var(--text);font-size:.85rem;font-weight:600;font-family:var(--f-body);padding:.2rem 0;outline:none;min-width:40px}

  /* ── Deals row ── */
  .deals-row{display:flex;gap:1rem;overflow-x:auto;padding-bottom:.5rem;margin-bottom:2rem;scrollbar-width:none}
  .deals-row::-webkit-scrollbar{display:none}
  .deal-card{
    flex-shrink:0;width:260px;background:var(--surface);
    border:1px solid var(--border);border-radius:var(--r);
    padding:1.1rem;display:flex;gap:.9rem;align-items:center;
    transition:border-color .25s,transform .25s,box-shadow .25s;cursor:pointer;
  }
  .deal-card:hover{border-color:rgba(45,125,111,.3);transform:translateY(-2px);box-shadow:var(--shadow)}
  .deal-emoji{font-size:2.4rem;flex-shrink:0}
  .deal-name{font-size:.84rem;font-weight:600;color:var(--text);margin-bottom:.3rem;line-height:1.3}
  .deal-price-row{display:flex;align-items:center;gap:.5rem;margin-bottom:.3rem}
  .deal-price{font-family:var(--f-head);font-size:1rem;font-weight:700;color:var(--rose)}
  .deal-was{font-size:.72rem;color:var(--muted2);text-decoration:line-through}
  .deal-save{font-size:.62rem;background:rgba(16,185,129,.1);color:#059669;padding:.15rem .45rem;border-radius:3px;font-weight:600}
  .deal-stock{font-size:.68rem;color:var(--muted2)}

  /* ── Info cards ── */
  .info-row{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin:1.5rem 0 2rem}
  .info-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r);padding:1.1rem;display:flex;gap:.75rem}
  .info-icon{font-size:1.5rem;flex-shrink:0;line-height:1}
  .info-title{font-size:.82rem;font-weight:600;color:var(--text);margin-bottom:.25rem}
  .info-desc{font-size:.72rem;color:var(--muted);line-height:1.45}

  /* ── Cart ── */
  .cart-overlay{position:fixed;inset:0;z-index:200;background:rgba(0,0,0,.35);opacity:0;pointer-events:none;transition:opacity .3s;backdrop-filter:blur(4px)}
  .cart-overlay.open{opacity:1;pointer-events:all}
  .cart-panel{
    position:fixed;right:0;top:0;bottom:0;width:min(420px,100vw);z-index:201;
    background:var(--surface);border-left:1px solid var(--border);
    display:flex;flex-direction:column;
    transform:translateX(100%);transition:transform .35s cubic-bezier(.16,1,.3,1);
    box-shadow:-8px 0 40px rgba(0,0,0,.12);
  }
  .cart-panel.open{transform:none}
  .cart-header{padding:1.2rem 1.5rem;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;flex-shrink:0}
  .cart-title{font-family:var(--f-head);font-size:1.2rem;font-weight:700;color:var(--text);display:flex;align-items:center;gap:.5rem}
  .cart-close{background:var(--card2);border:1px solid var(--border);color:var(--muted);width:32px;height:32px;border-radius:50%;cursor:pointer;font-size:.95rem;display:flex;align-items:center;justify-content:center;transition:all .2s}
  .cart-close:hover{background:var(--teal);color:white;border-color:var(--teal)}
  .cart-body{flex:1;overflow-y:auto;padding:1rem 1.5rem}
  .cart-empty{text-align:center;padding:3rem 1rem;color:var(--muted);font-size:.88rem}
  .cart-empty-icon{font-size:3rem;margin-bottom:.8rem;opacity:.3}
  .cart-item{display:flex;gap:.9rem;padding:1rem 0;border-bottom:1px solid var(--border);align-items:flex-start}
  .cart-item-emoji{font-size:2rem;width:52px;height:52px;background:var(--card2);border-radius:var(--r2);display:flex;align-items:center;justify-content:center;flex-shrink:0}
  .cart-item-info{flex:1;min-width:0}
  .cart-item-col{font-size:.68rem;color:var(--teal);margin-bottom:.15rem;font-weight:600;letter-spacing:.04em}
  .cart-item-name{font-size:.85rem;font-weight:600;color:var(--text);margin-bottom:.3rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
  .cart-item-meta{display:flex;align-items:center;gap:.6rem}
  .ci-qty-btn{background:var(--card2);border:1px solid var(--border);color:var(--text);width:24px;height:24px;border-radius:4px;cursor:pointer;font-size:.85rem;display:flex;align-items:center;justify-content:center;transition:all .15s}
  .ci-qty-btn:hover{background:var(--teal);color:white;border-color:var(--teal)}
  .ci-qty-num{font-size:.8rem;font-weight:600;color:var(--text);min-width:24px;text-align:center}
  .cart-item-price{font-family:var(--f-head);font-size:.95rem;font-weight:700;color:var(--rose)}
  .cart-item-remove{background:none;border:none;color:var(--muted2);cursor:pointer;font-size:.9rem;padding:.2rem;transition:color .2s}
  .cart-item-remove:hover{color:#EF4444}
  .cart-footer{padding:1.2rem 1.5rem;border-top:1px solid var(--border);flex-shrink:0}
  .cart-retailer{margin-bottom:1rem}
  .cart-retailer label{font-size:.72rem;color:var(--muted);display:block;margin-bottom:.4rem;font-weight:500;letter-spacing:.04em}
  .cart-retailer input{width:100%;background:var(--bg);border:1.5px solid var(--border);border-radius:var(--r2);padding:.65rem .9rem;font-size:.85rem;color:var(--text);font-family:var(--f-body);outline:none;transition:border-color .2s}
  .cart-retailer input:focus{border-color:var(--teal)}
  .cart-retailer input::placeholder{color:var(--muted2)}
  .d-opt{display:flex;align-items:center;gap:.6rem;padding:.5rem .8rem;background:var(--bg);border:1px solid var(--border);border-radius:var(--r2);cursor:pointer;margin-bottom:.4rem;font-size:.8rem;color:var(--text);transition:border-color .2s}
  .d-opt input[type=radio]{accent-color:var(--teal)}
  .d-opt:has(input:checked){border-color:rgba(45,125,111,.35)}
  .cart-summary{margin-bottom:1rem}
  .cs-row{display:flex;justify-content:space-between;font-size:.82rem;padding:.3rem 0;border-bottom:1px solid var(--border)}
  .cs-row:last-child{border-bottom:none}
  .cs-row span:first-child{color:var(--muted)}
  .cs-row span:last-child{font-weight:600;color:var(--text)}
  .cs-total span:last-child{font-family:var(--f-head);font-size:1.1rem;color:var(--rose)}
  .wa-order-btn{width:100%;padding:.9rem;background:linear-gradient(135deg,#25D366,#128C7E);color:white;border:none;border-radius:var(--r);font-size:.95rem;font-weight:700;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:.6rem;transition:transform .2s,box-shadow .2s;font-family:var(--f-body);box-shadow:0 6px 24px rgba(37,211,102,.3)}
  .wa-order-btn:hover{transform:translateY(-2px);box-shadow:0 10px 32px rgba(37,211,102,.4)}
  .wa-order-btn svg{width:20px;height:20px;fill:white}

  /* ── Order modal ── */
  .order-modal{position:fixed;inset:0;z-index:300;display:flex;align-items:center;justify-content:center;padding:1.5rem;background:rgba(0,0,0,.5);backdrop-filter:blur(6px);opacity:0;pointer-events:none;transition:opacity .3s}
  .order-modal.show{opacity:1;pointer-events:all}
  .order-modal-box{background:var(--surface);border:1.5px solid rgba(45,125,111,.25);border-radius:var(--r);padding:2.2rem 2rem;max-width:400px;width:100%;text-align:center;transform:scale(.92);transition:transform .35s cubic-bezier(.16,1,.3,1);box-shadow:0 20px 60px rgba(0,0,0,.18)}
  .order-modal.show .order-modal-box{transform:scale(1)}
  .om-icon{font-size:3rem;margin-bottom:.6rem}
  .om-title{font-family:var(--f-head);font-size:1.4rem;font-weight:700;color:var(--text);margin-bottom:.35rem}
  .om-sub{font-size:.85rem;color:var(--muted);line-height:1.6;margin-bottom:1.3rem}
  .om-wa-msg{background:var(--bg);border-radius:var(--r2);padding:1rem;text-align:left;margin-bottom:1.3rem;border:1px solid rgba(45,125,111,.15)}
  .om-wa-label{font-size:.65rem;color:var(--teal);font-weight:600;letter-spacing:.08em;margin-bottom:.4rem}
  .om-wa-text{font-size:.76rem;color:var(--text);line-height:1.7;font-family:monospace}
  .om-btn{width:100%;padding:.85rem;background:linear-gradient(135deg,#25D366,#128C7E);color:white;border:none;border-radius:var(--r2);font-size:.92rem;font-weight:700;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:.55rem;transition:transform .2s;font-family:var(--f-body);margin-bottom:.6rem}
  .om-btn:hover{transform:scale(1.02)}
  .om-btn svg{width:18px;height:18px;fill:white}
  .om-close-btn{background:none;border:1.5px solid var(--border);color:var(--muted);border-radius:var(--r2);padding:.6rem 1.5rem;cursor:pointer;font-size:.82rem;font-family:var(--f-body);transition:all .2s;width:100%}
  .om-close-btn:hover{border-color:var(--border2);color:var(--text)}

  /* ── Toast ── */
  .toast{position:fixed;bottom:2rem;left:50%;transform:translateX(-50%) translateY(100px);background:var(--navy);border-radius:50px;padding:.65rem 1.4rem;font-size:.82rem;font-weight:500;color:white;z-index:400;transition:transform .3s cubic-bezier(.16,1,.3,1);display:flex;align-items:center;gap:.5rem;box-shadow:var(--shadow2);white-space:nowrap}
  .toast.show{transform:translateX(-50%) translateY(0)}
  .toast-dot{width:7px;height:7px;border-radius:50%;background:var(--green)}

  /* ── Responsive ── */
  @media(max-width:640px){
    .product-grid{grid-template-columns:repeat(2,1fr)}
    .info-row{grid-template-columns:1fr}
    nav{padding:.8rem 1rem}
    .nav-contact{display:none}
    .featured-banner{flex-direction:column;text-align:center}
    .fb-emoji{display:none}
  }
  @media(max-width:380px){.product-grid{grid-template-columns:1fr}}

  .om-bank-card{background:#EDF7F4;border:1.5px solid #2D9E8A;border-radius:8px;padding:.9rem 1rem;margin-bottom:1rem;text-align:left}
  .om-bank-label{font-size:.65rem;font-weight:700;color:#1A6B5A;letter-spacing:.1em;text-transform:uppercase;margin-bottom:.55rem}
  .om-bank-rows{display:flex;flex-direction:column;gap:0}
  .om-bank-row{display:flex;justify-content:space-between;align-items:center;font-size:.82rem;padding:.32rem 0;border-bottom:1px solid rgba(0,0,0,.07)}
  .om-bank-row:last-child{border-bottom:none}
  .om-bank-row-label{color:#6B7280}
  .om-bank-row-val{font-weight:700;font-family:monospace;font-size:.84rem;cursor:pointer;padding:.1rem .35rem;border-radius:4px;transition:background .15s;user-select:all}
  .om-bank-row-val:hover{background:rgba(45,158,138,.12)}
  .om-bank-ref{margin-top:.65rem;padding:.48rem .75rem;background:rgba(234,179,8,.1);border-radius:5px;font-size:.79rem;border:1px solid rgba(234,179,8,.25);line-height:1.45}
  .om-bank-ref strong{color:#92650A}
  .copy-hint{font-size:.67rem;color:#9CA3AF;text-align:center;margin:.3rem 0 .1rem}
  .om-step{display:block}
  .om-sent-icon{font-size:3rem;margin-bottom:.5rem;display:block;animation:sentSpin .5s cubic-bezier(.16,1,.3,1) both}
  @keyframes sentSpin{from{transform:scale(0) rotate(-160deg)}to{transform:scale(1) rotate(0)}}


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

<div class="top-banner">⚡ New stock every week &nbsp;·&nbsp; Free delivery on orders over £500 &nbsp;·&nbsp; WhatsApp orders: +44 7700 900 360</div>

<nav>
  <a class="nav-logo" href="#">
    <div class="nav-logo-mark">PH</div>
    PhoneHub
  </a>
  <div class="nav-search">
    <span class="nav-search-icon">🔍</span>
    <input type="text" id="searchInput" placeholder="Search hijabs, abayas, scarves..." oninput="filterProducts()">
  </div>
  <div class="nav-right">
    <div class="nav-contact">📞 +44 7700 900 360</div>
    
    @if(Auth::check())
        <!-- Profile Section -->
        <div class="relative" id="profile-container">
            <button onclick="toggleProfile()"
                class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-xl transition">
                
                <div
                    class="w-10 h-10 bg-gradient-to-br from-blue-900 to-blue-700 rounded-full flex items-center justify-center text-white font-bold">
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
    <button class="cart-btn" onclick="toggleCart()">
      🛍 Cart
      <span class="cart-count" id="cartCount" style="display:none">0</span>
    </button>
  </div>
</nav>

<div class="hero">
  <div class="hero-pattern"></div>
  <div class="hero-tag">⚡ Vape & E-Liquid Wholesale · Charles House, Southall</div>
  <h1>Mobile &amp; Accessories.<br><span>Wholesale Prices.</span></h1>
  <p class="hero-sub">Premium hijabs, abayas, scarves & modest wear. Wholesale prices. WhatsApp ordering. UK-wide delivery.</p>
  <div class="hero-cta">
    <a href="#products" class="btn-primary">Browse stock</a>
    <a href="https://wa.me/447700900361" class="btn-secondary">💬 WhatsApp order</a>
  </div>
  <div class="hero-stats">
    <div class="h-stat"><div class="h-stat-val">500+</div><div class="h-stat-lbl">Products in stock</div></div>
    <div class="h-stat"><div class="h-stat-val">MOQ 10</div><div class="h-stat-lbl">Minimum per line</div></div>
    <div class="h-stat"><div class="h-stat-val">24/7</div><div class="h-stat-lbl">Portal open</div></div>
    <div class="h-stat"><div class="h-stat-val">UK-wide</div><div class="h-stat-lbl">Delivery</div></div>
  </div>
</div>

<div class="marquee-wrap">
  <div class="marquee-track">
    <span class="marquee-item">📱 iPhone 16 Pro Max cases — 3 colours just landed <span class="mk">NEW</span></span>
    <span class="marquee-item">🔌 USB-C 65W chargers — bulk discount available</span>
    <span class="marquee-item">🛡 Samsung S25 screen protectors arrived today <span class="mk">DEAL</span></span>
    <span class="marquee-item">🎧 Wireless earbuds — 200 units in stock</span>
    <span class="marquee-item">⚡ Lightning cables — buy 100 get 10 free <span class="mk">HOT</span></span>
    <span class="marquee-item">📦 Free delivery on all orders over £500 UK-wide</span>
    <span class="marquee-item">📱 iPhone 16 Pro Max cases — 3 colours just landed <span class="mk">NEW</span></span>
    <span class="marquee-item">🔌 USB-C 65W chargers — bulk discount available</span>
    <span class="marquee-item">🛡 Samsung S25 screen protectors arrived today <span class="mk">DEAL</span></span>
    <span class="marquee-item">🎧 Wireless earbuds — 200 units in stock</span>
    <span class="marquee-item">⚡ Lightning cables — buy 100 get 10 free <span class="mk">HOT</span></span>
    <span class="marquee-item">📦 Free delivery on all orders over £500 UK-wide</span>
  </div>
</div>

<div class="cat-bar" id="catBar">
  <div class="cat-pill active" onclick="filterCat('all',this)">All Products</div>
  @foreach($categories as $category)
  <div class="cat-pill"
      onclick="filterCat('{{ $category->id }}',this)">
      {{ $category->name }}
  </div>
  @endforeach
</div>

<div class="main">

  <div class="featured-banner">
    <div class="fb-left">
      <h2>⚡ Disposables — This Week</h2>
      <p>iPhone 16 Pro Max cases back in stock. Samsung S25 screen protectors arrived. Order before 2pm for same-day dispatch.</p>
      <div class="fb-badges">
        <span class="fb-b">✓ In Stock Now</span>
        <span class="fb-b">📦 Same Day Dispatch</span>
        <span class="fb-b">📦 Same day dispatch</span>
      </div>
    </div>
    <div class="fb-emoji">📱</div>
  </div>

  <!-- Collections -->
  <div class="section-head">
    <div class="section-title">Shop by collection</div>
  </div>
  <div class="collection-strip">
    <div class="collection-chip active"
        onclick="filterCat('all',this)">
        <div class="cc-icon">⭐</div>
        <div class="cc-name">All</div>
    </div>

    @foreach($categories as $category)
    <div class="collection-chip"
        onclick="filterCat('{{ $category->id }}',this)">
        <div class="cc-icon">📦</div>

        <div class="cc-name">
            {{ $category->name }}
        </div>

        <div class="cc-count">
            {{ $category->products->count() }} lines
        </div>
    </div>
    @endforeach
  </div>

  <!-- Flash deals -->
  <div class="section-head">
    <div class="section-title">⚡ This week's deals</div>
    <span class="see-all">View all</span>
  </div>
  <div class="deals-row" id="dealsRow"></div>

  <!-- Info cards -->
  <div class="info-row">
    <div class="info-card"><div class="info-icon">💬</div><div><div class="info-title">Order on WhatsApp</div><div class="info-desc">Add to cart, checkout — order goes straight to our WhatsApp. Confirmed within minutes.</div></div></div>
    <div class="info-card"><div class="info-icon">🎨</div><div><div class="info-title">30+ brands in stock</div><div class="info-desc">Apple, Samsung, Xiaomi, Anker, OnePlus and more. Cases, chargers, cables, screens and accessories.</div></div></div>
    <div class="info-card"><div class="info-icon">🚚</div><div><div class="info-title">3 delivery options</div><div class="info-desc">We deliver · Collect from Southall · Royal Mail tracked. Your choice at checkout.</div></div></div>
  </div>

  <!-- Products -->
  <div class="section-head" id="products">
    <div class="section-title">All Products</div>
    <span class="see-all" id="productCount">Loading...</span>
  </div>
  <div class="product-grid" id="productGrid"></div>

</div>

<!-- Cart -->
<div class="cart-overlay" id="cartOverlay" onclick="toggleCart()"></div>
<div class="cart-panel" id="cartPanel">
  <div class="cart-header">
    <div class="cart-title">🛍 Your order</div>
    <button class="cart-close" onclick="toggleCart()">✕</button>
  </div>
  <div class="cart-body" id="cartBody">
    <div class="cart-empty"><div class="cart-empty-icon">🛍</div>Your cart is empty.<br>Add products to start your order.</div>
  </div>
  <div class="cart-footer">
    <div class="cart-retailer">
      <label>YOUR SHOP NAME / CONTACT</label>
      <input type="text" id="retailerName" placeholder="e.g. e.g. Ali Mobile Hub, Leeds">
    </div>
    <div style="margin-bottom:1rem">
      <div class="cart-retailer" style="margin-bottom:.4rem"><label>DELIVERY OPTION</label></div>
      <div class="d-opt"><input type="radio" name="delivery" value="deliver" checked> 🚚 We deliver to your address</div>
      <div class="d-opt"><input type="radio" name="delivery" value="collect"> 🏪 Collect from Southall</div>
      <div class="d-opt"><input type="radio" name="delivery" value="post"> 📮 Royal Mail tracked</div>
    </div>
    <div class="cart-summary" id="cartSummary"></div>
    <button class="wa-order-btn" onclick="placeOrder()">
      <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Send Order via WhatsApp
    </button>
  </div>
</div>

<!-- Order modal -->
<div class="order-modal" id="orderModal">
  <div class="order-modal-box">
    <div id="omStep1">
      <div class="om-icon">📋</div>
      <div class="om-title">Review your order</div>
      <div class="om-sub">Check the summary then send it to us on WhatsApp. We confirm and send bank details straight back.</div>
      <div class="om-wa-msg">
        <div class="om-wa-label">📱 ORDER SUMMARY</div>
        <div class="om-wa-text" id="waPreview"></div>
      </div>
      <button class="om-btn" id="omSendBtn">
        <svg viewBox="0 0 24 24" style="width:18px;height:18px;fill:white;flex-shrink:0"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        Send order via WhatsApp
      </button>
      <button class="om-close-btn" onclick="closeModal()">Continue shopping</button>
    </div>
    <div id="omStep2" style="display:none">
      <span class="om-sent-icon">✅</span>
      <div class="om-title">Order sent!</div>
      <div class="om-sub">Your order has been sent to our WhatsApp. Choose below to confirm or receive payment details.</div>
      <div class="om-bank-card">
        <div class="om-bank-label">💳 Payment details</div>
        <div class="om-bank-rows" id="omBankRows"></div>
        <div class="om-bank-ref" id="omBankRef"></div>
      </div>
      <p class="copy-hint">Tap any value to copy it</p>
      <button class="om-btn" id="omConfirmBtn" style="margin-top:.75rem;background:linear-gradient(135deg,#2D7D6F,#3DA090);box-shadow:0 6px 24px rgba(45,125,111,.3)">
        <svg viewBox="0 0 24 24" style="width:18px;height:18px;fill:white;flex-shrink:0"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
        Confirm Order
      </button>
      <button class="om-btn" id="omReplyBtn" style="background:linear-gradient(135deg,#25D366,#128C7E);box-shadow:0 6px 24px rgba(37,211,102,.3)">
        <svg viewBox="0 0 24 24" style="width:18px;height:18px;fill:white;flex-shrink:0"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        Confirm & Send Bank Details
      </button>
    </div>
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


<div class="toast" id="toast"><div class="toast-dot"></div><span id="toastMsg">Added to cart</span></div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    const PRODUCTS = @json($products);
</script>

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
       

/* ─── CONFIG ──────────────────────────────────────────────── */
const SHOP_WA   = '447700900360';
const BANK_NAME = 'Lloyds Bank';
const ACCT_NAME = 'PhoneHub Wholesale Ltd';
const ACCT_NO   = '12345678';
const SORT_CODE = '30-90-89';
const BANK_REF_PFX = 'PH-';
const REF_PFX   = 'PH-';

/* ─── CART STATE ──────────────────────────────────────────── */
let cart = {};
let currentCat    = 'all';
let currentSearch = '';
let currentBrand  = 'all';


const DEALS = [
  {id:13, was:2.20,  save:'27%'},
  {id:6,  was:1.40,  save:'32%'},
  {id:22, was:1.10,  save:'36%'},
  {id:26, was:1.50,  save:'40%'},
  {id:37, was:0.95,  save:'37%'},
  {id:32, was:38.00, save:'26%'},
];



/* ─── CART OPS ────────────────────────────────────────────── */
// function addToCart(id) {
//   const p = PRODUCTS.find(x => x.id === id);
//   if (!p || p.stock === 0) return;
//   if (!cart[id]) cart[id] = { product:p, qty:p.moq };
//   else cart[id].qty += p.moq;
//   updateCartUI();
//   var qc  = document.getElementById('qty-'   + id);
//   var btn = document.getElementById('addbtn-'+ id);
//   var inp = document.getElementById('qtyval-'+ id);
//   if (qc)  qc.classList.add('show');
//   if (btn) { btn.classList.add('added'); btn.textContent = '✓ In order — update'; }
//   if (inp) inp.value = cart[id].qty;
//   showToast(p.name.substring(0,28) + '... added (' + cart[id].qty + ' units)');
// }
async function addToCart(id) {

  const p = PRODUCTS.find(x => x.id == id);
  let totalQty = 0;

  if (p.locations && p.locations.length > 0) {

    totalQty = p.locations.reduce(function(sum, loc) {

      return sum + parseInt(loc.quantity || 0);

    }, 0);
  }

  if (!p || totalQty <= 0) return;

  // if (!p || p.quantity <= 0) return;

  try {

    // const response = await fetch('/add-to-cart', {

    //   method: 'POST',

    //   headers: {
    //     'Content-Type': 'application/json',
    //     'X-CSRF-TOKEN': document
    //       .querySelector('meta[name="csrf-token"]')
    //       .getAttribute('content')
    //   },

    //   body: JSON.stringify({
    //     product_id: id,
    //     quantity: p.moq || 1
    //   })

    // });
    const response = await fetch('/add-to-cart', {

      method: 'POST',

      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-CSRF-TOKEN': document
          .querySelector('meta[name="csrf-token"]')
          .getAttribute('content')
      },

      body: JSON.stringify({
        product_id: id,
        quantity: p.moq || 1
      })

    });

    const data = await response.json();
    console.log(data);

    if (data.status) {

      let qty = p.moq || 1;

      if (!cart[id]) {

        cart[id] = {
          product: p,
          qty: qty
        };

      } else {

        cart[id].qty += qty;
      }

      updateCartUI();

      var qc  = document.getElementById('qty-' + id);
      var btn = document.getElementById('addbtn-' + id);
      var inp = document.getElementById('qtyval-' + id);

      if (qc) qc.classList.add('show');

      if (btn) {
        btn.classList.add('added');
        btn.textContent = '✓ In order — update';
      }

      if (inp) inp.value = cart[id].qty;

      showToast(data.message);

    } else {

      showToast('Something went wrong');

    }

  } catch (error) {

    console.log(error);

    showToast('Server error');

  }
}
function changeQty(id, delta) {
  var p = PRODUCTS.find(x => x.id === id);
  if (!cart[id]) cart[id] = { product:p, qty:p.moq };
  cart[id].qty = Math.max(p.moq, cart[id].qty + delta);
  var inp = document.getElementById('qtyval-' + id);
  if (inp) inp.value = cart[id].qty;
  updateCartUI();
}
function setQty(id, val) {
  var p = PRODUCTS.find(x => x.id === id);
  var qty = Math.max(p.moq, parseInt(val) || p.moq);
  if (!cart[id]) cart[id] = { product:p, qty:qty };
  else cart[id].qty = qty;
  updateCartUI();
}
// function removeFromCart(id) {
//   delete cart[id];
//   updateCartUI();
//   renderProducts();
// }
async function removeFromCart(id) {

  try {

    const response = await fetch('/remove-cart/' + id, {

      method: 'DELETE',

      headers: {
        'X-CSRF-TOKEN': document
          .querySelector('meta[name="csrf-token"]')
          .getAttribute('content')
      }

    });

    const data = await response.json();

    if (data.status) {

      delete cart[id];

      updateCartUI();

      renderProducts();

      showToast(data.message);

    }

  } catch (error) {

    console.log(error);

  }
}
// function changeCartQty(id, delta) {
//   if (!cart[id]) return;
//   var p  = cart[id].product;
//   var nq = cart[id].qty + delta;
//   if (nq < p.moq) { removeFromCart(id); return; }
//   cart[id].qty = nq;
//   updateCartUI();
// }
async function changeCartQty(id, delta) {

  if (!cart[id]) return;

  let p = cart[id].product;

  let newQty = cart[id].qty + delta;

  if (newQty < (p.moq || 1)) {

    removeFromCart(id);

    return;
  }

  try {

    const response = await fetch('/add-to-cart', {

      method: 'POST',

      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-CSRF-TOKEN': document
          .querySelector('meta[name="csrf-token"]')
          .getAttribute('content')
      },

      body: JSON.stringify({
        product_id: id,
        quantity: p.moq || 1
      })

    });

    const data = await response.json();

    if (data.status) {

      cart[id].qty = newQty;

      updateCartUI();

      renderProducts();
    }

  } catch (error) {

    console.log(error);

  }
}
async function loadCart() {

  try {

    const response = await fetch('/cart-items');

    const data = await response.json();

    if (data.status) {

      cart = {};

      data.data.forEach(item => {

        cart[item.product_id] = {
          product: item.product,
          qty: item.quantity
        };

      });

      updateCartUI();

      renderProducts();
    }

  } catch (error) {

    console.log(error);

  }
}
// function updateCartUI() {
//   var items    = Object.values(cart).filter(function(i) { return i.qty > 0; });
//   var totalQty = items.reduce(function(s,i) { return s+i.qty; }, 0);
//   var total    = items.reduce(function(s,i) { return s+i.product.price*i.qty; }, 0);
//   var cc = document.getElementById('cartCount');
//   if (totalQty > 0) { cc.style.display = 'flex'; cc.textContent = totalQty; }
//   else cc.style.display = 'none';
//   var body = document.getElementById('cartBody');
//   if (items.length === 0) {
//     body.innerHTML = '<div class="cart-empty"><div class="cart-empty-icon">🛒</div>Your cart is empty.<br>Add items to start your order.</div>';
//   } else {
//     body.innerHTML = items.map(function(item) {
//       return '<div class="cart-item">'
//         + '<div class="cart-item-emoji">' + item.product.emoji + '</div>'
//         + '<div class="cart-item-info">'
//         + '<div class="cart-item-name">' + item.product.name + '</div>'
//         + '<div class="cart-item-meta">'
//         + '<div style="display:flex;align-items:center;gap:.3rem">'
//         + '<button class="ci-qty-btn" onclick="changeCartQty(' + item.product.id + ',-' + item.product.moq + ')">−</button>'
//         + '<span class="ci-qty-num">' + item.qty + '</span>'
//         + '<button class="ci-qty-btn" onclick="changeCartQty(' + item.product.id + ',' + item.product.moq + ')">+</button>'
//         + '</div>'
//         + '<span class="cart-item-price">£' + (item.product.price*item.qty).toFixed(2) + '</span>'
//         + '</div></div>'
//         + '<button class="cart-item-remove" onclick="removeFromCart(' + item.product.id + ')">✕</button>'
//         + '</div>';
//     }).join('');
//   }
//   var vat = total * 0.2;
//   var summary = document.getElementById('cartSummary');
//   summary.innerHTML = items.length > 0
//     ? '<div class="cs-row"><span>Subtotal ('+totalQty+' units)</span><span>£'+total.toFixed(2)+'</span></div>'
//     + '<div class="cs-row"><span>VAT (20%)</span><span>£'+vat.toFixed(2)+'</span></div>'
//     + '<div class="cs-row"><span>Delivery</span><span>TBC on confirmation</span></div>'
//     + '<div class="cs-row cs-total"><span><strong>Order total</strong></span><span>£'+(total+vat).toFixed(2)+'</span></div>'
//     : '';
// }
function updateCartUI() {

  var items = Object.values(cart).filter(function(i) {
    return i.qty > 0;
  });

  var totalQty = items.reduce(function(s, i) {
    return s + i.qty;
  }, 0);

  var total = items.reduce(function(s, i) {
    return s + (parseFloat(i.product.price) * i.qty);
  }, 0);

  var cc = document.getElementById('cartCount');

  if (totalQty > 0) {

    cc.style.display = 'flex';
    cc.textContent = totalQty;

  } else {

    cc.style.display = 'none';
  }

  var body = document.getElementById('cartBody');

  if (items.length === 0) {

    body.innerHTML =
      '<div class="cart-empty">' +
      '<div class="cart-empty-icon">🛒</div>' +
      'Your cart is empty.<br>Add items to start your order.' +
      '</div>';

  } else {

    body.innerHTML = items.map(function(item) {

      var image = item.product.image
        ? '/' + item.product.image
        : 'https://via.placeholder.com/80';

      return `
        <div class="cart-item">

          <div class="cart-item-emoji">

            <img
              src="${image}"
              style="width:100%;height:100%;object-fit:cover;border-radius:8px;"
            >

          </div>

          <div class="cart-item-info">

            <div class="cart-item-col">
              ${item.product.brand ?? ''}
            </div>

            <div class="cart-item-name">
              ${item.product.title}
            </div>

            <div class="cart-item-meta">

              <div style="display:flex;align-items:center;gap:.3rem">

                <button
                  class="ci-qty-btn"
                  onclick="changeCartQty(${item.product.id}, -${item.product.moq || 1})"
                >
                  −
                </button>

                <span class="ci-qty-num">
                  ${item.qty}
                </span>

                <button
                  class="ci-qty-btn"
                  onclick="changeCartQty(${item.product.id}, ${item.product.moq || 1})"
                >
                  +
                </button>

              </div>

              <span class="cart-item-price">
                £${(item.product.price * item.qty).toFixed(2)}
              </span>

            </div>

          </div>

          <button
            class="cart-item-remove"
            onclick="removeFromCart(${item.product.id})"
          >
            ✕
          </button>

        </div>
      `;

    }).join('');
  }

  var vat = total * 0.2;

  var summary = document.getElementById('cartSummary');

  summary.innerHTML = items.length > 0

    ? '<div class="cs-row"><span>Subtotal (' + totalQty + ' units)</span><span>£' + total.toFixed(2) + '</span></div>'
    + '<div class="cs-row"><span>VAT (20%)</span><span>£' + vat.toFixed(2) + '</span></div>'
    + '<div class="cs-row"><span>Delivery</span><span>TBC on confirmation</span></div>'
    + '<div class="cs-row cs-total"><span><strong>Order total</strong></span><span>£' + (total + vat).toFixed(2) + '</span></div>'

    : '';
}
function toggleCart() {
  document.getElementById('cartOverlay').classList.toggle('open');
  document.getElementById('cartPanel').classList.toggle('open');
  updateCartUI();
}

/* ─── ORDER FLOW ──────────────────────────────────────────── */
// async function placeOrder() {
//   var items = Object.values(cart).filter(function(i) { return i.qty > 0; });
//   if (!items.length) { showToast('Add items to your order first'); return; }
  

//   try {

//     const response = await fetch('/place-order-new', {

//       method: 'POST',

//       headers: {
//         'Content-Type': 'application/json',
//         'Accept': 'application/json',
//         'X-CSRF-TOKEN': document
//           .querySelector('meta[name="csrf-token"]')
//           .getAttribute('content')
//       }

//     });

//     const data = await response.json();

//     if (!data.status) {

//       showToast(data.message);

//       return;
//     }

//     let orderId = data.order_id;

//     console.log('Order Created:', orderId);
    
//     document.getElementById('cartPanel').classList.remove('open');
//     document.getElementById('cartOverlay').classList.remove('open');
//   } catch (error) {

//     console.log(error.message);

//     showToast(error.message || 'Server error');

//   }

// }

async function placeOrder() {

  var items = Object.values(cart).filter(function(i) {
    return i.qty > 0;
  });

  if (!items.length) {
    showToast('Add items to your order first');
    return;
  }

  try {

    const response = await fetch('/place-order-new', {

      method: 'POST',

      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-CSRF-TOKEN': document
          .querySelector('meta[name="csrf-token"]')
          .getAttribute('content')
      }

    });

    const data = await response.json();

    if (!data.status) {

      showToast(data.message);
      return;
    }

    let subtotal = 0;

    let message =
`📦 *NEW ORDER RECEIVED*

🆔 Order ID: #${data.order_id}

━━━━━━━━━━━━━━━
`;

    data.items.forEach(function(item, index) {

      let lineTotal = parseFloat(item.product.price) * item.quantity;

      subtotal += lineTotal;

      message +=
`${index + 1}. ${item.product.title}

Qty: ${item.quantity}
Price: £${parseFloat(item.product.price).toFixed(2)}
Total: £${lineTotal.toFixed(2)}

`;
    });

    let vat = subtotal * 0.20;
    let grandTotal = subtotal + vat;

    message +=
`━━━━━━━━━━━━━━━

Subtotal: £${subtotal.toFixed(2)}
VAT (20%): £${vat.toFixed(2)}
Grand Total: £${grandTotal.toFixed(2)}

🔗 Admin Panel:
${data.admin_url}
`;

    let whatsappUrl =
      `https://wa.me/447700900360?text=${encodeURIComponent(message)}`;

    window.open(whatsappUrl, '_blank');

    cart = {};

    updateCartUI();

    document.getElementById('cartPanel').classList.remove('open');
    document.getElementById('cartOverlay').classList.remove('open');

    showToast('Order sent on WhatsApp');

  } catch (error) {

    console.log(error);

    showToast('Server error');
  }
}

function closeModal() {
  document.getElementById('orderModal').classList.remove('show');
  var s1 = document.getElementById('omStep1');
  var s2 = document.getElementById('omStep2');
  if (s1) s1.style.display = 'block';
  if (s2) s2.style.display = 'none';
}

function copyVal(text, msg) {
  if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard.writeText(text).then(function() { showToast(msg || 'Copied!'); });
  } else {
    showToast(text);
  }
}

/* ─── FILTERS ─────────────────────────────────────────────── */
// function filterCat(cat, el) {
//   currentCat = cat;
//   document.querySelectorAll('.cat-pill').forEach(function(p) { p.classList.remove('active'); });
//   document.querySelectorAll('.collection-chip').forEach(function(p) { p.classList.remove('active'); });
//   if (el && el.classList) {
//     el.classList.add('active');
//   } else if (cat !== 'all') {
//     // Try to highlight matching collection chip or cat pill
//     var pills = document.querySelectorAll('.cat-pill');
//     for (var i = 0; i < pills.length; i++) {
//       if (pills[i].textContent.toLowerCase().indexOf(cat) !== -1) {
//         pills[i].classList.add('active'); break;
//       }
//     }
//   } else {
//     var firstPill = document.querySelector('.cat-pill');
//     if (firstPill) firstPill.classList.add('active');
//   }
//   renderProducts();
// }
function filterCat(cat, el) {

  currentCat = cat;

  document.querySelectorAll('.cat-pill').forEach(function(p) {
    p.classList.remove('active');
  });

  document.querySelectorAll('.collection-chip').forEach(function(p) {
    p.classList.remove('active');
  });

  if (el) {
    el.classList.add('active');
  }

  renderProducts();
}
function filterBrand(b,el){}
function filterProducts() {
  currentSearch = document.getElementById('searchInput').value.toLowerCase().trim();
  renderProducts();
}

/* ─── TOAST ───────────────────────────────────────────────── */
var toastTimer;
function showToast(msg) {
  var t = document.getElementById('toast');
  document.getElementById('toastMsg').textContent = msg;
  t.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer = setTimeout(function() { t.classList.remove('show'); }, 2800);
}

/* ─── INIT ────────────────────────────────────────────────── */
document.getElementById('orderModal').addEventListener('click', function(e) {
  if (e.target === this) closeModal();
});
document.querySelectorAll('input[name="delivery"]').forEach(function(r) {
  r.addEventListener('change', updateCartUI);
});


// function renderProducts() {
//   var grid = document.getElementById('productGrid');
//   var filtered = PRODUCTS.filter(function(p) {
//     var catOk    = currentCat === 'all' || p.cat === currentCat;
//     var searchOk = !currentSearch || p.name.toLowerCase().includes(currentSearch)
//                    || p.col.toLowerCase().includes(currentSearch)
//                    || p.desc.toLowerCase().includes(currentSearch);
//     return catOk && searchOk;
//   });
//   document.getElementById('productCount').textContent = filtered.length + ' products';
//   grid.innerHTML = filtered.map(function(p) {
//     var inCart      = cart[p.id] && cart[p.id].qty > 0;
//     var outOfStock  = p.stock === 0;
//     var lowStock    = p.stock > 0 && p.stock < 20;
//     var stockClass  = outOfStock ? 'stock-out' : lowStock ? 'stock-low' : 'stock-in';
//     var stockLabel  = outOfStock ? 'Out of stock' : lowStock ? 'Only ' + p.stock + ' left' : 'In stock';
//     var badge       = p.badge ? '<span class="product-badge badge-' + p.badge + '">' + p.badge + '</span>' : '';
//     var qtyVal      = inCart ? cart[p.id].qty : p.moq;
//     return '<div class="product-card">'
//       + badge
//       + '<div class="product-img" style="background:linear-gradient(135deg,#EFF6FF,#DBEAFE)">' + p.emoji + '</div>'
//       + '<div class="product-info">'
//       + '<div class="product-collection">' + p.col + '</div>'
//       + '<div class="product-name">' + p.name + '</div>'
//       + '<div class="product-desc">' + p.desc + '</div>'
//       + '<div class="product-meta">'
//       + '<div><span class="product-price">£' + p.price.toFixed(2) + '</span><span class="product-unit">/unit</span></div>'
//       + '<span class="product-moq">MOQ ' + p.moq + '</span>'
//       + '</div>'
//       + '<div class="product-stock"><div class="stock-dot ' + stockClass + '"></div>' + stockLabel + '</div>'
//       + (!outOfStock ? (
//           '<div class="qty-control ' + (inCart ? 'show' : '') + '" id="qty-' + p.id + '">'
//         + '<button class="qty-btn" onclick="changeQty(' + p.id + ',-' + p.moq + ')">−</button>'
//         + '<input class="qty-input" type="number" id="qtyval-' + p.id + '" value="' + qtyVal + '" min="' + p.moq + '" step="' + p.moq + '" onchange="setQty(' + p.id + ',this.value)">'
//         + '<button class="qty-btn" onclick="changeQty(' + p.id + ',' + p.moq + ')">+</button>'
//         + '</div>'
//         + '<button class="add-btn ' + (inCart ? 'added' : '') + '" id="addbtn-' + p.id + '" onclick="addToCart(' + p.id + ')">'
//         + (inCart ? '✓ In order — update' : '+ Add to order')
//         + '</button>'
//       ) : '<button class="add-btn out" disabled>Out of stock</button>')
//       + '</div></div>';
//   }).join('');
// }

function renderProducts() {

  var grid = document.getElementById('productGrid');

  var filtered = PRODUCTS.filter(function(p) {

  var catOk =
  currentCat === 'all' ||
  (p.category && p.category.id == currentCat);

    var searchOk =
      !currentSearch ||
      p.title.toLowerCase().includes(currentSearch) ||
      (p.brand && p.brand.toLowerCase().includes(currentSearch)) ||
      (p.description &&
       p.description.toLowerCase().includes(currentSearch));

    return catOk && searchOk;
  });

  document.getElementById('productCount').textContent =
    filtered.length + ' products';

  grid.innerHTML = filtered.map(function(p) {

    var inCart = cart[p.id] && cart[p.id].qty > 0;

    // var outOfStock = p.quantity <= 0;

    // var lowStock = p.quantity > 0 && p.quantity < 20;

    var totalQty = 0;

    if (p.locations && p.locations.length > 0) {

      totalQty = p.locations.reduce(function(sum, loc) {

        return sum + parseInt(loc.quantity || 0);

      }, 0);
    }

    var outOfStock = totalQty <= 0;

    var lowStock = totalQty > 0 && totalQty < 20;

    var stockClass =
      outOfStock ? 'stock-out'
      : lowStock ? 'stock-low'
      : 'stock-in';

    var stockLabel =
      outOfStock
        ? 'Out of stock'
        : lowStock
          ? 'Only ' + totalQty + ' left'
          : totalQty + ' in stock';

    var qtyVal = inCart ? cart[p.id].qty : (p.moq || 1);

    var image = p.image
      ? '/' + p.image
      : 'https://via.placeholder.com/300x300';

    return `
      <div class="product-card">

        <div class="product-img">
          <img
            src="${image}"
            alt="${p.title}"
            style="width:100%;height:100%;object-fit:cover;"
          >
        </div>

        <div class="product-info">

          <div class="product-collection">
            ${p.brand ?? ''}
          </div>

          <div class="product-name">
            ${p.title}
          </div>

          <div class="product-desc">
            ${p.description ?? ''}
          </div>

          <div class="product-meta">

            <div>
              <span class="product-price">
                £${parseFloat(p.price).toFixed(2)}
              </span>

              <span class="product-unit">
                /unit
              </span>
            </div>

            <span class="product-moq">
              MOQ ${p.moq ?? 1}
            </span>

          </div>

          <div class="product-stock">
            <div class="stock-dot ${stockClass}"></div>
            ${stockLabel}
          </div>

          ${
            !outOfStock
            ? `
              <div class="qty-control ${inCart ? 'show' : ''}"
                   id="qty-${p.id}">

                <button class="qty-btn"
                        onclick="changeQty(${p.id},-${p.moq || 1})">
                  −
                </button>

                <input
                  class="qty-input"
                  type="number"
                  id="qtyval-${p.id}"
                  value="${qtyVal}"
                  min="${p.moq || 1}"
                  step="${p.moq || 1}"
                  onchange="setQty(${p.id},this.value)"
                >

                <button class="qty-btn"
                        onclick="changeQty(${p.id},${p.moq || 1})">
                  +
                </button>

              </div>

              <button
                class="add-btn ${inCart ? 'added' : ''}"
                id="addbtn-${p.id}"
                onclick="addToCart(${p.id})"
              >
                ${inCart
                  ? '✓ In order — update'
                  : '+ Add to order'}
              </button>
            `
            : `
              <button class="add-btn out" disabled>
                Out of stock
              </button>
            `
          }

        </div>

      </div>
    `;
  }).join('');
}

function renderDeals() {
  document.getElementById('dealsRow').innerHTML = DEALS.map(d => {
    const p = PRODUCTS.find(x => x.id === d.id);
    if(!p) return '';
    return `<div class="deal-card" onclick="addToCart(${p.id})">
      <div class="deal-emoji">${p.emoji}</div>
      <div class="deal-info">
        <div class="deal-name">${p.name}</div>
        <div class="deal-price-row">
          <span class="deal-price">£${p.price.toFixed(2)}</span>
          <span class="deal-was">£${d.was.toFixed(2)}</span>
          <span class="deal-save">SAVE ${d.save}</span>
        </div>
        <div class="deal-stock">MOQ ${p.moq} · ${p.stock>0?p.stock+' in stock':'Out of stock'}</div>
      </div>
    </div>`;
  }).join('');
}


renderProducts();
renderDeals();
updateCartUI();
</script>
</body>
</html>
