<?php
// include '../model_berita.php';

// if (isset($_GET['id'])) {
//     $id =  $_GET['id'];
// } else {
//     echo "data tidak ada";
// }

$berita = [
    [
        'id' => 1,
        'gambar' => '../assets/img/berita/img-berita2.jpg',
        'name' => 'Ajang Maraton Run To Care 2022',
        'desc' => 'Ajang lari ultra maraton Run To Care 2022 Toba-Medan resmi berakhir. Digelar mulai 29 Juli hingga 31 Juli 2022, acara ini dihadiri oleh 131 pelari yang berjuang secara langsung menuntaskan maraton sejauh 150 km dari titik start pertama di Pantai Atsari, Danau Toba, 100 km dari titik start kedua di Purba, dan Relay 50 km.Dilansir dari rilis resmi yang diterima Liputan6.com, perhelatan Run To Care 2022 secara spesifik diawali oleh sambutan National Director SOS Children’s Villages Gregor Hadi Nitihardjo dan Kepala Dinas Pariwisata Kabupaten Simalungun Fikri Damanik.'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link style css -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- lInk swiper -->
    <link rel="stylesheet" href="../lib/swiper/css/swiper-bundle.min.css">

    <!-- Link library remixicon -->
    <link rel="stylesheet" href="../lib/remix-icon/css/remixicon.css" />
    <title>Halaman Berita</title>
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
                            <a href="../index.php" class="logo" onclick="goToTop()">Serba Bisa</a>
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
                                    <a href="../index.php" onclick="goToTop()">Home</a>
                                </li>
                                <li>
                                    <a href="../profile.php">Profile</a>
                                </li>
                                <li>
                                    <a href="../kegiatan.php">Kegiatan</a>
                                </li>
                                <li>
                                    <a href="../sarana.php">Sarana Prasarana</a>
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
                                    <a href="../kontak.php" class="btn btn-primary">Kontak</a>
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
    </header>

    <!-- Banner -->
    <?php

    foreach ($berita as $br) {

    ?>
        <section id="banner">
            <div class="container" style="margin-top: 100px;">
            <button onclick="history.go(-1);"" class="btn btn-primary mb-2">
                    <i class="ri-arrow-left-fill"></i>
                    &nbsp; Kembali
                </button>
                <h2 class="mb-1"><?= $br['name'] ?></h2>
                <div class="share">
                    <h3>Bagikan : </h3>
                    <div class="icon-share">
                        <!-- <input type="text" id="text-1" class="" value="http://localhost/web_sekolah/detail-berita/detail_berita1firman.php" />
                        <br>
                        <a href="" onclick="copy('text-1')">
                            <i class="ri-link icon-link"></i>
                        </a> -->
                        <a href="http://www.facebook.com/sharer.php?u=https://rafstudio.netlify.app/" target="_blank">
                            <i class="ri-facebook-circle-fill icon-fb"></i>
                        </a>
                        <a href="https://www.instagram.com/?url=https://rafstudio.netlify.app/" target="_blank">
                            <i class="ri-instagram-fill icon-ig"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6281210792145" target="_blank">
                            <i class="ri-whatsapp-fill icon-wa"></i>
                        </a>
                    </div>
                </div>
                <div class="container-banner">
                    <img src="<?php echo $br['gambar'] ?>" alt="img-banner" class="img-banner mb-2">
                </div>
                <p><?= $br['desc'] ?></p>
            </div>
            </div>
        </section>
    <?php } ?>



    <!-- Bagian footer bawah sebagai informasi kontak -->
    <footer id="contact">
        <div class="container">
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
    <script src="../lib/swiper/js/swiper-bundle.min.js"></script>
    <!-- link javascript -->
    <script src="../assets/js/script.js"></script>

    <script>
        function copyLink() {
            navigator.clipboard.writeText("http://localhost/web_sekolah/detail-berita/detail_berita1.php");
        }
    </script>
</body>

</html>