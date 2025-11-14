<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Elden Creative Network | Authentic Ideas for Brands</title>

    <meta name="description" content="Elden Creative Network mengubah ide otentik menjadi aset brand yang berharga. Kami menyediakan layanan strategi, desain, dan storytelling untuk bisnis Anda.">
    <meta name="keywords" content="creative network, branding, agensi kreatif, intellectual property, desain grafis, storytelling, Elden Creative">
    <meta name="author" content="Elden Creative Network">

    <link rel="icon" href="../landing/img/logo/png/elden png blue.png">

    <meta property="og:title" content="Elden Creative Network | Authentic Ideas for Brands">
    <meta property="og:description" content="Elden Creative Network mengubah ide otentik menjadi aset brand yang berharga.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.website-anda.com"> <meta property="og:image" content="https://www.website-anda.com/gambar-preview.jpg"> <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Elden Creative Network | Authentic Ideas for Brands">
    <meta name="twitter:description" content="Elden Creative Network mengubah ide otentik menjadi aset brand yang berharga.">
    <meta name="twitter:image" content="https://www.website-anda.com/gambar-preview.jpg"> <link href="https://db.onlinewebfonts.com/c/9366bd460113d8bf675fd2bdfe1ce764?family=The+Seasons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        :root {
            /* Colors */
            --color-bg-dark: #000000;
            --color-text-primary: #ffffff;
            --color-text-secondary: #e0e0e0;
            /* Putih pudar */

            /* SEO FIX: Variabel font yang hilang */
            --font-serif: "The Seasons", serif;
            --font-sans: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            padding-top: 4.5rem;
            font-family: var(--font-serif); /* Menggunakan variabel yang sudah didefinisikan */
        }

        .hero-authentic {
            background-color: var(--color-bg-dark);
            padding: 10rem 0;
            overflow: hidden;
        }

        .hero-pretitle {
            font-family: var(--font-sans); /* Menggunakan variabel */
            font-size: 1.1rem;
            color: var(--color-text-secondary);
            margin-bottom: 0.5rem;
            text-align: left;
        }

        .hero-title-cluster {
            position: relative;
            display: inline-block;
        }

        .cluster-wrapper {
            text-align: left;
        }

        .hero-title-authentic {
            font-family: var(--font-serif);
            font-size: clamp(5rem, 12vw, 9rem);
            font-weight: 600;
            line-height: 1.0;
            margin: 0;
            color: var(--color-text-primary);
        }

        .hero-subtitle-ideas {
            font-family: var(--font-serif);
            font-size: clamp(4rem, 10vw, 7rem);
            font-weight: 400;
            font-style: normal;
            line-height: 1.5;
            color: var(--color-text-primary);
            position: absolute;
            left: 97%;
            top: 4.5rem;
        }

        /* Penyesuaian untuk layar kecil */
        @media (max-width: 992px) {
            .hero-subtitle-ideas {
                left: 60%;
                top: 3.5rem;
            }
        }

        /* === PERBAIKAN RESPONSIVE === */
        @media (max-width: 576px) {
            .hero-title-authentic {
                font-size: 4rem;
            }

            .hero-subtitle-ideas {
                font-size: 3rem;
                /* DIUBAH: 'left: 95%' (error) menjadi 50% agar tidak keluar layar */
                left: 50%;
                /* DIUBAH: Diposisikan sedikit ke bawah */
                top: 5rem;
            }
        }


        /* Dark mode styles */
        body.dark-mode {
            background-color: #121212;
            color: white;
        }

        /* HANYA MENYISAKAN .card (CSS .navbar dan .btn dihapus) */
        .dark-mode .card {
            background-color: #333;
            color: white;
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
        }

        .whatsapp-bubble img {
            width: 40px;
            height: 40px;
        }

        .whatsapp-bubble:hover {
            background-color: #128C7E;
        }

        .cta-footer-audience {
            background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(35, 33, 33, 0.4)),
                url('../landing/img/FOTO/11.png');
            background-color: var(--color-bg-dark);
            background-size: cover;
            background-position: center;
            padding: 10rem 0;
            color: var(--color-text-primary);
            position: relative;
            text-align: center;
        }

        .cta-title {
            font-family: var(--font-serif);
            font-size: clamp(2.25rem, 6vw, 3.25rem);
            font-weight: 400;
            color: var(--color-text-primary);
            line-height: 1.2;
            margin-bottom: 2.5rem;
        }

        .btn-consult-footer {
            font-family: var(--font-sans);
            font-weight: 400;
            font-size: 1rem;
            color: var(--color-text-primary);
            background-color: transparent;
            border: 2px solid var(--color-text-primary);
            border-radius: 50px;
            padding: 0.75rem 2.5rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-consult-footer:hover {
            color: var(--color-bg-dark);
            background-color: var(--color-text-primary);
        }


        .desc-caption1 {
            background-image: linear-gradient(rgba(0, 0, 0, 1), rgba(0, 0, 0, 1)),
                url('../landing/img/FOTO/11.png');
            background-color: var(--color-bg-dark);
            background-size: cover;
            background-position: center;
            color: white;
        }

        .desc-caption2 {
            background-image: linear-gradient(rgba(0, 0, 0, 2), rgba(35, 33, 33, 0.8)),
                url('../landing/img/FOTO/11.png');
            background-color: var(--color-bg-dark);
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* === PERBAIKAN BORDER (Dipindah dari inline style) === */
        .caption-box-left-rounded {
            padding: 3rem; /* Menggantikan p-5 agar konsisten */
            border-top: 1px solid #ffffff;
            border-bottom: 1px solid #ffffff;
            border-left: 1px solid #ffffff;
            border-right: none; /* Ini yang Anda minta */
            border-radius: 100px 0px 0px 100px;
        }

        .caption-box-left-rounded p {
            font-size: 25px;
        }

        /* === PERBAIKAN RESPONSIVE 2 === */
        @media (max-width: 768px) {
            .caption-box-left-rounded {
                /* Buat radius lebih kecil di HP agar tidak aneh */
                border-radius: 50px 0 0 50px;
                padding: 2rem;
            }
            .caption-box-left-rounded p {
                /* Kecilkan font di HP */
                font-size: 18px;
            }
        }


        .full-vh-slider,
        .full-vh-slider .carousel,
        .full-vh-slider .carousel-inner,
        .full-vh-slider .carousel-item {
            height: 100vh;
            min-height: 500px;
        }

        .full-vh-slider .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNavbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">Elden Creative</a>
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
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#slider">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-dark" id="toggleDarkMode">Dark Mode</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-authentic">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="hero-pretitle">We make sure that every thought, process, and step is an</p>
                    <div class="cluster-wrapper">
                        <div class="hero-title-cluster">
                            <h1 class="hero-title-authentic">Authentic</h1>
                            <h2 class="hero-subtitle-ideas">Ideas</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="pt-5 desc-caption1 pt-5 pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-10 col-xl-8 text-start">
                    <h1 class="display-6 fw-bold mb-3">
                        Originality is the foundation of lasting brands.
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-lg-10 text-start">
                    <p class="lead opacity-75">
                        Through Intellectual Property, we craft unique creative assets, from campaigns and visual
                        systems to brand experiences that set your business apart. Every concept is built to own a
                        space in people's minds, making your brand instantly recognizable and hard to replicate.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="slider" class="full-vh-slider p-0 mb-0">
        <div id="fullScreenSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="../landing/img/FOTO/2.png" class="d-block" alt="Interior desain minimalis modern">
                </div>

                <div class="carousel-item" data-bs-interval="5000">
                    <img src="../landing/img/FOTO/5.png" class="d-block" alt="Konsep branding di atas meja kerja">
                </div>

                <div class="carousel-item" data-bs-interval="5000">
                    <img src="../landing/img/FOTO/2.png" class="d-block" alt="Desain arsitektur gedung perkantoran">
                </div>

                <div class="carousel-item" data-bs-interval="5000">
                    <img src="../landing/img/FOTO/5.png" class="d-block" alt="Presentasi tim kreatif di ruang rapat">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#fullScreenSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#fullScreenSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#fullScreenSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#fullScreenSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#fullScreenSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#fullScreenSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
        </div>
    </section>

    <section class="desc-caption2 pt-5 pb-5">
        <div class="d-flex justify-content-end">
            <div class="col-lg-8 caption-box-left-rounded">
                <p>
                    From ideation to execution, our team ensures every idea carries strategic and emotional value.
                    Supported by research, design, and storytelling, Elden turns creativity into assets that not
                    only inspire,
                    but also endure.
                </p>
            </div>
        </div>
    </section>

    <section id="contact" class="cta-footer-audience">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class="cta-title">
                        Make it genuine.
                    </h2>
                    <a href="#" class="btn-consult-footer">
                        Consult Now!
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- <footer class="text-center p-4" style="background-color: #111; color: #aaa;">
        <p class="mb-0">© 2025 Elden Creative Network. All Rights Reserved.</p>
        </footer> --}}


    <div class="whatsapp-bubble" onclick="window.location.href='https://wa.me/1234567890'">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Hubungi kami via WhatsApp">
    </div>

    {{-- <button class="back-to-top" id="backToTopBtn">
        <i class="bi bi-arrow-up-circle" style="font-size: 2rem; color: white"></i>
    </button> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <script>
        // === PERUBAHAN LOGIKA DARK MODE ===
        document.getElementById('toggleDarkMode').addEventListener('click', () => {
            const body = document.body;
            const navbar = document.getElementById('mainNavbar');
            const toggleButton = document.getElementById('toggleDarkMode');

            // 1. Toggle mode di Body
            body.classList.toggle('dark-mode');

            // 2. Cek apakah dark mode SEKARANG aktif?
            const isDarkMode = body.classList.contains('dark-mode');

            if (isDarkMode) {
                // JIKA JADI DARK MODE:
                // Ganti style Navbar
                navbar.classList.remove('navbar-light', 'bg-light');
                navbar.classList.add('navbar-dark', 'bg-dark');

                // Ganti style Tombol
                toggleButton.classList.remove('btn-outline-dark');
                toggleButton.classList.add('btn-outline-light');
                toggleButton.textContent = 'Light Mode'; // Ganti teks
            } else {
                // JIKA KEMBALI KE LIGHT MODE:
                // Ganti style Navbar
                navbar.classList.remove('navbar-dark', 'bg-dark');
                navbar.classList.add('navbar-light', 'bg-light');

                // Ganti style Tombol
                toggleButton.classList.remove('btn-outline-light');
                toggleButton.classList.add('btn-outline-dark');
                toggleButton.textContent = 'Dark Mode'; // Kembalikan teks
            }
        });
        // === AKHIR LOGIKA DARK MODE ===


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
