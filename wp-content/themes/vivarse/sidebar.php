<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivarse
 */
?>

	<aside class="social-media-sidebar">

		<div class="sidebar-icon-wrapper">
			<a href="https://www.facebook.com/ARS-VIVA-158123837631509/">
				<img class="sidebar-icon" src="<?php bloginfo('template_url'); ?>/images/sidebar-fb.png" alt="visit us on facebook">
			</a>

			<a href="http://arsviva.znidarsic.net/">
				<img class="sidebar-icon" src="<?php bloginfo('template_url'); ?>/images/sidebar-google.png" alt="visit us on google plus">
			</a>

			<a href="https://www.youtube.com/channel/UCqeegXsm_BkkVDH3mms_xdw">
				<img class="sidebar-icon" src="<?php bloginfo('template_url'); ?>/images/sidebar-yt.png" alt="visit us on youtube">
			</a>
		</div>

		<img id="accToggle" onclick="toggleMode()" class="access-icon sidebar-icon" src="<?php bloginfo('template_url'); ?>/images/accessibility3.png" alt="toggle accessibility mode">
	</aside>

	<!-- <div class="accessibility-menu">
		<img onclick="toggleMode()" class="access-icon sidebar-icon" src="<?php bloginfo('template_url'); ?>/images/ic_mouse_black_24dp_2x.png" alt="toggle accessibility mode">
	</div> -->
