	<footer class="mobile-footer vertical-center">
		<header>
			<h2><a href="https://emaidalat.com">émai dalat</a></h2>
		</header>

		<div id="mobile-footer-widget-area">
			<?php if ( is_active_sidebar( 'mobile-footer-widget' ) ) : ?>
			<div>
				<?php dynamic_sidebar ('mobile-footer-widget'); ?>
			</div>
			<?php endif; ?>
		</div>

		<ul class="sm-list">
			<li><a href="https://www.facebook.com/emaidalat/" target="_blank" class="fa fa-facebook-square"></a></li>
			<li><a href="https://www.instagram.com/emaidalat/" target="_blank" class="fa fa-instagram"></a></li>
			<li><a href="mailto:family@emaidalat.com" class="fa fa-envelope"></a></li>
		</ul>

		<address>
			<a class="footer-address" href="https://www.google.com/maps/place/1+Thi+S%C3%A1ch,+Ph%C6%B0%E1%BB%9Dng+6,+Tp.+%C4%90%C3%A0+L%E1%BA%A1t,+L%C3%A2m+%C4%90%E1%BB%93ng,+Vietnam/@11.9468468,108.4303808,17z/data=!3m1!4b1!4m5!3m4!1s0x3171132bcb6e21e1:0x45649b7517deb5b!8m2!3d11.9468416!4d108.4325695">1 Thi Sach, Da lat, Vietnam</a>
			<a class="footer-email" href="mailto:family@emaidalat.com">family@emaidalat.com</a>
			<span>&vert;</span>
			<a class="footer-phone" href="tel: +842633839001">+84 2633 839 001</a>
		</address>
	</footer

	<?php wp_footer(); ?>

</body>
</html>
