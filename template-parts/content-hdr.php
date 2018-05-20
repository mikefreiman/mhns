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
	<?php the_title( '<h1 class="hdr__h1">', '</h1>' ); ?>
	<div class="hdr__desc">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
