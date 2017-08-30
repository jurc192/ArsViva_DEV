<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vivarse
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('nofp'); ?>>
	<header class="entry-header">
		<h1>TEST HEADER</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p>Test content to test the content, you know</p>
		<p>Test content to test the content, you know</p>
		<p>Test content to test the content, you know</p>
		<p>Test content to test the content, you know</p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<h2>TEST FOOTER</h2>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
