<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Elden Creative Network | Agensi Konten & Iklan D2C Data-Driven</title>

    <meta name="description"
        content="Elden Creative Network adalah agensi D2C yang berfokus pada strategi iklan presisi dan konten autentik. Kami menggunakan pendekatan data-driven (CAC, LTV) untuk pertumbuhan bisnis Anda.">

    <link rel="canonical" href="https://www.eldencreative.id/">

    <link rel="icon" href="../landing/img/logo/png/elden png blue.png" type="image/x-icon">

    <meta property="og:title" content="Elden Creative Network | Agensi Konten & Iklan D2C Data-Driven">
    <meta property="og:description"
        content="Elden Creative Network adalah agensi D2C yang berfokus pada strategi iklan presisi dan konten autentik. Kami menggunakan pendekatan data-driven (CAC, LTV) untuk pertumbuhan bisnis Anda.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.eldencreative.id/">
    <meta property="og:image" content="https://www.eldencreative.id/path/to/hero-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <link href="https://db.onlinewebfonts.com/c/9366bd460113d8bf675fd2bdfe1ce764?family=The+Seasons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />



    <style>
        /* CSS Anda (tidak diubah, sudah baik) */
        :root {
            --color-bg: #ffffff;
            --color-bg-secondary: #f8f9fa;
            --color-text-primary: #212529;
            --color-text-secondary: #555;
            --color-border: #e0e0e0;
            --font-sans: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            --font-serif: "The Seasons", Georgia, "Times New Roman", Times, serif;
        }

        body.dark-mode {
            --color-bg: #121212;
            --color-bg-secondary: #1a1a1a;
            --color-text-primary: #e9ecef;
            --color-text-secondary: #adb5bd;
            --color-border: #333;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            padding-top: 4.5rem;
            font-family: "The Seasons";
            background-color: var(--color-bg);
            color: var(--color-text-primary);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .hero-section {
            background-image: linear-gradient(rgba(5, 5, 10, 0.9), rgba(5, 5, 10, 0.9)),
                url('../landing/img/FOTO/hero.png');
            background-position: center;
            padding: 8rem 0;
            position: relative;
            color: white;
        }

        .hero-pretitle {
            font-family: var(--font-sans);
            font-size: 1.1rem;
            color: #ced4da;
            margin-bottom: 0.5rem;
        }

        .hero-title {
            font-family: var(--font-serif);
            font-size: clamp(3rem, 7vw, 5.5rem);
            font-weight: 600;
            line-height: 1.15;
            color: #ffffff;
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-family: var(--font-sans);
            font-size: clamp(1.1rem, 3vw, 1.35rem);
            color: #ced4da;
            font-weight: 300;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .tumbuhan-section {
            background-color: var(--color-bg-secondary);
            overflow-x: hidden;
            transition: background-color 0.3s ease;
        }

        .tumbuhan-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-top-left-radius: 10rem;
            border-bottom-left-radius: 10rem;
        }

        .tumbuhan-text {
            padding: 2rem 3rem;
        }

        @media (max-width: 991.98px) {
            .tumbuhan-image {
                border-radius: 0;
                height: 300px;
            }

            .tumbuhan-text {
                padding: 2rem 1.5rem;
            }
        }

        .features-section {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .feature-card {
            border: 1px solid var(--color-border);
            background-color: var(--color-bg-secondary);
            border-radius: 1.5rem;
            padding: 2.5rem;
            height: 100%;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 220px;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
        }

        .feature-icon {
            max-width: 180px;
            width: 50%;
            height: auto;
            align-self: flex-end;
            margin-bottom: 1rem;
        }

        .dark-mode .feature-icon {
            filter: invert(1);
        }

        .feature-text {
            align-self: flex-start;
        }

        .feature-text h5 {
            font-weight: 600;
            color: var(--color-text-primary);
            margin-bottom: 0.5rem;
        }

        .feature-text p {
            font-size: 0.9rem;
            color: var(--color-text-secondary);
            margin-bottom: 0;
        }

        .intro-text h3, .intro-text h2 { /* SEO: Menambahkan h2 ke style yang ada */
            font-weight: 300;
            font-size: 1.75rem;
            margin-bottom: 1rem;
            color: var(--color-text-primary);
        }

        .intro-text p {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--color-text-secondary);
        }

        .cta-footer {
            --dim: .70;
            background:
                linear-gradient(rgba(0, 0, 0, var(--dim)), rgba(0, 0, 0, var(--dim))),
                url('../landing/img/FOTO/hero.png') center no-repeat;
            color: white;
            background-position: center;
            padding: 7rem 0;
            position: relative;
            text-align: center;
        }

        .cta-title {
            font-family: var(--font-serif);
            font-size: clamp(1.75rem, 5vw, 2.75rem);
            font-weight: 500;
            color: #ffffff;
            margin-bottom: 2rem;
            white-space: normal;
        }

        @media (min-width: 992px) {
            .cta-title {
                white-space: nowrap;
            }
        }

        .btn-consult {
            font-family: var(--font-sans);
            font-weight: 500;
            font-size: 1rem;
            color: #ffffff;
            background-color: transparent;
            border: 2px solid #ffffff;
            border-radius: 50px;
            padding: 0.75rem 2.5rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-consult:hover {
            color: #121212;
            background-color: #ffffff;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #0d6efd;
            color: white;
            border-radius: 50%;
            padding: 10px;
            font-size: 20px;
            display: none;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        body.dark-mode .back-to-top {
            background-color: #2a2a2a;
            border: 1px solid #444;
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
            z-index: 1000;
            /* SEO: Menambahkan transisi untuk 'a' tag */
            transition: background-color 0.3s ease;
        }

        .whatsapp-bubble img {
            width: 40px;
            height: 40px;
        }

        .whatsapp-bubble:hover {
            background-color: #128C7E;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">Elden Creative Network</a>
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
                        <a class="nav-link" href="#client">Client</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-dark btn-sm ms-2" id="toggleDarkMode">Toggle Dark Mode</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="home" class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9 text-center">

                    <p class="hero-pretitle">We design</p>

                    <h1 class="hero-title">
                        Authentic Content and<br>
                        Precision Ad Strategies
                    </h1>

                    <p class="hero-subtitle">
                        that turn viewers into loyal customers for D2C brands.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section id="connect" class="tumbuhan-section my-5">
        <div class="container-fluid">
            <div class="row g-0 align-items-center">

                <div class="col-lg-6">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12 intro-text">
                                <h2>At Elden, we believe growth shouldn't rely on intuition alone.</h2>
                                <p>
                                    With a data-driven approach, every campaign decision is guided by
                                    key metrics like CAC, LTV, and conversion rate.
                                </p>
                                <p>
                                    Supported by A/B testing, paid advertising, and automation, this
                                    strategy drives fast and efficient growth. Through the build-measure-
                                    learn cycle, every process is evaluated and improved without wasting
                                    time or resources ensures an effective solution that fuels your
                                    business growth.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 p-0">
                    <img src="../landing/img/FOTO/13.png" alt="Seedling growing, representing data-driven growth"
                        class="tumbuhan-image"> </div>

            </div>
        </div>
    </section>

    <section id="service" class="features-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2>Pilar Strategi Pertumbuhan Kami</h2>
                    <p class="lead" style="color: var(--color-text-secondary);">
                        Metodologi yang kami gunakan untuk memastikan pertumbuhan yang terukur dan efisien untuk brand D2C.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <img src="../landing/img/ICONS/9.png" alt="Icon for Data Driven Focus" class="feature-icon">
                        <div class="feature-text">
                            <h5>Data Driven Focus</h5>
                            <p>Every decision is based on real data, not assumptions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <img src="../landing/img/ICONS/10.png" alt="Icon for Measured ROI" class="feature-icon">
                        <div class="feature-text">
                            <h5>Measured ROI</h5>
                            <p>Budget is allocated only to the best-performing channels.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <img src="../landing/img/ICONS/11.png" alt="Icon for Cross-Functional Team" class="feature-icon">
                        <div class="feature-text">
                            <h5>Cross-Functional Team</h5>
                            <p>Marketing, product, and technical teams work as one unit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <img src="../landing/img/ICONS/12.png" alt="Icon for Fast Scalability" class="feature-icon">
                        <div class="feature-text">
                            <h5>Fast Scalability</h5>
                            <p>A/B testing, automation, and paid ads deliver instant results.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <img src="../landing/img/ICONS/13.png" alt="Icon for Continuous Iteration" class="feature-icon">
                        <div class="feature-text">
                            <h5>Continuous Iteration</h5>
                            <p>The build-measure-learn cycle that keeps evolving.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="client" class="cta-footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <h2 class="cta-title">
                        Want a Strategy That Truly Drives Growth?
                    </h2>

                    <a href="https://wa.me/6281234567890?text=Halo%20Elden%20Creative,%20saya%20tertarik%20dengan%20layanan%20Anda."
                       class="btn-consult"
                       target="_blank"
                       rel="noopener noreferrer">
                        Consult Now!
                    </a>

                </div>
            </div>
        </div>
    </section>

    <a href="https://wa.me/6281234567890?text=Halo%20Elden%20Creative,%20saya%20tertarik%20dengan%20layanan%20Anda."
        class="whatsapp-bubble"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat with us on WhatsApp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>

    {{-- <button class="back-to-top" id="backToTopBtn" aria-label="Kembali ke atas">
        <i class="bi bi-arrow-up-circle" style="font-size: 2rem; color: white"></i>
    </button> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <script>
        // Script Anda (tidak diubah, sudah baik)
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
