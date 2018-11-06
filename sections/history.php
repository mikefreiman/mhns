<div class="section line">
  <div class="flex-row">
    <?php
  	// The Query
  	$the_query = new WP_Query( array( 'category_name' => 'history'));
  	// The Loop
  	while ( $the_query->have_posts() ) {
  		$the_query->the_post();
  		get_template_part( 'template-parts/content', 'history' );
  	}
  	/* Restore original Post Data */
  	wp_reset_postdata();
  	?>
  </div>
</div>
