<?php
/*************************************************
	Projects page
	Displaying posts with PROJECT category
*************************************************/

	/* Custom query za PROJECT posts */
	$my_project_query_args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'category_name' => 'projekti',
		'posts_per_page' => 5,
	);

	$my_post_query = new WP_Query($my_post_query_args);

	if ( $my_post_query->have_posts() ) :
		if ( is_front_page() ):

			while( $my_post_query->have_posts() ) : $my_post_query->the_post();
				get_template_part( 'template-parts/content', 'front-post' );
			endwhile;

		else:
			// echo "<h1 style='z-index: 15; position: absolute; top: 100px; left: 100px;'>NOT FIRST PAGE!</h1>";
		endif;

	else:
		// echo "<h1 style='z-index: 15; position: absolute; top: 200px; left: 100px;'>I DON'T HAVE ANY POSTS</h1>";
	endif;

	wp_reset_postdata();

get_sidebar();
get_footer();
