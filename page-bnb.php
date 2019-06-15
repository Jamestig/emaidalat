<?php
/*
  Template Name: Bnb Page
*/
?>

<?php get_header(); ?>

	<main id="fullpage" class="main-bnb">

		<div class="room-button-container">
			<button id="moveSectionUp" class="previousRoom room-button">
				<span></span>
				<span>Previous<br>Room</span>
			</button>
			<button class="nextRoom room-button moveSectionDown">
				<span class="down-arrow"></span>
				<span>Next<br>Room</span>
			</button>
		</div>

		<section class="fp-section pageSection" data-anchor="bnb-intro">
			<div class="fixed-image gradient-down">
				<figure>
					<picture>
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/house_exterior_4k_01.jpg" media="(min-width: 1921px)">
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/house_exterior_1920_01.jpg" media="(min-width: 1025px)">
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/house_exterior_1024_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/house_exterior_480_01.jpg" alt="Outside view of émai home, with walls covered in plants">
					</picture>
				</figure>
			</div>

			<div class="ribbon-container">
				<div class="content">
					<header class="double-header">
						<h2 class="header--full">Our Rooms</h2>
						<hr class="hr--left">
						<h3>émai bed &amp; breakfast</h3>
					</header>

					<p>Comprising an intimate 5-room bed & breakfast, a contemporary Italian restaurant and café, this little abode is brimming with cosiness, good food, and soothing music, always ready to treat you to a beautiful time no matter the occasion.</p>
					<p>A wonderful homemade European breakfast is included, with fresh juice and the best coffee you can find to start your day with.</p>
					<button class="scrollDown moveSectionDown">
						<span></span>
						<span>Scroll down</span>
					</button>
				</div>
			</div>
		</section>

		<section class="fp-section pageSection section-room rooms-ivy" data-anchor="rooms-ivy">
			<div class="fp-slides">
				<div class="fp-slidesContainer">

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/ivy_4k_01.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/ivy_1920_01.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_ivy_1024_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/room_ivy_480_01.jpg" alt="émai homestay room one: Ivy">
								</picture>
							</figure>
						</div>
					</div>

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/ivy_4k_02.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/ivy_1920_02.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_clara_1024_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/room_clara_480_01.jpg" alt="émai homestay room two: Clara">
								</picture>
							</figure>
						</div>
					</div>

				</div>
			</div>

			<div class="center flex-container-room">

					<div class="room-logo">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo/ivy-logo.png" alt="Ivy logo">
					</div>

					<div class="room-info">
						<p>Accomodates two &#183; Double bed (140cm)<br> Garden view &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 970,000 / 43 USD per night
						</p>
					</div>

					<div class="room-description">
						<p>With a view of our gorgeous garden and vine-covered wall down below, Ivy is a delight to eyes that are sensitive to the greeneries of life.</p>
					</div>

				<div class="link-button-light link-button-airbnb">
					<a target="_blank" href="https://www.airbnb.com/rooms/21901899">Book now on Airbnb</a>
				</div>

			</div>
		</section>

		<section class="fp-section pageSection section-room rooms-clara" data-anchor="rooms-clara">
			<div class="fp-slides">
				<div class="fp-slidesContainer">

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
							<picture>
								<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/room_clara_4k_01.jpg" media="(min-width: 1921px)">
								<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/room_clara_1920_01.jpg" media="(min-width: 1025px)">
								<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_clara_1024_01.jpg" media="(min-width: 600px)">
								<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/room_clara_480_01.jpg" alt="émai homestay room two: Clara">
							</picture>
							</figure>
						</div>
					</div>
<!--
					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/room_clara_4k_01.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/room_clara_1920_01.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_clara_1024_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/room_clara_480_01.jpg" alt="émai homestay room two: Clara">
								</picture>
							</figure>
						</div>
					</div>
-->
				</div>
			</div>

			<div class="center flex-container-room">

				<div id="clara-logo" class="room-logo">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo/clara_logo.png" alt="Clara logo">
				</div>

				<div id="clara-info" class="room-info">
					<p>Accomodates two &#183; King Single Bed (120cm)<br> Balcony &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 990,000 / 44 USD per night
					</p>
				</div>

				<div id="clara-description" class="room-description">
					<p>Clara is the only room which offers an expansive balcony on which you can read a book, sip a coffee, or unwind with good company.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a target="_blank" href="https://www.airbnb.com/rooms/21858606">Book now on Airbnb</a>
				</div>
			</div>
		</section>

		<section class="fp-section pageSection section-room rooms-may" data-anchor="rooms-may">
			<div class="fp-slides">
				<div class="fp-slidesContainer">

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/room_may_4k_01.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/room_may_1920_01.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_may_1024_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/room_may_480_01.jpg" alt="émai homestay room three: May">
								</picture>
							</figure>
						</div>
					</div>
<!--
					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/room_clara_4k_01.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/room_clara_1920_01.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_clara_1024_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/room_clara_480_01.jpg" alt="émai homestay room two: Clara">
								</picture>
							</figure>
						</div>
					</div>
-->
				</div>
			</div>

			<div class="center flex-container-room">

				<div class="room-logo">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo/may_logo.png" alt="May logo">
				</div>

				<div class="room-info">
					<p>Accomodates two &#183; Double bed (140cm)<br> Side garden view &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 890,000 / 40 USD per night
					</p>
				</div>

				<div class="room-description">
					<p>May offers a view of our smaller, serene garden, with a pond and lush plants and trees to soothe the eyes.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a target="_blank" href="https://www.airbnb.com/rooms/21872453">Book now on Airbnb</a>
				</div>

			</div>
		</section>

		<section class="fp-section pageSection section-room rooms-lila" data-anchor="rooms-lila">
			<div class="fp-slides">
				<div class="fp-slidesContainer">

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/lila_4k_01.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/lila_1920_01.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/lila_800_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/lila_480_01.jpg" alt="émai homestay room four: Lila">
								</picture>
							</figure>
						</div>
					</div>

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/lila_4k_02.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/lila_1920_02.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_clara_1024_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/room_clara_480_01.jpg" alt="émai homestay room two: Clara">
								</picture>
							</figure>
						</div>
					</div>

				</div>
			</div>

			<div class="center flex-container-room">

				<div class="room-logo">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo/lila_logo.png" alt="Lila logo">
				</div>

				<div class="room-info">
					<p>Accomodates two-four &#183; Two King single beds (120cm)<br> Skylight &#183; Private bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 1,400,000 / 60 USD per night (extra PAX 250,000)
					</p>
				</div>

				<div class="room-description">
					<p>Inspired by Japanese architecture, our attic rooms are tucked snugly under the roof, with a skylight through which you can watch the clouds drift or see the stars.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a target="_blank" href="https://www.airbnb.com/rooms/21900394">Book now on Airbnb</a>
				</div>

			</div>
		</section>

		<section class="fp-section pageSection section-room rooms-jasmine" data-anchor="rooms-jasmine">
			<div class="fp-slides">
				<div class="fp-slidesContainer">

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
							<picture>
								<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/jasmine_4k_01.jpg" media="(min-width: 1921px)">
								<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/jasmine_1920_01.jpg" media="(min-width: 1025px)">
								<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_jasmine_1024_01.jpg" media="(min-width: 600px)">
								<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/jasmine_480_03.jpg" alt="émai homestay room five: Jasmine">
							</picture>
							</figure>
						</div>
					</div>

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/jasmine_4k_02.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/jasmine_1920_02.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_jasmine_1024_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/jasmine_480_03.jpg" alt="émai homestay room five: Jasmine">
								</picture>
							</figure>
						</div>
					</div>

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/jasmine_4k_03.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/jasmine_1920_03.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_jasmine_1024_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/jasmine_480_03.jpg" alt="émai homestay room five: Jasmine">
								</picture>
							</figure>
						</div>
					</div>

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/jasmine_4k_04.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/jasmine_1920_04.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_jasmine_1024_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/jasmine_480_03.jpg" alt="émai homestay room five: Jasmine">
								</picture>
							</figure>
						</div>
					</div>

					<div class="fp-slide">
						<div class="fixed-image gradient-down">
							<figure>
								<picture>
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/jasmine_4k_05.jpg" media="(min-width: 1921px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/jasmine_1920_05.jpg" media="(min-width: 1025px)">
									<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/room_jasmine_1024_01.jpg" media="(min-width: 600px)">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/jasmine_480_03.jpg" alt="émai homestay room five: Jasmine">
								</picture>
							</figure>
						</div>
					</div>

				</div>
			</div>

			<div class="center flex-container-room">

				<div class="room-logo">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo/jasmine_logo.png" alt="Jasmine logo">
				</div>

				<div class="room-info">
					<p>Accomodates two-four &#183; Two King beds (160cm)<br> Skylight &#183; Bathroom with wooden bathtub<br> Heavenly soft bedsheets from Portugal<br> Free breakfast &#183; 1,600,000 / 70 USD per night (extra PAX 250,000)
					</p>
				</div>

				<div class="room-description">
					<p>Inspired by Japanese architecture, our attic rooms are tucked snugly under the roof, with a skylight through which you can watch the clouds drift or see the stars.</p>
				</div>

				<div class="link-button-light link-button-airbnb">
					<a target="_blank" href="https://www.airbnb.com/rooms/21901538">Book now on Airbnb</a>
				</div>

			</div>
		</section>

	</main>

<?php get_footer(); ?>
