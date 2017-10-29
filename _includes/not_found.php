<html>
<head>
<?php
	$title = "$object Not Found";
	include '_includes/head.php'
?>
</head>
<body>
	<!-- INCLUDE NAV -->
	<?php
		include '_includes/nav.php';
	?>
	<!-- PAGE CONTENT -->
	<div class="container pt-4">
		<h3><?php echo $object ?> Not Found</h3>
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