<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>NoorStyle Wholesale — Islamic Fashion & Modest Wear</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
:root{
  --bg:      #FAF8F5;
  --surface: #FFFFFF;
  --card:    #FFFFFF;
  --card2:   #F5F1EB;
  --border:  rgba(0,0,0,.08);
  --border2: rgba(0,0,0,.14);
  --rose:    #C4855A;
  --rose2:   #E8A87C;
  --rose3:   #F5D5C0;
  --teal:    #2D7D6F;
  --teal2:   #3DA090;
  --teal3:   #B8DDD8;
  --gold:    #B8962E;
  --gold2:   #D4B050;
  --gold3:   #F0DFA0;
  --plum:    #6B3F6B;
  --plum2:   #9B6E9B;
  --navy:    #1A2744;
  --text:    #1C1917;
  --muted:   #78716C;
  --muted2:  #A8A29E;
  --green:   #25D366;
  --dgrn:    #128C7E;
  --white:   #FFFFFF;
  --ghost:   #e8e2d8;
  --ink:     #0f0d0a;
  --warm:    #2e2820;
  --dim:     #b8b0a0;




  --f-head:  'Cormorant Garamond', Georgia, serif;
  --f-body:  'Inter', sans-serif;
  --r:       12px;
  --r2:      8px;
  --border:  rgba(180,140,60,.15);

  --r3:      20px;
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
  background:linear-gradient(135deg,#F8F4EF 0%,#EDE7DC 40%,#E8F4F0 100%);
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

  .view-all-btn{
    background:#000;
    color:#fff;
    padding:10px 20px;
    text-decoration:none;
    border:none;
    border-radius:0;
    font-size:14px;
    font-weight:600;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    text-align: center;
    transition:0.3s ease;
  }

  .view-all-btn:hover{
    background:#222;
    color:#fff;
  }
</style>
</head>
<body>

<div class="top-banner">🌙 Eid collection now in stock &nbsp;·&nbsp; Free delivery on orders over £300 &nbsp;·&nbsp; WhatsApp orders: +44 7700 900 361</div>

<nav>
  <a class="nav-logo" href="#">
    <div class="nav-logo-mark">نور</div>
    NoorStyle
  </a>
  <div class="nav-search">
    <span class="nav-search-icon">🔍</span>
    <input type="text" id="searchInput" placeholder="Search hijabs, abayas, scarves..." oninput="filterProducts()">
  </div>
  <div class="nav-right">
    <div class="nav-contact">📞 +44 7700 900 361</div>
    @if(Auth::check())
        <!-- Profile Section -->
        <div class="relative" id="profile-container">
            <button onclick="toggleProfile()"
                class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-xl transition">
                
                <div
                    class="w-10 h-10 bg-[#3DA090] rounded-full flex items-center justify-center text-white font-bold">
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
            class="px-5 py-2.5 text-sm font-medium bg-[#3DA090] text-white rounded-full hover:bg-blue-800 transition shadow-lg">
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
  <div class="hero-tag">✦ Islamic Fashion Wholesale · Charles House, Southall</div>
  <h1>Modest Fashion.<br><span>Beautiful Quality.</span></h1>
  <p class="hero-sub">Premium hijabs, abayas, scarves & modest wear. Wholesale prices. WhatsApp ordering. UK-wide delivery.</p>
  <div class="hero-cta">
    <a href="#products" class="btn-primary">Browse collection</a>
    <a href="https://wa.me/447700900361" class="btn-secondary">💬 WhatsApp order</a>
  </div>
  <div class="hero-stats">
    <div class="h-stat"><div class="h-stat-val">300+</div><div class="h-stat-lbl">Styles in stock</div></div>
    <div class="h-stat"><div class="h-stat-val">MOQ 6</div><div class="h-stat-lbl">Minimum per style</div></div>
    <div class="h-stat"><div class="h-stat-val">24/7</div><div class="h-stat-lbl">Portal open</div></div>
    <div class="h-stat"><div class="h-stat-val">UK-wide</div><div class="h-stat-lbl">Delivery</div></div>
  </div>
</div>

<div class="marquee-wrap">
  <div class="marquee-track">
    <span class="marquee-item">🌙 Eid collection live — premium embroidered abayas <span class="mk">NEW</span></span>
    <span class="marquee-item">🧕 Jersey hijabs restocked — 24 colours available</span>
    <span class="marquee-item">✨ Chiffon printed scarves — buy 12 get 2 free <span class="mk">DEAL</span></span>
    <span class="marquee-item">🌸 Ramadan modest wear collection — limited stock</span>
    <span class="marquee-item">💎 Turkish cotton prayer sets just landed <span class="mk">HOT</span></span>
    <span class="marquee-item">📦 Free delivery on all orders over £300 UK-wide</span>
    <span class="marquee-item">🌙 Eid collection live — premium embroidered abayas <span class="mk">NEW</span></span>
    <span class="marquee-item">🧕 Jersey hijabs restocked — 24 colours available</span>
    <span class="marquee-item">✨ Chiffon printed scarves — buy 12 get 2 free <span class="mk">DEAL</span></span>
    <span class="marquee-item">🌸 Ramadan modest wear collection — limited stock</span>
    <span class="marquee-item">💎 Turkish cotton prayer sets just landed <span class="mk">HOT</span></span>
    <span class="marquee-item">📦 Free delivery on all orders over £300 UK-wide</span>
  </div>
</div>

{{-- <div class="cat-bar" id="catBar">
  <div class="cat-pill active" onclick="filterCat('all',this)">All Products</div>
  <div class="cat-pill" onclick="filterCat('hijab',this)">🧕 Hijabs</div>
  <div class="cat-pill" onclick="filterCat('scarf',this)">✨ Scarves</div>
  <div class="cat-pill" onclick="filterCat('abaya',this)">👗 Abayas</div>
  <div class="cat-pill" onclick="filterCat('prayer',this)">🤲 Prayer Sets</div>
  <div class="cat-pill" onclick="filterCat('modest',this)">🌸 Modest Tops</div>
  <div class="cat-pill" onclick="filterCat('kids',this)">🌟 Kids</div>
  <div class="cat-pill" onclick="filterCat('accessories',this)">💎 Accessories</div>
</div> --}}

<div class="cat-bar" id="catBar">

    <div class="cat-pill active"
        data-cat="all"
        onclick="filterCat('all')">

        All Products
    </div>

    @foreach($categories as $category)

        <div class="cat-pill"
            data-cat="{{ strtolower($category->name) }}"
            onclick="filterCat('{{ strtolower($category->name) }}')">

            {{ $category->name }}

        </div>

    @endforeach

</div>

<div class="main">

  <div class="featured-banner">
    <div class="fb-left">
      <h2>🌙 Eid Collection 2025</h2>
      <p>Embroidered abayas, premium chiffon, and luxury prayer sets. All in stock. Order today for guaranteed delivery before Eid.</p>
      <div class="fb-badges">
        <span class="fb-b">✓ In Stock Now</span>
        <span class="fb-b">📦 Same Day Dispatch</span>
        <span class="fb-b">🎁 Gift packaging available</span>
      </div>
    </div>
    <div class="fb-emoji">🕌</div>
  </div>

  <!-- Collections -->
  <div class="section-head">
    <div class="section-title">Shop by collection</div>
  </div>
  {{-- <div class="collection-strip">
    <div class="collection-chip active" onclick="filterCat('all',document.querySelector('.cat-pill'))">
      <div class="cc-icon">🌟</div><div class="cc-name">All</div><div class="cc-count">40 styles</div>
    </div>
    <div class="collection-chip" onclick="filterCat('eid',null)">
      <div class="cc-icon">🌙</div><div class="cc-name">Eid</div><div class="cc-count">8 styles</div>
    </div>
    <div class="collection-chip" onclick="filterCat('turkish',null)">
      <div class="cc-icon">🇹🇷</div><div class="cc-name">Turkish</div><div class="cc-count">6 styles</div>
    </div>
    <div class="collection-chip" onclick="filterCat('jersey',null)">
      <div class="cc-icon">🧕</div><div class="cc-name">Jersey</div><div class="cc-count">10 styles</div>
    </div>
    <div class="collection-chip" onclick="filterCat('chiffon',null)">
      <div class="cc-icon">✨</div><div class="cc-name">Chiffon</div><div class="cc-count">12 styles</div>
    </div>
    <div class="collection-chip" onclick="filterCat('kids',null)">
      <div class="cc-icon">🌸</div><div class="cc-name">Kids</div><div class="cc-count">7 styles</div>
    </div>
  </div> --}}
  <div class="collection-strip">

    <div class="collection-chip active"
        data-cat="all"
        onclick="filterCat('all')">

        <div class="cc-icon">🌟</div>

        <div class="cc-name">All</div>

        <div class="cc-count">
            {{ $categories->count() }} styles
        </div>
    </div>

    @foreach($categories as $category)

        <div class="collection-chip"
            data-cat="{{ strtolower($category->name) }}"
            onclick="filterCat('{{ strtolower($category->name) }}')">

            <div class="cc-icon">📦</div>

            <div class="cc-name">
                {{ $category->name }}
            </div>

            <div class="cc-count">
                {{ $category->products->count() }} styles
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
    <div class="info-card"><div class="info-icon">🎨</div><div><div class="info-title">Multiple colours per style</div><div class="info-desc">Most styles available in 6–24 colours. Mix colours within your minimum order.</div></div></div>
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
    <div class="cart-empty"><div class="cart-empty-icon">🛍</div>Your cart is empty.<br>Add styles to start your order.</div>
  </div>
  <div class="cart-footer">
    <div class="cart-retailer">
      <label>YOUR SHOP NAME / CONTACT</label>
      <input type="text" id="retailerName" placeholder="e.g. Fatima Fashion, Leicester">
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
    class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-300"
    onclick="closeModal()"></div>

  <div id="modal"
      class="fixed inset-0 z-[9999] flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300">

      <div id="modal-content"
          class="relative w-full max-w-md h-[96vh] overflow-y-auto border shadow-2xl transform scale-95 transition-transform"
          style="
              background: var(--white);
              border-color: var(--border);
              border-radius: var(--r3);
              box-shadow: 0 30px 80px rgba(0,0,0,.18);
          ">

          <!-- GOLD TOP BORDER -->
          <div class="absolute top-0 left-0 right-0 h-[2px]"
              style="background: linear-gradient(90deg,var(--gold),var(--gold3),var(--gold));"></div>

          <!-- CLOSE -->
          <div class="absolute top-5 right-5 z-20">
              <button onclick="closeModal()"
                  class="w-10 h-10 flex items-center justify-center transition"
                  style="
                      background: var(--bg);
                      border:1px solid var(--ghost);
                      color:var(--muted);
                      border-radius:50%;
                  ">
                  <i class="fas fa-times"></i>
              </button>
          </div>

          <!-- TAB NAV -->
          <div class="p-6 pb-0">
              <div class="flex p-1"
                  style="
                      background: var(--ghost);
                      border-radius: var(--r2);
                  ">

                  <button onclick="switchTab('login')" id="tab-login"
                      class="flex-1 py-3 px-4 text-sm font-medium transition-all duration-300"
                      style="
                          border-radius: var(--r);
                          color: var(--muted);
                      ">
                      Trade Login
                  </button>

                  <button onclick="switchTab('register')" id="tab-register"
                      class="flex-1 py-3 px-4 text-sm font-medium transition-all duration-300 shadow-sm"
                      style="
                          background: var(--white);
                          color: var(--ink);
                          border-radius: var(--r);
                          border:1px solid var(--border);
                      ">
                      Open Account
                  </button>
              </div>
          </div>

          <!-- LOGIN -->
          <div id="form-login" class="hidden p-8 pt-6">

              <div class="text-center mb-8">
                  <p class="tracking-[0.25em] uppercase text-[11px] mb-3"
                      style="color:var(--gold);">
                      Luxury Trade Access
                  </p>

                  <h3 class="font-display text-4xl mb-3"
                      style="
                          color: var(--ink);
                          font-family:'Cormorant',serif;
                      ">
                      Welcome Back
                  </h3>

                  <p class="text-sm leading-7"
                      style="color:var(--muted);">
                      Sign in to access your trade pricing and exclusive collection.
                  </p>
              </div>

              <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="space-y-5">

                      <div>
                          <label class="block text-xs uppercase tracking-[0.18em] mb-3 font-medium"
                              style="color:var(--warm);">
                              Business Email
                          </label>

                          <input type="email" name="email"
                              class="w-full px-5 py-4 outline-none transition"
                              style="
                                  background: var(--bg);
                                  border:1px solid var(--ghost);
                                  border-radius: var(--r2);
                                  color: var(--ink);
                              "
                              placeholder="your@business.com">
                      </div>

                      <div>
                          <label class="block text-xs uppercase tracking-[0.18em] mb-3 font-medium"
                              style="color:var(--warm);">
                              Password
                          </label>

                          <div class="relative">
                              <input type="password" name="password" id="login-password"
                                  class="w-full px-5 py-4 outline-none transition"
                                  style="
                                      background: var(--bg);
                                      border:1px solid var(--ghost);
                                      border-radius: var(--r2);
                                      color: var(--ink);
                                  "
                                  placeholder="••••••••">

                              <button type="button"
                                  onclick="togglePassword('login-password')"
                                  class="absolute right-4 top-1/2 -translate-y-1/2"
                                  style="color:var(--dim);">
                                  <i class="fas fa-eye"></i>
                              </button>
                          </div>
                      </div>

                      <div class="flex items-center justify-between text-sm">
                          <label class="flex items-center gap-2">
                              <input type="checkbox">
                              <span style="color:var(--muted)">Remember me</span>
                          </label>

                          <a href="#"
                              onclick="showForgotPassword()"
                              class="hover:underline"
                              style="color:var(--gold);">
                              Forgot password?
                          </a>
                      </div>

                      <button type="submit"
                          class="w-full py-4 uppercase tracking-[0.18em] text-xs transition"
                          style="
                              background: var(--teal2);
                              color:#fff;
                              border-radius: var(--r2);
                              border:1px solid var(--teal2);
                          ">
                          Sign In
                      </button>
                  </div>
              </form>
          </div>

          <!-- REGISTER -->
          <div id="form-register" class="p-8 pt-6">

              <div class="text-center mb-8">
                  <p class="tracking-[0.25em] uppercase text-[11px] mb-3"
                      style="color:var(--gold);">
                      Become A Partner
                  </p>

                  <h3 class="font-display text-4xl mb-3"
                      style="
                          color: var(--ink);
                          font-family:'Cormorant',serif;
                      ">
                      Open Trade Account
                  </h3>
              </div>

              <form action="{{ route('register-customer') }}" method="POST">
                  @csrf

                  <div class="space-y-5">

                      <div>
                          <label class="block text-xs uppercase tracking-[0.18em] mb-3 font-medium"
                              style="color:var(--warm);">
                              Business Name
                          </label>

                          <input type="text" name="business_name"
                              class="w-full px-5 py-4 outline-none transition"
                              style="
                                  background: var(--bg);
                                  border:1px solid var(--ghost);
                                  border-radius: var(--r2);
                              ">
                      </div>

                      <div>
                          <label class="block text-xs uppercase tracking-[0.18em] mb-3 font-medium"
                              style="color:var(--warm);">
                              Full Name
                          </label>

                          <input type="text" name="name"
                              class="w-full px-5 py-4 outline-none transition"
                              style="
                                  background: var(--bg);
                                  border:1px solid var(--ghost);
                                  border-radius: var(--r2);
                              ">
                      </div>

                      <div>
                          <label class="block text-xs uppercase tracking-[0.18em] mb-3 font-medium"
                              style="color:var(--warm);">
                              Business Email
                          </label>

                          <input type="email" name="email"
                              class="w-full px-5 py-4 outline-none transition"
                              style="
                                  background: var(--bg);
                                  border:1px solid var(--ghost);
                                  border-radius: var(--r2);
                              ">
                      </div>

                      <div>
                          <label class="block text-xs uppercase tracking-[0.18em] mb-3 font-medium"
                              style="color:var(--warm);">
                              Phone
                          </label>

                          <input type="tel" name="phone"
                              class="w-full px-5 py-4 outline-none transition"
                              style="
                                  background: var(--bg);
                                  border:1px solid var(--ghost);
                                  border-radius: var(--r2);
                              ">
                      </div>

                      <div class="flex items-start gap-3 text-sm leading-6">
                          <input type="checkbox" required class="mt-1">

                          <label style="color:var(--muted)">
                              I agree to the
                              <a href="#" style="color:var(--gold)">
                                  Terms of Trade
                              </a>
                              and confirm this is a legitimate business enquiry.
                          </label>
                      </div>

                      <button type="submit"
                          class="w-full py-4 uppercase tracking-[0.18em] text-xs transition"
                          style="
                              background: var(--teal2);
                              color:#fff;
                              border-radius: var(--r2);
                              border:1px solid var(--teal2);
                          ">
                          Submit Application
                      </button>
                  </div>
              </form>
          </div>

      </div>
  </div>

<div class="toast" id="toast"><div class="toast-dot"></div><span id="toastMsg">Added to cart</span></div>
<script>
    const PRODUCTS = @json($products);
</script>

<script>
    const IS_LOGGED_IN = @json(Auth::check());
</script>

<script>

  function toggleProfile() {
        const dropdown = document.getElementById('profile-dropdown');

        if (dropdown) {
            dropdown.classList.toggle('active');
        }
    }

    // Close profile dropdown
    document.addEventListener('click', (e) => {

        const container = document.getElementById('profile-container');
        const dropdown = document.getElementById('profile-dropdown');

        if (!container || !dropdown) return;

        if (!container.contains(e.target)) {
            dropdown.classList.remove('active');
        }
    });


    // TAB SWITCH
    function switchTab(tab) {

        const loginTab = document.getElementById('tab-login');
        const registerTab = document.getElementById('tab-register');

        const loginForm = document.getElementById('form-login');
        const registerForm = document.getElementById('form-register');

        if (!loginTab || !registerTab || !loginForm || !registerForm) return;

        if (tab === 'login') {

            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');

            loginTab.style.background = 'var(--white)';
            loginTab.style.color = 'var(--ink)';
            loginTab.style.border = '1px solid var(--border)';

            registerTab.style.background = 'transparent';
            registerTab.style.color = 'var(--muted)';
            registerTab.style.border = 'none';

        } else {

            registerForm.classList.remove('hidden');
            loginForm.classList.add('hidden');

            registerTab.style.background = 'var(--white)';
            registerTab.style.color = 'var(--ink)';
            registerTab.style.border = '1px solid var(--border)';

            loginTab.style.background = 'transparent';
            loginTab.style.color = 'var(--muted)';
            loginTab.style.border = 'none';
        }
    }


    // OPEN MODAL
    function openModal(type = 'register') {

        const overlay = document.getElementById('modal-overlay');
        const modal = document.getElementById('modal');
        const content = document.getElementById('modal-content');

        if (!overlay || !modal || !content) return;

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


    // CLOSE MODAL
    function closeModal() {

        const overlay = document.getElementById('modal-overlay');
        const modal = document.getElementById('modal');
        const content = document.getElementById('modal-content');

        if (!overlay || !modal || !content) return;

        overlay.classList.add('opacity-0', 'pointer-events-none');

        modal.classList.add('opacity-0', 'pointer-events-none');

        content.classList.remove('scale-100');
        content.classList.add('scale-95');

        setTimeout(() => {
            switchTab('register');
        }, 300);
    }


    // PASSWORD TOGGLE
    function togglePassword(id) {

        const input = document.getElementById(id);

        if (!input) return;

        input.type = input.type === 'password'
            ? 'text'
            : 'password';
    }

/* ─── CONFIG ──────────────────────────────────────────────── */
const SHOP_WA   = '447700900361';
const BANK_NAME = 'Lloyds Bank';
const ACCT_NAME = 'NoorStyle Wholesale Ltd';
const ACCT_NO   = '87654321';
const SORT_CODE = '30-90-89';
const REF_PFX   = 'NOOR-';

/* ─── CART STATE ──────────────────────────────────────────── */
let cart = {};
let currentCat    = 'all';
let currentSearch = '';
/* ─── PRODUCTS DATA ───────────────────────────────────────── */
/*const PRODUCTS = [
  {id:1,  emoji:'🧕', name:'Premium Jersey Hijab',                cat:'hijab',      col:'Jersey',    price:3.50, moq:6,  stock:240, badge:'hot',  desc:'Soft stretch jersey. 24 colours.', colours:['#1a1a1a','#4a3728','#8b7355','#c4a882','#d4af37','#2d5f3f'], colourCount:24},
  {id:2,  emoji:'🧕', name:'Jersey Hijab — Pastel Pack',          cat:'hijab',      col:'Jersey',    price:3.20, moq:12, stock:180, badge:null,   desc:'Lilac, blush, mint, sky. 4-pack.', colours:['#e8d5e8','#f5d5d5','#d5f5e3','#d5e8f5'], colourCount:12},
  {id:3,  emoji:'✨', name:'Chiffon Printed Scarf',               cat:'scarf',      col:'Chiffon',   price:4.20, moq:6,  stock:320, badge:'new',  desc:'Lightweight chiffon. Floral print.', colours:['#c2185b','#7b1fa2','#303f9f','#00796b'], colourCount:8},
  {id:4,  emoji:'✨', name:'Luxury Chiffon Hijab',                cat:'hijab',      col:'Chiffon',   price:5.50, moq:6,  stock:150, badge:null,   desc:'Premium silk-feel chiffon.', colours:['#1a1a1a','#4a3728','#8b0000','#d4af37','#2d5f3f','#191970'], colourCount:18},
  {id:5,  emoji:'✨', name:'Crinkle Chiffon Scarf',               cat:'scarf',      col:'Chiffon',   price:3.80, moq:12, stock:200, badge:'sale', desc:'Textured crinkle finish.', colours:['#f5f5dc','#deb887','#cd853f','#d2691e'], colourCount:10},
  {id:6,  emoji:'👗', name:'Embroidered Abaya — Black',           cat:'abaya',      col:'Eid',       price:28.00,moq:3,  stock:45,  badge:'eid',  desc:'Gold thread embroidery. Nida fabric.', colours:['#0a0a0a','#1a1a2e'], colourCount:2},
  {id:7,  emoji:'👗', name:'Open Front Abaya — Nude',             cat:'abaya',      col:'Eid',       price:24.00,moq:3,  stock:32,  badge:'eid',  desc:'Belt included. Soft nida.', colours:['#f5f5dc','#d2b48c','#c2b280'], colourCount:4},
  {id:8,  emoji:'👗', name:'Kimono Style Abaya',                  cat:'abaya',      col:'Eid',       price:26.50,moq:3,  stock:28,  badge:'hot',  desc:'Wide sleeves. Pearl buttons.', colours:['#0a0a0a','#2f4f4f','#800020'], colourCount:5},
  {id:9,  emoji:'👗', name:'Butterfly Abaya — Dusty Rose',        cat:'abaya',      col:'Turkish',   price:32.00,moq:2,  stock:18,  badge:'new',  desc:'Turkish design. Flowing cut.', colours:['#c9a9a6','#b76e79','#9b6e6e'], colourCount:4},
  {id:10, emoji:'🤲', name:'Turkish Cotton Prayer Set',           cat:'prayer',     col:'Turkish',   price:18.00,moq:4,  stock:60,  badge:'hot',  desc:'Prayer mat + tasbih + bag.', colours:['#2d5f3f','#1a2744','#6b3f6b','#8b4513'], colourCount:6},
  {id:11, emoji:'🤲', name:'Velvet Prayer Mat — Premium',         cat:'prayer',     col:'Turkish',   price:12.50,moq:6,  stock:85,  badge:null,   desc:'Thick velvet. Non-slip backing.', colours:['#2d5f3f','#1a2744','#800020','#d4af37'], colourCount:8},
  {id:12, emoji:'🤲', name:'Kids Prayer Set — Pink',              cat:'prayer',     col:'Kids',      price:9.80, moq:6,  stock:40,  badge:null,   desc:'Mini mat + hijab + bag. Ages 4-10.', colours:['#ffb6c1','#e6e6fa','#f0e68c'], colourCount:5},
  {id:13, emoji:'🌸', name:'Modest Tunic Top — Longline',         cat:'modest',     col:'Jersey',    price:14.00,moq:6,  stock:110, badge:null,   desc:'A-line cut. Side pockets.', colours:['#1a1a1a','#4a4a4a','#2d5f3f','#800020','#d4af37'], colourCount:10},
  {id:14, emoji:'🌸', name:'Pleated Modest Dress',                cat:'modest',     col:'Chiffon',   price:19.50,moq:4,  stock:55,  badge:'new',  desc:'Pleated skirt. Attached underslip.', colours:['#1a1a1a','#2f4f4f','#4a3728','#d4af37'], colourCount:6},
  {id:15, emoji:'🌸', name:'Modest Palazzo Trousers',             cat:'modest',     col:'Jersey',    price:11.00,moq:8,  stock:130, badge:'sale', desc:'Wide leg. Elastic waist.', colours:['#1a1a1a','#4a4a4a','#2d5f3f','#800020'], colourCount:8},
  {id:16, emoji:'🌟', name:'Kids Jersey Hijab — Small',           cat:'kids',       col:'Kids',      price:2.80, moq:12, stock:200, badge:null,   desc:'Soft jersey. Ages 5-12.', colours:['#ffb6c1','#e6e6fa','#f0e68c','#98fb98','#87ceeb'], colourCount:12},
  {id:17, emoji:'🌟', name:'Kids Abaya — Butterfly Style',        cat:'kids',       col:'Kids',      price:16.00,moq:6,  stock:35,  badge:null,   desc:'Lightweight nida. Matching hijab.', colours:['#ffb6c1','#e6e6fa','#f0e68c'], colourCount:4},
  {id:18, emoji:'🌟', name:'Kids Prayer Dress',                   cat:'kids',       col:'Kids',      price:8.50, moq:10, stock:50,  badge:null,   desc:'One-piece. Easy to wear.', colours:['#ffb6c1','#e6e6fa','#98fb98'], colourCount:5},
  {id:19, emoji:'💎', name:'Hijab Magnet Pins (6pk)',             cat:'accessories',col:'Generic',   price:2.20, moq:20, stock:400, badge:'sale', desc:'Strong magnets. No holes.', colours:['#d4af37','#c0c0c0','#cd7f32'], colourCount:8},
  {id:20, emoji:'💎', name:'Hijab Undercap — Cotton',             cat:'accessories',col:'Generic',   price:1.80, moq:20, stock:300, badge:null,   desc:'Breathable cotton. Tube style.', colours:['#1a1a1a','#4a3728','#f5f5dc'], colourCount:6},
  {id:21, emoji:'💎', name:'Tasbih — 99 Bead Crystal',            cat:'accessories',col:'Turkish',   price:4.50, moq:12, stock:80,  badge:'hot',  desc:'Crystal beads. Velvet pouch.', colours:['#d4af37','#c0c0c0','#2d5f3f','#1a2744'], colourCount:6},
  {id:22, emoji:'💎', name:'Hijab Storage Box — 3 Tier',          cat:'accessories',col:'Generic',   price:7.50, moq:8,  stock:45,  badge:null,   desc:'Acrylic. Dust-free storage.', colours:['#c0c0c0','#d4af37'], colourCount:2},
  {id:23, emoji:'🧕', name:'Pashmina Hijab — Winter Weight',      cat:'hijab',      col:'Chiffon',   price:6.50, moq:6,  stock:0,   badge:null,   desc:'Warm pashmina blend.', colours:['#1a1a1a','#4a3728','#800020','#2d5f3f'], colourCount:8},
  {id:24, emoji:'👗', name:'Belted Abaya — Navy',                 cat:'abaya',      col:'Eid',       price:25.00,moq:3,  stock:22,  badge:'low',  desc:'Self-tie belt. Side pockets.', colours:['#1a2744','#0a0a0a','#2f4f4f'], colourCount:3},
  {id:25, emoji:'✨', name:'Satin Edge Chiffon Scarf',            cat:'scarf',      col:'Chiffon',   price:4.80, moq:8,  stock:95,  badge:null,   desc:'Satin trim. Luxe finish.', colours:['#1a1a1a','#800020','#d4af37','#2d5f3f'], colourCount:10},
  {id:26, emoji:'🌸', name:'Modest Swimwear — Burkini',           cat:'modest',     col:'Generic',   price:35.00,moq:2,  stock:15,  badge:'new',  desc:'UV protection. Quick dry.', colours:['#1a2744','#2d5f3f','#4a4a4a'], colourCount:3},
  {id:27, emoji:'🧕', name:'Instant Hijab — Ready to Wear',       cat:'hijab',      col:'Jersey',    price:5.00, moq:8,  stock:120, badge:null,   desc:'No pins needed. Pull-on style.', colours:['#1a1a1a','#4a3728','#2d5f3f','#800020'], colourCount:8},
  {id:28, emoji:'💎', name:'Hijab Cap — Bonnet Style',            cat:'accessories',col:'Generic',   price:1.50, moq:30, stock:500, badge:'sale', desc:'Full coverage. Non-slip band.', colours:['#1a1a1a','#4a3728','#f5f5dc','#d4af37'], colourCount:10},
  {id:29, emoji:'👗', name:'Open Abaya with Lace Trim',           cat:'abaya',      col:'Turkish',   price:29.00,moq:3,  stock:20,  badge:null,   desc:'Delicate lace cuffs. Nida.', colours:['#0a0a0a','#1a2744','#800020'], colourCount:4},
  {id:30, emoji:'🤲', name:'Prayer Rug — Padded Travel',          cat:'prayer',     col:'Turkish',   price:10.00,moq:8,  stock:70,  badge:null,   desc:'Foldable. Carry bag included.', colours:['#2d5f3f','#1a2744','#6b3f6b','#8b4513'], colourCount:5},
  {id:31, emoji:'🌟', name:'Kids Eid Dress — Embroidered',        cat:'kids',       col:'Kids',      price:18.50,moq:4,  stock:25,  badge:'eid',  desc:'Satin skirt. Pearl details.', colours:['#ffb6c1','#e6e6fa','#f0e68c'], colourCount:3},
  {id:32, emoji:'🌸', name:'Modest Cardigan — Longline',          cat:'modest',     col:'Jersey',    price:15.00,moq:6,  stock:60,  badge:null,   desc:'Open front. Pockets.', colours:['#1a1a1a','#4a4a4a','#2d5f3f','#800020','#d4af37'], colourCount:6},
  {id:33, emoji:'✨', name:'Shimmer Chiffon Scarf',               cat:'scarf',      col:'Chiffon',   price:5.20, moq:8,  stock:85,  badge:'hot',  desc:'Subtle shimmer. Evening wear.', colours:['#d4af37','#c0c0c0','#e6e6fa','#ffb6c1'], colourCount:6},
  {id:34, emoji:'🧕', name:'Cotton Voile Hijab',                  cat:'hijab',      col:'Chiffon',   price:3.00, moq:12, stock:150, badge:null,   desc:'Breathable cotton voile.', colours:['#1a1a1a','#4a3728','#f5f5dc','#d4af37'], colourCount:12},
  {id:35, emoji:'💎', name:'Hijab Ring Set — Gold Plated',        cat:'accessories',col:'Generic',   price:3.50, moq:15, stock:200, badge:null,   desc:'3-piece ring set. Adjustable.', colours:['#d4af37','#c0c0c0'], colourCount:2},
  {id:36, emoji:'👗', name:'Maxi Abaya — Plain Nida',             cat:'abaya',      col:'Eid',       price:22.00,moq:4,  stock:40,  badge:null,   desc:'Classic cut. Zip front.', colours:['#0a0a0a','#1a2744','#2f4f4f','#4a3728'], colourCount:6},
  {id:37, emoji:'🤲', name:'Quran Stand — Wooden',                cat:'prayer',     col:'Generic',   price:8.00, moq:6,  stock:30,  badge:null,   desc:'Foldable. Engraved design.', colours:['#8b4513','#d4af37'], colourCount:2},
  {id:38, emoji:'🌸', name:'Modest Skirt — Maxi Pleated',         cat:'modest',     col:'Chiffon',   price:13.50,moq:6,  stock:45,  badge:null,   desc:'Elastic waist. Lined.', colours:['#1a1a1a','#2f4f4f','#800020','#2d5f3f'], colourCount:5},
  {id:39, emoji:'🌟', name:'Kids Jersey Scarf — Printed',         cat:'kids',       col:'Kids',      price:2.50, moq:15, stock:80,  badge:null,   desc:'Fun prints. Soft jersey.', colours:['#ffb6c1','#87ceeb','#98fb98','#f0e68c'], colourCount:8},
  {id:40, emoji:'💎', name:'Hijab Shawl Pin — Crystal',           cat:'accessories',col:'Turkish',   price:2.80, moq:20, stock:120, badge:'sale', desc:'Crystal centre. Secure clasp.', colours:['#d4af37','#c0c0c0','#cd7f32'], colourCount:5},
];*/

const DEALS = [
  {id:19, was:3.50, save:'37%'},
  {id:5,  was:5.20, save:'27%'},
  {id:15, was:15.00,save:'27%'},
  {id:28, was:2.20, save:'32%'},
  {id:40, was:4.00, save:'30%'},
  {id:3,  was:5.80, save:'28%'},
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
// function changeQty(id, delta) {
//   var p = PRODUCTS.find(x => x.id === id);
//   if (!cart[id]) cart[id] = { product:p, qty:p.moq };
//   cart[id].qty = Math.max(p.moq, cart[id].qty + delta);
//   var inp = document.getElementById('qtyval-' + id);
//   if (inp) inp.value = cart[id].qty;
//   updateCartUI();
// }
// function setQty(id, val) {
//   var p = PRODUCTS.find(x => x.id === id);
//   var qty = Math.max(p.moq, parseInt(val) || p.moq);
//   if (!cart[id]) cart[id] = { product:p, qty:qty };
//   else cart[id].qty = qty;
//   updateCartUI();
// }
// function removeFromCart(id) {
//   delete cart[id];
//   updateCartUI();
//   renderProducts();
// }
// function changeCartQty(id, delta) {
//   if (!cart[id]) return;
//   var p  = cart[id].product;
//   var nq = cart[id].qty + delta;
//   if (nq < p.moq) { removeFromCart(id); return; }
//   cart[id].qty = nq;
//   updateCartUI();
// }
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

async function addToCart(id) {

  console.log("call add to cart product:", id);

    if (!IS_LOGGED_IN) {

        openModal('login');

        return;
    }

    const p = PRODUCTS.find(x => x.id === id);

    console.log("COMPARE FOR CALL:", p);

    if (!p) return;

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
                quantity: p.moq ?? 1
            })

        });

        console.log(response);

        const data = await response.json();

        if (data.status) {

            showToast(`${p.title} added to cart`);

            await loadCart();

            renderProducts();
        }

    } catch (error) {

        console.log(error);

    }
}

async function changeQty(id, delta) {

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
                quantity: delta
            })

        });

        const data = await response.json();

        if (data.status) {

            await loadCart();

            renderProducts();
        }

    } catch (error) {

        console.log(error);

    }
}

async function setQty(id, val) {

    const p = PRODUCTS.find(x => x.id === id);

    if (!p) return;

    const currentQty = cart[id]?.qty || 0;

    const newQty = parseInt(val) || p.moq;

    const diff = newQty - currentQty;

    if (diff === 0) return;

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
                quantity: diff
            })

        });

        const data = await response.json();

        if (data.status) {

            await loadCart();

            renderProducts();
        }

    } catch (error) {

        console.log(error);

    }
}

async function removeFromCart(id) {

    if (!cart[id]) return;

    try {

        const response = await fetch(
            `/remove-cart/${cart[id].cart_id}`,
            {
                method: 'DELETE',

                headers: {
                    'X-CSRF-TOKEN': document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute('content')
                }
            }
        );

        const data = await response.json();

        if (data.status) {

            showToast('Item removed');

            await loadCart();

            renderProducts();
        }

    } catch (error) {

        console.log(error);

    }
}

async function changeCartQty(id, delta) {

    await changeQty(id, delta);
}

async function loadCart() {

    try {

        const response = await fetch('/cart-items');

        const result = await response.json();

        console.log(result);

        if (!result.status) return;

        cart = {};

        result.data.forEach(item => {

            cart[item.product.id] = {

              cart_id: item.id,

              product: {
                  ...item.product,

                  title: item.product.title,
                  price: Number(item.product.price || 0),
                  moq: Number(item.product.moq || 1)
              },

              qty: Number(item.quantity || 0)
          };

        });

        updateCartUI();

    } catch (error) {

        console.log(error);

    }
}

function updateCartUI() {

    const items = Object.values(cart);

    const totalQty = items.reduce((s, i) => {
        return s + i.qty;
    }, 0);

    const total = items.reduce((s, i) => {
        return s + (
            Number(i.product?.price || 0) *
            Number(i.qty || 0)
        );
    }, 0);

    const cc = document.getElementById('cartCount');

    if (totalQty > 0) {

        cc.style.display = 'flex';

        cc.textContent = totalQty;

    } else {

        cc.style.display = 'none';
    }

    const body = document.getElementById('cartBody');

    if (!items.length) {

        body.innerHTML = `
            <div class="cart-empty">
                <div class="cart-empty-icon">🛒</div>
                Your cart is empty.<br>
                Add items to start your order.
            </div>
        `;

    } else {

        body.innerHTML = items.map(item => `

            <div class="cart-item">

                <div class="cart-item-emoji">
                    📦
                </div>

                <div class="cart-item-info">

                    <div class="cart-item-name">
                        ${item.product.title}
                    </div>

                    <div class="cart-item-meta">

                        <div style="display:flex;align-items:center;gap:.3rem">

                            <button
                                class="ci-qty-btn"
                                onclick="changeCartQty(
                                    ${item.product.id},
                                    -${item.product.moq ?? 1}
                                )"
                            >
                                −
                            </button>

                            <span class="ci-qty-num">
                                ${item.qty}
                            </span>

                            <button
                                class="ci-qty-btn"
                                onclick="changeCartQty(
                                    ${item.product.id},
                                    ${item.product.moq ?? 1}
                                )"
                            >
                                +
                            </button>

                        </div>

                        <span class="cart-item-price">
                            £${(
                                item.product.price * item.qty
                            ).toFixed(2)}
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

        `).join('');
    }

    const vat = total * 0.2;

    const summary = document.getElementById('cartSummary');

    summary.innerHTML = items.length > 0
        ? `
            <div class="cs-row">
                <span>Subtotal (${totalQty} units)</span>
                <span>£${total.toFixed(2)}</span>
            </div>

            <div class="cs-row">
                <span>VAT (20%)</span>
                <span>£${vat.toFixed(2)}</span>
            </div>

            <div class="cs-row">
                <span>Delivery</span>
                <span>TBC on confirmation</span>
            </div>

            <div class="cs-row cs-total">
                <span><strong>Order total</strong></span>
                <span>£${(total + vat).toFixed(2)}</span>
            </div>
        `
        : '';
}

document.addEventListener('DOMContentLoaded', () => {

    if (IS_LOGGED_IN) {

        loadCart();
    }
});
function toggleCart() {
  document.getElementById('cartOverlay').classList.toggle('open');
  document.getElementById('cartPanel').classList.toggle('open');
  updateCartUI();
}

/* ─── ORDER FLOW ──────────────────────────────────────────── */
// function placeOrder() {
//   var items = Object.values(cart).filter(function(i) { return i.qty > 0; });
//   if (!items.length) { showToast('Add items to your order first'); return; }
//   var shopName   = (document.getElementById('retailerName').value || '').trim() || 'A retailer';
//   var del        = document.querySelector('input[name="delivery"]:checked');
//   var dVal       = del ? del.value : 'deliver';
//   var dText      = dVal === 'deliver' ? '🚚 Deliver to my address'
//                  : dVal === 'collect' ? '🏪 Collect from Southall'
//                  : '📮 Royal Mail tracked post';
//   var subtotal   = items.reduce(function(s,i) { return s + i.product.price * i.qty; }, 0);
//   var vat        = subtotal * 0.2;
//   var grand      = subtotal + vat;
//   var date       = new Date().toLocaleDateString('en-GB', {day:'numeric',month:'short',year:'numeric'});
//   var time       = new Date().toLocaleTimeString('en-GB', {hour:'2-digit',minute:'2-digit'});
//   var ref        = REF_PFX + (Math.floor(10000 + Math.random() * 90000));

//   /* Order message — customer → shop */
//   var omsg = '🌙 *NEW FASHION ORDER*\nNoorStyle Wholesale — Charles House, Southall\n'
//     + '━━━━━━━━━━━━━━━━━━━━\n'
//     + '📅 ' + date + ' at ' + time + '\n'
//     + '🔖 *Ref:* ' + ref + '\n'
//     + '🏪 *From:* ' + shopName + '\n'
//     + '━━━━━━━━━━━━━━━━━━━━\n\n*ORDER ITEMS:*\n';
//   items.forEach(function(item, i) {
//     omsg += (i+1) + '. ' + item.product.emoji + ' *' + item.product.name + '*\n'
//           + '   Qty: ' + item.qty + ' units @ £' + item.product.price.toFixed(2) + '\n'
//           + '   Subtotal: £' + (item.product.price*item.qty).toFixed(2) + '\n\n';
//   });
//   omsg += '━━━━━━━━━━━━━━━━━━━━\n'
//        + '💰 *Subtotal:* £' + subtotal.toFixed(2) + '\n'
//        + '🧾 *VAT (20%):* £' + vat.toFixed(2) + '\n'
//        + '💷 *TOTAL: £' + grand.toFixed(2) + '*\n\n'
//        + '📦 *Delivery:* ' + dText + '\n'
//        + '💳 *Payment:* Bank transfer\n\n'
//        + 'Please confirm. We will send bank details by return. JazakAllah khair! 🤲';

//   /* Confirm message — shop → customer (pre-filled reply) */
//   var cmsg = '🌙 *NoorStyle Wholesale*\n📞 +44 7700 900 361  |  noorstyle.co.uk\n\n'
//     + '✅ *ORDER CONFIRMED* — ' + ref + '\n'
//     + '━━━━━━━━━━━━━━━━━━━━\n'
//     + '📅 ' + date + '\n'
//     + '💷 *Amount due: £' + grand.toFixed(2) + '*\n\n'
//     + '🏦 *BANK TRANSFER DETAILS*\n'
//     + '━━━━━━━━━━━━━━━━━━━━\n'
//     + 'Bank:          ' + BANK_NAME + '\n'
//     + 'Account name:  ' + ACCT_NAME + '\n'
//     + 'Account no:    ' + ACCT_NO + '\n'
//     + 'Sort code:     ' + SORT_CODE + '\n'
//     + '*Reference:    ' + ref + '*\n'
//     + '━━━━━━━━━━━━━━━━━━━━\n'
//     + '⚠️ Use *' + ref + '* as your payment reference.\n\n'
//     + '📦 We dispatch within 24 hrs of receiving payment.\n\n'
//     + 'JazakAllah khair for your order! May Allah bless your business. 🤲\n— NoorStyle Wholesale Team';

//   /* Show preview */
//   document.getElementById('waPreview').textContent =
//     omsg.length > 380 ? omsg.substring(0, 380) + '...' : omsg;

//   /* Bank card */
//   var rows = [['Bank', BANK_NAME],['Account name', ACCT_NAME],
//               ['Account no', ACCT_NO],['Sort code', SORT_CODE],
//               ['Amount due', '£' + grand.toFixed(2)]];
//   document.getElementById('omBankRows').innerHTML = rows.map(function(r) {
//     return '<div class="om-bank-row">'
//       + '<span class="om-bank-row-label">' + r[0] + '</span>'
//       + '<span class="om-bank-row-val" onclick="copyVal(\'' + r[1] + '\',\'' + r[0] + ' copied ✓\')">' + r[1] + '</span>'
//       + '</div>';
//   }).join('');
//   document.getElementById('omBankRef').innerHTML =
//     '<strong>Reference: ' + ref + '</strong> &mdash; use exactly when paying';

//   /* Wire buttons */
//   var waOrder = 'https://wa.me/' + SHOP_WA + '?text=' + encodeURIComponent(omsg);
//   var waReply = 'https://wa.me/' + SHOP_WA + '?text=' + encodeURIComponent(cmsg);

//   /* Confirmation-only message (short follow-up) */
//   var confirmMsg = '🌙 *NoorStyle Wholesale*\n📞 +44 7700 900 361\n\n'
//     + '✅ *ORDER CONFIRMED* — ' + ref + '\n'
//     + '━━━━━━━━━━━━━━━━━━━━\n'
//     + '🏪 *From:* ' + shopName + '\n'
//     + '💷 *Amount:* £' + grand.toFixed(2) + '\n'
//     + '📦 *Delivery:* ' + dText + '\n\n'
//     + 'Order confirmed. I will proceed with payment shortly.\n'
//     + 'JazakAllah khair! 🤲';
//   var waConfirm = 'https://wa.me/' + SHOP_WA + '?text=' + encodeURIComponent(confirmMsg);

//   document.getElementById('omSendBtn').onclick = function() {
//     window.open(waOrder, '_blank');
//     setTimeout(function() {
//       document.getElementById('omStep1').style.display = 'none';
//       document.getElementById('omStep2').style.display = 'block';
//     }, 1100);
//   };

//   /* Button 1: Confirm Order only */
//   document.getElementById('omConfirmBtn').onclick = function() {
//     window.open(waConfirm, '_blank');
//     setTimeout(function() {
//       cart = {};
//       updateCartUI();
//       closeModal();
//       renderProducts();
//       showToast('Order confirmed ✓ — check WhatsApp');
//     }, 600);
//   };

//   /* Button 2: Confirm & Send Bank Details */
//   document.getElementById('omReplyBtn').onclick = function() {
//     window.open(waReply, '_blank');
//     setTimeout(function() {
//       cart = {};
//       updateCartUI();
//       closeModal();
//       renderProducts();
//       showToast('Bank details sent ✓ — check WhatsApp');
//     }, 600);
//   };

//   document.getElementById('omStep1').style.display = 'block';
//   document.getElementById('omStep2').style.display = 'none';
//   document.getElementById('orderModal').classList.add('show');
//   document.getElementById('cartPanel').classList.remove('open');
//   document.getElementById('cartOverlay').classList.remove('open');
// }

async function placeOrder() {

    const items = Object.values(cart);

    if (!items.length) {

        showToast('Please add products to your order first.');

        return;
    }

    try {

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

        if (!data.status) {

            showToast(data.message || 'Order failed');

            return;
        }

        const retailer =
            document.getElementById('retailerName')
            ?.value?.trim() || 'Not provided';

        const delivery =
            document.querySelector(
                'input[name="delivery"]:checked'
            )?.value || 'deliver';

        const deliveryText =
            delivery === 'deliver'
            ? '🚚 We deliver to your address'

            : delivery === 'collect'
            ? '🏪 Collect from Southall'

            : '📮 Royal Mail tracked';

        const total = items.reduce((s, i) => {

            return s + (
                Number(i.qty || 0) *
                Number(i.product?.price || 0)
            );

        }, 0);

        let message =
`🌙 *NEW WHOLESALE ORDER*

🆔 *Order ID:* #${data.order_id}

🏪 *Retailer:* ${retailer}

📦 *Delivery:* ${deliveryText}

━━━━━━━━━━━━━━━━━━━━

*ORDER ITEMS:*

`;

        items.forEach((item, index) => {

            message +=
`${index + 1}. *${item.product.title}*

Qty: ${item.qty}
Price: £${Number(item.product.price).toFixed(2)}

Subtotal:
£${(
    Number(item.product.price) *
    Number(item.qty)
).toFixed(2)}

━━━━━━━━━━━━━━━━━━━━

`;

        });

        message +=
`💰 *Estimated Total:*
£${total.toFixed(2)}

📦 *Admin Order Link:*
${data.admin_url}

Please confirm the order and send invoice.
JazakAllah Khair 🤲`;

        window.open(

            `https://wa.me/${SHOP_WA}?text=${encodeURIComponent(message)}`,

            '_blank'

        );

        // CLEAR CART

        cart = {};

        updateCartUI();

        await loadCart();

        renderProducts();

        showToast('Order placed successfully');

        // CLOSE CART

        document
            .getElementById('cartPanel')
            ?.classList.remove('open');

        document
            .getElementById('cartOverlay')
            ?.classList.remove('open');

    } catch (error) {

        console.log(error);

        showToast('Something went wrong');
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
// function filterProducts() {
//   currentSearch = document.getElementById('searchInput').value.toLowerCase().trim();
//   renderProducts();
// }

function filterCat(cat) {

    currentCat = cat;

    // REMOVE ACTIVE

    document
        .querySelectorAll('.cat-pill, .collection-chip')
        .forEach(el => {

            el.classList.remove('active');

        });

    // ACTIVATE MATCHING ITEMS

    document
        .querySelectorAll(`[data-cat="${cat}"]`)
        .forEach(el => {

            el.classList.add('active');

        });

    renderProducts();
}

function filterProducts() {

    currentSearch = document
        .getElementById('searchInput')
        .value
        .toLowerCase()
        .trim();

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
//   const grid = document.getElementById('productGrid');
//   const filtered = PRODUCTS.filter(p => {
//     const catOk = currentCat === 'all' || p.cat === currentCat ||
//                   (currentCat === 'eid' && p.badge === 'eid') ||
//                   (currentCat === 'turkish' && p.col === 'Turkish') ||
//                   (currentCat === 'jersey' && p.col === 'Jersey') ||
//                   (currentCat === 'chiffon' && p.col === 'Chiffon');
//     const searchOk = !currentSearch || p.name.toLowerCase().includes(currentSearch) || p.col.toLowerCase().includes(currentSearch) || p.desc.toLowerCase().includes(currentSearch);
//     return catOk && searchOk;
//   });
//   document.getElementById('productCount').textContent = filtered.length + ' styles';
//   grid.innerHTML = filtered.map(p => {
//     const inCart = cart[p.id] && cart[p.id].qty > 0;
//     const outOfStock = p.stock === 0;
//     const lowStock = p.stock > 0 && p.stock < 20;
//     const stockClass = outOfStock ? 'stock-out' : lowStock ? 'stock-low' : 'stock-in';
//     const stockLabel = outOfStock ? 'Out of stock' : lowStock ? `Only ${p.stock} left` : `In stock`;
//     const badge = p.badge ? `<span class="product-badge badge-${p.badge}">${p.badge}</span>` : '';
//     const colourDots = p.colours.slice(0,5).map(c => `<div class="colour-dot" style="background:${c}" title="${c}"></div>`).join('');
//     const moreColours = p.colourCount > 5 ? `<span class="colour-more">+${p.colourCount-5}</span>` : '';
//     return `
//     <div class="product-card">
//       ${badge}
//       <div class="product-img" style="background:linear-gradient(135deg,${p.colours[0]}18,${p.colours[p.colours.length-1] || p.colours[0]}22)">${p.emoji}</div>
//       <div class="product-info">
//         <div class="product-collection">${p.col}</div>
//         <div class="product-name">${p.name}</div>
//         <div class="product-desc">${p.desc}</div>
//         <div class="colours-row">${colourDots}${moreColours}</div>
//         <div class="product-meta">
//           <div><span class="product-price">£${p.price.toFixed(2)}</span><span class="product-unit">/unit</span></div>
//           <span class="product-moq">MOQ ${p.moq}</span>
//         </div>
//         <div class="product-stock"><div class="stock-dot ${stockClass}"></div>${stockLabel}</div>
//         ${!outOfStock ? `
//         <div class="qty-control ${inCart?'show':''}" id="qty-${p.id}">
//           <button class="qty-btn" onclick="changeQty(${p.id},-${p.moq})">−</button>
//           <input class="qty-input" type="number" id="qtyval-${p.id}" value="${inCart?cart[p.id].qty:p.moq}" min="${p.moq}" step="${p.moq}" onchange="setQty(${p.id},this.value)">
//           <button class="qty-btn" onclick="changeQty(${p.id},${p.moq})">+</button>
//         </div>
//         <button class="add-btn ${inCart?'added':''}" id="addbtn-${p.id}" onclick="addToCart(${p.id})">
//           ${inCart ? '✓ In order — update' : '+ Add to order'}
//         </button>` : `<button class="add-btn out" disabled>Out of stock</button>`}
//       </div>
//     </div>`;
//   }).join('');
// }
function renderProducts() {

    const grid = document.getElementById('productGrid');

    const filtered = PRODUCTS.filter(p => {

        const categoryName = p.category?.name?.toLowerCase();

        const catOk =
            currentCat === 'all' ||
            categoryName === currentCat;

        const searchOk =
            !currentSearch ||
            p.title?.toLowerCase().includes(currentSearch) ||
            p.description?.toLowerCase().includes(currentSearch) ||
            categoryName?.includes(currentSearch);

        return catOk && searchOk;
    });

    document.getElementById('productCount').textContent =
        filtered.length + ' styles';

    grid.innerHTML = filtered.map(p => {

        const totalStock = p.locations?.reduce((sum, loc) => {
            return sum + Number(loc.quantity || 0);
        }, 0) || 0;

        const inCart = cart[p.id] && cart[p.id].qty > 0;

        const outOfStock = totalStock <= 0;

        const lowStock = totalStock > 0 && totalStock < 20;

        const stockClass =
            outOfStock ? 'stock-out'
            : lowStock ? 'stock-low'
            : 'stock-in';

        const stockLabel =
            outOfStock ? 'Out of stock'
            : lowStock ? `Only ${totalStock} left`
            : 'In stock';

        return `
        <div class="product-card">

            <div class="product-img">
                ${
                    p.image
                    ? `<img src="${p.image}" class="w-full h-full object-cover">`
                    : '📦'
                }
            </div>

            <div class="product-info">

                <div class="product-collection">
                    ${p.category?.name ?? ''}
                </div>

                <div class="product-name">
                    ${p.title ?? ''}
                </div>

                <div class="product-desc">
                    ${p.description ?? ''}
                </div>

                ${
                    IS_LOGGED_IN
                    ? `
                        <div class="product-meta">
                            <div>
                                <span class="product-price">
                                    £${Number(p.price).toFixed(2)}
                                </span>

                                <span class="product-unit">
                                    /unit
                                </span>
                            </div>

                            <span class="product-moq">
                                MOQ ${p.moq ?? 1}
                            </span>
                        </div>
                    `
                    : ''
                }

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
                                onclick="changeQty(${p.id}, -${p.moq ?? 1})">
                                −
                            </button>

                            <input
                                class="qty-input"
                                type="number"
                                id="qtyval-${p.id}"
                                value="${inCart ? cart[p.id].qty : (p.moq ?? 1)}"
                                min="${p.moq ?? 1}"
                                step="${p.moq ?? 1}"
                                onchange="setQty(${p.id},this.value)"
                            >

                            <button class="qty-btn"
                                onclick="changeQty(${p.id}, ${p.moq ?? 1})">
                                +
                            </button>
                        </div>

                        <button
                            class="add-btn ${inCart ? 'added' : ''}"
                            id="addbtn-${p.id}"
                            onclick="addToCart(${p.id})"
                        >
                            ${
                                inCart
                                ? '✓ In order — update'
                                : '+ Add to order'
                            }
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
        <div class="deal-name">${p.title}</div>
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
