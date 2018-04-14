$(document).ready(function () {

	var scrollLink = $('.scroll');

	// Smooth scrolling
	scrollLink.click(function (e) {
		e.preventDefault();
		$('body,html').animate({
			scrollTop: $(this.hash).offset().top
		}, 1000);
	});

	// Active link switching and background fading
	$(window).scroll(function () {

		var scrollbarLocation = $(this).scrollTop();
		var windowHeight = $(window).height();
		var clientHeight = document.body.clientHeight / 5;
		var pageSection = "sectionOne";

		scrollLink.each(function () {

			var sectionOffset = $(this.hash).offset().top - 20;

			if (sectionOffset <= scrollbarLocation) {
				$(this).parent().addClass('active');
				$(this).parent().siblings().removeClass('active');
			}

			if (scrollbarLocation <= clientHeight) {
				$('#home-background').css("background-image", "url(/images/flowers/rose.jpg)");
				pageSection = "sectionOne";
			} else if (scrollbarLocation > clientHeight && scrollbarLocation <= clientHeight * 2) {
				$('#home-background').css("background-image", "url(/images/flowers/tulip.jpg)");
				pageSection = "sectionTwo";
			} else if (scrollbarLocation > clientHeight * 2 && scrollbarLocation <= clientHeight * 3) {
				$('#home-background').css("background-image", "url(/images/flowers/orchid.jpg)");
				pageSection = "sectionThree";
			} else if (scrollbarLocation > clientHeight * 3 && scrollbarLocation <= clientHeight * 4) {
				$('#home-background').css("background-image", "url(/images/flowers/daisy.jpg)");
				pageSection = "sectionFour";
			} else if (scrollbarLocation > clientHeight * 4 && scrollbarLocation <= clientHeight * 5) {
				$('#home-background').css("background-image", "url(/images/flowers/venus.jpg)");
				pageSection = "sectionFive";
			}
		});


		console.log("scroll location = " + scrollbarLocation);
		console.log("window height = " + windowHeight);
		console.log("client height = " + clientHeight);
		console.log(pageSection);

	});

});

// FUTURE get page name and create section names by dividing client height by amount of sections on page
