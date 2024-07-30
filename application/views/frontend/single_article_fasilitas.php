 <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" id="fasilitas" style="margin-top: 50px;">
    <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>fasilitas</li>
      </div>
    </div>
  </div>

  <div class="aboutus">
    <div class="container">
      <h3>fasilitas</h3>
      <hr>
      <div class="col-md-8 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
      <?php
        if($article){
          foreach ($article as $key => $value) {
          ?>
            <h4><?=$value->title?></h4>
            <img src="<?php echo base_url();?>assets/image/article/<?=$value->img?>" width="100%" alt="" class="img-responsive"> 
             <div style="margin-top:30px;" <?=$one?>><?=($value->content);?></div>    
            <div style="color:#444;margin-top:20px;" <?=$all?>><?=($value->content))?></div>
               
          <?php
          }
        }
      ?>
      </div>
    
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h4>Fasilitas Lainnya :</h4>
            <ul>
              <?php
                if($all_article){
                  foreach ($all_article as $key => $value) {
                    ?>
                    <li><h5><i class="fa fa-bookmark-o"></i>&nbsp; <a href="#" onclick="singlearticle(<?=$value->article_category_id.','.$value->id_rumahsakit.','.$value->article_id?>)"><?=strip_tags($value->title)?>
                     </a></h5></li>
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
  function singlearticle(category,id_rs,id=null){

    setTimeout(function() {
      $.ajax({
        url: base_url + 'front/get_single',
        dataType: 'html',
        data:{a_id:id,ac_id:category,rs_id:id_rs,page:'single_article_fasilitas'},
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