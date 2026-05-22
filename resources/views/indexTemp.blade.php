<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>NoorStyle Wholesale — Islamic Fashion & Modest Wear</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
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
  --f-head:  'Cormorant Garamond', Georgia, serif;
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

<div class="cat-bar" id="catBar">
  <div class="cat-pill active" onclick="filterCat('all',this)">All Products</div>
  <div class="cat-pill" onclick="filterCat('hijab',this)">🧕 Hijabs</div>
  <div class="cat-pill" onclick="filterCat('scarf',this)">✨ Scarves</div>
  <div class="cat-pill" onclick="filterCat('abaya',this)">👗 Abayas</div>
  <div class="cat-pill" onclick="filterCat('prayer',this)">🤲 Prayer Sets</div>
  <div class="cat-pill" onclick="filterCat('modest',this)">🌸 Modest Tops</div>
  <div class="cat-pill" onclick="filterCat('kids',this)">🌟 Kids</div>
  <div class="cat-pill" onclick="filterCat('accessories',this)">💎 Accessories</div>
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
  <div class="collection-strip">
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
    <div class="om-icon">✅</div>
    <div class="om-title">Order ready!</div>
    <div class="om-sub">Your order is prepared. Press below to send it directly to our WhatsApp. We confirm and dispatch same day.</div>
    <div class="om-wa-msg">
      <div class="om-wa-label">📱 WHATSAPP MESSAGE PREVIEW</div>
      <div class="om-wa-text" id="waPreview"></div>
    </div>
    <button class="om-btn" id="omSendBtn">
      <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Open WhatsApp & Send Order
    </button>
    <button class="om-close-btn" onclick="closeModal()">Continue shopping</button>
  </div>
</div>

<div class="toast" id="toast"><div class="toast-dot"></div><span id="toastMsg">Added to cart</span></div>

<script>
const SHOP_WA = '447700900361'; // ← Change to the wholesaler's WhatsApp number

const COLOURS = {
  black:['#1a1a1a'],
  white:['#f5f5f5'],
  navy:['#1a2744'],
  teal:['#2D7D6F'],
  rose:['#C4855A'],
  plum:['#6B3F6B'],
  grey:['#9CA3AF'],
  camel:['#C19A6B'],
  dusty_pink:['#E8B4B8'],
  olive:['#6B7C45'],
  burgundy:['#722F37'],
  mint:['#98D8C8'],
  multi:['#E8453C','#2D7D6F','#1a2744','#C4855A'],
};

const PRODUCTS = [
  // HIJABS
  {id:1,  emoji:'🧕', col:'Hijabs',    name:'Jersey Instant Hijab — Plain',        cat:'hijab',  price:2.80, moq:6,  stock:480, badge:'hot',  colours:['#1a1a1a','#f5f5f5','#1a2744','#2D7D6F','#C4855A','#9CA3AF'], colourCount:24, desc:'Soft stretchy jersey. No pins needed. Easy wear.'},
  {id:2,  emoji:'🧕', col:'Hijabs',    name:'Jersey Hijab — Textured Ribbed',      cat:'hijab',  price:3.20, moq:6,  stock:220, badge:'new',  colours:['#1a1a1a','#f5f5f5','#C19A6B','#6B3F6B','#722F37'], colourCount:12, desc:'Premium ribbed texture. Elegant look.'},
  {id:3,  emoji:'🧕', col:'Hijabs',    name:'Chiffon Hijab — Plain',               cat:'hijab',  price:2.50, moq:6,  stock:350, badge:null,   colours:['#E8B4B8','#2D7D6F','#C19A6B','#1a2744','#6B7C45'], colourCount:18, desc:'Lightweight chiffon. Floaty & breathable.'},
  {id:4,  emoji:'🧕', col:'Hijabs',    name:'Satin Hijab — Luxury Finish',         cat:'hijab',  price:3.80, moq:6,  stock:140, badge:null,   colours:['#1a1a1a','#f5f5f5','#722F37','#1a2744','#C4855A'], colourCount:10, desc:'High-sheen satin. Perfect for occasions.'},
  {id:5,  emoji:'🧕', col:'Hijabs',    name:'Modal Hijab — Breathable Premium',    cat:'hijab',  price:4.50, moq:6,  stock:90,  badge:'eid',  colours:['#f5f5f5','#E8B4B8','#2D7D6F','#6B3F6B'], colourCount:8, desc:'Super soft modal. Anti-static. Breathable.'},
  {id:6,  emoji:'🧕', col:'Hijabs',    name:'Turkish Cotton Hijab — Square',       cat:'hijab',  price:5.20, moq:6,  stock:12,  badge:'low',  colours:['#f5f5f5','#C19A6B','#1a2744'], colourCount:6, desc:'Traditional Turkish cotton. Premium quality.'},
  // SCARVES
  {id:7,  emoji:'✨', col:'Scarves',   name:'Chiffon Printed Scarf — Floral',      cat:'scarf',  price:3.50, moq:6,  stock:280, badge:'hot',  colours:['#E8453C','#2D7D6F','#C19A6B','#6B3F6B'], colourCount:8, desc:'Gorgeous floral print. Multi-way wear.'},
  {id:8,  emoji:'✨', col:'Scarves',   name:'Pashmina Scarf — Plain',              cat:'scarf',  price:4.80, moq:6,  stock:200, badge:null,   colours:['#1a1a1a','#C19A6B','#E8B4B8','#1a2744','#2D7D6F'], colourCount:14, desc:'Soft pashmina blend. Warm and elegant.'},
  {id:9,  emoji:'✨', col:'Scarves',   name:'Silk-Touch Scarf — Geometric Print',  cat:'scarf',  price:5.50, moq:6,  stock:95,  badge:'eid',  colours:['#722F37','#1a2744','#C19A6B'], colourCount:6, desc:'Luxury silk-touch feel. Geometric Islamic pattern.'},
  {id:10, emoji:'✨', col:'Scarves',   name:'Lightweight Cotton Scarf — Striped',  cat:'scarf',  price:2.90, moq:12, stock:320, badge:'sale', colours:['#1a1a1a','#f5f5f5','#2D7D6F','#E8B4B8'], colourCount:10, desc:'Everyday cotton. Striped design. Versatile.'},
  {id:11, emoji:'✨', col:'Scarves',   name:'Large Square Scarf — Embroidered',    cat:'scarf',  price:6.80, moq:6,  stock:45,  badge:null,   colours:['#1a1a1a','#f5f5f5','#1a2744'], colourCount:4, desc:'Hand-embroidered border. Premium gifting.'},
  // ABAYAS
  {id:12, emoji:'👗', col:'Abayas',   name:'Open Abaya — Classic Black',           cat:'abaya',  price:14.50,moq:3,  stock:85,  badge:'hot',  colours:['#1a1a1a'], colourCount:1, desc:'Flowing open-front abaya. S/M/L/XL/XXL.'},
  {id:13, emoji:'👗', col:'Abayas',   name:'Embroidered Abaya — Eid Special',      cat:'abaya',  price:22.00,moq:3,  stock:40,  badge:'eid',  colours:['#1a1a1a','#1a2744'], colourCount:2, desc:'Gold embroidery detail. Premium occasion wear.'},
  {id:14, emoji:'👗', col:'Abayas',   name:'Kimono Abaya — Linen Look',            cat:'abaya',  price:18.50,moq:3,  stock:60,  badge:'new',  colours:['#1a1a1a','#C19A6B','#6B7C45'], colourCount:3, desc:'Linen-look fabric. Kimono style. Modern cut.'},
  {id:15, emoji:'👗', col:'Abayas',   name:'Everyday Abaya — Jersey Fabric',       cat:'abaya',  price:12.00,moq:3,  stock:120, badge:null,   colours:['#1a1a1a','#1a2744'], colourCount:2, desc:'Comfortable jersey. Everyday modest wear.'},
  {id:16, emoji:'👗', col:'Abayas',   name:'Kids Abaya — Age 4–12',                cat:'kids',   price:9.50, moq:3,  stock:70,  badge:'new',  colours:['#1a1a1a','#E8B4B8','#1a2744'], colourCount:3, desc:'Soft & comfortable for children. Multiple sizes.'},
  // PRAYER SETS
  {id:17, emoji:'🤲', col:'Prayer',   name:'Prayer Set — Turkish Cotton (3pc)',    cat:'prayer', price:8.50, moq:6,  stock:160, badge:'hot',  colours:['#f5f5f5','#C19A6B','#2D7D6F'], colourCount:6, desc:'3-piece: scarf, prayer dress, bag. Turkish cotton.'},
  {id:18, emoji:'🤲', col:'Prayer',   name:'Prayer Set — Velvet Luxury (3pc)',     cat:'prayer', price:14.00,moq:6,  stock:55,  badge:'eid',  colours:['#6B3F6B','#1a2744','#f5f5f5'], colourCount:4, desc:'Premium velvet. Gift-boxed. Perfect Eid gift.'},
  {id:19, emoji:'🤲', col:'Prayer',   name:'Prayer Mat — Portable Folding',        cat:'prayer', price:5.80, moq:6,  stock:200, badge:null,   colours:['#2D7D6F','#1a2744','#C4855A'], colourCount:8, desc:'Foldable design. Carry bag included. Lightweight.'},
  {id:20, emoji:'🤲', col:'Prayer',   name:'Tasbeeh — Prayer Beads (99 beads)',    cat:'accessories', price:3.20,moq:10,stock:300,badge:null, colours:['#1a2744','#C19A6B','#2D7D6F'], colourCount:6, desc:'Wood, crystal & pearl options available.'},
  // MODEST TOPS
  {id:21, emoji:'🌸', col:'Modest',   name:'Long Sleeve Jersey Top — Plain',       cat:'modest', price:5.50, moq:6,  stock:200, badge:null,   colours:['#1a1a1a','#f5f5f5','#1a2744','#2D7D6F','#722F37','#9CA3AF'], colourCount:16, desc:'Soft jersey. Full length sleeve. Versatile.'},
  {id:22, emoji:'🌸', col:'Modest',   name:'Modest Dress — Maxi Length',           cat:'modest', price:12.50,moq:3,  stock:80,  badge:'new',  colours:['#1a1a1a','#1a2744','#2D7D6F','#6B7C45'], colourCount:6, desc:'Floor-length modest dress. Flowy fabric.'},
  {id:23, emoji:'🌸', col:'Modest',   name:'Undercap / Bonnet — Cotton',           cat:'hijab',  price:1.20, moq:12, stock:500, badge:'sale', colours:['#1a1a1a','#f5f5f5','#E8B4B8','#C19A6B'], colourCount:10, desc:'Essential under-hijab cap. Non-slip.'},
  {id:24, emoji:'🌸', col:'Modest',   name:'Modest Sports Hijab — Breathable',    cat:'hijab',  price:4.20, moq:6,  stock:110, badge:'new',  colours:['#1a1a1a','#1a2744','#2D7D6F','#6B7C45'], colourCount:8, desc:'Sport-fit. Quick-dry fabric. Active wear.'},
  // KIDS
  {id:25, emoji:'🌟', col:'Kids',     name:'Kids Jersey Hijab — Age 4–12',         cat:'kids',   price:2.20, moq:6,  stock:180, badge:null,   colours:['#E8B4B8','#2D7D6F','#C19A6B','#1a2744'], colourCount:8, desc:'Easy-wear jersey. Multiple sizes. Soft & comfortable.'},
  {id:26, emoji:'🌟', col:'Kids',     name:'Kids Prayer Set — Age 4–12 (3pc)',     cat:'kids',   price:7.50, moq:6,  stock:60,  badge:'eid',  colours:['#f5f5f5','#E8B4B8','#2D7D6F'], colourCount:3, desc:'3-piece set. Perfect Eid gift for children.'},
  // ACCESSORIES
  {id:27, emoji:'💎', col:'Accessories','name':'Hijab Pins — Pearl Set (20pk)',    cat:'accessories',price:1.80,moq:12,stock:600,badge:'sale', colours:['#f5f5f5','#C19A6B','#9CA3AF'], colourCount:5, desc:'Pearl-topped safety pins. Secure & elegant.'},
  {id:28, emoji:'💎', col:'Accessories','name':'Hijab Magnet Pins (6pk)',          cat:'accessories',price:2.50,moq:12,stock:400,badge:null, colours:['#1a1a1a','#f5f5f5','#C19A6B'], colourCount:3, desc:'Magnetic closure. No holes in fabric.'},
  {id:29, emoji:'💎', col:'Accessories','name':'Hijab Volume Band / Bump',         cat:'accessories',price:1.60,moq:12,stock:350,badge:null, colours:['#1a1a1a','#f5f5f5','#C19A6B'], colourCount:3, desc:'Creates perfect hijab volume shape.'},
  {id:30, emoji:'🎁', col:'Accessories','name':'Gift Box Set — Hijab + Pins',      cat:'accessories',price:6.50,moq:6, stock:80, badge:'eid',  colours:['#f5f5f5','#E8B4B8','#1a2744'], colourCount:4, desc:'Beautifully boxed. Perfect ready-made gift.'},
  // CHIFFON
  {id:31, emoji:'🧕', col:'Chiffon',  name:'Chiffon Hijab — Pearl Embellished',   cat:'hijab',  price:4.20, moq:6,  stock:70,  badge:'eid',  colours:['#f5f5f5','#E8B4B8','#C19A6B'], colourCount:4, desc:'Chiffon with pearl detail edge. Occasion wear.'},
  {id:32, emoji:'✨', col:'Chiffon',  name:'Chiffon Dupatta — Heavily Embroidered',cat:'scarf', price:8.50, moq:3,  stock:35,  badge:'eid',  colours:['#f5f5f5','#722F37','#1a2744'], colourCount:3, desc:'Heavily embroidered border. Bridal & Eid.'},
  {id:33, emoji:'✨', col:'Chiffon',  name:'Chiffon Scarf — Ombre Print',          cat:'scarf',  price:4.00, moq:6,  stock:120, badge:'new',  colours:['#2D7D6F','#C4855A','#6B3F6B','#1a2744'], colourCount:6, desc:'Beautiful ombre gradient effect. Trending.'},
  // TURKISH
  {id:34, emoji:'🇹🇷', col:'Turkish', name:'Turkish Shayla Wrap — Premium',       cat:'hijab',  price:6.50, moq:6,  stock:50,  badge:null,   colours:['#1a1a1a','#f5f5f5','#1a2744','#2D7D6F'], colourCount:8, desc:'Authentic Turkish fabric. Prestige collection.'},
  {id:35, emoji:'🤲', col:'Turkish', name:'Turkish Prayer Dress — Full Set',       cat:'prayer', price:16.50,moq:3,  stock:40,  badge:null,   colours:['#f5f5f5','#C19A6B'], colourCount:2, desc:'Traditional Turkish prayer dress. Luxury cotton.'},
  // JERSEY
  {id:36, emoji:'🧕', col:'Jersey',  name:'Jersey Hijab — Crinkle Textured',      cat:'hijab',  price:3.50, moq:6,  stock:160, badge:null,   colours:['#1a1a1a','#f5f5f5','#E8B4B8','#2D7D6F','#C19A6B','#722F37'], colourCount:16, desc:'Crinkle jersey. Elegant textured finish.'},
  {id:37, emoji:'🧕', col:'Jersey',  name:'Jersey Hijab Amira (2-piece)',          cat:'hijab',  price:3.00, moq:6,  stock:230, badge:'hot',  colours:['#1a1a1a','#f5f5f5','#1a2744','#2D7D6F'], colourCount:14, desc:'2-piece Amira style. Easy to wear. Popular.'},
  {id:38, emoji:'🌸', col:'Jersey',  name:'Jersey Modest Skirt — Maxi',            cat:'modest', price:7.50, moq:6,  stock:90,  badge:'new',  colours:['#1a1a1a','#1a2744','#2D7D6F','#6B7C45','#6B3F6B'], colourCount:8, desc:'Floor-length jersey skirt. Elastic waist.'},
  {id:39, emoji:'🧕', col:'Jersey',  name:'Jersey Hijab — XXL Large Coverage',     cat:'hijab',  price:3.80, moq:6,  stock:140, badge:null,   colours:['#1a1a1a','#f5f5f5','#1a2744','#2D7D6F'], colourCount:12, desc:'Extra coverage. Longer length. Full wrapping.'},
  {id:40, emoji:'🎁', col:'Special', name:'Mixed Assorted Bundle — 12 hijabs',     cat:'hijab',  price:28.00,moq:1,  stock:20,  badge:'sale', colours:['#E8453C','#2D7D6F','#1a2744','#C4855A'], colourCount:12, desc:'12 mixed styles & colours. Great retail value.'},
];

const DEALS = [
  {id:1,  was:4.00, save:'30%'},
  {id:23, was:1.80, save:'33%'},
  {id:7,  was:5.00, save:'30%'},
  {id:27, was:2.80, save:'36%'},
  {id:10, was:4.20, save:'31%'},
  {id:40, was:38.00,save:'26%'},
];

let cart = {};
let currentCat = 'all';
let currentSearch = '';

function renderProducts() {
  const grid = document.getElementById('productGrid');
  const filtered = PRODUCTS.filter(p => {
    const catOk = currentCat === 'all' || p.cat === currentCat ||
                  (currentCat === 'eid' && p.badge === 'eid') ||
                  (currentCat === 'turkish' && p.col === 'Turkish') ||
                  (currentCat === 'jersey' && p.col === 'Jersey') ||
                  (currentCat === 'chiffon' && p.col === 'Chiffon');
    const searchOk = !currentSearch || p.name.toLowerCase().includes(currentSearch) || p.col.toLowerCase().includes(currentSearch) || p.desc.toLowerCase().includes(currentSearch);
    return catOk && searchOk;
  });
  document.getElementById('productCount').textContent = filtered.length + ' styles';
  grid.innerHTML = filtered.map(p => {
    const inCart = cart[p.id] && cart[p.id].qty > 0;
    const outOfStock = p.stock === 0;
    const lowStock = p.stock > 0 && p.stock < 20;
    const stockClass = outOfStock ? 'stock-out' : lowStock ? 'stock-low' : 'stock-in';
    const stockLabel = outOfStock ? 'Out of stock' : lowStock ? `Only ${p.stock} left` : `In stock`;
    const badge = p.badge ? `<span class="product-badge badge-${p.badge}">${p.badge}</span>` : '';
    const colourDots = p.colours.slice(0,5).map(c => `<div class="colour-dot" style="background:${c}" title="${c}"></div>`).join('');
    const moreColours = p.colourCount > 5 ? `<span class="colour-more">+${p.colourCount-5}</span>` : '';
    return `
    <div class="product-card">
      ${badge}
      <div class="product-img" style="background:linear-gradient(135deg,${p.colours[0]}18,${p.colours[p.colours.length-1] || p.colours[0]}22)">${p.emoji}</div>
      <div class="product-info">
        <div class="product-collection">${p.col}</div>
        <div class="product-name">${p.name}</div>
        <div class="product-desc">${p.desc}</div>
        <div class="colours-row">${colourDots}${moreColours}</div>
        <div class="product-meta">
          <div><span class="product-price">£${p.price.toFixed(2)}</span><span class="product-unit">/unit</span></div>
          <span class="product-moq">MOQ ${p.moq}</span>
        </div>
        <div class="product-stock"><div class="stock-dot ${stockClass}"></div>${stockLabel}</div>
        ${!outOfStock ? `
        <div class="qty-control ${inCart?'show':''}" id="qty-${p.id}">
          <button class="qty-btn" onclick="changeQty(${p.id},-${p.moq})">−</button>
          <input class="qty-input" type="number" id="qtyval-${p.id}" value="${inCart?cart[p.id].qty:p.moq}" min="${p.moq}" step="${p.moq}" onchange="setQty(${p.id},this.value)">
          <button class="qty-btn" onclick="changeQty(${p.id},${p.moq})">+</button>
        </div>
        <button class="add-btn ${inCart?'added':''}" id="addbtn-${p.id}" onclick="addToCart(${p.id})">
          ${inCart ? '✓ In order — update' : '+ Add to order'}
        </button>` : `<button class="add-btn out" disabled>Out of stock</button>`}
      </div>
    </div>`;
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

function addToCart(id) {
  const p = PRODUCTS.find(x => x.id === id);
  if(!p || p.stock === 0) return;
  if(!cart[id]) cart[id] = {product:p, qty:p.moq};
  else cart[id].qty += p.moq;
  updateCartUI();
  const qc = document.getElementById('qty-'+id);
  const btn = document.getElementById('addbtn-'+id);
  const inp = document.getElementById('qtyval-'+id);
  if(qc) qc.classList.add('show');
  if(btn){ btn.classList.add('added'); btn.textContent='✓ In order — update'; }
  if(inp) inp.value = cart[id].qty;
  showToast(`${p.name.substring(0,28)}... added (${cart[id].qty} units)`);
}

function changeQty(id, delta) {
  const p = PRODUCTS.find(x => x.id === id);
  if(!cart[id]) cart[id] = {product:p, qty:p.moq};
  cart[id].qty = Math.max(p.moq, cart[id].qty + delta);
  const inp = document.getElementById('qtyval-'+id);
  if(inp) inp.value = cart[id].qty;
  updateCartUI();
}

function setQty(id, val) {
  const p = PRODUCTS.find(x => x.id === id);
  const qty = Math.max(p.moq, parseInt(val)||p.moq);
  if(!cart[id]) cart[id] = {product:p, qty};
  else cart[id].qty = qty;
  updateCartUI();
}

function removeFromCart(id) {
  delete cart[id];
  updateCartUI();
  renderProducts();
}

function changeCartQty(id, delta) {
  if(!cart[id]) return;
  const p = cart[id].product;
  const nq = cart[id].qty + delta;
  if(nq < p.moq){ removeFromCart(id); return; }
  cart[id].qty = nq;
  updateCartUI();
}

function updateCartUI() {
  const items = Object.values(cart).filter(i => i.qty > 0);
  const totalQty = items.reduce((s,i) => s+i.qty, 0);
  const total = items.reduce((s,i) => s+i.product.price*i.qty, 0);
  const cc = document.getElementById('cartCount');
  if(totalQty > 0){ cc.style.display='flex'; cc.textContent=totalQty; }
  else cc.style.display='none';
  const body = document.getElementById('cartBody');
  body.innerHTML = items.length === 0
    ? `<div class="cart-empty"><div class="cart-empty-icon">🛍</div>Your cart is empty.<br>Add styles to start your order.</div>`
    : items.map(item => `
    <div class="cart-item">
      <div class="cart-item-emoji">${item.product.emoji}</div>
      <div class="cart-item-info">
        <div class="cart-item-col">${item.product.col}</div>
        <div class="cart-item-name">${item.product.name}</div>
        <div class="cart-item-meta">
          <div style="display:flex;align-items:center;gap:.3rem">
            <button class="ci-qty-btn" onclick="changeCartQty(${item.product.id},-${item.product.moq})">−</button>
            <span class="ci-qty-num">${item.qty}</span>
            <button class="ci-qty-btn" onclick="changeCartQty(${item.product.id},${item.product.moq})">+</button>
          </div>
          <span class="cart-item-price">£${(item.product.price*item.qty).toFixed(2)}</span>
        </div>
      </div>
      <button class="cart-item-remove" onclick="removeFromCart(${item.product.id})">✕</button>
    </div>`).join('');
  const vat = total * 0.2;
  document.getElementById('cartSummary').innerHTML = items.length > 0 ? `
  <div class="cs-row"><span>Subtotal (${totalQty} units)</span><span>£${total.toFixed(2)}</span></div>
  <div class="cs-row"><span>VAT (20%)</span><span>£${vat.toFixed(2)}</span></div>
  <div class="cs-row"><span>Delivery</span><span>TBC on confirmation</span></div>
  <div class="cs-row cs-total"><span><strong>Order total</strong></span><span>£${(total+vat).toFixed(2)}</span></div>` : '';
}

function toggleCart() {
  document.getElementById('cartOverlay').classList.toggle('open');
  document.getElementById('cartPanel').classList.toggle('open');
  updateCartUI();
}

function placeOrder() {
  const items = Object.values(cart).filter(i => i.qty > 0);
  if(!items.length){ showToast('Add items to your order first'); return; }
  const name = document.getElementById('retailerName').value.trim() || 'A retailer';
  const delivery = document.querySelector('input[name="delivery"]:checked');
  const dVal = delivery ? delivery.value : 'deliver';
  const dText = dVal === 'deliver' ? '🚚 Deliver to my address' : dVal === 'collect' ? '🏪 Collect from Southall' : '📮 Royal Mail tracked';
  const total = items.reduce((s,i) => s+i.product.price*i.qty, 0);
  const vat = total * 0.2;
  const date = new Date().toLocaleDateString('en-GB',{day:'numeric',month:'short',year:'numeric'});
  const time = new Date().toLocaleTimeString('en-GB',{hour:'2-digit',minute:'2-digit'});
  let msg = `🌙 *NEW FASHION ORDER — NoorStyle Wholesale*\n`;
  msg += `━━━━━━━━━━━━━━━━━━━━\n`;
  msg += `📅 ${date} at ${time}\n`;
  msg += `🏪 *From:* ${name}\n`;
  msg += `━━━━━━━━━━━━━━━━━━━━\n\n*ORDER ITEMS:*\n`;
  items.forEach((item,i) => {
    msg += `${i+1}. ${item.product.emoji} *${item.product.name}*\n`;
    msg += `   Collection: ${item.product.col}\n`;
    msg += `   Qty: ${item.qty} units @ £${item.product.price.toFixed(2)} each\n`;
    msg += `   Subtotal: £${(item.product.price*item.qty).toFixed(2)}\n\n`;
  });
  msg += `━━━━━━━━━━━━━━━━━━━━\n`;
  msg += `💰 *Subtotal:* £${total.toFixed(2)}\n`;
  msg += `🧾 *VAT (20%):* £${vat.toFixed(2)}\n`;
  msg += `💷 *ORDER TOTAL: £${(total+vat).toFixed(2)}*\n\n`;
  msg += `📦 *Delivery:* ${dText}\n`;
  msg += `💳 *Payment:* Bank transfer / COD\n\n`;
  msg += `Please confirm and advise on delivery. JazakAllah khair! 🤲`;
  document.getElementById('waPreview').textContent = msg.substring(0,400)+(msg.length>400?'...':'');
  const waUrl = `https://wa.me/${SHOP_WA}?text=${encodeURIComponent(msg)}`;
  document.getElementById('omSendBtn').onclick = () => {
    window.open(waUrl,'_blank');
    setTimeout(()=>{ cart={}; updateCartUI(); closeModal(); toggleCart(); renderProducts(); showToast('Order sent! We will confirm shortly ✓'); },800);
  };
  document.getElementById('orderModal').classList.add('show');
  document.getElementById('cartPanel').classList.remove('open');
  document.getElementById('cartOverlay').classList.remove('open');
}

function closeModal(){ document.getElementById('orderModal').classList.remove('show') }

function filterCat(cat, el) {
  currentCat = cat;
  document.querySelectorAll('.cat-pill').forEach(p=>p.classList.remove('active'));
  if(el) el.classList.add('active');
  else document.querySelector('.cat-pill').classList.remove('active');
  renderProducts();
}

function filterProducts(){
  currentSearch = document.getElementById('searchInput').value.toLowerCase().trim();
  renderProducts();
}

let toastTimer;
function showToast(msg){
  const t=document.getElementById('toast');
  document.getElementById('toastMsg').textContent=msg;
  t.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer=setTimeout(()=>t.classList.remove('show'),2800);
}

document.getElementById('orderModal').addEventListener('click',function(e){if(e.target===this)closeModal()});
document.querySelectorAll('input[name="delivery"]').forEach(r=>r.addEventListener('change',updateCartUI));

renderProducts();
renderDeals();
updateCartUI();
</script>
</body>
</html>
