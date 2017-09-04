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
		get_template_part( 'template-parts/content-single', 'post' );
		// če je post type: EVENT
		// če ni nič
		// če gre vse v kurac
	endwhile;
	?>

	</main><!-- #main -->

<?php
get_footer('nofp');
