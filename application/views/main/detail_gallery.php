	<title><?php echo (isset($_TITLE))? $_TITLE : '';?> </title>
	<?php $this->load->view('main/_header');?>
	<section style="margin-top: 80px;margin-bottom: 10px;">
		<div class="container-full">
			<div class="container">
			<ul class="breadcrumb">
                <li><a href="<?php echo site_url()?>">Home</a></li>
                <li><a href="<?php echo site_url($_PAGE_LINK)?>"  ><?php echo (isset($_PAGE_TITLE))? $_PAGE_TITLE : '';?></a></li>
                <li><a href="#" ><?php echo (isset($_PAGE_TITLE1))? $_PAGE_TITLE1 : '';?></a></li>
            </ul> 
				<div class="row bm-remove animate" style="padding-top: 15px;"" data-anim-type="zoomInUp">
					<?php 
					if ($articles) {
						foreach ($articles as $row) {
							?>
							<div class="col-lg-3 col-md-3">
                            <nav>
                            <p>Post <?php echo $row->created_datetime; ?> </p>
                                <h5>Titel : <?php echo ($row->title);?></h5>      
                                <a class="fancybox" id="example1" href="<?php echo base_url('assets/image/gallery/' . $row->img);?>" data-fancybox-group="fancybox">
                                <img class="thumbnail img-polaroid img-responsive" alt="NO IMAGE" src="<?php echo base_url('assets/image/gallery/thumb/' . $row->img);?>"  style ="height:220px; margin-top: 15px;"  /></a>
                                <h5>Galery : <?php echo ($row->gallery_name);?></h5>
                            </nav>                            
                            <a href="http://www.facebook.com/share.php?u=<?php echo site_url($_PAGE_LINK.'/'.$row->link);?>"><i class="fa fa-facebook-square fa-3x color-facebook"></i></a>
                            <a href="http://twitter.com/share?url=<?php echo site_url($_PAGE_LINK.'/'.$row->link);?>"><i class="fa fa-twitter-square fa-3x color-twitter"></i></a>
                            <a href="https://plus.google.com/share?url=<?php echo site_url($_PAGE_LINK.'/'.$row->link);?>"><i class="fa fa-google-plus-square fa-3x color-google-plus"></i></a>
                            <a href="http://www.linkedin.com/shareArticle?mini=<?php echo site_url($_PAGE_LINK.'/'.$row->link);?>"><i class="fa fa-linkedin-square fa-3x color-linkedin"></i></a>
                            <hr>
                        </div>
							<?php 
						}
					}
					?>
				</div>
			</div>
		</div>
	</section> <!-- /#portfolio -->
	<?php $this->load->view('main/_footer');?>
    <script type="text/javascript">$(document).ready(function() {
    $('.fancybox').fancybox();
    });
    </script>