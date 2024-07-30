<!DOCTYPE html>
<html lang="id">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TokoLegalitas.com</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/css/rcs_front/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/css/rcs_front/prettyPhoto.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/css/rcs_front/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/js/plugins/datatables/dataTables.bootstrap.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <style>
    .modal-backdrop {
      z-index: 1040 !important;
    }

    .modal-dialog {
      margin: 2px auto;
      z-index: 1100 !important;
    }
  </style>
  <script>
    var base_url = '<?php echo base_url(); ?>';
  </script>
  <!--<script src="https://use.fontawesome.com/6ec2703920.js"></script> -->
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<?php
$id_rumahsakit = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
switch ($id_rumahsakit) {
  case 'lippo':
    $rs = '30';
    break;
  case 'jababeka':
    $rs = '31';
    break;
  case 'galuhmas':
    $rs = '32';
    break;
}
$q = $this->db->get_where("gallery_detail", array("gallery_detail_id" => $rs));
$img = $q->row()->img;

?>

<body>
  <header id="id-header">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
              <a href="<?php echo site_url(); ?>" class="navbar-brand header"><img class="up_logo" src="<?php echo base_url(); ?>assets/image/gallery/<?= $img ?>" alt="" width="199" height="52"></a>
            </div>
          </div>
          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">

                <li><a href="<?= base_url() ?><?= $id_rumahsakit ?>/home">Nama Kantor Kami</a></li>
                <li><a href="<?= base_url() ?><?= $id_rumahsakit ?>/fasilitas">FasiLitas Layanan</a></li>
                <li><a href="<?= base_url() ?><?= $id_rumahsakit ?>/jadwal">Jadwal Dokter</a></li>
                <li><a href="<?= base_url() ?><?= $id_rumahsakit ?>/informasi">Artikel Kesehatan</a></li>
                <li><a href="<?= base_url() ?><?= $id_rumahsakit ?>/loker">Lowongan Kerja</a></li>
                <li><a href="<?= base_url() ?><?= $id_rumahsakit ?>/contact">Contact</a></li>
                <li><a href="#" onclick="openDaftarModal('<?= $id_rumahsakit ?>')">Daftar Pasien</a></li>


                <!--  <li role="presentation dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Nama Kantor Kami</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= base_url() ?>lippo/home">RSPK Lippo Cikarang</a></li>
                    <li><a href="<?= base_url() ?>jababeka/home">RSPK Jababeka Cikarang</a></li>
                    <li><a href="<?= base_url() ?>galuhmas/home">RSPK Galuhmas Karawang</a></li>
                  </ul>
                </li>
                 <li role="presentation dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="0">FasiLitas Layanan</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= base_url() ?>lippo/fasilitas">RSPK Lippo Cikarang</a></li>
                    <li><a href="<?= base_url() ?>jababeka/fasilitas">RSPK Jababeka Cikarang</a></li>
                    <li><a href="<?= base_url() ?>galuhmas/fasilitas">RSPK Galuhmas Karawang</a></li>
                  </ul>
                </li>
                 <li role="presentation dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Jadwal Dokter</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= base_url() ?>lippo/jadwal">RSPK Lippo Cikarang</a></li>
                    <li><a href="<?= base_url() ?>jababeka/jadwal">RSPK Jababeka Cikarang</a></li>
                    <li><a href="<?= base_url() ?>galuhmas/jadwal">RSPK Galuhmas Karawang</a></li>
                  </ul>
                </li>
                 <li role="presentation dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Informasi</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= base_url() ?>lippo/informasi">RSPK Lippo Cikarang</a></li>
                    <li><a href="<?= base_url() ?>jababeka/informasi">RSPK Jababeka Cikarang</a></li>
                    <li><a href="<?= base_url() ?>galuhmas/informasi">RSPK Galuhmas Karawang</a></li>
                  </ul>
                </li>
                 <li role="presentation dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Lowongan Kerja</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= base_url() ?>lippo/loker">RSPK Lippo Cikarang</a></li>
                    <li><a href="<?= base_url() ?>jababeka/loker">RSPK Jababeka Cikarang</a></li>
                    <li><a href="<?= base_url() ?>galuhmas/loker">RSPK Galuhmas Karawang</a></li>
                  </ul>
                </li>
                 <li role="presentation dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Contact</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= base_url() ?>lippo/contact">RSPK Lippo Cikarang</a></li>
                    <li><a href="<?= base_url() ?>jababeka/contact">RSPK Jababeka Cikarang</a></li>
                    <li><a href="<?= base_url() ?>galuhmas/contact">RSPK Galuhmas Karawang</a></li>
                  </ul>
                </li>
                 <li role="presentation dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Portofolio</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= base_url() ?>lippo/gallery">RSPK Lippo Cikarang</a></li>
                    <li><a href="<?= base_url() ?>jababeka/gallery">RSPK Jababeka Cikarang</a></li>
                    <li><a href="<?= base_url() ?>galuhmas/gallery">RSPK Galuhmas Karawang</a></li> -->
              </ul>
              </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Modal -->
  <div id="modal-daftar" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #00E676">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:white;" class="modal-title">Daftar Pasien</h4>
        </div>
        <div class="modal-body" style="text-align: center;">
          <h3>Klik tombol dibawah ini untuk daftar melalui whatsapp</h3>
          <button class="btn btn-lg" style="background-color:#00E676" onclick="sendMessage('<?= $id_rumahsakit ?>')">DAFTAR</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>

    </div>
  </div>
  <!--<div id="dinamic-content">
      <!--Start of Tawk.to Script-->
  <!--<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e8e765735bcbb0c9aaf4674/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>-->
  <!--End of Tawk.to Script-->
  <!-- Start of LiveChat (www.livechatinc.com) code -->
  <!-- Start of LiveChat (www.livechatinc.com) code -->
  <!-- Start of LiveChat (www.livechatinc.com) code -->
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
  </script>
  <!-- End of LiveChat code -->

  <!-- End of LiveChat code -->
  <!-- End of LiveChat code -->

  </div>