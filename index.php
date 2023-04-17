<?php
include 'model_berita.php';
?>
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
                            <a href="index.php" class="logo" onclick="goToTop()">Serba Bisa</a>
                        </strong>
                    </div>
                    <div class="menu-wrapper">
                        <button class="toggler" type="button">
                            <span class="ri ri-menu-3-line" id="nav-toggler"></span>
                        </button>

                        <!-- Link menu nav -->
                        <menu id="nav-menu">
                            <ul>
                                <li class="active">
                                    <a href="#" onclick="goToTop()">Home</a>
                                </li>
                                <li>
                                    <a href="profile.php">Profile</a>
                                </li>
                                <li>
                                    <a href="kegiatan.php">Kegiatan</a>
                                </li>
                                <li>
                                    <a href="sarana.php">Sarana Prasarana</a>
                                </li>
                                <li>
                                    <!-- <button onclick="darkMode()"> -->
                                    <label class="switch">
                                        <input type="checkbox" onclick="darkMode()">
                                        <span class="slider round"></span>
                                    </label>
                                    <!-- </button> -->
                                </li>
                                <li>
                                    <a href="kontak.php" class="btn btn-primary">Kontak</a>
                                </li>
                                <!-- <li>
                                    <a href="#login">Login</a>
                                </li> -->
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
                    <div class="text">
                        <h1 class="title">Selamat datang di website SMAN Serba Bisa. </h1>
                        <p class="subtitle"><span>Website ini dibangun sebagai sarana atau media informasi dan komunikasi sekolah, karena sejalan dengan perkembangan teknologi industri 4.0</span></p>
                        <a href="#slider" class="btn btn-primary">Selengkapnya</a>
                    </div>
                    <picture>
                        <img src="assets/img/header-sekolah.jpg" alt="Image Header Sekolah" />
                    </picture>
                </div>
            </div>
        </section>
    </header>

    <section id="slider">
        <!-- Swiper -->
        <div class="swiper mySwiper reveal">
            <div class="swiper-wrapper">
                <div class="swiper-slide img-slide container-banner">
                    <img src="assets/img/slide/slide-sekolah1.jpg" alt="" srcset="">
                    <div class="centered">
                        <h2>Kegiatan terbaru di SMAN Serba Bisa</h2>
                        <p>Berupa beberapa kegiatan terbaru yang ada di SMA Negeri Serba Bisa</p>
                    </div>
                </div>
                <div class="swiper-slide img-slide container-banner">
                    <img src="assets/img/slide/slide-sekolah2.jpg" alt="" srcset="">
                    <div class="centered">
                        <h2>Sekolah yang berakrediatasi A</h2>
                        <p>Berupa beberapa kegiatan terbaru yang ada di SMA Negeri Serba Bisa</p>
                    </div>
                </div>
                <div class="swiper-slide img-slide container-banner">
                    <img src="assets/img/slide/slide-sekolah3.jpg" alt="" srcset="">
                    <div class="centered">
                        <h2>Dengan jumlah siswa yang banyak</h2>
                        <p>Berupa beberapa kegiatan terbaru yang ada di SMA Negeri Serba Bisa</p>
                    </div>
                </div>
                <div class="swiper-slide ing-slide container-banner">
                    <img src="assets/img/slide/slide-sekolah4.jpg" alt="" srcset="">
                    <div class="centered">
                        <h2>Terdapat fasilitas yang memadai</h2>
                        <p>Berupa beberapa kegiatan terbaru yang ada di SMA Negeri Serba Bisa</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
    </section>

    <!-- <section id="list">
        <div class="container reveal">
            <h4>
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    echo "Perulangan ke- {$i}";
                    echo "<br>";
                }
                ?>
            </h4>
        </div>
    </section> -->

    <section id="hero">
        <div class="container reveal">
            <div class="row">
                <div class="text">
                    <h2>Visi</h2>
                    <p>Mendidik Pemimpin untuk Tuhan, Negara dan Masyarakat</p>
                </div>
                <div class="text">
                    <h2>Misi</h2>
                    <p>Kami bertujuan untuk memberikan pendidikan holistik dalam lingkungan yang berupaya untuk mengeluarkan potensi setiap siswa secara maksimal; berkembang di setiap karakter moral yang kuat, dijiwai dengan nilai-nilai & prinsip-prinsip Ilahi dan untuk membimbing dan mempersiapkan siswa untuk menjadi pemimpin untuk kebaikan yang lebih besar</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita -->
    <section id="berita">
        <div class="container reveal">
            <h2 class="text-center">Berita</h2>
            <p class="card_text text-grey text-center size-paragraph">Berisikan berita terbaru yang ada di SMAN Serba Bisa</p>
            <div class="main">
                <ul class="cards">
                    <?php
                    foreach ($berita as $br) {
                    ?>
                        <li class="cards_item">
                            <div class="card">
                                <div class="card_image"><img src="<?= $br['gambar'] ?>"></div>
                                <div class="card_content">
                                    <h2 class="card_title text-limit-title mb-2" style="margin-bottom: 1rem;"><?= $br['name'] ?></h2>
                                    <p class="card_text text-grey text-limit"><?= $br['desc'] ?></p>
                                    <a href="detail-berita/detail_berita<?= $br['id'] ?>.php">
                                        <button class="btn card_btn">Selengkapnya</button>
                                    </a>
                                </div>
                            </div>
                        </li>
                        
                    <?php } ?>
                </ul>
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

    <a href="https://api.whatsapp.com/send?phone=56281210792145&text=Hallo%21%Fajar%20m%C3%A1s%20informasi%C3%B3n%20web%20sekolah%20." class="back-to-top" target="_blank">
        <center>
            <i class="ri-whatsapp-line my-float text-center"></i>
        </center>
    </a>

    <!-- Bagian footer bawah sebagai informasi kontak -->
    <footer id="contact">
        <div class="container">
            <div class="row reveal">
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
                        <a href="index.php" onclick="goToTop()">Home</a>
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
                    <!-- <li>
                        <span class="ri ri-arrow-right-s-line"></span>
                        <a href="#">Login</a>
                    </li> -->
                </menu>
            </div>
            <div class="copyright">
                <p>Copyright&copy; <?= date('Y') ?> Serba Bisa All rights reserved. <a href="http://www.sman78-jkt.sch.id/" target="_blank">resource</a></p>
            </div>
        </div>
    </footer>

    <!-- link swiper js untuk swipe slider -->
    <script src="lib/swiper/js/swiper-bundle.min.js"></script>
    <!-- link javascript -->
    <script src="assets/js/script.js"></script>

</body>

</html>