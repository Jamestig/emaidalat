<?php
/*
Template Name: Restaurant Page Viet
 */
?>

<?php get_header();?>

<main class="menu">

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

			<h1 class="menu__title">Nhà hàng</h1>

			<p class="menu__legend">
				<span><img class="icon-vegetarian" class="icon-vegetarian"
						src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png" alt="Vegetarian icon"></span>MÓN
				CHAY
				<span><img class="icon-vegan" class="icon-vegan"
						src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png" alt="Vegan icon"></span>MÓN THUẦN
				CHAY/THUẦN CHAY KHI DƯỢC YÊU CẦU
				<span><img class="icon-seasonal" class="icon-seasonal"
						src="<?php bloginfo('stylesheet_directory');?>/images/icon/seasonal.png" alt="Seasonal icon"></span>THEO MÙA
				<span><img class="icon-spicy" class="icon-spicy"
						src="<?php bloginfo('stylesheet_directory');?>/images/icon/spicy.png" alt="Spicy icon"></span>MÓN CAY
			</p>
		</header>

		<section class="menu__course">

			<hgroup class="menu__course-header">
				<h2>Antipasti &#183; Khai vị</h2>
				<h4>Chúng ta bắt đầu bằng một món khai vị, antipasti, nhẹ nhàng và tinh hoa.</h3>
			</hgroup>

			<section class="menuSection menu__sub-course">
				<figure class="fixed-image mobile-image">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/hd/food_ravioli_1600.jpg"
							media="(min-width: 1025px)">
						<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/tablet/food_ravioli_1024.jpg"
							media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/photos/mobile/food_ravioli_480.jpg"
							alt="Sun-dried Tomato and Feta Cheese Ravioli with Roasted Chilies">
					</picture>
				</figure>

				<header class="menu__sub-course-header">
					<h3>KHAI VỊ</h3>
				</header>

				<ul class="menu__list">
					<li class="menu__dish-item">Bánh nướng Caponata
						<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span class="dish-price">240</span>
						<p class="menu__dish-ingredients">Bánh nướng nhân cà tím, với nhiều loại cà chua quí và hạt thông</p>
					</li>

					<li class="menu__dish-item">Mozzarella 4 loại sốt quí
						<span><img class="icon-vegetarian"
								src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">210</span>
						<p class="menu__dish-ingredients">Sốt pesto, sốt ớt chuông, sốt trái ô liu đen, sốt cà chua nho, với hạnh
							nhân rang</p>
					</li>

					<li class="menu__dish-item">Món ngon từ rau và nấm
						<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span class="dish-price">190</span>
						<p class="menu__dish-ingredients">Đậu ngự ướp dầu ô liu và gia vị, cà chua phơi nắng và pa tê nấm</p>
					</li>

					<li class="menu__dish-item">Bí đỏ
						<span><img class="icon-vegetarian"
								src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">150</span>
						<p class="menu__dish-ingredients">Bí đỏ áo phô mai parmesan đút lò, ăn với kem sữa chua</p>
					</li>
				</ul>
			</section>

			<section class="menuSection menu__sub-course">
				<figure class="fixed-image mobile-image">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/hd/salad_pomelo_1920.jpg"
							media="(min-width: 1025px)">
						<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/tablet/salad_pomelo_800.jpg"
							media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/photos/mobile/salad_pomelo_480.jpg"
							alt="Pomelo Salad with Cinnamon, Star Anise and Orange Blossom Water">
					</picture>
				</figure>

				<header class="menu__sub-course-header">
					<h3>SÀ LÁCH</h3>
				</header>

				<ul class="menu__list">
					<li class="menu__dish-item">Sà lách mùa hè
						<span><img class="icon-vegetarian"
								src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">220</span>
						<p class="menu__dish-ingredients">Đậu que, đậu tuyết và phô mai sữa dê Feta, hạt ngò và lá tarragon</p>
					</li>

					<li class="menu__dish-item">Sà lách củ dền
						<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span class="dish-price">160</span>
						<p class="menu__dish-ingredients">Củ dền, cam tươi, dâu tây tươi với hạt điều</p>
					</li>

					<li class="menu__dish-item">Sà lách măng tây xanh
						<span><img class="icon-vegetarian"
								src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">240</span>
						<p class="menu__dish-ingredients">Măng tây xanh với sốt chanh ô liu, rắc phô mai sữa cừu Pecorino</p>
					</li>
				</ul>
			</section>
		</section>

		<section class="menu__course">
			<hgroup class="menu__course-header">
				<h2>Primi &#183; Món thứ nhất</h2>
				<h4>Món ăn phong phú đầu tiên trong một bữa ăn truyền thống của Ý.</h4>
			</hgroup>

			<section class="menuSection menu__sub-course">
				<figure class="fixed-image mobile-image">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/hd/duck_1920.jpg"
							media="(min-width: 1025px)">
						<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/tablet/duck_800_01.jpg"
							media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/photos/mobile/duck_480_01.jpg"
							alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
					</picture>
				</figure>

				<header class="menu__sub-course-header">
					<h3>SÚP</h3>
				</header>

				<ul class="menu__list">
					<li class="menu__dish-item">Súp atisô <span class="menu__dish-ingredients">của nhà émai</span>
						<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span class="dish-price">220</span>
					</li>

					<li class="menu__dish-item">Súp cà chua <span class="menu__dish-ingredients">kèm sốt kem hương thảo</span>
						<span><img class="icon-vegetarian"
								src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">120</span>
					</li>

					<li class="menu__dish-item">Súp khoai tây <span class="menu__dish-ingredients">và boa rô kèm sốt kem
							tỏi</span>
						<span><img class="icon-vegetarian"
								src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span class="dish-price">120</span>
					</li>
				</ul>
			</section>

			<section class="menuSection menu__sub-course">
				<figure class="fixed-image mobile-image">
					<picture>
						<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/hd/pasta_tomato_1920.jpg"
							media="(min-width: 1025px)">
						<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/tablet/pasta_tomato_1024.jpg"
							media="(min-width: 600px)">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/photos/mobile/pasta_tomato_480.jpg"
							alt="Spaghetti with Garden-fresh and Sun-dried Tomatoes">
					</picture>
				</figure>

				<header class="menu__sub-course-header">
					<h3>MỲ Ý</h3>
				</header>

				<ul class="menu__list">
					<li class="menu__dish-item">Mỳ tôm
						<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory');?>/images/icon/spicy.png"
								alt="Spicy"></span>
						<span class="dish-price">230</span>
						<p class="menu__dish-ingredients">Mỳ dẹp linguine sốt tôm nấu vang trắng kiểu Pháp</p>
					</li>

					<li class="menu__dish-item">Spaghetti carbonara
						<span class="dish-price">190</span>
						<p class="menu__dish-ingredients">Spaghetti với thịt muối, trứng và phô mai Parmesan</p>
					</li>

					<li class="menu__dish-item">Spaghetti dầu tỏi
						<span><img class="icon-vegetarian"
								src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory');?>/images/icon/spicy.png"
								alt="Spicy"></span>
						<span class="dish-price">190</span>
						<p class="menu__dish-ingredients">Spaghetti dầu ô liu, tỏi, ớt và phô mai sữa cừu Pecorino bào mỏng</p>
					</li>

					<li class="menu__dish-item">Ravioli
						<span><img class="icon-vegetarian"
								src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png" alt="Vegetarian"></span>
						<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory');?>/images/icon/spicy.png"
								alt="Spicy"></span>
						<span class="dish-price">240</span>
						<p class="menu__dish-ingredients">Bánh ravioli nhân phô mai sữa dê và ớt nướng</p>
					</li>

					<li class="menu__dish-item">Mì ớt giấm vang trắng
						<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span><img class="icon-spicy" src="<?php bloginfo('stylesheet_directory');?>/images/icon/spicy.png"
								alt="Spicy"></span>
						<span class="dish-price">190</span>
						<p class="menu__dish-ingredients">Mỳ ống penne với sốt ớt ngâm giấm gia vị vang trắng<br>(thêm thịch heo muối xông khói +40)</p>
					</li>

					<li class="menu__dish-item">Nui tai mèo sốt ạc ti sô
						<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png"
								alt="Vegan"></span>
						<span class="dish-price">290</span>
						<p class="menu__dish-ingredients">Nui tai mèo orecchiette nhà làm với ạc ti sô, các loại rau thơm và hạt thông</p>
					</li>

					<li class="menu__dish-item">Mì nghêu
						<span class="dish-price">230</span>
						<p class="menu__dish-ingredients">Mì dẹp linguine với nghêu nấu sốt ớt xanh, vang trắng và hạt fennel</p>
					</li>
				</ul>
			</section>
		</section>

		<section class="menuSection menu__course">
			<hgroup class="menu__course-header">
				<h2>Pizze &#183; Pizza</h2>
				<h4>Pizza thường được ăn chung, và có thể gọi thay cho một món primo hoặc secondo.</h4>
			</hgroup>

			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/hd/pizza_margherita_1920.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/tablet/pizza_margherita_800.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory');?>/images/photos/mobile/pizza_margherita_480.jpg"
						alt="Margherita Pizza with Sun-dried Tomatoes">
				</picture>
			</figure>

			<ul class="menu__list">
				<li class="menu__dish-item">Margherita
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">165</span>
					<p class="menu__dish-ingredients">Phô mai mozzarella, cà chua, lá quế tây</p>
				</li>

				<li class="menu__dish-item">Bốn loại phô mai
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">260</span>
					<p class="menu__dish-ingredients">Mozzarella, gorgonzola, gouda, parmesan</p>
				</li>

				<li class="menu__dish-item">Xúc xích fennel
					<span class="dish-price">225</span>
					<p class="menu__dish-ingredients">Thịt xúc xích Ý fennel nhà làm, mozzarella, cà chua, rau thơm oregano</p>
				</li>

				<li class="menu__dish-item">Nấm nướng
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">230</span>
					<p class="menu__dish-ingredients">Nấm nướng và phô mai camembert</p>
				</li>

				<li class="menu__dish-item">Cá ngừ
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">160</span>
					<p class="menu__dish-ingredients">Cá ngừ, hành tây, trái ô liu đen</p>
				</li>

				<li class="menu__dish-item">Vườn rau Đà lạt (chay
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
							/ thuần chay
					<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png"
							alt="Vegan"></span>)
					<span class="dish-price">170</span>
					<p class="menu__dish-ingredients">Rau củ Đà lạt ướp nướng, trái ô liu đen, cà chua phơi nắng<br>(với phô mai +20)</p>
				</li>
			</ul>
		</section>

		<section class="menuSection menu__course">
			<hgroup class="menu__course-header">
				<h2>Secondi &#183; Món chính</h2>
				<h4>Dĩa thức ăn chính của bữa, được chuẩn bị tỉ mỉ nhất.</h4>
			</hgroup>

			<figure class="first-image fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/hd/duck_1920.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/tablet/duck_800_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory');?>/images/photos/mobile/duck_480_01.jpg"
						alt="Rosemary Smoked Duck Filet with Balsamic Sage and Berries Gravy">
				</picture>
			</figure>

			<ul class="menu__list">
				<li class="menu__dish-item">Vịt xông khói
					<span class="dish-price">340</span>
					<p class="menu__dish-ingredients">Phi lê vit xông khói hương thảo với cà rốt nướng và cam hạnh nhân</p>
				</li>

				<li class="menu__dish-item">Sườn cừu
					<span class="dish-price">340</span>
					<p class="menu__dish-ingredients">Sườn cừu áo hạt dẻ pistachio, đậu Hà lan tươi xay</p>
				</li>

				<li class="menu__dish-item">Bò nấu vang đỏ
					<span class="dish-price">340</span>
					<p class="menu__dish-ingredients">Bò hầm rượu vang đỏ với bó rau thơm Pháp</p>
				</li>

				<li class="menu__dish-item">Tôm sốt bơ chanh
					<span class="dish-price">320</span>
					<p class="menu__dish-ingredients">Tôm với sốt lá thyme bơ chanh, với đậu que và sốt xanh</p>
				</li>

				<li class="menu__dish-item">Gà nướng
					<span class="dish-price">310</span>
					<p class="menu__dish-ingredients">Gà nướng hương thảo và rượu cam Pháp, đậu Hà lan tươi xay</p>
				</li>
			</ul>
		</section>

		<section class="menu__course menuSection">
			<hgroup class="menu__course-header">
				<h2>Formaggio &#183; Phô mai</h2>
				<h4>Một sự hoà trộn tinh tế của những hương vị tuyệt vời.<br>
				Hoàn hảo khi dùng kèm với rượu vang quý.</h4>
			</hgroup>

			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/4k/wine_4k_01.jpg"
						media="(min-width: 1921px)">
					<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/hd/wine_1920_01.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/tablet/wine_1024_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory');?>/images/photos/mobile/wine_480_01.jpg"
						alt="A glass of white wine illuminated by candlelight, Summer Salad in foreground.">
				</picture>
			</figure>

			<ul class="menu__list">
				<li class="menu__dish-item">Dĩa phô mai
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">350</span>
					<p class="menu__dish-ingredients">Phô mai tuyển chọn kèm trái cây, mứt nhà làm và các loại hạt dẻ rang sơ</p>
				</li>
			</ul>
		</section>

		<section class="menu__course menuSection">
			<hgroup class="menu__course-header">
				<h2>Dolce &#183; Tráng miệng</h2>
				<h4>Tinh tế và ngon miệng, kết thúc bữa ăn với một ấn tượng đẹp đẽ lâu dài.</h4>
				<p class="header-caps">MỖI NGÀY ÉMAI CHUẨN BỊ MỚI 3-4 TRONG NHỮNG MÓN SAU:</p>
			</hgroup>

			<figure class="fixed-image mobile-image">
				<picture>
					<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/4k/dessert_panna_4k.jpg"
						media="(min-width: 1921px)">
					<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/hd/panna_1500_01.jpg"
						media="(min-width: 1025px)">
					<source srcset="<?php bloginfo('stylesheet_directory');?>/images/photos/tablet/panna_800_01.jpg"
						media="(min-width: 600px)">
					<img src="<?php bloginfo('stylesheet_directory');?>/images/photos/mobile/panna_480_01.jpg"
						alt="Panna Cotta with Dalat Berries Cooked in Mulled Wine ">
				</picture>
			</figure>

			<ul class="menu__list">
				<li class="menu__dish-item">Sô cô la mứt cam
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">115</span>
					<p class="menu__dish-ingredients">Bánh chocolate mousse kèm mứt cam tươi và rượu cam Pháp</p>
				</li>

				<li class="menu__dish-item">Panna Cotta
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">95</span>
					<p class="menu__dish-ingredients">Kem sữa Ý sốt các loại dâu Dà Lạt nấu với rượu vang đỏ và gia vị kiểu Đức</p>
				</li>

				<li class="menu__dish-item">Budino
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">95</span>
					<p class="menu__dish-ingredients">Kem caramel kiểu Ý với rượu whiskey</p>
				</li>

				<li class="menu__dish-item">Bánh Waffle
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">95</span>
					<p class="menu__dish-ingredients">Bánh kẹp nướng với sốt kem chanh, mứt và kem dâu Đà lạt</p>
				</li>

				<li class="menu__dish-item">Bánh cà rốt nhà émai
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">180</span>
					<p class="menu__dish-ingredients">Dĩa tráng miệng với bánh cà rốt, kẹo hạt walnut, và kem dứa quýt</p>
				</li>

				<li class="menu__dish-item">Dâu tây & bánh phô mai nhà émai
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">180</span>
					<p class="menu__dish-ingredients">Dĩa tráng miệng với dâu tây, bánh phô mai, thạch và kem chanh đào</p>
				</li>

				<li class="menu__dish-item">Kem gelato Ý và kem trái cây:
					<span><img class="icon-vegetarian" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegetarian.png"
							alt="Vegetarian"></span>
					<span class="dish-price">70</span><span> viên</span>
					<p class="menu__dish-ingredients">
						Ạ ti sô
						<span><img class="icon-seasonal" src="<?php bloginfo('stylesheet_directory');?>/images/icon/seasonal.png"
								alt="Seasonal"></span>
						&#183; Trái bơ
						<span><img class="icon-seasonal" src="<?php bloginfo('stylesheet_directory');?>/images/icon/seasonal.png"
								alt="Seasonal"></span>
						&#183; Chanh đào
						&#183; Dâu tằm
						&#183; Hồng
						<span><img class="icon-seasonal" src="<?php bloginfo('stylesheet_directory');?>/images/icon/seasonal.png"
								alt="Seasonal"></span>
						<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png"
								alt="Vegan"></span>
						&#183; Dừa tươi
						<span><img class="icon-vegan" src="<?php bloginfo('stylesheet_directory');?>/images/icon/vegan.png"
								alt="Vegan"></span>
					</p>
				</li>
			</ul>
		</section>
	</div>

	<nav class="menu__select menu__select-bottom">
		<ul>
			<li><a href="https://emaidalat.com/vi/quan-ca-phe/">Quán cà phê</a></li><br>
			<li><a href="https://emaidalat.com/vi/an-sang/">Ăn sáng</a><span>&#183;</span></li>
			<li><a href="https://emaidalat.com/vi/ruou/">Danh sách rượu</a></li>
		</ul>
	</nav>
</main>

<?php get_footer();?>