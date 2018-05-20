<section class="hdr__sec">
  <div class="hdr__div-logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="hdr__logo">
      <img src="<?php echo get_theme_file_uri( 'img/mhns.svg' ); ?>" alt="MHNS Logo">
    </a>
  </div>
  <div class="box">
    <?php

		// The Query
		$the_query = new WP_Query( array( 'category_name' => 'promote', 'posts_per_page' => '1', ));

		// The Loop
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			get_template_part( 'template-parts/content', 'hdr' );
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
    <a href="#" class="btn btn--inverse btn--a">See Our Programs</a>
    <a href="tel:1-608-233-9776" class="btn btn--white btn--a">Call: 608-233-9776</a>
  </div>
</section>
