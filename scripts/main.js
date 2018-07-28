$(document).ready(function () {

	// Accordion

	if (window.matchMedia('(min-width: 1280px)').matches) {

		var accordionHidden = $('.accordionInner');
		var pageLinks = $('.accordion > li > a');
		var menuLinks = $('#inner-restaurant > li > a');
		var current_href = $(location).attr('href');
		var currentPage = $(location).attr('href').split('/')[3];
		var prevLink = $('.accordionInner').prev('a');
		var link_href = prevLink.attr('href');
		var openHeader = $('a[href="' + currentPage + '"]');

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
	} // End accordion

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
	var currentPage;

	if (currentPage === 'index.html' || currentPage === 'story.html' || currentPage === 'bnb.html') {
		scrollLink.click(function (e) {
			e.preventDefault();
			$('body,html').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		}); // End smooth scrolling function
	};

	// Active link switching and background fading

	if (window.matchMedia('(min-width: 1280px)').matches) {
		
		var windowHeight = $(window).height();
		var windowHalf = (windowHeight / 2) -50;
		var clientHeight = document.body.clientHeight;
		var pageSections = $('section').length;
		var backgroundFigure = $('.fixed-image');
		
		//console.log(pageSections);
		//console.log("window height = " + windowHeight);
		//console.log("client height = " + clientHeight);
		//console.log("home height = " + homeHeight);
		
		$(backgroundFigure).not( $(backgroundFigure)[ 0 ]).hide();

		$(window).scroll(function () {
			
		var sectionOffset;
		var scrollbarLocation = $(this).scrollTop();

		console.log("scroll location = " + scrollbarLocation);

			scrollLink.each(function () {

				var sectionOffset = $(this.hash).offset().top -20;

				if (sectionOffset <= scrollbarLocation) {
					$(this).parent().addClass('activeSection');
					$(this).parent().siblings().removeClass('activeSection');
				}
				
				if (scrollbarLocation <= windowHeight / 2) {
					console.log('section 1');
					$(backgroundFigure[0]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[0]).fadeOut(2000);
				} else if ( scrollbarLocation > windowHeight / 2 && scrollbarLocation <= windowHeight + (windowHeight / 2) ) {
					$(backgroundFigure[1]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[1]).fadeOut(2000);
					console.log('section 2');
				} else if ( scrollbarLocation > windowHeight + windowHalf && scrollbarLocation <= (windowHeight * 2) + windowHalf) {
					$(backgroundFigure[2]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[2]).fadeOut(2000);
					console.log('section 3');
				} else if ( scrollbarLocation > (windowHeight * 2) + windowHalf && scrollbarLocation <= (windowHeight * 3) + windowHalf) {
					$(backgroundFigure[3]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[3]).fadeOut(2000);
					console.log('section 4');
				} else if ( scrollbarLocation > (windowHeight * 3) + windowHalf && scrollbarLocation <= (windowHeight * 4) + windowHalf) {
					$(backgroundFigure[4]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[4]).fadeOut(2000);
					console.log('section 5');
				} else if ( scrollbarLocation > (windowHeight * 4) + windowHalf && scrollbarLocation <= (windowHeight * 5) + windowHalf) {
					console.log('section 6');
					$(backgroundFigure[5]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[5]).fadeOut(2000);
				} else if ( scrollbarLocation > (windowHeight * 5) + windowHalf && scrollbarLocation <= (windowHeight * 6) + windowHalf) {
					console.log('section 7');
					$(backgroundFigure[6]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[6]).fadeOut(2000);
				};

			});

		}) // Match query if statement
	}; // End scroll function

});
