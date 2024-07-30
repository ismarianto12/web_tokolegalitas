 <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" id="loker" style="margin-top: 50px;">
    <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Pendaftaran</li>
      </div>
    </div>
  </div>

  <div class="aboutus">
    <div class="container">
      <h3>Loker</h3>
      <hr>
      <div class="col-md-8 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
      <?php
      // print_r($fasilitas);die;
        if($pendaftaran){
          foreach ($pendaftaran as $key => $value) {
          ?>
            <h4><?=$value->title?></h4>
            <img src="<?php echo base_url();?>assets/image/article/<?=$value->img?>" width="100%" alt="" class="img-responsive">             
            <p><?=strip_tags($value->content);?></p>
               
          <?php
          }
        }
      ?>
      </div>
    
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h4>Article Lainnya :</h4>
            <ul>
              <?php
                if($all_article){
                  foreach ($all_article as $key => $value) {
                    ?>
                    <li><h5><i class="fa fa-bookmark-o"></i>&nbsp; <a href="#" onclick="singleArticleLoker(<?=$value->article_id.','.$value->article_category_id.','.$value->id_rumahsakit?>)"><?=strip_tags($value->title)?> </a></h5></li>
                    <?php
                  }
                }
              ?>
            </ul>
        </div>
      </div>  
  </div>
</div>
<script>
  function singleArticlePendaftaran(article_id,article_category_id,id_rumahsakit){
    setTimeout(function() {
      $.ajax({
        url: base_url + 'front/single_article_pendaftaran',
        dataType: 'html',
        data:{a_id:article_id,ac_id:article_category_id,rs_id:id_rumahsakit},
        type: 'POST',
        cache: false,
        success: function(html) {
          $('#loker').hide('slow').replaceWith(html);
          // $('#single-article').show('slow');
        }, error: function () {
          alert('Terjadi kesalahan!');
        }
      });
    }, 100);
  }
</script>