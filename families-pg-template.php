<?php
/*
 * Template Name: Current Families Page
 * Template Post Type: post, page
 */

 get_header('families');

 ?>
 <main class="post">
   <div class="box">
     <div class="section line">
     <?php
     while ( have_posts() ) :
       the_post();

       get_template_part( 'template-parts/content', 'minimal' );


     endwhile; // End of the loop.
     ?>
   </div>
     <?php get_template_part( 'sections/events' ); ?>
     <?php get_template_part( 'sections/password-protected' ); ?>
     <?php get_template_part( 'sections/current-families' ); ?>
   </div>
 </main>
<?php
get_footer();
