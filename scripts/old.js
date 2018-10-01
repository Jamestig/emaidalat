document.addEventListener('DOMContentLoaded', function () {

	//FULLSCREEN FUNCTIONALITY

	if (window.matchMedia('(min-width: 1280px)').matches) {

// Fullscreen scroll //

		var divs = jQuery('.scrollSection');
		var dir = 'up'; // wheel scroll direction
		var div = 0; // current div

		jQuery(document.body).on('DOMMouseScroll mousewheel', function (e) {
			if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
				dir = 'down';
			} else {
				dir = 'up';
			}
			// find currently visible div :
			div = -1;
			divs.each(function (i) {
				if (div < 0 && (jQuery(this).offset().top >= jQuery(window).scrollTop())) {
					div = i;
				}
			});
			if (dir == 'up' && div > 0) {
				div--;
			}
			if (dir == 'down' && div < divs.length) {
				div++;
			}
			//console.log(div, dir, divs.length);
			jQuery('html,body').stop().animate({
				scrollTop: divs.eq(div).offset().top
			}, 800);
			return false;
		});

		jQuery(window).resize(function () {
			jQuery('html,body').scrollTop(divs.eq(div).offset().top);
		});

// Accordion

		var accordionHidden = jQuery('.accordionInner');
		var pageLinks = jQuery('.accordion > li > a');
		var menuLinks = jQuery('#inner-restaurant > li > a');
		var current_href = jQuery(location).attr('href');
		var currentPage = jQuery(location).attr('href').split('/')[4];
		var prevLink = jQuery('.accordionInner').prev('a');
		var link_href = prevLink.attr('href');
		var openHeader = jQuery('a[href="' + currentPage + '"]');

		console.log(current_href);
		console.log(currentPage);

		for (x = 0; x < prevLink.length; x++) {
			var findLink = prevLink.eq(x).attr('href');
			var openMenu = jQuery('a[href="' + findLink + '"]').next('ul');
			var openList = openMenu.find('a');
			var menuLinks = current_href.indexOf('menu-');

			if (prevLink.eq(x).attr('href') === currentPage) {
				openMenu.slideDown();
				openList.addClass('scroll');
			}

			if (menuLinks > -1) {
				jQuery('#inner-restaurant').show();
				jQuery('#restaurantLink').addClass('activePage');
			}
		}
		openHeader.addClass('activePage');
	} // End accordion

// MOBILE FUNCTIONALITY

// Burger button

	jQuery('#burger-icon').click(function () {
		jQuery(this).toggleClass('open');
		jQuery('.nav-overlay').fadeToggle();
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
		var windowTop = jQuery(window).scrollTop();

		if (m.matches) {
			portrait = true;
			jQuery("#navbarRose").hide();
			if (windowTop >= 240) {
				jQuery("#navbarLogo").show();
			};
		} else {
			portrait = false;
			jQuery("#navbarLogo").hide();
			if (windowTop >= 240) {
				jQuery("#navbarRose").show();
			};
		};
	});

	// Fixed image ratio change to fit container
	var fixedWidth = jQuery('.fixed-image').width();
	var fixedHeight = jQuery(window).height();
	var fixedRatio = (fixedWidth / 4) - (fixedHeight / 3);

	if (fixedRatio >= 43) {
		jQuery('.fixed-image').addClass('image-43');
	};

	// Responsive header function
	jQuery(window).scroll(function () {
		var windowTop = jQuery(window).scrollTop();

		if (windowTop >= 240 && portrait === true) {
			jQuery("#navbarLogo").fadeIn();
		} else if (windowTop <= 240 && portrait === true) {
			jQuery("#navbarLogo").fadeOut();
		} else if (windowTop >= 240 && portrait === false) {
			jQuery("#navbarRose").fadeIn();
		} else if (windowTop <= 240 && portrait === false) {
			jQuery("#navbarRose").fadeOut();
		};

		if (windowTop <= 240 && portrait === true) {
			jQuery('.navbar').css('background-color', 'rgba(235, 235, 230, 0)');
		} else if (windowTop > 240) {
			jQuery('.navbar').css('background-color', 'rgba(235, 235, 230, 1)');
		} else if (windowTop < 240 && portrait === false) {
			jQuery('.navbar').css('background-color', 'rgba(235, 235, 230, 1)');
		};
	}); // End scroll function

	// Smooth scrolling
	var scrollLink = jQuery('.scroll');
	var currentPage;

	if (currentPage === 'index.html' || currentPage === 'story.html' || currentPage === 'bnb.html') {
		scrollLink.click(function (e) {
			e.preventDefault();
			jQuery('body,html').animate({
				scrollTop: jQuery(this.hash).offset().top
			}, 1000);
		}); // End smooth scrolling function
	};

	// Active link switching and background fading

	if (window.matchMedia('(min-width: 1280px)').matches) {

		var windowHeight = jQuery(window).height();
		var windowHalf = (windowHeight / 2) -50;
		var clientHeight = document.body.clientHeight;
		var pageSections = jQuery('section').length;
		var backgroundFigure = jQuery('.fixed-image');
		var bookButtons = jQuery('.flex-container-room');

		//console.log(pageSections);
		//console.log("window height = " + windowHeight);
		//console.log("client height = " + clientHeight);
		//console.log("home height = " + homeHeight);

		jQuery(backgroundFigure).not( jQuery(backgroundFigure)[ 0 ]).hide();
		jQuery(bookButtons).hide();
		jQuery('.flex-container-room').hide();
		jQuery('.room-button-container').hide();

		jQuery('#rooms-ivy .flex-container-room').click(function(){
			alert('Room Ivy');
		});
		jQuery('#rooms-clara .flex-container-room').click(function(){
			alert('Room Clara');
		});
		jQuery('#rooms-may .flex-container-room').click(function(){
			alert('Room may');
		});
		jQuery('#rooms-lila .flex-container-room').click(function(){
			alert('Room lila');
		});
		jQuery('#rooms-jasmine .flex-container-room').click(function(){
			alert('Room jasmine');
		});

		jQuery(window).scroll(function () {

		var sectionOffset;
		var scrollbarLocation = jQuery(this).scrollTop();

		//console.log("scroll location = " + scrollbarLocation);

			scrollLink.each(function () {

				var sectionOffset = jQuery(this.hash).offset().top -20;

				if (sectionOffset <= scrollbarLocation) {
					jQuery(this).parent().addClass('activeSection');
					jQuery(this).parent().siblings().removeClass('activeSection');
				}
			});

				if (scrollbarLocation > windowHeight + windowHalf) {
					jQuery('.room-button-container').fadeIn();
				} else {
					jQuery('.room-button-container').fadeOut();
					jQuery('.flex-container-room').fadeOut();
				}

				if (scrollbarLocation <= windowHeight / 2) {
					jQuery(backgroundFigure[0]).fadeIn(1000);
					jQuery(backgroundFigure).not( jQuery(backgroundFigure)[0]).fadeOut(2000);
				} else if ( scrollbarLocation > windowHeight / 2 && scrollbarLocation <= windowHeight + (windowHeight / 2) ) {
					jQuery(backgroundFigure[1]).fadeIn(1000);
					jQuery(backgroundFigure).not( jQuery(backgroundFigure)[1]).fadeOut(2000);
				} else if ( scrollbarLocation > windowHeight + windowHalf && scrollbarLocation <= (windowHeight * 2) + windowHalf) {
					jQuery(backgroundFigure[2]).fadeIn(1000);
					jQuery(backgroundFigure).not( jQuery(backgroundFigure)[2]).fadeOut(2000);
					jQuery('#rooms-ivy .flex-container-room').fadeIn();
					jQuery('.flex-container-room').not( jQuery('#rooms-ivy .flex-container-room') ).fadeOut();
				} else if ( scrollbarLocation > (windowHeight * 2) + windowHalf && scrollbarLocation <= (windowHeight * 3) + windowHalf) {
					jQuery(backgroundFigure[3]).fadeIn(1000);
					jQuery(backgroundFigure).not( jQuery(backgroundFigure)[3]).fadeOut(2000);
					jQuery('#rooms-clara .flex-container-room').fadeIn();
					jQuery('.flex-container-room').not( jQuery('#rooms-clara .flex-container-room') ).fadeOut();
					jQuery('#main-home .ribbon-container').fadeIn();
				} else if ( scrollbarLocation > (windowHeight * 3) + windowHalf && scrollbarLocation <= (windowHeight * 4) + windowHalf) {
					jQuery(backgroundFigure[4]).fadeIn(1000);
					jQuery(backgroundFigure).not( jQuery(backgroundFigure)[4]).fadeOut(2000);
					jQuery('#rooms-may .flex-container-room').fadeIn();
					jQuery('.flex-container-room').not( jQuery('#rooms-may .flex-container-room') ).fadeOut();
					jQuery('#main-home .ribbon-container').fadeOut(400);
				} else if ( scrollbarLocation > (windowHeight * 4) + windowHalf && scrollbarLocation <= (windowHeight * 5) + windowHalf) {
					jQuery(backgroundFigure[5]).fadeIn(1000);
					jQuery(backgroundFigure).not( jQuery(backgroundFigure)[5]).fadeOut(2000);
					jQuery('#rooms-lila .flex-container-room').fadeIn();
					jQuery('.flex-container-room').not( jQuery('#rooms-lila .flex-container-room') ).fadeOut();
				} else if ( scrollbarLocation > (windowHeight * 5) + windowHalf && scrollbarLocation <= (windowHeight * 6) + windowHalf) {
					jQuery(backgroundFigure[6]).fadeIn(1000);
					jQuery(backgroundFigure).not( jQuery(backgroundFigure)[6]).fadeOut(2000);
					jQuery('#rooms-jasmine .flex-container-room').fadeIn();
					jQuery('.flex-container-room').not( jQuery('#rooms-jasmine .flex-container-room') ).fadeOut();
				};

		}); // End scroll function
	}; // Match query if statement

});
