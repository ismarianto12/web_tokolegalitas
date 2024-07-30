 	<div class="container">
 		<div class="row">
 			<div class="col-md-8">
 				<?php
					if ($data) {
					?>
 					<article>
 						<div class="post-image">
 							<div class="post-heading">
 								<h3><a href="#"><?= $data[0]->title ?></a></h3>
 							</div>
 							<img src="<?= base_url('assets/image/article/' . $data[0]->img) ?>" alt="" class="img-responsive" />
 						</div>
 						<p>
 							<?= $data[0]->content ?>
 						</p>
 						<div class="bottom-article">
 							<ul class="meta-post">
 								<li><i class="fa fa-calendar"></i><a href="#"> Mar 27, 2014</a></li>
 								<li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
 								<li><i class="fa fa-folder-open"></i><a href="#"> Blog</a></li>
 								<li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
 							</ul>
 							<a href="#" class="readmore pull-right">Continue reading <i class="fa fa-angle-right"></i></a>
 						</div>
 					</article>
 				<?php
					}
					?>


 			 
 				<div class="clearfix"></div>
 			</div>
 		 

 		</div>
 	</div>