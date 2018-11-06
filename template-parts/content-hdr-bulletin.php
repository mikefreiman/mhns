<?php
/**
 * Template part for displaying page content in page-programs.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pbc
 */

?>

<div class="hdr__bulletin">
	<p><small>Special Bulletin: <?php the_date(); ?></small></p>
	<?php the_excerpt(); ?>
</div>
