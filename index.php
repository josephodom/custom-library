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
		<?php
		include 'section-flex-table.php';
		?>
		
		
		<h1 class="heading-small">
			Forms
		</h1>
		
		<div class="box padding-large">
			<form>
				<div class="field-container">
					<h2 class="field-title">
						Your Name
					</h2>
					
					<input type="text" name="your-name" class="field" placeholder="Your Name">
				</div>
				
				<div class="field-container">
					<h2 class="field-title">
						Your Email
					</h2>
					
					<input type="email" name="your-email" class="field" placeholder="Your Email">
				</div>
				
				<div class="field-container">
					<h2 class="field-title">
						Choose One
					</h2>
					
					<select name="option" class="field">
						<option>---</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
				</div>
			</form>
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