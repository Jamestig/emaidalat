<?php
/*
  Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main id="main-home">
	<!--
		<div class="fullscreen-container">
			<div class="fullscreen-button-container">
				<button class="fullscreen-button" id="fullscreenIcon">[ ]</button>
				<button class="fullscreen-button" id="previousImage">L</button>
				<button class="fullscreen-button" id="nextImage">R</button>
			</div>
		</div>
	-->

	<section class="scrollSection pageSection" id="home-restaurant">
		<div class="fixed-image gradient-down">
			<figure id="homeRestaurantBG" class="">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/duck_4k_01.jpg" media="(min-width: 1921px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/duck_1920.jpg" media="(min-width: 1025px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/duck_800_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/duck_480_01.jpg" alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
				</picture>
			</figure>
		</div>

		<div class="ribbon-container">
			<div class="content">
				<header class="double-header">
					<h2 class="header-full">émai restaurant</h2>
					<hr class="hr-left">
					<h3>Sensational, authentic European flavours in the heart of Dalat, Vietnam</h3>
				</header>

				<p>Using the finest of Dalat's clean produce and chess imported from Italy, we passionately homecook dishes that blend Italian customs and contemporary dining, delivering a truly unforgettable experience.</p>

				<div class="link-button">
					<a href="https://emaidalat.com/restaurant-menu/">View menu</a>
				</div>

				<button class="scrollDown">
					<span></span>
					<span>Scroll down</span>
				</button>
			</div>
		</div>
	</section>

	<section class="pageSection scrollSection" id="home-cafe">
		<div class="fixed-image gradient-down">
			<figure id="homeCafeBG">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/panna_1500_01.jpg" media="(min-width: 1025px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/panna_800_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/panna_480_01.jpg" alt="Panna Cotta with Dalat Berries Cooked in Mulled Wine">
				</picture>
			</figure>
		</div>

		<div class="ribbon-container">
			<div class="content">
				<header class="double-header">
					<h2 class="header-full">émai cafe</h2>
					<hr class="hr-left">
					<h3>Wholesome and indulgent homemade desserts and drinks</h3>
				</header>

				<p>Have a taste of heaven with our handpicked selection of special homemade cakes and desserts</p>

				<div class="link-button">
					<a href="https://emaidalat.com/drinks-desserts-menu/">View cafe menu</a>
				</div>

				<button class="scrollDown">
					<span></span>
					<span>Scroll down</span>
				</button>
			</div>
		</div>
	</section>

	<section class="pageSection scrollSection" id="home-bnb">
		<div class="fixed-image gradient-down">
			<figure id="homeBnbBG">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/lila_4k_01.jpg" media="(min-width: 1921px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/lila_1920_01.jpg" media="(min-width: 1025px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/lila_800_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/lila_480_01.jpg" alt="Emai Homestay Room Four: Lila">
				</picture>
			</figure>
		</div>

		<div class="ribbon-container">
			<div class="content">
				<header class="double-header">
					<h2 class="header-full">émai homestay</h2>
					<hr class="hr-left">
					<h3>Gorgeous and rustic little rooms</h3>
				</header>

				<p>Our cozy guest rooms recall the picturesque charm of the Dalat countryside, with a touch of Zen and contemporary aesthetics from Europe and Japan.</p>

				<div class="link-button">
					<a href="https://emaidalat.com/our-rooms/">View<span class="hidden-mobile"> or book</span> rooms</a>
				</div>

				<button class="scrollDown">
					<span></span>
					<span>Scroll down</span>
				</button>
			</div>
		</div>
	</section>

	<section class="pageSection scrollSection" id="home-atmosphere">
		<div class="fixed-image gradient-down">
			<figure id="homeAtmosphereBG">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/table_4k_01.jpg" media="(min-width: 1921px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/table_1920_01.jpg" media="(min-width: 1025px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/table_800_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/table_480_01.jpg" alt="Dining Room Table Setting with Candles and Flowers">
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
<!--
				<div class="link-button">
					<a href="">View Gallery</a>
				</div>
-->
				<button class="scrollDown">
					<span></span>
					<span>Scroll down</span>
				</button>
			</div>
		</div>
	</section>

	<section class="pageSection scrollSection" id="home-booking">
		<div class="position-underlay">
			<div class="fixed-image">
				<figure class="image-tall">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/flower_4k_01.jpg" media="(min-width: 1921px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/flower_1920_01.jpg" media="(min-width: 1025px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/flower_800_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/flower_480_01.jpg" alt="Pink Flowers from the Emai Garden">
					</picture>
				</figure>
			</div>

			<div class="position-overlay">
				<div class="content-white vertical-center content">

					<div>
						<p>Amidst the sublimity, let émai be your nook for comfort and beauty, delighting your senses and palate in the most tender of ways.</p>
					</div>

					<div class="button-container">
						<div class="link-button-light">
							<a href="https://emaidalat.com/reservations/">Reserve a table</a>
						</div>

						<div class="link-button-light">
							<a href="https://emaidalat.com/contact/">Book your stay</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
