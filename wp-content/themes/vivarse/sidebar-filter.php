<?php
/**
 * The sidebar containing filter
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivarse
 */

// if ( ! is_active_sidebar( 'sidebar-filter' ) ) {
// 	return;
// }
?>

<aside id="filter-sidebar" class="filter-sidebar">
	<?php dynamic_sidebar( 'sidebar-filter' ); ?>

	<?php
		echo do_shortcode('[searchandfilter
		fields="search,post_types,category,post_date"
		types="select, check, radio, date"
		post_types="post,event"
		]');
	?>

	<a class="toggle-filter" href="#"><h3>FILTER</h3></a>
</aside><!-- #filter-sidebar -->
