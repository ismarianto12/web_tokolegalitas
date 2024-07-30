<?php $this->load->view('frontend/header'); 
$id_rumahsakit = (isset($_REQUEST['id_rumahsakit'])) ? $_REQUEST['id_rumahsakit'] : 1;
?> 
  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Gallery</li>
      </div>
    </div>
  </div>

  <section id="portfolio">
    <div class="container">
      <div class="center">
        <p>Gallery Nama Kantor</p>
      </div>

      <ul class="portfolio-filter text-center">
        <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".general-cleaning">General Cleaning</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".deep-cleaning">Deep Cleaning</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".partial-cleaning">Partial Cleaning</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".pembersihan-jadwal">Pembersihan dengan Jadwal</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".toilet-salon">Toilet Salon</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".video">Video</a></li>
      </ul>
      <!--/#portfolio-filter-->
    </div>
    <div class="container">
      <div class="">
        <div class="portfolio-items">

          <?php
            if($gc){
              foreach ($gc as $key => $value) {
                ?>
                  <div class="portfolio-item general-cleaning col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                      <img class="img-responsive" src="<?php echo base_url();?>assets/image/gallery/<?=$value->img?>" alt="">
                      <div class="overlay">
                        <div class="recent-work-inner">
                          <h3><a href="#"><?=$value->title?></a></h3>
                          <?=$value->description?>
                          <a class="preview" href="<?php echo base_url();?>assets/image/gallery/<?=$value->img?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/.gallery-item-->
                <?php                
              }
            }
          ?>

          <?php
            if($dc){
              foreach ($dc as $key => $value) {
                ?>
                  <div class="portfolio-item deep-cleaning col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                      <img class="img-responsive" src="<?php echo base_url();?>assets/image/gallery/<?=$value->img?>" alt="">
                      <div class="overlay">
                        <div class="recent-work-inner">
                          <h3><a href="#"><?=$value->title?></a></h3>
                          <?=$value->description?>
                          <a class="preview" href="<?php echo base_url();?>assets/image/gallery/<?=$value->img?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/.gallery-item-->
                <?php                
              }
            }
          ?>

          <?php
            if($pc){
              foreach ($pc as $key => $value) {
                ?>
                  <div class="portfolio-item partial-cleaning col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                      <img class="img-responsive" src="<?php echo base_url();?>assets/image/gallery/<?=$value->img?>" alt="">
                      <div class="overlay">
                        <div class="recent-work-inner">
                          <h3><a href="#"><?=$value->title?></a></h3>
                          <?=$value->description?>
                          <a class="preview" href="<?php echo base_url();?>assets/image/gallery/<?=$value->img?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/.gallery-item-->
                <?php                
              }
            }
          ?>

          <?php
            if($pj){
              foreach ($pj as $key => $value) {
                ?>
                  <div class="portfolio-item pembersihan-jadwal col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                      <img class="img-responsive" src="<?php echo base_url();?>assets/image/gallery/<?=$value->img?>" alt="">
                      <div class="overlay">
                        <div class="recent-work-inner">
                          <h3><a href="#"><?=$value->title?></a></h3>
                          <?=$value->description?>
                          <a class="preview" href="<?php echo base_url();?>assets/image/gallery/<?=$value->img?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/.gallery-item-->
                <?php                
              }
            }
          ?>

          <?php
            if($ts){
              foreach ($ts as $key => $value) {
                ?>
                  <div class="portfolio-item toilet-salon col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                      <img class="img-responsive" src="<?php echo base_url();?>assets/image/gallery/<?=$value->img?>" alt="">
                      <div class="overlay">
                        <div class="recent-work-inner">
                          <h3><a href="#"><?=$value->title?></a></h3>
                          <?=$value->description?>
                          <a class="preview" href="<?php echo base_url();?>assets/image/gallery/<?=$value->img?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/.gallery-item-->
                <?php                
              }
            }
          ?>

          <?php
            if($video){
              foreach ($video as $key => $value) {
                ?>
                  <div class="portfolio-item video col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                      <img class="img-responsive" src="<?php echo base_url();?>assets/image/gallery/thumb.jpg" alt="">
                      <div class="overlay">
                        <div class="recent-work-inner">
                          <h3><a href="#"><?=$value->judul?></a></h3>
                          
                          <a class="preview" href="<?=$value->link?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/.gallery-item-->
                <?php                
              }
            }
          ?>

          

          
        </div>
      </div>
    </div>
  </section>
  <?php $this->load->view('frontend/footer'); ?>