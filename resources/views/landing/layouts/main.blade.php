<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elden</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <style>
        /* Smooth scroll untuk seluruh halaman */
        html {
            scroll-behavior: smooth;
        }

        /* Spasi agar konten tidak tertutup navbar fixed */
        body {
            padding-top: 4.5rem;
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




            :root{
      --radius-xxl: 1.25rem;
    }
    body{font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";}
    .display-title{font-family: "Playfair Display", Georgia, serif; font-weight: 600; letter-spacing: .2px;}
    .brand-card{border:0; border-radius: var(--radius-xxl); overflow:hidden; box-shadow: 0 10px 30px rgba(0,0,0,.08); transition: transform .3s ease, box-shadow .3s ease; height:100%;}
    .brand-card:hover{transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,.12)}
    .brand-media{position:relative;}
    .brand-media img{width:100%; height:100%; object-fit:cover;}
    .brand-media .gradient{position:absolute; inset:0; background:linear-gradient(180deg, rgba(0,0,0,0) 55%, rgba(0,0,0,.35) 100%);}
    .brand-cta{position:absolute; right:.75rem; bottom:.75rem; width:48px; height:48px; display:grid; place-items:center; border-radius:50%; background:#fff; border:1px solid rgba(0,0,0,.08);}
    .brand-cta svg{width:22px; height:22px}
    .brand-body{padding:1rem 1rem 1.25rem}
    .brand-title{margin:0; font-weight:600}
    .brand-sub{color:#6c757d; font-size:.925rem}
    .ratio-4x3{aspect-ratio: 4 / 3;}
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
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Arrow_up_font_awesome.svg/1200px-Arrow_up_font_awesome.svg.png" alt="Back to Top">
    </button>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

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

</body>

</html>
