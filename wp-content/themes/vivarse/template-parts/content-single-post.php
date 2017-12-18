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
      -content
*/


/* I put most of the php stuff here, to make template more readable */

$post_id = get_the_ID();
$post_title = get_the_title();

// Article "featuring photo"
if (has_post_thumbnail()) :
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', false);
  $thumb_url = $thumb_url_array[0];
else:
  // neka generic fotka. Zamenjaj za kej pametnega, ne pa ta random
  $thumb_url = get_bloginfo('template_url') . "/images/home-fotka1.jpg";
endif;


// Post gallery stuff
$post_gallery = acf_photo_gallery('galerija_prispevka', $post_id);
// $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160);

?>

<article id="post-<?php echo $post_id; ?>" <?php post_class('single'); ?>>

  <div class="text-tile-single">
    <header class="entry-header">
      <!-- <img class="backgr" src="<?php echo $thumb_url?>" alt="fotka1"> -->

      <!-- Event title -->
      <h2 class="entry-title">
        <a href=<?php echo esc_url( get_permalink()); ?> rel="bookmark"><?php echo $post_title; ?></a>
      </h2>

      <!-- Posted on () -->
      <?php vivarse_posted_on(); ?>

  	</header><!-- .entry-header -->

  	<div class="entry-content">
      <!-- TO ZAENKRAT PUSTIM TAKO, PREŠTUDIRAJ! -->
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
      <!-- EMTPY FOR NOW -->
  	</footer>

  </div><!-- .text-tile -->

  <div class="post-gallery">

  <?php
    // preveri, če je kaj slik v galeriji
    if (count($post_gallery)) :
      foreach($post_gallery as $image): ?>
        <img class="pg-img" src="<?php echo $image['full_image_url']; ?>" alt="test">
        <?php
      endforeach;
    endif;
   ?>

  </div>
</article><!-- #post-ID -->
