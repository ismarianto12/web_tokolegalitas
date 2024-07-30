	<?php $this->load->view('main/_header');?>
	<title>Welcome to Soul Brain Communication</title>
	<!-- Slider -->
	<header id="header">
		<section id="slider" style="margin-top: 1px;">
			<div class="container-full">
				<div class="slider">
					<div id="main-slider" class="carousel slide" data-ride="carousel">
						<!--PREVIUS-NEXT BUTTONS-->
						<div class="carousel-inner">
							<?php
							$slides = $this->model->getList(array('table' => 'slide', 'where' => array('is_active' => 1)));
							if ($slides) {
								$no = 1;
								foreach ($slides as $row) {
									?>
									<div class="item  <?php echo ($no == 1) ? 'active' : '';?>">
										<div class="container slide-element">
											<img style="margin-top: 70px; margin-bottom: 70px; max-height: 400px;" src="<?php echo base_url('assets/image/slide/' . $row->img);?>" alt="<?php echo $row->alt;?>" />
											<div class="content_slide ">
												<h1><b><?php echo $row->title;?></b></h1>
												<p><?php echo $row->description;?></p>
											</div>
										</div>
									</div>
									<?php 
									$no++;
								}
							}
							?>
						</div>
						<ol class="carousel-indicators">
							<?php
							$slides = $this->model->getList(array('table' => 'slide', 'where' => array('is_active' => 1)));
							if ($slides) {
								$no = 0;
								foreach ($slides as $row) {
									?>
									<li data-target="<?php echo site_url();?>#main-slider" data-slide-to="<?php echo $no;?>" <?php echo ($no == 0) ? 'class="active"' : '';?>></li>
									<?php  
									$no++;
								}
							}
							?>
						</ol>
						<!-- Controls -->
						<a class="carousel-control left" href="<?php echo site_url();?>#main-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="carousel-control right" href="<?php echo site_url();?>#main-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

					</div>
				</div>
			</div>
		</section> <!-- /#slider -->
	</header> <!-- /#header -->
	<!-- about  -->
	<section id="about">
		<div class="container-full">
			<div class="container">
				<div class="row bm-remove animate" data-anim-type="zoomInUp">
					<div class="about_content">
						<?php
						$profile = $this->model->getRecord(array('table' => 'page', 'where' => array( 'is_publish' => 1,'link'=> 'profile')));
						if ($profile) {
							echo '
							<div class="col-md-6">
								<div class="imac">
									<img src="'.base_url("assets/image/page/thumb/" . $profile->img ).'" style="height:500px;" alt="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="web_content">
									<h1><b>PROFILE</b</h1>
									<h4>'.$profile->title.'</h4>
									<h3>'.substr(strip_tags($profile->content),0,140).'</a></h3>
									<a class="btn btn-red" href="'.site_url('page/profile').'">Read More</a>
								</div>
							</div>';
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- /about  -->
	<!-- Program Section -->
	<section id="program">
		<div class="container text-center">
			<div class="row">
				<h1 class="title">PROGRAM TERDAHSYAT</h1>
				<h2 class="subtitle"></h2>
				<div class="container-full">
					<div class="bm-remove animate" data-anim-type="fadeInLeft">
						<div class="item active" id="slide1">
							<!-- <div class="carousel-inner"> -->
							<div class="carousel slide" id="tweet-carousel">
								<div class="carousel-inner">
									<?php
									$artikelss = $this->model->getList(array('table' => 'article', 'where' => array('article_category_id' => '1','is_publish' => 1),'sort' => 'created_datetime DESC'));
									if ($artikelss) {
										$no = 1;
										foreach ($artikelss as $row) {
											?>
											<div class="item  <?php echo ($no == 1) ? 'active' : '';?>">
												<div class="container slide-element">
													<img src="<?php echo base_url('assets/image/article/thumb/' . $row->img);?>" style ="height: 250px; max-width: 100px;" class="img-responsive center-block" />
													<div class="content_slide " style="text-align: center;">
														<h1><b><a href="<?php echo site_url('program/'.$row->link) ?>"><?php echo $row->title;?></a></b></h1>
														<p><?php echo substr(strip_tags($row->content), 0,200);?></p>

													</div>
												</div>
											</div>
											<?php 
											$no++;
										}
									}
									?>
								</div>
							</div>
							<!-- Controls -->
						</div>
						<div class="col-md-12 col-sm-6 col-lg-12">
							<a type="button" class="btn btn-info btn-flat" href="<?php echo site_url('program'); ?>">All Program</a>
						</div>
					</div>
				</div>
			</div>
		</section> 
		<!-- Program Section End -->
		<!-- Our portfolio -->
		<section id="portfolio">
			<div class="container-full">
				<div class="container">
					<div class="row bm-remove animate" data-anim-type="zoomInUp">
						<h2 class="section-title">GALLERY</h2>
						<hr />
						<div class="work-mig col-md-12">
							<div class="col-md-6 col-lg-6">
								<h3 class="section-subtitle" style="color: #000000;">Gallery Foto</h3>
								<div class="col-lg-12 col-md-12 ">								
									<?php
									/*panggil album*/
									/*$fotos = $this->model->getListByQuery("SELECT * FROM v_gallery WHERE is_publish = 1 ORDER BY created_datetime DESC LIMIT 2");*/
									$fotos = $this->model->getListByQuery("SELECT * FROM v_gallery_header WHERE is_publish = 1 ORDER BY created_datetime DESC LIMIT 2");
									if ($fotos) {
										foreach ($fotos as $foto) {
											echo '
											<div class="panel panel-body col-lg-6 col-md-6 ">
												<div class="panel panel-body panel-info col-lg-12 col-md-12 " style="height: 270px">
													<img class="img-responsive center-block" src="'.base_url("assets/image/gallery/" . $foto->cover ).'" style ="height: 210px" alt="XXX"></a>
													<a href="'.site_url('album/' . $foto->link).'"><h4>'.$foto->gallery_name.'</h4></a>
												</div>
											</div>';
										}
									}
									?>
								</div>
								<div class="col-md-12 col-sm-6 col-lg-12"><a type="button" class="btn btn-info btn-flat" href="<?php echo site_url('album'); ?>">More Foto Album</a>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6">
								<h3 class="section-subtitle" style="color: #000000;">Gallery Video</h3>
								<?php
								$videos = $this->model->getListByQuery("SELECT * FROM article WHERE is_publish = 1 AND article_category_id = 4 ORDER BY created_datetime DESC LIMIT 1");
								if ($videos) {
									foreach ($videos as $artikel) {
										echo ' 
										<div id="promotion" class="col-md-6 col-sm-6 " >

											<div class="ifarem embed-responsive embed-responsive-4by3">
												<iframe class="embed-responsive-item" width="520" height="320"
												src="'. $artikel->content.'">
											</iframe>
											<div class="col-md-12 col-sm-6 col-lg-12" style="padding-top:12px">
												<a type="button" class="btn btn-info btn-flat" href="'.site_url('video').'">More Video</a>
											</div>
										</div>
									</div>
								</div>';
							}
						}
						?>						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Pricing Table -->
<section id="pricing">
	<div class="container-full">
		<div class="container">
			<div class="row bm-remove animate" data-anim-type="fadeInDownLarge">
				<div class="col-md-12">
					<div class="text">
						<h2 class="section-title">Promo</h2>
						<h3 class="section-subtitle" style="color: #000000;">Promo Program</h3>
					</div>
				</div>
				<?php
				$artikels = $this->model->getListByQuery("SELECT * FROM v_article WHERE is_publish = 1 AND article_category_id = 2 ORDER BY created_datetime ASC LIMIT 3");
				if ($artikels) {
					foreach ($artikels as $artikel) {
						echo '
						<ul>
							<li class="col-xs-12 col-sm-4">
								<div class="pri_table text-center" style="height:425px;">
									<div class="col-xs-12">
										<a href="'.site_url('promo/'.$artikel->link).'" >
											<h5><span><span>'. substr(strip_tags($artikel->title), 0,25) .'</span></span></h5>
											<img class="img-responsive center-block" style="height:295px; width:350px;" src="'.base_url("assets/image/article/thumb/" . $artikel->img ).'" style ="height: 300px" alt=" NO IMAGE"></a>
										</div>
									</div>
								</li>
							</ul>';
						}
					}
					?>

				</div>
				<div class="col-md-3 col-sm-2 col-lg-3">
					<a type="button" class="btn btn-info btn-flat" href="<?php echo site_url('promo'); ?>">All Promo</a>
				</div>
			</div>
		</div>
	</section> <!-- /#Pricing Table -->
	<!-- Start testimonial-clients section -->
	<section id="testimonial-clients">
		<!-- Start testimonial -->
		<div id="testimonial">
			<div class="container-full">
				<div class="container">
					<div class="row bm-remove animate" data-anim-type="fadeInLeft">
						<div class="col-md-12">
							<div class="text">
								<h2 class="section-title" style="color: #000000;">ARTIKEL</h2>
								<h3 class="section-subtitle" style="color: #000000;">Berita Terbaru</h3>
							</div>
						</div>
						<?php 
						$artikels = $this->model->getListByQuery("SELECT * FROM v_article WHERE is_publish = 1 AND article_category_id = 3 ORDER BY created_datetime DESC LIMIT 8");
						if ($artikels) {
							foreach ($artikels as $artikel) {
								echo '
								<div class="col-md-3 col-md-3">
									<div class="thumbnail panel panel-info" style="height: 230px">
										<a href="'.site_url('article/'.$artikel->link).'" ><img class="img-responsive center-block" src="'.base_url("assets/image/article/thumb/" . $artikel->img ).'" style ="height: 150px" alt=" NO IMAGE">
											<h5>'. substr(strip_tags($artikel->title), 0,33) .'</span></a></span></h5></a>
											<h5><span><span>'. substr(strip_tags($artikel->category_name), 0,33) .'</span></span></h5>
										</div>
									</div>';
								}
							}
							?>

						</div>
						<div class="col-md-4">
							<a type="button" class="btn btn-info btn-flat" href="<?php echo site_url('article'); ?>">All Article</a>
							<hr>
						</div>

					</div>

				</div>

			</div>
			<!-- End testimonial -->
		</section>
		<!-- End testimonial-clients section -->
		<!-- Mobile description -->
		<div id="why">
			<div class="container-full">
				<div class="container">
					<div class="row bm-remove animate" data-anim-type="fadeInRight">
						<div class="col-md-12">
							<div class="modern">
								<?php
								$profile = $this->model->getRecord(array('table' => 'page', 'where' => array( 'is_publish' => 1,'link'=> 'training')));
								if ($profile) {
									echo '
									<div class="col-md-6">
										<div class="web_content">
											<h1><b>'.$profile->title.'</b</h1>
											<h3>
												'. substr(strip_tags($profile->content), 0,140) .'</a>
											</h3>
											<a class="btn btn-red" href="'.site_url('Page/training').'">KLIK UNTUK JADWAL TRAINING</a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="phone">
											<img src="'.base_url("assets/image/page/thumb/" . $profile->img ).'" style="height:500px;" alt="">
										</div>
									</div>
									';
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /#Mobile description -->
		<!-- Conatct Section -->
		<section id="contact">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-6 wow animated slideInLeft" data-wow-delay=".5s">
						<h3>Butuh bantuan? tinggalkan pesan. </h3>
						<hr>
						<form id="gusetbook-form">
							<div class="form-group">
								<input type="text" class="form-control" required="required" placeholder="Name" name="name-input" id="name-input" />
							</div>
							<div class="form-group">
								<input type="text" class="form-control" required="required" placeholder="Email address" name="email-input" id="email-input" />
							</div>
							<div class="form-group">
								<textarea name="content-input" id="content-input" required="required" class="form-control" rows="4" placeholder="Message"></textarea>
							</div>
							<div class="form-group">
								<input type="hidden" id="key-input" name="key-input" value="guestbook_id" >
								<input type="hidden" id="value-input" name="value-input" value="0" >
								<input type="hidden" id="type-input" name="type-input" value="guestbook" >
								<button type="submit" class="btn btn-primary" onclick="proccess(); return false;">Send</button>
							</div>
						</form>
					</div>
					<div class="col-md-6 wow animated slideInLeft" data-wow-delay=".5s">
						<h3>Alamat Kami</h3>
						<hr>
						<div class="contact-info">
							<h3><i class="fa fa-map-marker"></i> Office: </h3>
							<h4><?php echo $this->settingmodel->getSetByName('address1');?></h4>
							<h4><i class="fa fa-phone "></i>&nbsp;CALL : <?php echo $this->settingmodel->getSetByName('telp');?></h4>
							<h4><i class="fa fa-envelope">&nbsp;MAIL : <?php echo $this->settingmodel->getSetByName('email-info');?></i></h4>
							<h5><a href="https://api.whatsapp.com/send?phone=+<?php echo $this->settingmodel->getSetByName('WA01');?>"><i class="fa fa-whatsapp fa-3x color-whatsapp" style="font-size:30px;">&nbsp;+<?php echo $this->settingmodel->getSetByName('WA01');?></i></a></h5>
							<h5><a href="https://api.whatsapp.com/send?phone=+<?php echo $this->settingmodel->getSetByName('WA02');?>"><i class="fa fa-whatsapp fa-3x color-whatsapp" style="font-size:30px;">&nbsp;+<?php echo $this->settingmodel->getSetByName('WA02');?></i></a></h5>
						</div>
						<div class="social-links">
							<a href="http://www.facebook.com/share.php?u=<?php echo site_url();?>"><i class="fa fa-facebook-square fa-3x color-facebook"></i></a>
							<a href="http://twitter.com/share?url=<?php echo site_url();?>"><i class="fa fa-twitter-square fa-3x color-twitter"></i></a>
							<a href="https://plus.google.com/share?url=<?php echo site_url();?>"><i class="fa fa-google-plus-square fa-3x color-google-plus"></i></a>
							<a href="http://www.linkedin.com/shareArticle?mini=<?php echo site_url();?>"><i class="fa fa-linkedin-square fa-3x color-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>					
		</section>
		<!-- Conatct Section End-->
		<script src="<?php echo base_url();?>assets/cms/js/function.js"></script>
		<script src="<?php echo base_url();?>assets/cms/js/jquery.blockUI.js"></script>
		<script src="<?php echo base_url();?>assets/cms/ckeditor_full/ckeditor.js"></script>
		<script type="text/javascript">
			var base_url = '<?php echo base_url();?>';
		</script>
		<script type="text/javascript">
			$(document).ready(function () {
				CKEDITOR.replace('content-input',{
					removeButtons : 'Source,Save,NewPage,Preview,Print,Templates,Cut,Undo,Copy,Redo,Paste,PasteText,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,HiddenField,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,NumberedList,BulletedList,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,Font,FontSize,TextColor,BGColor,Maximize,ShowBlocks,About,Indent,Outdent,Blockquote,Strike'
				});
			});

			function proccess() {
				CKupdate();
				loading('loading',true);
				setTimeout(function() {
					$.ajax({
						url: base_url + 'send_guestbook',
						data: $("#gusetbook-form").serialize() + '&title-input=Guestbook',
						dataType: 'json',
						type: 'POST',
						cache: false,
						success: function(json) {
							loading('loading',false);
							if (json.data.code === 0) {
								if (json.data.message == '') {
									$("#name-input, #email-input, #content-input").val("");
									alert('Pesan gagal dikirim!');
								} else {
									alert(json.data.message);
								}
							} else {
								var page ='_guestbook_form/';
								page += json.data.last_id;
								$.ajax({url: base_url + 'proses_email/guestbook/' + json.data.last_id});
								alert('Pesan telah berhasil dikirim');
								$("#name-input, #email-input, #company-input, #address-input, #content-input").val("")
							}
						}, error: function () {
							loading('loading',false);
							alert('Terjadi kesalahan!');
						}
					});
				}, 100);
			}

			function CKupdate(){
				for ( instance in CKEDITOR.instances )
					CKEDITOR.instances[instance].updateElement();
			}
		</script>
		<?php $this->load->view('main/_footer');?>

