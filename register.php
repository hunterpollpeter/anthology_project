<html>
<head>
	<title>The Writing Anthology - Register</title>
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
				<h3>Register</h3>
				<hr>
				<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">First Name</label>
						<input type="text" class="form-control" id="FirstName" placeholder="First Name">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Last Name</label>
						<input type="text" class="form-control" id="LastName" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Confirm Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>