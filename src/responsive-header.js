import $ from 'jquery';
// Responsive header function
$(window).scroll(function () {
	var windowTop = $(window).scrollTop();

	if (windowTop >= 240 && portrait === true) {
		$("#navbarLogo").fadeIn();
	} else if (windowTop <= 240 && portrait === true) {
		$("#navbarLogo").fadeOut();
	} else if (windowTop >= 240 && portrait === false) {
		$("#navbarRose").fadeIn();
	} else if (windowTop <= 240 && portrait === false) {
		$("#navbarRose").fadeOut();
	}

	if (windowTop <= 240 && portrait === true) {
		$('.navbar').css('background-color', 'rgba(235, 235, 230, 0)');
	} else if (windowTop > 240) {
		$('.navbar').css('background-color', 'rgba(235, 235, 230, 1)');
	} else if (windowTop < 240 && portrait === false) {
		$('.navbar').css('background-color', 'rgba(235, 235, 230, 1)');
	}
});