<?php
/*************************************************
	Front page
	Displaying upcoming events and front-page posts
*************************************************/

/*
Custom query za front page - upcoming EVENTS
*/
$today = strtotime( 'today' );

// Poglej če ni event že mimo
$my_meta_query = array(
	'relation' => 'AND',
	array(
		'key' => 'event-date',
		'value' => $today,
		'compare' => '>=',
		'type' => 'NUMERIC'
	)
);

$myquery_args = array(
	'post_type' => 'event',
	'post_status' => 'publish',
	'meta_key' => 'event-date',
	'orderby' => 'meta_value_num',
	'order' => 'ASC',
	'posts_per_page' => 5,
	'meta_query' => $my_meta_query,
);

$my_event_query = new WP_Query($myquery_args);

$landing_art = get_field("landing_art");
$quote_overlay = get_field("quote_overlay");

get_header('nofp'); ?>


	<main id="main" class="site-main-nofp front">

	<section class="landing-art">
		<!-- Using custom template-tag for readability @/inc/template-tags.php -->
		<?php landing_video($landing_art, $quote_overlay); ?>
	</section>


	<section class="post-container">

		<?php
		/* Custom query za front page - front page POSTS */
		$my_post_query_args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' => 'front-page',
			'posts_per_page' => 10,
		);

		$my_post_query = new WP_Query($my_post_query_args);

		if ( $my_post_query->have_posts() ) :
			if ( is_front_page() ):

				while( $my_post_query->have_posts() ) : $my_post_query->the_post();
					get_template_part( 'template-parts/content', 'posts' );
				endwhile;

			else:
				// echo "<h1 style='z-index: 15; position: absolute; top: 100px; left: 100px;'>NOT FIRST PAGE!</h1>";
			endif;

		else:
			// echo "<h1 style='z-index: 15; position: absolute; top: 200px; left: 100px;'>I DON'T HAVE ANY POSTS</h1>";
		endif;

		wp_reset_postdata();
		?>

	</section>

<?php
get_sidebar();
get_footer('nofp');
