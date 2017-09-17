<html>
<head>
	<title>The Writing Anthology - Login</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Rokkitt">
	<link rel="stylesheet" href="../../assets/bootstrap.css">
	<link rel="stylesheet" href="assets/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<?php
		include '_includes/nav.php';
	?>
	<div class="navDisplacement"></div>
	<div class="container pt-4">
		<div class="row">
			<div class="col-md-12">
				<h3>Login</h3>
				<hr>
				<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary mr-3">Login</button>
					<a href="register" class="btn btn-primary">Register</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>