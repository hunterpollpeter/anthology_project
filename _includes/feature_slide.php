<div class="carousel-item <?php echo $i == 0 ? "active" : ""; ?>" style="background-image: url('<?php echo "./$feature->year/$feature->imageFile"; ?>')">
	<a href= "<?php echo "./article?id=$feature->id"; ?>" class="carousel-caption d-none d-md-block">
		<h3><?php echo $feature->title; ?></h3>
		<p><?php echo $feature->getAuthorString(); ?></p>
	</a>
</div>