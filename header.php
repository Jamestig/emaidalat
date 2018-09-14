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
					<li>
						<a href="index.html">Home</a>
						<ul id="inner-home" class="accordionInner">
							<li><a href="index.html#home-restaurant">Restaurant</a></li>
							<li><a href="index.html#home-cafe">Cafe</a></li>
							<li><a href="index.html#home-bnb">Bed &amp; Breakfast</a></li>
							<li><a href="index.html#home-atmosphere">Atmosphere</a></li>
							<li><a href="index.html#home-booking">Booking</a></li>
						</ul>
					</li>

					<li>
						<a href="story.html">Our Story</a>
						<ul id="inner-story" class="accordionInner">
							<li><a href="story.html#story-about">About Us</a></li>
							<li><a href="story.html#story-dalat">Dalat</a></li>
							<li><a href="story.html#story-team">The Team</a></li>
						</ul>
					</li>

					<li>
						<a href="bnb.html">Our Rooms</a>
						<ul id="inner-bnb" class="accordionInner">
							<li><a href="bnb.html#rooms-ivy">Ivy</a></li>
							<li><a href="bnb.html#rooms-clara">Clara</a></li>
							<li><a href="bnb.html#rooms-may">May</a></li>
							<li><a href="bnb.html#rooms-lila">Lila</a></li>
							<li><a href="bnb.html#rooms-jasmine">Jasmine</a></li>
						</ul>
					</li>

					<li>
						<a href="reservations.html">Reservations</a>
					</li>


					<li>
						<a id="restaurantLink" href="menu-restaurant.html">Menu</a>
						<ul id="inner-restaurant" class="accordionInner">
							<li><a href="menu-restaurant.html">Restaurant</a></li>
							<li><a href="menu-drinks.html">Drinks &amp; Desserts</a></li>
							<li><a href="menu-breakfast.html">Breakfast</a></li>
							<li><a href="menu-wine.html">Wine list</a></li>
						</ul>
					</li>

					<li>
						<a href="contact.html">Contact</a>
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
