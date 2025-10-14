<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Elden — Contents & Connection</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg-deep:#0b0f1a;
      --bg-dark:#0f1524;
      --bg-mid:#0f1a2e;
      --text:#e6ecff;
      --muted:#98a2b3;
      --primary:#7aa2ff; /* subtle accent */
      --brand:#a6c1ff;
      --card:#101827ee;
      --radius:1.25rem;
      --shadow:0 10px 30px rgba(0,0,0,.35);
    }

    html,body{height:100%; background:linear-gradient(180deg,var(--bg-deep),var(--bg-mid)); color:var(--text); font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial,"Apple Color Emoji","Segoe UI Emoji";}
    a{color:var(--brand)}

    /* NAV */
    .navbar{backdrop-filter:saturate(160%) blur(10px);background:rgba(10,13,24,.55)}
    .navbar .nav-link{color:#dbe4ff}
    .navbar .nav-link:hover{color:#fff}

    /* HERO */
    .hero{
      position:relative; min-height:86vh; display:grid; place-items:center; text-align:center; overflow:hidden;
      background:
        radial-gradient(1000px 400px at 50% 110%, rgba(122,162,255,.15), transparent 60%),
        radial-gradient(900px 500px at 0% 0%, rgba(69,101,255,.15), transparent 60%),
        radial-gradient(900px 500px at 100% 0%, rgba(69,101,255,.15), transparent 60%),
        url('https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=1974&auto=format&fit=crop');
      background-size:cover; background-position:center; isolation:isolate;
    }
    .hero::after{content:""; position:absolute; inset:0; background:linear-gradient(180deg,rgba(5,8,16,.6),rgba(5,8,16,.85)); z-index:-1}

    .eyebrow{letter-spacing:.28em; text-transform:uppercase; color:var(--muted); font-weight:600; font-size:.8rem}
    .display-hero{font-family:"Playfair Display",serif; font-weight:800; line-height:1.1;}
    .display-hero .stroke{color:transparent; -webkit-text-stroke:1px #eff4ff; text-stroke:1px #eff4ff}

    .btn-cta{--bs-btn-padding-y:.8rem; --bs-btn-padding-x:1.2rem; border-radius:999px; box-shadow:var(--shadow)}

    /* SECTION */
    section{padding:clamp(3rem,6vw,6rem) 0}
    .section-title{font-family:"Playfair Display",serif; font-weight:700}
    .muted{color:var(--muted)}

    /* CARDS */
    .service-card, .glass-card{
      background:linear-gradient(180deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border:1px solid rgba(255,255,255,.08); border-radius:var(--radius); box-shadow:var(--shadow);
    }
    .service-card:hover{transform:translateY(-4px); transition:.25s ease}

    .logo-cloud img{filter:grayscale(1) brightness(.9); opacity:.9; transition:filter .2s, opacity .2s}
    .logo-cloud img:hover{filter:grayscale(0) brightness(1); opacity:1}

    /* STATS */
    .stat-number{font-family:"Playfair Display",serif; font-weight:800; font-size:clamp(2.8rem,7vw,5.2rem)}
    .divider{height:1px; background:linear-gradient(90deg,transparent,rgba(255,255,255,.2),transparent)}

    /* WHAT WE DO */
    .wwd-card{padding:1.4rem; height:100%}
    .wwd-card h5{font-weight:700}

    /* CTA */
    .cta{background:radial-gradient(600px 300px at 10% 10%, rgba(122,162,255,.18), transparent 60%),
          radial-gradient(600px 280px at 90% 20%, rgba(122,162,255,.18), transparent 60%), var(--bg-dark)}
    .cta .lead{color:#eaf0ff}

    /* FOOTER */
    footer{background:linear-gradient(180deg,var(--bg-mid),#05070d)}

    /* UTIL */
    .rounded-2xl{border-radius:1.25rem}

    /* Responsive tweaks */
    .grid-3{display:grid; grid-template-columns:repeat(3,1fr); gap:1rem}
    @media (max-width: 992px){ .grid-3{grid-template-columns:1fr 1fr} }
    @media (max-width: 576px){ .grid-3{grid-template-columns:1fr} }

    .shadow-soft{box-shadow:0 12px 25px rgba(0,0,0,.25)}

    .img-fit{object-fit:cover; height:220px; border-top-left-radius:var(--radius); border-top-right-radius:var(--radius)}
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#"><i class="bi bi-bezier2 me-1"></i>Elden</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="filter:invert(1)"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#work">Work</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#clients">Clients</a></li>
          <li class="nav-item"><a class="btn btn-primary btn-sm ms-lg-3 btn-cta" href="#contact"><i class="bi bi-chat-dots me-1"></i>Discuss Plan</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="hero d-flex align-items-center">
    <div class="container py-5">
      <p class="eyebrow mb-3">Storymaking · Social marketing · Studio</p>
      <h1 class="display-hero display-3 mb-3">Supermaking <span class="stroke">Contents</span><br/> Startmaking <span class="stroke">Connection</span></h1>
      <p class="lead mx-auto" style="max-width:820px">Using the power of content, we turn creativity into measurable business outcomes. Content & ad strategies designed for growth.</p>
      <div class="mt-4 d-flex gap-3 justify-content-center">
        <a href="#work" class="btn btn-light btn-cta"><i class="bi bi-play-circle me-1"></i> See our work</a>
        <a href="#contact" class="btn btn-outline-light btn-cta"><i class="bi bi-whatsapp me-1"></i> Let’s talk</a>
      </div>
    </div>
  </header>



  @yield('main')

  <!-- FOOTER -->
  <footer class="py-5">
    <div class="container text-center">
      <h4 class="section-title">Create a solid <span class="text-white-50">Network</span> you’ll ever need</h4>
      <p class="muted small mb-3">© <span id="y"></span> Elden Studio. All rights reserved.</p>
      <div class="d-flex gap-3 justify-content-center">
        <a class="text-decoration-none text-white-50" href="#">Privacy</a>
        <a class="text-decoration-none text-white-50" href="#">Terms</a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // year
    document.getElementById('y').textContent = new Date().getFullYear()

    // Smooth anchor scroll
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click',e=>{
        const id=a.getAttribute('href');
        if(id.length>1){
          e.preventDefault();
          document.querySelector(id).scrollIntoView({behavior:'smooth'});
        }
      })
    })

    // Counter up on view
    const counters=[...document.querySelectorAll('[data-counter]')]
    const io=new IntersectionObserver((entries)=>{
      entries.forEach(ent=>{
        if(ent.isIntersecting){
          const el=ent.target; const end=+el.dataset.counter; let cur=0; const step=Math.max(1, Math.round(end/120));
          const t=setInterval(()=>{cur+=step; if(cur>=end){cur=end; clearInterval(t);} el.textContent=cur},10);
          io.unobserve(el);
        }
      })
    },{threshold:.5});
    counters.forEach(c=>io.observe(c));
  </script>
</body>
</html>
