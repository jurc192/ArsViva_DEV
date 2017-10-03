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

get_header(); ?>


	<main id="main" class="site-main">

		<section class="section landing-art">

			<video id="intro-video" muted loop autoplay data-keepplaying data-autoplay>
			<source src="<?php echo get_bloginfo('template_url').'/images/Intro_exp.mp4' ?>" type="video/mp4">
			<img src="<?php echo get_bloginfo('template_url').'/images/home-fotka2.jpg' ?>" title="Your browser does not support the <video> tag">
		</video>
		<img id="intro-napis" src="<?php echo get_bloginfo('template_url').'/images/intro-napis.png' ?>" alt="Ars viva: Na krilih priložnosti za prihodnost">
		<img id="intro-scroll" src="<?php echo get_bloginfo('template_url').'/images/scroll-white.png' ?>" alt="Puščica navzdol">

	</section>

		<section class="section">

			<div class="tile-wrapper">

				<div class="label-wrapper">
					<h1>Prihajajoči<br>dogodki:</h1>
				</div>
				<?php
				if ( $my_event_query->have_posts() ) :
					if ( is_front_page() ):

						while( $my_event_query->have_posts() ) : $my_event_query->the_post();
							get_template_part( 'template-parts/content', 'front-event-tile' );
						endwhile;

					else:
						// echo "<h1 style='z-index: 15; position: absolute; top: 100px; left: 100px;'>NOT FIRST PAGE!</h1>";
					endif;

				else:
					// echo "<h1 style='z-index: 15; position: absolute; top: 200px; left: 100px;'>I DON'T HAVE ANY EVENTS</h1>";
				endif;

				wp_reset_postdata();
				?>

			</div>
		</section>


		<?php
		/* Custom query za front page - front page POSTS */
		$my_post_query_args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' => 'front-page',
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
