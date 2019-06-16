import $ from 'jquery';
// contact button to show/hide contact form
$('.contact-form').hide();
$('.closeButton').hide();

$('#openContactForm').on('click', function () {
	if (responseSize === 'small') {
		$('.contact-form').slideToggle();
	} else {
		$('.contact-form').fadeIn();
		$('.closeButton').fadeIn();
	}
});

$('.closeButton').on('click', function () {
	$('.contact-form').fadeOut();
	$('.closeButton').fadeOut();
});

$('input, textarea').focus(function (event) {
	$(event.target).css('background-color', 'white');
	$(event.target).focusout(function (event) {
		$(event.target).css('background-color', 'var(--background-dark)');
	});
});