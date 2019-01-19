<?php

define('IN_SITE', true);

require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/ubiq.min.css">
<title>Custom Library</title>
</head>

<body class="bg-white-dark">

<header id="header" class="default-header">
	<section id="header-main">
		<div class="container">
			Header
		</div>
	</section>
	
	<nav id="nav">
		<div class="container">
			<ul class="">
				<li>
					<a href="#">
						Top
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>



<main id="main">
	<?php
	include 'section-flex-table.php';
	include 'section-callout.php';
	include 'section-form.php';
	?>
</main>



<footer id="footer" class="default-footer">
	<div class="container">
		Footer
	</div>
</footer>

</body>

</html>