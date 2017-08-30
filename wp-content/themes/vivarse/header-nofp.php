<?php
/**
 * Vivarse header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivarse
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header">
	<nav id="site-navigation" class="main-navigation">

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'vivarse' ); ?></button>
		<a class="site-logo" href="http://localhost/ArsViva_DEV/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="ArsViva logo"></a>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container'			 => 'false'
			) );
		?>

	</nav><!-- #site-navigation .main-navigation -->
</header><!-- #masthead .site-header-->

<div id="page-nojs" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vivarse' ); ?></a> -->
