<?php
/*
  Template Name: Breakfast Page Vietnamese
*/
?>

<?php get_header(); ?>

	<main id="main-menu-breakfast" class="main-menu">

		<section id="menu-breakfast" class="ribbon-container-right">
			<header class="menu-header">
				<nav class="menu-select">
					<h3>Chọn menu:</h3>
					<ul>
						<li><a href="https://emaidalat.com/vi/nha-hang/">Nhà hàng</a><span>&#183;</span></li>
						<li><a href="https://emaidalat.com/vi/quan-ca-phe/">Quán cà phê</a></li><br>
						<li><a href="https://emaidalat.com/vi/an-sang/">Ăn sáng</a><span>&#183;</span></li>
						<li><a href="https://emaidalat.com/vi/ruou/">Danh sách rượu</a></li>
					</ul>
				</nav>

				<h2 class="menu-title">Set ăn sáng</h2>
			</header>

			<figure id="" class="first-image fixed-image mobile-image gradient-down">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/breakfast_1920_01.jpg" media="(min-width: 1600px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/breakfast_1024_01.jpg" media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/breakfast_480_01.jpg" alt="Sunny-Side-Up Eggs and a Croissant, served with Buttered Baby Potatoes and Salad, plus coffee.">
				</picture>
			</figure>

			<div class="content">
				<div class="menu-breakfast-information">
					<p>Được phục vụ từ 7:30 đến 10:30 sáng.</p>
					<p>250,000đ | Miễn phí cho mọi khách trọ tại émai.</p>
					<p>Mọi bữa sáng bao gồm:</p>
					<hr class="hr-center">
					<p>Cà phê hoặc trà tuỳ chọn* hoặc nước trái cây ép, bánh mì Ciabatta nhà làm, mứt trái cây nhà làm, và một dĩa tráy cây tươi tráng miệng</p>
				</div>

				<div class="menu-breakfast-sets">
					<h6>Một</h6>
					<p>Trứng ốp la và bánh sừng trâu, dùng kèm khoai tây tẩm bơ và sà lách</p>

					<h6>Hai</h6>
					<p>Trứng chiên phô mai emmental và nấm, dùng kèm khoai tây tẩm bơ và sà lách</p>

					<h6>Ba</h6>
					<p>Trứng chiên rau thơm và kem sữa chua, dùng kèm khoai tây tẩm bơ và sà lách</p>

					<h6>Bốn</h6>
					<p>Bánh trứng khoai tây Tây Ban Nha với cà chua kem, dùng kèm sà lách</p>

					<h6>Năm</h6>
					<p>Bữa ăn sáng Việt Nam trong ngày</p>
					<p class="text-condition">* lựa chọn trong set không bao gồm cà phê trứng, cà phê dừa, trà cam gừng và trà ô long sương sáo</p>
				</div>
			</div>

			<section class="menu-select-bottom">
				<nav class="menu-select">
					<ul>
						<li><a href="https://emaidalat.com/vi/nha-hang/">Nhà hàng</a></li><br>
						<li><a href="https://emaidalat.com/vi/quan-ca-phe/">Quán cà phê</a><span>&#183;</span></li>
						<li><a href="https://emaidalat.com/vi/ruou/">Danh sách rượu</a></li>
					</ul>
				</nav>
			</section>
		</section>
	</main>

<?php get_footer(); ?>
