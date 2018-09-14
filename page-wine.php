<?php
/*
  Template Name: Wine Page
*/
?>

<?php get_header(); ?>

	<main id="main-menu-wine" class="main-menu">

		<section id="menu-wine" class="ribbon-container-right">
			<header class="menu-header">
				<nav class="menu-select">
					<h3>Select menu:</h3>
					<ul>
						<li><a href="menu-restaurant.html">Restaurant</a><span>&#183;</span></li>
						<li><a href="menu-drinks.html">Drinks &amp; Desserts</a></li><br>
						<li><a href="menu-breakfast.html">Breakfast</a><span>&#183;</span></li>
						<li><a href="menu-wine.html">Wine list</a></li>
					</ul>
				</nav>

				<h2 class="menu-title">Wine list</h2>
			</header>

			<figure id="" class="first-image fixed-image mobile-image gradient-down">
				<picture>
					<source srcset="images/photos/hd/wine_1920_01.jpg" media="(min-width: 1600px)">
					<source srcset="images/photos/tablet/wine_1024_01.jpg" media="(min-width: 600px)">
					<img src="images/photos/mobile/wine_480_01.jpg" alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
				</picture>
			</figure>

			<div class="content">
				<p class="text-condition">Our carefully curated range of wines have been imported from all the best regions known for their fine grapes. Enjoy a glass that is perfectly paired with your meal at emai.</p>
				<h4 class="dish-title">By the Glass</h4>
				<ul>
					<li>Italy, Puglia, Primo Sangiovese-Merlot, red
						<span class="dish-price">126</span>
					</li>
					<li>Italy, Montipagano, Trebbiano d’Abruzzo, organic white
						<span class="dish-price">126</span>
					</li>
				</ul>

				<h4 class="dish-title">Sparkling</h4>
				<ul>
					<li>Spain, Albert i Noya Petit Albet Brut Reserva, organic
						<span class="dish-price">896</span>
					</li>
				</ul>

				<h4 class="dish-title">White Wines</h4>
				<ul>
					<li>Italy, Montipagano Trebbiano d’Abruzzo, organic
						<span class="dish-price">675</span>
					</li>
					<li>Argentina, Cuma Organic Torrontes
						<span class="dish-price">675</span>
					</li>
					<li>New Zealand, Wairau River Sauvignon Blanc
						<span class="dish-price">907</span>
					</li>
					<li>Germany, Selbach Qualitätswein, Riesling
						<span class="dish-price">907</span>
					</li>
				</ul>

				<h4 class="dish-title">Rose Wines</h4>
				<ul>
					<li>Argentina, Michel Torino Rose
						<span class="dish-price">600</span>
					</li>
				</ul>

				<h4 class="dish-title">Red Wines</h4>
				<ul>
					<li>Italy, Puglia, Primo Sangiovese-Merlot
						<span class="dish-price">590</span>
					</li>
					<li>Italy, Puglia, I Muri Negroamaro
						<span class="dish-price">730</span>
					</li>
					<li>Italy, Puglia, Luccarelli Negroamaro
						<span class="dish-price">730</span>
					</li>
					<li>South Africa, The Wolftrap Syrah-Mourvedre-Vionier
						<span class="dish-price">732</span>
					</li>
					<li>South Africa, Robertson Pinot Noir
						<span class="dish-price">735</span>
					</li>
					<li>Italy, Poggio ai Grilli Chianti, organic
						<span class="dish-price">761</span>
					</li>
					<li>Chile, In Situ Syrah Reserve
						<span class="dish-price">770</span>
					</li>
					<li>Argentina, Don David Malbec Reserve
						<span class="dish-price">858</span>
					</li>
					<li>Spain, Albert i Noya Lignum Negre, organic
						<span class="dish-price">908</span>
					</li>
					<li>New Zealand, Wairau River Pinot Noir
						<span class="dish-price">1508</span>
					</li>
					<li>Italy, Cumaro Conero DOCG Riserva, Montepulciano
						<span class="dish-price">1876</span>
					</li>
				</ul>
			</div>
		</section>

		<section class="menu-select-bottom">
			<nav class="menu-select">
				<ul>
					<li><a href="menu-restaurant.html">Restaurant Menu</a></li><br>
					<li><a href="menu-drinks.html">Drinks</a><span>&#183;</span></li>
					<li><a href="menu-breakfast.html">Breakfast</a></li>
				</ul>
			</nav>
		</section>
	</main>

<?php get_footer(); ?>
