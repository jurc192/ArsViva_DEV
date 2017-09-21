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

	$my_project_query = new WP_Query($my_project_query_args);

get_header(); ?>

	<main id="main" class="site-main">

<?php

	if ( $my_project_query->have_posts() ) :

		while( $my_project_query->have_posts() ) : $my_project_query->the_post();
			get_template_part( 'template-parts/content', 'front-post' );
		endwhile;

	else:
		echo "<article class='section'><h1 style='z-index: 15; position: absolute; top: 200px; left: 100px;'>Trenutno ni aktivnih projektov</h1></article>";
	endif;

	wp_reset_postdata();

get_sidebar();
get_footer();
