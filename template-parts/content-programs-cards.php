<?php
/**
 * Template part for displaying page excerpts for the programs on the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>
<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" id="post-<?php the_ID(); ?>" class="card">
	<?php the_title( '<h1 class="card__h1">', '</h1>' ); ?>
	<div class="card__sec">
		<?php the_excerpt(); ?>
	</div>
</a>
