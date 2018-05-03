$(document).ready(function () {

	var pageTitle = $('title').text();

	// Nav toggle button
	$('.accordionToggle').on('click', event => {
		$(event.currentTarget).next('.accordion-content').slideToggle();
	});

	// Smooth scrolling

	var scrollLink = $('.scroll');

	scrollLink.click(function (e) {
		e.preventDefault();
		$('body,html').animate({
			scrollTop: $(this.hash).offset().top
		}, 1000);
	});

	// Active link switching
	$(window).scroll(function () {

		var scrollbarLocation = $(this).scrollTop();
		var windowHeight = $(window).height();
		var clientHeight = document.body.clientHeight / 3;

		/*
				scrollLink.each(function () {

					var sectionOffset = $(this.hash).offset().top - 20;

					if (sectionOffset <= scrollbarLocation) {
						$(this).parent().addClass('active');
						$(this).parent().siblings().removeClass('active');
					};
				});
		*/

		// Background fading
		var pageSection = "sectionOne";

		if (scrollbarLocation <= clientHeight * 2) {
			$('#home-background').css("background-image", "url(/images/flowers/daisy.jpg)");
			pageSection = "sectionOne";
		} else if (scrollbarLocation > clientHeight * 2 && scrollbarLocation <= clientHeight * 3 + 10) {
			$('#home-background').css("background-image", "url(/images/flowers/rose.jpg)");
			pageSection = "sectionTwo";
		} else if (scrollbarLocation > clientHeight * 4 && scrollbarLocation <= clientHeight * 5 + 10) {
			$('#home-background').css("background-image", "url(/images/flowers/orchid.jpg)");
			pageSection = "sectionThree";
		}


		console.log("scroll location = " + scrollbarLocation);
		console.log("window height = " + windowHeight);
		console.log("client height = " + clientHeight);
		console.log(pageSection);

	});

});

// FUTURE get page name and create section names by dividing client height by amount of sections on page
