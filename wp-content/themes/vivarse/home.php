<?php /*

This page is used on "DOGODKI" page.
Front page (real home page) uses scroll_template.php

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
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


		<!-- TEMPORARY HACK, PUT FOOTER OUT OF HERE! -->
		<footer id="colophon" class="site-footer section fp-auto-height">
	    <div class="site-info">
	      <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'vivarse' ) ); ?>"><?php
	        /* translators: %s: CMS name, i.e. WordPress. */
	        printf( esc_html__( 'Proudly powered by %s', 'vivarse' ), 'WordPress' );
	      ?></a>
	      <span class="sep"> | </span>
	      <?php
	        /* translators: 1: Theme name, 2: Theme author. */
	        printf( esc_html__( 'Theme: %1$s by %2$s.', 'vivarse' ), 'vivarse', '<a href="http://underscores.me/">Jure Vidmar, Primoz Prevc</a>' );
	      ?>
	    </div><!-- .site-info -->
	  </footer><!-- #colophon .site footer -->


	</main><!-- #main .site-main -->

<?php
/* Footer tags:

  <!-- MOVED THIS TO <main> FOR CSS/FULLPAGE REASONS TEMP -->
	<footer class='site-footer'>
		<div class='site-info'> =footer stuff= </div>
	</footer><!-- .site-footer -->

</div><!-- .site -->
</body>
</html>


*/
get_footer();
