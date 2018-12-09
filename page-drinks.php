<?php
/*
  Template Name: Drinks Page
*/
?>

<?php get_header(); ?>

	<main id="main-menu-drinks" class="main-menu">

		<section id="menu-drinks" class="ribbon-container-right">
			<header class="menu-header">
				<nav class="menu-select">
					<h3>Select menu:</h3>
					<ul>
						<li><a href="https://emaidalat.com/restaurant-menu/">Restaurant</a><span>&#183;</span></li>
						<li><a href="https://emaidalat.com/drinks-desserts-menu/">Drinks &amp; Desserts</a></li><br>
						<li><a href="https://emaidalat.com/breakfast-menu/">Breakfast</a><span>&#183;</span></li>
						<li><a href="https://emaidalat.com/wine-list/">Wine list</a></li>
					</ul>
				</nav>

				<h2 class="menu-title">Drinks &amp; Desserts</h2>
			</header>

			<section id="menu-coffee" class="menuSection section-dish">
				<div class="fixed-image mobile-image gradient-down">
					<figure id="">
						<picture>
							<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/dessert_almond_4k_01.jpg" media="(min-width: 1921px)">
							<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/almond_1920_01.jpg" media="(min-width: 1025px)">
							<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/almond_1024_01.jpg" media="(min-width: 600px)">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/almond_480_01.jpg" alt="Gooey Butter Almond Cake with Vietnamese Coffee">
						</picture>
					</figure>
				</div>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">coffee</h4>
					</header>
					<section id="menu-italian-coffee">
						<h5 class="header-caps">Italian Coffee (Iced/Hot)</h5>
						<ul>
							<li>Espresso/Hot Americano <span class="dish-price">20</span></li>
							<li>Iced Americano with Orange Peel <span class="dish-price">40</span></li>
							<li>Cappuccino <span class="dish-price">45</span></li>
							<li>Latte/Mocha <span class="dish-price">70</span></li>
							<li>Affogato <span class="dish-price">55</span></li>
							<li>Classic Macchiatto <span class="dish-price">45</span></li>
							<li>Extra shot <span class="dish-price">10</span></li>
						</ul>
					</section>

					<section id="menu-vietnamese-coffee">
						<h5 class="header-caps">Vietnamese Coffee</h5>
						<ul>
							<li>Hot/Iced Black Coffee <span class="dish-price">25</span></li>
							<li>Hot/Iced Coffee with Condensed Milk <span class="dish-price">28</span></li>
							<li>Ha Noi Egg Coffee <span class="dish-price">70</span></li>
							<li>Ice Blended Coconut Coffee <span class="dish-price">70</span></li>
						</ul>
					</section>
				</div>
			</section>

			<section id="menu-tea" class="menuSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/tea_4k_01.jpg" media="(min-width: 1921px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/tea_1920_01.jpg" media="(min-width: 1025px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/tea_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/tea_480_01.jpg" alt="Tea pot and cup made by Authentique">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">tea &amp; chocolate</h4>
					</header>
					<section id="menu-hot-tea">
						<h5 class="header-caps">Hot tea (pot)</h5>
						<ul>
							<li>Earl Grey (served with cream or lime) <span class="dish-price">70</span></li>
							<li>Cau Dat Green Oolong <span class="dish-price">70</span></li>
							<li>Orange Pekoe with Fresh Orange, Ginger &amp; Wild Honey <span class="dish-price">90</span></li>
							<li>Green Tea <span class="dish-price">30</span></li>
						</ul>
					</section>

					<section id="menu-iced-tea">
						<h5 class="header-caps">Iced tea (glass)</h5>
						<ul>
							<li>Thin Oolong Tea with Grass Jelly, Chia Seeds, Lime, Mint &amp; Wild Honey <span class="dish-price">70</span></li>
						</ul>
					</section>

					<section id="menu-chocolate">
						<h5 class="header-caps">Chocolate</h5>
						<ul>
							<li>Hot Chocolate <span class="dish-price">70</span></li>
						</ul>
					</section>
				</div>
			</section>

			<section id="menu-drinks" class="menuSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/coffee_4k_01.jpg" media="(min-width: 1921px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/coffee_1920_01.jpg" media="(min-width: 1025px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/coffee_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/coffee_480_01.jpg" alt="Cappuccino on a bed-top tray, with a book.">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">drinks</h4>
					</header>
					<section id="menu-soft-drinks">
						<h5 class="header-caps">Soft drinks &amp; Waters</h5>
						<p class="text-condition">Vinh Hao is the oldest and most renowned pure mineral water brand in Vietnam</p>
						<ul>
							<li>Vinh Hao Still Water <span class="dish-price">40</span></li>
							<li>Vinh Hao Sparkling Water <span class="dish-price">40</span></li>
							<li>Coca Cola / 7 Up <span class="dish-price">50</span></li>
						</ul>
					</section>

					<section id="menu-juices">
						<h5 class="header-caps">Juices &amp; Smoothies</h5>
						<ul>
							<li>Fresh Orange or Watermelon Juice <span class="dish-price">70</span></li>
							<li>Fresh Strawberry or Mango Smoothie <span class="dish-price">70</span></li>
							<li>Mulberry, Passion Fruit, or Raspberry Homemade Soda <span class="dish-price">50</span></li>
						</ul>
					</section>
				</div>
			</section>

			<section id="menu-cakes" class="menuSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/brioche_4k.jpg" media="(min-width: 1921px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/brioche_1920.jpg" media="(min-width: 1025px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/panna_800_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/panna_480_01.jpg" alt="Panna Cotta with Dalat Berries Cooked in Mulled Wine ">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">cakes &amp; desserts</h4>
					</header>
					<p class="text-condition">Please ask for our daily selections</p>
					<ul>
						<li>Chocolate Mousse Cake with Candied Orange Puree and Orange Liqueur <span class="dish-price">95</span></li>
						<li>Panna Cotta with Dalat Berries Cooked in Mulled Wine <span class="dish-price">95</span></li>
						<li>Ultimate New York Cheesecake with Fresh Strawberry Sauce <span class="dish-price">95</span></li>
						<li>Gooey Butter Almond Cake <span class="dish-price">95</span></li>
						<li>Dalat Berries in Yoghurt Cream Cake <span class="dish-price">95</span></li>
						<li>Passion Fruit Cheese Cake <span class="dish-price">95</span></li>
					</ul>
				</div>
			</section>

			<section id="menu-liquor" class="menuSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/wine_4k_01.jpg" media="(min-width: 1921px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/wine_1920_01.jpg" media="(min-width: 1025px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/wine_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/wine_480_01.jpg" alt="A glass of white wine illuminated by candlelight, Summer Salad in foreground.">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">liquor</h4>
					</header>
					<a href="https://emaidalat.com/wine-list/" class="text-condition">Click here for our full, curated list for wines by the bottle.</a>
					<section id="menu-wine-glass">
						<h5 class="header-caps">Wine by the glass</h5>
						<ul>
							<li>Primo Sangiovese-Merlot, red <span class="dish-price">126</span></li>
							<li>Trebianno d'Abruzzo, organic white <span class="dish-price">126</span></li>
							<li class="mulled-wine">Special Homemade Mulled Wine* <span class="dish-price">126</span>
								<p>with 8 exotic spices, orange, and lime</p>
							</li>
						</ul>
						<p class="text-condition">*made occasionally when it is cold outside, to keep you warm and cosy in the emai home</p>
					</section>

					<section id="menu-beer">
						<h5 class="header-caps">Beers</h5>
						<ul>
							<li>Saigon Special <span class="dish-price">50</span></li>
							<li>Heineken <span class="dish-price">50</span></li>
							<li>Sapporo <span class="dish-price">50</span></li>
						</ul>
					</section>
				</div>
			</section>

			<section class="menu-select-bottom">
				<nav class="menu-select">
					<ul>
						<li><a href="https://emaidalat.com/restaurant-menu/">Restaurant Menu</a></li><br>
						<li><a href="https://emaidalat.com/breakfast-menu/">Breakfast</a><span>&#183;</span></li>
						<li><a href="https://emaidalat.com/wine-list/">Wine list</a></li>
					</ul>
				</nav>
			</section>

		</section>
	</main>

<?php get_footer(); ?>
