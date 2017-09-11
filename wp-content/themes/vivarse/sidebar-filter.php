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
?>

<aside id="filter-sidebar" class="filter-sidebar" onclick="toggleFilter()">
	<?php dynamic_sidebar( 'sidebar-filter' ); ?>

	<!-- Naredi formo sam -->
	<!-- Style mora bit inline zaradi javascripta -->
	<form id="filter-popup" class="filter-popup" style="display: none;" action="index.html" method="post">
		<h1>TEST FORM</h1>
	</form>

	<h3 class="toggle-filter">FILTER</h3>
</aside><!-- #filter-sidebar -->
