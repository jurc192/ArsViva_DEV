<?php /* Template Name: Scroll template

<!DOCTYPE html>
<html>
<head>
	= head stuff =
</head>

<body>
<header class='site-header'>
	<nav class='main-navigation'> =nav stuff= </nav>
</header>

<div class='site'>
*/
get_header(); ?>

	<main id="main" class="site-main">

		<section class="section">
			<h1>TEST SECTION</h1>
			<p>Bla bla lorem ipsum Bla bla lorem ipsum Bla bla lorem ipsum
				Bla bla lorem ipsumBla bla lorem ipsumBla bla lorem ipsumBla
				Bla bla lorem ipsumBla bla lorem ipsumBla bla lorem ipsum
				Bla bla lorem ipsumBla bla lorem ipsumBla bla lorem ipsum</p>
		</section>

		<section class="section">
			<h1>TEST SECTION</h1>
			<p>Bla bla lorem ipsum Bla bla lorem ipsum Bla bla lorem ipsum
				Bla bla lorem ipsumBla bla lorem ipsumBla bla lorem ipsumBla
				Bla bla lorem ipsumBla bla lorem ipsumBla bla lorem ipsum
				Bla bla lorem ipsumBla bla lorem ipsumBla bla lorem ipsum</p>
		</section>

		<section class="section">
			<h1>TEST SECTION</h1>
			<p>Bla bla lorem ipsum Bla bla lorem ipsum Bla bla lorem ipsum
				Bla bla lorem ipsumBla bla lorem ipsumBla bla lorem ipsumBla
				Bla bla lorem ipsumBla bla lorem ipsumBla bla lorem ipsum
				Bla bla lorem ipsumBla bla lorem ipsumBla bla lorem ipsum</p>
		</section>


<!-- TEMPORARY HACK, PUT FOOTER OUT OF HERE! -->
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
	  </footer><!-- #colophon .site footer -->


	</main><!-- #main .site-main -->

<?php
/* Footer tags:

	<footer class='site-footer'>
		<div class='site-info'> =footer stuff= </div>
	</footer><!-- .site-footer -->

</div><!-- .site -->
</body>
</html>


*/
get_footer();
