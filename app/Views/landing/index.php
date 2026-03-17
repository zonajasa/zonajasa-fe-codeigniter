<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ZonaJasa</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Vendor CSS -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?= base_url('assets/css/main.css?v=2') ?>" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">ZonaJasa</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#fitur">Fitur</a></li>
                    <li><a href="#cara_kerja">Cara Kerja</a></li>
                    <li><a href="#kategori">Kategori</a></li>
                    <!-- <li><a href="#tim">Tim</a></li> -->
                    <li><a href="#paket">Paket</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="https://news.zonajasa.com/">Berita</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Home Section -->
        <section id="home" class="hero section dark-background">
            <img src="<?= base_url('assets/img/hero-bg-2.jpg') ?>" alt="" class="hero-bg">

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="<?= base_url('assets/img/hero-img.png') ?>" class="img-fluid animated" alt="">
                    </div>

                    <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                        <h1>Bingung Cari Jasa Terpercaya? <span>ZonaJasa</span> Solusinya</h1>
                        <p>Temukan tukang, teknisi, dan jasa profesional terdekat dengan rating terbaik, harga transparan, dan booking instan.</p>
                        <div class="d-flex">
                            <a href="#tentang" class="btn-get-started fw-bold">Jelajahi</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>

                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>

        </section><!-- Home Section -->

        <!-- Tentang Section -->
        <section id="tentang" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="content text-justify">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Tentang</h2>

                        <div>
                            <span>Temukan Jasa Professional</span>
                            <span class="description-title">Lebih Cepat & Mudah</span>
                        </div>
                    </div>

                    <p style="text-align: justify;">
                        ZonaJasa adalah platform digital yang menghubungkan Anda dengan berbagai penyedia jasa profesional dalam satu tempat. Kami hadir untuk mempermudah masyarakat menemukan layanan terbaik tanpa harus mencari secara manual. Dengan berbagai kategori layanan yang tersedia, Anda dapat menemukan jasa yang sesuai dengan kebutuhan Anda — mulai dari perbaikan rumah, desain, teknologi, hingga layanan profesional lainnya. ZonaJasa membantu Anda menghemat waktu, menemukan penyedia jasa terpercaya, serta mempermudah proses komunikasi antara pelanggan dan penyedia layanan.
                    </p>

                    <a href="#layanan" class="read-more">
                        <span>Temukan Jasa Sekarang</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="row gy-4 icon-boxes mt-4">
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <i class="bi bi-search"></i>
                            <h3>Pencarian Cepat</h3>
                            <p>Temukan berbagai macam jasa hanya dengan satu kali klik.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-person-check"></i>
                            <h3>Penyedia Terpercaya</h3>
                            <p>Layanan jasa terpercaya untuk berbagai kebutuhan.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-grid"></i>
                            <h3>Beragam Kategori</h3>
                            <p>Berbagai kategori jasa tersedia dalam satu platform.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <i class="bi bi-chat-dots"></i>
                            <h3>Hubungi Langsung</h3>
                            <p>Komunikasi dengan penyedia jasa menjadi lebih mudah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fitur Section -->
        <section id="fitur" class="features section">
            <div class="container">

                <div class="container section-title" data-aos="fade-up">
                    <h2>Fitur</h2>
                    <div><span>Fitur</span> <span class="description-title">ZonaJasa</span></div>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <i class="bi bi-search"></i>
                            <h3>Cari Jasa</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-item">
                            <i class="bi bi-person-check"></i>
                            <h3>Penyedia Terpercaya</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="features-item">
                            <i class="bi bi-grid"></i>
                            <h3>Banyak Kategori</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="features-item">
                            <i class="bi bi-chat-dots"></i>
                            <h3>Chat Langsung</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <i class="bi bi-star"></i>
                            <h3>Rating & Review</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="features-item">
                            <i class="bi bi-clock"></i>
                            <h3>Respon Cepat</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="features-item">
                            <i class="bi bi-shield-check"></i>
                            <h3>Aman & Terpercaya</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="features-item">
                            <i class="bi bi-phone"></i>
                            <h3>Mobile Friendly</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="features-item">
                            <i class="bi bi-briefcase"></i>
                            <h3>Jasa Profesional</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
                        <div class="features-item">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Lokasi Terdekat</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
                        <div class="features-item">
                            <i class="bi bi-lightning-charge"></i>
                            <h3>Proses Cepat</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
                        <div class="features-item">
                            <i class="bi bi-people"></i>
                            <h3>Banyak Pengguna</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cara Kerja Section -->
        <section id="cara_kerja" class="cara-kerja section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Cara Kerja</h2>
                <div><span>Cara Kerja</span> <span class="description-title">ZonaJasa</span></div>
                <p>Temukan dan gunakan layanan jasa dengan langkah yang mudah.</p>
            </div>

            <div class="container">

                <div class="row text-center gy-4">

                    <!-- Step 1 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up">
                        <div class="step-box">
                            <div class="step-icon">
                                <i class="bi bi-search"></i>
                            </div>
                            <h4>Cari Jasa</h4>
                            <p>Temukan berbagai layanan jasa sesuai kebutuhan Anda.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-box">
                            <div class="step-icon">
                                <i class="bi bi-person-check"></i>
                            </div>
                            <h4>Pilih Penyedia</h4>
                            <p>Pilih penyedia jasa terbaik berdasarkan profil dan ulasan.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-box">
                            <div class="step-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <h4>Hubungi</h4>
                            <p>Diskusikan kebutuhan pekerjaan dengan penyedia jasa.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-box">
                            <div class="step-icon">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <h4>Selesai</h4>
                            <p>Pekerjaan selesai dan Anda bisa memberi ulasan.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Kategori Section -->
        <section id="kategori" class="kategori section light-background">

            <div class="container section-title" data-aos="fade-up">
                <h2>Kategori</h2>
                <div><span>Kategori</span> <span class="description-title">ZonaJasa</span></div>
                <p>Pilih kategori layanan yang Anda butuhkan dengan mudah.</p>
            </div>

            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="kategori-box text-center">
                            <i class="bi bi-house-door"></i>
                            <h4>Perbaikan Rumah</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="kategori-box text-center">
                            <i class="bi bi-tools"></i>
                            <h4>Teknisi</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="kategori-box text-center">
                            <i class="bi bi-brush"></i>
                            <h4>Desain Grafis</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="kategori-box text-center">
                            <i class="bi bi-code-slash"></i>
                            <h4>Web Development</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="kategori-box text-center">
                            <i class="bi bi-camera"></i>
                            <h4>Fotografi</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="kategori-box text-center">
                            <i class="bi bi-car-front"></i>
                            <h4>Servis Kendaraan</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="kategori-box text-center">
                            <i class="bi bi-megaphone"></i>
                            <h4>Digital Marketing</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="kategori-box text-center">
                            <i class="bi bi-person-workspace"></i>
                            <h4>Konsultasi</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mitra Section -->
        <!-- <section id="mitra" class="mitra section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Mitra</h2>
                <div><span>Penyedia</span> <span class="description-title">Jasa</span></div>
                <p>Penyedia jasa terpercaya yang siap membantu kebutuhan Anda.</p>
            </div>

            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="mitra-card">

                            <div class="mitra-img">
                                <img src="<= base_url('assets/img/team/team-1.jpg') ?>" class="img-fluid" alt="">
                                <span class="badge bg-warning mitra-badge">Top Mitra</span>
                            </div>

                            <div class="mitra-info">
                                <h4>Akbar Service</h4>
                                <p class="kategori">Teknisi AC</p>

                                <div class="mitra-meta">
                                    <span class="rating">⭐ 4.9</span>
                                    <span class="lokasi">📍 Baruga</span>
                                </div>

                                <div class="harga">
                                    Mulai <strong>Rp100.000</strong>
                                </div>

                                <a href="#" class="btn btn-zonajasa btn-sm w-100 mt-2">Lihat Profil</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="mitra-card">

                            <div class="mitra-img">
                                <img src="<= base_url('assets/img/team/team-3.jpg') ?>" class="img-fluid" alt="">
                            </div>

                            <div class="mitra-info">
                                <h4>Syamsul Web</h4>
                                <p class="kategori">Web Developer</p>

                                <div class="mitra-meta">
                                    <span class="rating">⭐ 4.8</span>
                                    <span class="lokasi">📍 Poasia</span>
                                </div>

                                <div class="harga">
                                    Mulai <strong>Rp500.000</strong>
                                </div>

                                <a href="#" class="btn btn-zonajasa btn-sm w-100 mt-2">Lihat Profil</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="mitra-card">

                            <div class="mitra-img">
                                <img src="<= base_url('assets/img/team/team-2.jpg') ?>" class="img-fluid" alt="">
                            </div>

                            <div class="mitra-info">
                                <h4>Jannah Design</h4>
                                <p class="kategori">Desain Grafis</p>

                                <div class="mitra-meta">
                                    <span class="rating">⭐ 4.7</span>
                                    <span class="lokasi">📍 Poasia</span>
                                </div>

                                <div class="harga">
                                    Mulai <strong>Rp150.000</strong>
                                </div>

                                <a href="#" class="btn btn-zonajasa btn-sm w-100 mt-2">Lihat Profil</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="mitra-card">

                            <div class="mitra-img">
                                <img src="<= base_url('assets/img/team/team-3.jpg') ?>" class="img-fluid" alt="">
                            </div>

                            <div class="mitra-info">
                                <h4>Yoga Tech</h4>
                                <p class="kategori">Tukang Kebun</p>

                                <div class="mitra-meta">
                                    <span class="rating">⭐ 4.6</span>
                                    <span class="lokasi">📍 Andonohu</span>
                                </div>

                                <div class="harga">
                                    Mulai <strong>Rp200.000</strong>
                                </div>

                                <a href="#" class="btn btn-zonajasa btn-sm w-100 mt-2">Lihat Profil</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Paket Section -->
        <section id="paket" class="pricing section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Paket</h2>
                <div><span>Paket</span> <span class="description-title">ZonaJasa</span></div>
            </div>
            <div class="container">
                <div class="row gy-4">

                    <!-- Paket Gratis -->
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3>Paket Gratis</h3>
                            <p class="description">Mulai menggunakan ZonaJasa tanpa biaya.</p>
                            <h4>Gratis</h4>
                            <a href="#" class="cta-btn">Mulai Sekarang</a>
                            <p class="text-center small">Tanpa biaya pendaftaran</p>

                            <ul>
                                <li><i class="bi bi-check"></i> <span>Buat profil penyedia jasa</span></li>
                                <li><i class="bi bi-check"></i> <span>Menampilkan layanan jasa</span></li>
                                <li><i class="bi bi-check"></i> <span>Dapat dihubungi pelanggan</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Prioritas pencarian</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Promosi layanan</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Paket Profesional -->
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item featured">
                            <p class="popular">Popular</p>
                            <h3>Paket Profesional</h3>
                            <p class="description">Tingkatkan visibilitas layanan Anda.</p>
                            <h4>Rp49K<span> / bulan</span></h4>
                            <a href="#" class="cta-btn">Pilih Paket</a>
                            <p class="text-center small">Cocok untuk penyedia jasa aktif</p>

                            <ul>
                                <li><i class="bi bi-check"></i> <span>Semua fitur paket gratis</span></li>
                                <li><i class="bi bi-check"></i> <span>Prioritas di pencarian</span></li>
                                <li><i class="bi bi-check"></i> <span>Promosi layanan</span></li>
                                <li><i class="bi bi-check"></i> <span>Statistik pengunjung</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Banner promosi utama</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Paket Premium -->
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pricing-item">
                            <h3>Paket Premium</h3>
                            <p class="description">Maksimalkan promosi layanan Anda.</p>
                            <h4>Rp99K<span> / bulan</span></h4>
                            <a href="#" class="cta-btn">Pilih Paket</a>
                            <p class="text-center small">Untuk bisnis jasa profesional</p>

                            <ul>
                                <li><i class="bi bi-check"></i> <span>Semua fitur paket profesional</span></li>
                                <li><i class="bi bi-check"></i> <span>Prioritas pencarian utama</span></li>
                                <li><i class="bi bi-check"></i> <span>Promosi layanan unggulan</span></li>
                                <li><i class="bi bi-check"></i> <span>Banner promosi utama</span></li>
                                <li><i class="bi bi-check"></i> <span>Dukungan prioritas</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h3><span>Pertanyaan yang </span><strong>Sering Diajukan</strong></h3>
                            <p>
                                Beberapa pertanyaan yang sering ditanyakan pengguna mengenai
                                layanan dan penggunaan platform ZonaJasa.
                            </p>
                        </div>

                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="faq-item faq-active">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Apa itu ZonaJasa?</h3>
                                <div class="faq-content">
                                    <p>
                                        ZonaJasa adalah platform digital yang menghubungkan pengguna
                                        dengan berbagai penyedia jasa profesional dalam satu tempat,
                                        sehingga memudahkan Anda menemukan layanan yang dibutuhkan.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Bagaimana cara mencari jasa di ZonaJasa?</h3>
                                <div class="faq-content">
                                    <p>
                                        Anda cukup mencari kategori layanan yang diinginkan,
                                        melihat profil penyedia jasa, lalu menghubungi mereka
                                        secara langsung melalui platform.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Apakah penyedia jasa di ZonaJasa terpercaya?</h3>
                                <div class="faq-content">
                                    <p>
                                        ZonaJasa menampilkan penyedia jasa yang telah terdaftar
                                        dalam platform sehingga pengguna dapat melihat informasi,
                                        layanan, dan profil penyedia jasa sebelum menggunakan layanan.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Apakah saya bisa menjadi penyedia jasa di ZonaJasa?</h3>
                                <div class="faq-content">
                                    <p>
                                        Tentu. Anda dapat mendaftar sebagai penyedia jasa,
                                        membuat profil layanan, dan menawarkan jasa Anda
                                        kepada pengguna yang membutuhkan.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="<?= base_url('assets/img/faq.jpg') ?>" class="img-fluid" alt="FAQ ZonaJasa" data-aos="zoom-in" data-aos-delay="100">
                    </div>

                </div>
            </div>
        </section>

        <!-- kontak Section -->
        <section id="kontak" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>kontak</h2>
                <div><span>Kontak</span> <span class="description-title">ZonaJasa</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Andonohu, Kota Kendari, Provinsi Sulawesi Tenggara</p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Telp.</h3>
                                <p>+62 878 6800 0622</p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>zonajasaplatform@gmail.com</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form id="formKontak" action="/kirim-pesan" method="POST" data-aos="fade-up" data-aos-delay="200">
                            
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary rounded-pill px-4">Kirim Pesan</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">ZonaJasa</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Andonohu, Kota Kendari, Provinsi Sulawesi Tenggara</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 878 6800 0622</span></p>
                        <p><strong>Email:</strong> <span>zonajasaplatform@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Layanan</a></li>
                        <li><a href="#">Ketentuan Layanan</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">ZonaJasa</strong> <span>All Rights Reserved</span></p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>

    <!-- Main JS File -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('formKontak').addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Kirim Pesan?',
                text: "Apakah Anda yakin ingin mengirim pesan ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#1A4BFF',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Kirim',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.submit();
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            new Swiper(".init-swiper", {
                loop: true,
                speed: 600,
                autoplay: {
                    delay: 5000
                },
                slidesPerView: "auto",
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                }
            });
        });
    </script>
    <?php if(session()->getFlashdata('success')){ ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '<?= session()->getFlashdata('success') ?>',
            confirmButtonColor: '#1A4BFF'
        });
    </script>
    <?php } ?>

    <?php if(session()->getFlashdata('error')){ ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: '<?= session()->getFlashdata('error') ?>',
            confirmButtonColor: '#1A4BFF'
        });
        </script>
    <?php } ?>
</body>

</html>