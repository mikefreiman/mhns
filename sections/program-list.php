<div class="section line">
  <h1>Programs</h1>
  <div class="flex-row section">
    <?php get_template_part( 'sections/program-photo' ); ?>
    <ul class="row-50 pad-left flex-col">
    <?php
		// The Query
		$the_query = new WP_Query( array( 'category_name' => 'program'));
		// The Loop
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			get_template_part( 'template-parts/content', 'programs-list' );
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
    </ul>
  </div>
</div>
