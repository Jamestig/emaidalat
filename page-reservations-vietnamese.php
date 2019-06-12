<?php
/*
  Template Name: Reservations Page Vietnamese
*/
?>

<?php get_header(); ?>

	<main id="main-reservations">

		<section class="ribbon-container-right">
			<figure id="" class="fixed-image mobile-image gradient-down">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/reservations_4k.jpg" media="(min-width: 1921px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/tables_1920_01.jpg" media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/tables_1024_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/tables_480_01.jpg" alt="Dining room tables in émai restaurant">
				</picture>
			</figure>

			<div class="content">
				<header class="double-header">
					<h2 class="header-full">Nhà hàng và homestay</h2>
					<hr class="hr-left">
					<h3>Đặt bàn/phòng</h3>
				</header>

				<h4 class="header-caps">Đặt bàn tại nhà hàng Ý Émai</h4>
				<p>Để đặt bàn ăn trưa hoặc tối tại nhà hàng món Ý của émai, xin gọi vào số điện thoại <a class="footer-phone link-bold" href="tel: +842633839001">+84 2633 839 001</a> giữa 8h sáng và 5h chiều.</p>

				<h4 class="header-caps">Đặt phòng tại homestay Émai</h4>
				<p>Để đặt trước một căn phòng ấm cúng, xin:</p>
				<ul>
					<li>Chọn phòng trong trang <a href="https://emaidalat.com/our-rooms/"><span class="link-underline" >Homestay</span></a> để theo link đặt phòng thông qua Airbnb,</li>
					<li>Gửi tin nhắn trực tiếp cho émai qua <a class="link-underline" href="https://www.facebook.com/emaidalat/">Facebook</a>,</li>
					<li>Hoặc gửi mail thông qua địa chỉ email <a class="link-underline" href="mailto:family@emaidalat.com">family@emaidalat.com</a></li>
				</ul>
			</div>
		</section>

	</main>

<?php get_footer(); ?>
