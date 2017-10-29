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
				<div class="row mb-4">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6 mb-4">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<hr>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										<a href="#" class="btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-4">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<hr>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										<a href="#" class="btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-4">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<hr>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										<a href="#" class="btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-4">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<hr>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										<a href="#" class="btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="note" class="col-md-12 article mb-4" style="padding-top: 98px; margin-top: -98px; z-index: -1;">
						<h3>A Note from the Editors</h3>
						<hr>
						<p>
							Dear Readers,
							<br>
							<br>
							Welcome to the 37th edition of <i>The Writing Anthology</i>.
							<br>
							<br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis malesuada ex, sed ullamcorper augue. Quisque gravida, ante ut eleifend ornare, dui tellus pulvinar tellus, eu bibendum lectus arcu sit amet nisi. Nunc consequat sed orci quis viverra. Proin egestas sem vitae massa congue, eget sodales nunc ornare. Aliquam turpis enim, maximus posuere ligula eu, sollicitudin porta nisi. Vivamus euismod velit eu dolor ullamcorper suscipit. Pellentesque non laoreet velit. Pellentesque ut faucibus ante. In finibus ipsum enim, vitae auctor turpis tempus sed. Maecenas purus tortor, posuere vitae suscipit ac, dignissim vel neque.
							<br>
							<br>
							Morbi in vestibulum est. Suspendisse potenti. In aliquet nulla diam, non placerat eros laoreet pulvinar. Nunc malesuada fermentum tincidunt. Integer nec nunc nunc. Maecenas auctor est at quam dapibus fringilla. Nulla facilisi. Mauris ac tincidunt purus, lacinia pellentesque est. Sed quis euismod leo. Sed vitae orci felis. Suspendisse eu ante felis. Ut pretium accumsan metus, vitae consequat eros eleifend et. Nam vitae ultrices quam. Morbi eros mi, egestas ut est vitae, faucibus iaculis ante.
							<br>
							<br>
							Morbi et ultricies diam, sit amet fringilla sapien. Quisque risus lorem, posuere fermentum rutrum quis, eleifend eu eros. Pellentesque quis quam ultricies, ornare nisi a, ultrices risus. Cras ac elit nisi. Fusce ac porttitor ex, a lacinia tortor. Morbi eget ipsum quis magna semper aliquet. Aenean ut euismod augue. Quisque eros neque, tristique sit amet varius a, tristique ac elit. Duis sit amet libero massa. Quisque dignissim sed sapien ullamcorper finibus. Vivamus ante tellus, porta eu dictum eget, eleifend eget ligula. Pellentesque tincidunt, nisi ac sollicitudin maximus, velit nisl condimentum purus, vel convallis dolor elit a mauris.
							<br>
							<br>
							Praesent malesuada nisl nec orci tristique facilisis. Nullam et imperdiet lectus. Donec aliquam nisl vitae ligula dignissim mattis. Vivamus id hendrerit metus. Proin quis massa et ligula tempus consequat quis vitae magna. Curabitur id elit augue. Aenean risus velit, ornare a cursus et, dignissim non odio. Vestibulum faucibus nunc a urna placerat venenatis. Nunc commodo, neque sed rhoncus ullamcorper, massa nisl cursus nunc, id tempus erat est eget ex.
							<br>
							<br>
							Curabitur sed bibendum leo, vel dapibus leo. Maecenas sodales, diam vitae efficitur tempus, augue velit porta mi, nec porta nisi urna eget turpis. Pellentesque fermentum magna sit amet leo tempus vulputate. Donec nec ex placerat, volutpat mauris quis, laoreet nisl. Cras ex est, suscipit in mattis lacinia, egestas a est. Sed non cursus turpis. Maecenas erat ante, dictum sed libero nec, interdum accumsan mauris. Ut quis justo vehicula, porta sapien non, sollicitudin lacus. Vivamus hendrerit dui ac orci dictum, nec semper turpis aliquet. Phasellus sit amet lectus ultricies leo ultrices semper a quis magna. Sed eleifend condimentum justo id iaculis.
						</p>
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
</body>
</html>