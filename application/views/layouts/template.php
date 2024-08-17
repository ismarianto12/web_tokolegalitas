<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($title) ? $title : 'Please Wait ...' ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/front') ?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/front') ?>/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/front') ?>/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/front') ?>/img/fv.png">
    <link rel="manifest" href="<?= base_url('assets/front') ?>/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?= base_url('assets/front') ?>/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="<?= base_url('assets/front') ?>/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?= base_url('assets/front') ?>/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front') ?>/vendors/hamburgers/hamburgers.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front') ?>/vendors/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front') ?>/assets/css/theme.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/front') ?>/assets/css/user.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
</head>
<style>
    .textcard_ofchild {
        font-size: 18px;
        text-align: left;
        font-weight: 500;
        color: #fff;
    }

    #scrollToTopBtn {
        position: fixed;
        bottom: 8rem;
        right: -10px;
        display: none;
        z-index: 99;
        width: 80px;
    }

    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 100;
    }

    .btn-floating {
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 30px !important;
        height: 80px !important;
    }

    .icon-circle {
        width: 100%;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #333;
        background-color: #fff;
        padding: 7px;
    }

    .icon-circle-border {
        border: 2px solid #000;
        /* Adjust border width and color as needed */
    }

    .icon {
        display: block;
        font-family: 'FontAwesome';
    }

    /* Example icon styles, you might need to adjust based on the icons you use */
    .icon-building:before {
        content: '\f1ad';
    }

    /* Example icon */
    .icon-lightbulb:before {
        content: '\f0eb';
    }

    /* Example icon */
    .icon-tag:before {
        content: '\f02c';
    }

    /* Example icon */
    .icon-clock:before {
        content: '\f017';
    }

    /* Example icon */

    .cardheaderservice {
        background-color: #b33641 !important;
        color: #ffffff !important;
    }

    .btn-whatsapp {
        position: relative;
        overflow: hidden;
        color: white;
        z-index: 1;
        transition: color 0.3s;
    }

    .btn-whatsapp::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        padding: unset !important;
        margin: unset !important;
        background-color: #0056b3;
        transition: left 0.3s;
        z-index: -1;
    }

    .btn-whatsapp:hover {
        color: white !important;
    }

    .btn-whatsapp:hover::before {
        left: 0;
    }



    .sectionpketperizinana {
        background-color: #fcfcfc !important;
        border-top-width: 1px;
        border-bottom-width: 1px;
        border-top-color: #eeeeee;
        border-bottom-color: #eeeeee;
        max-width: 100%;
    }

    .cardheaderservicesub {
        background-color: #282828 !important;

    }

    .card_parent {
        box-shadow: 0px -1px 20px 0px #ddd;
        border-radius: 10px;
        margin: -9px;
    }

    .card {
        height: 100%;
    }

    .card-footer.text-center {
        background: #b33641 !important;
    }

    .card-footer .btn {
        width: 100%;
        background: #b33641 !important;
        /* Membuat tombol melebar penuh */
    }
</style>

<body>
    <div class="bg-primary py-3 d-none d-sm-block text-white fw-bold" style="padding: unset !important;margin: unset !important;">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-auto d-none d-lg-block fs--1"><span class="fa fa-envelope text-warning me-2" data-fa-transform="grow-3"></span>tokolegalitas@gmail.com</div>
                <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center"><span class="fas fa-clock text-warning me-2" data-fa-transform="grow-3"></span>Mon-Sat, 8.00-18.00. Sunday CLOSED</div>
                <div class="col-auto"><span class="fas fa-phone-alt text-warning" data-fa-transform="shrink-3"></span><a class="ms-2 fs--1 d-inline text-white fw-bold" href="tel:+6281293805004">Tlp: (021) 29021873 HP: +62 812-9380-5004</a></div>
            </div>
        </div>
    </div>
    <div class="sticky-top navbar-elixir">
        <div class="container">
            <nav class="navbar navbar-expand-lg"> <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets/front') ?>/assets/logo.png" alt="logo" style="width:30%" /></a><button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger hamburger--emphatic"><span class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>

                <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
                    <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Paket Kami</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url() ?>page/paket-pendirian-pt/">Paket Pendirian PT</a></li>
                                <li><a class="dropdown-item" href="<?= base_url() ?>page/paket-pendirian-cv/">Paket Pendirian CV</a></li>
                                <li><a class="dropdown-item" href="<?= base_url() ?>page/paket-perubahan-akta-pt-cv/">Paket Perubahan Akta PT & CV</a></li>
                                <li><a class="dropdown-item" href="<?= base_url() ?>page/pendaftaran-hak-cipta-merk-dan-paten/">Pendaftaran Hak Cipta, Merk dan Paten</a></li>
                                <li><a class="dropdown-item" href="<?= base_url() ?>page/paket-virtual-office/">Paket Virtual Office</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Paket Khusus</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url() ?>page/jasa-penataan-dokumen/">Jasa Penataan Dokumen</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>informasi/">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>page/faq/">Faq</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>kontak-kami/" style="width: 150px;">Kontak Kami</a></li>

                    </ul>
                    <a class="btn btn-outline-primary rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 btn-whatsapp" href="<?= base_url() ?>pengajuan-proposal" target="_blank" style="color:#000">Hubungi</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="preloader" id="preloader">
            <div class="loader">
                <div class="line-scale">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <?= $contents ?>
        <div class="whatsapp-button">
            <a href="https://api.whatsapp.com/send?phone=6285274639791&text=Halo%20TokoLegalitas.com,%20Saya%20Mau%20Bertanya..." class="btn btn-success btn-floating" target="_blank">
                <i class="fab fa-whatsapp" style="font-size:45px"></i>
            </a>
        </div>

        <button id="scrollToTopBtn" class="btn btn-primary text-center">
            <i class="fa fa-arrow-up" style="font-size:30px"></i>
        </button>

        <footer class="footer bg-primary text-center py-4">
            <div class="container">
                <div class="row opacity-85 text-white d-flex justify-content-between align-items-center">
                    <div class="col-sm-6 mt-6 mt-sm-0">
                        <p class="lh-lg mb-0 fw-semi-bold">© Copyright 2024 PT. Tokolegalitas.com - tokolegalitas.com</p>
                    </div>
                    <div class="col-sm-6 mt-6 mt-sm-0 text-end">
                        <span>Designed by </span><a class="text-white" href="https://themewagon.com/" target="_blank">urang-awakweb.com</a>
                    </div>
                </div>
            </div>

        </footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="<?= base_url('assets/front') ?>/vendors/popper/popper.min.js"></script>
        <script src="<?= base_url('assets/front') ?>/vendors/bootstrap/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/front') ?>/vendors/is/is.min.js"></script>
        <script src="<?= base_url('assets/front') ?>/vendors/bigpicture/BigPicture.js"> </script>
        <script src="<?= base_url('assets/front') ?>/vendors/countup/countUp.umd.js"> </script>
        <script src="<?= base_url('assets/front') ?>/vendors/swiper/swiper-bundle.min.js"></script>
        <script src="<?= base_url('assets/front') ?>/vendors/fontawesome/all.min.js"></script>
        <script src="<?= base_url('assets/front') ?>/vendors/lodash/lodash.min.js"></script>
        <script src="<?= base_url('assets/front') ?>/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url('assets/front') ?>/vendors/gsap/gsap.js"></script>
        <script src="<?= base_url('assets/front') ?>/vendors/gsap/customEase.js"></script>
        <script src="<?= base_url('assets/front') ?>/assets/js/theme.js"></script>

        <script>
            $(document).ready(function() {
                var scrollToTopBtn = $('#scrollToTopBtn');

                $(window).scroll(function() {
                    if ($(window).scrollTop() > 300) {
                        scrollToTopBtn.fadeIn();
                    } else {
                        scrollToTopBtn.fadeOut();
                    }
                });

                scrollToTopBtn.click(function() {
                    $('html, body').animate({
                        scrollTop: 0
                    }, 'slow');
                    return false;
                });
            });
        </script>
</body>

</html>