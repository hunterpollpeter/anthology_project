<?php
	require_once './data/data_layer.php';
	$archivedIssues = data::getArchivedIssues();
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary navbar-fixed fixed-top">
	<div class="container">
		<a class="navbar-brand" href="./<?php echo isset($issueYear) ? "?issue=" . $issueYear : ""; ?>">
			The Writing Anthology <span class="year"><?php echo isset($issueYear) ? $issueYear : ""; ?></span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="./<?php echo isset($issueYear) ? "?issue=" . $issueYear : ""; ?>#contents">Contents</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Archives
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="./">Current</a>
						<?php 
							for ($i = 0; $i < count($archivedIssues); $i++) echo "<a class=\"dropdown-item\" href=\"./?issue=$archivedIssues[$i]\">$archivedIssues[$i]</a>";
						?>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav float-none float-sm-right">		
				<li class="nav-item">
					<a class="nav-link" href="login">Login / Register</a>
				</li>
			</ul>
		</div>
	</div>
</nav>