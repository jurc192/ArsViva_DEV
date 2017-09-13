<?php
/**
 * Template part for displaying posts on FRONT PAGE
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vivarse
 */

/*
  General structure:

  article
    -image
    -text_tile
      -header
        -title
        -metadata (type, time, location)
      -content
*/


/* I put most of the php stuff here, to make template more readable */

$post_id = get_the_ID();
$post_title = get_the_title();

$dateformat = get_option( 'date_format' );
$event_time = get_post_meta( $post_id, 'event-start-date', true );

$event_location = get_post_meta( $post_id, 'event-location', true);

if (has_post_thumbnail()) :
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', false);
  $thumb_url = $thumb_url_array[0];
else:
  $thumb_url = get_bloginfo('template_url') . "/images/home-fotka1.jpg";
endif;

 ?>

<article id="post-<?php echo $post_id; ?>" <?php post_class('section'); ?>>
  <img class="backgr" src="<?php echo $thumb_url?>" alt="fotka1">

  <div class="text-tile">
    <header class="entry-header">

      <!-- Event title -->
      <h2 class="entry-title">
        <a href=<?php echo esc_url( get_permalink()); ?> rel="bookmark"><?php echo $post_title; ?></a>
      </h2>

  		<div class="entry-meta">

        <!-- Type of the event (category) -->
        <?php //the_terms($post_id, 'event_cat', '<span class="type">', ', ', '</span><br>'); ?>

        <!-- Time of the event -->
        <p class='info'>
          <span>Kdaj: </span>
          <?php echo date_i18n($dateformat, $event_time, false); ?>
          <!-- i18n transforms time form Unix- to users- time format -->
        </p>

        <!-- Location of the event -->
        <p class='info'>
          <span>Kje: </span>
          <?php echo $event_location; ?>
        </p>

        <!-- Posted on () -->
        <?php vivarse_posted_on(); ?>

  		</div><!-- .entry-meta -->
  	</header><!-- .entry-header -->


  	<div class="entry-content">

  		<?php
        the_excerpt();

  			wp_link_pages( array(
  				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vivarse' ),
  				'after'  => '</div>',
  			) );
  		?>

  	</div><!-- .entry-content -->


  	<footer class="entry-footer">
      <!-- EMTPY FOR NOW -->
  	</footer>

  </div><!-- .text-tile -->
</article><!-- #post-<?php the_ID(); ?> -->
