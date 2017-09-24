<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vivarse
 */

get_header('nofp'); ?>


	<main id="main" class="site-main-nofp">

	<?php
	while ( have_posts() ) : the_post();
		// če je post type: POST
		if ('post' == get_post_type()):
			get_template_part( 'template-parts/content-single', 'post' );

		// če je post type: EVENT
		elseif ('event' == get_post_type()):
			get_template_part('template-parts/content-single', 'event');

		// če ni nič
		// če gre vse v kurac
		else:
			echo "NEKI NE DELA!";
		endif;

	endwhile;
	?>


	<?php if ( is_active_sidebar( 'sidebar-social' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-social' ); ?>
	<?php endif; ?>
	
	</main><!-- #main -->

<?php
get_sidebar();
get_footer('nofp');
