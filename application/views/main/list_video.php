	<title><?php echo (isset($_TITLE))? $_TITLE : '';?> </title>
	<?php $this->load->view('main/_header'); ?>
	<section>
		<div class="container-full">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="<?php echo site_url()?>" >Home</a></li>
					<li><a href="<?php echo site_url($_PAGE_LINK)?>"  ><?php echo (isset($_PAGE_TITLE))? $_PAGE_TITLE : '';?></a></li>
					<li><a href="#" ><?php echo (isset($_PAGE_TITLE1))? $_PAGE_TITLE1 : '';?></a></li>
				</ul>
				<h2><?php echo (isset($_PAGE_TITLE))? $_PAGE_TITLE : '';?></h2>
				<div class="row bm-remove animate" data-anim-type="zoomInUp">
					<?php 
					if ($articles) {
						foreach ($articles as $row) {
							?>
							<div id="promotion" class="col-md-6">
								<figure>
									<figcaption>
										<div class="ifarem embed-responsive embed-responsive-4by3">
											<iframe class="embed-responsive-item" width="520" height="345"
											src="<?php echo ($row->content);?>">
										</iframe>
									</div>
								</div>
							</figcaption>
						</figure>
						<?php 
					}
				}
				?>
			</div>
		</div>
	</div>
</section> <!-- /#portfolio -->
<?php $this->load->view('main/_footer');?>