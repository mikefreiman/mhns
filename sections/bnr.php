<div class="box">
  <section class="section line">
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
  </section>
</div>
