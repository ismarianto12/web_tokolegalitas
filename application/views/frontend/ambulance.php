<?php $this->load->view('frontend/header'); 
$this->load->helper('url');
$rs = $this->uri->segment(1);
$list_rs = $this->frontmodel->get_opt_rs();
?>
<div id="ambulance-wrapper" style="margin-top: 50px;">
  <div id="ambulance">
    <div id="breadcrumb">
      <div class="container">
        <div class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>Ambulance TokoLegalitas.com</li>
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
        <h3>ambulance</h3>
        <hr>
        <div class="col-md-8 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <?php
          if($ambulance){

            foreach ($ambulance as $key => $value) {
              ?>
              <h4><?=$value->title?></h4>
              <img src="<?php echo base_url();?>assets/image/article/<?=$value->img?>" width="100%" alt="" class="img-responsive">
               <div style="color:#444;margin-top:20px;"<?=($value->content);?></div>
               
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
    </div>   
   
    <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <h4>Kontak Kami  :</h4>
          <ul>
            <?php
            $id_rumahsakit = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
            switch ($id_rumahsakit) {
              case 'lippo':
              $alamat = '15';
              $tlp = '18';
              $igd = '11';
              $fax = '12';
              $email = '26';
              $id_rs= '1';
              break;
              case 'jababeka':
              $alamat = '16';
              $tlp = '24';
              $igd = '1';
              $fax = '2';
              $email = '27';
              $id_rs= '2';
              break;
              case 'galuhmas':
              $alamat = '17';
              $tlp = '25';
              $email = '28';
              $id_rs= '3';
              break;
            }

            $alamats = $this->frontmodel->getSingleSettingKontak($alamat,$id_rs);
            $tlps = $this->frontmodel->getSingleSettingKontak($tlp,$id_rs);
            $igds = $this->frontmodel->getSingleSettingKontak($igd,$id_rs);
            $faxs = $this->frontmodel->getSingleSettingKontak($fax,$id_rs);
                // echo $this->db->last_query();
            $emails = $this->frontmodel->getSingleSettingKontak($email,$id_rs);
            if(isset($alamats)){
              echo "<li><h5><i class='fa fa-home'></i>&nbsp; ".$alamats[0]->value_set." </h5></li>";
            }
            if(isset($tlps)){
              echo "<li><h5><i class='fa fa-phone'></i>&nbsp; ".$tlps[0]->value_set." </h5></li>";
            }
            if(isset($faxs)){
              echo "<li><h5><i class='fa fa-phone'></i>&nbsp; ".$faxs[0]->value_set." </h5></li>";
            }
            
            if(isset($emails)){
              echo "<li><h5><i class='fa fa-envelope'></i>&nbsp; ".$emails[0]->value_set." </h5></li>";
            }
            ?>
          </ul>
        </div>
      </div>  
    </div>
  <section id="contact-page">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">  

    </div>
  </div>
</div>
</section>
</div>
</div>
<script>
  function singleArticleAmbulance(article_id,article_category_id,id_rumahsakit){
    setTimeout(function() {
      $.ajax({
        url: base_url + 'front/single_article_ambulance',
        dataType: 'html',
        data:{a_id:article_id,ac_id:article_category_id,rs_id:id_rumahsakit},
        type: 'POST',
        cache: false,
        success: function(html) {
          $('#ambulance').hide('slow').replaceWith(html);
          // $('#single-article').show('slow');
        }, error: function () {
          alert('Terjadi kesalahan!');
        }
      });
    }, 100);
  }
</script>
 <?php $this->load->view('frontend/footer'); ?>
