<h3> <?php echo $keyword;?></h3>
<hr>
<?php
if (isset($result)) {
	foreach ($result as $row) {?>
		<div style="min-height:200px;">
			<img class="img img-thumbnail pull-left" class="custom-image" style="max-width:200px; max-height:180px; margin-right:3px;" src="<?php echo base_url('assets/image/article/' . $row->img);?>">
			<h4><a href="<?php echo site_url('article/' . $row->link);?>"><?php echo $row->title;?></a></h4>
			<p><?php echo panjangStr(strip_tags($row->content),600);?></p>
		</div>
		<hr>
<?php
	}
} else {
	echo '<div><p>Pencarian tidak ditemukan...</p></div>';
}
?>
<!-- pagination -->
<?php echo $this->pagination->create_links(); ?>