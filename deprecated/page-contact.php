<?php
/*
  Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<main id="main-contact">

	<section class="ribbon-container-right">

		<figure id="" class="fixed-image mobile-image gradient-down">
			<picture>
				<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/bar_4k_01.jpg" media="(min-width: 1920px)">
				<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/bar_1920_01.jpg" media="(min-width: 1024px)">
				<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/bar_1024_01.jpg" media="(min-width: 600px)">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/bar_480_01.jpg" alt="émai cafe bar at night, illuminated by a hanging light.">
			</picture>
		</figure>

		<div class="content">
			<header class="double-header">
				<h2 class="header-full">Drop by or say hello</h2>
				<hr class="hr-left">
				<h3>Contact</h3>
			</header>

			<p>To send us a message, kindly use the contact form below. You can also email us at <a class="link-underline" href="mailto:family@emaidalat.com">family@emaidalat.com</a>, or over the phone at <a class="link-bold footer-phone" href="tel: +842633839001">+84 2633 839 001</a>.</p>
			<p>We are open from 7am to 10pm, seven days a week.</p>

			<div class="link-button">
				<a id="openContactForm"><span class="hidden-mobile">Open </span>Contact Form</a>
			</div>
		</div>

		<section class="contact-form" id="contact-en">
			<div class="content">
			<div class="closeButton">
				<span></span>
				<span></span>
			</div>
				<h3 class="hidden-tablet">Contact form</h3>
				<p>We will get back to you as soon as we can.</p>

				<?php echo do_shortcode('[contact-form-7 id="122" title="Contact EN"]'); ?>

			</div>
		</section>

		<div class="content">
			<h4 class="header-caps">How to find us</h4>
			<p>You can find us at 1 Thi Sach, Da Lat, Lam Dong, Vietnam. Our home can be recognized by the lush greenery that encloses it.</p>

			<div class="contact-images">
				<figure class="contact-sign">
					<a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/info/street_sign.jpg" alt="émai street sign"></a>
				</figure>
				<figure class="contact-maps">
					<a href="https://goo.gl/maps/rfoB76bXZLM2"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/info/map_grey.jpg" alt="google map image of émai's location"></a>
				</figure>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
