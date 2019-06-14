<?php
/**
 * Template Name: Breakfast Page
 */
get_header(); ?>

<main class="breakfast-menu">

	<div class="ribbon-container-right">
		<header class="menus__header">

			<?php get_template_part('template-parts/menus-navigation' ); ?>

			<h1 class="menu__title">Breakfast Sets</h1>
		</header>

		<section class="menu__course">
			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/breakfast_1920_01.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/breakfast_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/breakfast_480_01.jpg"
						alt="Sunny-Side-Up Eggs and a Croissant, served with Buttered Baby Potatoes and Salad, plus coffee.">
				</picture>
			</figure>

			<div class="breakfast-menu__course">
				<div class="menu-breakfast-information">
					<p class="font--light font--italic">Served from 7:30 - 10:30AM</p>
					<p class="font--light">250,000 VND / Complimentary for all homestay guests</p>
					<p>All our breakfast options are accompanied by:</p>
					<hr class="hr-center">
					<p class="font--light">Your choice of coffee or tea* or fresh juice, homemade Ciabatta bread, homemade fruit
						jam, and a plate of
						fresh fruits</p>
				</div>

				<div class="menu-breakfast__sets">
					<section class="menu__sub-course">
						<h6>One</h6>
						<h3>Sunny-Side-Up Eggs and a Croissant, served with Buttered Baby Potatoes and Salad</h3>
					</section>

					<section class="menu__sub-course">
						<h6>Two</h6>
						<h3>Omelette with Emmental Cheese and Mushroom served with Buttered Baby Potatoes and Salad</h3>
					</section>

					<section class="menu__sub-course">
						<h6>Three</h6>
						<h3>Herb Omelette with Yoghurt Cream served with Buttered Baby Potatoes and Salad</h3>
					</section>

					<section class="menu__sub-course">
						<h6>Four</h6>
						<h3>Spanish Tortilla with Eggs, Potatoes, and Tomato Cream, served with Salad</h3>
					</section>

					<section class="menu__sub-course">
						<h6>Five</h6>
						<h3>Vietnamese breakfast of the day</h3>
						<p class="text-condition">* egg coffee, orange pekoe tea, coconut coffee and grass jelly iced tea are not
							included in the breakfast set.</p>
					</section>
				</div>
			</div>

			<?php get_template_part('template-parts/menus-navigation' ); ?>

		</section>
	</div>
</main>

<?php get_footer(); ?>
