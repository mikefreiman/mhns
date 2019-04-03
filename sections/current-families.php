<div class="section">
  <h1>For Our Families</h1>
    <div class="flex-row">
      <div class="row-66 pad-right">
        <div class="section">
          <ul class="no-pad">
            <?php
            // The Query
            $the_query = new WP_Query( array( 'category_name' => 'current-families'));
            // The Loop
            while ( $the_query->have_posts() ) {
              $the_query->the_post();
              get_template_part( 'template-parts/content', 'families-list' );
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
          </ul>
        </div>
      </div>
      <?php
      // The Query
      $the_img = new WP_Query( array( 'category_name' => 'family-photo', 'posts_per_page' => '1'));
      // The Loop
      while ( $the_img->have_posts() ) {
        $the_img->the_post();
        get_template_part( 'template-parts/content', 'fam-photo' );
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      ?>
  </div>
</div>
