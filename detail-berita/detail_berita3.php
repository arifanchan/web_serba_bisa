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
        'gambar' => '../assets/img/berita/img-berita3.jpg',
        'name' => 'Kelulusan SMA Negeri Serba Bisa',
        'desc' => 'Kelulusan adalah akhir dari suatu kegiatan sekolah pada jenjang tertentu. Kelulusan didasarkan pada Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 5 Tahun 2015 tentang Kriteria Kelulusan Peserta Didik, Penyelenggaraan Ujian Nasional, dan Penyelenggaraan Ujian Sekolah/Madrasah/Pendidikan Kesetaraan Pada SMP/MTs atau yang Sederajat dan SMA/MA/SMK atau yang sederajat, peserta didik dinyatakan lulus dari satuan pendidikan jika memenuhi persyaratan'
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
                            <a href="../index.html" class="logo" onclick="goToTop()">Serba Bisa</a>
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
                                    <a href="../index.html" onclick="goToTop()">Home</a>
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

</body>

</html>