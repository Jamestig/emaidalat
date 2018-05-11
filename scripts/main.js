$(document).ready(function () {

	// Burger button
	$('#burger-icon').click(function () {
		$(this).toggleClass('open');
		$('.nav-overlay').fadeToggle();
	});

	// Navbar logo image change on orientation
	var portrait
	var mql = window.matchMedia("(orientation: portrait)");

	if (mql.matches) {
		portrait = true;
	} else {
		portrait = false;
	};

	mql.addListener(function (m) {
		var windowTop = $(window).scrollTop();
		
		if (m.matches) {
			portrait = true;
			$("#navbarRose").hide();
			if (windowTop >= 240) {
				$("#navbarLogo").show();
			};
		} else {
			portrait = false;
			$("#navbarLogo").hide();
			if (windowTop >= 240) {
				$("#navbarRose").show();
			};
		};
	});

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
		};
		
		if (windowTop >= 240) {
			$('.navbar').css('background-color', 'rgba(246, 247, 245, 1)');
		} else {
			$('.navbar').css('background-color', 'rgba(246, 247, 245, 0)');
		};
	});


});
