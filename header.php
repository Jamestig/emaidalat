<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<header class="side-header">
		<div class="navbar">

			<div class="navbar-logo-container">
				<a href="https://emaidalat.com">
					<img class="navbar-logo" id="navbarLogo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/logo_wide.png" alt="émai dalat small logo">
					<img class="navbar-logo" id="navbarRose" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/logo_tall.png" alt="émai dalat small logo">
				</a>
			</div>

			<div id="burger-icon">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>

		<h1 class="main-logo">
			<a class="vertical-center" href="https://emaidalat.com">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/logo.png" alt="émai dalat">
			</a>
		</h1>

		<div class="nav-overlay">
			<nav class="header-nav">
				<ul class="accordion">
					<li id="link-home">
						<a href="http://localhost/local_wordpress/">Home</a>
						<ul id="inner-home" class="accordionInner">
							<li><a href="#home-restaurant" class="scroll">Restaurant</a></li>
							<li><a href="#home-cafe" class="scroll">Cafe</a></li>
							<li><a href="#home-bnb" class="scroll">Bed &amp; Breakfast</a></li>
							<li><a href="#home-atmosphere" class="scroll">Atmosphere</a></li>
							<li><a href="#home-booking" class="scroll">Booking</a></li>
						</ul>
					</li>

					<li id="link-story">
						<a href="http://localhost/local_wordpress/our-story/">Our Story</a>
						<!--
						<ul id="inner-story" class="accordionInner">
							<li><a href="story.html#story-about" class="scroll">About Us</a></li>
							<li><a href="story.html#story-dalat" class="scroll">Dalat</a></li>
							<li><a href="story.html#story-team" class="scroll">The Team</a></li>
						</ul>
						-->
					</li>

					<li id="link-bnb">
						<a href="http://localhost/local_wordpress/our-rooms/">Our Rooms</a>
						<ul id="inner-bnb" class="accordionInner">
							<li><a href="#rooms-ivy" class="scroll">Ivy</a></li>
							<li><a href="#rooms-clara" class="scroll">Clara</a></li>
							<li><a href="#rooms-may" class="scroll">May</a></li>
							<li><a href="#rooms-lila" class="scroll">Lila</a></li>
							<li><a href="#rooms-jasmine" class="scroll">Jasmine</a></li>
						</ul>
					</li>

					<li id="link-reservations">
						<a href="http://localhost/local_wordpress/reservations/">Reservations</a>
					</li>


					<li id="link-menu">
						<a id="restaurantLink" href="http://localhost/local_wordpress/restaurant-menu/">Menu</a>
						<ul id="inner-restaurant" class="accordionInner">
							<li id="link-restaurant"><a href="http://localhost/local_wordpress/restaurant-menu/">Restaurant</a></li>
							<li id="link-drinks"><a href="http://localhost/local_wordpress/drinks-desserts-menu/">Drinks &amp; Desserts</a></li>
							<li id="link-breakfast"><a href="http://localhost/local_wordpress/breakfast-menu/">Breakfast</a></li>
							<li id="link-wine"><a href="http://localhost/local_wordpress/wine-list/">Wine list</a></li>
						</ul>
					</li>

					<li id="link-contact">
						<a href="http://localhost/local_wordpress/contact/">Contact</a>
					</li>
				</ul>
			</nav>

			<div class="header-footer">
				<ul class="sm-list">
					<li><a href="https://www.facebook.com/emaidalat/" target="_blank" class="fa fa-facebook-square"></a></li>
					<li><a href="https://www.instagram.com/emaidalat/" target="_blank" class="fa fa-instagram"></a></li>
					<li><a href="mailto:family@emaidalat.com" class="fa fa-envelope"></a></li>
				</ul>

				<address>
					<a class="footer-address" href="https://www.google.com/maps/place/1+Thi+S%C3%A1ch,+Ph%C6%B0%E1%BB%9Dng+6,+Tp.+%C4%90%C3%A0+L%E1%BA%A1t,+L%C3%A2m+%C4%90%E1%BB%93ng,+Vietnam/@11.9468468,108.4303808,17z/data=!3m1!4b1!4m5!3m4!1s0x3171132bcb6e21e1:0x45649b7517deb5b!8m2!3d11.9468416!4d108.4325695">1 Thi Sach, Da lat, Vietnam </a>
					<a class="footer-phone" href="tel: +842633839001"> +84 2633 839 001</a>
				</address>
			</div>
		</div>
	</header>
