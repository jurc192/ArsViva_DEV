<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivarse
 */

if ( ! is_active_sidebar( 'sidebar-filter' ) ) {
	return;
}
?>

<aside id="filter-sidebar" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-filter' ); ?>
</aside><!-- #filter-sidebar -->
