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
	<?php get_template_part( 'css/allCSS' ); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('nav'); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header site-header__front group">
		<div class="site-header__front-img">
      <!-- <?php the_header_image_tag(); ?> -->
    </div>
    <div class="container">
      <h1 class="site-header__front-heading">Our Philosophy</h1>
      <p class="site-header__front-desc">The philosophy of Meeting House Nursery School is learning through play. We firmly believe that “To Play Is To Grow,” and continually strive to foster an environment for our children to thrive while actively learning in play-based activities.</p>
    </div>
	</header><!-- #masthead -->
  <section></section>
  <section></section>
  <section></section>
  <section></section>
	<div id="content" class="site-content">
