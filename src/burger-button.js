import $ from 'jquery';
// burger button opens/closes mobile navigation
$('#burger-icon').click(function () {
	$(this).toggleClass('open');
	$('.nav-overlay').fadeToggle();
});