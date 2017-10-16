<html>
<?php
	$title = "Login";
	include '_includes/head.php'
?>
<body>
	<!-- INCLUDE NAV -->
	<?php
		include '_includes/nav.php';
	?>
	<!-- PAGE CONTENT -->
	<div class="container pt-4">
		<div class="row">
			<div class="col-md-12">
				<h3>Login</h3>
				<hr>
				<form method >
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-group">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox"> Remember me
							</label>
						</div>
					</div>
					<input type="submit" class="btn btn-lg btn-primary mr-3" value="Login" style="cursor: pointer;"></input>
					<a href="register" class="btn btn-lg btn-primary">Register</a>
				</form>
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