<?php

// Kick people out if they come here
// index.php defines this constant before including me
if(!defined('IN_SITE')){
	header('Location: index.php');
	die();
}

?>
<section id="hero" class="full-screen display-flex align-items-center text-center" data-full-screen-except="#header,#callout">
	<div class="container">
		<div class="padding-vertical-large">
			<h1 class="heading-x-large heading-xxx-large-large margin-bottom-medium">
				Ubiq.css
			</h1>
			
			<h2 class="headling-medium heading-large-large margin-bottom-x-large">
				Use it everywhere!
			</h2>
			
			<div>
				<a href="download.zip" class="button button-purple heading-small" target="_blank">
					Download
				</a>
			</div>
		</div><!-- .padding-vertical -->
	</div><!-- .container -->
</section><!-- #hero -->