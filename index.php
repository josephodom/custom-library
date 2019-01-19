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

<body>

<header id="header">
	<section id="header-main">
		<div class="container">
			Header
		</div>
	</section>
	
	<nav id="nav">
		<div class="container">
			<ul>
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
	<div class="container">
		<p>
			Body.
		</p>
		
		<div class="flex-table">
			<?=cells(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1)?>
			<?=cells(2, 2, 2, 2, 2, 2)?>
			<?=cells(3, 3, 3, 3)?>
			<?=cells(4, 4, 4)?>
			<?=cells(6, 6)?>
			<?=cells(12)?>
			<?=cells(7, 5)?>
		</div>
	</div>
</main>



<footer id="footer">
	<div class="container">
		Footer
	</div>
</footer>

</body>

</html>