<?php
/**
 * Template part for displaying single dishes
 *
 * @package Emai_Dalat
 *
 */

?>

<?php

// vars
$vegetarian = the_field( 'vegetarian' );

?>

<li class="menu__dish-item"><?php the_title(); ?>
	<?php if( $vegetarian ) : ?>
		<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png" alt="Vegan"></span>
	<?php endif; ?>
	<span class="dish-price">
		<?php get_field( 'price '); ?>
	</span>
	<p class="menu__dish-ingredients"><?php the_content(); ?></p>
</li>
