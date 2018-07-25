$(document).ready(function () {

	// Burger button
	$('#burger-icon').click(function () {
		$(this).toggleClass('open');
		$('.nav-overlay').fadeToggle();
	});

	// Navbar logo image change on orientation
	var portrait
	var mql = window.matchMedia("(orientation: portrait)");

	// Test for sceen in portrait orientation
	if (mql.matches) {
		portrait = true;
	} else {
		portrait = false;
	};

	// Image swapping on orientation
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

	// Fixed image ratio change to fit container
	var fixedWidth = $('.fixed-image').width();
	var fixedHeight = $(window).height();
	var fixedRatio = (fixedWidth / 4) - (fixedHeight / 3);

	if (fixedRatio >= 43) {
		$('.fixed-image').addClass('image-43');
	};

	// Responsive header function
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

		if (windowTop <= 240 && portrait === true) {
			$('.navbar').css('background-color', 'rgba(235, 235, 230, 0)');
		} else if (windowTop > 240) {
			$('.navbar').css('background-color', 'rgba(235, 235, 230, 1)');
		} else if (windowTop < 240 && portrait === false) {
			$('.navbar').css('background-color', 'rgba(235, 235, 230, 1)');
		};
	}); // End scroll function

	// Smooth scrolling
	var scrollLink = $('.scroll');
	var thisPage = $(location).attr('href');
	var currentPage;

	if (currentPage === 'index.html' || currentPage === 'story.html' || currentPage === 'bnb.html') {
		scrollLink.click(function (e) {
			e.preventDefault();
			$('body,html').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		}); // End smooth scrolling function
	};


	// Accordion

	var accordionHidden = $('.accordionInner');
	var pageLinks = $('.accordion > li > a');
	var menuLinks = $('#inner-restaurant > li > a');
	var current_href = $(location).attr('href');
	var currentPage = $(location).attr('href').split('/')[3];
	var prevLink = $('.accordionInner').prev('a');
	var link_href = prevLink.attr('href');
	var openHeader = $('a[href="' + currentPage + '"]');

	console.log(currentPage);
	//console.log(accordionHidden);
	//console.log(pageLinks);
	//console.log(prevLink);
	//console.log(link_href);

	if (window.matchMedia('(min-width: 1280px)').matches) {

		for (x = 0; x < prevLink.length; x++) {
			var findLink = prevLink.eq(x).attr('href');
			var openMenu = $('a[href="' + findLink + '"]').next('ul');
			var openList = openMenu.find('a');
			var menuLinks = current_href.indexOf('menu-');

			if (prevLink.eq(x).attr('href') === currentPage) {
				openMenu.slideDown();
				openList.addClass('scroll');
			}

			if (menuLinks > -1) {
				$('#inner-restaurant').show();
				$('#restaurantLink').addClass('activePage');
			}
		}

		openHeader.addClass('activePage');
	}

	// Active link switching and background fading
	var sectionOffset;

	$(window).scroll(function () {

		if (window.matchMedia('(min-width: 1280px)').matches) {

			var scrollbarLocation = $(this).scrollTop();
			var windowHeight = $(window).height();
			var clientHeight = document.body.clientHeight - 300;
			//var scrollSections = $('main > section').length();
			var pageSection = "sectionOne";

			scrollLink.each(function () {

				var sectionOffset = $(this.hash).offset().top - 20;

				if (sectionOffset <= scrollbarLocation) {
					$(this).parent().addClass('activeSection');
					$(this).parent().siblings().removeClass('activeSection');
				}
				/*
								if (scrollbarLocation <= homeHeight) {
									$('#homeRestaurantBG').fadeIn(1000);
									$('#homeCafeBG').fadeOut(1000);
									pageSection = "sectionOne";
								} else if (scrollbarLocation > homeHeight && scrollbarLocation <= homeHeight * 2) {
									$('#homeCafeBG').fadeIn(1000);
									$('#homeRestaurantBG').fadeOut(1000);
									pageSection = "sectionTwo";
								} else if (scrollbarLocation > homeHeight * 2 && scrollbarLocation <= homeHeight * 3) {
									pageSection = "sectionThree";
								} else if (scrollbarLocation > homeHeight * 3 && scrollbarLocation <= homeHeight * 4) {
									pageSection = "sectionFour";
								} else if (scrollbarLocation > homeHeight * 4 && scrollbarLocation <= homeHeight * 5) {
									pageSection = "sectionFive";
								}
				*/
			});


			//console.log("scroll location = " + scrollbarLocation);
			//console.log("window height = " + windowHeight);
			//console.log("client height = " + clientHeight);
			//console.log("home height = " + homeHeight);
			//console.log(pageSection);
		} // Match query if statement
	}); // End scroll function

});
