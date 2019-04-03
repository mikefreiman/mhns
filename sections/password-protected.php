<div class="section line">
  <h1>Family Information</h1>
  <div class="flex-row section">
    <?php
    // The Query
    $the_img = new WP_Query( array( 'category_name' => 'protected-photo', 'posts_per_page' => '1'));
    // The Loop
    while ( $the_img->have_posts() ) {
      $the_img->the_post();
      get_template_part( 'template-parts/content', 'protected-photo' );
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
    <div class="row-66 pad-left">
      <div class="section">
        <ul class="no-pad">
          <?php
          // The Query
          $the_query = new WP_Query( array( 'category_name' => 'password-protected'));
          // The Loop
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part( 'template-parts/content', 'protected-list' );
          }
          /* Restore original Post Data */
          wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>
