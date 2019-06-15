<?php
/**
 * Template Name: Drinks Page Viet
 *
 * @package emaidalat
 */

get_header(); ?>

<main class="drinks-menu">

	<div class="ribbon-container-right">
		<header class="menus__header">

			<?php get_template_part( 'template-parts/menus-navigation' ); ?>

			<h1 class="menu__title">Bevande &#183; Thức uống</h1>
		</header>

		<section class="menuSection menu__course">
			<div class="fixed-image mobile-image">
				<figure class="fixed-image mobile-image">
					<picture>
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/coffee_4k_01.jpg"
							media="(min-width: 1921px)">
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/coffee_1920_01.jpg"
							media="(min-width: 1025px)">
						<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/coffee_1024_01.jpg"
							media="(min-width: 600px)">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/coffee_480_01.jpg"
							alt="Cappuccino on a bed-top tray, with a book.">
					</picture>
				</figure>
			</div>

			<header class="menu__course-header">
				<h2>Cà phê &#183; Cacao</h2>
				<p class="font--light">Có lựa chọn dùng sữa chay (sữa hạnh nhân hoặc macadamia) thay sữa bò (+20.)
				</p>
			</header>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Cà phê Ý</h3>
				</header>

				<ul class="menu__list">
					<li class="drinks-menu__item">Espresso <span class="dish-price">20</span></li>
					<li class="drinks-menu__item">Americano nóng <span class="dish-price">25</span></li>
					<li class="drinks-menu__item">Americano đá với vỏ cam <span class="dish-price">40</span></li>
					<li class="drinks-menu__item">Cappuccino <span class="dish-price">45</span></li>
					<li class="drinks-menu__item">Latte <span class="dish-price">60</span></li>
					<li class="drinks-menu__item">Mocha <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Affogato <span class="dish-price">60</span></li>
					<li class="drinks-menu__item">Macchiato cổ điển <span class="dish-price">45</span></li>
					<li class="drinks-menu__item">+Thêm cà phê đậm <span class="dish-price">+15</span></li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Cà phê Việt Nam</h3>
				</header>
				<ul class="menu__list">
					<li class="drinks-menu__item">Cà phê đen nóng/đá <span class="dish-price">25</span></li>
					<li class="drinks-menu__item">Cà phê sữa nóng/đá <span class="dish-price">28</span></li>
					<li class="drinks-menu__item">Cà phê trứng <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Cà phê dừa <span class="dish-price">70</span></li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Cacao</h3>
				</header>
				<ul class="menu__list">
					<li class="drinks-menu__item">Cacao nóng <span class="dish-price">70</span></li>
				</ul>
			</section>
		</section>

		<section class="menuSection menu__course">
			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/tea_4k_01.jpg"
						media="(min-width: 1921px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/tea_1920_01.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/tea_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/tea_480_01.jpg"
						alt="Tea pot and cup made by Authentique">
				</picture>
			</figure>

			<header class="menu__course-header">
				<h2>Trà</h2>
			</header>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Trà nóng (phục vụ theo ấm)</h3>
				</header>

				<ul class="menu__list">
					<li class="drinks-menu__item">Trà Chai gia vị Ấn nhà làm <span class="dish-price">90</span>
						<p class="chai-tea font--light">*có thể dùng kèm sữa hoặc kèm dừa</p>
					</li>
					<li class="drinks-menu__item">Earl Grey <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Trà búp với cam tươi, gừng và mật ong rừng <span class="dish-price">90</span>
					</li>
					<li class="drinks-menu__item">Trà Ô Long xanh Cầu Dất <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Trà Ô Long coldbrew <span class="dish-price">60</span></li>
					<li class="drinks-menu__item">Trà atisô <span class="dish-price">60</span></li>
					<li class="drinks-menu__item">Trà xanh <span class="dish-price">30</span></li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Trà đá (phục vụ theo ly)</h3>
				</header>
				<ul class="menu__list">
					<li class="drinks-menu__item">Trà Ô Long với sương sáo, hạt chia, chanh, bạc hà và mật ông rừng <span
							class="dish-price">80</span></li>
				</ul>
			</section>
		</section>

		<section class="menuSection menu__course">
			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/coffee_4k_01.jpg"
						media="(min-width: 1921px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/coffee_1920_01.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/coffee_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/coffee_480_01.jpg"
						alt="Cappuccino on a bed-top tray, with a book.">
				</picture>
			</figure>

			<header class="menu__course-header">
				<h2>Thức uống</h2>
			</header>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Nước trái cây và sinh tố</h3>
				</header>
				<p class="font--light">Chúng tôi chỉ dùng trái cây tươi.</p>
				<ul class="menu__list">
					<li class="drinks-menu__item">Nước ép cam / dưa hấu <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Sinh tố dâu / xoài / chuối <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Soda với xi-rô tươi nhà làm kiểu Ý: chanh dây / dâu tầm / phúc bồn tử / dâu tây
						<span class="dish-price">70</span></li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Các loại nước</h3>
				</header>
				<ul class="menu__list">
					<li class="drinks-menu__item">Nước khoáng có ga Vĩnh Hảo <span class="dish-price">40</span></li>
					<li class="drinks-menu__item">Coca Cola / 7 Up <span class="dish-price">50</span></li>
				</ul>
			</section>
		</section>

		<section class="menuSection menu__course">
			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/4k/wine_4k_01.jpg"
						media="(min-width: 1921px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/hd/wine_1920_01.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/tablet/wine_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photos/mobile/wine_480_01.jpg"
						alt="A glass of white wine illuminated by candlelight, Summer Salad in foreground.">
				</picture>
			</figure>

			<header class="menu__course-header">
				<h2>Rượu</h2>
				<a href="https://emaidalat.com/vi/ruou/" class="text--condition">Nhấp vào đây để tham khảo danh sách đầy đủ các loại rượu theo chai được émai tuyển chọn.</a>
			</header>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Rượu theo ly</h3>
				</header>

				<ul class="menu__list">
					<li class="drinks-menu__item">Rượu đỏ Sangiovese-Merlot, Ý <span class="dish-price">126</span></li>
					<li class="drinks-menu__item">Rượu trắng Torrontes, Argentina <span class="dish-price">126</span></li>
					<li class="mulled-wine">Rượu vang đỏ hâm nóng* <span class="dish-price">126</span>
						<p>với 8 loại gia vị đặc biệt, cam, và chanh</p>
					</li>
				</ul>
				<p class="text--condition">* vào những tháng lạnh</p>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Bia</h3>
				</header>

				<ul class="menu__list">
					<li class="drinks-menu__item">Leffe / Hoegaarden <span class="dish-price">100</span></li>
					<li class="drinks-menu__item">Corona <span class="dish-price">70</span></li>
					<li class="drinks-menu__item">Saigon Special / Heineken / Sapporo <span class="dish-price">50</span></li>
				</ul>
			</section>
		</section>

		<?php get_template_part( 'template-parts/menus-navigation' ); ?>

	</div>
</main>

<?php get_footer(); ?>
