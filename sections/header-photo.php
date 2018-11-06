  <?php
  // The Query
  $the_query = new WP_Query( array( 'category_name' => 'header-photo', 'posts_per_page' => '1', ));

  // The Loop
  while ( $the_query->have_posts() ) {
    $the_query->the_post();
      get_template_part( 'template-parts/content', 'header-photo' );
  }

  /* Restore original Post Data */
  wp_reset_postdata();
  ?>
