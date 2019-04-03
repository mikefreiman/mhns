<?php
/**
 * Template part for displaying a special bulletin to current families.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pbc
 */

?>

<div class="bulletin">
	<div class="box">
		<p>Current Families Bulletin: <?php the_date(); ?></p>
		<div class="lead-bulletin">
		<?php the_excerpt(); ?>
	</div>
	</div>
</div>
