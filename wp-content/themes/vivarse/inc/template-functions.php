<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package vivarse
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function vivarse_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'vivarse_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function vivarse_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'vivarse_pingback_header' );


function get_git_info() {

	// Array za shranit shell output, vrstico po vrstico
	$shellOutput = [];
	$rootDirectory = ABSPATH;

	// echo ABSPATH;

	exec("git -C $rootDirectory status 2>&1", $shellOutput);
	echo $shellOutput[0];

}
// bi moral tukaj dat add_action? zakaj?


// JURE EDIT
// Show posts of 'post', and 'event' post types on home page
function add_event_post_types( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'event' ) );
  return $query;
}
add_action( 'pre_get_posts', 'add_event_post_types' );
