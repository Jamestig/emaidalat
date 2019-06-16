<?php
/**
 * Template Name: Restaurant Template
 *
 * @package emai
 */

get_header();
?>

<main class="menu">

	<div class="ribbon-container-right">
		<header class="menus__header">

			<?php get_template_part( 'template-parts/menus-navigation' ); ?>

			<h1 class="menu__title">Restaurant Menu</h1>

			<p class="menu__legend">
				<span><img class="icon-vegetarian" class="icon-vegetarian"
						src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
						alt="Vegetarian icon"></span>Vegetarian
				<span><img class="icon-vegan" class="icon-vegan"
						src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png" alt="Vegan icon"></span>Vegan
				<span><img class="icon-seasonal" class="icon-seasonal"
						src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/seasonal.png" alt="Seasonal icon"></span>Seasonal
				<span><img class="icon-spicy" class="icon-spicy"
						src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/spicy.png" alt="Spicy icon"></span>Spicy
			</p>
		</header>

		<section class="menu__course">

			<hgroup class="menu__course-header">
				<h2>Antipasti &#183; Starters</h2>
				<h4>Awaken the palate with a light and elegant treat.</h3>
			</hgroup>

			<section class="menuSection menu__sub-course">
				<figure class="fixed-image mobile-image">
					<picture>
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/food_ravioli_1600.jpg"
							media="(min-width: 1025px)">
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/food_ravioli_1024.jpg"
							media="(min-width: 600px)">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/food_ravioli_480.jpg"
							alt="Sun-dried Tomato and Feta Cheese Ravioli with Roasted Chilies">
					</picture>
				</figure>

				<header class="menu__sub-course-header">
					<h3>Appetisers</h3>
				</header>

				<ul class="menu__list">
					<li class="menu__dish-item">Crostata di Caponata
						<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span class="dish-price">240</span>
						<p class="menu__dish-ingredients">Eggplant Caponata Tart with Nuts & Tomato Relish</p>
					</li>

					<li class="menu__dish-item">Fresh Mozzarella with 4 Relishes
						<span><img class="icon-vegetarian"
								src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">210</span>
						<p class="menu__dish-ingredients">Basil Pesto, Salsa Romesco, Tapenade and Grape Tomato Sauce, with Toasted
							Nuts</p>
					</li>

					<li class="menu__dish-item">Mista
						<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span class="dish-price">190</span>
						<p class="menu__dish-ingredients">Marinated Fresh Broad Beans, Sun-Dried Tomatoes, and Mushroom Paté or
							Grilled Vegetables</p>
					</li>

					<li class="menu__dish-item">Pumpkin Wedges
						<span><img class="icon-vegetarian"
								src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">150</span>
						<p class="menu__dish-ingredients">Crusted with Parmesan and Herbs, Served with Yoghurt Cream</p>
					</li>
				</ul>
			</section>

			<section class="menuSection menu__sub-course">
				<figure class="fixed-image mobile-image">
					<picture>
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/salad_pomelo_1920.jpg"
							media="(min-width: 1025px)">
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/salad_pomelo_800.jpg"
							media="(min-width: 600px)">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/salad_pomelo_480.jpg"
							alt="Pomelo Salad with Cinnamon, Star Anise and Orange Blossom Water">
					</picture>
				</figure>

				<header class="menu__sub-course-header">
					<h3>Salads</h3>
				</header>

				<ul class="menu__list">
					<li class="menu__dish-item">Summer Salad
						<span><img class="icon-vegetarian"
								src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">220</span>
						<p class="menu__dish-ingredients">Green Beans, Snow Peas with Feta with Coriander Seeds and Tarragon</p>
					</li>

					<li class="menu__dish-item">Red Beet Salad
						<span><img class="icon-vegan" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span class="dish-price">160</span>
						<p class="menu__dish-ingredients">With Fresh Oranges, and Strawberries, Sprinkled with Cashews</p>
					</li>

					<li class="menu__dish-item">Baby Green Asparagus
						<span><img class="icon-vegetarian"
								src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">240</span>
						<p class="menu__dish-ingredients">With Lime Vinaigrette and Pecorino</p>
					</li>
				</ul>
			</section>
		</section>

		<section class="menu__course">
			<hgroup class="menu__course-header">
				<h2>Primi &#183; Firsts</h2>
				<h4>The first proper course in a traditional Italian meal</h4>
			</hgroup>

			<section class="menuSection menu__sub-course">
				<figure class="fixed-image mobile-image">
					<picture>
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/duck_1920.jpg"
							media="(min-width: 1025px)">
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/duck_800_01.jpg"
							media="(min-width: 600px)">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/duck_480_01.jpg"
							alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
					</picture>
				</figure>

				<header class="menu__sub-course-header">
					<h3>Soups</h3>
				</header>

				<ul class="menu__list">
					<li class="menu__dish-item"><span class="menu__dish-ingredients">Émai's Signature </span>Artichoke Soup
						<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span class="dish-price">220</span>
					</li>

					<li class="menu__dish-item">Tomato Soup <span class="menu__dish-ingredients">with Rosemary Cream</span>
						<span><img class="icon-vegetarian"
								src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">120</span>
					</li>

					<li class="menu__dish-item">Potato &amp; Leek Soup <span class="menu__dish-ingredients">with Garlic
							Cream</span>
						<span><img class="icon-vegetarian"
								src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">120</span>
					</li>
				</ul>
			</section>

			<section class="menuSection menu__sub-course">
				<figure class="fixed-image mobile-image">
					<picture>
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/pasta_tomato_1920.jpg"
							media="(min-width: 1025px)">
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/pasta_tomato_1024.jpg"
							media="(min-width: 600px)">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/pasta_tomato_480.jpg"
							alt="Spaghetti with Garden-fresh and Sun-dried Tomatoes">
					</picture>
				</figure>

				<header class="menu__sub-course-header">
					<h3>Pasta</h3>
				</header>

				<ul class="menu__list">
					<li class="menu__dish-item">Linguine con bisque di gamberi
						<span><img class="icon-spicy" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/spicy.png"
								alt="Spicy"></span>
						<span class="dish-price">230</span>
						<p class="menu__dish-ingredients">with Sea Prawns in White Wine Bisque Sauce</p>
					</li>

					<li class="menu__dish-item">Spaghetti alla carbonara
						<span class="dish-price">190</span>
						<p class="menu__dish-ingredients">with Bacon, Egg and Parmesan</p>
					</li>

					<li class="menu__dish-item">Spaghetti aglio, olio e peperoncino
						<span><img class="icon-vegetarian"
								src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span><img class="icon-vegan" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span><img class="icon-spicy" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/spicy.png"
								alt="Spicy"></span>
						<span class="dish-price">190</span>
						<p class="menu__dish-ingredients">with Garlic, Olive Oil, with a hint of Chili and Pecorino Shavings</p>
					</li>

					<li class="menu__dish-item">Ravioli di feta
						<span><img class="icon-vegetarian"
								src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span><img class="icon-spicy" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/spicy.png"
								alt="Spicy"></span>
						<span class="dish-price">240</span>
						<p class="menu__dish-ingredients">With Feta Cheese and Roasted Chilis</p>
					</li>

					<li class="menu__dish-item">Penne alle peperoncino sott'aceto
						<span><img class="icon-vegan" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span><img class="icon-spicy" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/spicy.png"
								alt="Spicy"></span>
						<span class="dish-price">190</span>
						<span>with bacon +40</span>
						<p class="menu__dish-ingredients">with Spiced Pickled Pepper Sauce</p>
					</li>

					<li class="menu__dish-item">Orecchiette alle carciofo
						<span><img class="icon-vegan" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span class="dish-price">290</span>
						<p class="menu__dish-ingredients">With Fresh Artichoke, Fresh Herbs and Pine Nuts</p>
					</li>

					<li class="menu__dish-item">Linguine alle vongole veraci
						<span class="dish-price">230</span>
						<p class="menu__dish-ingredients">with Clams in Green Chilli Pepper and White Wine Sauce</p>
					</li>
				</ul>
			</section>
		</section>

		<section class="menuSection menu__course">
			<hgroup class="menu__course-header">
				<h2>Pizze &#183; Pizzas</h2>
				<h4>Pizza is usually to be shared, and can be substituted for a primo or secondo</h4>
			</hgroup>

			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/pizza_margherita_1920.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/pizza_margherita_800.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/pizza_margherita_480.jpg"
						alt="Margherita Pizza with Sun-dried Tomatoes">
				</picture>
			</figure>

			<ul class="menu__list">
				<li class="menu__dish-item">Margherita
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">165</span>
					<p class="menu__dish-ingredients">Mozzarella, Tomato, Basil</p>
				</li>

				<li class="menu__dish-item">Quattro Formaggi
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">260</span>
					<p class="menu__dish-ingredients">Mozzarella, Gorgonzola, Gouda, Parmesan</p>
				</li>

				<li class="menu__dish-item">Salsiccia al ﬁnocchio
					<span class="dish-price">225</span>
					<p class="menu__dish-ingredients">Homemade Fennel Sausage, Mozzarella, Tomatoes, Oregano</p>
				</li>

				<li class="menu__dish-item">Funghi e camembert
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">260</span>
					<p class="menu__dish-ingredients">Grilled Mushrooms, Baked Camembert, Caramelised Onion</p>
				</li>

				<li class="menu__dish-item">Vegana
					<span><img class="icon-vegan" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png"
							alt="Vegan"></span>
					/ Vegetariana
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">170</span>
					<p class="menu__dish-ingredients">Grilled Dalat Vegetables, Black Olives, Sun-Dried Tomatoes (with Cheeses
						+20)</p>
				</li>
			</ul>
		</section>

		<section class="menuSection menu__course">
			<hgroup class="menu__course-header">
				<h2>Secondi &#183; Main Course</h2>
				<h4>The most substantial and meticulously prepared dish of the meal.</h4>
			</hgroup>

			<figure class="first-image fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/duck_1920.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/duck_800_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/duck_480_01.jpg"
						alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
				</picture>
			</figure>

			<ul class="menu__list">
				<li class="menu__dish-item">Rosemary Smoked Duck Fillet
					<span class="dish-price">340</span>
					<p class="menu__dish-ingredients">With Roasted Carrots & Orange Almond Relish</p>
				</li>

				<li class="menu__dish-item">Lamb Chops
					<span class="dish-price">340</span>
					<p class="menu__dish-ingredients">With a Pistachio Crust, served with Pea Purée</p>
				</li>

				<li class="menu__dish-item">Boeuf à la bourguignonne
					<span class="dish-price">340</span>
					<p class="menu__dish-ingredients">Slow-Cooked Beef in Red Wine with French Herbs</p>
				</li>

				<li class="menu__dish-item">Sea Prawns
					<span class="dish-price">320</span>
					<p class="menu__dish-ingredients">In Thyme & Lime Butter Sauce, with Water Cress and Baby Potatoes</p>
				</li>

				<li class="menu__dish-item">Roast Chicken
					<span class="dish-price">310</span>
					<p class="menu__dish-ingredients">With Rosemary and Grand Manier served with Pea Purée</p>
				</li>
			</ul>
		</section>

		<section class="menu__course menuSection">
			<hgroup class="menu__course-header">
				<h2>Formaggio &#183; Cheese Platter</h2>
				<h4>A curated blend of complementary flavours,<br>
				perfect when paired with a fine wine.</h4>
			</hgroup>

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

			<ul class="menu__list">
				<li class="menu__dish-item">Cheese Platter
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">350</span>
					<p class="menu__dish-ingredients">With Fresh and Dried Fruits, Homemade Jam and Lightly Roasted Nuts</p>
				</li>
			</ul>
		</section>

		<section class="menu__course menuSection">
			<hgroup class="menu__course-header">
				<h2>Dolce &#183; Dessert</h2>
				<h4>Subtle yet decadent, completing the meal with a beautiful and lasting impression.</h4>
				<p class="header-caps">EVERY DAY WE FRESHLY PREPARE 3 - 4 OF THE FOLLOWING:</p>
			</hgroup>

			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/dessert_panna_4k.jpg"
						media="(min-width: 1921px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/dessert_panna_1920.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/panna_800_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/panna_480_01.jpg"
						alt="Panna Cotta with Dalat Berries Cooked in Mulled Wine ">
				</picture>
			</figure>

			<ul class="menu__list">
				<li class="menu__dish-item">Chocolate Mousse Cake
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">115</span>
					<p class="menu__dish-ingredients">With Candied Orange Purée and Orange Liqueur</p>
				</li>

				<li class="menu__dish-item">Panna Cotta
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">95</span>
					<p class="menu__dish-ingredients">with Dalat Berries Cooked in Mulled Wine</p>
				</li>

				<li class="menu__dish-item">Budino
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">95</span>
					<p class="menu__dish-ingredients">Butterscotch Crème Caramel</p>
				</li>

				<li class="menu__dish-item">Waffle
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">95</span>
					<p class="menu__dish-ingredients">with Lime Custard, Dalat-Berries Marmalade and Ice Cream</p>
				</li>

				<li class="menu__dish-item">Carrot Cake Creation
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">180</span>
					<p class="menu__dish-ingredients">With Pineapple-Kumquat Sorbet and Walnut Brittle</p>
				</li>

				<li class="menu__dish-item">Strawberry Cheesecake Creation
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">180</span>
					<p class="menu__dish-ingredients">With Peach Lime Ice Cream</p>
				</li>

				<li class="menu__dish-item">Gelato &amp; Sorbet
					<span><img class="icon-vegetarian" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">70</span><span> PER SCOOP</span>
					<p class="menu__dish-ingredients">
						Artichoke
						<span><img class="icon-seasonal" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/seasonal.png"
								alt="Seasonal"></span>
						&#183; Avocado
						<span><img class="icon-seasonal" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/seasonal.png"
								alt="Seasonal"></span>
						&#183; Peach Lime
						&#183; Mulberry
						&#183; Persimmon
						<span><img class="icon-seasonal" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/seasonal.png"
								alt="Seasonal"></span>
						<span><img class="icon-vegan" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png"
								alt="Vegan"></span>
						&#183; Fresh Coconut
						<span><img class="icon-vegan" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon/vegan.png"
								alt="Vegan"></span>
					</p>
				</li>
			</ul>
		</section>

		<?php get_template_part( 'template-parts/menus-navigation' ); ?>

	</div><!-- end ribbon-containen-right -->

</main>

<?php get_footer(); ?>
