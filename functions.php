<?php

// Kick people out if they come here
// index.php defines this constant before including me
if(!defined('IN_SITE')){
	header('Location: index.php');
	die();
}





function cells(){
	// I always prefer returning values to echoing them
	// We're gonna echo in the function but use ob to return what's echoed
	ob_start();
	
	foreach(func_get_args() as $cell){
		// Just make sure $cell is an int no matter what
		// We're not dealing with banking info here!
		$cell = intval($cell);
		
		// Cell must be an int between 1 and 12, inclusive
		if($cell < 1 || $cell > 12){
			continue;
		}
		
		?><div class="cell-<?=$cell?> display-none display-block-large">
			<div class="box-simple">
				<?=$cell?> / 12
			</div>
		</div><?php
	}
	
	// Return what we echoed
	return ob_get_clean();
}

function convertFileSize($size){
	if(!($size = intval($size))){
		return 0;
	}
	
	$suffixes = [
		'',
		'K',
		'M',
		'G',
		'T',
	];
	$suffixIndex = 0;
	
	$denom = 1024;
	
	while($size > $denom){
		$size /= $denom;
		
		$suffixIndex++;
	}
	
	$size *= 10;
	$size = round($size);
	$size /= 10;
	
	return $size . ' ' . $suffixes[$suffixIndex] . 'B';
}

?>