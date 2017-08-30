<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vivarse
 */

 /* I put most of the php stuff here, to make template more readable */

 $post_id = get_the_ID();
 $post_title = get_the_title();

 $dateformat = get_option( 'date_format' );
 $event_time = get_post_meta( $post_id, 'event-start-date', true );

 $event_location = get_post_meta( $post_id, 'event-location', true);

 if (has_post_thumbnail()) :
   $thumb_id = get_post_thumbnail_id();
   $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail', false);
   $thumb_url = $thumb_url_array[0];
 else:
   $thumb_url = get_bloginfo('template_url') . "/images/home-fotka1.jpg";
 endif;



?>

<article id="post-<?php the_ID(); ?>" <?php post_class('nofp'); ?>>
	<header class="entry-header">

		<!-- Event thumbnail -->
		<img class="thumb" src="<?php echo $thumb_url?>" alt="fotka1">

		<!-- Event title -->
		<h2 class="entry-title">
			<a href=<?php echo esc_url( get_permalink()); ?> rel="bookmark"><?php echo $post_title; ?></a>
		</h2>

		<div class="entry-meta">
			<!-- Type of the event (category) -->
			<?php the_terms($post_id, 'event_cat', '<span class="type">', ', ', '</span><br>'); ?>

			<!-- Posted on () -->
			<?php vivarse_posted_on(); ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<a class="readmore" href="#">Read more</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
