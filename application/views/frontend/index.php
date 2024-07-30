<?php $this->load->view('frontend/header');

$id_rumahsakit = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
$link = $this->uri->segment(2);
$this->load->helper('url');
$rs = $this->uri->segment(1);
$list_rs = $this->frontmodel->get_opt_rs();
$id_rumahsakit = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
?>
<section id="main-slider" class="no-margin">
  <div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php
      if ($slide) {
        $j = 0;
        $a = '';
        foreach ($slide as $key => $value) {
          if ($j == 0)
            $a = 'active';
          else
            $a = '';
      ?>
          <div class="item animated-item-1 <?= $a; ?>" style="background-image: url(<?php echo base_url(); ?>assets/image/slide/<?= $value->img ?>)" style="height: 300px">
            <div class="container">
              <div class="row slide-margin">
                <div class="col-sm-6">
                  <div class="carousel-content">
                    <h2 class="animation animated-item-1"><?= $value->title ?></h2>
                    <p class="animation animated-item-2"><?= $value->description ?></p>

                  </div>
                </div>


              </div>
            </div>
          </div>

      <?php
          $j++;
        }
      }
      ?>

      <!--/.item-->
    </div>
    <!--/.carousel-inner-->
  </div>
  <!--/.carousel-->
</section>
<!--/#main-slider-->
<div class="feature">
  <div class="container">
    <h2 style="text-align:right;">Pilih Nama Kantor<h2>
        <form>
          <div class="form-group">
            <select onchange="vax(this.value,'/<?= $this->uri->segment(2) ?>');" class="form-control" id="rs_change" style="width: 150px;float: right;margin-top:-20px;">
              <?php
              foreach ($list_rs as $key => $value) {
              ?>
                <option <?= $rs == $this->frontmodel->switch_idrs($value->id_rumahsakit) ? 'selected' : ''; ?> value='<?= $this->frontmodel->switch_idrs($value->id_rumahsakit); ?>'><?= $value->nama_rumahsakit ?></option>
              <?php
              }
              ?>
            </select>
          </div>
        </form>
        <div class="text-center">
          <div class="col-md-4">
            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <a href="<?= base_url() ?><?= $id_rumahsakit ?>/program">
                <i class="fa fa-trophy"></i></a>
              <h2>Program Unggulan</h2>
              <p>TokoLegalitas.com</p>
            </div>
          </div>
          <!-- <div class="text-center">
      <div class="col-md-4">
        <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <a href="<?= base_url() ?><?= $id_rumahsakit ?>/ambulance">
          <i class="fa fa-ambulance"></i></a>
          <h2>Unit Gawat Darurat</h2>
          <p>Ambulance RSPK</p>
        </div>
      </div>-->
          <div class="col-md-4">
            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <a href="<?= base_url() ?><?= $id_rumahsakit ?>/promo">
                <i class="fa fa-paper-plane-o"></i></a>
              <h2>PROMO</h2>
              <p>TokoLegalitas.com</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
              <a href="<?= base_url() ?><?= $id_rumahsakit ?>/berita">
                <i class="fa fa-files-o"></i></a>
              <h2>Berita & Event</h2>
              <p>Berita & Event TokoLegalitas.com</p>
            </div>
          </div>
        </div>
  </div>
</div>
<div class="about">
  <div class="container">
    <!--<form>
      <div class="form-group">
      <select onchange="vax(this.value,'/<?= $this->uri->segment(2) ?>');" class="form-control" id="rs_change" style="width: 150px;float: right;margin-top:-40px;">
                <?php
                foreach ($list_rs as $key => $value) {
                ?>
                    <option <?= $rs == $this->frontmodel->switch_idrs($value->id_rumahsakit) ? 'selected' : ''; ?> value='<?= $this->frontmodel->switch_idrs($value->id_rumahsakit); ?>'><?= $value->nama_rumahsakit ?></option>
                    <?php
                  }
                    ?>
        </select>
    </div>
    </form>
  </div>-->
    <div class="container">

      <?php
      if ($profil) {
        foreach ($profil as $key => $value) {
      ?>
          <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Profil Nama Kantor</h2>
            <img src="<?php echo base_url(); ?>assets/image/article/<?= $value->img ?>" class="img-responsive" />
          </div>

          <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2><a href="<?= base_url() ?><?= $id_rumahsakit ?>/profil/<?= $value->link ?>"><?= $value->title ?></a></h2>
            <div style="color:#444;margin-top:20px;"><?= strip_tags(substr($value->content, 0, 300)) . '....'; ?></div>
          </div>
    </div>
<?php
        }
      }
?>
  </div>
</div>

<div class="lates">
  <div class="container">
    <div class="text-center">
      <h2>Fasilitas Layanan</h2>
    </div>
    <?php
    if ($fasilitas) {
      foreach ($fasilitas as $key => $value) {
    ?>
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <img class="img-responsive" src="<?php echo base_url(); ?>assets/image/article/<?= $value->img ?>" style="height: 275px" />
          <h3> <a href="<?= base_url(); ?><?= $id_rumahsakit ?>/fasilitas/<?= $value->link ?>"><?= $value->title ?></a></h3>
          <p><?= strip_tags(substr($value->content, 0, 100)) . '....'; ?></p>
        </div>

    <?php
      }
    }
    ?>
  </div>
  <div class="col-sm-offset-1">
    <a class="btn btn-primary" href="<?= base_url() ?><?= $id_rumahsakit ?>/fasilitas">Selanjutnya</a>
  </div>
</div>

<div class="our-team">
  <div class="container">
    <h3>Profil Dokter</h3>
    <div class="text-center">
      <?php
      if ($dokter) {
        foreach ($dokter as $key => $value) {
      ?>
          <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="<?php echo base_url(); ?>assets/image/dokter/<?= $value->img ?>" alt="" style="height: 275px">
            <h4><?= $value->nama_dokter ?></h4>
            <p><?= $value->ket ?></p>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
  <div class="container">
    <a class="btn btn-primary" href="<?= base_url() ?><?= $id_rumahsakit ?>/list_dokter">Semua Dokter</a>
  </div>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8786182366960814",
    enable_page_level_ads: true
  });
</script>
<?php $this->load->view('frontend/footer'); ?>