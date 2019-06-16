import $ from 'jquery';
// Navbar logo image change on orientation
var portrait;
var mql = window.matchMedia("(orientation: portrait)");

// Test for sceen in portrait orientation
if (mql.matches) {
	portrait = true;
} else {
	portrait = false;
}

// Image swapping on orientation
mql.addListener(function (m) {
	var windowTop = $(window).scrollTop();

	if (m.matches) {
		portrait = true;
		$("#navbarRose").hide();
		if (windowTop >= 240) {
			$("#navbarLogo").show();
		}
	} else {
		portrait = false;
		$("#navbarLogo").hide();
		if (windowTop >= 240) {
			$("#navbarRose").show();
		}
	}
});