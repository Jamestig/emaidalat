<?php
/*
  Template Name: Bnb Page
*/
?>

<?php get_header(); ?>

	<main id="main-bnb">
		<!--
		<div class="fullscreen-container">
			<div class="fullscreen-button-container">
				<button class="fullscreen-button" id="previousImage">L</button>
				<button class="fullscreen-button" id="nextImage">R</button>
			</div>
		</div>
	-->
		<section class="scrollSection" id="bnb-intro">
			<div class="fixed-image gradient-down">
				<figure id="">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/house_exterior_1920_01.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/house_exterior_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/house_exterior_480_01.jpg" alt="Outside view of emai bed and breakfast, with walls covered in plants">
					</picture>
				</figure>
			</div>

			<div class="ribbon-container">
				<div class="content">
					<header class="double-header">
						<h2 class="header-full">Our Rooms</h2>
						<hr class="hr-left">
						<h3>emai bed &amp; breakfast</h3>
					</header>

					<p>Using the finest of Dalat's clean produce and chess imported from Italy, we passionately homecook dishes that blend Italian customs and contemporary dining, delivering a truly unforgettable experience.</p>

					<button class="scrollDown">
						<span></span>
						<span>Scroll down</span>
					</button>
				</div>
			</div>
		</section>

		<section class="scrollSection" id="bnb-breakfast">
			<div class="fixed-image gradient-down">
				<figure id="">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/breakfast_1920_01.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/breakfast_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/breakfast_480_01.jpg" alt="Outside view of emai bed and breakfast, with walls covered in plants">
					</picture>
				</figure>
			</div>

			<div class="ribbon-container">
				<div class="content">
					<header class="double-header">
						<h2 class="header-full">Our Rooms</h2>
						<hr class="hr-left">
						<h3>Free homemade<br>European Breakfast</h3>
					</header>

					<p>Using the finest of Dalat's clean produce and chess imported from Italy, we passionately homecook dishes that blend Italian customs and contemporary dining, delivering a truly unforgettable experience.</p>

					<button class="scrollDown">
						<span></span>
						<span>Scroll down</span>
					</button>
				</div>
			</div>
		</section>

		<div class="room-button-container">
			<button class="previousRoom room-button">
				<span></span>
				<span>Previous<br>Room</span>
			</button>
			<button class="nextRoom room-button">
				<span class="down-arrow"></span>
				<span>Next<br>Room</span>
			</button>
		</div>

		<section class="scrollSection section-room" id="rooms-ivy">
			<div class="fixed-image gradient-down">
				<figure id="">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/room_ivy_1920_01.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/room_ivy_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/room_ivy_480_01.jpg" alt="Outside view of emai bed and breakfast, with walls covered in plants">
					</picture>
				</figure>
				<figure class="room-slide">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/room_clara_1920_01.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/room_clara_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/room_clara_480_01.jpg" alt="Outside view of emai bed and breakfast, with walls covered in plants">
					</picture>
				</figure>
			</div>

			<div class="center flex-container-room">

					<div class="room-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/ivy-logo.png" alt="Ivy logo">
					</div>

					<div class="room-info">
						<p>Accomodates two &#183; Double bed (140cm)<br> Garden view &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 970,000 / 43 USD per night
						</p>
					</div>

					<div class="room-description">
						<p>With a view of our gorgeous garden and vine-covered wall down below, Ivy is a delight to eyes that are sensitive to the greeneries of life.</p>
					</div>

				<div class="link-button-light link-button-airbnb">
					<a href="">Book now on Airbnb</a>
				</div>

			</div>
		</section>

		<section class="scrollSection section-room" id="rooms-clara">
			<div class="fixed-image gradient-down">
				<figure id="">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/room_clara_1920_01.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/room_clara_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/room_clara_480_01.jpg" alt="Outside view of emai bed and breakfast, with walls covered in plants">
					</picture>
				</figure>
			</div>

			<div class="center flex-container-room">

				<div id="clara-logo" class="room-logo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/clara_logo.png" alt="Clara logo">
				</div>

				<div id="clara-info" class="room-info">
					<p>Accomodates two &#183; Double bed (140cm)<br> Garden view &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 970,000 / 43 USD per night
					</p>
				</div>

				<div id="clara-description" class="room-description">
					<p>With a view of our gorgeous garden and vine-covered wall down below, Ivy is a delight to eyes that are sensitive to the greeneries of life.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a href="">Book now on Airbnb</a>
				</div>
			</div>
		</section>

		<section class="scrollSection section-room" id="rooms-may">
			<div class="fixed-image gradient-down">
				<figure id="">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/room_may_1920_01.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/room_may_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/room_may_480_01.jpg" alt="Outside view of emai bed and breakfast, with walls covered in plants">
					</picture>
				</figure>
			</div>

			<div class="center flex-container-room">

				<div class="room-logo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/may_logo.png" alt="May logo">
				</div>

				<div class="room-info">
					<p>Accomodates two &#183; Double bed (140cm)<br> Garden view &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 970,000 / 43 USD per night
					</p>
				</div>

				<div class="room-description">
					<p>With a view of our gorgeous garden and vine-covered wall down below, Ivy is a delight to eyes that are sensitive to the greeneries of life.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a href="">Book now on Airbnb</a>
				</div>

			</div>
		</section>

		<section class="scrollSection section-room" id="rooms-lila">
			<div class="fixed-image gradient-down">
				<figure id="">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/lila_1920_01.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/lila_800_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/lila_480_01.jpg" alt="Outside view of emai bed and breakfast, with walls covered in plants">
					</picture>
				</figure>
			</div>

			<div class="center flex-container-room">

				<div class="room-logo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/lila_logo.png" alt="Lila logo">
				</div>

				<div class="room-info">
					<p>Accomodates two &#183; Double bed (140cm)<br> Garden view &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 970,000 / 43 USD per night
					</p>
				</div>

				<div class="room-description">
					<p>With a view of our gorgeous garden and vine-covered wall down below, Ivy is a delight to eyes that are sensitive to the greeneries of life.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a href="">Book now on Airbnb</a>
				</div>

			</div>
		</section>

		<section class="scrollSection section-room" id="rooms-jasmine">
			<div class="fixed-image gradient-down">
				<figure id="">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/room_jasmine_1920_01.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/room_jasmine_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/jasmine_480_03.jpg" alt="Outside view of emai bed and breakfast, with walls covered in plants">
					</picture>
				</figure>
			</div>

			<div class="center flex-container-room">

				<div class="room-logo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/jasmine_logo.png" alt="Jasmine logo">
				</div>

				<div class="room-info">
					<p>Accomodates two &#183; Double bed (140cm)<br> Garden view &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 970,000 / 43 USD per night
					</p>
				</div>

				<div class="room-description">
					<p>With a view of our gorgeous garden and vine-covered wall down below, Ivy is a delight to eyes that are sensitive to the greeneries of life.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a href="">Book now on Airbnb</a>
				</div>

			</div>
		</section>

	</main>

<?php get_footer(); ?>
