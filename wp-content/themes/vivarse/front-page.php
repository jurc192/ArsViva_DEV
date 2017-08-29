<?php
get_header(); ?>

	<main id="main" class="site-main">

		<?php

		/* Custom query za front page - upcoming events */
		$today = strtotime( 'today' );

		/* Poglej če ni event že mimo */
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
			'meta_query' => $my_meta_query,
		);

		$my_event_query = new WP_Query($myquery_args);

		if ( $my_event_query->have_posts() ) :
			if ( is_front_page() ):

				while( $my_event_query->have_posts() ) : $my_event_query->the_post();
					get_template_part( 'template-parts/content', 'front-event' );
				endwhile;

			else:
				echo "<h1 style='z-index: 15; position: absolute; top: 100px; left: 100px;'>NOT FIRST PAGE!</h1>";
			endif;

		else:
			echo "<h1 style='z-index: 15; position: absolute; top: 200px; left: 100px;'>I DON'T HAVE ANY EVENTS</h1>";
		endif;

		wp_reset_postdata();


		/* Custom query za front page - front page posts */
		$my_post_query_args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' => 'front-page',
		);

		// $my_post_query = new WP_Query($my_post_query_args);
		//
		// if ( $my_post_query->have_posts() ) :
		// 	if ( is_front_page() ):
		//
		// 		while( $my_post_query->have_posts() ) : $my_post_query->the_post();
		// 			get_template_part( 'template-parts/content', 'front-post' );
		// 		endwhile;
		//
		// 	else:
		// 		echo "<h1 style='z-index: 15; position: absolute; top: 100px; left: 100px;'>NOT FIRST PAGE!</h1>";
		// 	endif;
		//
		// else:
		// 	echo "<h1 style='z-index: 15; position: absolute; top: 200px; left: 100px;'>I DON'T HAVE ANY POSTS</h1>";
		// endif;
		//
		// wp_reset_postdata();


get_footer();
