<section class="bnr">
  <div class="box">
    <?php

		// The Query
		$the_query = new WP_Query( array( 'category_name' => 'promote', 'posts_per_page' => '1', ));

		// The Loop
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			get_template_part( 'template-parts/content', 'bnr' );
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
    <a href="#" class="btn btn--inverse btn--a">See Our Programs</a>
    <a href="tel:1-608-233-9776" class="btn btn--white btn--a">Call: 608-233-9776</a>
  </div>
</section>
