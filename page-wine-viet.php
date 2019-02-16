<?php
/*
  Template Name: Wine Page Viet
*/
?>

<?php get_header(); ?>

<main class="wine-menu">

	<div class="ribbon-container-right">
		<header class="menu__header">
			<nav class="menu__select">
				<h3>Chọn menu:</h3>
				<ul class="menu__list">
					<li><a href="https://emaidalat.com/vi/nha-hang/">Nhà hàng</a><span>&#183;</span>
					</li>
					<li><a href="https://emaidalat.com/vi/quan-ca-phe/">Quán cà phê</a>
					</li><br>
					<li><a href="https://emaidalat.com/vi/an-sang/">Ăn sáng</a><span>&#183;</span>
					</li>
					<li><a href="https://emaidalat.com/vi/ruou/">Danh sách rượu</a></li>
				</ul>
			</nav>

			<h1 class="menu__title">Danh sách rượu</h1>
		</header>

		<section class="menu__course">
			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/4k/wine_4k_01.jpg"
						media="(min-width: 1920px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/wine_1920_01.jpg"
						media="(min-width: 1024px)">
					<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/wine_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/wine_480_01.jpg"
						alt="A glass of white wine illuminated by candlelight, Summer Salad in foreground.">
				</picture>
			</figure>

			<p class="wine-menu-description">Các loại rượu vang tại émai đều được chọn lọc kĩ càng và nhập khẩu từ những vùng
				trồng nho ngon nổi tiếng trên thế giới. Mời bạn thưởng thức 1 ly vang hảo hạng cùng với bữa ăn tại émai để trải
				nghiệm ẩm thực được thêm phần trọn vẹn.</p>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Rượu theo ly</h3>
				</header>

				<ul class="menu__list">
					<li class="wine-menu__item">Italy, Puglia, Primo Sangiovese-Merlot, red
						<span class="dish-price">126</span>
					</li>
					<li class="wine-menu__item">Argentina, Cuma Torrontes, organic white
						<span class="dish-price">126</span>
					</li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Rượu Sparkling</h3>
				</header>

				<ul class="menu__list">
					<li class="wine-menu__item">Spain, Albert i Noya Petit Albet Brut Reserva, organic
						<span class="dish-price">896</span>
					</li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Rượu trắng</h3>
				</header>

				<ul class="menu__list">
					<li class="wine-menu__item">Italy, Montipagano Trebbiano d’Abruzzo, organic
						<span class="dish-price">675</span>
					</li>
					<li class="wine-menu__item">Argentina, Cuma Organic Torrontes
						<span class="dish-price">675</span>
					</li>
					<li class="wine-menu__item">New Zealand, Wairau River Sauvignon Blanc
						<span class="dish-price">907</span>
					</li>
					<li class="wine-menu__item">Germany, Selbach Qualitätswein, Riesling
						<span class="dish-price">907</span>
					</li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Rượu Rosé</h3>
				</header>

				<ul class="menu__list">
					<li class="wine-menu__item">Argentina, Michel Torino Rose
						<span class="dish-price">600</span>
					</li>
				</ul>
			</section>

			<section class="menu__sub-course">
				<header class="menu__sub-course-header">
					<h3>Rượu đỏ</h3>
				</header>

				<ul class="menu__list">
					<li class="wine-menu__item">Italy, Puglia, Primo Sangiovese-Merlot
						<span class="dish-price">590</span>
					</li>
					<li class="wine-menu__item">Italy, Puglia, I Muri Negroamaro
						<span class="dish-price">730</span>
					</li>
					<li class="wine-menu__item">Italy, Puglia, Luccarelli Negroamaro
						<span class="dish-price">730</span>
					</li>
					<li class="wine-menu__item">South Africa, The Wolftrap Syrah-Mourvedre-Vionier
						<span class="dish-price">732</span>
					</li>
					<li class="wine-menu__item">South Africa, Robertson Pinot Noir
						<span class="dish-price">735</span>
					</li>
					<li class="wine-menu__item">Italy, Poggio ai Grilli Chianti, organic
						<span class="dish-price">761</span>
					</li>
					<li class="wine-menu__item">Chile, In Situ Syrah Reserve
						<span class="dish-price">770</span>
					</li>
					<li class="wine-menu__item">Argentina, Don David Malbec Reserve
						<span class="dish-price">858</span>
					</li>
					<li class="wine-menu__item">Spain, Albert i Noya Lignum Negre, organic
						<span class="dish-price">908</span>
					</li>
					<li class="wine-menu__item">New Zealand, Wairau River Pinot Noir
						<span class="dish-price">1508</span>
					</li>
					<li class="wine-menu__item">Italy, Cumaro Conero DOCG Riserva, Montepulciano
						<span class="dish-price">1876</span>
					</li>
				</ul>
			</section>
		</section>
	</div>

	<nav class="menu__select menu__select-bottom">
		<ul>
			<li><a href="https://emaidalat.com/vi/nha-hang/">Nhà hàng</a></li><br>
			<li><a href="https://emaidalat.com/vi/quan-ca-phe/">Quán cà phê</a><span>&#183;</span></li>
			<li><a href="https://emaidalat.com/vi/an-sang/">Ăn sáng</a></li>
		</ul>
	</nav>
</main>

<?php get_footer(); ?>