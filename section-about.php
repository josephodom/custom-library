<?php

// Kick people out if they come here
// index.php defines this constant before including me
if(!defined('IN_SITE')){
	header('Location: index.php');
	die();
}

?>
<section id="about" class="padding-vertical-large">
	<div class="container">
		<h1 class="heading-x-large">
			So, What Is Ubiq.css?
		</h1>
		
		<p>
			Ubiq.css (short for ubiquitous &dash; you can use it everywhere!) is a custom, ground-up CSS framework (with
			a little bit of vanilla JavaScript). You can use it to make robust, response website layouts quickly, as it
			does a lot of boilerplate for you.
		</p>
		
		<h2 class="heading-medium">
			Why was this made?
		</h2>
		
		<p>
			Mostly, to show myself that I could! But also as a fun exercise in CSS/SASS, and to see what features I really find
			to be most useful in a CSS framework.
		</p>
		
		<h2 class="heading-medium">
			What can it do, precisely?
		</h2>
		
		<p>
			Great question! Briefly,
		</p>
		
		<ul>
			<li>
				It expands <code>&lt;html&gt;</code> and <code>&lt;body&gt;</code> to at least <code>100%</code> of the browser height,
				and if the page is less than the browser's height, it increases the size of <code>#main</code> to fill in any blank space
			</li>
			
			<li>
				It provides a <code>.container</code> class that snaps to a fixed width for each breakpoint. The maximum size is
				<code>1440px</code>!
			</li>
			
			<li>
				It provides a <code>.flex-table</code> class, perhaps the most powerful tool for responsive layouts. Fill it with
				<code>.cell-$</code> elements, which take up between one and twelve units wide, and respond to all breakpoints
			</li>
			
			<li>
				It creates <code>.text-$</code>, <code>.bg-$</code>, and <code>.button-$</code> classes for all registered colors (and classes
				for all shades, except for <code>.button</code>)
			</li>
			
			<li>
				It creates <code>.padding-$</code> and <code>.margin-$</code> classes with modifiers for direction, size, and breakpoint
			</li>
		</ul>
		
		<h2 class="heading-medium">
			What about the JavaScript?
		</h2>
		
		<p>
			There's a small amount of JavaScript in <code>ubiq.js</code>, and it has only one dependency: <code>stepInterval.js</code>, which is
			a plugin that I wrote.
		</p>
		
		<p>
			JavaScript accomplishes a few small things:
		</p>
		
		<ul>
			<li>
				Allowing <code>.full-screen</code> elements to have "exceptions"; that is, if the element doesn't naturally take up the full
				screen height, then you can set elements that cut into the extra space to make room for themselves. An example is the hero
				section on this very same web page; notice how the header above it &amp; the callout below it squeeze onto the screen, too
			</li>
			
			<li>
				Allowing you to click hash links in the navigation and, instead of snapping to it and adding the hash link to the URL, it slowly
				scrolls to it. Notice also that it activates the nav link leading to an element when you scroll past it
			</li>
		</ul>
		
		<h2 class="heading-medium">
			What is <code>stepInterval.js</code> for?
		</h2>
		
		<p>
			It's a function that creates &amp; returns a custom object that has an interval within an interval. It lets you set a function for when
			the interval is finished, and also another function that runs every 5ms (or whenever you set it to) so you can perform in-between actions,
			like perhaps a loading bar, or pausing the interval under certain conditions. It's used to animate the page scroll when you click a hash
			link.
		</p>
	</div><!-- .container -->
</section><!-- #about -->