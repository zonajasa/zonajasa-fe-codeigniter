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
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
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
                    <li><a href="#galeri">Galeri</a></li>
                    <li><a href="#tim">Tim</a></li>
                    <li><a href="#harga">Harga</a></li>
                    <li><a href="#faq">FAQ</a></li>
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
                            <a href="#about" class="btn-get-started">Get Started</a>
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
                            <p>Temukan berbagai penyedia jasa profesional hanya dalam beberapa klik.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-person-check"></i>
                            <h3>Penyedia Jasa Terpercaya</h3>
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
                            <i class="bi bi-search" style="color: #ffbb2c;"></i>
                            <h3><a href="" class="stretched-link">Cari Jasa</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-item">
                            <i class="bi bi-person-check" style="color: #5578ff;"></i>
                            <h3><a href="" class="stretched-link">Penyedia Terpercaya</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="features-item">
                            <i class="bi bi-grid" style="color: #e80368;"></i>
                            <h3><a href="" class="stretched-link">Banyak Kategori</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="features-item">
                            <i class="bi bi-chat-dots" style="color: #e361ff;"></i>
                            <h3><a href="" class="stretched-link">Chat Langsung</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <i class="bi bi-star" style="color: #47aeff;"></i>
                            <h3><a href="" class="stretched-link">Rating & Review</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="features-item">
                            <i class="bi bi-clock" style="color: #ffa76e;"></i>
                            <h3><a href="" class="stretched-link">Respon Cepat</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="features-item">
                            <i class="bi bi-shield-check" style="color: #11dbcf;"></i>
                            <h3><a href="" class="stretched-link">Aman & Terpercaya</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="features-item">
                            <i class="bi bi-phone" style="color: #4233ff;"></i>
                            <h3><a href="" class="stretched-link">Mobile Friendly</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="features-item">
                            <i class="bi bi-briefcase" style="color: #b2904f;"></i>
                            <h3><a href="" class="stretched-link">Jasa Profesional</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
                        <div class="features-item">
                            <i class="bi bi-geo-alt" style="color: #b20969;"></i>
                            <h3><a href="" class="stretched-link">Lokasi Terdekat</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
                        <div class="features-item">
                            <i class="bi bi-lightning-charge" style="color: #ff5828;"></i>
                            <h3><a href="" class="stretched-link">Proses Cepat</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
                        <div class="features-item">
                            <i class="bi bi-people" style="color: #29cc61;"></i>
                            <h3><a href="" class="stretched-link">Banyak Pengguna</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-emoji-smile"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-journal-richtext"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-headset"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-people"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Galeri Section -->
        <section id="galeri" class="gallery section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Galeri</h2>
                <div><span>Galeri</span> <span class="description-title">ZonaJasa</span></div>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url('assets/img/gallery/gallery-1.jpg') ?>" class="glightbox" data-gallery="images-gallery">
                                <img src="<?= base_url('assets/img/gallery/gallery-1.jpg') ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url('assets/img/gallery/gallery-2.jpg') ?>" class="glightbox" data-gallery="images-gallery">
                                <img src="<?= base_url('assets/img/gallery/gallery-2.jpg') ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url('assets/img/gallery/gallery-3.jpg') ?>" class="glightbox" data-gallery="images-gallery">
                                <img src="<?= base_url('assets/img/gallery/gallery-3.jpg') ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url('assets/img/gallery/gallery-4.jpg') ?>" class="glightbox" data-gallery="images-gallery">
                                <img src="<?= base_url('assets/img/gallery/gallery-4.jpg') ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url('assets/img/gallery/gallery-5.jpg') ?>" class="glightbox" data-gallery="images-gallery">
                                <img src="<?= base_url('assets/img/gallery/gallery-5.jpg') ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url('assets/img/gallery/gallery-6.jpg') ?>" class="glightbox" data-gallery="images-gallery">
                                <img src="<?= base_url('assets/img/gallery/gallery-6.jpg') ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url('assets/img/gallery/gallery-7.jpg') ?>" class="glightbox" data-gallery="images-gallery">
                                <img src="<?= base_url('assets/img/gallery/gallery-7.jpg') ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url('assets/img/gallery/gallery-8.jpg') ?>" class="glightbox" data-gallery="images-gallery">
                                <img src="<?= base_url('assets/img/gallery/gallery-8.jpg') ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">
            <img src="<?= base_url('assets/img/testimonials-bg.jpg') ?>" class="testimonials-bg" alt="">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper">
                    <div class="swiper-wrapper">

                        <!-- Testimoni 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url('assets/img/testimonials/testimonials-1.jpg') ?>" class="testimonial-img" alt="">
                                <h3>Andi Pratama</h3>
                                <h4>Pelanggan</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        ZonaJasa sangat membantu saya menemukan jasa perbaikan rumah dengan cepat.
                                        Penyedia jasanya profesional dan responsnya juga cepat.
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <!-- Testimoni 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url('assets/img/testimonials/testimonials-2.jpg') ?>" class="testimonial-img" alt="">
                                <h3>Siti Rahma</h3>
                                <h4>Pengguna Layanan</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        Saya sangat terbantu dengan ZonaJasa karena bisa menemukan
                                        penyedia jasa desain dengan mudah dan hasilnya memuaskan.
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <!-- Testimoni 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url('assets/img/testimonials/testimonials-3.jpg') ?>" class="testimonial-img" alt="">
                                <h3>Budi Santoso</h3>
                                <h4>Penyedia Jasa</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        Sejak bergabung dengan ZonaJasa, saya mendapatkan lebih banyak
                                        pelanggan yang membutuhkan layanan saya.
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <!-- Testimoni 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url('assets/img/testimonials/testimonials-4.jpg') ?>" class="testimonial-img" alt="">
                                <h3>Rina Putri</h3>
                                <h4>Pelanggan</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        Platform ini sangat mudah digunakan. Saya bisa langsung
                                        menghubungi penyedia jasa tanpa proses yang rumit.
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <!-- Testimoni 5 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url('assets/img/testimonials/testimonials-5.jpg') ?>" class="testimonial-img" alt="">
                                <h3>Dimas Saputra</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        ZonaJasa membantu saya mempromosikan layanan saya
                                        dan menjangkau lebih banyak pelanggan.
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Tim Section -->
        <section id="tim" class="team section">>

            <div class="container section-title" data-aos="fade-up">
                <h2>Tim</h2>
                <div><span>Tim</span> <span class="description-title">ZonaJasa</span></div>
            </div>

            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="pic"><img src="<?= base_url('assets/img/team/team-1.jpg') ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Akbar</h4>
                                <span>IT Director</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="pic"><img src="<?= base_url('assets/img/team/team-1.jpg') ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Muh. Syamsul Marif</h4>
                                <span>BE Developer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="pic"><img src="<?= base_url('assets/img/team/team-2.jpg') ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Miftahul Jannah</h4>
                                <span>FE Developer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="pic"><img src="<?= base_url('assets/img/team/team-3.jpg') ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Yoga Pratrian</h4>
                                <span>IT Support</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="harga" class="pricing section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Harga</h2>
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
                <div><span>Kontak</span> <span class="description-title">Kami</span></div>
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
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
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
                                    <div class="loading">Memuat...</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>

                                    <button type="submit">Kirim Pesan</button>
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

    <script>
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

</body>

</html>