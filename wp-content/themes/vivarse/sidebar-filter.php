<?php
/**
 * The sidebar containing filter
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivarse
 */

/* Original je tukaj bil pogoj: if sidebar active...je to važno? */
?>

<aside id="filter-sidebar" class="filter-sidebar">
	<?php dynamic_sidebar( 'sidebar-filter' ); ?>

	<?php
		echo do_shortcode('[searchandfilter
		fields="search,post_types,category,post_date"
		types=",check,radio,daterange"
		post_types="post,event"
		]');

		// Naredi sam!
	?>

	<h3 class="toggle-filter" onclick="toggleFilter()">FILTER</h3>
</aside><!-- #filter-sidebar -->
