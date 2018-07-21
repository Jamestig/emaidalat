$(document).ready(function () {
	
	$('ul').hide();

	$("a").click(function () {
		$('ul').slideUp();
		$("a.active").removeClass("active");
		$(this).addClass("active");
		$('.active').next('ul').slideToggle();
	});
});