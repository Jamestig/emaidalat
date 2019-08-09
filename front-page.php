<?php
/**
 * Front page
 *
 * @package emai
 */

get_header(); ?>

<main id="fullpage">

<?php

if ( pll_current_language() == 'en' ) {
	$ids = array( 469, 473, 479, 484, 488 );
	// live - 469, 473, 479, 484, 488.
	// local - 411, 409, 396, 414, 416.
} else if ( pll_current_language() == 'vi' ) {
	$ids = array( 471, 476, 482, 486, 490 );
	// live - 471, 476, 482, 486, 490.
	// local - 437, 439, 441, 443, 450.
}

	$args = array(
		'post__in' => $ids,
		'orderby'  => 'ID',
		'order'    => 'ASC',
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'home' ); ?>

		<?php endwhile; else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	
	<?php wp_reset_postdata(); ?>

</main>

<div class="bg-cycler">
	<div id="bg-01" class="bg-home fixed-image" style="background-image: url('https://emaidalat.com/wp-content/uploads/2019/08/duck_4k_01.jpg')"></div>
	<!-- http://localhost/wp_emai/wp-content/uploads/2019/06/duck_4k_01-1.jpg -->
	<!-- https://emaidalat.com/wp-content/uploads/2018/11/rosemary-smoked-duck.jpg -->
	<div id="bg-02" class="bg-home fixed-image" style="background-image: url('https://emaidalat.com/wp-content/uploads/2019/08/dessert_panna_4k.jpg')"></div>
	<!-- http://localhost/wp_emai/wp-content/uploads/2019/06/dessert_panna_4k-1.jpg -->
	<!-- https://emaidalat.com/wp-content/uploads/2019/06/dessert-panna-cotta.jpg -->
	<div id="bg-03" class="bg-home fixed-image" style="background-image: url('https://emaidalat.com/wp-content/uploads/2019/08/room_lila_4k_01.jpg')"></div>
	<!-- http://localhost/wp_emai/wp-content/uploads/2019/06/room_lila_4k_01-1.jpg -->
	<!-- https://emaidalat.com/wp-content/uploads/2019/06/homestay-room-lila.jpg -->
	<div id="bg-04" class="bg-home fixed-image" style="background-image: url('https://emaidalat.com/wp-content/uploads/2019/08/dining_4k_01.jpg')"></div>
	<!-- http://localhost/wp_emai/wp-content/uploads/2019/06/dining_4k_01-1.jpg -->
	<!-- https://emaidalat.com/wp-content/uploads/2018/11/restaurant-dining-room.jpg -->
	<div id="bg-05" class="bg-home fixed-image" style="background-image: url('https://emaidalat.com/wp-content/uploads/2019/08/garden-flower.jpg')"></div>
	<!-- http://localhost/wp_emai/wp-content/uploads/2019/06/flower_4k_01-1.jpg -->
	<!-- https://emaidalat.com/wp-content/uploads/2019/06/garden-flower.jpg -->
</div>

<?php get_footer(); ?>
