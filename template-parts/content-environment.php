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
<div class="flex-row">
	<div class="row-33 flex flex-img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>');">
	</div>
	<div class="row-66 pad-left">
		<div class="section">
			<h2>Frank Lloyd Wright Building</h2>
				<?php
				the_excerpt();
				?>
			<p>
				<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Explore our Environment</a>
			</p>
		</div>
	</div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
