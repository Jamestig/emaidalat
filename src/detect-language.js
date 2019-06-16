import $ from 'jquery';
// change the language attribute of the html tag
var currentLang = $('html').attr('lang');

if (currentLang === 'vi') {
	$('.accordion a, .double-header > h2').css('font-family', 'EB Garamond');
	$('.link-button-vi > a').css('padding', '.5em 2.1em');
}