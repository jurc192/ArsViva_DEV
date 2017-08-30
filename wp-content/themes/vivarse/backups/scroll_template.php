<?php /* Template Name: Scroll template

<!DOCTYPE html>
<html>
<head>
	= head stuff =
</head>

<body>
<header class='site-header'>
	<nav class='main-navigation'> =nav stuff= </nav>
</header>

<div class='site'>
*/
get_header(); ?>

	<main id="main" class="site-main">

		<?php
		/* Custom query za front page - upcoming events */
		$myquery = new WP_Query(array('cat'=> 3));

		if ( $myquery->have_posts() ) :
			if ( is_front_page() ):

				while( $myquery->have_posts() ) : $myquery->the_post();
					get_template_part( 'template-parts/content', 'home' );
				endwhile;

			else:
				echo "<h1 style='z-index: 15; position: absolute; top: 100px; left: 100px;'>NOT FIRST PAGE!</h1>";
			endif;

		else:
			echo "<h1 style='z-index: 15; position: absolute; top: 200px; left: 100px;'>I DON'T HAVE ANY POSTS</h1>";
		endif;

		wp_reset_postdata();

		// Ideally footer would be outside <main> but

/* Footer tags:

	<footer class='site-footer'>
		<div class='site-info'> =footer stuff= </div>
	</footer><!-- .site-footer -->

</div><!-- .site -->
</body>
</html>


*/
get_footer();
