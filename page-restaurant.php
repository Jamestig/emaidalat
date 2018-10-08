<?php
/*
  Template Name: Restaurant Page
*/
?>

<?php get_header(); ?>

	<main id="main-menu-restaurant" class="main-menu">

		<section id="menu-restaurant" class="ribbon-container-right">
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

				<h2 class="menu-title">Restaurant Menu</h2>
				<p class="menu-legend">
					<span><img class="icon-vegetarian" class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian icon"></span>Vegetarian
					<span><img class="icon-vegan" class="icon-vegan" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegan.png" alt="Vegan icon"></span>Vegan
					<span><img class="icon-seasonal" class="icon-seasonal" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/seasonal.png" alt="Seasonal icon"></span>Seasonal
					<span><img class="icon-spicy" class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy icon"></span>Spicy
				</p>
			</header>

			<section id="menu-soups" class="pageSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/duck_1920.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/duck_800_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/duck_480_01.jpg" alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">Soups</h4>
					</header>

					<ul class="list-soups">
						<li>Émai's Signature Artichoke Cream Soup
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">220</span>
						</li>
						<li>Italian Garden-fresh &amp; Sun-dried Tomato Soup with Rosemary Cream
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">120</span>
						</li>
						<li>Potato, Leek, Sun-dried Tomato and Garlic Cream
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">120</span>
						</li>
						<li>French Onion Soup with a hint of Anise Liqueur
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span><img class="icon-seasonal" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/seasonal.png" alt="Seasonal"></span>
							<span class="dish-price">190</span>
						</li>
						<li>Red Beet Cream Soup with Galangal
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<!--<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegan.png" alt="Vegan"></span>-->
							<span class="dish-price">120</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-salads" class="pageSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/salad_pomelo_1920.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/salad_pomelo_800.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/salad_pomelo_480.jpg" alt="Pomelo Salad with Cinnamon, Star Anise and Orange Blossom Water">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">Salads</h4>
					</header>

					<ul class="list-salads">
						<li>Summer Salad with Green Beans, Snow Peas &amp; Pods, and Feta Cheese, Delicately Spiced with Coriander Seeds and Tarragon
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">220</span>
						</li>
						<li>Salad of Red Beets, Fresh Oranges and Strawberries, and Earthly Mixed Nuts
							<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegan.png" alt="Vegan"></span>
							<span class="dish-price">160</span>
						</li>
						<li>Salad of Green Asparagus and Courgettes, with Lime Vinegrette and sprinkled with Pecorino Cheese
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">230</span>
						</li>
						<li>Classic Caesar Salad
							<span class="dish-price">190</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-appetisers" class="pageSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/food_ravioli_1600.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/food_ravioli_1024.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/food_ravioli_480.jpg" alt="Sun-dried Tomato and Feta Cheese Ravioli with Roasted Chilies">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">Appetisers</h4>
					</header>

					<ul class="list-appetisers">
						<li>Pumpkin Wedges Crusted with Parmesan and Herbs, served with Yoghurt Cream
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">150</span>
						</li>
						<li>Sun-dried Tomato and Feta Cheese Ravioli with Roasted Chilies
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">210</span>
						</li>
						<li>Potato Salad with Quail Eggs and Basil/Rucola Almond Pesto
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">180</span>
						</li>
						<li>Quiche of Caramelized Garlic Marinated in Balsamic Vinegar with Goat Cheese, Rosemary &amp; Thyme
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">180</span>
						</li>
						<li>Baked Spinach and Feta Cheese Balls with Creamy Mushroom Sauce
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">180</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-pasta" class="pageSection section-dish">
				<figure id="" class="first-image fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/pasta_tomato_1920.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/pasta_tomato_1024.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/pasta_tomato_480.jpg" alt="Spaghetti with Garden-fresh and Sun-dried Tomatoes">
					</picture>
				</figure>


				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">Pasta</h4>
					</header>

					<ul class="list-pasta">
						<li>Homemade Tagliatella with Sea Prawns in White Wine Bisque Sauce
							<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy"></span>
							<span class="dish-price">230</span>
						</li>
						<li>Spaghetti Aglio Olio
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy"></span>
							<span class="dish-price">160</span>
						</li>
						<li>Spaghetti with Garden-fresh and Sun-dried Tomatoes
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy"></span>
							<span class="dish-price">160</span>
						</li>
						<li>Pan-Seared Homemade Gnocchi with Sage Butter and Shaved Pecorino
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">190</span>
						</li>
						<li>Homemade Gnocchi with Mushroom and Thyme Sauce with Cream and Brandy
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">190</span>
						</li>
						<li>Spaghetti Carbonara
							<span class="dish-price">180</span>
						</li>
						<li>Homemade Fettucine with Gorgonzola or Blue Cheese Cream Sauce and Thyme
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">210</span>
						</li>
						<li>Homemade Tagliatella with Basil/Rucola Pesto and Chicken
							<span class="dish-price">245</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-pizza" class="pageSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/pizza_margherita_1920.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/pizza_margherita_800.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/pizza_margherita_480.jpg" alt="Margherita Pizza with Sun-dried Tomatoes">
					</picture>
				</figure>


				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">Pizza</h4>
					</header>

					<ul class="list-pizza">
						<li>Four Cheeses
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">260</span>
						</li>
						<li>Margherita with Sun-dried Tomatoes
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy"></span>
							<span class="dish-price">155</span>
						</li>
						<li>Tuna and Onion with Black Olives
							<span class="dish-price">210</span>
						</li>
						<li>Grilled Dalat Vegetables, Balsamico, Black Olives, and Sun-dried Tomatoes
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">170</span>
						</li>
						<li>White Wine Shrimp Diavolo
							<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy"></span>
							<span class="dish-price">225</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-mains" class="pageSection section-dish">
				<figure id="" class="first-image fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/duck_1920.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/duck_800_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/duck_480_01.jpg" alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">Mains</h4>
					</header>

					<ul class="list-mains">
						<li>Beef in Red Wine with French Herbs, served with Bread
							<span class="dish-price">340</span>
						</li>
						<li>Rosemary Smoked Duck Filet with Balsamic Sage &amp; Berries Gravy, Baby Potatoes and Seasonal Vegetables
							<span class="dish-price">340</span>
						</li>
						<li>Sea Prawns in Thyme &amp; Lime Butter Sauce, with Water Cress and Young Potatoes
							<span class="dish-price">320</span>
						</li>
						<li>Tarragon Vinegar Chicken, with Green Beans and Young Potatoes
							<span class="dish-price">290</span>
						</li>

						<li>Dalat Artichoke with Thyme &amp; Lime Butter Sauce, served with Fresh Pasta
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span><img class="icon-seasonal" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/seasonal.png" alt="Seasonal"></span>
							<span class="dish-price">290</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-cheese" class="section-dish">
				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">Cheese platter</h4>
					</header>

					<ul class="list-cheese">
						<li>Cheese Platter with Homemade Jam and Lightly Roasted Nuts
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">300</span>
						</li>
					</ul>
				</div>
			</section>
		</section>

		<section class="menu-select-bottom">
				<nav class="menu-select">
					<ul>
						<li><a href="https://emaidalat.com/drinks-desserts-menu/">Drinks &amp; Desserts</a></li><br>
						<li><a href="https://emaidalat.com/breakfast-menu/">Breakfast</a><span>&#183;</span></li>
						<li><a href="https://emaidalat.com/wine-list/">Wine list</a></li>
					</ul>
				</nav>
		</section>
	</main>

<?php get_footer(); ?>
