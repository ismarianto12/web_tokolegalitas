<div class="site-about">
  <div class="site-bg lazy" data-src="/img/bg3.jpg">
    <div class="row judul-back row-ne">
      <h1 class="title-lokasi-home col-md-5">Lowongan Kerja <?= ucfirst(strtolower($this->uri->segment(1))) ?> </h1>
      <div class="search-lk search-event col-md-3 col-md-push-3 col-xs-12">
        <div class="row">
          <select class="form-control" id="rsid" style="
    border-radius: 30px;
">
            <option value="">Pilih Nama Kantor</option>
            <?php
            $j = 1;
            foreach ($lsrumahsakit->result() as $list) :


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
              $selected = ($this->uri->segment(1) == $fnrs) ? 'selected' : '';
              $actv = ($rs == $fnrs) ? 'active' : "";
            ?>
              <option value="<?= $fnrs ?>" <?= $selected ?>><?= ucfirst($list->nama_rumahsakit) ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="card card-site card-news-event">
        <div class="row">
          <div class="loading-klinik hidden text-center">
            <h2><span class="glyphicon glyphicon-refresh is-loading"></span> Loading...</h2>
          </div>
          <div class="col-md-12 col-xs-12 news-part" id="news-content">
            <?php
            if ($loker) {

              foreach ($loker as $key => $value) {
            ?>
                <div class="card-health card-news col-md-4" onclick="location.href='<?= base_url(); ?><?= $rs ?>/loker/<?= $value->link ?>';">
                  <div class="overlay-tips">
                    <div class="crop-card">
                      <img class="card-img-top lazy" data-src="<?php echo base_url(); ?>assets/image/article/<?= $value->img ?>" />
                    </div>
                    <div class="card-health-overlay">
                      <a class="btn btn-white btn-health button-read-more" href="<?= base_url(); ?><?= $rs ?>/loker/<?= $value->link ?>">Baca</a>
                    </div>
                  </div>
                  <div class="card-body card-body-tips">
                    <small class="text-muted">
                      <?php $tg = substr($value->created_datetime, 0, 10);
                      echo DateToIndo($tg)  ?>
                    </small>
                    <h4 class="card-title-tips"><a href="<?= base_url(); ?><?= $rs ?>/loker/<?= $value->link ?>">Grand
                        <?= $value->title ?> </a></h4>
                    <div class="location-promotion">
                      <span class="glyphicon glyphicon-map-marker blue" aria-hidden="true"></span>

                    </div>
                    <p class="card-text card-text-tips hidden-sm hidden-xs"><?= strip_tags(substr($value->content, 0, 300)) . '....'; ?>
                    </p>
                  </div>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
        <div class="text-center">


          <ul class="nav"> <?php

                            foreach ($links as $link) {
                              echo "<li>" . $link . "</li>";
                            }
                            ?>
          </ul>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {
      $('#rsid').on('change', function() {
        rs_id = $(this).val();
        if (rs_id == '') {
          swal.fire('Info', 'Silahkan pilih Nama Kantor', 'danger');
        } else {
          window.location.href = '<?= base_url() ?>/' + rs_id + '/' + 'loker';

        }
      });
    });
  </script>