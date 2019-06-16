import $ from 'jquery';
// refresh the page on resize
var responseSize;
var windowSize = $(window);

if (windowSize.width() < 1280) {
	responseSize = 'small';
} else {
	responseSize = 'large';
}

$(window).resize(function () {
	if ((windowSize.width() < 1280) && (responseSize != 'small')) {
		location.reload();
	} else if ((windowSize.width() >= 1280) && (responseSize != 'large')) {
		location.reload();
	}
});