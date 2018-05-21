<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mhns
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer ftr">
    <div class="box">
      <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mhns' ) ); ?>">
          <?php
          /* translators: %s: CMS name, i.e. WordPress. */
          printf( esc_html__( 'Proudly powered by %s', 'mhns' ), 'WordPress' );
          ?>
        </a>
        <span class="sep"> | </span>
        <p class="ftr__ref">
          <?php
          /* translators: 1: Theme name, 2: Theme author. */
          printf( esc_html__( 'Theme: %1$s by %2$s.', 'mhns' ), 'mhns', '<a href="https://www.ovidesign.com">ovidesign</a>' );
          ?>
        </p>
      </div><!-- .site-info -->  
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
