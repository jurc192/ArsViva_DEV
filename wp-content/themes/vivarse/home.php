<?php

// This page is used on "DOGODKI" page.

get_header('nofp'); ?>

	<main id="main" class="site-main-nofp">

    <?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();

				get_template_part('template-parts/content-events');

			endwhile;

			the_posts_navigation();

		else :

			echo "I DONT HAVE POSTS \n";
			// get_template_part( 'template-parts/content', 'none' );

		endif; ?>


<?php

/* Special footer, for non-full-page scrolling stuff */
get_footer('nofp');
