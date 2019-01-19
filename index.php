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
			<!-- ROW 1 -->
			<?=cells(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1)?>
			
			<!-- ROW 2 -->
			<?=cells(2, 2, 2, 2, 2, 2)?>
			
			<!-- ROW 3 -->
			<?=cells(3, 3, 3, 3)?>
			
			<!-- ROW 4 -->
			<?=cells(4, 4, 4)?>
			
			<!-- ROW 5 -->
			<?=cells(6, 6)?>
			
			<!-- ROW 6 -->
			<?=cells(12)?>
			
			<!-- ROW 7 -->
			<?=cells(7, 5)?>
			
			<!-- ROW 8 -->
			<?=cells(3, 1)?>
			
			<div class="cell-4 offset-4 display-none display-block-large">
				<div class="box-simple">
					4/12 (offset 3/12)
				</div>
			</div>
			
			<!-- ROW 9 -->
			<div class="cell-12 cell-large-6">
				<div class="box-simple">
					Full on mobile, half on large
				</div>
			</div>
			
			<div class="cell-12 cell-large-6">
				<div class="box-simple">
					Full on mobile, half on large
				</div>
			</div>
			
			
			
			<!-- ROW 10 -->
			<div class="cell-6 cell-large-3">
				<div class="box-simple">
					Half on mobile, Quarter on large
				</div>
			</div>
			
			<div class="cell-6 cell-large-3">
				<div class="box-simple">
					Half on mobile, Quarter on large
				</div>
			</div>
			
			<div class="cell-6">
				<div class="box-simple">
					Half on all
				</div>
			</div>
			
			<div class="cell-6 cell-large-12">
				<div class="box-simple">
					Half on mobile, full on large
				</div>
			</div>
		</div><!-- .flex-table -->
	</div>
</main>



<footer id="footer">
	<div class="container">
		Footer
	</div>
</footer>

</body>

</html>