
			<?php
			//data from controller
			if ($articles) {
				foreach ($articles as $artikel) {
					?>
					<div class="col-lg-4 col-md-4">
					
					<div class="col-lg-12 col-md-12 video-container1">
						<iframe frameborder="0" height="200" src="<?php echo $artikel->content;?>" width="354"></iframe>
					</div>
					<p>Post <?php echo $artikel->created_datetime; ?> </p>
					<hr/>
					</div>

				<?php
				}
			}

			?>


