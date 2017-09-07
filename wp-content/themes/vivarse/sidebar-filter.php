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

<aside id="filter-sidebar" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-filter' ); ?>

	<?php
		echo do_shortcode('[searchandfilter
		fields="search,post_types,category,post_date"
		types="radio, radio, radio, date" 
		post_types="post,event"
		]');
	?>
</aside><!-- #filter-sidebar -->
