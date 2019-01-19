<?php

// Kick people out if they come here
// index.php defines this constant before including me
if(!defined('IN_SITE')){
	header('Location: index.php');
	die();
}

?>
<section id="callout" class="padding-vertical-large-large bg-brown subtle-shadow">
	<div class="container">
		<div class="flex-table align-items-center">
			<div class="cell-12 cell-large-8 padding-vertical-medium padding-vertical-none-large text-center text-left-large">
				<h1 class="heading-large text-uppercase">
					This Is A Callout!
				</h1>
			</div><!-- .cell -->
			
			<div class="cell-12 cell-large-4 padding-vertical-medium padding-vertical-none-large text-center text-right-large">
				<a href="#" class="button button-purple">
					Click Me
				</a>
			</div><!-- .cell -->
		</div><!-- .flex-table -->
	</div><!-- .container -->
</section><!-- #callout -->