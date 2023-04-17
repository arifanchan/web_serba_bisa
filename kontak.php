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
        <section class="contact__us container" id="contact hero">
            <div class="container">
                <div class="box__contact">
                    <div class="left__contact">
                        <h1 class="section__title">Kontak Kami</h1>
                        <div class="alert my-alert d-none">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span><strong>Terima
                                Kasih,</strong> Pesan anda sudah kami terima.
                        </div>
                        <!-- <p class="subtitle__contact">Cukup isi formulir ini dan kami akan segera menghubungi Anda untuk mendiskusikan proyek Anda. <br> Hubungi kami di <a href="mailto::raf.studio@gmailcom" class="email">raf.studio@gmail.com</a></p> -->
                        <br>
                        <!-- <div class="card-body"> -->
                        <form name="raf-contact-form" method="POST" action="tampil_kontak.php">
                            <div class="row__name">
                                <div class="form__group">
                                    <label for="" class="label__form">Nama</label>
                                    <input type="text" class="form-input" name="nama" id="" placeholder="Masukkan nama" required>
                                </div>
                                <div class="form__group">
                                    <label for="" class="label__form">Email</label>
                                    <input type="email" class="form-input" name="email" id="" placeholder="Masukkan email" required>
                                </div>
                            </div>

                            <div class="row__name">
                                <div class="form__group">
                                    <label for="" class="label__form">Jenis Kelamin</label><br>
                                    <input type="radio" class="text-center" name="jenis_kelamin" id="" placeholder="Laki-laki" value="Laki-laki" style="margin-top: 10px;" required> Laki - Laki <br>
                                    <input type="radio" class="text-center" name="jenis_kelamin" id="" placeholder="Perempuan" value="Perempuan" required> Perempuan
                                </div>

                                <div class="form__group">
                                    <label for="" class="label__form">Subjek</label>
                                    <input type="text" class="form-input" name="subjek" id="" placeholder="Subjek" required>
                                </div>
                            </div>

                            <label for="" class="label__form no__telp">Pesan</label>
                            <textarea name="pesan" class="form-input" id=""></textarea>

                            <button type="submit" name="kirim" class="btn-gradient btn-contact btn-kirim btn btn-primary">Kirim</button>

                            <button type="button" class="btn-loading btn-load d-none">
                                <i class="bx bx-loader-alt bx-spin bx-xs"></i> Loading
                            </button>
                        </form>
                        <!-- </div> -->
                    </div>
                    <div class="right__contact">
                        <div class="img__contact">
                            <img src="assets/img/img-kontak.png" alt="img-contact">
                        </div>
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