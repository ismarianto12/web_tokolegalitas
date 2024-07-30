<meta property="og:title" content="Home TokoLegalitas.com" />
<meta property="og:type" content="website">
<meta property="og:image" content="/img/logo.png" />
<meta property="og:url" content="" />
<div class="site-index">
    <div class="overlay-image">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators carousel-indicators-top">
                <?php $j = 0;
                foreach ($sliders as $f => $slider) :
                    $active = ($j == 0) ? 'class="active"' : '';
                ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?= $j ?>" <?= $active ?>></li>
                <?php $j++;
                endforeach ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-radius">
                <?php $j = 0;
                foreach ($sliders as $f => $slider) :
                    $active = ($j == 0) ? 'active' : '';
                ?>
                    <div class="item <?= $active ?>">
                        <div class="overlay-carousel-home" itemscope itemtype="https://schema.org/Organization">
                            <!-- <a href="#">
                                        <img class="white-mask-home lazy" data-src="<?php echo base_url(); ?>assets/image/slide/<?= $slider->img ?>" media="(max-width: 767px)" />
                                    </a> -->
                            <div class="crop-carousel" onclick="location.href='#'" itemprop="url" content="#">
                                <a href="#">
                                    <picture class="lazy">
                                        <data-src srcset="<?php echo base_url(); ?>assets/image/slide/<?= $slider->img ?>" media="(max-width: 767px)"></data-src>
                                        <data-img class="img-responsive image-carousel-border" itemprop="image" content="<?php echo base_url(); ?>assets/image/slide/<?= $slider->img ?>" src="<?php echo base_url(); ?>assets/image/slide/<?= $slider->img ?>" alt="<?= $slider->title ?>"></data-img>
                                    </picture>
                                </a>

                                <!-- <picture>
                                            <source media="(max-width: 767px)" srcset="<?php echo base_url(); ?>assets/image/slide/<?= $slider->img ?>">
                                            <img class="img-responsive image-carousel-border" src="<?php echo base_url(); ?>assets/image/slide/<?= $slider->img ?>" alt="Terpercaya mengutamakan pasien">
                                        </picture> -->

                            </div>
                        </div>
                    </div>
                <?php $j++;
                endforeach ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-top" href="#carousel-example-generic" role="button" data-slide="prev">
                <div class="left-icon"></div>
                <span class="sr-only">Previous</span>
            </a>
            <a id="startchange" class="right carousel-control carousel-control-top" href="#carousel-example-generic" role="button" data-slide="next">
                <div class="right-icon"></div>
                <span class="sr-only">Next</span>
            </a>
            <!-- end of Carousel Controls -->
            <div class="card-deck">
                <div>
                    <div class="card-top card-radius layanan1">
                        <div class="icon-arrow"></div>
                        <div class="card-body">
                            <h4 class="card-title text-pink">Gawat Darurat</h4>
                            <p class="card-text hidden-sm hidden-xs">Kami siap memberikan pertolongan pertama hingga penanganan intensif selama 24 jam.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-top card-radius janji1">
                        <div class="icon-arrow"></div>
                        <div class="card-body">
                            <h4 class="card-title text-pink">Buat Janji Dokter</h4>
                            <p class="card-text hidden-sm hidden-xs">Pastikan kunjungan anda lebih nyaman dengan mengatur jadwal terlebih dahulu dengan dokter-dokter kami.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-top card-radius konsul1">
                        <div class="icon-arrow"></div>
                        <div class="card-body">
                            <h4 class="card-title text-pink">Konsultasi Dokter Online</h4>
                            <p class="card-text hidden-sm hidden-xs">Kemudahan ada dalam genggaman Anda, konsultasikan masalah kesehatan Anda dengan dokter kami</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-top card-radius korona1" onclick="location.href='#">
                        <div class="icon-arrow"></div>
                        <div class="card-body">
                            <h4 class="card-title text-pink">Buat janji Tes Covid 19</h4>
                            <p class="card-text hidden-sm hidden-xs">Buat janji dan pembayaran Tes Covid 19</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lokasi-kami-home">
        <h2 class="title-lokasi-home text-center">Lokasi Kami</h2>
        <div class="card card-lokasi-kami">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-3 col-xs-12 card card-content card-home-lk">
                        <div class="dropdown dropdown-res">
                            <button class="btn btn-dropdown-res dropdown-toggle" type="button" data-toggle="collapse" id="name-klinik-home">
                                Bekasi
                                <!-- <span id="name-klinik-home">Bekasi</span> -->
                                <!-- <span class="caret"></span> -->
                            </button>
                            <div class="scroll-dropdown-lkhome">
                                <ul class="dropdown-menu container-res-klinik-home nav flex-column nav-pills nav-justified" id="res-klinik-home">
                                    <?php
                                    $j = 1;
                                    foreach ($rmahsakit->result() as $list) :
                                        switch ($list->id_rumahsakit) {
                                            case 1:
                                                $fnrs = 'lippo';
                                                break;
                                            case 2:
                                                $fnrs = 'jababeka';
                                                break;
                                            case 4:
                                                $fnrs = 'galuhmas';
                                                break;
                                        }
                                        $actv = ($rs == $fnrs) ? 'active' : "";
                                    ?>
                                        <li class="nav-item <?= $actv ?>">
                                            <a class="nav-link" to="<?= base_url($fnrs . '/home') ?>" data-toggle="tab" role="tab"><?= strtoupper(strtolower($list->nama_rumahsakit)) ?></a>
                                        </li>
                                    <?php $j++;
                                    endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php
                    $this->load->helper('url');
                    $rs = $this->uri->segment(1);
                    $list_rs = $this->frontmodel->get_opt_rs();
                    $id_rumahsakit = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
                    switch ($id_rumahsakit) {
                        case 'lippo':
                            $alamat = '15';
                            $tlp = '18';
                            $igd = '11';
                            $fax = '12';
                            $email = '26';
                            $id_rs = '1';
                            break;
                        case 'jababeka':
                            $alamat = '16';
                            $tlp = '24';
                            $igd = '1';
                            $fax = '2';
                            $email = '27';
                            $id_rs = '2';
                            break;
                        case 'galuhmas':
                            $alamat = '17';
                            $tlp = '25';
                            $email = '28';
                            $id_rs = '3';
                            break;
                    }

                    $alamats = $this->frontmodel->getSingleSettingKontak($alamat, $id_rs);
                    $tlps = $this->frontmodel->getSingleSettingKontak($tlp, $id_rs);
                    $igds = $this->frontmodel->getSingleSettingKontak($igd, $id_rs);
                    $faxs = $this->frontmodel->getSingleSettingKontak($fax, $id_rs);
                    $emails = $this->frontmodel->getSingleSettingKontak($email, $id_rs);
                    ?>

                    <div class="col-md-9 col-xs-12">
                        <div class="rumah-sakit-home tab-content">
                            <?php $y = 1;
                            foreach ($rmahsakit->result()  as $rsm) {

                                switch ($rsm->id_rumahsakit) {
                                    case 1:
                                        $rsname = 'lippo';
                                        $gambar =  base_url("assets/img/rumahsakit/lippo.jpg");

                                        break;
                                    case 2:
                                        $rsname = 'jababeka';
                                        $gambar =  base_url("assets/img/rumahsakit/jababeka.jpg");

                                        break;
                                    case 4:
                                        $rsname = 'galuhmas';
                                        $gambar = base_url("assets/img/rumahsakit/galuhmas.png");
                                        break;
                                }
                                $sactive = ($rs == $rsname) ? 'active' : '';
                            ?>
                                <div class="tab-pane fade in <?= $sactive . ' ' . $j ?>" id="lippo" itemscope itemtype="https://schema.org/Hospital" itemid="/bekasi/informasi-dokter">
                                    <section class="home-image-klinik  lazy" data-src="<?= $gambar ?>" data-imgresponsive=<?= $gambar ?>" style="background-size:cover; background-position: center center; background-repeat: no-repeat;" itemprop="image" content="<?= $gambar ?>">
                                        <!--                                                <img class="sr-only lazy" data-src="<?= $gambar ?>" alt="Foto lokasi TokoLegalitas.com Bekasi ">-->
                                        <div class="nama-klinik">
                                            <h3 class="white" itemprop="name">
                                                TokoLegalitas.com <?= $rs ?> </h3>
                                            <div class="row">
                                                <div class="col-md-5 col-xs-12">
                                                    <div class="detail-rs-home">
                                                        <div class="row">
                                                            <div class="col-md-1 col-xs-2">
                                                                <span class="glyphicon glyphicon-map-marker white" aria-hidden="true"></span>
                                                            </div>
                                                            <div class="col-md-10 col-xs-9">
                                                                <span class="white" itemprop="address"><?= $alamats[0]->value_set  ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 hidden-sm hidden-xs">
                                                    <div class="detail-rs-home">
                                                        <div class="col-md-1 col-xs-2">
                                                            <span class="glyphicon glyphicon-earphone white" aria-hidden="true"></span>
                                                        </div>
                                                        <div class="col-md-10 col-xs-8">
                                                            <span class="white" itemprop="description">
                                                                <p>Informasi :&nbsp;<span style="font-weight: 400;"><?= $tlps[0]->value_set  ?></span></p>
                                                                <p>IGD :&nbsp;<span style="font-weight: 400;"><?= $igds[0]->value_set ?></span></p>
                                                                <p>Fax :&nbsp;<span style="font-weight: 400;"><?= $faxs[0]->value_set ?></span></p>
                                                                <p><span style="font-weight: 400;">Whatsapp : <?= $tlps[0]->value_set ?></span></p>
                                                            </span>
                                                            <meta itemprop="Telephone" content="<?= $tlps[0]->value_set ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <meta itemprop="hasMap" content="https://www.google.co.id/maps/place?q=place_id:ChIJC5Y_5DqMaS4RaIQfCdVU3JQ" />
                                                <meta itemprop="email" content="<?= $emails[0]->value_set ?>" />
                                                <meta itemprop="logo" content="img/logo.png" />
                                                <meta itemprop="openingHours" content="24:00" />
                                                <meta itemprop="sameAs" content="https://www.facebook.com/" />
                                                <div class="col-md-3 col-xs-12">
                                                    <a class="btn btn-border-white button-selengkapnya" itemprop="url" href="<?= base_url($rs . '/jadwal') ?>">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            <?php $y++;
                            } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="promotion-home">
            <div class="row row-see-all">
                <h2 class="title-lokasi-home text-center col-md-9 col-xs-12">Promosi</h2>
            </div>
            <div class="row row-promotion-home">
                <?php foreach ($promos->result() as $promo) : ?>
                    <div class="card-health col-md-4 col-xs-12" itemscope itemtype="https://schema.org/Thing" onclick="location.href='<?= base_url(); ?><?= $rs ?>/informasi/<?= $promo->link ?>';">
                        <div class="overlay-tips">
                            <div class="crop-card">
                                <img class="card-img-top lazy" itemprop="image" content="<?php echo base_url(); ?>assets/image/article/<?= $promo->img ?>" data-src="<?php echo base_url(); ?>assets/image/article/<?= $promo->img ?>" alt="Gambar promo Promo Upgrade Kamar Perawatan" />
                            </div>
                            <div class="card-health-overlay">
                                <a class="btn btn-white btn-health button-read-more" href="<?= base_url(); ?><?= $rs ?>/informasi/<?= $promo->link ?>">Baca</a>
                            </div>
                        </div>
                        <div class="card-body card-body-tips">
                            <h4 class="card-title-tips"><a itemprop="url" href="<?= base_url(); ?><?= $rs ?>/informasi/<?= $promo->link ?>"><span itemprop="name"><?= $promo->title ?></span></a></h4>
                            <!--<a class="hidden-sm hidden-xs" href=""><small class="text-muted">Rs. TokoLegalitas.com </small></a>-->
                            <div class="location-promotion">
                                <span class="glyphicon glyphicon-map-marker blue" aria-hidden="true"></span>
                                <span class="content-gray">Bintaro</span>
                            </div>
                            <p class="card-text card-text-tips hidden-sm hidden-xs" itemprop="description">

                                <?= strip_tags(substr($promo->content, 0, 300)) . '....'; ?> </p>
                        </div>
                    </div>
                <?php endforeach ?>

                <h5 class="relative-see-all col-md-1 col-xs-12">
                    <a class="text-pink" href="promo.html"><b>Lihat Semua</b></a>
                </h5>
            </div>
        </div>
        <div class="pasien-kami-home">
            <h2 class="title-lokasi-home text-center">Pasien Kami</h2>
            <div id="carouselpasien" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators carousel-indicators-pasien">
                    <li data-target="#carouselpasien" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselpasien" data-slide-to="1" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="2" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="3" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="4" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="5" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="6" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="7" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="8" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="9" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="10" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="11" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="12" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="13" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="14" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="15" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="16" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="17" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="18" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="19" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="20" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="21" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="22" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="23" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="24" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="25" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="26" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="27" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="28" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="29" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="30" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="31" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="32" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="33" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="34" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="35" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="36" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="37" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="38" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="39" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="40" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="41" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="42" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="43" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="44" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="45" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="46" class=""></li>
                    <li data-target="#carouselpasien" data-slide-to="47" class=""></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner carousel-testimoni">
                    <div class="item item-pasien active" itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/1_96_ny-ratih-wulandari_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/1_96_ny-ratih-wulandari_jpg" alt="Foto testimoni dari Ny. Ratih Wulandari"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kepada dr. Antony Atmadja, Sp.OG - TokoLegalitas.com Bekasi
                                            Saya dan suami baru dikaruniai buah hati pada tahun ke-3 pernikahan kami setelah menjalani proses inseminasi dibantu oleh dr. Antony.
                                            Sebelumnya kami telah menjalani beberapa terapi dan konseling baik medis maupun non medis, biologis-psikologis maupun pengobatan barat-timur belum juga membuahkan hasil. Saya dan pasangan sama-sama memiliki penyulit secara medis. Saya, dengan kista endometriosis multiple post operasi disertai perlengketan, sehingga hanya satu tuba saya yang patent. Suami saya, pun dengan hasil analisa sperma yang tidak normal. Usia kami yang masing-masing sudah 33 tahun, memiliki faktor resiko besar dan tingkat keberhasilan yg lebih rendah untuk proses inseminasi. Banyak yang menyarankan untuk langsung menjalani program bayi tabung saja. Tapi program bayi tabung, biaya begitu besar, kami harus menabung dan harus menunggu lagi. Dalam kurun waktu kami menabung, kami tak putus asa terus berusaha. Akhirnya kami mengunjungi Dr. Antony untuk menjalankan program inseminasi. Kami menjalani inseminasi dengan penuh pengharapan. Alhamdulillah, dengan tangan dingin Dr. Antony hanya dengan 1x proses inseminasi, saya akhirnya hamil. Pada tanggal 30 Juni 2015, lahirlah buah hati kami yang pertama, Dante, yang lahir sebagai bayi yang sehat sempurna. Terimakasih banyak Dr. Antony yang telah menjadi kepanjangan tangan Tuhan untuk kebahagiaan kami. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Ratih Wulandari" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/1_96_ny-ratih-wulandari_jpg" data-nama="Testimonial Ny. Ratih Wulandari" data-spesialis="" data-text='Kepada dr. Antony Atmadja, Sp.OG - TokoLegalitas.com Bekasi
Saya dan suami baru dikaruniai buah hati pada tahun ke-3 pernikahan kami setelah menjalani proses inseminasi dibantu oleh dr. Antony.
Sebelumnya kami telah menjalani beberapa terapi dan konseling baik medis maupun non medis, biologis-psikologis maupun pengobatan barat-timur belum juga membuahkan hasil. Saya dan pasangan sama-sama memiliki penyulit secara medis. Saya, dengan kista endometriosis multiple post operasi disertai perlengketan, sehingga hanya satu tuba saya yang patent. Suami saya, pun dengan hasil analisa sperma yang tidak normal. Usia kami yang masing-masing sudah 33 tahun, memiliki faktor resiko besar dan tingkat keberhasilan yg lebih rendah untuk proses inseminasi. Banyak yang menyarankan untuk langsung menjalani program bayi tabung saja. Tapi program bayi tabung, biaya begitu besar, kami harus menabung dan harus menunggu lagi. Dalam kurun waktu kami menabung, kami tak putus asa terus berusaha. Akhirnya kami mengunjungi Dr. Antony untuk menjalankan program inseminasi. Kami menjalani inseminasi dengan penuh pengharapan. Alhamdulillah, dengan tangan dingin Dr. Antony hanya dengan 1x proses inseminasi, saya akhirnya hamil. Pada tanggal 30 Juni 2015, lahirlah buah hati kami yang pertama, Dante, yang lahir sebagai bayi yang sehat sempurna. Terimakasih banyak Dr. Antony yang telah menjadi kepanjangan tangan Tuhan untuk kebahagiaan kami.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/2_13_ny-ratih-wulandari_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/2_13_ny-ratih-wulandari_jpg" alt="Foto testimoni dari Shanty Farrah"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kepada dr. Grace Valentine, Sp.OG - TokoLegalitas.com Kalideres
                                            Terima kasih atas bantuan dokter dan bidan dalam proses melahirkan. Karena ini adalah kehamilan saya yang pertama, awalnya saya cemas sekali. Tetapi setelah mendengar penjelasan dr. Grace, saya tidak perlu cemas karena anak saya sehat dan proses melahirkan pun berjalan dengan lancar. Terima kasih banyak ya dok. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Shanty Farrah" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/2_13_ny-ratih-wulandari_jpg" data-nama="Testimonial Shanty Farrah" data-spesialis="" data-text='Kepada dr. Grace Valentine, Sp.OG - TokoLegalitas.com Kalideres
Terima kasih atas bantuan dokter dan bidan dalam proses melahirkan. Karena ini adalah kehamilan saya yang pertama, awalnya saya cemas sekali. Tetapi setelah mendengar penjelasan dr. Grace, saya tidak perlu cemas karena anak saya sehat dan proses melahirkan pun berjalan dengan lancar. Terima kasih banyak ya dok.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/3_63_irma-amelia_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/3_63_irma-amelia_jpg" alt="Foto testimoni dari Irma Amelia"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kepada dr. Susy P. Wihadi, SpA - TokoLegalitas.com Depok
                                            Tetep helpful, selalu balas Whatapps bahkan kemarin pas mau masuk UGD, Dokter Spesialis Anaknya udah kasih instruksi duluan ke dokter jaga di UGD jadi Rafta ngak nunggu antrian panjang. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Irma Amelia" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/3_63_irma-amelia_jpg" data-nama="Testimonial Irma Amelia" data-spesialis="" data-text='Kepada dr. Susy P. Wihadi, SpA - TokoLegalitas.com Depok
Tetep helpful, selalu balas Whatapps bahkan kemarin pas mau masuk UGD, Dokter Spesialis Anaknya udah kasih instruksi duluan ke dokter jaga di UGD jadi Rafta ngak nunggu antrian panjang.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/4_7_puput-lestari_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/4_7_puput-lestari_jpg" alt="Foto testimoni dari Puput Lestari"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kepada dr. Evelyn Indrajaja Tunardy, Sp.OG - TokoLegalitas.com Cikarang
                                            TokoLegalitas.com Cikarang deket dengan rumah orang tuaku. Pas aku tau hamil aku langsung ke TokoLegalitas.com dan atas rekomendasi teman saya memilih dr. Evelyn Indrajaja Tunardy, Sp.OG sebagai dokter kandungan saya, seperti di hipnotis pertama dateng ke TokoLegalitas.com sudah disuguhin dengan kebersihan TokoLegalitas.com, dan pas mulai ketemu dr. Evelyn tambah jatuh cinta karena cara pemeriksaan dan penjelasan yang sangat detail saya sangat puas. Setiap bulan saya kontrol dan konsultasi kandungan di TokoLegalitas.com Cikarang, jujur saat itu saya pakai biaya pribadi tapi saya tidak sayang karena TokoLegalitas.com Cikarang memberikan pelayanan yang terbaik untuk pasiennya. Mulai dari pemeriksaan, cara komunikasi dokter, kebersihan lingkungan, dan pemberian obat-obatan/vitamin. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Puput Lestari" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/4_7_puput-lestari_jpg" data-nama="Testimonial Puput Lestari" data-spesialis="" data-text='Kepada dr. Evelyn Indrajaja Tunardy, Sp.OG - TokoLegalitas.com Cikarang
TokoLegalitas.com Cikarang deket dengan rumah orang tuaku. Pas aku tau hamil aku langsung ke TokoLegalitas.com dan atas rekomendasi teman saya memilih dr. Evelyn Indrajaja Tunardy, Sp.OG sebagai dokter kandungan saya, seperti di hipnotis pertama dateng ke TokoLegalitas.com sudah disuguhin dengan kebersihan TokoLegalitas.com, dan pas mulai ketemu  dr. Evelyn tambah jatuh cinta karena cara pemeriksaan dan penjelasan yang sangat detail saya sangat puas. Setiap bulan saya kontrol dan konsultasi kandungan di TokoLegalitas.com Cikarang, jujur saat itu saya pakai biaya pribadi tapi saya tidak sayang karena TokoLegalitas.com Cikarang memberikan pelayanan yang terbaik untuk pasiennya. Mulai dari pemeriksaan, cara komunikasi dokter, kebersihan lingkungan, dan pemberian obat-obatan/vitamin.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/5_32_anglee-chen_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/5_32_anglee-chen_jpg" alt="Foto testimoni dari Anglee Chen"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kepada dr. Evelyn Thurnady Widjaja, Sp.OG - TokoLegalitas.com Cikarang
                                            Awal mengenal TokoLegalitas.com pas saya hamil anak pertama, pada saat itu saya tinggal di Jakarta. Awalnya saya memeriksakan kehamilan saya di TokoLegalitas.com Kemayoran. Setelah beberapa kali konsul kesana saya punya recomend dari temen saya yang tinggal di Cikarang. Bahwasanya ada dr Sp.OG yang bener-bener komunikatif banget, baik dan ramah di TokoLegalitas.com Cikarang yang bernama dr. Evelyn Thurnady Widjaja, Sp.OG akhirnya saya coba konsul ke beliau dan ternyata apa yang di recomend oleh temen saya benar-benar terbukti. Saya merasakannya sendiri betapa baik, ramah dan detailnya beliau sebagai dokter kandungan, dan saya pun rela jauh-jauh dari Jakarta sebulan sekali cuma untuk konsul ke TokoLegalitas.com Cikarang. Dan sampai saya melahirkanpun di sana. Bukan sekedar dokter yang berprestasi dan berkompeten. TokoLegalitas.com juga memiliki fasilitas yg lengkap, kebersihan yang sangat-sangat terjaga, kenyamanan dan keamanan yang bener-benar terjaga. Saya betul-betul jatuh hati dengan TokoLegalitas.com. Selain memeriksakan kehamilan saya pun setiap anak sakit dan imunisasi selalu ke TokoLegalitas.com. Anak saya pun sempat di rawat inap disana. Untuk dr Sp.A saya percayakan dengan dr. Frangky Susanto. Beliau dokter anak yang sangat pengalaman, ramah dan komunikatif banget memberikan informasi yang sejelas-jelasnya tentang bagaimana merawat bayi, menghadapi anak saat sakit serta membuat makanan untuk anak. Saya pun menyempatkan diri kalo ada seminar kesehatan di TokoLegalitas.com. Dan sekarang saya sudah memiliki 2 anak, untuk anak kedua pun saya enggan berpaling. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Anglee Chen" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/5_32_anglee-chen_jpg" data-nama="Testimonial Anglee Chen" data-spesialis="" data-text='Kepada dr. Evelyn Thurnady Widjaja, Sp.OG  - TokoLegalitas.com Cikarang
Awal mengenal TokoLegalitas.com pas saya hamil anak pertama, pada saat itu saya tinggal di Jakarta. Awalnya saya memeriksakan kehamilan saya di TokoLegalitas.com Kemayoran. Setelah beberapa kali konsul kesana saya punya recomend dari temen saya yang tinggal di Cikarang. Bahwasanya ada dr Sp.OG yang bener-bener komunikatif banget, baik dan ramah di TokoLegalitas.com Cikarang yang bernama dr. Evelyn Thurnady Widjaja, Sp.OG akhirnya saya coba konsul ke beliau dan ternyata apa yang di recomend oleh temen saya benar-benar terbukti. Saya merasakannya sendiri betapa baik, ramah dan detailnya beliau sebagai dokter kandungan, dan saya pun rela jauh-jauh dari Jakarta sebulan sekali cuma untuk konsul ke TokoLegalitas.com Cikarang. Dan sampai saya melahirkanpun di sana. Bukan sekedar dokter yang berprestasi dan berkompeten. TokoLegalitas.com juga memiliki fasilitas yg lengkap, kebersihan yang sangat-sangat terjaga, kenyamanan dan keamanan yang bener-benar terjaga. Saya betul-betul jatuh hati dengan TokoLegalitas.com. Selain memeriksakan kehamilan saya pun setiap anak sakit dan imunisasi selalu ke TokoLegalitas.com. Anak saya pun sempat di rawat inap disana. Untuk dr Sp.A saya percayakan dengan dr. Frangky Susanto. Beliau dokter anak yang sangat pengalaman, ramah dan komunikatif banget memberikan informasi yang sejelas-jelasnya tentang bagaimana merawat bayi, menghadapi anak saat sakit serta membuat makanan untuk anak. Saya pun menyempatkan diri kalo ada seminar kesehatan di TokoLegalitas.com. Dan sekarang saya sudah memiliki 2 anak, untuk anak kedua pun saya enggan berpaling.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/6_77_qoykoii_jpeg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/6_77_qoykoii_jpeg" alt="Foto testimoni dari Qoykoii"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Aku waktu itu pas konsultasi gangguan pencernaan. Udah was-was banget takut kenapa-kenapa, tapi pas konsultasi sama dokternya jelasin detail banget dan untungnya aku ga kenapa-kenapa. Ini nih yang aku suka dokter di TokoLegalitas.com kalau lagi jelasin penyakit pasiennya jelas, nggak buru-buru, pas ditanya balik juga selalu sabar jawabnya. Nenangin banget deh. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Qoykoii" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/6_77_qoykoii_jpeg" data-nama="Testimonial Qoykoii" data-spesialis="" data-text='Aku waktu itu pas konsultasi gangguan pencernaan. Udah was-was banget takut kenapa-kenapa, tapi pas konsultasi sama dokternya jelasin detail banget dan untungnya aku ga kenapa-kenapa. Ini nih yang aku suka dokter di TokoLegalitas.com kalau lagi jelasin penyakit pasiennya jelas, nggak buru-buru, pas ditanya balik juga selalu sabar jawabnya. Nenangin banget deh.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/7_20_ny-ester_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/7_20_ny-ester_jpg" alt="Foto testimoni dari Ny. Ester"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kepada dr.Harry K. Gondo, SpOG (K) TokoLegalitas.com - Surabaya
                                            Dokternya murah senyum, suka bercanda dan tidak segan untuk berbagi informasi serta pengetahuan tentang kehamilan. Selain itu penanganannya juga cepat dan peralatan yang lengkap, kamarnya nyaman dan perawat yang ramah-ramah sehingga saya memilih dr.Harry K. Gondo, SpOG (K) dan TokoLegalitas.com Surabaya untuk kelahiran anak kelima saya : Kaireen Joanna Victoria Hoo </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Ester" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/7_20_ny-ester_jpg" data-nama="Testimonial Ny. Ester" data-spesialis="" data-text='Kepada dr.Harry K. Gondo, SpOG (K) TokoLegalitas.com - Surabaya
Dokternya murah senyum, suka bercanda dan tidak segan untuk berbagi informasi serta pengetahuan tentang kehamilan. Selain itu penanganannya juga cepat dan peralatan yang lengkap, kamarnya nyaman dan perawat yang ramah-ramah sehingga saya memilih dr.Harry K. Gondo, SpOG (K) dan TokoLegalitas.com Surabaya untuk kelahiran anak kelima saya : Kaireen Joanna Victoria Hoo'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/9_76_ernawati_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/9_76_ernawati_jpg" alt="Foto testimoni dari Ny. Ernawati"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kepada dr. Yenny Kumalawati, Sp.A - TokoLegalitas.com Cibubur
                                            Pelayanan yang baik dan sepenuh hati akan membuat orang menjadi nyaman dan tak segan untuk kembali lagi. Hal itulah yang dirasakan oleh Ibu Ernawati saat konsultasi dan ditangani oleh dr. Yenny Kumalawati, Sp.A. Ibu Erna telah mempercayakan dr. Yenny sejak kehamilan pertamanya. Beliau ingat betul saat usia kandungannya memasuki 41 minggu, sang calon bayi belum juga menunjukkan tanda-tanda akan lahir. Di tengah kepanikannya, dr. Yenny ada dan memberikan ketenangan selama masa perawatan hingga proses melahirkan.
                                            Menurutnya, dokter yang berpraktik di TokoLegalitas.com Cibubur ini sangatlah sabar dan telaten menanangani dirinya dan sang buah hati. Hal ini tentu meninggalkan kesan yang baik di pikiran Ibu Erna, hingga akhirnya dr. Yenny kembali dipercaya untuk menangani anak keduanya. Satu hal yang membuatnya nyaman adalah selalu standby untuk dihubungi, bahkan tengah malam sekalipun. Itu cerita Ibu Ernawati. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Ernawati" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/9_76_ernawati_jpg" data-nama="Testimonial Ny. Ernawati" data-spesialis="" data-text='Kepada dr. Yenny Kumalawati, Sp.A - TokoLegalitas.com Cibubur
Pelayanan yang baik dan sepenuh hati akan membuat orang menjadi nyaman dan tak segan untuk kembali lagi. Hal itulah yang dirasakan oleh Ibu Ernawati saat konsultasi dan ditangani oleh dr. Yenny Kumalawati, Sp.A. Ibu Erna telah mempercayakan dr. Yenny sejak kehamilan pertamanya. Beliau ingat betul saat usia kandungannya memasuki 41 minggu, sang calon bayi belum juga menunjukkan tanda-tanda akan lahir. Di tengah kepanikannya, dr. Yenny ada dan memberikan ketenangan selama masa perawatan hingga proses melahirkan.
Menurutnya, dokter yang berpraktik di TokoLegalitas.com Cibubur ini sangatlah sabar dan telaten menanangani dirinya dan sang buah hati. Hal ini tentu meninggalkan kesan yang baik di pikiran Ibu Erna, hingga akhirnya dr. Yenny kembali dipercaya untuk menangani anak keduanya. Satu hal yang membuatnya nyaman adalah selalu standby untuk dihubungi, bahkan tengah malam sekalipun. Itu cerita Ibu Ernawati.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/10_0_ny-suprihatin_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/10_0_ny-suprihatin_jpg" alt="Foto testimoni dari Ny. Suprihatin"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kepada dr. IGM Febri Siswanto, SP.OT - TokoLegalitas.com Cibubur
                                            Pelayanan terbaik dan sepenuh hati pasti akan memberikan hasil yang baik. Hal inilah yang dirasakan oleh Ibu Suprihatin. Wanita yang tinggal di bilangan Cibubur ini sudah sejak lama menderita kerusakan bantalan sendi atau osteoartritis. Akhirnya, ia memutuskan untuk konsultasi pada dr. IGM Febri Siswanto, SP.OT di TokoLegalitas.com.
                                            Kemudian, dr. Febri pun melakukan tindakan untuk mengganti sendi lutut sebelah kanan dan dilanjutkan dengan yang kiri setahun setelahnya. Setelah itu, Ibu Suprihatin dianjurkan untuk melakukan latihan fisik agar terbiasa dengan sendi yang baru. Hasilnya, ia dapat beraktivitas seperti biasa. “Sekarang saya dapat beraktivitas seperti sebelumnya tanpa merasa nyeri dan yang terpenting, saya tidak lagi merepotkan orang di sekitar saya,” ungkap wanita berusia 84 tahun ini. Semoga pengalaman Ibu Suprihatin dapat memberi masukan bagi Sahabat MIKA yang mempunyai permasalahan yang sama. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Suprihatin" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/10_0_ny-suprihatin_jpg" data-nama="Testimonial Ny. Suprihatin" data-spesialis="" data-text='Kepada dr. IGM Febri Siswanto, SP.OT - TokoLegalitas.com Cibubur
Pelayanan terbaik dan sepenuh hati pasti akan memberikan hasil yang baik. Hal inilah yang dirasakan oleh Ibu Suprihatin. Wanita yang tinggal di bilangan Cibubur ini sudah sejak lama menderita kerusakan bantalan sendi atau osteoartritis. Akhirnya, ia memutuskan untuk konsultasi pada dr. IGM Febri Siswanto, SP.OT di TokoLegalitas.com.
Kemudian, dr. Febri pun melakukan tindakan untuk mengganti sendi lutut sebelah kanan dan dilanjutkan dengan yang kiri setahun setelahnya. Setelah itu, Ibu Suprihatin dianjurkan untuk melakukan latihan fisik agar terbiasa dengan sendi yang baru. Hasilnya, ia dapat beraktivitas seperti biasa. “Sekarang saya dapat beraktivitas seperti sebelumnya tanpa merasa nyeri dan yang terpenting, saya tidak lagi merepotkan orang di sekitar saya,” ungkap wanita berusia 84 tahun ini. Semoga pengalaman Ibu Suprihatin dapat memberi masukan bagi Sahabat MIKA yang mempunyai permasalahan yang sama.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/11_38_tn-gunawan-soedjono_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/11_38_tn-gunawan-soedjono_jpg" alt="Foto testimoni dari Tn. Gunawan Soedjono"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kepada dr. Diansyah Gustini F., Sp.M - TokoLegalitas.com Cibubur

                                            "dr. Diansyah sangat komunikatif, setiap prosedur diucapkan dengan lantang sehingga saya tahu apa yang sedang dikerjakan. Sekarang, kondisi mata saya jauh lebih baik."
                                            -Bpk. Gunawan Soedjono-

                                            Walaupun risiko terjadinya komplikasi pasca operasi katarak sangat rendah, namun terkadang banyak pasien penyakit katarak yang masih ragu untuk melakukan operasi. Itulah yang dirasakan oleh Bapak Gunawan Soedjono. Namun dengan penjelasan secara detail dari dr. Dian Gustini, Sp.M tentang keuntungan operasi katarak, akhirnya Bapak Gunawan memutuskan untuk melakukan operasi.

                                            Dari yang semula penglihatannya kabur karena mengalami katarak pada kedua matanya, kini setelah operasi, kondisi mata Bapak Gunawan sudah jauh lebih baik dan sudah bisa kembali beraktivitas.

                                            Terima kasih Bapak Gunawan karena sudah mempercayakan pengobatan mata Anda kepada dr. Dian di TokoLegalitas.com Cibubur. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Gunawan Soedjono" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/11_38_tn-gunawan-soedjono_jpg" data-nama="Testimonial Tn. Gunawan Soedjono" data-spesialis="" data-text='Kepada dr. Diansyah Gustini F., Sp.M - TokoLegalitas.com Cibubur

"dr. Diansyah sangat komunikatif, setiap prosedur diucapkan dengan lantang sehingga saya tahu apa yang sedang dikerjakan. Sekarang, kondisi mata saya jauh lebih baik."
-Bpk. Gunawan Soedjono-

Walaupun risiko terjadinya komplikasi pasca operasi katarak sangat rendah, namun terkadang banyak pasien penyakit katarak yang masih ragu untuk melakukan operasi. Itulah yang dirasakan oleh Bapak Gunawan Soedjono. Namun dengan penjelasan secara detail dari dr. Dian Gustini, Sp.M tentang keuntungan operasi katarak, akhirnya Bapak Gunawan memutuskan untuk melakukan operasi.

Dari yang semula penglihatannya kabur karena mengalami katarak pada kedua matanya, kini setelah operasi, kondisi mata Bapak Gunawan sudah jauh lebih baik dan sudah bisa kembali beraktivitas.

Terima kasih Bapak Gunawan karena sudah mempercayakan pengobatan mata Anda kepada dr. Dian di TokoLegalitas.com Cibubur.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/12_39_tn-ipo-hadi-k-sutjiadi_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/12_39_tn-ipo-hadi-k-sutjiadi_png" alt="Foto testimoni dari Tn. Ipo Hadi K Sutjiadi"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Sahabat MIKA punya sahabat yang selalu menemani? Layaknya sahabat, dokter di TokoLegalitas.com juga akan selalu ada jika dibutuhkan.


                                            Hal inilah yang dialami oleh Bapak Ipo Hadi K Sutjiadi yang merupakan pasien dari dr. Sunarto, SpS. Sejak TokoLegalitas.com Tegal berdiri, dr. Sunarto menjadi dokter spesialis saraf yang selalu ditemui Bapak Ipo hingga tak ingin berpindah ke dokter spesialis saraf lain.


                                            Sehat selalu ya Bapak Ipo. Apakah Sahabat MIKA punya cerita serupa? Share di kolom komentar yuk. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Ipo Hadi K Sutjiadi" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/12_39_tn-ipo-hadi-k-sutjiadi_png" data-nama="Testimonial Tn. Ipo Hadi K Sutjiadi" data-spesialis="" data-text='Sahabat MIKA punya sahabat yang selalu menemani? Layaknya sahabat, dokter di TokoLegalitas.com juga akan selalu ada jika dibutuhkan.


Hal inilah yang dialami oleh Bapak Ipo Hadi K Sutjiadi yang merupakan pasien dari dr. Sunarto, SpS. Sejak TokoLegalitas.com Tegal berdiri, dr. Sunarto menjadi dokter spesialis saraf yang selalu ditemui Bapak Ipo hingga tak ingin berpindah ke dokter spesialis saraf lain.


Sehat selalu ya Bapak Ipo. Apakah Sahabat MIKA punya cerita serupa? Share di kolom komentar yuk.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/13_94_ny-arum-puspo-diah-tantri_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/13_94_ny-arum-puspo-diah-tantri_jpg" alt="Foto testimoni dari Ny. Arum Puspo Diah Tantri"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kepada dr. Denny Sujatno, Sp.A - TokoLegalitas.com Surabaya

                                            "Saya percayakan pengobatan anak-anak saya juga dengan dr. Denny Sujatno, Sp.A, karena selain ramah dengan anak-anak beliau juga talkactive."
                                            -Ny. Arum Puspo Diah Tantri-

                                            Layaknya sebuah keluarga, kami akan selalu berupaya untuk membantu dengan sepenuh hati. Tak hanya mengobati, kami juga dengan senang hati berbagi semua informasi yang Anda perlukan.

                                            Hal inilah yang dirasakan oleh Ny. Arum Puspo Diah Tantri, seorang ibu rumah tangga di Surabaya. Menurutnya, Ia sangat puas dengan pelayanan dari dr Denny Sujatno, Sp.A, dokter spesialis anak di TokoLegalitas.com. Hal ini terbukti dengan kepercayaan yang ia berikan kepada dr. Denny untuk membantu proses kelahiran anak-anaknya dan juga segala pengobatan dalam proses tumbuh kembang mereka.

                                            Terima kasih untuk kepercayaan Anda, Ny Arum. Kami merasa senang karena dapat membantu dan menjadi partner sehat Anda serta keluarga. Bagi Anda yang ingin menceritakan pengalaman menarik Anda di TokoLegalitas.com, Anda dapat mengirimkan lewat DM Facebook atau Instagram. Kami tunggu ya, Sahabat MIKA. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Arum Puspo Diah Tantri" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/13_94_ny-arum-puspo-diah-tantri_jpg" data-nama="Testimonial Ny. Arum Puspo Diah Tantri" data-spesialis="" data-text='Kepada dr. Denny Sujatno, Sp.A - TokoLegalitas.com Surabaya

"Saya percayakan pengobatan anak-anak saya juga dengan dr. Denny Sujatno, Sp.A, karena selain ramah dengan anak-anak beliau juga talkactive."
-Ny. Arum Puspo Diah Tantri-

Layaknya sebuah keluarga, kami akan selalu berupaya untuk membantu dengan sepenuh hati. Tak hanya mengobati, kami juga dengan senang hati berbagi semua informasi yang Anda perlukan.

Hal inilah yang dirasakan oleh Ny. Arum Puspo Diah Tantri, seorang ibu rumah tangga di Surabaya. Menurutnya, Ia sangat puas dengan pelayanan dari dr Denny Sujatno, Sp.A, dokter spesialis anak di TokoLegalitas.com. Hal ini terbukti dengan kepercayaan yang ia berikan kepada dr. Denny untuk membantu proses kelahiran anak-anaknya dan juga segala pengobatan dalam proses tumbuh kembang mereka.

Terima kasih untuk kepercayaan Anda, Ny Arum. Kami merasa senang karena dapat membantu dan menjadi partner sehat Anda serta keluarga. Bagi Anda yang ingin menceritakan pengalaman menarik Anda di TokoLegalitas.com, Anda dapat mengirimkan lewat DM Facebook atau Instagram. Kami tunggu ya, Sahabat MIKA.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/14_67_ny-jessy_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/14_67_ny-jessy_jpg" alt="Foto testimoni dari Ny. Jessy"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            "Tim dokter dan terapis TokoLegalitas.com Depok sangat profesional dalam menangani anak-anak dengan gangguan speech delay sampai bisa berkomunikasi dengan lancar sekarang,"

                                            -Jessy, pasien dengan Terapi Sensori Integrasi dan Terapi Wicara-

                                            Orangtua seringkali mengabaikan gangguan keterlambatan bicara pada si kecil. Padahal, terlambat bicara bisa jadi gejala awal munculnya gangguan tumbuh kembang pada si kecil.

                                            Lalu apa saja gangguan yang bisa di derita si kecil dari gejala tersebut? Catat ya Sahabat MIKA, si kecil bisa terkena gangguan berbahasa ekspresif dan reseptif, disabilitas intelektual, gangguan perkembangan koordinasi, ADHD, serta autisme.

                                            Jika si kecil mengalami hal itu, segera periksakan ke bagian rehabilitasi medis seperti yang dilakukan Jessy ya. Supaya Ayah dan Bunda bisa mengerti apa yang dikatakan si kecil. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Jessy" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/14_67_ny-jessy_jpg" data-nama="Testimonial Ny. Jessy" data-spesialis="" data-text='"Tim dokter dan terapis TokoLegalitas.com Depok sangat profesional dalam menangani anak-anak dengan gangguan speech delay sampai bisa berkomunikasi dengan lancar sekarang,"

-Jessy, pasien dengan Terapi Sensori Integrasi dan Terapi Wicara-

Orangtua seringkali mengabaikan gangguan keterlambatan bicara pada si kecil. Padahal, terlambat bicara bisa jadi gejala awal munculnya gangguan tumbuh kembang pada si kecil.

Lalu apa saja gangguan yang bisa di derita si kecil dari gejala tersebut? Catat ya Sahabat MIKA, si kecil bisa terkena gangguan berbahasa ekspresif dan reseptif, disabilitas intelektual, gangguan perkembangan koordinasi, ADHD, serta autisme.

Jika si kecil mengalami hal itu, segera periksakan ke bagian rehabilitasi medis seperti yang dilakukan Jessy ya. Supaya Ayah dan Bunda bisa mengerti apa yang dikatakan si kecil.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/15_6_mamah-dedeh_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/15_6_mamah-dedeh_jpg" alt="Foto testimoni dari Mamah Dedeh"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            "Pelayanan sangat responsif, ramah, dan memuaskan. Dengan sarana yang lengkap, ditunjang tenaga profesional, serta lingkungan yang bersih, resik, dan nyaman."
                                            - Mamah Dedeh

                                            Terima kasih kepada Ibu Dedeh Rosyidah atau yang lebih akrab disapa Mamah Dedeh atas apresiasinya untuk pelayanan di TokoLegalitas.com. Beberapa waktu lalu, pendakwah yang terkenal lewat acara “Mamah dan Aa” ini dirawat di TokoLegalitas.com Depok.

                                            Semoga lekas sembuh ya, Mah. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Mamah Dedeh" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/15_6_mamah-dedeh_jpg" data-nama="Testimonial Mamah Dedeh" data-spesialis="" data-text='"Pelayanan sangat responsif, ramah, dan memuaskan. Dengan sarana yang lengkap, ditunjang tenaga profesional, serta lingkungan yang bersih, resik, dan nyaman."
- Mamah Dedeh

Terima kasih kepada Ibu Dedeh Rosyidah atau yang lebih akrab disapa Mamah Dedeh atas apresiasinya untuk pelayanan di TokoLegalitas.com. Beberapa waktu lalu, pendakwah yang terkenal lewat acara “Mamah dan Aa” ini dirawat di TokoLegalitas.com Depok.

Semoga lekas sembuh ya, Mah.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/16_62_ny-widyawati_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/16_62_ny-widyawati_jpg" alt="Foto testimoni dari Ny. Widyawati"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Terima kasih kepada ibu Widyawati yang sudah mempercayakan pemeriksaan kondisi kesehatan kepada dr. Okki Ramadian di TokoLegalitas.com Bintaro.

                                            Memeriksakan kondisi kesehatan sangatlah penting untuk dilakukan. Hal itu bisa menjadi salah satu cara untuk mendeteksi penyakit yang ada di tubuh Anda sejak dini. Mari lakukan pemeriksaan secara berkala untuk hidup yang lebih sehat dan berkualitas.

                                            Sebelum terlambat, cek kondisi kesehatan Anda mulai dari sekarang, yuk! </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Widyawati" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/16_62_ny-widyawati_jpg" data-nama="Testimonial Ny. Widyawati" data-spesialis="" data-text='Terima kasih kepada ibu Widyawati yang sudah mempercayakan pemeriksaan kondisi kesehatan kepada dr. Okki Ramadian di TokoLegalitas.com Bintaro.

Memeriksakan kondisi kesehatan sangatlah penting untuk dilakukan. Hal itu bisa menjadi salah satu cara untuk mendeteksi penyakit yang ada di tubuh Anda sejak dini. Mari lakukan pemeriksaan secara berkala untuk hidup yang lebih sehat dan berkualitas.

Sebelum terlambat, cek kondisi kesehatan Anda mulai dari sekarang, yuk!'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/17_93_tn-fadil-anandawarman-dan-ny-tania-adlina-ranti_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/17_93_tn-fadil-anandawarman-dan-ny-tania-adlina-ranti_jpg" alt="Foto testimoni dari Tn. Fadil Anandawarman dan Ny. Tania Adlina Ranti"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Selamat datang Kiandra Irdina Fata!

                                            Bayi mungil ini adalah putra kedua dari keluarga Bapak Fadil Anandawarman dan Ibu Tania Adlina Ranti. Kiandra merupakan bayi pertama yang lahir di TokoLegalitas.com Bintaro.

                                            Kami ucapkan terima kasih atas kepercayaan yang diberikan kepada TokoLegalitas.com Bintaro sebagai penyedia layanan kesehatan Anda dan keluarga.

                                            Selamat sekali lagi! </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Fadil Anandawarman dan Ny. Tania Adlina Ranti" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/17_93_tn-fadil-anandawarman-dan-ny-tania-adlina-ranti_jpg" data-nama="Testimonial Tn. Fadil Anandawarman dan Ny. Tania Adlina Ranti" data-spesialis="" data-text='Selamat datang Kiandra Irdina Fata!

Bayi mungil ini adalah putra kedua dari keluarga Bapak Fadil Anandawarman dan Ibu Tania Adlina Ranti. Kiandra merupakan bayi pertama yang lahir di TokoLegalitas.com Bintaro.

Kami ucapkan terima kasih atas kepercayaan yang diberikan kepada TokoLegalitas.com Bintaro sebagai penyedia layanan kesehatan Anda dan keluarga.

Selamat sekali lagi!'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/18_45_tn-m-slamet-riadi_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/18_45_tn-m-slamet-riadi_jpg" alt="Foto testimoni dari Tn. M. Slamet Riadi"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            "Saya merasa puas dengan pelayanan TokoLegalitas.com Tegal, khususnya dr. Herry Santoso, Sp.OT (K)."

                                            - Bapak M. Slamet Riadi, Pasien dr. Herry Santoso, Sp.OT (K)

                                            Terima kasih kepada Bapak M. Slamet Riadi yang telah mempercayakan kesehatannya kepada TokoLegalitas.com Tegal. Beliau merupakan pasien dari dr. Herry Santoso, SpOT (K).

                                            Pelayanan yang ramah dan penanganan yang bagus di TokoLegalitas.com Tegal membuatnya sangat puas dan senang bisa ditangani oleh dokter profesional.

                                            Kalau Sahabat MIKA, siapa dokter TokoLegalitas.com yang paling berkesan bagi Anda? </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. M. Slamet Riadi" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/18_45_tn-m-slamet-riadi_jpg" data-nama="Testimonial Tn. M. Slamet Riadi" data-spesialis="" data-text='"Saya merasa puas dengan pelayanan TokoLegalitas.com Tegal, khususnya dr. Herry Santoso, Sp.OT (K)." 

- Bapak M. Slamet Riadi, Pasien dr. Herry Santoso, Sp.OT (K)

Terima kasih kepada Bapak M. Slamet Riadi yang telah mempercayakan kesehatannya kepada TokoLegalitas.com Tegal. Beliau merupakan pasien dari dr. Herry Santoso, SpOT (K).

Pelayanan yang ramah dan penanganan yang bagus di TokoLegalitas.com Tegal membuatnya sangat puas dan senang bisa ditangani oleh dokter profesional.

Kalau Sahabat MIKA, siapa dokter TokoLegalitas.com yang paling berkesan bagi Anda?'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/19_7_tn-auke-engel_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/19_7_tn-auke-engel_jpg" alt="Foto testimoni dari Tn. Auke Engel"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            "Pelayanan IGD TokoLegalitas.com Cibubur sangat responsif, dokter dan perawat sigap dalam menangani pasien."
                                            - Tn. Auke Engel, Pasien TokoLegalitas.com Cibubur

                                            Sahabat MIKA, Bila Anda mendadak sakit dan memerlukan pertolongan medis sesegera mungkin tentunya Anda akan mencari Nama Kantor dengan layanan yang Anda percayai. Hal inilah yang terjadi pada Tn. Auke Engel baru baru ini.

                                            Terima kasih Tn. Auke Engel yang sudah mempercayakan TokoLegalitas.com Cibubur untuk merawat kesehatannya. Semoga sehat selalu untuk Tn. Auke dan keluarga. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Auke Engel" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/19_7_tn-auke-engel_jpg" data-nama="Testimonial Tn. Auke Engel" data-spesialis="" data-text='"Pelayanan IGD TokoLegalitas.com Cibubur sangat responsif, dokter dan perawat sigap dalam menangani pasien."
- Tn. Auke Engel, Pasien TokoLegalitas.com Cibubur

Sahabat MIKA, Bila Anda mendadak sakit dan memerlukan pertolongan medis sesegera mungkin tentunya Anda akan mencari Nama Kantor dengan layanan yang Anda percayai. Hal inilah yang terjadi pada Tn. Auke Engel baru baru ini.

Terima kasih Tn. Auke Engel yang sudah mempercayakan TokoLegalitas.com Cibubur untuk merawat kesehatannya. Semoga sehat selalu untuk Tn. Auke dan keluarga.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/20_78_ny-beby-prisillia-gustiansyah_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/20_78_ny-beby-prisillia-gustiansyah_jpg" alt="Foto testimoni dari Ny. Beby Prisillia Gustiansyah"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            "Nama Kantor Nyaman dari awal kontrol disini, Dokternya juga sangat membantu dan selalu seru tiap kali kontrol. Kamarnya nyaman, semua suster sangat ramah dan sangat membantu juga, aku dan babynya sangat nyaman."

                                            - Ny. Beby Prisillia Gustiansyah, Pasien TokoLegalitas.com Depok

                                            Semoga sehat selalu untuk Ny. Beby Prisillia Gustiansyah dan bayi pertamanya. Terima kasih untuk kepercayaannya memilih TokoLegalitas.com Depok dalam melayani proses persalinan Anda. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Beby Prisillia Gustiansyah" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/20_78_ny-beby-prisillia-gustiansyah_jpg" data-nama="Testimonial Ny. Beby Prisillia Gustiansyah" data-spesialis="" data-text='"Nama Kantor Nyaman dari awal kontrol disini, Dokternya juga sangat membantu dan selalu seru tiap kali kontrol. Kamarnya nyaman, semua suster sangat ramah dan sangat membantu juga, aku dan babynya sangat nyaman."

- Ny. Beby Prisillia Gustiansyah, Pasien TokoLegalitas.com Depok

Semoga sehat selalu untuk Ny. Beby Prisillia Gustiansyah dan bayi pertamanya. Terima kasih untuk kepercayaannya memilih TokoLegalitas.com Depok dalam melayani proses persalinan Anda.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/21_1_tn-rissa-yaniar_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/21_1_tn-rissa-yaniar_jpg" alt="Foto testimoni dari Tn. Rissa Yaniar"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            "Selain dekat dengan rumah, dokter dan suster di sini baik dan ramah sehingga sudah seperti keluarga sendiri."
                                            - Tn. Rissa Yaniar, Pasien TokoLegalitas.com Cibubur

                                            Tahukah Sahabat MIKA, hemodialisa sangat dianjurkan untuk dilakukan ketika fungsi ginjal sudah rusak dan tidak mampu bekerja dengan seharusnya? Tepatnya, saat ginjal Anda sudah tidak mampu membersihkan darah dari zat yang tidak diperlukan oleh tubuh.

                                            Dengan hemodialisa, darah Anda akan disaring sama seperti cara kerja ginjal dalam menyaring zat yang tidak diperlukan tubuh yaitu urea dan kelebihan garam. Oleh karena itu, hemodialisa disebut juga sebagai ginjal buatan.

                                            Nah, para pasien penyakit ginjal sangat disarankan untuk rutin melakukan hemodialisa seperti Bapak Rissa Yanuar. Ia merupakan pasien yang rutin melakukan hemodialisa di TokoLegalitas.com Cibubur.

                                            Semoga lekas sembuah ya Pak Rissa Yanuar. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Rissa Yaniar" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/21_1_tn-rissa-yaniar_jpg" data-nama="Testimonial Tn. Rissa Yaniar" data-spesialis="" data-text='"Selain dekat dengan rumah, dokter dan suster di sini baik dan ramah sehingga sudah seperti keluarga sendiri."
- Tn. Rissa Yaniar, Pasien TokoLegalitas.com Cibubur

Tahukah Sahabat MIKA, hemodialisa sangat dianjurkan untuk dilakukan ketika fungsi ginjal sudah rusak dan tidak mampu bekerja dengan seharusnya? Tepatnya, saat ginjal Anda sudah tidak mampu membersihkan darah dari zat yang tidak diperlukan oleh tubuh.

Dengan hemodialisa, darah Anda akan disaring sama seperti cara kerja ginjal dalam menyaring zat yang tidak diperlukan tubuh yaitu urea dan kelebihan garam. Oleh karena itu, hemodialisa disebut juga sebagai ginjal buatan.

Nah, para pasien penyakit ginjal sangat disarankan untuk rutin melakukan hemodialisa seperti Bapak Rissa Yanuar. Ia merupakan pasien yang rutin melakukan hemodialisa di TokoLegalitas.com Cibubur.

Semoga lekas sembuah ya Pak Rissa Yanuar.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/22_50_tn-rachmat-harys-tn-herry-purwanto_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/22_50_tn-rachmat-harys-tn-herry-purwanto_jpg" alt="Foto testimoni dari Tn. Rachmat Harys & Tn. Herry Purwanto"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            "Terima kasih kepada TokoLegalitas.com Depok, tim Dokter, perawat HD dan semua pihak yang ikut memberikan pelayanan kesehatan. Memberikan semangat dan motivasi sehingga kami tetap semangat untuk sehat dan pulih kembali, salam, sehat selalu."

                                            - Tn. Rachmat Harys & Herry Purwanto, Pasien TokoLegalitas.com Depok

                                            Menjadi pasien rutin cuci darah memang tidak mudah. Sebab, menghadapi penyakit yang membutuhkan dukungan dari berbagai pihak seperti cuci darah sangatlah berat Sahabat MIKA.

                                            Itulah yang dirasakan oleh Bapak Rachmat Harys (67 tahun) dan Bapak Herry Purwanto (53 tahun) yang rutin melakukan cuci darah di TokoLegalitas.com Depok.

                                            Menurut mereka, seluruh staf di TokoLegalitas.com Depok sudah seperti keluarga sendiri karena selain memberikan pelayanan kesehatan, mereka juga turut membantu, memotivasi, dan memberi semangat untuk pulih kembali.

                                            Cepat sembuh ya Pak Rachmat dan Pak Herry! </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Rachmat Harys & Tn. Herry Purwanto" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/22_50_tn-rachmat-harys-tn-herry-purwanto_jpg" data-nama="Testimonial Tn. Rachmat Harys & Tn. Herry Purwanto" data-spesialis="" data-text='"Terima kasih kepada TokoLegalitas.com Depok, tim Dokter, perawat HD dan semua pihak yang ikut memberikan pelayanan kesehatan. Memberikan semangat dan motivasi sehingga kami tetap semangat untuk sehat dan pulih kembali, salam, sehat selalu."

- Tn. Rachmat Harys & Herry Purwanto, Pasien TokoLegalitas.com Depok

Menjadi pasien rutin cuci darah memang tidak mudah. Sebab, menghadapi penyakit yang membutuhkan dukungan dari berbagai pihak seperti cuci darah sangatlah berat Sahabat MIKA.

Itulah yang dirasakan oleh Bapak Rachmat Harys (67 tahun) dan Bapak Herry Purwanto (53 tahun) yang rutin melakukan cuci darah di TokoLegalitas.com Depok.

Menurut mereka, seluruh staf di TokoLegalitas.com Depok sudah seperti keluarga sendiri karena selain memberikan pelayanan kesehatan, mereka juga turut membantu, memotivasi, dan memberi semangat untuk pulih kembali.

Cepat sembuh ya Pak Rachmat dan Pak Herry!'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/23_59_ny-fitri-carlina_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/23_59_ny-fitri-carlina_jpg" alt="Foto testimoni dari Ny. Fitri Carlina"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            "Terima kasih banyak TokoLegalitas.com Cibubur dan dr. Ferdinand Andy, Sp. PD yang sudah merawat aku selama 5 hari ini."

                                            - Ny. Fitri Carlina, Pasien TokoLegalitas.com Cibubur

                                            Terima kasih banyak kepada Ibu Fitri Carlina yang telah memilih TokoLegalitas.com Cibubur untuk mengecek kondisi kesehatannya.

                                            Semoga lekas sembuh agar bisa kembali beraktivitas! </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Fitri Carlina" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/23_59_ny-fitri-carlina_jpg" data-nama="Testimonial Ny. Fitri Carlina" data-spesialis="" data-text='"Terima kasih banyak TokoLegalitas.com Cibubur dan dr. Ferdinand Andy, Sp. PD yang sudah merawat aku selama 5 hari ini."

- Ny. Fitri Carlina, Pasien TokoLegalitas.com Cibubur

Terima kasih banyak kepada Ibu Fitri Carlina yang telah memilih TokoLegalitas.com Cibubur untuk mengecek kondisi kesehatannya. 

Semoga lekas sembuh agar bisa kembali beraktivitas!'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/24_54_tn-bambang_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/24_54_tn-bambang_jpg" alt="Foto testimoni dari Tn. Bambang"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Bapak Bambang adalah pasien TokoLegalitas.com yang telah mempercayakan terapi Tens dan latihan di Rehabilitasi Medik TokoLegalitas.com Cibubur. Dengan melakukan perawatan di TokoLegalitas.com, bapak Bambang mengungkapkan bahwa rasa nyerinya sudah jauh berkurang.

                                            Terima kasih Bapak Bambang atas kepercayaan yang diberikan kepada TokoLegalitas.com Cibubur sebagai penyedia layanan kesehatan anda dan keluarga. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Bambang" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/24_54_tn-bambang_jpg" data-nama="Testimonial Tn. Bambang" data-spesialis="" data-text='Bapak Bambang adalah pasien TokoLegalitas.com yang telah mempercayakan terapi Tens dan latihan di Rehabilitasi Medik TokoLegalitas.com Cibubur. Dengan melakukan perawatan di TokoLegalitas.com, bapak Bambang mengungkapkan bahwa rasa nyerinya sudah jauh berkurang.

Terima kasih Bapak Bambang atas kepercayaan yang diberikan kepada TokoLegalitas.com Cibubur sebagai penyedia layanan kesehatan anda dan keluarga.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/25_90_ny-yunnyta-tjong_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/25_90_ny-yunnyta-tjong_jpg" alt="Foto testimoni dari Ny. Yunnyta Tjong"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Selamat dan terima kasih kepada Ibu Yunnyta Tjong yang mempercayakan TokoLegalitas.com Kelapa Gading sebagai partner selama proses persalinan putra pertama Anda.
                                            Semoga sehat dan bahagia selalu untuk Ibu Yunnyta dan keluarga. :) </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Yunnyta Tjong" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/25_90_ny-yunnyta-tjong_jpg" data-nama="Testimonial Ny. Yunnyta Tjong" data-spesialis="" data-text='Selamat dan terima kasih kepada Ibu Yunnyta Tjong yang mempercayakan TokoLegalitas.com Kelapa Gading sebagai partner selama proses persalinan putra pertama Anda.
Semoga sehat dan bahagia selalu untuk Ibu Yunnyta dan keluarga. :)'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/26_26_tn-padji_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/26_26_tn-padji_jpg" alt="Foto testimoni dari Tn. Padji"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Di TokoLegalitas.com Kemayoran, Anda bisa melakukan Sleep Test untuk menganalisa kebutuhan tertentu pada kesehatan Anda.

                                            Seperti yang dilakukan Mas @pandji.pragiwaksono 13 Oktober 2019 lalu. Mas Padji melakukan rangkaian sleep test setelah berkonsultasi dengan @dokterprasadja tentang Sleep Apnea.

                                            Apakah ada dari Sahabat MIKA yang mengalami keluhan serupa? Silakan kunjungi kami atau kontak nomor telepon TokoLegalitas.com terdekat yaa.. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Padji" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/26_26_tn-padji_jpg" data-nama="Testimonial Tn. Padji" data-spesialis="" data-text='Di TokoLegalitas.com Kemayoran, Anda bisa melakukan Sleep Test untuk menganalisa kebutuhan tertentu pada kesehatan Anda.

Seperti yang dilakukan Mas @pandji.pragiwaksono 13 Oktober 2019 lalu. Mas Padji melakukan rangkaian sleep test setelah berkonsultasi dengan @dokterprasadja tentang Sleep Apnea.

Apakah ada dari Sahabat MIKA yang mengalami keluhan serupa? Silakan kunjungi kami atau kontak nomor telepon TokoLegalitas.com terdekat yaa..'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/27_3_ny-yulia_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/27_3_ny-yulia_jpg" alt="Foto testimoni dari Ny. Yulia"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            TokoLegalitas.com mengucapkan banyak terima kasih untuk Ibu Yulia yang sudah mempercayakan dr. Putri Anugrah Rizki, Sp.THT-KL di TokoLegalitas.com Bintaro. Semoga Ibu Yulia dan keluarga sehat serta bahagia selalu. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Yulia" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/27_3_ny-yulia_jpg" data-nama="Testimonial Ny. Yulia" data-spesialis="" data-text='TokoLegalitas.com mengucapkan banyak terima kasih untuk Ibu Yulia yang sudah mempercayakan dr. Putri Anugrah Rizki, Sp.THT-KL di TokoLegalitas.com Bintaro. Semoga Ibu Yulia dan keluarga sehat serta bahagia selalu.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/28_96_ibu-mas-ah_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/28_96_ibu-mas-ah_png" alt="Foto testimoni dari Ny. Mas'ah"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Layaknya keluarga yang selalu menemani, TokoLegalitas.com juga akan selalu ada jika dibutuhkan.
                                            Hal ini yang dialami Ananda dari Ibu Mas'ah yang telah mempercayakan TokoLegalitas.com Pratama Jatiasih sebagai penyedia layanan kesehatan Ibunda tercinta.
                                            Sehat selalu ya Ibu Mas'ah, Apakah Sahabat MIKA punya cerita serupa? Share di kolom komentar yuk.

                                            #MitraKeluarga #MitraKeluargaKu #SahabatMIKA #MyMIKA #testimoniMIKA #Life #Love #Laughter #MitraKeluargaPratamaJatiasih </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Mas'ah" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/28_96_ibu-mas-ah_png" data-nama="Testimonial Ny. Mas'ah" data-spesialis="" data-text='Layaknya keluarga yang selalu menemani, TokoLegalitas.com juga akan selalu ada jika dibutuhkan.
Hal ini yang dialami Ananda dari Ibu Mas' ah yang telah mempercayakan TokoLegalitas.com Pratama Jatiasih sebagai penyedia layanan kesehatan Ibunda tercinta. Sehat selalu ya Ibu Mas'ah, Apakah Sahabat MIKA punya cerita serupa? Share di kolom komentar yuk. #MitraKeluarga #MitraKeluargaKu #SahabatMIKA #MyMIKA #testimoniMIKA #Life #Love #Laughter #MitraKeluargaPratamaJatiasih'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/29_57_ny-farida_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/29_57_ny-farida_png" alt="Foto testimoni dari Ny. Farida"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Terima kasih banyak kepada Ny. Farida Saleh yang selalu mempercayakan perawatan kesehatan di TokoLegalitas.com Depok.
                                            Semoga selalu dalam keadaan sehat dan prima untuk Anda dan keluarga.

                                            TokoLegalitas.com akan terus meningkatkan pelayanan untuk Anda dan semua Sahabat MIKA.

                                            #MitraKeluarga #MitraKeluargaku #SahabatMIKA #Life #Love #Laughter #MyMIKA #TestimoniMIKA #MIKADepok </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Farida" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/29_57_ny-farida_png" data-nama="Testimonial Ny. Farida" data-spesialis="" data-text='Terima kasih banyak kepada Ny. Farida Saleh yang selalu mempercayakan perawatan kesehatan di TokoLegalitas.com Depok.
Semoga selalu dalam keadaan sehat dan prima untuk Anda dan keluarga.

TokoLegalitas.com akan terus meningkatkan pelayanan untuk Anda dan semua Sahabat MIKA.

#MitraKeluarga #MitraKeluargaku #SahabatMIKA #Life #Love #Laughter #MyMIKA #TestimoniMIKA #MIKADepok'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/30_28_ny-ananda_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/30_28_ny-ananda_png" alt="Foto testimoni dari Ny. Ananda"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            TokoLegalitas.com turut berbahagia atas kelahiran bayi kembar 3 dari Ny. Ananda.
                                            Terima kasih atas kepercayaan yang diberikan kepada TokoLegalitas.com <?= ucfirst($rs) ?> dalam menangani proses persalinan Anda.
                                            Semoga ketiga buah hati selalu sehat dalam tumbuh kembangnya.

                                            #MitraKeluarga #MitraKeluargaku #SahabatMIKA #Life #Love #Laughter #MyMIKA #TestimoniMIKA #MIKABekasiTimur </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Ananda" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/30_28_ny-ananda_png" data-nama="Testimonial Ny. Ananda" data-spesialis="" data-text='TokoLegalitas.com turut berbahagia atas kelahiran bayi kembar 3 dari Ny. Ananda.
Terima kasih atas kepercayaan yang diberikan kepada TokoLegalitas.com <?= ucfirst($rs) ?> dalam menangani proses persalinan Anda.
Semoga ketiga buah hati selalu sehat dalam tumbuh kembangnya.

#MitraKeluarga #MitraKeluargaku #SahabatMIKA #Life #Love #Laughter #MyMIKA #TestimoniMIKA #MIKABekasiTimur'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/31_3_ny-nanih-bt-nibin_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/31_3_ny-nanih-bt-nibin_png" alt="Foto testimoni dari Ny. Nanih BT Nibin"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Terima kasih banyak kepada Ny. Nanih BT Nibin yang selalu mempercayakan perawatan kesehatan di TokoLegalitas.com Cikarang.
                                            Semoga selalu dalam keadaan sehat dan prima untuk Anda dan keluarga.

                                            TokoLegalitas.com akan terus meningkatkan pelayanan untuk Anda dan semua Sahabat MIKA.

                                            #MitraKeluarga #MitraKeluargaku #SahabatMIKA #Life #Love #Laughter #MyMIKA #TestimoniMIKA #MIKACikarang </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Nanih BT Nibin" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/31_3_ny-nanih-bt-nibin_png" data-nama="Testimonial Ny. Nanih BT Nibin" data-spesialis="" data-text='Terima kasih banyak kepada Ny. Nanih BT Nibin yang selalu mempercayakan perawatan kesehatan di TokoLegalitas.com Cikarang.
Semoga selalu dalam keadaan sehat dan prima untuk Anda dan keluarga.

TokoLegalitas.com akan terus meningkatkan pelayanan untuk Anda dan semua Sahabat MIKA.

#MitraKeluarga #MitraKeluargaku #SahabatMIKA #Life #Love #Laughter #MyMIKA #TestimoniMIKA #MIKACikarang'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/32_80_ny-eriska_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/32_80_ny-eriska_png" alt="Foto testimoni dari Ny Eriska"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            TokoLegalitas.com mengucapkan terima kasih banyak kepada Ny. Eriska dan keluarga yang mempercayakan kinerja TokoLegalitas.com Cibubur selama proses persalinan.

                                            Senyum kebahagiaan Anda dan keluarga menjadi semangat kami untuk melayani Sahabat MIKA lebih baik lagi. Semoga sehat dan berbahagia selalu untuk Ny. Eriska beserta keluarga.

                                            #MitraKeluarga #MitraKeluargaku #SahabatMIKA #Life #Love #Laughter #MyMIKA #TestimoniMIKA #MIKACibubur </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny Eriska" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/32_80_ny-eriska_png" data-nama="Testimonial Ny Eriska" data-spesialis="" data-text='TokoLegalitas.com mengucapkan terima kasih banyak kepada Ny. Eriska dan keluarga yang mempercayakan kinerja TokoLegalitas.com Cibubur selama proses persalinan.

Senyum kebahagiaan Anda dan keluarga menjadi semangat kami untuk melayani Sahabat MIKA lebih baik lagi. Semoga sehat dan berbahagia selalu untuk Ny. Eriska beserta keluarga.

#MitraKeluarga #MitraKeluargaku #SahabatMIKA #Life #Love #Laughter #MyMIKA #TestimoniMIKA #MIKACibubur'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/33_94_tn-raihan-khan_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/33_94_tn-raihan-khan_png" alt="Foto testimoni dari Tn. Raihan Khan"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Hari ini kami mendapat kunjungan dari @Raihankhan26 untuk memeriksakan kesehatannya di TokoLegalitas.com Depok.

                                            Terima kasih karena sudah berkunjung, tidak khawatir dan tetap mempercayakan TokoLegalitas.com Depok sebagai mitra kesehatan Anda.

                                            Salam hangat untuk Raihankhan dan keluarga, juga untuk Anda semua Sahabat MIKA.

                                            #MitraKeluarga #MitraKeluargaKu #SahabatMIKA #MitraKeluargaDepok #Life #Love #Laughter #MIKADepokAman </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Raihan Khan" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/33_94_tn-raihan-khan_png" data-nama="Testimonial Tn. Raihan Khan" data-spesialis="" data-text='Hari ini kami mendapat kunjungan dari @Raihankhan26 untuk memeriksakan kesehatannya di TokoLegalitas.com Depok.

Terima kasih karena sudah berkunjung, tidak khawatir dan tetap mempercayakan TokoLegalitas.com Depok sebagai mitra kesehatan Anda.

Salam hangat untuk Raihankhan dan keluarga, juga untuk Anda semua Sahabat MIKA.

#MitraKeluarga #MitraKeluargaKu #SahabatMIKA #MitraKeluargaDepok #Life #Love #Laughter #MIKADepokAman'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/34_70_ny-maya_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/34_70_ny-maya_png" alt="Foto testimoni dari Ny. Maya"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Hai sahabat MIKA, bagaimana kabarnya hari ini?
                                            Kami mengucapkan terimakasih atas kepercayaan sahabat MIKA kepada TokoLegalitas.com, yang telah secara bijaksana menyikapi Virus Corona, tanpa kekhawatiran yang berlebihan.

                                            Kami selalu mengharapkan yang terbaik untuk kesehatan sahabat MIKA dan keluarga.

                                            Waspada harus, Takut berlebihan jangan.

                                            #MitraKeluarga #MitraKeluargaKu #SahabatMIKA #MitraKeluargaDepok #Life #Love #Laughter #MIKADepokAMAN #cegahcorona </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Maya" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/34_70_ny-maya_png" data-nama="Testimonial Ny. Maya" data-spesialis="" data-text='Hai sahabat MIKA, bagaimana kabarnya hari ini?
Kami mengucapkan terimakasih atas kepercayaan sahabat MIKA kepada TokoLegalitas.com, yang telah secara bijaksana menyikapi Virus Corona, tanpa kekhawatiran yang berlebihan.

Kami selalu mengharapkan yang terbaik untuk kesehatan sahabat MIKA dan keluarga.

Waspada harus, Takut berlebihan jangan.

#MitraKeluarga #MitraKeluargaKu #SahabatMIKA #MitraKeluargaDepok #Life #Love #Laughter #MIKADepokAMAN #cegahcorona'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/35_1_tn-fenny_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/35_1_tn-fenny_jpg" alt="Foto testimoni dari Tn. Fenny"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Terimakasih kepada Bapak Fenny Basuki dari Jagakarsa yang sudah mempercayai TokoLegalitas.com Depok dalam melayani proses kesembuhan anandanya, Sheryl Kimberly.

                                            TokoLegalitas.com selalu berusaha memberikan layanan profesional penuh kasih sayang selayaknya keluarga Anda.

                                            Semoga Anda dan keluarga sehat selalu ya, Sahabat MIKA.

                                            #MitraKeluarga #MitraKeluargaKu #MyMIKA #SahabatMIKA #MitraKeluargaDepok #Life #Love #Laughter #cegahcorona #covid19 </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Fenny" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/35_1_tn-fenny_jpg" data-nama="Testimonial Tn. Fenny" data-spesialis="" data-text='Terimakasih kepada Bapak Fenny Basuki dari Jagakarsa yang sudah mempercayai TokoLegalitas.com Depok dalam melayani proses kesembuhan anandanya, Sheryl Kimberly.

TokoLegalitas.com selalu berusaha memberikan layanan profesional penuh kasih sayang selayaknya keluarga Anda.

Semoga Anda dan keluarga sehat selalu ya, Sahabat MIKA.

#MitraKeluarga #MitraKeluargaKu #MyMIKA #SahabatMIKA #MitraKeluargaDepok #Life #Love #Laughter #cegahcorona #covid19'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/36_100_tn-primo-thoriq_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/36_100_tn-primo-thoriq_png" alt="Foto testimoni dari Tn. Primo Thoriq"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            TokoLegalitas.com selalu berusaha sebaik mungkin untuk melayani Anda dalam masa penyembuhan.

                                            Terimakasih untuk Primo Thoriq Qodri dan keluarga yang mempercayakan TokoLegalitas.com Bintaro sebagai rekan kesehatan Anda. Semoga sehat selalu, ya.

                                            #MitraKeluarga #MyMIKA #MitraKeluargaKu #Love #Life #Laughter #MitraKeluargaBintaro #TestimoniMIKA </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Primo Thoriq" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/36_100_tn-primo-thoriq_png" data-nama="Testimonial Tn. Primo Thoriq" data-spesialis="" data-text='TokoLegalitas.com selalu berusaha sebaik mungkin untuk melayani Anda dalam masa penyembuhan.

Terimakasih untuk Primo Thoriq Qodri dan keluarga yang mempercayakan TokoLegalitas.com Bintaro sebagai rekan kesehatan Anda. Semoga sehat selalu, ya.

#MitraKeluarga #MyMIKA #MitraKeluargaKu #Love #Life #Laughter #MitraKeluargaBintaro #TestimoniMIKA'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/37_43_ny-wina_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/37_43_ny-wina_png" alt="Foto testimoni dari Ny. Wina"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            TokoLegalitas.com mengucapkan banyak terimakasih kepada Ibu Wina dan Bapak Anji (Drive), orangtua Ananda Sigra atas kepercayaannya kepada TokoLegalitas.com Cibubur sebagai mitra kesehatan Anda.

                                            Semoga sehat dan bahagia selalu untuk Ananda Sigra dan Keluarga.

                                            #MitraKeluarga #MyMIKA #Love #Life #Laughter #MitraKeluargaCibubur #rawatinap #MitraKeluargaku </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Wina" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/37_43_ny-wina_png" data-nama="Testimonial Ny. Wina" data-spesialis="" data-text='TokoLegalitas.com mengucapkan banyak terimakasih kepada Ibu Wina dan Bapak Anji (Drive), orangtua Ananda Sigra atas kepercayaannya kepada TokoLegalitas.com Cibubur sebagai mitra kesehatan Anda.

Semoga sehat dan bahagia selalu untuk Ananda Sigra dan Keluarga.

#MitraKeluarga #MyMIKA #Love #Life #Laughter #MitraKeluargaCibubur #rawatinap #MitraKeluargaku'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/38_33_ny-nur-laili-indah_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/38_33_ny-nur-laili-indah_png" alt="Foto testimoni dari Ny. Nur Laili Indah"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            TokoLegalitas.com Waru mengucapkan terima kasih
                                            sebanyak-banyaknya kepada Ibu Nur Laili Indah yang sudah
                                            mempercayai kami dalam membantu prosesi kelahiran buah
                                            hatinya.

                                            Kami selalu berusaha melayani Anda dengan sepenuh hati,
                                            karena senyuman Anda adalah kepuasan kami. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Nur Laili Indah" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/38_33_ny-nur-laili-indah_png" data-nama="Testimonial Ny. Nur Laili Indah" data-spesialis="" data-text='TokoLegalitas.com Waru mengucapkan terima kasih
sebanyak-banyaknya kepada Ibu Nur Laili Indah yang sudah
mempercayai kami dalam membantu prosesi kelahiran buah
hatinya.

Kami selalu berusaha melayani Anda dengan sepenuh hati,
karena senyuman Anda adalah kepuasan kami.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/39_11_ny-dewi-irawati_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/39_11_ny-dewi-irawati_png" alt="Foto testimoni dari Ny. Dewi Irawati"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            "Terimakasih TokoLegalitas.com Tegal atas fasilitas kesehatan yang prima. Teruslah “menyentuh” banyak keluarga & menjadi TokoLegalitas.com di muka bumi. Salam life.love.laughter!"

                                            Terima kasih banyak kepada Ny. Dewi Irawati yang selalu mempercayakan perawatan kesehatan di TokoLegalitas.com Tegal.
                                            Semoga selalu dalam keadaan sehat dan prima untuk Anda dan keluarga.
                                            TokoLegalitas.com akan terus meningkatkan pelayanan untuk Anda dan semua Sahabat MIKA.

                                            #MitraKeluarga #MitraKeluargaKu #MitraKeluargaTegal #SahabatMIKA #Life #Love #Laughter #myMIKA </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Dewi Irawati" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/39_11_ny-dewi-irawati_png" data-nama="Testimonial Ny. Dewi Irawati" data-spesialis="" data-text='"Terimakasih TokoLegalitas.com Tegal atas fasilitas kesehatan yang prima. Teruslah “menyentuh” banyak keluarga & menjadi TokoLegalitas.com di muka bumi. Salam life.love.laughter!"

Terima kasih banyak kepada Ny. Dewi Irawati yang selalu mempercayakan perawatan kesehatan di TokoLegalitas.com Tegal.
Semoga selalu dalam keadaan sehat dan prima untuk Anda dan keluarga.
TokoLegalitas.com akan terus meningkatkan pelayanan untuk Anda dan semua Sahabat MIKA.

#MitraKeluarga #MitraKeluargaKu #MitraKeluargaTegal #SahabatMIKA #Life #Love #Laughter #myMIKA'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/40_2_tn-donny-heika-sarjono_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/40_2_tn-donny-heika-sarjono_png" alt="Foto testimoni dari Tn. Donny Heika Sarjono"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Terima kasih kepada Bapak Donny Heika Sarjono telah berbagi kesan berkonsultasi dengan dr. Andreas Prasadja, RPSGT dan pengalamannya merasakan prosedur sleep test di TokoLegalitas.com Kemayoran.

                                            Sahabat MIKA, banyak ciri dan gejala dalam kehidupan sehari-hari yang tidak kita sadari ternyata mengarah pada penyakit gangguan tidur. Jika dibiarkan, hal tersebut akan menurunkan kualitas tidur dan dapat berdampak pada produktivitas kita. Untuk itu, perlu kesadaran diri untuk mengecek dan berkonsultasi ke dokter ahli jika sudah merasakan ketidaknyaman ya, Sahabat MIKA.

                                            Jadi, bagaimana dengan kualitas tidur Anda, Sahabat MIKA?

                                            #MitraKeluarga #MitraKeluargaKu #MyMIKA #SahabatMIKA #Life #Love #Laughter </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Donny Heika Sarjono" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/40_2_tn-donny-heika-sarjono_png" data-nama="Testimonial Tn. Donny Heika Sarjono" data-spesialis="" data-text='Terima kasih kepada Bapak Donny Heika Sarjono telah berbagi kesan berkonsultasi dengan dr. Andreas Prasadja, RPSGT dan pengalamannya merasakan prosedur sleep test di TokoLegalitas.com Kemayoran. 

Sahabat MIKA, banyak ciri dan gejala dalam kehidupan sehari-hari yang tidak kita sadari ternyata mengarah pada penyakit gangguan tidur. Jika dibiarkan, hal tersebut akan menurunkan kualitas tidur dan dapat berdampak pada produktivitas kita. Untuk itu, perlu kesadaran diri untuk mengecek dan berkonsultasi ke dokter ahli jika sudah merasakan ketidaknyaman ya, Sahabat MIKA.

Jadi, bagaimana dengan kualitas tidur Anda, Sahabat MIKA?

#MitraKeluarga #MitraKeluargaKu #MyMIKA #SahabatMIKA #Life #Love #Laughter'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/41_95_tn-rudy_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/41_95_tn-rudy_png" alt="Foto testimoni dari Tn. Rudy"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Terima kasih Bapak Rudy yang sudah mau berbagi pengalaman istrinya yang pernah terkena Covid-19. Sungguh luar biasa perjuangannya melawan penyakit Covid-19.

                                            Sahabat MIKA, gejala Covid-19 awalnya memang tidak kita sadari dan kita anggap penyakit biasa. Namun perlu hati-hati dan waspada akan ciri-cirinya ya. Jika penyakit semakin parah dan tidak kunjung sembuh, segera periksakan diri ke pelayanan kesehatan terdekat Anda.

                                            #MitraKeluarga #MyMIKA #life #love #laughter #MitraKeluargaKelapaGading #Covid19 </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Tn. Rudy" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/41_95_tn-rudy_png" data-nama="Testimonial Tn. Rudy" data-spesialis="" data-text='Terima kasih Bapak Rudy yang sudah mau berbagi pengalaman istrinya yang pernah terkena Covid-19. Sungguh luar biasa perjuangannya melawan penyakit Covid-19. 

Sahabat MIKA, gejala Covid-19 awalnya memang tidak kita sadari dan kita anggap penyakit biasa. Namun perlu hati-hati dan waspada akan ciri-cirinya ya. Jika penyakit semakin parah dan tidak kunjung sembuh, segera periksakan diri ke pelayanan kesehatan terdekat Anda.

#MitraKeluarga #MyMIKA #life #love #laughter #MitraKeluargaKelapaGading #Covid19'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/42_84_sahabat-mika_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/42_84_sahabat-mika_png" alt="Foto testimoni dari Sahabat MIKA"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            TokoLegalitas.com mengucapkan banyak terima kasih kepada Sahabat MIKA yang sudah berkunjung dan memilih kami sebagai mitra kesehatan Anda dan keluarga.

                                            Dengan menerapkan segala protokol dan anjuran kesehatan, kami terus berusaha untuk melayani Anda dengan sebaik mungkin.

                                            Sahabat MIKA, tak perlu khawatir untuk mengunjungi TokoLegalitas.com, karena kami selalu siap melayani Anda.

                                            #MitraKeluarga #SahabatMIKA #MyMIKA #MitraKeluargaku #Life #Love #Laughter #testimoniMIKA </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Sahabat MIKA" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/42_84_sahabat-mika_png" data-nama="Testimonial Sahabat MIKA" data-spesialis="" data-text='TokoLegalitas.com mengucapkan banyak terima kasih kepada Sahabat MIKA yang sudah berkunjung dan memilih kami sebagai mitra kesehatan Anda dan keluarga.

Dengan menerapkan segala protokol dan anjuran kesehatan, kami terus berusaha untuk melayani Anda dengan sebaik mungkin.

Sahabat MIKA, tak perlu khawatir untuk mengunjungi TokoLegalitas.com, karena kami selalu siap melayani Anda.

#MitraKeluarga #SahabatMIKA #MyMIKA #MitraKeluargaku #Life #Love #Laughter #testimoniMIKA'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/43_33_ny-theresia-aurielle_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/43_33_ny-theresia-aurielle_jpg" alt="Foto testimoni dari Ny. Theresia Aurielle"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            "Sudah bertahun-tahun kami mempercayakan TokoLegalitas.com Tegal untuk masalah kesehatan keluarga kami, walaupun rumah kami jauh kurang lebih 45 km dari rumah ke TokoLegalitas.com Tegal, tetapi jarak bukan halangan untuk kami, karena pelayanannya bagus dan dari perawat dan dokter juga cepat tanggal. Sukses selalu TokoLegalitas.com Tegal." Ibu Pasien Theresia Aurielle </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Ny. Theresia Aurielle" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/43_33_ny-theresia-aurielle_jpg" data-nama="Testimonial Ny. Theresia Aurielle" data-spesialis="" data-text='"Sudah bertahun-tahun kami mempercayakan TokoLegalitas.com Tegal untuk masalah kesehatan keluarga kami, walaupun rumah kami jauh kurang lebih 45 km dari rumah ke TokoLegalitas.com Tegal, tetapi jarak bukan halangan untuk kami, karena pelayanannya bagus dan dari perawat dan dokter juga cepat tanggal. Sukses selalu TokoLegalitas.com Tegal." Ibu Pasien Theresia Aurielle'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/44_48_hesti-ariyani_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/44_48_hesti-ariyani_jpg" alt="Foto testimoni dari Hesti Ariyani"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Terima kasih kepada perawat dan dokter TokoLegalitas.com Tegal atas semua pelayanannya. Operasi saya berjalan lancar, perawat dan dokter cepat tanggap.Sukses selalu TokoLegalitas.com Tegal. Semoga TokoLegalitas.com Tegal selalu menjadi Nama Kantor yang terdepan di Kota Tegal dan sekitarnya. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Hesti Ariyani" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/44_48_hesti-ariyani_jpg" data-nama="Testimonial Hesti Ariyani" data-spesialis="" data-text='Terima kasih kepada perawat dan dokter TokoLegalitas.com Tegal atas semua pelayanannya. Operasi saya berjalan lancar, perawat dan dokter cepat tanggap.Sukses selalu TokoLegalitas.com Tegal. Semoga TokoLegalitas.com Tegal selalu menjadi Nama Kantor yang terdepan di Kota Tegal dan sekitarnya.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/45_57_khitan_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/45_57_khitan_jpg" alt="Foto testimoni dari KHITAN"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Kedua anak saya khitan di TokoLegalitas.com Tegal, ternyata khitan tidak lagi menyeramkan , dengan dukungan alat khitan berteknologi tinggi, yang didesain untuk menghasilkan khitan yang lebih aman, cepat dan canggih.
                                            Terima Kasih TokoLegalitas.com Tegal

                                            Nama Pasien
                                            1. M. Abror Altharafisqi
                                            2. M. Arkananta Abdusalam </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="KHITAN" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/45_57_khitan_jpg" data-nama="Testimonial KHITAN" data-spesialis="" data-text='Kedua anak saya khitan di TokoLegalitas.com Tegal, ternyata khitan tidak lagi menyeramkan , dengan dukungan alat khitan berteknologi tinggi, yang didesain untuk menghasilkan khitan yang lebih aman, cepat dan canggih.
Terima Kasih TokoLegalitas.com Tegal

Nama Pasien 
1. M. Abror Altharafisqi
2. M. Arkananta Abdusalam'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/46_31_ibu-mufarokhah-orang-tua-yasmine-amira_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/46_31_ibu-mufarokhah-orang-tua-yasmine-amira_jpg" alt="Foto testimoni dari IBU MUFAROKHAH - ORANG TUA YASMINE AMIRA"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Urusan kesehatan untuk keluarga kami adalah nomer satu, umtuk itu kami selalu mempercayakan urusan kesehatan keluarga kami dengan TokoLegalitas.com Tegal. Dari perawat , dokter dan pelayanan semua tanggap. Jangan pernah berhenti memberikan pelayanan yang terbaik untuk pasien - pasien yang ada di TokoLegalitas.com Tegal. </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="IBU MUFAROKHAH - ORANG TUA YASMINE AMIRA" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/46_31_ibu-mufarokhah-orang-tua-yasmine-amira_jpg" data-nama="Testimonial IBU MUFAROKHAH - ORANG TUA YASMINE AMIRA" data-spesialis="" data-text='Urusan kesehatan untuk keluarga kami adalah nomer satu, umtuk itu kami selalu mempercayakan urusan kesehatan keluarga kami dengan TokoLegalitas.com Tegal. Dari perawat , dokter dan pelayanan semua tanggap. Jangan pernah berhenti memberikan pelayanan yang terbaik untuk pasien - pasien yang ada di TokoLegalitas.com Tegal.'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/47_13_yovie-widianto_png" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/47_13_yovie-widianto_png" alt="Foto testimoni dari Yovie Widianto"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Sahabat MIKA, TokoLegalitas.com Cibubur senantiasa menghadirkan pelayanan kesehatan dengan kualitas unggul.
                                            Di masa pandemi ini, TokoLegalitas.com juga berkontribusi untuk pemeriksaan COVID-19 di Indonesia.
                                            Salah satu Sahabat MIKA kali ini berbagi pengalaman menjalani tes COVID-19 di TokoLegalitas.com Cibubur. Tes penting dilakukan untuk turut menjaga Sahabat MIKA, keluarga, dan teman juga loh!

                                            “Saya mengucapkan terima kasih buat TokoLegalitas.com Cibubur yang selalu menyediakan tes Swab untuk kami setiap kali kami berkegiatan yang mengharuskan bertemu kelompok berisiko tinggi.. Kami puas dengan pelayanan yang baik, sangat ramah dan sangat memudahkan kami. Semoga ini menjadi kerja sama yang baik antara kami dan TokoLegalitas.com Cibubur. Sehat terus Indonesia.” - Yovie Widianto (Pianis Yovie & Nuno)
                                            Kalau Sahabat MIKA, bagaimana pengalaman tesnya?

                                            Cek jadwal dan buat janji dengan mudah di www.mitrakeluarga.com/testcovid19
                                            #MitraKeluarga #MitraKeluargaKu #SahabatMIKA #MyMika #Life #Love #Laughter #yovienuno #covid19 #tescovid19 </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Yovie Widianto" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/47_13_yovie-widianto_png" data-nama="Testimonial Yovie Widianto" data-spesialis="" data-text='Sahabat MIKA, TokoLegalitas.com Cibubur senantiasa menghadirkan pelayanan kesehatan dengan kualitas unggul.
Di masa pandemi ini, TokoLegalitas.com juga berkontribusi untuk pemeriksaan COVID-19 di Indonesia.
Salah satu Sahabat MIKA kali ini berbagi pengalaman menjalani tes COVID-19 di TokoLegalitas.com Cibubur. Tes penting dilakukan untuk turut menjaga Sahabat MIKA, keluarga, dan teman juga loh!

“Saya mengucapkan terima kasih buat TokoLegalitas.com Cibubur yang selalu menyediakan tes Swab untuk kami setiap kali kami berkegiatan yang mengharuskan bertemu kelompok berisiko tinggi.. Kami puas dengan pelayanan yang baik, sangat ramah dan sangat memudahkan kami. Semoga ini menjadi kerja sama yang baik antara kami dan TokoLegalitas.com Cibubur. Sehat terus Indonesia.” - Yovie Widianto (Pianis Yovie & Nuno)
Kalau Sahabat MIKA, bagaimana pengalaman tesnya?

Cek jadwal dan buat janji dengan mudah di www.mitrakeluarga.com/testcovid19
#MitraKeluarga #MitraKeluargaKu #SahabatMIKA #MyMika #Life #Love #Laughter #yovienuno #covid19 #tescovid19'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item item-pasien " itemscope itemtype="https://schema.org/Review">
                        <picture class="lazy">
                            <data-src srcset="/img/testi_responsive.png" media="(max-width: 767px)"></data-src>
                            <data-img class="bg-carousel-pasien" src="https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-4.jpg" alt="Gradient background"></data-img>
                        </picture>
                        <div class="carousel-caption carousel-caption-pasien">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="crop-info-dokter"> <img class="foto-info-dokter foto-testimoni lazy" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/thumb/48_18_astira-vern_jpg" itemprop="image" content="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/48_18_astira-vern_jpg" alt="Foto testimoni dari Astira Vern"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="testimoni-text" itemprop="description">
                                        <p>
                                            Sahabat MIKA,

                                            Selain resepsi dan keuangan, kesehatan pasangan juga merupakan salah satu hal penting dalam persiapan pernikahan.
                                            TokoLegalitas.com Cibubur dengan senang hati membersamai Sahabat MIKA dalam perjalanan menuju hari yang bahagia itu.

                                            Kali ini, Astira Vern selaku calon istri Bapak Yudistira, yang juga seorang Putri Pariwisata Indonesia dan Miss Eco International membagikan cerita tentang pengalamannya melakukan MCU pra-nikah di TokoLegalitas.com Cibubur.

                                            Bagaimana dengan pengalaman Sahabat MIKA?

                                            #MitraKeluarga #MitraKeluargaKu #SahabatMIKA #MyMika #Life #Love #Laughter #paketMCU #promoMCU #MCUPranikah </p>
                                    </div>
                                    <meta itemprop="inLanguage" content="id" />
                                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                    </div>
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="https://schema.org/localBusiness">
                                        <meta itemprop="name" content="TokoLegalitas.com" />
                                        <meta itemprop="sameAs" content="" />
                                        <meta itemprop="image" content="img/logo.png" />
                                    </div>
                                    <div class="hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <meta itemprop="name" content="Astira Vern" />
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-white-testimoni button-read-more" data-toggle="modal" data-target="#modal-testimonial-detail" data-foto="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/testimonies/full/48_18_astira-vern_jpg" data-nama="Testimonial Astira Vern" data-spesialis="" data-text='Sahabat MIKA,

Selain resepsi dan keuangan, kesehatan pasangan juga merupakan salah satu hal penting dalam persiapan pernikahan.
TokoLegalitas.com Cibubur dengan senang hati membersamai Sahabat MIKA dalam perjalanan menuju hari yang bahagia itu.

Kali ini, Astira Vern selaku calon istri Bapak Yudistira, yang juga seorang Putri Pariwisata Indonesia dan Miss Eco International membagikan cerita tentang pengalamannya melakukan MCU pra-nikah di TokoLegalitas.com Cibubur.

Bagaimana dengan pengalaman Sahabat MIKA?

#MitraKeluarga #MitraKeluargaKu #SahabatMIKA #MyMika #Life #Love #Laughter #paketMCU #promoMCU #MCUPranikah'>Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Controls -->
                <a class="left carousel-control carousel-control-pasien" href="#carouselpasien" role="button" data-slide="prev">
                    <div class="left-icon-pasien"></div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control carousel-control-pasien" href="#carouselpasien" role="button" data-slide="next">
                    <div class="right-icon-pasien"></div>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="modal-testimonial-detail" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="model-content">
                    <div class="modal-header modal-header-custom">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row testimoni-modal">
                            <div class="col-md-4 foto-detail">
                                <img class="foto-testimoni-detail lazy" data-src="" />
                            </div>
                            <div class="col-md-8">
                                <h2 class="text-pink" id="nama-testimoni"><b>Ny. Ratih Wulandari</b></h2>
                                <!--                        <h3 class="content-gray" id="spesialis-testimoni">Diabetes</h3>-->
                                <div class="pre-scrollable">
                                    <div class="scroll-testimoni">
                                        <p class="text-testimoni">Saya dan suami baru dikaruniai buah hati pada tahun ke-3 pernikahan kami setelah menjalani proses inseminasi dibantu oleh Dr. Antony Atmadja, Sp.OG</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="health-tips-home">
            <div class="row row-see-all">
                <h2 class="title-lokasi-home text-center col-md-9 col-xs-12">Youtube Feeds</h2>
            </div>
            <div class="row card-health-tips">

                <?php foreach ($video->result_array() as $vid) : ?>
                    <div class="card-top card-top-health card-top-health-youtube col-md-4 col-xs-12">
                        <div class="overlay-tips">
                            <a href="<?= $vid['link'] ?>" target="_blank" rel="noopener noreferrer" title="<?= $vid['title'] ?>" data-lity>
                                <div class="crop-card">
                                    <img class="card-img-top lazy" data-src="<?php echo base_url(); ?>assets/image/article/<?= $vid['img'] ?>" alt="Thumbnail Youtube <?= $vid['title'] ?>" itemprop="image" content="<?php echo base_url(); ?>assets/image/article/<?= $vid['img'] ?>" />
                                </div>
                                <div class="card-health-overlay">
                                    <button class="btn btn-white btn-health button-read-more">Lihat</button>
                                </div>
                            </a>
                        </div>
                        <div class="card-body card-body-tips">
                            <small class="text-muted" itemprop="datePublished" content="<?= $vid['created_datetime'] ?> ">
                                <?= $vid['created_datetime'] ?> </small>
                            <h4 class="card-title-tips">
                                <a href="<?= $vid['link'] ?>" target="_blank" rel="noopener noreferrer" title="<?= $vid['title'] ?>" data-lity>
                                    <?= $vid['title'] ?></a>
                            </h4>
                        </div>
                    </div>

                <?php endforeach ?>
                <!-- <div class="card-top card-top-health card-top-health-youtube col-md-4 col-xs-12">
                    <div class="overlay-tips">
                        <a href="http://www.youtube.com/watch?v=Qb2GX7MLcGs" target="_blank" rel="noopener noreferrer" title="TokoLegalitas.com : Intip Rahasia dibalik Keajaiban Bayi Tabung" data-lity>
                            <div class="crop-card">
                                <img class="card-img-top lazy" data-src="https://i.ytimg.com/vi/Qb2GX7MLcGs/hqdefault.jpg" alt="Thumbnail Youtube TokoLegalitas.com : Intip Rahasia dibalik Keajaiban Bayi Tabung" itemprop="image" content="../i.ytimg.com/vi/Qb2GX7MLcGs/hqdefault.jpg" />
                            </div>
                            <div class="card-health-overlay">
                                <button class="btn btn-white btn-health button-read-more">Lihat</button>
                            </div>
                        </a>
                    </div>
                    <div class="card-body card-body-tips">
                        <small class="text-muted" itemprop="datePublished" content="25 Januari 2021">
                            25 Januari 2021 </small>
                        <h4 class="card-title-tips">
                            <a href="http://www.youtube.com/watch?v=Qb2GX7MLcGs" target="_blank" rel="noopener noreferrer" title="TokoLegalitas.com : Intip Rahasia dibalik Keajaiban Bayi Tabung" data-lity>
                                TokoLegalitas.com : Intip Rahasia dibalik Keajaiban Bayi Tabung </a>
                        </h4>
                    </div>
                </div>
                <div class="card-top card-top-health card-top-health-youtube col-md-4 col-xs-12">
                    <div class="overlay-tips">
                        <a href="http://www.youtube.com/watch?v=UefphUlTkqA" target="_blank" rel="noopener noreferrer" title="TokoLegalitas.com : Gizi Seimbang untuk Daya Tahan Tubuh Optimal" data-lity>
                            <div class="crop-card">
                                <img class="card-img-top lazy" data-src="https://i.ytimg.com/vi/UefphUlTkqA/hqdefault.jpg" alt="Thumbnail Youtube TokoLegalitas.com : Gizi Seimbang untuk Daya Tahan Tubuh Optimal" itemprop="image" content="../i.ytimg.com/vi/UefphUlTkqA/hqdefault.jpg" />
                            </div>
                            <div class="card-health-overlay">
                                <button class="btn btn-white btn-health button-read-more">Lihat</button>
                            </div>
                        </a>
                    </div>
                    <div class="card-body card-body-tips">
                        <small class="text-muted" itemprop="datePublished" content="25 Januari 2021">
                            25 Januari 2021 </small>
                        <h4 class="card-title-tips">
                            <a href="http://www.youtube.com/watch?v=UefphUlTkqA" target="_blank" rel="noopener noreferrer" title="TokoLegalitas.com : Gizi Seimbang untuk Daya Tahan Tubuh Optimal" data-lity>
                                TokoLegalitas.com : Gizi Seimbang untuk Daya Tahan Tubuh Optimal </a>
                        </h4>
                    </div>
                </div> -->
                <h5 class="relative-see-all-ha col-md-1">
                    <a class="text-pink" target="_blank" href="https://www.youtube.com/channel/UCaBz2_Zlfe-GPYTu8f4jaBw" title="Channel Youtube TokoLegalitas.com"><b>Lihat Semua</b></a>
                </h5>
            </div>
        </div>
        <!-- end of Youtube-->

        <div class="health-tips-home">
            <div class="row row-see-all">
                <h2 class="title-lokasi-home text-center col-md-9 col-xs-12">Artikel</h2>
            </div>
            <div class="row card-health-tips">

                <head prefix="artikel: /artikel">
                    <?php foreach ($infos->result() as $info) :
                        switch ($info->rs_id) {
                            case 1:
                                $nrs = 'lippo';
                                break;
                            case 2:
                                $nrs = 'jababeka';
                                break;
                            case 4:
                                $nrs = 'galuhmas';
                                break;
                        }
                    ?>

                        <div class="card-top card-top-health col-md-4 col-xs-12" onclick="location.href='<?= base_url(); ?><?= $nrs ?>/informasi/<?= $info->link ?>';" itemscope itemtype="https://schema.org/Article">
                            <meta itemprop="headline" content="Artikel" />
                            <meta itemprop="author" content="TokoLegalitas.com" />
                            <meta itemprop="dateModified" content="2020-12-15" />
                            <meta itemprop="mainEntityOfPage" content="/artikel" />
                            <div class="overlay-tips">
                                <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                    <meta itemprop="name" content="TokoLegalitas.com" />
                                    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                        <meta itemprop="url" content="img/logo.png" />
                                    </div>
                                </div>
                                <div class="crop-card">
                                    <img class="card-img-top lazy" data-src="<?php echo base_url(); ?>assets/image/article/<?= $info->img ?>" />
                                </div>
                                <div class="card-health-overlay">
                                    <button class="btn btn-white btn-health button-read-more">Baca</button>
                                </div>
                            </div>
                            <div class="card-body card-body-tips">
                                <h4 class="card-title-tips">
                                    <a href="<?= base_url(); ?><?= $nrs ?>/informasi/<?= $info->link ?>" itemprop="url"><span itemprop="name"><?= $info->title ?></span></a>
                                </h4>
                                <small class="text-muted" itemprop="datePublished" content="2020-12-15"><?= $info->created_datetime ?></small>
                                <p class="card-text card-text-tips hidden-sm hidden-xs" itemprop="text">
                                    <?= strip_tags(substr($info->content, 0, 300)) . '....'; ?> </p>
                            </div>
                        </div>

                    <?php endforeach ?>

                    <h5 class="relative-see-all-ha col-md-1">
                        <a class="text-pink" href="<?= base_url(); ?><?= $rs ?>/informasi/"><b>Lihat Semua</b></a>
                    </h5>
            </div>
        </div>
        <!-- end of Health Tips Home-->

    </div>
    <!-- end of SITE-INDEX-->

    <script>
        (function() {
            $('.nav-link').on('click', function() {
                var x = $(this).attr('to');
                window.location.href = x;
                // alert('ss');
            });

        })();
    </script>