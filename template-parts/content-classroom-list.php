<?php
/**
 * Template part for displaying classroom photos
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>
<div class="row-50--nopad flex">
  <div class="flex-col">
    <div class="flex grid-img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>');">

    </div>
    <a class="grid-txt" href="<?php echo get_home_url(); ?>/<?php $key="linkto"; echo get_post_meta($post->ID, $key, true); ?>">
      <?php $linktxt="linktext"; echo get_post_meta($post->ID, $linktxt, true); ?>
    </a>
  </div>
</div>
