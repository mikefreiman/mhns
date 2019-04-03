<?php
/**
 * The header for  the current families page
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
	<?php get_template_part( 'sections/fam-bull' ); ?>
<div id="page" class="site">
	<?php if ( get_post_thumbnail_id() ) : ?>
	<header id="masthead" class="header">
		<div class="hero flex-row" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>');">

		</div>
	</header><!-- #masthead -->
	<?php endif; ?>
	<div id="content" class="site-content">
