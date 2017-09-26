<?php
/**
 * Template part for EVENTS page, EVENT TILES
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

 if (has_post_thumbnail()) :
   $thumb_id = get_post_thumbnail_id();
   $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail', false);
   $thumb_url = $thumb_url_array[0];
   $thumb_alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
 else:
   $thumb_url = get_bloginfo('template_url') . "/images/home-fotka1.jpg";
   $thumb_alt = "Post / Event image";
 endif;



?>

<article id="post-<?php the_ID(); ?>" <?php post_class('tile'); ?>>
	<header class="tile-header">

		<!-- Event thumbnail -->
    <?php the_post_thumbnail('medium', array('class' => 'thumb', 'alt' => $thumb_alt)); ?>

		<!-- Event title -->
		<h2 class="tile-title">
			<a href=<?php echo esc_url( get_permalink()); ?> rel="bookmark"><?php echo $post_title; ?></a>
		</h2>

		<div class="tile-meta">

      <!-- Time of the event -->
      <p class='tile-info'>
        <span>
          <?php echo "Kdaj: ", date_i18n($dateformat, $event_time, false); ?>
          <!-- i18n transforms time form Unix- to users- time format -->
        </span>
      </p>

			<!-- Posted on () -->
			<?php vivarse_posted_on(); ?>

      <!-- Type of the event (category) -->
      <?php the_terms($post_id, 'event_cat', '<span class="type">', ', ', '</span>'); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="tile-content event">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="tile-footer">
    <!-- READ MORE -->
    <a href=<?php echo esc_url( get_permalink()); ?> rel="bookmark">preberi več</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
