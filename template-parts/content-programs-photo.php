<?php
/**
 * Template part for displaying the photo for the programs section on the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhns
 */

?>

<div class="row-50 flex flex-img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>');">

</div>
