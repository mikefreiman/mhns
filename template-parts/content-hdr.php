<?php
/**
 * Template part for displaying page content in page-programs.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<h1 class="hdr__h1 ovr">', '</h1>' ); ?>
	<div class="hdr__desc">
		<?php
		the_excerpt();
		?>
		<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Read More</a>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
