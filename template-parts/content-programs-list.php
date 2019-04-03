<?php
/**
 * Template part for displaying the list of programs on the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>

	<li class="link-xl">
		<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" id="post-<?php the_ID(); ?>">
			<?php the_title();?>
		</a>
		<?php the_excerpt(); ?>
	</li>
