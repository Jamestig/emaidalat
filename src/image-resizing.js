import $ from 'jquery';
// Fixed image ratio change to fit container
function getRatio() {
	var fixedWidth = $('.fixed-image').width();
	var fixedHeight = $(window).height();
	var fixedRatio = (fixedWidth / 4) - (fixedHeight / 3);

	if (fixedRatio >= 43) {
		$('.fixed-image').addClass('image--43');
	}
}
getRatio();