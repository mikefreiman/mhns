<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mhns
 */

get_header('pg');
?>
		<main class="post">
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
