<?php
	require_once './data/data_layer.php';
	$article = getArticle($_GET['id']);
	if ($article == null) {
		echo "error";
	}
?>
<html>
<head>
<?php
	include '_includes/head.php'
?>
</head>
<body>
	<!-- INCLUDE NAV -->
	<?php
		include '_includes/nav.php';
	?>	
	<!-- PAGE CONTENT -->
	<div class="jumbotron-fluid article-image" style="background-image: url(<?php echo './assets/article_images/' . $article->imageFile; ?>);">
	</div>
	<div class="container pt-4">
		<div class="row">
			<div class="col-md-9 article mb-4">
				<h3><?php echo $article->title; ?></h3>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, odio dicta mauris in commodo, tellus ut leo est, hac viverra ac amet ridiculus, a sed egestas donec vitae fusce, risus pede id ut non. Odio phasellus ac est, facilisis nec labore praesent, vitae semper urna, id venenatis ipsum leo felis nam orci. Curabitur egestas suscipit enim mauris morbi, consectetuer et justo lorem, at nulla sed bibendum in vitae. Mollis elit, quis mauris. Cras rerum mattis ligula mus, vestibulum dolor lectus, aliquam lorem enim, duis ut nibh enim cursus. Nam habitasse, natus vel nisl quis vel quam.
					<br>
					<br>
					Diam semper fringilla nullam nulla, posuere in tincidunt nec et ullamcorper, in nibh curabitur erat leo ut. Eget mauris imperdiet fusce donec massa cursus, vel nullam, elit eget. Nec eget id fusce commodo velit nec. Cras mauris leo fringilla orci expedita, fringilla iaculis tempus risus, ante tempus viverra consequat in est, velit pellentesque dui imperdiet nisl incididunt urna, hymenaeos non pretium suscipit. Eu orci, elementum massa non nam, metus faucibus ac elementum magnis lacinia, nunc netus eu duis eu, metus nascetur magnis. Quis feugiat, ut aliquet sit tellus sapien curabitur et, id blandit volutpat vestibulum lorem risus. Lacinia mi nam luctus porttitor dictum ut, lectus augue quis elit recusandae non gravida, erat enim. Fusce massa consectetuer in pede pede, sem orci dolor, porttitor eleifend dapibus fusce lacinia donec. Neque pulvinar tellus neque fusce massa, dolor felis.
					<br>
					<br>
					Mauris quis id nisl venenatis integer erat. Pretium vestibulum nulla sagittis amet interdum luctus, amet ultricies phasellus, erat eget delectus donec morbi tellus suspendisse, faucibus metus id maecenas aenean pretium. Ligula faucibus nunc libero et sem, commodo lacus tincidunt porta, in enim venenatis vitae aliquam justo ut. Vel neque, ligula quisque suspendisse pharetra ligula sapien libero, nec etiam nulla sociosqu eros amet turpis. Nulla etiam arcu faucibus ut. Ligula vehicula. Fringilla ornare ante, urna dui, ac proin consequat imperdiet mauris et nulla.
					<br>
					<br>
					Sed at sit hendrerit sit proin risus. Dui quam nulla orci eu ornare urna, ut platea tempor, ligula sed lectus ligula justo, cursus leo pellentesque aptent rhoncus primis metus. Lacus maecenas vestibulum suspendisse, tincidunt sollicitudin, a mauris ut suspendisse libero fusce, et ultrices sed eros sed convallis, pede massa fusce. Laoreet curabitur. Faucibus velit eget, maecenas dui fusce praesent elementum, turpis nisl.
					<br>
					<br>
					Diam semper fringilla nullam nulla, posuere in tincidunt nec et ullamcorper, in nibh curabitur erat leo ut. Eget mauris imperdiet fusce donec massa cursus, vel nullam, elit eget. Nec eget id fusce commodo velit nec. Cras mauris leo fringilla orci expedita, fringilla iaculis tempus risus, ante tempus viverra consequat in est, velit pellentesque dui imperdiet nisl incididunt urna, hymenaeos non pretium suscipit. Eu orci, elementum massa non nam, metus faucibus ac elementum magnis lacinia, nunc netus eu duis eu, metus nascetur magnis. Quis feugiat, ut aliquet sit tellus sapien curabitur et, id blandit volutpat vestibulum lorem risus. Lacinia mi nam luctus porttitor dictum ut, lectus augue quis elit recusandae non gravida, erat enim. Fusce massa consectetuer in pede pede, sem orci dolor, porttitor eleifend dapibus fusce lacinia donec. Neque pulvinar tellus neque fusce massa, dolor felis.
					<br>
					<br>
					Mauris quis id nisl venenatis integer erat. Pretium vestibulum nulla sagittis amet interdum luctus, amet ultricies phasellus, erat eget delectus donec morbi tellus suspendisse, faucibus metus id maecenas aenean pretium. Ligula faucibus nunc libero et sem, commodo lacus tincidunt porta, in enim venenatis vitae aliquam justo ut. Vel neque, ligula quisque suspendisse pharetra ligula sapien libero, nec etiam nulla sociosqu eros amet turpis. Nulla etiam arcu faucibus ut. Ligula vehicula. Fringilla ornare ante, urna dui, ac proin consequat imperdiet mauris et nulla.
					<br>
					<br>
					Sed at sit hendrerit sit proin risus. Dui quam nulla orci eu ornare urna, ut platea tempor, ligula sed lectus ligula justo, cursus leo pellentesque aptent rhoncus primis metus. Lacus maecenas vestibulum suspendisse, tincidunt sollicitudin, a mauris ut suspendisse libero fusce, et ultrices sed eros sed convallis, pede massa fusce. Laoreet curabitur. Faucibus velit eget, maecenas dui fusce praesent elementum, turpis nisl.
					<br>
					<br>
					Diam semper fringilla nullam nulla, posuere in tincidunt nec et ullamcorper, in nibh curabitur erat leo ut. Eget mauris imperdiet fusce donec massa cursus, vel nullam, elit eget. Nec eget id fusce commodo velit nec. Cras mauris leo fringilla orci expedita, fringilla iaculis tempus risus, ante tempus viverra consequat in est, velit pellentesque dui imperdiet nisl incididunt urna, hymenaeos non pretium suscipit. Eu orci, elementum massa non nam, metus faucibus ac elementum magnis lacinia, nunc netus eu duis eu, metus nascetur magnis. Quis feugiat, ut aliquet sit tellus sapien curabitur et, id blandit volutpat vestibulum lorem risus. Lacinia mi nam luctus porttitor dictum ut, lectus augue quis elit recusandae non gravida, erat enim. Fusce massa consectetuer in pede pede, sem orci dolor, porttitor eleifend dapibus fusce lacinia donec. Neque pulvinar tellus neque fusce massa, dolor felis.
					<br>
					<br>
					Mauris quis id nisl venenatis integer erat. Pretium vestibulum nulla sagittis amet interdum luctus, amet ultricies phasellus, erat eget delectus donec morbi tellus suspendisse, faucibus metus id maecenas aenean pretium. Ligula faucibus nunc libero et sem, commodo lacus tincidunt porta, in enim venenatis vitae aliquam justo ut. Vel neque, ligula quisque suspendisse pharetra ligula sapien libero, nec etiam nulla sociosqu eros amet turpis. Nulla etiam arcu faucibus ut. Ligula vehicula. Fringilla ornare ante, urna dui, ac proin consequat imperdiet mauris et nulla.
					<br>
					<br>
					Sed at sit hendrerit sit proin risus. Dui quam nulla orci eu ornare urna, ut platea tempor, ligula sed lectus ligula justo, cursus leo pellentesque aptent rhoncus primis metus. Lacus maecenas vestibulum suspendisse, tincidunt sollicitudin, a mauris ut suspendisse libero fusce, et ultrices sed eros sed convallis, pede massa fusce. Laoreet curabitur. Faucibus velit eget, maecenas dui fusce praesent elementum, turpis nisl.
				</p>
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
</body>
</html>