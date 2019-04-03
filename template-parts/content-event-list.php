<?php
/**
 * Template part for displaying event excerpts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>
	<li class="link-xl">
		<p class="lead"><?php echo tribe_get_start_date(); ?></p>
		<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" id="post-<?php the_ID(); ?>" class="accent">
			<?php the_title();?>
		</a>
	</li>
