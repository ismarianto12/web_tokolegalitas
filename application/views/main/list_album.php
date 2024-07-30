	<?php
	if ($articles) {
		foreach ($articles as $artikel) {
			?>
			<div class="panel col-lg-4 col-md-4" >
				<div class="panel panel-info col-lg-12 col-md-12 " style="height: 270px">
					<a href="<?php echo site_url('album/' . $artikel->link);?>"><h4><b><?php echo $artikel->gallery_name;?> </b></h4>
						<?php
						//panggil cover
						$detail=$this->model->getRecord(array("table"=>"gallery_detail", "where" => array("gallery_id"=>$artikel->gallery_id, "is_cover"=>1)));
						if ($detail) {
							echo '
							<img class="img-responsive center-block" src="'.base_url("assets/image/gallery/thumb/" . $detail->img ).'" style ="height: 225px" alt="XXX"></a>';
						}	
						?>
						</a>
				</div>
			</div>
			<?php
		}
	}
	?>