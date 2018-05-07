$(document).ready(function () {

	$('#burger-icon').click(function () {
		$(this).toggleClass('open');
		$('.nav-overlay').fadeToggle();
	});

	$(window).scroll(function () {
		var windowTop = $(window).scrollTop();
		if (windowTop >= 240) {
			$("#navbarLogo").fadeIn();
			$('.navbar').css('background-color', 'rgba(246, 247, 245, 1)');
		} else {
			$("#navbarLogo").fadeOut();
			$('.navbar').css('background-color', 'rgba(246, 247, 245, 0)');
		};
	});

});
