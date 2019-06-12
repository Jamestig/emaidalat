<?php
/**
 * Wine list
 *
 * @package emaidalat
 */

get_header(); ?>

<main class="wine-menu">

	<div class="ribbon-container-right">
		<header class="menus__header">

			<?php get_template_part( 'template-parts/menus-navigation' ); ?>

			<h1 class="menu__title">Wine list</h1>
		</header>

		<section class="menu__course">
			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/wine_4k_01.jpg"
						media="(min-width: 1920px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/wine_1920_01.jpg"
						media="(min-width: 1024px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/wine_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/wine_480_01.jpg"
						alt="A glass of white wine illuminated by candlelight, Summer Salad in foreground.">
				</picture>
			</figure>

			<p class="wine-menu-description">Our carefully curated range of wines have been imported from all the best regions known for their fine grapes. Enjoy a glass that is perfectly paired with your meal at emai.</p>

			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			<!-- <section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>By the Glass</h3>
				</header>

				<ul class="menu__list">
					<li class="wine-menu__item">Italy, Puglia, Primo Sangiovese-Merlot, red
						<span class="dish-price">126</span>
					</li>
					<li class="wine-menu__item">Argentina, Cuma Torrontes, organic white
						<span class="dish-price">126</span>
					</li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Sparkling</h3>
				</header>

				<ul class="menu__list">
					<li class="wine-menu__item">Spain, Albert i Noya Petit Albet Brut Reserva, organic
						<span class="dish-price">896</span>
					</li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>White Wines</h3>
				</header>

				<ul class="menu__list">
					<li class="wine-menu__item">Italy, Montipagano Trebbiano d’Abruzzo, organic
						<span class="dish-price">675</span>
					</li>
					<li class="wine-menu__item">Argentina, Cuma Organic Torrontes
						<span class="dish-price">675</span>
					</li>
					<li class="wine-menu__item">New Zealand, Wairau River Sauvignon Blanc
						<span class="dish-price">907</span>
					</li>
					<li class="wine-menu__item">Germany, Selbach Qualitätswein, Riesling
						<span class="dish-price">907</span>
					</li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Rose Wines</h3>
				</header>

				<ul class="menu__list">
					<li class="wine-menu__item">Argentina, Michel Torino Rose
						<span class="dish-price">600</span>
					</li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Red Wines</h3>
				</header>

				<ul class="menu__list">
					<li class="wine-menu__item">Italy, Puglia, Primo Sangiovese-Merlot
						<span class="dish-price">590</span>
					</li>
					<li class="wine-menu__item">Italy, Puglia, I Muri Negroamaro
						<span class="dish-price">730</span>
					</li>
					<li class="wine-menu__item">Italy, Puglia, Luccarelli Negroamaro
						<span class="dish-price">730</span>
					</li>
					<li class="wine-menu__item">South Africa, The Wolftrap Syrah-Mourvedre-Vionier
						<span class="dish-price">732</span>
					</li>
					<li class="wine-menu__item">South Africa, Robertson Pinot Noir
						<span class="dish-price">735</span>
					</li>
					<li class="wine-menu__item">Italy, Poggio ai Grilli Chianti, organic
						<span class="dish-price">761</span>
					</li>
					<li class="wine-menu__item">Chile, In Situ Syrah Reserve
						<span class="dish-price">770</span>
					</li>
					<li class="wine-menu__item">Argentina, Don David Malbec Reserve
						<span class="dish-price">858</span>
					</li>
					<li class="wine-menu__item">Spain, Albert i Noya Lignum Negre, organic
						<span class="dish-price">908</span>
					</li>
					<li class="wine-menu__item">New Zealand, Wairau River Pinot Noir
						<span class="dish-price">1508</span>
					</li>
					<li class="wine-menu__item">Italy, Cumaro Conero DOCG Riserva, Montepulciano
						<span class="dish-price">1876</span>
					</li>
				</ul>
			</section> -->
		</section>
	</div>

	<?php get_template_part( 'template-parts/menus-navigation' ); ?>
</main>

<?php get_footer(); ?>
