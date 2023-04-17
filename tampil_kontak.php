<?php
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];
}
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
    <title>Halaman Kontak</title>
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
                                <li>
                                    <a href="index.php" onclick="goToTop()">Home</a>
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

        <!-- contact us -->
        <section class="contact__us container" id="contact">
            <div class="container">
                <div class="tampil-kontak">

                    <h2 class="text-center">Data Kontak</h2>
                    <table>
                        <tr>
                            <th>Nama</th>
                            <th> : </th>
                            <td><?= $nama ?></td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <th> : </th>
                            <td><?= $email ?></td>
                        </tr>

                        <tr>
                            <th>Jenis Kelamin</th>
                            <th> : </th>
                            <td><?= $jenis_kelamin ?></td>
                        </tr>

                        <tr>
                            <th>Subjek</th>
                            <th> : </th>
                            <td><?= $subjek ?></td>
                        </tr>

                        <tr>
                            <th>Pesan</th>
                            <th> : </th>
                            <td><?= $pesan ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            </div>

        </section>


    </header>

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
    <script src="lib/swiper/js/swiper-bundle.min.js"></script>
    <!-- link javascript -->
    <script src="assets/js/script.js"></script>
</body>

</html>