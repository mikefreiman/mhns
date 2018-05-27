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
	<?php the_title( '<h1 class="bnr__h1">', '</h1>' ); ?>
	<div class="bnr__desc">
		<?php
		the_excerpt();
		?>
		<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" class="bnr__a">Read More</a>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
