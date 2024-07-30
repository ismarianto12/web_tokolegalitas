 <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" id="informasi" style="margin-top: 50px;">
    <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Informasi</li>
      </div>
    </div>
  </div>

  <div class="aboutus">
    <div class="container">
      <h3>Informasi</h3>
      <hr>
      <div class="col-md-8 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
      <?php
        if($article){
          foreach ($article as $key => $value) {
          ?>
            <h4><?=$value->title?></h4>
            <img src="<?php echo base_url();?>assets/image/article/<?=$value->img?>" width="100%" alt="" class="img-responsive">             
           <div style="color:#444;margin-top:20px;" <?=strip_tags($value->content);?></div>
               
          <?php
          }
        }
      ?>
        
    
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h4>Promo Lainnya :</h4>
            <ul>
              <?php
                if($all_article){
                  foreach ($all_article as $key => $value) {
                    ?>
                    <li><h5><i class="fa fa-bookmark-o"></i>&nbsp; <a href="#" onclick="singlearticle(<?=$value->article_category_id.','.$value->id_rumahsakit.','.$value->article_id?>)"><?=$value->title?> </a></h5></li>
                    <?php
                  }
                }
              ?>
            </ul>
        </div>
      </div>  
  </div>
</div>
<div class="social">
        <h4>Bagikan Article</h4>
        <p>
            <a  href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('article/'. $article->link) ?>" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('article/'. $article->link) ?>', 'newwindow', 'width=585, height=300'); return false;" target="_blank" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
            <a href="https://plus.google.com/share?url=<?php echo base_url('article/'. $article->link) ?>" onclick="window.open('https://plus.google.com/share?url=<?php echo base_url('article/'. $article->link) ?>', 'newwindow', 'width=585, height=300'); return false;" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
            <a href="https://twitter.com/intent/tweet?text=<?php echo $article->title; ?>  <?php echo base_url('article/'. $article->link) ?> " onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo $article->title; ?>  <?php echo base_url("article/". $article->link ) ?>', 'newwindow', 'width=585, height=300'); return false;" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
            <a href="whatsapp://send?text=/article/<?php echo base_url('article/' .$article->link);?>" target="_blank" class="whatsapp" data-animate-hover="pulse"><i class="fa fa-whatsapp"></i></a>

        </p>
    </div>
    </div>
    
      </div>      
<script>
  function singlearticle(category,id_rs,id=null){

    setTimeout(function() {
      $.ajax({
        url: base_url + 'front/get_single',
        dataType: 'html',
        data:{a_id:id,ac_id:category,rs_id:id_rs,page:'single_article_info'},
        type: 'POST',
        cache: false,
        success: function(html) {
          $('#fasilitas').hide('slow').replaceWith(html);
        // $('#single-article').show('slow');
      }, error: function () {
        alert('Terjadi kesalahan!');
      }
    });
    }, 100);
  }
</script>