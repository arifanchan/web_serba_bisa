<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- lInk swiper -->
    <link rel="stylesheet" href="lib/swiper/css/swiper-bundle.min.css">

    <!-- Link library remixicon -->
    <link rel="stylesheet" href="lib/remix-icon/css/remixicon.css" />
    <title>Beranda Serba Bisa</title>
</head>

<body>
    <header>
        <!-- [START navigasi bar] -->
        <nav>
            <div class="container">
                <div class="row">
                    <div class="brand-wrapper px-4 sm:px-6 lg:px-0">
                        <strong>
                            <!-- fungsi JS onclick go to top untuk ke halaman atas  -->
                            <a href="index.html" class="logo" onclick="goToTop()">Serba Bisa</a>
                        </strong>
                    </div>
                    <div class="menu-wrapper">
                        <button class="toggler" type="button">
                            <span class="ri ri-menu-3-line" id="nav-toggler"></span>
                        </button>

                        <!-- Link menu nav -->
                        <menu id="nav-menu">
                            <ul>
                                <li>
                                    <a href="index.html" onclick="goToTop()">Home</a>
                                </li>
                                <li class="active">
                                    <a href="profile.php">Profile</a>
                                </li>
                                <li>
                                    <a href="kegiatan.php">Kegiatan</a>
                                </li>
                                <li>
                                    <a href="sarana.php">Sarana Prasarana</a>
                                </li>
                                <li>
                                    <label class="switch">
                                        <input type="checkbox" onclick="darkMode()">
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <a href="kontak.php" class="btn btn-primary">Kontak</a>
                                </li>
                            </ul>
                        </menu>
                    </div>
                </div>
            </div>
        </nav>

        <!-- [START] Image header -->
        <section id="hero">
            <div class="container">
                <div class="row">
                    <picture>
                        <img src="assets/img/img-profile.jpg" alt="Image Header Sekolah" />
                    </picture>
                    <div class="text">
                        <h1 class="title">SEJARAH SMAN SERBA BISA </h1>
                        <p class="subtitle"><span>Berdiri sejak tahun 1975, semula adalah SMPP-35 menjadi SMA Negeri Serba Bisa sejak tahun 1984. Sekolah yang berlokasi di Jl. Bhakti IV/1 Komplek Pajak Kemanggisan ini menjadi sekolah favorit di Jakarta Barat karena sumberdaya dan lokasinya yang strategis. </span></p>
                        <a href="#" class="btn btn-primary">

                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tim -->
        <section id="tim">
            <div class="reveal">
                <h2 class="text-center">Tim</h2>
                <p class="card_text text-grey text-center size-paragraph">Berisikan informasi tim yang ada di SMAN Serba Bisa</p>
                <!-- [halaman tim kami] -->
                <section id="team">
                    <div class="reveal-team">
                        <div class="swiper slide-content">
                            <div class="row swiper-wrapper">
                                <div class="box swiper-slide img-slide">
                                    <div class="top-bar"></div>
                                    <div class="content-team">
                                        <img src="assets/img/tim/img-tim1.jpeg" alt="img-tim">
                                        <strong>ARIFA NOFRIYALDI CHAN
                                            <i class="ri-checkbox-circle-fill" style="color: #2FCC71;"></i>
                                        </strong>
                                        <p>19215277</p>
                                    </div>
                                </div>

                                <div class="box swiper-slide img-slide">
                                    <div class="top-bar"></div>
                                    <div class="content-team">
                                        <img src="assets/img/tim/img-tim2.jpeg" alt="img-tim">
                                        <strong>Felbi Humaida
                                            <i class="ri-checkbox-circle-fill" style="color: #2FCC71;"></i>
                                        </strong>
                                        <p>19215018</p>
                                    </div>
                                </div>

                                <div class="box swiper-slide img-slide">
                                    <div class="top-bar"></div>
                                    <div class="content-team">
                                        <img src="assets/img/tim/img-tim3.jpeg" alt="img-tim">
                                        <strong>Muspik
                                            <i class="ri-checkbox-circle-fill" style="color: #2FCC71;"></i>
                                        </strong>
                                        <p>19215179</p>
                                    </div>
                                </div>

                                <div class="box swiper-slide img-slide">
                                    <div class="top-bar"></div>
                                    <div class="content-team">
                                        <img src="assets/img/tim/img-tim4.jpeg" alt="img-tim">
                                        <strong>Elsa Oktaviani
                                            <i class="ri-checkbox-circle-fill" style="color: #2FCC71;"></i>
                                        </strong>
                                        <p>19215111</p>
                                    </div>
                                </div>

                                <div class="box swiper-slide img-slide">
                                    <div class="top-bar"></div>
                                    <div class="content-team">
                                        <img src="assets/img/tim/img-tim5.jpeg" alt="img-tim">
                                        <strong>Muh Arif Fauzi Idris
                                            <i class="ri-checkbox-circle-fill" style="color: #2FCC71;"></i>
                                        </strong>
                                        <p>19215081</p>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <section id="gallery">
            <div class="container reveal">
                <h2 class="text-center">Gallery</h2>
                <p class="card_text text-grey text-center size-paragraph">Berisikan gallery foto yang ada di SMAN Serba Bisa</p>
                <div class="grid-container reveal">
                    <div class="grid-item">
                        <img class="radius" src="assets/img/slide/slide-sekolah1.jpg" alt="image1" srcset="">
                    </div>
                    <div class="grid-item">
                        <img class="radius" src="assets/img/slide/slide-sekolah2.jpg" alt="image1" srcset="">
                    </div>
                    <div class="grid-item">
                        <img class="radius" src="assets/img/slide/slide-sekolah3.jpg" alt="image1" srcset="">
                    </div>
                    <div class="grid-item">
                        <img class="radius" src="assets/img/slide/slide-sekolah4.jpg" alt="image1" srcset="">
                    </div>
                    <div class="grid-item">
                        <img class="radius" src="assets/img/slide/slide-sekolah2.jpg" alt="image1" srcset="">
                    </div>
                </div>
            </div>
        </section>

    </header>

    <!-- Bagian footer bawah sebagai informasi kontak -->
    <footer id="contact">
        <div class="container reveal">
            <div class="row">
                <div class="text">
                    <h3 class="brand">
                        <a href="#" onclick="goToTop()">Serba Bisa</a>
                    </h3>
                    <div class="description">
                        <p>
                            <strong>Serba Bisa</strong> Website ini dibangun sebagai sarana atau media informasi dan komunikasi sekolah, karena sejalan dengan perkembangan teknologi
                        </p>
                    </div>
                </div>
                <menu class="contact">
                    <h3>Contact</h3>
                    <li>
                        <span class="ri ri-map-pin-line"></span>
                        <a href="#contact">Bogor, Indonesia</a>
                    </li>
                    <li>
                        <span class="ri ri-mail-line"></span>
                        <a href="#contact">serba_bisa@mail.com</a>
                    </li>
                    <li>
                        <span class="ri ri-whatsapp-line"></span>
                        <a href="#contact">+62 812-1079-2145</a>
                    </li>
                    <li>
                        <span class="ri ri-instagram-line"></span>
                        <a href="#contact">@serba_bisa</a>
                    </li>
                    <li>
                        <span class="ri ri-facebook-box-line"></span>
                        <a href="#contact">serba_bisa</a>
                    </li>
                    <li>
                        <span class="ri ri-youtube-line"></span>
                        <a href="#contact">serba_bisa TV</a>
                    </li>
                </menu>
                <menu class="link">
                    <h3>Useful Link</h3>
                    <li>
                        <span class="ri ri-arrow-right-s-line"></span>
                        <a href="index.html" onclick="goToTop()">Home</a>
                    </li>
                    <li>
                        <span class="ri ri-arrow-right-s-line"></span>
                        <a href="profile.php">Profile</a>
                    </li>
                    <li>
                        <span class="ri ri-arrow-right-s-line"></span>
                        <a href="kegiatan.php">Kegiatan</a>
                    </li>
                    <li>
                        <span class="ri ri-arrow-right-s-line"></span>
                        <a href="sarana.php">Sarana Prasarana</a>
                    </li>
                    <li>
                        <span class="ri ri-arrow-right-s-line"></span>
                        <a href="kontak.php">Kontak</a>
                    </li>
                </menu>
            </div>
            <div class="copyright">
                <p>Copyright&copy; <?= date('Y') ?> Serba Bisa All rights reserved.<a href="http://www.sman78-jkt.sch.id/" target="_blank">resource</a></p>
            </div>
        </div>
    </footer>

    <!-- link swiper js untuk swipe slider -->
    <script src="lib/swiper/js/swiper-bundle.min.js"></script>
    <!-- link javascript -->
    <script src="assets/js/script.js"></script>

</body>

</html>