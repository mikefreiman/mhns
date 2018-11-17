<?php
/*
 * Template Name: Side by Side - Image on Left
 * Template Post Type: post, page
 */

 get_header('imgl');

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
   </div>
 </main>
<?php
get_footer();
