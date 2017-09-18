<?php
/**
 * The sidebar containing filter
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivarse
 */

/* Original je tukaj bil pogoj: if sidebar active...je to važno? */
/*
	Kaj sploh more filter delat?

	- POST-TYPE (posts, events)

	- EVENTS taxonomy (categories)
	- EVENTS start-date (RANGE!)

	- SEARCH
	- ARCHIVE

*/

	$post_types = get_post_types(array(), "names");

?>

<aside id="filter-sidebar" class="filter-sidebar">
	<?php dynamic_sidebar( 'sidebar-filter' ); ?>

	<img class="toggle-filter" onclick="toggleFilter()" src="<?php bloginfo('template_url'); ?>/images/search2.png" alt="search icon">
</aside><!-- #filter-sidebar -->

<!-- Naredi formo sam -->
<!-- Style mora bit inline zaradi javascripta -->
<!-- Naredi da bo obkljukan tisti post-type kot si ga izbral (je v $_GET) -->
<form id="filter-popup" class="filter-popup" style="display: none;" action="" method="get">

	<img onclick="toggleFilter()" class="close-btn" src="<?php bloginfo('template_url'); ?>/images/close_black_27x27.png" alt="close filter">

	<ul class="filter-options">
		<li>
			<input type="radio" id="event-type" class="radio-btn" name="vivarse-post-type" value="event">
			<label class="radio-btn" for="event-type">Dogodki</label>
		</li>
		<li>
			<input type="radio" id="post-type" class="radio-btn" name="vivarse-post-type" value="post">
			<label class="radio-btn" for="post-type">Objave</label>
		</li>
	</ul>

	<!-- Events option box -->
	<div id="event-options" class="event-options" style="display: none;">
		<hr class="divider">

		<h3 class="filter-headings">Tip dogodka</h3>

		<!-- Definirano v inc/template-tags.php -->
		<!-- Posts, Events - radio buttons -->
		<?php vivarse_event_options(); ?>

		<hr class="divider">

		<h3 class="filter-headings">Datum dogodka</h3>
		<input type="text" name="vivarse-date" id="datepicker">
	</div>

	<!-- Posts option box -->
	<div id="post-options" class="event-options" style="display: none;">
		<hr class="divider">

		<h3 class="filter-headings">Datum objave</h3>
		<input type="text" name="vivarse-date" id="datepicker-post">
	</div>


	<input class="submit-btn" type="submit" value="potrdi">
</form>
