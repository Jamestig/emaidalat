<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Copyright (c) 2018 Timothy Ringuet">
	<meta name="description" content="Website for Emai Italian Restaurant & Gardens in Dalat." />
	<meta name="keywords" content="emai, dalat, italian, restaurant, garden, homestay, cafe" />
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

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

				<?php
					$defaults = array(
						'container' => true,
						'theme_location'  => 'header-menu',
						'menu_class'  => 'accordion'
					);

					wp_nav_menu( $defaults );
				?>
				</nav>
				
			<div class="side-footer">

				<div id="side-footer-widget-area">
					<?php if ( is_active_sidebar( 'side-footer-widget' ) ) : ?>
					<div>
						<?php dynamic_sidebar ('side-footer-widget'); ?>
					</div>
					<?php endif; ?>
				</div>

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
