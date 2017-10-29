<div class="carousel-item <?php echo $i == 0 ? "active" : ""; ?>" style="background-image: url('./assets/article_images/<?php echo $imageFile; ?>')">
	<a href= "<?php echo "./article?id=$id"; ?>" class="carousel-caption d-none d-md-block">
		<h3><?php echo $title; ?></h3>
		<p><?php echo $authors; ?></p>
	</a>
</div>