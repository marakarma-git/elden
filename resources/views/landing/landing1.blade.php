<!DOCTYPE html>
<html lang="id" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>
        Elden Creative Network | Agensi Marketing Konten & Pertumbuhan
    </title>

    <meta name="description"
        content="Elden Creative Network adalah agensi marketing strategis yang mengubah kreativitas menjadi konversi. Kami spesialis dalam content, growth, dan narrative marketing." />

    <link rel="canonical" href="httpshttps://www.domain-anda.com/" />

    <meta name="robots" content="index, follow" />

    <link rel="icon" href="../landing/img/logo/png/elden png blue.png" sizes="any" />
    <link rel="icon" href="/favicon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

    <meta property="og:title" content="Elden Creative Network | Agensi Marketing Konten & Pertumbuhan" />
    <meta property="og:description"
        content="Elden Creative Network adalah agensi marketing strategis yang mengubah kreativitas menjadi konversi." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="httpshttps://www.domain-anda.com/" />
    <meta property="og:site_name" content="Elden Creative Network" />
    <meta property="og:image" content="https://www.domain-anda.com/gambar-share.jpg" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://www.domain-anda.com/gambar-share.jpg" />
    <meta name="twitter:title" content="Elden Creative Network | Agensi Marketing Konten & Pertumbuhan" />
    <meta name="twitter:description"
        content="Elden Creative Network adalah agensi marketing strategis yang mengubah kreativitas menjadi konversi." />
    <meta name="twitter:site" content="@UsernameTwitterAnda" />

    <link href="https://db.onlinewebfonts.com/c/9366bd460113d8bf675fd2bdfe1ce764?family=The+Seasons" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />

    <style>
        :root {
            /* Variabel Warna (Light Mode Default) */
            --ecn-bg: #ffffff;
            --ecn-text: #212529;
            --ecn-text-secondary: #6c757d;
            --ecn-card-bg: #ffffff;
            --ecn-border-color: rgba(0, 0, 0, 0.175);
            --ecn-navbar-bg: rgba(255, 255, 255, 0.95);

            --font-serif: "The Seasons", "Playfair Display", serif;
            /* Uncomment jika Anda ingin menggunakan Inter */
            /* --font-sans: 'Inter', sans-serif; */
        }

        /* Variabel untuk Dark Mode */
        [data-bs-theme="dark"] {
            --ecn-bg: #121212;
            --ecn-text: #eeeeee;
            --ecn-text-secondary: #a0a0a0;
            --ecn-card-bg: #1e1e1e;
            --ecn-border-color: rgba(255, 255, 255, 0.1);
            --ecn-navbar-bg: rgba(20, 20, 20, 0.95);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "The Seasons";
            background-color: var(--ecn-bg);
            color: var(--ecn-text);
            /* PERBAIKAN: Padding untuk fixed navbar */
            padding-top: 70px;
        }

        /* === Navbar === */
        .navbar {
            background-color: var(--ecn-navbar-bg);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }

        /* === Hero Section === */
        .hero-section {
            min-height: 100vh;
            width: 100%;
            color: #fff;
            /* Teks di hero selalu putih, tidak terpengaruh dark mode */
            position: relative;
            --dim: 0.65;
            background: linear-gradient(rgba(0, 0, 0, var(--dim)),
                    rgba(0, 0, 0, var(--dim))),
                url("../landing/img/FOTO/hero.png") center no-repeat;
            display: flex;
            flex-direction: column;
        }

        .hero-logo {
            padding: 2.5rem 0;
        }

        .hero-content {
            flex-grow: 1;
        }

        .hero-pretitle {
            /* font-family: var(--font-sans); */
            /* Uncomment jika pakai Inter */
            font-size: 1.1rem;
            color: #a0a0a0;
            /* Sekunder di hero, tetap terang */
            margin-bottom: 0.5rem;
        }

        .hero-title {
            font-family: var(--font-serif);
            font-size: clamp(3.5rem, 9vw, 6.5rem);
            font-weight: 500;
            line-height: 1.1;
            color: #ffffff;
        }

        .hero-footer-text {
            /* font-family: var(--font-sans); */
            /* Uncomment jika pakai Inter */
            font-size: 1rem;
            color: #a0a0a0;
            line-height: 1.6;
        }

        .font-serif {
            font-family: var(--font-serif);
        }

        /* === Connect Section === */
        .connect-subtitle {
            font-size: 2rem;
            color: var(--ecn-text-secondary);
            /* PERBAIKAN: Gunakan variabel */
        }

        .connect-title {
            line-height: 1;
        }

        .project-card {
            border: 0;
            background: transparent;
            /* Kartu ini tidak punya background */
            margin-bottom: 1.5rem;
        }

        .project-card .image-wrap {
            position: relative;
            border-radius: 2rem;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            aspect-ratio: 3 / 4;
        }

        .project-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .project-card .image-wrap:hover img {
            transform: scale(1.05);
        }

        .btn-fab {
            position: absolute;
            right: 1rem;
            bottom: 1rem;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.7);
            background: rgba(255, 255, 255, 0.3);
            color: #333;
            backdrop-filter: blur(4px);
            transition: all 0.2s ease;
            z-index: 2;
        }

        .btn-fab:hover {
            background: rgba(255, 255, 255, 0.7);
            transform: scale(1.1);
            color: #000;
        }

        .project-card .card-body {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        .project-card .card-title {
            margin-bottom: 0.25rem;
            font-weight: 600;
            font-size: 1.25rem;
            color: var(--ecn-text);
            /* PERBAIKAN: Gunakan variabel */
        }

        .project-card .card-subtitle {
            color: var(--ecn-text-secondary);
            /* PERBAIKAN: Gunakan variabel */
            font-size: 1rem;
        }

        /* == Bagian Metrik (Angka) == */
        .metric-number {
            font-size: clamp(4.5rem, 12vw, 9rem);
            line-height: 0.9;
            font-weight: 400;
        }

        .metric-plus {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            letter-spacing: 0.2rem;
            line-height: 1;
            margin-bottom: 0.25rem;
        }

        .metric-text {
            font-size: clamp(1.1rem, 2.5vw, 1.5rem);
            line-height: 1.1;
            margin: 0;
        }

        /* == Perubahan CSS untuk Full Bleed == */
        .pill-img {
            height: 180px;
            overflow: hidden;
            width: 100%;
        }

        .pill-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .pill-img-bleed-right {
            border-radius: 999px 0 0 999px;
        }

        .pill-img-bleed-left {
            border-radius: 0 999px 999px 0;
        }

        /* Penyesuaian responsif */
        @media (max-width: 991.98px) {

            .pill-img-bleed-right,
            .pill-img-bleed-left {
                border-radius: 0;
                height: 250px;
            }

            .metric-row {
                text-align: center;
            }

            .metric-flex {
                justify-content: center !important;
                padding: 2rem 0;
            }
        }

        /* === Service Section === */
        .background-section {
            background-image: url("../landing/img/FOTO/gradient.png");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 5rem;
            padding-bottom: 5rem;
            position: relative;
        }

        .background-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* background-color: rgba(0, 0, 0, 0.7); */
            /* Overlay jika diperlukan */
            z-index: 1;
        }

        .content-wrapper {
            position: relative;
            z-index: 2;
        }

        .main-title {
            font-weight: 500;
            /* PERBAIKAN: Font responsif */
            font-size: clamp(2.5rem, 6vw, 3.5rem);
            margin-bottom: 3.5rem;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .service-card {
            background-color: rgba(72, 70, 70, 0.03);
            border: 1px solid rgba(244, 242, 242, 0.836);
            border-radius: 50px;
            padding: 2rem;
            height: 100%;
            position: relative;
            padding-bottom: 6rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .service-card:hover {
            background-color: rgba(255, 255, 255, 0.07);
            border-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .service-title {
            font-family: "Playfair Display", serif;
            font-weight: 500;
            font-size: 1.75rem;
            margin-bottom: 1rem;
            color: #ffffff;
        }

        .service-description {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .service-icon {
            position: absolute;
            bottom: 1.5rem;
            right: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.5);
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            border-color: #ffffff;
        }

        .service-icon .bi-arrow-right {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .footer-text {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            max-width: 900px;
            margin-top: 5rem;
        }

        /* === Customer Section === */
        .customer-section {
            padding-top: 0.5rem;
            /* PERBAIKAN: Padding bottom salah ketik */
            padding-bottom: 0.5rem;
        }

        .customer-title {
            font-family: "Playfair Display", serif;
            font-weight: 500;
            font-size: 2.75rem;
            color: var(--ecn-text);
            /* PERBAIKAN: Gunakan variabel */
            margin-bottom: 3rem;
        }

        .example-text {
            color: #e53e3e;
            font-style: italic;
            font-size: 0.9rem;
            margin-top: 2rem;
        }

        /* Style untuk Splide.js */
        .splide__slide {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 150px;
        }

        .splide__slide img {
            /* PERBAIKAN: Ukuran logo lebih masuk akal */
            max-height: 300px;
            width: auto;
            max-width: 100%;
            /* filter: grayscale(100%);
      opacity: 0.7; */
            transition: all 0.3s ease;
        }

        /* PERBAIKAN: Invert logo di dark mode agar terlihat */
        [data-bs-theme="dark"] .splide__slide img {
            filter: grayscale(100%) invert(1);
        }

        .splide__slide:hover img {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.05);
        }

        [data-bs-theme="dark"] .splide__slide:hover img {
            filter: grayscale(100%) invert(1);
            /* Kembali normal saat hover di dark mode */
        }

        .splide:not(.is-active) .splide__track {
            visibility: hidden;
        }

        /* === Growth Plan Section === */
        .growth-plan-section {
            background-image: url("../../landing/img/FOTO/gradient.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #1a2035;
            color: #ffffff;
            padding: 6rem 0;
        }

        .growth-plan-section h1,
        .growth-plan-section h2,
        .growth-plan-section h3 {
            font-family: "Playfair Display", serif;
            font-weight: 700;
        }

        .growth-plan-section p {
            /* font-family: 'Lato', sans-serif; */
            /* Ganti jika perlu */
            opacity: 0.9;
        }

        .elden-logo {
            height: auto;
            width: 150px;
        }

        .social-icon {
            /* PERBAIKAN: Ukuran responsif */
            width: clamp(60px, 15vw, 100px);
            height: auto;
            object-fit: cover;
        }

        @media (max-width: 767.98px) {
            .footer-social-icons a:first-child {
                margin-left: 0;
            }

            .footer-logo {
                margin-bottom: 1.5rem;
            }
        }

        /* === Footer Section === */
        .site-footer {
            background-image: url("../landing/img/FOTO/hero.png");
            /* background-size: cover; */
            background-position: center center;
            position: relative;
            min-height: 50vh;
            display: flex;
            flex-direction: column;
        }

        .site-footer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 0;
        }

        .site-footer .container-inner {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            min-height: 50vh;
            width: 100%;
            padding-right: var(--bs-gutter-x, 0.75rem);
            padding-left: var(--bs-gutter-x, 0.75rem);
            margin-right: auto;
            margin-left: auto;
        }

        /* Media queries untuk container-inner */
        @media (min-width: 576px) {
            .site-footer .container-inner {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .site-footer .container-inner {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .site-footer .container-inner {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .site-footer .container-inner {
                max-width: 1140px;
            }
        }

        @media (min-width: 1400px) {
            .site-footer .container-inner {
                max-width: 1320px;
            }
        }

        .footer-logo {
            height: auto;
            width: 200px;
        }

        .footer-content-main {
            flex-grow: 1;
        }

        .title-main {
            /* PERBAIKAN: Font responsif */
            font-size: clamp(3.5rem, 15vw, 8rem);
            font-weight: 700;
            line-height: 1;
            color: #ffffff;
        }

        .title-sub {
            /* PERBAIKAN: Font responsif */
            font-size: clamp(1.25rem, 4vw, 1.75rem);
            font-weight: 300;
            color: rgba(255, 255, 255, 0.9);
        }

        .footer-caption {
            font-size: 1rem;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.7);
        }

        @media (max-width: 768px) {

            /* PERBAIKAN: Hapus font-size karena clamp() sudah menangani */
            .footer-caption {
                font-size: 0.9rem;
            }
        }

        /* === Floating Buttons === */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #424344;
            color: white;
            border-radius: 25%;
            padding: 10px;
            font-size: 20px;
            display: none;
            border: none;
            cursor: pointer;
            z-index: 1000;
        }

        .back-to-top img {
            width: 30px;
            height: 30px;
        }

        .whatsapp-bubble {
            position: fixed;
            bottom: 90px;
            right: 20px;
            background-color: #25d366;
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
            /* PERBAIKAN: Pastikan ini properti link */
            text-decoration: none;
        }

        .whatsapp-bubble img {
            width: 40px;
            height: 40px;
        }

        .whatsapp-bubble:hover {
            background-color: #128c7e;
            color: white;
            /* Pastikan warna tetap */
        }
    </style>
</head>

<body>
    <h1 class="visually-hidden">
        Elden Creative Network: Agensi Marketing Konten & Pertumbuhan
    </h1>

    <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
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
                        <a class="nav-link" href="#section3">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section4">Client</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-secondary ms-2" id="toggleDarkMode">
                            <i class="bi bi-moon-stars-fill"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <header class="hero-logo text-center">
            <img src="../landing/img/LOGO/PNG/elden png white_1.png" alt="Elden Logo"
                style="height: auto; width: 150px" />
        </header>
        <main class="container hero-content d-flex align-items-center justify-content-center">
            <div class="text-center">
                <p class="hero-pretitle">Stop making</p>
                <p class="hero-title">Contents</p>
                <p class="hero-pretitle mt-4">Start making</p>
                <p class="hero-title">Connection</p>
            </div>
        </main>
        <footer class="container-fluid p-4 p-md-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 text-center">
                    <div class="hero-footer-text">
                        <p>
                            Using our growth formula, we turn creativity into conversions.
                            Content & ad strategies designed for maximum ROAS.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <section id="connect" class="my-5 py-5">
        <div class="container">
            <div class="text-start mb-3">
                <p class="connect-subtitle font-serif">We connect</p>
                <h2 class="connect-title display-1 font-serif">Company and People</h2>
            </div>
            <div class="text-center mb-5">
                <p>We’ve successfully helped these brands grow their business.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="card project-card">
                        <div class="image-wrap">
                            <img src="../landing/img/FOTO/4.png" alt="Amanaia Restaurant" />
                            <a href="#" class="btn-fab" aria-label="Lihat Amanaia">
                                <i class="bi bi-arrow-right fs-5"></i>
                            </a>
                        </div>
                        <div class="card-body pt-3">
                            <h5 class="card-title font-serif">Amanaia</h5>
                            <div class="card-subtitle">Food and Beverages</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card project-card">
                        <div class="image-wrap">
                            <img src="../landing/img/FOTO/4.png" alt="Marbella Place Hotel" />
                            <a href="#" class="btn-fab" aria-label="Lihat Marbella Place">
                                <i class="bi bi-arrow-right fs-5"></i>
                            </a>
                        </div>
                        <div class="card-body pt-3">
                            <h5 class="card-title font-serif">Marbella Place</h5>
                            <div class="card-subtitle">Hotel and Travel</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card project-card">
                        <div class="image-wrap">
                            <img src="../landing/img/FOTO/4.png" alt="Polytron Electric Vehicle" />
                            <a href="#" class="btn-fab" aria-label="Lihat Polytron">
                                <i class="bi bi-arrow-right fs-5"></i>
                            </a>
                        </div>
                        <div class="card-body pt-3">
                            <h5 class="card-title font-serif">Polytron</h5>
                            <div class="card-subtitle">Technology</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-center my-5">
                <p>and the others for more than:</p>
            </div>
        </div>
        <div class="row align-items-center g-0 metric-row">
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-lg-5">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-end metric-flex">
                    <div class="col-auto">
                        <div class="metric-number font-serif counter" data-target="65">
                            0
                        </div>
                    </div>
                    <div class="col-auto ps-3">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="metric-plus font-serif">++</div>
                            <p class="metric-text font-serif mb-0">Project<br />Finished</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="pill-img pill-img-bleed-right">
                    <img src="../landing/img/FOTO/13.png" alt="Food platter" />
                </div>
            </div>
        </div>

        <div class="container">
            <div class="text-center my-4">
                <p>and</p>
            </div>
        </div>
        <div class="row align-items-center g-0 metric-row">
            <div class="col-lg-6 order-lg-1">
                <div class="pill-img pill-img-bleed-left">
                    <img src="../landing/img/FOTO/13.png" alt="Cafe interior" />
                </div>
            </div>

            <div class="col-lg-5 order-lg-2">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start metric-flex">
                    <div class="col-auto">
                        <div class="metric-number font-serif counter" data-target="31">
                            0
                        </div>
                    </div>
                    <div class="col-auto ps-3">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="metric-plus font-serif">++</div>
                            <p class="metric-text font-serif mb-0">Brand<br />Partners</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 order-lg-3 d-none d-lg-block"></div>
        </div>
    </section>

    <section id="section3" class="background-section">
        <div class="container content-wrapper">
            <h2 class="text-center main-title">What we do?</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="service-card">
                        <h3 class="service-title">Content Marketing</h3>
                        <p class="service-description">
                            Leverage content from creators who already have an audience.
                            Fast, cost-efficient, and effective in increasing engagement
                            organically.
                        </p>
                        <div class="service-icon">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="service-card">
                        <h3 class="service-title">Growth Marketing</h3>
                        <p class="service-description">
                            A data-driven growth solution with rapid iteration cycles.
                            Build, measure, and learn for continuous optimization and
                            sustainable results.
                        </p>
                        <div class="service-icon">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="service-card">
                        <h3 class="service-title">Narrative Marketing</h3>
                        <p class="service-description">
                            Create emotional connections through authentic storytelling,
                            enhance brand recall, and differentiate your business from
                            competitors.
                        </p>
                        <div class="service-icon">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="service-card">
                        <h3 class="service-title">Intellectual Property</h3>
                        <p class="service-description">
                            Develop original campaign ideas, events, and creative concepts
                            that strengthen brand identity, build recognition, and position
                            your brand as a thought leader in the industry.
                        </p>
                        <div class="service-icon">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center footer-text mx-auto">
                By implementing KPI-driven marketing, we set clear objectives, track
                measurable progress, and optimize every campaign to ensure maximum
                impact and sustainable business growth.
            </p>
        </div>
    </section>

    <section id="section4" class="customer-section">
        <div class="container text-center">
            <h2 class="customer-title">Our Happy Customer</h2>
        </div>
        <section class="splide" id="logo-slider" aria-label="Our Happy Customer Logos">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="../landing/img/ICONS/3.png" alt="Aesthete" />
                    </li>
                    <li class="splide__slide">
                        <img src="../landing/img/ICONS/4.png" alt="Polytron" />
                    </li>
                    <li class="splide__slide">
                        <img src="../landing/img/ICONS/5.png" alt="Macs" />
                    </li>
                    <li class="splide__slide">
                        <img src="GANTI_DENGAN_LOGO_ANDA/amanaia.png" alt="amanaia" />
                    </li>
                    <li class="splide__slide">
                        <img src="GANTI_DENGAN_LOGO_ANDA/brand-5.png" alt="Brand 5" />
                    </li>
                    <li class="splide__slide">
                        <img src="GANTI_DENGAN_LOGO_ANDA/brand-6.png" alt="Brand 6" />
                    </li>
                    <li class="splide__slide">
                        <img src="GANTI_DENGAN_LOGO_ANDA/brand-7.png" alt="Brand 7" />
                    </li>
                    <li class="splide__slide">
                        <img src="GANTI_DENGAN_LOGO_ANDA/brand-8.png" alt="Brand 8" />
                    </li>
                </ul>
            </div>
        </section>
        <div class="container text-center">
            <p class="example-text">
                (this part is an example. And will be a slideshow of brands)
            </p>
        </div>
    </section>

    <section class="growth-plan-section">
        <div class="container">
            <div class="row mb-5 pb-5">
                <div class="col-lg-8 col-md-10">
                    <h2 class="display-3">Discuss your growth plan!</h2>
                    <p class="lead mt-3">
                        We'll be happy to assist you in developing a marketing plan that
                        aligns with your goals and drives measurable results
                    </p>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-12 col-md-6 text-center text-md-start mb-4 mb-md-0">
                    <img src="../landing/img/LOGO/PNG/elden png white_1.png" alt="Elden Logo" class="elden-logo" />
                </div>
                <div
                    class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end align-items-center gap-3">
                    <a href="#" aria-label="WhatsApp">
                        <img src="../landing/img/ICONS/6.png" alt="WhatsApp" class="social-icon" />
                    </a>
                    <a href="#" aria-label="Instagram">
                        <img src="../landing/img/ICONS/7.png" alt="Instagram" class="social-icon" />
                    </a>
                    <a href="#" aria-label="Email">
                        <img src="../landing/img/ICONS/8.png" alt="Email" class="social-icon" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container-inner">
            <nav class="py-4 text-center">
                <img src="../landing/img/LOGO/PNG/elden png white_1.png" alt="Elden Logo" class="footer-logo" />
            </nav>
            <main class="footer-content-main d-flex align-items-center justify-content-center">
                <div style="max-width: 700px">
                    <div class="d-flex flex-column">
                        <span class="title-sub"> One and only </span>
                        <p class="title-main my-n2">Network</p>
                        <span class="title-sub align-self-end"> you'll ever need </span>
                    </div>
                </div>
            </main>
            <div class="footer-bottom py-4 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="footer-caption">
                            Elden is a strategic partner for businesses that want to grow
                            fast, connect with audiences on an emotional level, and maximize
                            the potential of digital content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/6281234567890" class="whatsapp-bubble" target="_blank" rel="noopener noreferrer"
        aria-label="Hubungi kami via WhatsApp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
    </a>

    <button class="back-to-top" id="backToTopBtn">
        <i class="bi bi-arrow-up-circle" style="font-size: 2rem; color: white"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
    </script>

    <script>
        // === Dark mode toggle ===
        const toggleDarkModeBtn = document.getElementById("toggleDarkMode");
        const htmlEl = document.documentElement;

        // Ikon untuk tombol
        const moonIcon = '<i class="bi bi-moon-stars-fill"></i>';
        const sunIcon = '<i class="bi bi-sun-fill"></i>';

        toggleDarkModeBtn.addEventListener("click", () => {
            // Toggle atribut data-bs-theme
            if (htmlEl.getAttribute("data-bs-theme") === "dark") {
                htmlEl.setAttribute("data-bs-theme", "light");
                toggleDarkModeBtn.innerHTML = moonIcon;
            } else {
                htmlEl.setAttribute("data-bs-theme", "dark");
                toggleDarkModeBtn.innerHTML = sunIcon;
            }
        });

        // === Back to top button ===
        const backToTopBtn = document.getElementById("backToTopBtn");

        window.onscroll = function() {
            if (
                document.body.scrollTop > 200 ||
                document.documentElement.scrollTop > 200
            ) {
                backToTopBtn.style.display = "block";
            } else {
                backToTopBtn.style.display = "none";
            }
        };

        backToTopBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

        // === Counter Animation ===
        document.addEventListener("DOMContentLoaded", () => {
            function animateCounter(el, duration = 2000) {
                const target = +el.dataset.target;
                const startTime = performance.now();

                function update(currentTime) {
                    const elapsedTime = currentTime - startTime;
                    const progress = Math.min(elapsedTime / duration, 1);
                    const currentValue = Math.floor(progress * target);
                    el.textContent = currentValue;

                    if (progress < 1) {
                        requestAnimationFrame(update);
                    } else {
                        el.textContent = target;
                    }
                }
                requestAnimationFrame(update);
            }

            const observerOptions = {
                root: null,
                rootMargin: "0px",
                threshold: 0.1,
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        animateCounter(el, 1500);
                        observer.unobserve(el);
                    }
                });
            }, observerOptions);

            const counters = document.querySelectorAll(".counter");
            counters.forEach((counter) => {
                observer.observe(counter);
            });
        });

        // === Splide.js Slider ===
        document.addEventListener("DOMContentLoaded", function() {
            new Splide("#logo-slider", {
                type: "loop",
                drag: "free",
                focus: "center",
                perPage: 4,
                autoScroll: {
                    speed: 1,
                    pauseOnHover: true,
                },
                arrows: false,
                pagination: false,
                gap: "4rem",
                breakpoints: {
                    992: {
                        perPage: 3,
                        gap: "3rem",
                    },
                    767: {
                        perPage: 2,
                        gap: "2rem",
                    },
                },
            }).mount(window.splide.Extensions);
        });
    </script>
</body>

</html>
