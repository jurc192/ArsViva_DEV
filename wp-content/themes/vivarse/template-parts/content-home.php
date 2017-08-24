<?php
/**
 * Template part for displaying posts on FRONT PAGE
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vivarse
 */
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
  <img class="backgr" src="<?php bloginfo('template_url'); ?>/images/home-fotka1.jpg" alt="fotka1">

  <div class="text-tile">

    <header class="entry-header">
  		<?php
  			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

  		if ( 'post' === get_post_type() ) : ?>
  		<div class="entry-meta">
  			<?php vivarse_posted_on(); ?>
  		</div><!-- .entry-meta -->
  		<?php
  		endif; ?>
  	</header><!-- .entry-header -->

  	<div class="entry-content">
  		<?php
  			the_content( sprintf(
  				wp_kses(
  					/* translators: %s: Name of current post. Only visible to screen readers */
  					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vivarse' ),
  					array(
  						'span' => array(
  							'class' => array(),
  						),
  					)
  				),
  				get_the_title()
  			) );

  			wp_link_pages( array(
  				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vivarse' ),
  				'after'  => '</div>',
  			) );
  		?>
  	</div><!-- .entry-content -->

  	<footer class="entry-footer">
  		<?php //vivarse_entry_footer(); ?>
      <!-- READ MORE -->
  	</footer><!-- .entry-footer -->

  </div><!-- .text-tile -->
</article><!-- #post-<?php the_ID(); ?> -->
