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

		<a class="site-logo" href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="ArsViva logo"></a>
		<button class="menu-toggle" style="background-image: url(<?php bloginfo('template_url'); ?>/images/ic_menu_black_24px.svg);" aria-controls="primary-menu" aria-expanded="false"></button>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container'			 => 'false'
			) );
		?>

	</nav><!-- #site-navigation .main-navigation -->
</header><!-- #masthead .site-header-->
<?php //global $template; echo basename($template); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vivarse' ); ?></a>

	<div class="git-popup" id="gitContainer" onclick="gitPopup()">
		<span class="git-text" id="gitText"><?php get_git_info(); ?></span>
	</div>
