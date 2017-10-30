<?php
	require_once './data/data_layer.php';
	$article = data::getArticle($_GET['id']);
	if ($article == null) {
		$object = "Article";
		include '_includes/not_found.php';
		return;
	}
?>
<html>
<head>
<?php
	$title = $article->title;
	include '_includes/head.php'
?>
</head>
<body>
	<!-- INCLUDE NAV -->
	<?php
		include '_includes/nav.php';
	?>	
	<!-- PAGE CONTENT -->
	<div class="jumbotron-fluid article-image" style="background-image: url(<?php echo './' . $issue->year . '/article_images/' . $article->imageFile; ?>);">
	</div>
	<div id="article" style="padding-top: 74px; margin-top: -74px;"></div>
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-9 article mb-4">
				<h3><?php echo $article->title; ?></h3>
				<hr>
				<canvas class="page" id="the-canvas" style="width: 100%; height: auto;"></canvas>
				<div class="mt-3 text-center">
					<a href="#article" class="btn btn-primary float-left" id="prev">Previous</a>
					<span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
					<a href="#article" class="btn btn-primary float-right" id="next">Next</a>
				</div>
			</div>
			<div class="col-md-3">
				<?php 
					for($i = 0; $i < count($article->authors); $i++) {
						$author = $article->authors[$i];
						include '_includes/article_author.php';
					}
				?>
			</div>
		</div>
	</div>
	<?php 
		include '_includes/footer.php';
	?>
	<!-- INCLUDE SCRIPTS -->
	<?php 
		include '_includes/scripts.html';
	?>
	<script src="./assets/scripts/pdf.js" type="text/javascript"></script>
	<script src="./assets/scripts/pdf.pagination.js" type="text/javascript"></script>
	<script>
		getArticle('./2017/2017 Writing Anthology.pdf', 4, 10);
	</script>
</body>
</html>