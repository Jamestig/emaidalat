<?php
/*
  Template Name: Restaurant Page Vietnamese
*/
?>

<?php get_header(); ?>

	<main id="main-menu-restaurant" class="main-menu">

		<section id="menu-restaurant" class="ribbon-container-right">
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

				<h2 class="menu-title">Nhà hàng</h2>
				<p class="menu-legend">
					<span><img class="icon-vegetarian" class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian icon"></span>MÓN CHAY
					<span><img class="icon-vegan" class="icon-vegan" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegan.png" alt="Vegan icon"></span>MÓN THUẦN CHAY/THUẦN CHAY KHI DƯỢC YÊU CẦU
					<span><img class="icon-seasonal" class="icon-seasonal" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/seasonal.png" alt="Seasonal icon"></span>THEO MÙA
					<span><img class="icon-spicy" class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy icon"></span>MÓN CAY
				</p>
			</header>

			<section id="menu-soups" class="pageSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/duck_1920.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/duck_800_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/duck_480_01.jpg" alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">MÓN SÚP</h4>
					</header>

					<ul class="list-soups">
						<li>Súp Atiso sánh kem đặc biêt kiểu Émai
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">220</span>
						</li>
						<li>Súp cà chua tươi và cà chua phơi nắng Dịa Trung Hải kèm sốt kem hương thảo
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">120</span>
						</li>
						<li>Súp khoai tây, boa-rô, cà chua phơi nắng Dịa Trung Hải kèm sốt kem tỏi
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">120</span>
						</li>
						<li>Súp hành tây Pháp thoảng hương rượu Anisette
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span><img class="icon-seasonal" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/seasonal.png" alt="Seasonal"></span>
							<span class="dish-price">190</span>
						</li>
						<li>Súp kem củ dền đỏ với nghê vàng
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<!--<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegan.png" alt="Vegan"></span>-->
							<span class="dish-price">120</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-salads" class="pageSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/salad_pomelo_1920.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/salad_pomelo_800.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/salad_pomelo_480.jpg" alt="Pomelo Salad with Cinnamon, Star Anise and Orange Blossom Water">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">MÓN SALAD</h4>
					</header>

					<ul class="list-salads">
						<li>Salad mùa hè với đậu que, đậu tuyết và phô mai Feta, được nêm với hạt nguyêt quế hy Lạp và rau giải ngấm
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">220</span>
						</li>
						<li>Salad củ dền, cam tươi, dâu tây rắc hạt điều
							<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegan.png" alt="Vegan"></span>
							<span class="dish-price">160</span>
						</li>
						<li>Salad măng tây xanh cùng sốt dầu ô-liu chanh và rắc phô mai Pecorino
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">230</span>
						</li>
						<li>Sà lách khoai tây với trứng cút và sốt pesto hạnh nhân
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">180</span>
						</li>
						<li>Salad Caesar truyền thống
							<span class="dish-price">190</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-appetisers" class="pageSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/food_ravioli_1600.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/food_ravioli_1024.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/food_ravioli_480.jpg" alt="Sun-dried Tomato and Feta Cheese Ravioli with Roasted Chilies">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">MÓN KHAI VỊ</h4>
					</header>

					<ul class="list-appetisers">
						<li>Bí đỏ nướng giòn với phô mai parmesan và rau thơm, ăn kèm với kem sữa chua
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">150</span>
						</li>
						<li>Ravioli kiểu Ý với cà chua phơi nắng Dịa Trung Hải, phô mai feta và ớt nướng
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">210</span>
						</li>
						<li>Bánh nướng kiểu pháp với tỏi ướp dấm Ý cháy đường với phô mai sữa dê, hương thảo và lá thyme
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">180</span>
						</li>
						<li>Bó xôi và phô mai sữa dê viên đút lò ăn với sốt kem nấm
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">180</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-pasta" class="pageSection section-dish">
				<figure id="" class="first-image fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/pasta_tomato_1920.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/pasta_tomato_1024.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/pasta_tomato_480.jpg" alt="Spaghetti with Garden-fresh and Sun-dried Tomatoes">
					</picture>
				</figure>


				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">MỲ Ý</h4>
					</header>

					<ul class="list-pasta">
						<li>Mỳ tagliatella nhà làm với tôm và sốt hải sản kiểu Pháp (sốt bisque)
							<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy"></span>
							<span class="dish-price">230</span>
						</li>
						<li>Mỳ spaghetti dầu ô-liu tỏi ăn với phô mai Parmesan lâu năm
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy"></span>
							<span class="dish-price">160</span>
						</li>
						<li>Mỳ spaghetti sốt cà chua tươi và cà chua phơi nắng
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy"></span>
							<span class="dish-price">160</span>
						</li>
						<li>Gnocchi nhà làm với bơ, rau xô thơm và phô mai Pecorino
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">190</span>
						</li>
						<li>Gnocchi nhà làm ăn kèm nấm cùng sốt xạ hương quyện kem tươi và brandy
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">190</span>
						</li>
						<li>Mỳ spaghetti sốt carbonara
							<span class="dish-price">180</span>
						</li>
						<li>Mỳ tagliatella nhà làm dùng kèm sốt phô mai Gorgonzola và cỏ xạ hương
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">210</span>
						</li>
						<li>Mỳ tagliatella nhà làm với sốt pesto hạnh nhân và gà
							<span class="dish-price">245</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-pizza" class="pageSection section-dish">
				<figure id="" class="fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/pizza_margherita_1920.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/pizza_margherita_800.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/pizza_margherita_480.jpg" alt="Margherita Pizza with Sun-dried Tomatoes">
					</picture>
				</figure>


				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">Pizza</h4>
					</header>

					<ul class="list-pizza">
						<li>Pizza bốn loại phô mai
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">260</span>
						</li>
						<li>Pizza Margherita với cà chua phơi nắng Dịa Trung Hải
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy"></span>
							<span class="dish-price">155</span>
						</li>
						<li>Pizza cá ngừ, hành tây và trái ô-liu đen
							<span class="dish-price">210</span>
						</li>
						<li>Pizza rau tươi Dà lạt nướng dùng kèm giấm balsamico, trái ô-liu đen và cà chua phơi nắng
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">170</span>
						</li>
						<li>Pizza tôm cay với sốt Arrabiata
							<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/spicy.png" alt="Spicy"></span>
							<span class="dish-price">225</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="menu-mains" class="pageSection section-dish">
				<figure id="" class="first-image fixed-image mobile-image gradient-down">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/hd/duck_1920.jpg" media="(min-width: 1600px)">
						<source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/photos/tablet/duck_800_01.jpg" media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photos/mobile/duck_480_01.jpg" alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
					</picture>
				</figure>

				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">MÓN CHÍNH</h4>
					</header>

					<ul class="list-mains">
						<li>Thịt bò nấu rượu vang đỏ với bó rau thơm Pháp, ăn kèm với bánh mì nhà làm
							<span class="dish-price">340</span>
						</li>
						<li>Vịt xông khói hương thảo, sốt giấm Balsamico Ý và lá sage, dùng kèm khoai tây non tẩm bơ và rau tươi theo mùa
							<span class="dish-price">340</span>
						</li>
						<li>Tôm bạc sốt bơ chanh và cỏ xạ hương, kèm cải xoong và khoai tây non tẩm bơ
							<span class="dish-price">320</span>
						</li>
						<li>Gà ướp giấm tarragon, ăn kèm đậu que và khoai tây non tẩm bơ
							<span class="dish-price">290</span>
						</li>
						<!--
						<li>Dalat Artichoke with Thyme &amp; Lime Butter Sauce, served with Fresh Pasta
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span><img class="icon-seasonal" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/seasonal.png" alt="Seasonal"></span>
							<span class="dish-price">290</span>
						</li>
					-->
					</ul>
				</div>
			</section>

			<section id="menu-cheese" class="section-dish">
				<div class="content">
					<header class="dish-header">
						<h4 class="dish-title">PHÔ MAI</h4>
					</header>

					<ul class="list-cheese">
						<li>Phô mai chọn lọc kèm với mứt nhà làm và các loại hạt rang sơ
							<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
							<span class="dish-price">300</span>
						</li>
					</ul>
				</div>
			</section>
		</section>

		<section class="menu-select-bottom">
				<nav class="menu-select">
					<ul>
						<li><a href="https://emaidalat.com/vi/quan-ca-phe/">Quán cà phê</a></li><br>
						<li><a href="https://emaidalat.com/vi/an-sang/">Ăn sáng</a><span>&#183;</span></li>
						<li><a href="https://emaidalat.com/vi/ruou/">Danh sách rượu</a></li>
					</ul>
				</nav>
		</section>
	</main>

<?php get_footer(); ?>
