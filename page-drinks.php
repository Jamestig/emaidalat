<?php
/**
 * Template Name: Drinks Page
 *
 * @package emaidalat
 */

get_header(); ?>

<main class="drinks-menu">

	<div class="ribbon-container-right">
		<header class="menus__header">

			<?php get_template_part( 'template-parts/menus-navigation' ); ?>

			<h1 class="menu__title">Bevande &#183; Drinks</h1>
		</header>

		<section class="menuSection menu__course">
			<div class="fixed-image mobile-image">
				<figure class="fixed-image mobile-image">
					<picture>
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/coffee_4k_01.jpg"
							media="(min-width: 1921px)">
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/coffee_1920_01.jpg"
							media="(min-width: 1025px)">
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/coffee_1024_01.jpg"
							media="(min-width: 600px)">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/coffee_480_01.jpg"
							alt="Cappuccino on a bed-top tray, with a book.">
					</picture>
				</figure>
			</div>

			<header class="menu__course-header">
				<h2>Coffee &#183; Cacao</h2>
				<p class="font--light">Plant milk alternatives (almond or macadamia milk) are available for +20.</p>
			</header>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Italian Coffee (Iced/Hot)</h3>
				</header>

				<ul class="menu__list">
					<li class="drinks-menu__item">Espresso <span class="dish-price">20</span></li>
					<li class="drinks-menu__item">Hot Americano <span class="dish-price">25</span></li>
					<li class="drinks-menu__item">Iced Americano with Orange Peel <span class="dish-price">40</span></li>
					<li class="drinks-menu__item">Cappuccino <span class="dish-price">45</span></li>
					<li class="drinks-menu__item">Latte <span class="dish-price">60</span></li>
					<li class="drinks-menu__item">Mocha <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Affogato <span class="dish-price">60</span></li>
					<li class="drinks-menu__item">Classic Macchiatto <span class="dish-price">45</span></li>
					<li class="drinks-menu__item">Extra shot <span class="dish-price">+15</span></li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Vietnamese Coffee</h3>
				</header>
				<ul class="menu__list">
					<li class="drinks-menu__item">Hot/Iced Black Coffee <span class="dish-price">25</span></li>
					<li class="drinks-menu__item">Hot/Iced Coffee with Condensed Milk <span class="dish-price">28</span></li>
					<li class="drinks-menu__item">Ha Noi Egg Coffee <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Ice Blended Coconut Coffee <span class="dish-price">70</span></li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Cacao</h3>
				</header>
				<ul class="menu__list">
					<li class="drinks-menu__item">Hot Chocolate <span class="dish-price">70</span></li>
				</ul>
			</section>
		</section>

		<section class="menuSection menu__course">
			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/tea_4k_01.jpg"
						media="(min-width: 1921px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/tea_1920_01.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/tea_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/tea_480_01.jpg"
						alt="Tea pot and cup made by Authentique">
				</picture>
			</figure>

			<header class="menu__course-header">
				<h2>Tea</h2>
			</header>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Hot tea (pot)</h3>
				</header>

				<ul class="menu__list">
					<li class="drinks-menu__item">Homemade Chai Tea <span class="dish-price">90</span>
						<p class="chai-tea font--light">*can be served with milk or coconut cream</p>
					</li>
					<li class="drinks-menu__item">Earl Grey <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Orange Pekoe with Fresh Orange, Ginger &amp; Wild Honey <span
							class="dish-price">90</span></li>
					<li class="drinks-menu__item">Cau Dat Green Oolong <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Oolong Coldbrew <span class="dish-price">60</span></li>
					<li class="drinks-menu__item">Artichoke Tea <span class="dish-price">60</span></li>
					<li class="drinks-menu__item">Green Tea <span class="dish-price">30</span></li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Iced tea (glass)</h3>
				</header>
				<ul class="menu__list">
					<li class="drinks-menu__item">Thin Oolong Tea with Grass Jelly, Chia Seeds, Lime, Mint &amp; Wild Honey <span
							class="dish-price">80</span></li>
				</ul>
			</section>
		</section>

		<section class="menuSection menu__course">
			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/coffee_4k_01.jpg"
						media="(min-width: 1921px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/coffee_1920_01.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/coffee_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/coffee_480_01.jpg"
						alt="Cappuccino on a bed-top tray, with a book.">
				</picture>
			</figure>

			<header class="menu__course-header">
				<h2>Drinks</h2>
			</header>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Juices, Smoothies &amp; Italian Sodas</h3>
				</header>
				<p class="font--light">We only use fresh fruits</p>
				<ul class="menu__list">
					<li class="drinks-menu__item">Juices: Orange or Watermelon <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Smoothies: Strawberry, Banana or Mango <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Homemade Italian Sodas: Passion Fruit, Mulberry, Raspberry or Strawberry <span
							class="dish-price">70</span></li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Soft drinks &amp; Waters</h3>
				</header>
				<p class="font--light">Vinh Hao is the oldest and most renowned pure mineral water brand in Vietnam</p>
				<ul class="menu__list">
					<li class="drinks-menu__item">Vinh Hao Sparkling Water <span class="dish-price">40</span></li>
					<li class="drinks-menu__item">Coca Cola / 7 Up <span class="dish-price">50</span></li>
				</ul>
			</section>
		</section>

		<section class="menuSection menu__course">
			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/wine_4k_01.jpg"
						media="(min-width: 1921px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/wine_1920_01.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/wine_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/wine_480_01.jpg"
						alt="A glass of white wine illuminated by candlelight, Summer Salad in foreground.">
				</picture>
			</figure>

			<header class="menu__course-header">
				<h2>Liquor</h2>
				<a href="https://emaidalat.com/wine-list/" class="text-condition">Click here for our full, curated list for
					wines by the bottle.</a>
			</header>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Wine by the glass</h3>
				</header>

				<ul class="menu__list">
					<li class="drinks-menu__item">Sangiovese-Merlot, red, Italy <span class="dish-price">126</span></li>
					<li class="drinks-menu__item">Torrontes, organic white, Argentina <span class="dish-price">126</span></li>
					<li class="mulled-wine">Special Homemade Mulled Wine* <span class="dish-price">126</span>
						<p>with 8 exotic spices, orange, and lime</p>
					</li>
				</ul>
				<p class="text-condition">*available during colder months</p>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Beers</h3>
				</header>

				<ul class="menu__list">
					<li class="drinks-menu__item">Leffe / Hoegaarden <span class="dish-price">100</span></li>
					<li class="drinks-menu__item">Corona <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Saigon Special / Heineken / Sapporo <span class="dish-price">50</span></li>
				</ul>
			</section>
		</section>

		<?php get_template_part( 'template-parts/menus-navigation' ); ?>
	</div>
</main>

<?php get_footer(); ?>
