<div class="section">
  <h2>Our Classrooms</h2>
  <div class="flex-row flex-wrap section">
    <?php
    // The Query
    $the_query = new WP_Query( array( 'category_name' => 'classroom'));
    // The Loop
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      get_template_part( 'template-parts/content', 'classroom-list' );
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
  </div>
</div>
