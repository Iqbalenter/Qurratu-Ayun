<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Qurratu a'yun</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">

</head>

<body>
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/logo22.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="active"><a href="index.php">Home</a></li>
                                                <li><a href="fasilitas.php">Fasilitas</a></li>
                                                <li><a href="prestasi.php">Prestasi</a></li>
                                                <li><a href="about.php">Tentang</a></li>
                                                <li><a href="#">Informasi</a>
                                                    <ul class="submenu">
                                                        <li><a href="profile_guru.php">Pengajar</a></li>
                                                        <li><a href="kegiatan.php">Kegiatan</a></li>
                                                        <li><a href="tingkatan.php">Tingkatan</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="kontak.php">Kontak</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Fasilitas Sekolah <br> Qurratu A'yun</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Fasilitas</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
    <?php 
        include('koneksi.php');
        $query = mysqli_query($koneksi, "SELECT * FROM fasilitas");
        while($row = mysqli_fetch_array($query)) {
            $ket_fasilitas = substr($row['ket_fasilitas'], 0, 50) . '...';
    ?>
    <div class="col-lg-4">
        <div class="properties properties2 mb-30">
            <div class="properties__card">
                <div class="properties__img overlay1">
                    <a href="#"><img src="assets/img/<?php echo $row['gambar']; ?>" alt=""></a>
                </div>
                <div class="properties__caption">
                    <h3><a><?php echo $row['nama_fasilitas']; ?></a></h3>
                    <p><?php echo $ket_fasilitas; ?></p>
                    <a class="border-btn border-btn2" onclick="showPopup('<?php echo $row['nama_fasilitas']; ?>', '<?php echo $row['ket_fasilitas']; ?>', 'assets/img/<?php echo $row['gambar']; ?>')">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

            </div>
        </div>

        <!-- Courses area End -->  
        <!-- Courses area start -->
        <!-- <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Ekstrakulikuler</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        include('koneksi.php');
                        $query = mysqli_query($koneksi, "SELECT * FROM ekstrakulikuler");
                        while($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/<?php echo $row['gambar']; ?>" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <h3><a><?php echo $row['nama_ekstrakulikuler']; ?></a></h3>
                                    <p><?php echo $row['ket_ekstrakulikuler']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div> -->

        <!-- Courses area End -->  
    </main>
    <footer>
        <div class="footer-wrappper footer-bg">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-25">
                                        <a href="index.php"><img src="assets/img/logo/logo22.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Qurratu A'yun</p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="https://www.instagram.com/sekolahqurratuayundelitua/"
                                            target='_blank'><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.facebook.com/profile.php?id=61552597289286"
                                            target='_blank'><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.youtube.com/@SekolahQurratuAyunDelitua" target='_blank'><i
                                                class="ti-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Alamat</h4>
                                    <ul>
                                        <li><a>JL Deli Tua, No 74, Mekarsari, Deli Tua</a></li>
                                        <li><a>Deli Tua Timur, Deli Serdang, Kedai Durian</a></li>
                                        <li><a>Medan, Kabupaten Deli Serdang</a></li>
                                        <li><a>Sumatera Utara 20355</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Tautan Cepat</h4>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="fasilitas.php">Fasilitas</a></li>
                                        <li><a href="about.php">Tentang</a></li>
                                        <li><a href="tingkatan.php">Tingkatan</a></li>
                                        <li><a href="kontak.php">Kontak</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Maps</h4>
                                    <ul>
                                        <li><iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31858.265518900054!2d98.65288216852981!3d3.521882257901768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313adf73653067%3A0x2e02b9522bafe361!2sQurratu%20A&#39;yun!5e0!3m2!1sen!2sid!4v1719736051289!5m2!1sen!2sid"
                                                width="200" height="200" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                        This website is made by Universitas Harapan Student</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>

    <script>
    function showPopup(title, text, imageUrl) {
            Swal.fire({
                title: title,
                text: text,
                imageUrl: imageUrl,
                imageWidth: 400,
                imageHeight: 300,
                imageAlt: 'Custom image',
                width: '600px'  // Ubah nilai ini sesuai kebutuhan Anda
            });
        }
    </script>

</body>
</html>