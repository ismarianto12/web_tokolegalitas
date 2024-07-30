<?php

$this->load->helper('url');
$rs = $this->uri->segment(1);
$list_rs = $this->frontmodel->get_opt_rs();
?>
<div class="site-contact">
  <div class="lokasi-klinik">
    <div class="site-bg lazy">

      <div class="row judul-back">
        <h4 class="title-lokasi-home col-md-4 col-xs-12">Fasilitas TokoLegalitas.com . <?= strtoupper($rs) ?></h4>
      </div>

      <div class="card card-site card-contact">
        <div class="highlight-cp hidden-sm hidden-xs">
          <?php
          if ($fasilitas) {

            foreach ($fasilitas as $key => $value) {
          ?>
              <div class="row">
                <div class="col-md-5 magazine-left">
                  <a target="_blank" href="<?= base_url(); ?><?= $rs ?>/fasilitas/<?= $value->link ?>">
                    <!--                        <div class="col-md-5 magazine-left" data-toggle="modal" data-target=".flip-book" data-file="/viewer.php?file=pdf/emagazine/29_69_bugar-hingga-senja-menjelang.pdf#magazineMode=false">-->
                    <div class="image-top-rp">
                      <img class="img-responsive img-rp-top img-m-top lazy" src="<?php echo base_url(); ?>assets/image/article/<?= $value->img ?>" style="display: block;">
                    </div>
                  </a>
                </div>
                <div class="col-md-7 magazine-right">
                  <div class="no-edisi-m content-gray"><a href="<?= base_url(); ?><?= $rs ?>/fasilitas/<?= $value->link ?>" target="_blank" class="edisi"><b><?= ($value->updated_datetime); ?></b></a></div>
                  <h3><?= $value->title ?></h3>
                  <div class="desc-m content-gray"><?= strip_tags(substr($value->content, 0, 300)) . '....'; ?></div>
                  <a class="btn btn-border-pink button-detail-rp" target="_blank" href="<?= base_url(); ?><?= $rs ?>/fasilitas/<?= $value->link ?>">Baca</a>
                  <!--                            <a class="btn btn-border-pink button-detail-rp" data-toggle="modal" data-target=".flip-book" data-file="/viewer.php?file=pdf/emagazine/29_69_bugar-hingga-senja-menjelang.pdf#magazineMode=false">Baca</a>-->
                </div>
              </div>

          <?php
            }
          }
          ?>
          <div <?= $all ?>>
            <ul class="pagination pagination-lg">
              <?php
              foreach ($links as $link) {
                echo "<li>" . $link . "</li>";
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="modal fade flip-book">
          <div class="modal-dialog">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="glyphicon glyphicon-remove"></span>
              </button>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>

<script>
  function singleArticlePromo(article_id, article_category_id, id_rumahsakit) {
    setTimeout(function() {
      $.ajax({
        url: base_url + 'front/single_article_fasilitas',
        dataType: 'html',
        data: {
          a_id: article_id,
          ac_id: article_category_id,
          rs_id: id_rumahsakit
        },
        type: 'POST',
        cache: false,
        success: function(html) {
          $('#fasilitas').hide('slow').replaceWith(html);
          // $('#single-article').show('slow');
        },
        error: function() {
          alert('Terjadi kesalahan!');
        }
      });
    }, 100);
  }
</script>