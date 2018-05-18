<?php
/* Template Name: Programs Template */
/**
 * The template for displaying the programs page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<?php

		// The Query
		$the_query = new WP_Query( array( 'category_name' => 'program' ));

		// The Loop
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			get_template_part( 'template-parts/content', 'programs' );
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
