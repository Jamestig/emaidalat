<?php
/*
  Template Name: Reservations Page
*/
?>

<?php get_header(); ?>

	<main id="main-reservations">

		<section class="ribbon-container-right">
			<figure id="" class="fixed-image mobile-image gradient-down">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/reservations_4k.jpg" media="(min-width: 1921px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/tables_1920_01.jpg" media="(min-width: 1025px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/tables_1024_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/tables_480_01.jpg" alt="Dining room tables in émai restaurant">
				</picture>
			</figure>

			<div class="content">
				<header class="double-header">
					<h2 class="header-full">Restaurant and Homestay</h2>
					<hr class="hr-left">
					<h3>Reservations</h3>
				</header>

				<h4 class="header-caps">Reserve a table at Restaurant Emai</h4>
				<p>To make reservations at our Italian restaurant, please call us on <a class="footer-phone link-bold" href="tel: +842633839001">+84 2633 839 001</a> (English and Vietnamese) between 8:00am - 5:00pm.</p>

				<h4 class="header-caps">Make a booking at Emai homestay</h4>
				<p>To book your stay in one of guestrooms, please either:</p>
				<ul>
					<li>make your selection on <a href="https://emaidalat.com/our-rooms/"><span class="link-underline" >Our Rooms</span></a> page to book on AirBnb,</li>
					<li>contact us on our <a class="link-underline" href="https://www.facebook.com/emaidalat/">Facebook page</a>, or</li>
					<li>email us at <a class="link-underline" href="mailto:family@emaidalat.com">family@emaidalat.com</a> at any time and we will respond as soon as possible.</li>
				</ul>
			</div>
		</section>

	</main>

<?php get_footer(); ?>
