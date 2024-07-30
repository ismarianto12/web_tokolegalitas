<?php $this->load->view('frontend/header'); 
$this->load->helper('url');
$rs = $this->uri->segment(1);
$list_rs = $this->frontmodel->get_opt_rs();
?> 
<div id="dokter-wrapper" style="margin-top: 50px;"">
<div id="dokter">
  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Profil Dokter</li>
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

<div class="lates">
  <div class="container">
    <h3>Profil Dokter</h3>
    <div class="text-center">
      <?php
      if($dokter){
        foreach ($dokter as $key => $value) {
          ?>
          
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="<?php echo base_url();?>assets/image/dokter/<?=$value->img?>" alt="" style ="height: 275px" alt="">
            <h4><?=$value->nama_dokter?></h4>
            <p><?=$value->ket?></p>
          </div>  
          <?php
        }
      }
      ?>
    </div>
  </div>`
   <div class="col-md-offset-1">
    <ul class="pagination pagination-lg">
      <?php 
      foreach ($links as $link) {
            echo "<li>". $link."</li>";
          } 
        ?>
    </ul>
  </div>
</div>
<!--/.pagination-->
<section id="contact-page">
  <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"></div>
</section>
</div>
</div>
<script>
  function singledokter(id_rs,id=null){

    setTimeout(function() {
      $.ajax({
        url: base_url + 'front/get_list_dokter',
        dataType: 'html',
        data:{a_id:id,ac_id:category,rs_id:id_rs,page:'list_dokter'},
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
<?php $this->load->view('frontend/footer'); ?> 