<?php
/**
 * Template part for displaying page excerpts for the programs on the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>

	<div class="row-50 flex justify divider">
		<h3>Our History in Education</h3>
	</div>
	<div class="row-50 section pad-left">
		<h4>Since 1949</h4>
			<?php the_excerpt(); ?>
			<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" id="post-<?php the_ID(); ?>">
				Learn more about our history
			</a>
		</p>
	</div>
