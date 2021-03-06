<?php
/**
 * Template Name: Home Page
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Emai_Dalat
 */

get_header();
?>

<main id="fullpage" class="main-home">

	<section class="fp-sectionhome-cuisine" data-anchor="home-cuisine">
		<div class="fixed-image gradient-down">
			<figure>
				<picture>
				<source srcset="https://emaidalat.com/wp-content/uploads/2018/11/duck_4k_01.jpg" media="(min-width: 1921px)">
					<source srcset="https://emaidalat.com/wp-content/uploads/2018/11/duck_1920_01.jpg" media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/duck_800_01.jpg" media="(min-width: 600px)  and (max-width: 1024px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/duck_480_01.jpg" alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
				</picture>
			</figure>
		</div>

		<div class="ribbon-container">
			<div class="content">
				<header class="double-header">
					<h2 class="header--full">Émai Restaurant</h2>
					<hr class="hr--left">
					<h3>Sensational, authentic European flavours in the heart of Dalat, Vietnam</h3>
				</header>

				<p>Using the finest of Dalat's clean produce and cheese imported from Italy, we passionately homecook dishes that blend Italian customs and contemporary dining, delivering a truly unforgettable experience.</p>

				<div class="link-button">
					<a href="https://emaidalat.com/menus-nav/">View menu</a>
				</div>

				<button class="scrollDown moveSectionDown">
					<span></span>
					<span>Scroll down</span>
				</button>
			</div>
		</div>
	</section>

	<section class="fp-sectionhome-cafe" data-anchor="home-cafe">
		<div class="fixed-image gradient-down">
			<figure>
				<picture>
				<source srcset="https://emaidalat.com/wp-content/uploads/2018/11/brioche_4k.jpg" media="(min-width: 1921px)">
					<source srcset="https://emaidalat.com/wp-content/uploads/2018/11/brioche_1920.jpg" media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/panna_800_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/panna_480_01.jpg" alt="Panna Cotta with Dalat Berries Cooked in Mulled Wine">
				</picture>
			</figure>
		</div>

		<div class="ribbon-container">
			<div class="content">
				<header class="double-header">
					<h2 class="header--full">Émai cafe</h2>
					<hr class="hr--left">
					<h3>Wholesome and indulgent homemade desserts and drinks</h3>
				</header>

				<p>Have a taste of heaven with our handpicked selection of special homemade cakes and desserts</p>

				<div class="link-button">
					<a href="https://emaidalat.com/drinks-menu/">View cafe menu</a>
				</div>

				<button class="scrollDown moveSectionDown">
					<span></span>
					<span>Scroll down</span>
				</button>
			</div>
		</div>
	</section>

	<section class="fp-sectionhome-bnb" data-anchor="home-bnb">
		<div class="fixed-image gradient-down">
			<figure>
				<picture>
				<source srcset="https://emaidalat.com/wp-content/uploads/2018/11/room_4k.jpg" media="(min-width: 1921px)">
					<source srcset="https://emaidalat.com/wp-content/uploads/2018/11/room_1920.jpg" media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/lila_800_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/lila_480_01.jpg" alt="Emai Homestay Room Four: Lila">
				</picture>
			</figure>
		</div>

		<div class="ribbon-container">
			<div class="content">
				<header class="double-header">
					<h2 class="header--full">Émai homestay</h2>
					<hr class="hr--left">
					<h3>Gorgeous and rustic little rooms</h3>
				</header>

				<p>Our cozy guest rooms recall the picturesque charm of the Dalat countryside, with a touch of Zen and contemporary aesthetics from Europe and Japan.</p>

				<div class="link-button">
					<a href="https://emaidalat.com/our-rooms/">View<span class="hidden--mobile"> or book</span> rooms</a>
				</div>

				<button class="scrollDown moveSectionDown">
					<span></span>
					<span>Scroll down</span>
				</button>
			</div>
		</div>
	</section>

	<section class="fp-sectionhome-atmosphere" data-anchor="home-atmosphere">
		<div class="fixed-image gradient-down">
			<figure>
				<picture>
				<source srcset="https://emaidalat.com/wp-content/uploads/2018/11/dining_4k_01.jpg" media="(min-width: 1921px)">
					<source srcset="https://emaidalat.com/wp-content/uploads/2018/11/table_1920_01.jpg" media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/table_800_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/table_480_01.jpg" alt="Dining Room Table Setting with Candles and Flowers">
				</picture>
			</figure>
		</div>

		<div class="ribbon-container">
			<div class="content">
				<header class="double-header">
					<h3>A cosy nest, a joie de vivre.</h3>
				</header>

				<p>Nestled in Vietnam's most romantic city, émai is a dream born out of our love for nature, beauty, and good food, all housed together in a rustic little garden home.</p>
				<p>We hope you'll find deep contentment in our selection of jazz and classical music, garden flowers and candles, all handpicked to give you a poetic authentically European atmosphere of warmth, togetherness, and gentle beauty</p>

				<button class="scrollDown moveSectionDown">
					<span></span>
					<span>Scroll down</span>
				</button>
			</div>
		</div>
	</section>

	<section class="fp-sectionhome-booking" data-anchor="home-booking">
		<div class="ribbon-container">
				<div class="content-white vertical--center content">
					<div>
						<p>Amidst the sublimity, let émai be your nook for comfort and beauty, delighting your senses and palate in the most tender of ways.</p>
					</div>

					<div class="button-container">
						<div class="link-button">
							<a href="https://emaidalat.com/reservations/">Book your stay</a>
						</div>

						<div class="link-button">
							<a href="https://emaidalat.com/contact/">Reserve a table</a>
						</div>
					</div>
				</div>
			</div>
	</section>

</main>

<div class="home-background"></div>

<?php get_footer(); ?>