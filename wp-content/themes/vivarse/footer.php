<?php
/**
 * Vivarse footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivarse
 */


wp_footer(); ?>

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

</div><!-- #page .site -->
</body>
</html>
