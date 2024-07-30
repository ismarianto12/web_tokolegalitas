<?php $this->load->view('frontend/header'); 
$this->load->helper('url');
$rs = $this->uri->segment(1);
$list_rs = $this->frontmodel->get_opt_rs();
?> 
<div id="berita-wrapper" style="margin-top: 50px;"">
  <div id="berita">
    <div id="breadcrumb">
      <div class="container">
        <div class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>Berita & Event Nama Kantor</li>
          <form>
            <div class="form-group">
              <select onchange="va(this.value+'/<?=$this->uri->segment(2)?>');" class="form-control" id="rs_change" style="width: 150px;float: right;margin-top:-40px;">
               <?php
                  foreach ($list_rs as $key => $value) {
                    ?>
                    <option <?=$rs == $this->frontmodel->switch_idrs($value->id_rumahsakit) ? 'selected' : '';?> value='<?=$this->frontmodel->switch_idrs($value->id_rumahsakit);?>'><?=$value->nama_rumahsakit?></option>
                    <?php
                  }
                ?>
              </select>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="aboutus">
      <div class="container">
        <h3>Berita &  Event Nama Kantor</h3>
        <hr>
        <div class="col-md-8 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <?php
          if($berita){

            foreach ($berita as $key => $value) {
              ?>
              <h4><?=$value->title?></h4>
              <img src="<?php echo base_url();?>assets/image/article/<?=$value->img?>" width="100%" alt="" class="img-responsive">

              <div style="margin-top:20px;" <?=$one?>><?=($value->content);?></div>
              <div style="color:#444;margin-top:20px;"<?=$all?>><?=strip_tags(substr($value->content,0,300)).'....';?></div>
              <div <?=$all?>>
                <a  class="btn btn-primary btn-lg" required="required" href="<?=base_url();?><?=$rs?>/berita/<?=$value->link?>" >Read More</a>
              </div>


              <?php
            }
          }
          ?>
           <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
          <div <?=$all?>>
            <ul class="pagination pagination-lg">
              <?php 
              foreach ($links as $link) {
                echo "<li>". $link."</li>";
              } 
              ?>
            </ul>
          </div>
        </div>
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <ul <?=$all?>>
          <h4>Kontak Kami:</h4>
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

            $alamats = $this->frontmodel->getSingleSettingKontak($alamat,$id_rs);
            $tlps = $this->frontmodel->getSingleSettingKontak($tlp,$id_rs);
            $igds = $this->frontmodel->getSingleSettingKontak($igd,$id_rs);
            $faxs = $this->frontmodel->getSingleSettingKontak($fax,$id_rs);
            $emails = $this->frontmodel->getSingleSettingKontak($email,$id_rs);
            $fanspages = $this->frontmodel->getSingleSettingKontak($fanspage,$id_rs);
            // echo $this->db->last_query();
            if(isset($alamats)){
              echo "<li><h5><i class='fa fa-home'></i>&nbsp; ".$alamats[0]->value_set." </h5></li>";
            }
            if(isset($tlps)){
              echo "<li><h5><i class='fa fa-phone'></i>&nbsp; ".$tlps[0]->value_set." </h5></li>";
            }
             if(isset($igds)){
              echo "<li><h5><i class='fa fa-phone'></i>&nbsp; ".$igds[0]->value_set." </h5></li>";
            }
            if(isset($faxs)){
              echo "<li><h5><i class='fa fa-phone'></i>&nbsp; ".$faxs[0]->value_set." </h5></li>";
            }
            if(isset($emails)){
              echo "<li><h5><i class='fa fa-envelope'></i>&nbsp; <a href='mailto:".$emails[0]->value_set."'>".$emails[0]->value_set." </a></h5></li>";
            }
            if(isset($fanspages)){
              echo "<li><h5>&nbsp;<a href='".$fanspages[0]->value_set."'> ".$fanspages[0]->value_set." </a></h5></li>";
            }
            ?>
          </ul>
          <ul <?=$one?>>
            <h4>Berita Lainnya:</h4>
            <?php
            if($single_article_berita){
              foreach ($single_article_berita as $key => $value) {
                ?>
                <li><h5><i class="fa fa-bookmark-o"></i>&nbsp; <a href="<?=base_url();?><?=$rs?>/berita/<?=$value->link?>" ><?=strip_tags($value->title)?>
                </a></h5></li>
                <?php
              }
            }
            ?>
          </ul>
        </div>
      </div>  
    </div> 

    <section id="contact-page">
      <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"></div>
    </section>
  </div>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8786182366960814",
    enable_page_level_ads: true
  });
</script>
<script>
  function singlearticle(category,id_rs,id=null){

    setTimeout(function() {
      $.ajax({
        url: base_url + 'front/get_single',
        dataType: 'html',
        data:{a_id:id,ac_id:category,rs_id:id_rs,page:'single_article_berita'},
        type: 'POST',
        cache: false,
        success: function(html) {
          $('#berita').hide('slow').replaceWith(html);
        // $('#single-article').show('slow');
      }, error: function () {
        alert('Terjadi kesalahan!');
      }
    });
    }, 100);
  }
</script>
<?php $this->load->view('frontend/footer'); ?> 