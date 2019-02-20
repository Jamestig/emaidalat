<?php
/*
  Template Name: Breakfast Page Viet
*/
?>

<?php get_header(); ?>

<main class="breakfast-menu">

	<div class="ribbon-container-right">
		<header class="menu__header">
			<nav class="menu__select">
				<h3>Chọn menu:</h3>
				<ul class="menu__list">
					<li><a href="https://emaidalat.com/vi/nha-hang/">Nhà hàng</a><span>&#183;</span></li>
					<li><a href="https://emaidalat.com/vi/quan-ca-phe/">Thức uống</a></li><br>
					<li><a href="https://emaidalat.com/vi/ruou/">Danh sách rượu</a><span>&#183;</span></li>
					<li><a href="https://emaidalat.com/vi/an-sang/">Ăn sáng</a></li>
				</ul>
			</nav>

			<h1 class="menu__title">Set ăn sáng</h1>
		</header>

		<section class="menu__course">
			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/breakfast_1920_01.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/breakfast_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/breakfast_480_01.jpg"
						alt="Sunny-Side-Up Eggs and a Croissant, served with Buttered Baby Potatoes and Salad, plus coffee.">
				</picture>
			</figure>

			<div class="breakfast-menu__course">
				<div class="menu-breakfast-information">
					<p class="font--light font--italic">Được phục vụ từ 7:30 đến 10:30 sáng.</p>
					<p class="font--light">250,000đ | Miễn phí cho mọi khách trọ tại émai.</p>
					<p>Mọi bữa sáng bao gồm:</p>
					<hr class="hr-center">
					<p class="font--light">Cà phê hoặc trà tuỳ chọn* hoặc nước trái cây ép, bánh mì Ciabatta nhà làm, mứt trái cây nhà làm, và một dĩa tráy cây tươi tráng miệng</p>
				</div>

				<div class="menu-breakfast__sets">
					<section class="menu__sub-course">
						<h6>Một</h6>
						<h3>Trứng ốp la và bánh sừng trâu, dùng kèm khoai tây tẩm bơ và sà lách</h3>
					</section>

					<section class="menu__sub-course">
						<h6>Hai</h6>
						<h3>Trứng chiên phô mai emmental và nấm, dùng kèm khoai tây tẩm bơ và sà lách</h3>
					</section>

					<section class="menu__sub-course">
						<h6>Ba</h6>
						<h3>Trứng chiên rau thơm và kem sữa chua, dùng kèm khoai tây tẩm bơ và sà lách</h3>
					</section>

					<section class="menu__sub-course">
						<h6>Bốn</h6>
						<h3>Bánh trứng khoai tây Tây Ban Nha với cà chua kem, dùng kèm sà lách</h3>
					</section>

					<section class="menu__sub-course">
						<h6>Năm</h6>
						<h3>Bữa ăn sáng Việt Nam trong ngày</h3>
						<p class="text-condition">* lựa chọn trong set không bao gồm cà phê trứng, cà phê dừa, trà cam gừng và trà ô long sương sáo</p>
					</section>
				</div>
			</div>

			<nav class="menu__select menu__select-bottom">
				<ul>
					<li><a href="https://emaidalat.com/vi/nha-hang/">Nhà hàng</a></li><br>
					<li><a href="https://emaidalat.com/vi/quan-ca-phe/">Thức uống</a><span>&#183;</span></li>
					<li><a href="https://emaidalat.com/vi/ruou/">Danh sách rượu</a></li>
				</ul>
			</nav>
		</section>
	</div>
</main>

<?php get_footer(); ?>