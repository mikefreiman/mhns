<?php
/*
 * Template Name: Environment Page
 * Template Post Type: post, page
 */

 get_header('pg');

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
     <?php get_template_part( 'sections/classrooms' ); ?>
     <?php get_template_part( 'sections/playgrounds' ); ?>
     </div>
   </div>
 </main>
<?php
get_footer();
