<?php

// This page is used on "DOGODKI" page.

get_header('nofp'); ?>

	<main id="main" class="site-main-nofp">

		<?php echo do_shortcode('[searchandfilter fields="search,category"]'); ?>

    <?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();

				get_template_part('template-parts/content-events');

			endwhile;

			the_posts_pagination( array('mid_size' => 5));

		else :

			echo "I DONT HAVE POSTS \n";
			// get_template_part( 'template-parts/content', 'none' );

		endif; ?>


<?php

/* Special footer, for non-full-page scrolling stuff */
get_footer('nofp');
