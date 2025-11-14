<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Elden Creative Network | Agensi Narrative Marketing & Storytelling</title>

    <meta name="description" content="Elden Creative Network adalah agensi narrative marketing yang mengubah cerita brand jadi nyata. Kami menggabungkan data, psikologi, dan kreativitas.">

    <link rel="canonical" href="https://www.eldencreative.network/">

    <link rel="icon" type="image/png" href="../landing/img/logo/png/elden png blue.png">

    <meta property="og:title" content="Elden Creative Network | Agensi Narrative Marketing">
    <meta property="og:description" content="Kami mengubah cerita brand jadi nyata melalui narrative marketing yang strategis.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.eldencreative.network/">
    <meta property="og:image" content="https://www.eldencreative.network/landing/img/FOTO/8.png">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Elden Creative Network | Agensi Narrative Marketing">
    <meta name="twitter:description" content="Kami mengubah cerita brand jadi nyata melalui narrative marketing yang strategis.">
    <meta name="twitter:image" content="https://www.eldencreative.network/landing/img/FOTO/8.png">
    <link href="https://db.onlinewebfonts.com/c/9366bd460113d8bf675fd2bdfe1ce764?family=The+Seasons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        /* [CSS Anda tetap sama, tidak perlu diubah] */
        :root {
            --color-bg: #ffffff;
            --color-text: #212529;
            --color-border: #dee2e6;
        }
        body.dark-mode {
            --color-bg: #121212;
            --color-text: #e9ecef;
            --color-border: #333;
        }
        html { scroll-behavior: smooth; }
        body {
            padding-top: 4.5rem;
            font-family: "The Seasons";
            background-color: var(--color-bg);
            color: var(--color-text);
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .hero {
            --dim: .98;
            background:
                linear-gradient(rgba(0, 0, 0, var(--dim)), rgba(0, 0, 0, var(--dim))),
                url('../landing/img/FOTO/8.png') center no-repeat;
            color: white;
            background-position: center;
            min-height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
        }
        .hero-title {
            font-size: clamp(3rem, 8vw, 8rem);
            line-height: 1;
            font-weight: bold;
            margin-bottom: 1.5rem;
            width: 100%;
        }
        .hero-title .line-1 { display: block; text-align: left; }
        .hero-title .line-2 { display: block; text-align: right; }
        .hero-subtitle {
            font-size: clamp(1rem, 3vw, 1.75rem);
            font-weight: normal;
            text-align: center;
            margin-top: 2rem;
        }
        .middle-content {
            --dim: .90;
            background:
                linear-gradient(rgba(0, 0, 0, var(--dim)), rgba(0, 0, 0, var(--dim))),
                url('../landing/img/FOTO/8.png') center no-repeat;
            color: white;
        }
        .text-box-right {
            border: 1px solid white;
            border-right: none;
            border-top-left-radius: 100px;
            border-bottom-left-radius: 100px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            height: 100%;
            display: flex;
            align-items: center;
        }
        @media (max-width: 991.98px) {
            .text-box-right {
                border-radius: 1rem;
                border-right: 1px solid white;
                margin-top: 2rem;
            }
        }
        @media (max-width: 767.98px) {
            .hero-title .line-1,
            .hero-title .line-2 {
                text-align: center;
            }
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
            z-index: 99;
        }
        body.dark-mode .back-to-top {
            background-color: #333;
            border: 1px solid #555;
        }
        .back-to-top img { width: 30px; height: 30px; }
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
            /* SEO: 'border: none' tidak diperlukan pada tag <a> */
            z-index: 99;
        }
        .whatsapp-bubble img { width: 40px; height: 40px; }
        .whatsapp-bubble:hover { background-color: #128C7E; }
        .footer {
            --dim: .80;
            background: linear-gradient(rgba(0, 0, 0, var(--dim)), rgba(0, 0, 0, var(--dim))), url('../landing/img/FOTO/8.png') center no-repeat;
            color: white;
            min-height: 30vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">
                Elden Creative Network
            </a>
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
                        <a class="nav-link" href="#connect">Connect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-dark btn-sm ms-2" id="toggleDarkMode">Toggle Dark Mode</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="home" class="hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-10">
                    <h1 class="hero-title">
                        <span class="line-1">Narrative</span>
                        <span class="line-2">Marketing</span>
                    </h1>
                    <p class="hero-subtitle">Making stories turns into a reality</p>
                </div>
            </div>
        </div>
    </section>


    <section id="service" class="py-5 middle-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <h2 class="text-center pb-4" style="font-size: 2.5rem; font-weight: bold;">
                        We Shape Meaning, Not Just Messages
                    </h2>
                    <p class="pb-5 text-center" style="font-size: 1.25rem;">
                        At Elden, we believe stories move people more than numbers ever could.
                        Narrative marketing is about more than just crafting messages — it’s about shaping meaning.
                        We turn brand stories into emotional journeys that connect deeply with audiences,
                        inspire loyalty, and drive action that lasts.
                    </p>
                </div>
            </div>
        </div>

        <div id="connect" class="row g-0 align-items-center">
            <div class="col-lg-6 p-5 text-center">
                <img class="img-fluid" src="../landing/img/FOTO/9.png"
                     alt="Diagram alur kerja Elden yang menggabungkan data, psikologi, dan kreativitas untuk strategi." />
            </div>
            <div class="col-lg-6">
                <div class="text-box-right p-5">
                    <div>
                        <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1rem;">Our Strategic Approach</h2>
                        <p style="font-size: 1.15rem;">
                            By combining data, psychology, and creativity,
                            Elden bridges storytelling with strategy. Every narrative is built on real human insight.
                            Measured, tested, and refined. To make sure it doesn’t just sound good, but works.
                            From concept to execution, our cross-functional team ensures every brand story feels authentic,
                            consistent, and powerful.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer py-5">
        <div class="container">
            <div class="text-center">
                <div>
                    <h2 class="display-6 display-lg-5 mb-4">The only limit is your imagination. We make it happen.</h2>
                </div>
                <div class="text-center">
                    <a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light btn-lg">
                        Consult Now
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/1234567890?text=Halo%20Elden%20Creative%2C%20saya%20tertarik%20dengan%20layanan%20Anda."
       class="whatsapp-bubble"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Hubungi kami di WhatsApp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Logo WhatsApp">
    </a>

    {{-- <button class="back-to-top" id="backToTopBtn" aria-label="Kembali ke atas">
        <i class="bi bi-arrow-up-circle" style="font-size: 2rem; color: white" aria-hidden="true"></i>
    </button> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <script>
        // === Logika JavaScript Dark Mode (Sudah Benar) ===
        const toggleButton = document.getElementById('toggleDarkMode');
        const navbar = document.querySelector('.navbar');

        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            if (document.body.classList.contains('dark-mode')) {
                navbar.classList.remove('navbar-light', 'bg-light');
                navbar.classList.add('navbar-dark', 'bg-dark');
                toggleButton.classList.remove('btn-outline-dark');
                toggleButton.classList.add('btn-outline-light');
                toggleButton.textContent = 'Toggle Light Mode';
            } else {
                navbar.classList.add('navbar-light', 'bg-light');
                navbar.classList.remove('navbar-dark', 'bg-dark');
                toggleButton.classList.add('btn-outline-dark');
                toggleButton.classList.remove('btn-outline-light');
                toggleButton.textContent = 'Toggle Dark Mode';
            }
        });

        // === Kode Back to Top (Sudah Benar) ===
        window.onscroll = function () {
            var backToTopBtn = document.getElementById("backToTopBtn");
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                backToTopBtn.style.display = "block";
            } else {
                backToTopBtn.style.display = "none";
            }
        };

        document.getElementById("backToTopBtn").addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>

</body>
</html>
