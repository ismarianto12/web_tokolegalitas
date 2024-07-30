    <title><?php echo (isset($_TITLE))? $_TITLE : '';?> </title>
    <?php $this->load->view('main/_header');?>
    <div class="general-subhead">
        <h2><?php echo (isset($_PAGE_TITLE))? $_PAGE_TITLE : '';?></h2>
    </div>
    <section style="margin-top: 20px;margin-bottom: 10px;">
        <div class="container">
            <div class="col-lg-12 panel">
                 <?php 
                 if ($articles) {
                    foreach ($articles as $row) {
                        ?>
                        <div class="col-lg-3 col-md-3">
                            <nav>
                            <p>Post <?php echo $row->created_datetime; ?> </p>
                                <h5>Titel : <?php echo ($row->title);?></h5>      
                                <a class="fancybox" id="example1" href="<?php echo base_url('assets/image/gallery/' . $row->img);?>" data-fancybox-group="fancybox">
                                <img class="img-polaroid img-responsive" alt="NO IMAGE" src="<?php echo base_url('assets/image/gallery/' . $row->img);?>"  style ="height:220px; margin-top: 15px;"  /></a>
                                <h5>Galery : <?php echo ($row->gallery_name);?></h5>
                            </nav>
                                <hr/>
                        </div>
                            <?php 
                        }
                    }
                    ?>
            </div>
        </div>
    </section>
    <?php $this->load->view('main/_footer');?>
    <script type="text/javascript" src="<?php echo base_url();?>assets/fb/jquery.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fb/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
    <script type="text/javascript"
    src="<?php echo base_url();?>assets/fb/jquery.fancybox.pack.js?v=2.1.0"></script>
    <script type="text/javascript">$(document).ready(function() {
    $('.fancybox').fancybox();
    });
    </script>