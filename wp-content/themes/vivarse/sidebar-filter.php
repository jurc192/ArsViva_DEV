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

*/

	$post_types = get_post_types(array(), "names");

?>

<aside id="filter-sidebar" class="filter-sidebar">
	<?php dynamic_sidebar( 'sidebar-filter' ); ?>


	<!-- Naredi formo sam -->
	<!-- Style mora bit inline zaradi javascripta -->
	<form id="filter-popup" class="filter-popup" style="display: none;" action="index.html" method="post">
		<h1>TEST FORM</h1>
		<input type="radio" name="post-type" value="event" checked> Dogodki
		<input type="radio" name="post-type" value="post"> Objave
		<input type="submit" value="Submit">
	</form>

	<h3 class="toggle-filter" onclick="toggleFilter()">FILTER</h3>
</aside><!-- #filter-sidebar -->
