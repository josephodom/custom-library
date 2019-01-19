<?php

// Kick people out if they come here
// index.php defines this constant before including me
if(!defined('IN_SITE')){
	header('Location: index.php');
	die();
}

?>
<section id="form" class="padding-vertical-large">
	<div class="container">
		<h1 class="heading-medium margin-bottom-medium">
			Forms
		</h1>

		<div class="box padding-medium">
			<form>
				<div class="flex-table">
					<div class="cell-12">
						<div class="field-container margin-bottom-medium">
							<h2 class="field-title">
								Your Name
							</h2>
							
							<input type="text" name="your-name" class="field" placeholder="Your Name">
						</div><!-- .field-container --->
					</div><!-- .cell -->
					
					<div class="cell-12">
						<div class="field-container margin-bottom-medium">
							<h2 class="field-title">
								Your Email
							</h2>
							
							<input type="email" name="your-email" class="field" placeholder="Your Email">
						</div><!-- .field-container -->
					</div><!-- .cell -->
					
					<div class="cell-12 cell-large-6">
						<div class="field-container margin-bottom-medium">
							<h2 class="field-title">
								Choose One
							</h2>
							
							<select name="option" class="field">
								<option>---</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div><!-- .field-container -->
					</div><!-- .cell -->
					
					<div class="cell-12 cell-large-6">
						<div class="field-container margin-bottom-medium">
							<h2 class="field-title">
								Choose Another
							</h2>
							
							<select name="option" class="field">
								<option>---</option>
								<option value="red">Red</option>
								<option value="blue">Blue</option>
								<option value="green">Green</option>
							</select>
						</div><!-- .field-container -->
					</div><!-- .cell -->
					
					<div class="cell-12">
						<div class="field-container margin-bottom-medium">
							<h2 class="field-title">
								Your Message
							</h2>
							
							<textarea name="message" class="field" placeholder="What do you have to say?"></textarea>
						</div>
					</div><!-- .cell -->
					
					<div class="cell-12">
						<button type="submit" class="button button-blue">
							Submit
						</button>
						
						<button type="submit" class="button button-gray">
							Reset
						</button>
					</div><!-- .cell -->
				</div>
			</form>
		</div>
	</div><!-- .container -->
</section><!-- #form -->