<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

get_header('pg');
?>
		<main id="main" class="page">
			<div class="box-sm">
				<div class="section line">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'minimal' );

				endwhile; // End of the loop.
				?>
				</div>
			</div>
		</main>
<?php
get_footer();
