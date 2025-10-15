<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{asset('landing/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('landing/css/bootstrap.min.css')}}"> --}}

    <link href="https://db.onlinewebfonts.com/c/9366bd460113d8bf675fd2bdfe1ce764?family=The+Seasons" rel="stylesheet">

    {{-- <link href="{{asset('landing/fonts/Montserrat-Full-Version/Web Fonts/Montserrat/stylesheet.css')}}" rel="stylesheet"> --}}
    
    <!-- Custom CSS -->
    <style>
        /* Smooth scroll untuk seluruh halaman */
        html {
            scroll-behavior: smooth;
        }

        /* Spasi agar konten tidak tertutup navbar fixed */
        body {
            padding-top: 4.5rem;
            font-family: "The Seasons";
            /* font-family: 'Montserrat', sans-serif;
            font-family: 'Montserrat'; */
        }

        /* Hero */
        .hero {
            min-height: 85vh;
            display: grid;
            place-items: center;
            text-align: center;
            background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
        }

        /* Dark mode styles */
        body.dark-mode {
            background-color: #121212;
            color: white;
        }

        .dark-mode .navbar,
        .dark-mode .card {
            background-color: #333;
            color: white;
        }

        .dark-mode .btn,
        .dark-mode .btn-outline-light {
            color: white;
            border-color: white;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border-radius: 50%;
            padding: 10px;
            font-size: 20px;
            display: none;
            border: none;
            cursor: pointer;
        }

        .back-to-top img {
            width: 30px;
            height: 30px;
        }

        .whatsapp-bubble {
            position: fixed;
            bottom: 90px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            padding: 15px;
            font-size: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: none;
        }

        .whatsapp-bubble img {
            width: 40px;
            height: 40px;
        }

        .whatsapp-bubble:hover {
            background-color: #128C7E;
        }

            /* Fullscreen background */
    .hero {
      position: relative;
      min-height: 100vh;
      background: url('../../../../landing/img/bg/hero1.png') no-repeat center center/cover;
      color: white;
    }

    /* Hero text styling */
    .hero h1 {
      font-size: 4rem;
      font-weight: 700;
    }

    .hero p {
      font-size: 1.25rem;
      max-width: 600px;
      margin: 0 auto;
    }

    /* Centering text vertically */
    .hero .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }


    :root{ --radius:28px; }
    body{ 
        background:#f7f7f9;
        /* font-family:system-ui,-apple-system,Segoe UI,Roboto,Inter,Helvetica,Arial,sans-serif;  */
    }
    .card-col{ margin-bottom:2rem; }
    .tile{
      border:0; background:transparent; width:100%; max-width: 390px; margin-inline:auto;
    }
    .img-shell{
      position:relative; 
      overflow:hidden; 
      border-radius:var(--radius);
      box-shadow:0 10px 26px rgba(0,0,0,.12); 
      aspect-ratio: 9/11; 
      background:#ddd;
    }
    .img-shell .carousel, .img-shell .carousel-inner, .img-shell .carousel-item{ height:100%; }
    .img-shell img{
      width:100%; height:100%; object-fit:cover; display:block;
      transform:scale(1.01); transition:transform .45s ease;
    }
    .img-shell:hover img{ transform:scale(1.05); }
    /* Tombol panah PNG pojok kanan bawah */
    .arrow-btn{ 
      position:absolute; 
      right:14px; 
      bottom:14px; 
      width:46px; 
      height:46px; 
      border-radius:50%;
      display:grid; 
      place-items:center; 
      background:rgba(255,255,255,.92);
      border:1px solid rgba(0,0,0,.08); 
      backdrop-filter:blur(4px);
      box-shadow:0 8px 18px rgba(0,0,0,.15); 
      transition:transform .3s ease, background .3s ease;
      z-index:5;
    }

    .arrow-btn:hover{ 
        transform:translateY(-2px); 
        background:#fff; 
    }
    .arrow-btn img{ 
        width:20px; 
        height:20px; 
    }
    .tile-title{ 
        margin-top:.9rem; 
        font-weight:600; 
        font-size:clamp(1.05rem,1vw + .8rem,1.25rem); 
    }
    .tile-sub{ 
        color:#6b7280; 
        font-size:.95rem; 
    }
    /* Sembunyikan kontrol default (tetap aksesibel dengan keyboard/screenreader) */
    .carousel-control-prev, 
    .carousel-control-next{ 
        display:none; 
    }

        
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Landing Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-light" id="toggleDarkMode">Toggle Dark Mode</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <!-- WhatsApp Bubble -->
    <div class="whatsapp-bubble" onclick="window.location.href='https://wa.me/1234567890'">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </div>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTopBtn">
        <img src="{{asset('landing/img/icons/arrow.png')}}" alt="Back to Top">
    </button>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    {{-- <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('landing/js/bootstrap.bundle.min.js')}}"></script> --}}
    
    <script>
        // Dark mode toggle
        document.getElementById('toggleDarkMode').addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });

        // Back to top button visibility
        window.onscroll = function () {
            var backToTopBtn = document.getElementById("backToTopBtn");
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                backToTopBtn.style.display = "block";
            } else {
                backToTopBtn.style.display = "none";
            }
        };

        // Back to top button functionality
        document.getElementById("backToTopBtn").addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>

      <script>
    // Tombol panah PNG menggerakkan slider terdekat (berdasarkan data-target)
    document.querySelectorAll('.arrow-btn').forEach(btn => {
      btn.addEventListener('click', e => {
        e.preventDefault();
        const target = btn.getAttribute('data-target');
        const el = document.querySelector(target);
        if (!el) return;
        const instance = bootstrap.Carousel.getOrCreateInstance(el);
        instance.next();
      });
    });
  </script>

</body>

</html>
