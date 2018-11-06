
  <section class="section">
    <div class="flex-row">
      <?php

  		// The Query
  		$the_query = new WP_Query( array( 'category_name' => 'environment', 'posts_per_page' => '1', ));

  		// The Loop
  		while ( $the_query->have_posts() ) {
  			$the_query->the_post();
  			get_template_part( 'template-parts/content', 'environment' );
  		}

  		/* Restore original Post Data */
  		wp_reset_postdata();
  		?>
    </div>
  </section>
