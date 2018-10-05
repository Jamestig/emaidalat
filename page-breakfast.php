<?php
/*
  Template Name: Breakfast Page
*/
?>

<?php get_header(); ?>

	<main id="main-menu-breakfast" class="main-menu">

		<section id="menu-breakfast" class="ribbon-container-right">
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

				<h2 class="menu-title">Breakfast Sets</h2>
			</header>

			<figure id="" class="first-image fixed-image mobile-image gradient-down">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/breakfast_1920_01.jpg" media="(min-width: 1600px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/breakfast_1024_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/breakfast_480_01.jpg" alt="Sunny-Side-Up Eggs and a Croissant, served with Buttered Baby Potatoes and Salad, plus coffee.">
				</picture>
			</figure>

			<div class="content">
				<div class="menu-breakfast-information">
					<p>Served from 7:30 - 10:30AM</p>
					<p>250,000 VND / Complimentary for all homestay guests</p>
					<p>All our breakfast options are accompanied by:</p>
					<hr class="hr-center">
					<p>Your choice of coffee or tea* or fresh juice, homemade Ciabatta bread, homemade fruit jam, and a plate of fresh fruits</p>
				</div>

				<div class="menu-breakfast-sets">
					<h6>One</h6>
					<p>Sunny-Side-Up Eggs and a Croissant, served with Buttered Baby Potatoes and Salad</p>

					<h6>Two</h6>
					<p>Omelette with Emmental Cheese and Mushroom served with Buttered Baby Potatoes and Salad</p>

					<h6>Three</h6>
					<p>Herb Omelette with Yoghurt Cream served with Buttered Baby Potatoes and Salad</p>

					<h6>Four</h6>
					<p>Spanish Tortilla with Eggs, Potatoes, and Tomato Cream, served with Salad</p>

					<h6>Five</h6>
					<p>Vietnamese breakfast of the day</p>
					<p class="text-condition">* egg coffee, orange pekoe tea, coconut coffee and grass jelly iced tea are not included in the breakfast set.</p>
				</div>
			</div>

			<section class="menu-select-bottom">
				<nav class="menu-select">
					<ul>
						<li><a href="https://emaidalat.com/restaurant-menu/">Restaurant menu</a></li><br>
						<li><a href="https://emaidalat.com/drinks-desserts-menu/">Drinks &amp; Desserts</a><span>&#183;</span></li>
						<li><a href="https://emaidalat.com/wine-list/">Wine list</a></li>
					</ul>
				</nav>
			</section>
		</section>
	</main>

<?php get_footer(); ?>
