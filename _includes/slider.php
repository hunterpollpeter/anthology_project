<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselIndicators" data-slide-to="1"></li>
		<li data-target="#carouselIndicators" data-slide-to="2"></li>
		<li data-target="#carouselIndicators" data-slide-to="3"></li>
	</ol>
	<div class="carousel-inner">
		<?php 
			for ($i = 0; $i < count($featured); $i++)
			{
				$feature = $featured[$i];
				// $id = $feature->id;
				// $title = $feature->title;
				// $authors = $feature->getAuthorString();
				// $imageFile = $feature->imageFile;
				// $year = $feature->
				include '_includes/feature_slide.php';
			}
		?> 
	</div>	
	<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>