<section style="margin-top: 20px;margin-bottom: 10px;">
	<?php 
	if ($articles) {
		foreach ($articles as $row) {
			?>


<div class="col-md-4 col-md-4"">
			<div class="thumbnail panel panel-info col-md-12 col-sm-6 col-lg-12" style="height: 275px;">

				<h4><a href="<?php echo site_url('promo/'.$row->link)?>"><u><?php echo ($row->title);?></u></a></h4>


				<hr>
				<img class="img-responsive center-block" src="<?php echo base_url("assets/image/article/" . $row->img );?>" alt="NO IMAGE" style ="height: 130px">

				</a></h4>
				<hr>

				<p><?php echo substr(strip_tags($row->category_name),0,140);?></p>


			</div>
			</div>















			<?php 
		}
	}
	?>
</section>