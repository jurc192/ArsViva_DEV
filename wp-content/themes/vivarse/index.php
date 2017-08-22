<?php

get_header(); ?>

	<div id="primary" class="content-area">
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
			</footer><!-- #colophon -->


		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
