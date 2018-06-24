<?php
/**
 * Template part for displaying page excerpts for the programs on the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>
<div class="card">
	<div class="card__hdr">
		<?php the_title( '<h1 class="card__h1">', '</h1>' ); ?>
	<p><?php echo get_post_meta($post->ID, 'info', true); ?></p>
	</div>
	<div class="card__sec">
		<?php the_excerpt(); ?>
	</div>
	<div class="card__ftr">
		<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" id="post-<?php the_ID(); ?>" class="btn btn--primary btn--card btn--a">
			Continue Reading
		</a>
	</div>
</div>
