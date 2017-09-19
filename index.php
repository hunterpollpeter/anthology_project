<?php 
	$directory = "assets";
	$images = array(
		"studentart1.jpg",
		"studentart2.jpg",
		"studentart3.jpg",
		"studentart4.jpg",
		"studentart5.jpg",
	);
	class article
	{
		public $id;
		public $title;
		public $author;
		function __construct($title, $author) {
			$this->title = $title;
			$this->author = $author;
		}
	}
	// replace with query
	$contents = array(
		 0 => new article("Representation of the Holocaust through the Memorial to the Murdered Jews of Europe", "Gretchen Kistenmacher"),
		 1 => new article("Ibuprofen Synthesis", "Mckenna Kilburg &amp; Rachel Tyler"),
		 2 => new article("Madness in (Stage)craft", "K.E. Daft"),
		 3 => new article("Nutrition and Neurology", "Andrea Artorfer"),
		 4 => new article("An Identity in the Seams", "Kayleigh Rohr"),
		 5 => new article("Legal and Cultural Contexts of Gay Rights in India", "Duncan Brumwell"),
		 6 => new article("The Judgement of \"Penelope\": A Day in the Life of Molly Bloom", "Lindsey Greer"),
		 7 => new article("A Measured Response: Staging the Ambiguity in Measure for Measure", "Hannah Marcum"),
		 8 => new article("And Here Our Troubles Began: An American Reaction to 9/11 in Comix", "Sydney Embray"),
		 9 => new article("Searching for the Beggining", "Josie Youel"),
		10 => new article("Rebirth", "Zach Moss")
	);
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Writing Anthology - Home</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Rokkitt">
	<link rel="stylesheet" href="../../assets/bootstrap.css">
	<link rel="stylesheet" href="assets/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<!-- INCLUDE NAV -->
	<?php
		include '_includes/nav.php';
	?>
	<!-- PAGE CONTENT -->
	<div id="hero">
		<div class="arrow animated bounce">
			<img width="40" height="40" alt="" src="assets/DownArrow.svg" />
		</div>
		<a class="navDisplacement"></a>
	</div>
	<div id="content">
		<div class="container pt-4">
			<div class="row">
				<div class="col-md-8 order-2 order-sm-1">
					<div class="row mb-4">
						<div class="col-md-12 px-sm-3 px-0">
							<h3>Featured</h3>
							<hr>
							<div id="slider">
								<div id="status"></div>
								<a href="#" class="control control-prev">&lsaquo;</a>
								<a href="#" class="control control-next">&rsaquo;</a>
								<ul>
									<?php
										foreach ($images as $image) {
											echo "<li style=\"background-image: url('$directory/$image');\"></li>";
										}
									?>
								</ul>
							</div>
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
						<div id="note" class="col-md-12 article" style="padding-top: 100px; margin-top: -100px;">
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
				<div id="contents" class="col-md-4 order-1 order-sm-2 mb-4" style="padding-top: 100px; margin-top: -100px;">
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
								echo "<li>
										<a href=\"article?id=" . $id . "\">
											" . $content->title . "
											<small>" . $content->author . "</small>
										</a>
									</li>";
							}
						?>
					</ul>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<span class="text-muted">&copy; 2017 Hunter &amp; Justin</span>
			</div>
		</footer>
	</div>
	<!-- INCLUDE SCRIPTS -->
	<?php 
		include '_includes/scripts.html';
	?>
</body>
</html>