<div class="section line">
  <h1>Current Events</h1>
  <div class="flex-row">
    <div class="row-66 pad-right">
      <div class="section">
        <ul class="no-pad">
          <?php
          // The Query
          $the_query = new WP_Query( array( 'post_type'=>array(TribeEvents::POSTTYPE), 'posts_per_page' => '3', 'meta_key'=>'_EventStartDate', 'orderby'=>'_EventStartDate', 'order'=>'ASC'));
          // The Loop
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part( 'template-parts/content', 'event-list' );
          }
          /* Restore original Post Data */
          wp_reset_postdata();
          ?>
        </ul>
        <section>
          <a class="btn btn--accent" href="<?php echo get_home_url(); ?>/events">
            See all events
          </a>
        </section>
      </div>
    </div>
    <?php
    // The Query
    $the_img = new WP_Query( array( 'category_name' => 'events-photo', 'posts_per_page' => '1'));
    // The Loop
    while ( $the_img->have_posts() ) {
      $the_img->the_post();
      get_template_part( 'template-parts/content', 'events-photo' );
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
  </div>
</div>
