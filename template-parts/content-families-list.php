<?php
/**
 * Template part for displaying page titles and page excerpts for families on the current families page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>
	<div class="link-xl">
		<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" id="post-<?php the_ID(); ?>" class="accent">
			<?php the_title();?>
		</a>
	</li>
