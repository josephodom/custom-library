<?php

// Kick people out if they come here
// index.php defines this constant before including me
if(!defined('IN_SITE')){
	header('Location: index.php');
	die();
}

?>
<section id="flex-table" class="padding-vertical-large bg-green">
	<div class="container">
		<h1 class="heading-medium">
			Flex Table
		</h1>

		<p>
			The <code>.flex-table</code> class is useful for creating responsive layouts, both simple &amp; elaborate!
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
	</div><!-- .container -->
</section><!-- #flex-table -->