<?php
/**
 * The header for the front page
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
	<header id="masthead" class="hdr">
		<div class="hdr__pg">
    	<?php mhns_post_thumbnail(); ?>
    </div>
	</header><!-- #masthead -->
	<section class="bnr">
		<div class="box">
			<h1 class="bnr__h1">Meeting House Nursery School</h1>
		</div>
	</section>
	<div id="content" class="site-content">