<section class="cards">
  <div class="box">
    <h1 class="cards__hdl">Our Programs</h1>
  </div>
    <?php
		// The Query
		$the_query = new WP_Query( array( 'category_name' => 'program'));
		// The Loop
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			get_template_part( 'template-parts/content', 'programs-cards' );
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
</section>
