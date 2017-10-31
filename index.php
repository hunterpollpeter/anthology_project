<?php 
	require_once './data/data_layer.php';
	$issueYear = null;
	if (isset($_GET['issue'])) $issueYear = $_GET['issue'];
	$issue = data::getIssue($issueYear);
	$contents = data::getContents($issue->year);
	$rand_keys = array_rand($contents, 4);
	$featured = array(
		$contents[$rand_keys[0]], 
		$contents[$rand_keys[1]], 
		$contents[$rand_keys[2]], 
		$contents[$rand_keys[3]]
	);
?>
<!DOCTYPE html>
<html>
<?php
	$title = "Home";
	include '_includes/head.php'
?>
<body>
	<!-- INCLUDE NAV -->
	<?php
		include '_includes/nav.php';
	?>
	<!-- PAGE CONTENT -->
	<?php 
		include '_includes/hero.php'
	?>
	<div class="container pt-4">
		<div class="row">
			<div class="col-md-8 order-2 order-sm-1">
				<div class="row mb-4">
					<div class="col-md-12">
						<h3>Featured</h3>
						<hr>
						<?php include '_includes/slider.php' ?>
					</div>
				</div>
				<div class="row">
					<div id="note" class="col-md-12 article mb-4" style="padding-top: 98px; margin-top: -98px; z-index: -1;">
						<h3>A Note from the Editors</h3>
						<hr>
						<canvas class="page" id="the-canvas" style="width: 100%; height: auto;"></canvas>
						<div id="paginator" class="mt-3 text-center">
							<a href="#article" class="btn btn-primary float-left" id="prev">Previous</a>
							<span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
							<a href="#article" class="btn btn-primary float-right" id="next">Next</a>
						</div>
					</div>
				</div>
			</div>
			<div id="contents" class="col-md-4 order-1 order-sm-2 mb-4" style="padding-top: 98px; margin-top: -98px;">
				<h3>Contents</h3>
				<hr>
				<ul>
					<li>
						<a href="#note">
							A Note from the Editors
						</a>
					</li>
					<?php
						foreach ($contents as $id => $content) {
							$authors = $content->authors;
							$authorString = $content->getAuthorString();
							echo "<li>
									<a href=\"article?id=$id\">
										$content->title
										<small>$authorString</small>
									</a>
								</li>";
						}
					?>
				</ul>
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
		getArticle('<?php echo "./$issue->year/$issue->issueFile"; ?>', <?php echo "$issue->noteStart, $issue->noteEnd"; ?>);
	</script>
</body>
</html>