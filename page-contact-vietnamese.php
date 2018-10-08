<?php
/*
  Template Name: Contact Page Vietnamese
*/
?>

<?php get_header(); ?>

	<main id="main-contact">

		<section class="ribbon-container-right">

			<figure id="" class="fixed-image mobile-image gradient-down">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/bar_4k_01.jpg" media="(min-width: 1920px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/bar_1920_01.jpg" media="(min-width: 1024px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/bar_1024_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/bar_480_01.jpg" alt="émai cafe bar at night, illuminated by a hanging light.">
				</picture>
			</figure>

			<div class="content">
				<header class="double-header">
					<h2 class="header-full">Ghé hoặc gửi lời chào</h2>
					<hr class="hr-left">
					<h3>Liên hệ</h3>
				</header>

				<p>Để gửi tin nhắn cho émai, bạn vui lòng mở contact form hoặc gửi email trực tiếp về địa chỉ <a class="link-underline" href="mailto:family@emaidalat.com">family@emaidalat.com</a>, cho chúng mình, hoặc gọi điện thoại: <a class="link-bold footer-phone" href="tel: +842633839001">+84 2633 839 001</a>.</p>
				<p>Émai mở cửa mỗi ngày trong tuần từ 7 giờ sang đến 10 giờ đêm.</p>

				<div class="link-button">
					<a href=""><span class="hidden-mobile">Mở </span>Contact Form</a>
				</div>

				<div class="contact-form">

				</div>

				<h4 class="header-caps">TÌM ĐẾN ÉMAI</h4>
				<p>Nhà mình ở số 1 Thi Sách, Đà Lạt, Lâm Đồng. Nhà dễ nhận ra nhờ khu vườn xanh mướt bao quanh.</p>

				<div class="contact-images">
					<figure class="contact-sign">
						<a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/info/street_sign.jpg" alt="émai street sign"></a>
					</figure>
					<figure class="contact-maps">
						<a href="https://goo.gl/maps/rfoB76bXZLM2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/info/map_grey.jpg" alt="google map image of émai's location"></a>
					</figure>
				</div>
			</div>
		</section>

	</main>

<?php get_footer(); ?>
