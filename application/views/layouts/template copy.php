<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset='utf-8'>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?= $this->config->item('csrf_head') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php $judul = isset($title) ? $title : 'TokoLegalitas.com';
        echo $judul;
        ?>
    </title>
    <meta name="title" content="TokoLegalitas.com">
    <meta name="description" content="TokoLegalitas.com menjadi Permata Keluarga, menghidupkan keluarga dalam Permata Keluarga, menjadi lebih dari sekedar Nama Kantor. Menjadi lebih dinamis dan hidup. Permata Keluarga adalah “life.love.laughter.”. Permata Keluarga Berangkat dari komitmen untuk ‘menyentuh’ lebih banyak keluarga Indonesia, kita siap melangkah maju.">
    <meta name="keywords" content="Permata Keluarga, Nama Kantor, spesialis kulit, spesial mata, spesialis urologi, spesialis anak, spesialis penyakit dalam, spesialis tht, spesialis paru, spesialis kulit dan kelamin, spesialis, spesialis penyakit, indonesia, hospital, healthcare, specialist service, medical center">
    <meta name="twitter:url" content="index.html">
    <meta name="twitter:title" content="TokoLegalitas.com">
    <meta name="twitter:description" content="Permata Keluarga Berangkat dari komitmen untuk ‘menyentuh’ lebih banyak keluarga Indonesia, kita siap melangkah maju.">
    <meta name="twitter:card" content="summary">
    <meta name="og:type" content="website">
    <meta name="og:url" content="index.html">
    <meta name="og:title" content="TokoLegalitas.com">
    <meta name="og:description" content="Permata Keluarga Berangkat dari komitmen untuk ‘menyentuh’ lebih banyak keluarga Indonesia, kita siap melangkah maju.">
    <meta name="og:image" content="<?= base_url('assets/img/logo1.png') ?>">

    <link href="<?= base_url('assets/template/css') ?>/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="<?= base_url('assets/template/css') ?>/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/css') ?>/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?= base_url('/assets/template/css/style82b2.css_v=3.3.8.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/template/css') ?>/slick.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/css') ?>/slick-theme.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/css/lity.minf9e3.css_v=1.1.css') ?>" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114932339-1"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="<?= base_url('assets/template/js') ?>/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/floating.css') ?>" />
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-114932339-1');
    </script>
    <link rel="icon" href="img/favicon.ico">
    <meta name="google-site-verification" content="4m0onSZXB7G3YgPptZ6JdONedWPQw0jyV810ohozlR8">
</head>

<body>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,500,700">
    <div class="fixed-top-bar">
        <div class="wrap">

            <nav id="w0" class="navbar-default nav-top nav-top-default navbar">
                <div class="container">
                    <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span></button><a class="navbar-brand" href="<?= base_url($rs . '/home') ?>"><img class="nav-logo img-responsive" src="<?= base_url('assets\img\logo1.png') ?>" alt="Logo Permata Keluarga" /></a></div>
                    <div id="w0-collapse" class="collapse navbar-collapse">
                        <ul id="w1" class="navbar-nav navbar-right navbar-custom nav" itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement">
                            <li itemprop="name"><a href="<?= base_url($rs . '/home') ?>" itemprop="url">Home</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Nama Kantor Kami <span class="caret"></span></a>
                                <ul id="w2" class="dropdown-menu">
                                    <li><a href="<?= base_url('lippo/home') ?>" tabindex="-1">Lippo - Bekasi</a></li>
                                    <li><a href="<?= base_url('jababeka/home') ?>" tabindex="-1">Jababeka</a></li>
                                    <li><a href="<?= base_url('galuhmas/home') ?>" tabindex="-1">Karawang</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Direktori <span class="caret"></span></a>
                                <ul id="w2" class="dropdown-menu">
                                    <li><a href="<?= base_url($rs . '/fasilitas') ?>" tabindex="-1">Fasilitas & Layanan</a></li>
                                    <li><a href="<?= base_url($rs . '/jadwal') ?>" tabindex="-1">Informasi Dokter</a></li>
                                    <li><a href="bekasi/lokasi-rs.html" tabindex="-1">Kontak</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Promosi <span class="caret"></span></a>
                                <ul id="w4" class="dropdown-menu">
                                    <li itemprop="name"><a href="<?= base_url($rs . '/promo') ?>" itemprop="url" tabindex="-1">Promosi</a></li>
                                    <li itemprop="name"><a href="<?= base_url($rs . '/informasi') ?> " itemprop="url" tabindex="-1">Berita & Kegiatan</a></li>
                                </ul>
                            </li>
                            <li itemprop="name"><a href="<?= base_url($rs . '/informasi') ?>" itemprop="url">Artikel Kesehatan</a></li>
                            <li itemprop="name"><a href="<?= base_url($rs . '/loker') ?>" itemprop="url">Karir</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Kontak <span class="caret"></span></a>
                                <ul id="w6" class="dropdown-menu">
                                    <li><a href="<?= base_url($rs . '/contact') ?>" tabindex="-1">Hubungi Kami</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="wrap container-full">
        <?= $contents ?>
    </div>
    <footer class="footer" itemscope itemtype="https://schema.org/Hospital">
        <meta itemprop="image" content="img/logo.png" />
        <div class="container-footer-top row">
            <div class="col-md-4">

                <p class="text-footer-top" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <ul class="nav">
                    <h4 class="title-footer-top">Kontak Kami :</h4>
                    <?php
                    $id_rumahsakit = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
                    switch ($id_rumahsakit) {
                        case 'lippo':
                            $alamat = '15';
                            $tlp = '18';
                            $igd = '11';
                            $fax = '12';
                            $email = '26';
                            $fanspage = '41';
                            $id_rs = '1';
                            break;
                        case 'jababeka':
                            $alamat = '16';
                            $tlp = '24';
                            $igd = '1';
                            $fax = '2';
                            $email = '27';
                            $fanspage = '42';
                            $id_rs = '2';
                            break;
                        case 'galuhmas':
                            $alamat = '17';
                            $tlp = '25';
                            $email = '28';
                            $fanspage = '43';
                            $id_rs = '3';
                            break;
                    }

                    $alamats = $this->frontmodel->getSingleSettingKontak($alamat, $id_rs);
                    $tlps = $this->frontmodel->getSingleSettingKontak($tlp, $id_rs);
                    $igds = $this->frontmodel->getSingleSettingKontak($igd, $id_rs);
                    $faxs = $this->frontmodel->getSingleSettingKontak($fax, $id_rs);
                    $emails = $this->frontmodel->getSingleSettingKontak($email, $id_rs);
                    $fanspages = $this->frontmodel->getSingleSettingKontak($fanspage, $id_rs);
                    // echo $this->db->last_query();
                    if (isset($alamats)) {
                        echo "<li><h5><i class='fa fa-home'></i>&nbsp; " . $alamats[0]->value_set . " </h5></li>";
                    }


                    // if (isset($fanspages)) {
                    //     echo "<li><h5>&nbsp;<a href='" . $fanspages[0]->value_set . "'> " . $fanspages[0]->value_set . " </a></h5></li>";
                    // }
                    ?>

                </ul>

                <meta itemprop="streetAddress" content="<?= $alamats[0]->value_set ?>" />
                <meta itemprop="addressLocality" content="Kelapa Gading" />
                <meta itemprop="addressRegion" content="Jakarta" />
                <meta itemprop="addressCountry" content="Indonesia" />
                <meta itemprop="postalCode" content="14240" />
                </p>
            </div>
            <div class="col-md-4">
                <h4 class="title-footer-top">
                    Telepon
                </h4>
                <p class="text-footer-top">
                <ul class="nav">
                    <?php
                    if (isset($tlps)) {
                        echo "<li><h5><i class='fa fa-phone'></i>&nbsp; " . $tlps[0]->value_set . " </h5></li>";
                    }
                    if (isset($igds)) {
                        echo "<li><h5><i class='fa fa-phone'></i>&nbsp; " . $igds[0]->value_set . " </h5></li>";
                    }
                    if (isset($faxs)) {
                        echo "<li><h5><i class='fa fa-phone'></i>&nbsp; " . $faxs[0]->value_set . " </h5></li>";
                    }
                    ?>
                </ul>
                </p>
                <div class="hidden" itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
                    <meta itemprop="latitude" content="-6.151829" />
                    <meta itemprop="longitude" content="106.897097" />
                </div>
            </div>
            <div class="col-md-4">
                <h4 class="title-footer-top">
                    Media Sosial
                </h4>
                <p class="text-footer-top" itemprop="Email" content="web@mitrakeluarga.com"><i class="far fa-envelope"></i>
                <ul class="nav"> <?php
                                    if (isset($emails)) {
                                        echo "<li><h5><i class='fa fa-envelope'></i>&nbsp; <a href='mailto:" . $emails[0]->value_set . "'>" . $emails[0]->value_set . " </a></h5></li>";
                                    } ?>
                </ul>
                </p>

            </div>
        </div>
        <a href="<?= get_whasappnumber($this->uri->segment(1)) ?>" class="float" target="_blank">
            <span class="tip-content">Daftar Pasien</span>
        </a>
        <div class="container footer-bottom">
            <p class="pull-left" itemprop="name" content="Permata Keluarga">&copy; 2021 Permata Keluarga All Rights Reserved </p>

            <!-- <p class="pull-right">
                <a class="footer-link" href="corporate/relations.html">Hubungan Investor </a> <span class="hidden-sm hidden-xs">|</span>
                <a class="footer-link" href="frequently-ask-question.html">FAQ </a> <span class="hidden-sm hidden-xs">|</span>
                <a class="footer-link" href="kontak.html">Hubungi Kami </a> <span class="hidden-sm hidden-xs">|</span>
                <a class="footer-link" href="wbs.html">Whistle Blowing </a> <span class="hidden-sm hidden-xs"></span>
            </p> -->
        </div>
    </footer>
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = '<?= base_url('assets/css/all.css') ?>';
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
        window.FontAwesomeConfig = {
            searchPseudoElements: true
        }
    </script>
    <script src="<?= base_url('assets/template/js') ?>/jquery.lazy/1.7.7/jquery.lazy.min.js" defer="defer"></script>
    <script src="<?= base_url('assets/template/js') ?>/jquery.lazy/1.7.7/jquery.lazy.plugins.min.js" defer="defer"></script>
    <script src="<?= base_url('assets/template/js') ?>/moment.js/2.21.0/moment.min.js" defer="defer"></script>
    <script src="<?= base_url('assets/template/js') ?>/moment.js/2.21.0/moment-with-locales.min.js" defer="defer"></script>
    <script src="<?= base_url('assets/template/js/bootstrap-datetimepicker/4.17.47/js') ?>/bootstrap-datetimepicker.min.js" defer="defer"></script>
    <script src="<?= base_url('assets/template/js') ?>/perfect-scrollbar.jquery.js" defer="defer"></script>
    <script src="<?= base_url('assets/template/js/script6aee.js') ?>" defer="defer"></script>
    <script src="<?= base_url('assets/template/js') ?>/slick/slick.min.js"></script>
    <script src="<?= base_url('assets/template/js/lityf9e3.js') ?>"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type='text/javascript' data-cfasync='false'>
        window.purechatApi = {
            l: [],
            t: [],
            on: function() {
                this.l.push(arguments);
            }
        };
        (function() {
            var done = false;
            var script = document.createElement('script');
            script.async = true;
            script.type = 'text/javascript';
            script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
            document.getElementsByTagName('HEAD').item(0).appendChild(script);
            script.onreadystatechange = script.onload = function(e) {
                if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
                    var w = new PCWidget({
                        c: '0662edd2-d240-406b-ac2f-da5158aea509',
                        f: true
                    });
                    done = true;
                }
            };
        })();
        //  
    </script>
    <script>
        jQuery(function($) {

            $(window).on('load resize orientationchange', function() {
                $('.card-deck').each(function() {
                    var cardDeck = $(this);

                    if ($(window).width() > 768) {
                        if (cardDeck.hasClass('slick-initialized')) {
                            cardDeck.slick('unslick');
                        }
                    } else {
                        if (!cardDeck.hasClass('slick-initialized')) {
                            cardDeck.slick({
                                autoplay: true,
                                autoplaySpeed: 3000,
                                dots: false,
                                arrows: false,
                                infinite: true,
                                centerMode: true,
                                mobileFirst: true,
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                centerPadding: '60px',
                                variableWidth: true,
                                focusOnSelect: true
                            });
                        }
                    }
                });
            });

        });
    </script>
</body>

</html>