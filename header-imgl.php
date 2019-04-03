<?php
/**
 * The header for - image on left - template
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mhns
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php get_template_part('nav'); ?>
<div id="page" class="site">
	<?php if ( get_post_thumbnail_id() ) : ?>
	<header id="masthead" class="header section line">
		<div class="flex-row box">
			<div class="row-50 flex flex-img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>');">
			</div>
			<div class="row-50">
				<div class="section">
					<p class="headline">
						<?php $key="headline"; echo get_post_meta($post->ID, $key, true); ?>
					</p>
					<div class="lead lead-xl">
						<?php
						the_excerpt();
						?>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<?php endif; ?>
	<div id="content" class="site-content">
