<?php
/**
 * The home page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

get_header('front');
?>
		<main>
			<?php get_template_part( 'sections/program-cards' ); ?>
		</main><!-- #main -->
<?php
get_footer();
