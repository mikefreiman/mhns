<?php
/**
 * Template part for displaying page content in page-programs.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pbc
 */

?>

<div class="bulletin">
	<div class="box">
		<p>Special Bulletin: <?php the_date(); ?></p>
		<div class="lead-bulletin">
		<?php the_excerpt(); ?>
	</div>
	</div>
</div>
