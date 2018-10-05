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
		<section class="pageSection scrollSection" id="bnb-intro">
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

					<p>Comprising an intimate 5-room bed & breakfast, a contemporary Italian restaurant and café, this little abode is brimming with cosiness, good food, and soothing music, always ready to treat you to a beautiful time no matter the occasion.</p>

					<button class="scrollDown">
						<span></span>
						<span>Scroll down</span>
					</button>
				</div>
			</div>
		</section>

		<section class="pageSection scrollSection" id="bnb-breakfast">
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

					<p>A wonderful homemade European breakfast is included, with fresh juice and the best coffee you can find to start your day with.</p>

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

		<section class="pageSection scrollSection section-room" id="rooms-ivy">
			<div class="fixed-image gradient-down">
				<figure id="">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/room_ivy_1920_01.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/room_ivy_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/room_ivy_480_01.jpg" alt="Outside view of emai bed and breakfast, with walls covered in plants">
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
					<a href="https://www.airbnb.com/rooms/21901899">Book now on Airbnb</a>
				</div>

			</div>
		</section>

		<section class="pageSection scrollSection section-room" id="rooms-clara">
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
					<p>Accomodates two &#183; King Single Bed (120cm)<br> Balcony &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 990,000 / 44 USD per night
					</p>
				</div>

				<div id="clara-description" class="room-description">
					<p>Clara is the only room which offers an expansive balcony on which you can read a book, sip a coffee, or unwind with good company.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a href="https://www.airbnb.com/rooms/21858606">Book now on Airbnb</a>
				</div>
			</div>
		</section>

		<section class="pageSection scrollSection section-room" id="rooms-may">
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
					<p>Accomodates two &#183; Double bed (140cm)<br> Side garden view &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 890,000 / 40 USD per night
					</p>
				</div>

				<div class="room-description">
					<p>May offers a view of our smaller, serene garden, with a pond and lush plants and trees to soothe the eyes.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a href="https://www.airbnb.com/rooms/21872453">Book now on Airbnb</a>
				</div>

			</div>
		</section>

		<section class="pageSection scrollSection section-room" id="rooms-lila">
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
					<p>Accomodates two-four &#183; Two King single beds (120cm)<br> Skylight &#183; Private bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 1,400,000 / 60 USD per night (extra PAX 250,000)
					</p>
				</div>

				<div class="room-description">
					<p>Inspired by Japanese architecture, our attic rooms are tucked snugly under the roof, with a skylight through which you can watch the clouds drift or see the stars.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a href="https://www.airbnb.com/rooms/21900394">Book now on Airbnb</a>
				</div>

			</div>
		</section>

		<section class="pageSection scrollSection section-room" id="rooms-jasmine">
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
					<p>Accomodates two-four &#183; Two King beds (160cm)<br> Skylight &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 1,600,000 / 70 USD per night (extra PAX 250,000)
					</p>
				</div>

				<div class="room-description">
					<p>Inspired by Japanese architecture, our attic rooms are tucked snugly under the roof, with a skylight through which you can watch the clouds drift or see the stars.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a href="https://www.airbnb.com/rooms/21901538">Book now on Airbnb</a>
				</div>

			</div>
		</section>

	</main>

<?php get_footer(); ?>
