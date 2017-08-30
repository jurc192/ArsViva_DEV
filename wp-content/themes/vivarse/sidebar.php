<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivarse
 <aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


	<aside class="sajdbar">
		<div style="height: 30%;"></div>
		<a href="https://www.facebook.com/ARS-VIVA-158123837631509/">  <img id="top" class="sidebar-icon" src="<?php bloginfo('template_url'); ?>/images/sidebar-fb.png"></a>
		<a href="http://arsviva.znidarsic.net/"> <img class="sidebar-icon" src="<?php bloginfo('template_url'); ?>/images/sidebar-google.png"></a>
		<a href="https://www.instagram.com/explore/tags/arsviva/"> <img class="sidebar-icon" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png"></a>
		<a href="https://www.youtube.com/channel/UCqeegXsm_BkkVDH3mms_xdw"> <img class="sidebar-icon" src="<?php bloginfo('template_url'); ?>/images/sidebar-yt.png"></a>
	</aside>