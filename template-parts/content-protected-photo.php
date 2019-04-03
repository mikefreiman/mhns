<?php
/**
 * Template part for displaying the image for the protected-password section on the current families page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>

<div class="row-33 flex flex-img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>');">

</div>
