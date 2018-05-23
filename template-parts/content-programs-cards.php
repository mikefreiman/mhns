<?php
/**
 * Template part for displaying page excerpts for the programs on the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>

<article id="post-<?php the_ID(); ?>" class="card">
	<header class="card__hdr">
		<?php the_title( '<h1 class="card__h1">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php mhns_post_thumbnail(); ?>

	<div class="card__desc">
		<?php
		the_excerpt();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
