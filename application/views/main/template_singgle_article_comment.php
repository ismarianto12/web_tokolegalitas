<?php 
if  ($artikel) {
	?>

}
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i></a></li>
					<li class="<?php echo site_url($_PAGE_LINK)?>" ><?php echo (isset($_PAGE_TITLE))? $_PAGE_TITLE : '';?></a></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="#">This is an example of single post page</a></h3>
							</div>
							<img src="img/dummies/blog/img1.jpg" alt="" class="img-responsive" />
						</div>
						<p>
							 <strong>Qui ut ceteros</strong> comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
						</p>
						<blockquote>
						Eos veniam inermis adolescens te. Te mei partiendo constituam vituperatoribus, usu no duis propriae. Mea feugiat blandit lobortis ei
						</blockquote>
						<p>
						Lorem ipsum dolor sit amet, id integre rationibus mei, nec eu erat dicunt sapientem. Sit cu augue referrentur, pri omnes complectitur comprehensam te. Doctus alienum ad sed, at doming cetero referrentur mei. Qui quas oportere inciderint et, et persius antiopam has, sed ex verterem quaestio. Id alii eligendi mei, an cum feugiat persequeris. Eam id sententiae intellegebat, accusata tractatos urbanitas ei mea, pro causae doctus quaestio at.
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="fa fa-calendar"></i><a href="#"> Mar 27, 2014</a></li>
								<li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
								<li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
								<li><i class="fa fa-tags"></i><a href="#">Design</a>, <a href="#">Blog</a></li>
							</ul>
						</div>
				</article>
					<div class="comment-area">

						<h4>4 Comments</h4>
						<div class="media">
							<a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle" /></a>
							<div class="media-body">
								<div class="media-content">
									<h6><span>March 12, 2013</span> Michael Simpson</h6>
									<p>
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									</p>
									
									<a href="#" class="align-right reply">Reply</a>
								</div>
							</div>
						</div>
						<div class="media">
							<a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle" /></a>
							<div class="media-body">
								<div class="media-content">
									<h6><span>March 12, 2013</span> Smith karlsen</h6>
									<p>
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									</p>
									
									<a href="#" class="align-right reply">Reply</a>
								</div>
								<div class="media">
									<a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle" /></a>
									<div class="media-body">
										<div class="media-content">
											<h6><span>June 22, 2013</span> Jay Moeller</h6>
											<p>
											Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
											</p>
											
											<a href="#" class="align-right reply">Reply</a>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="media">
							<a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle" /></a>
							<div class="media-body">
								<div class="media-content">
									<h6><span>June 24, 2013</span> Dean Zaloza</h6>
									<p>
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									</p>
									
									<a href="#" class="align-right reply">Reply</a>
								</div>
							</div>
						</div>
						
						<div class="marginbot30"></div>
						<h4>Leave your comment</h4>
						
						
						<form role="form">
						  <div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="* Enter name">
						  </div>
						  <div class="form-group">
							<input type="email" class="form-control" id="email" placeholder="* Enter email address">
						  </div>
						  <div class="form-group">
							<textarea class="form-control" rows="8" placeholder="* Your comment here"></textarea>
						  </div>
						  <button type="submit" class="btn btn-theme btn-md">Submit</button>
						</form>

					</div>
				
				<div class="clear"></div>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<form role="form">
					  <div class="form-group">
						<input type="text" class="form-control" id="s" placeholder="Search..">
					  </div>
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Categories</h5>
					<ul class="cat">
						<li><i class="fa fa-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">
						<li>
						<img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
						<h6><a href="#">Lorem ipsum dolor sit</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Maiorum ponderum eum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Et mei iusto dolorum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Popular tags</h5>
					<ul class="tags">
						<li><a href="#">Web design</a></li>
						<li><a href="#">Trends</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Internet</a></li>
						<li><a href="#">Tutorial</a></li>
						<li><a href="#">Development</a></li>
					</ul>
				</div>
				</aside>
			</div>
		</div>
	</div>
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Get in touch with us</h4>
					<address>
					<strong>Sailor company Inc</strong><br>
					 Sailor suite room V124, DB 91<br>
					 Someplace 71745 Earth </address>
					<p>
						<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Information</h4>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
				
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Pages</h4>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Newsletter</h4>
					<p>Fill your email and sign up for monthly newsletter to keep updated</p>
                    <div class="form-group multiple-form-group input-group">
                        <input type="email" name="email" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                        </span>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>&copy; Sailor Theme - All Right Reserved</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="plugins/flexslider/flexslider.config.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

	
</body>
</html>