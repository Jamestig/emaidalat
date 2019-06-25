document.addEventListener('DOMContentLoaded', function () {

	// MOBILE FUNCTIONALITY

	// Burger button

	jQuery('#burger-icon').click(function () {
		jQuery(this).toggleClass('open');
		jQuery('.nav-overlay').fadeToggle();
	});

	// Navbar logo image change on orientation
	var portrait;
	var mql = window.matchMedia("(orientation: portrait)");

	// Test for sceen in portrait orientation
	if (mql.matches) {
		portrait = true;
	} else {
		portrait = false;
	}

	// Image swapping on orientation
	mql.addListener(function (m) {
		var windowTop = jQuery(window).scrollTop();

		if (m.matches) {
			portrait = true;
			jQuery("#navbarRose").hide();
			if (windowTop >= 240) {
				jQuery("#navbarLogo").show();
			}
		} else {
			portrait = false;
			jQuery("#navbarLogo").hide();
			if (windowTop >= 240) {
				jQuery("#navbarRose").show();
			}
		}
	});

	/* Fixed image ratio change to fit container
	function getRatio() {
		var fixedWidth = jQuery(window).width();
		var fixedHeight = jQuery(window).height();
		var fixedRatio = (fixedWidth / 4) - (fixedHeight / 3);
		var fixedRatio2 = (fixedWidth / fixedHeight);

		console.log(fixedWidth);
		console.log(fixedHeight);
		console.log(fixedRatio);

		if (fixedRatio2 > 1.8) {
			jQuery('.fixed-image').addClass('image--43');
			console.log(fixedRatio2);
		}
	}
	getRatio();
	*/

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
		}

		if (windowTop <= 240 && portrait === true) {
			jQuery('.navbar').css('background-color', 'rgba(235, 235, 230, 0)');
		} else if (windowTop > 240) {
			jQuery('.navbar').css('background-color', 'rgba(235, 235, 230, 1)');
		} else if (windowTop < 240 && portrait === false) {
			jQuery('.navbar').css('background-color', 'rgba(235, 235, 230, 1)');
		}
	}); // End responsive header function

	// Refresh page on resize

	var responseSize;
	var windowSize = jQuery(window);

	if (windowSize.width() < 1280) {
		responseSize = 'small';
	} else {
		responseSize = 'large';
	}

	jQuery(window).resize(function () {
		if ((windowSize.width() < 1280) && (responseSize != 'small')) {
			location.reload();
		} else if ((windowSize.width() >= 1280) && (responseSize != 'large')) {
			location.reload();
		}
	});

	// Language Detection
	var currentLang = jQuery('html').attr('lang');

	if (currentLang === 'vi') {
		jQuery('.accordion a, .double-header > h2').css('font-family', 'EB Garamond');
		jQuery('.link-button-vi > a').css('padding', '.5em 2.1em');
	}

	// Contact Form

	var contactForm = jQuery('.wpcf7');
	var openContactForm = jQuery('.contact-form-button a');

	contactForm.hide();

	openContactForm.on('click', function() {
		contactForm.slideToggle();
	});
	
	jQuery('.wpcf7-text, .wpcf7-textarea').focus(function (event) {
		jQuery(event.target).css('background-color', 'white');
		jQuery(event.target).focusout(function (event) {
			jQuery(event.target).css('background-color', 'var(--background-dark)');
		});
	});

	/*
	jQuery('.contact-form').hide();
	jQuery('.closeButton').hide();

	jQuery('#openContactForm').on('click', function () {
		if (responseSize === 'small') {
			jQuery('.contact-form').slideToggle();
		} else {
			jQuery('.contact-form').fadeIn();
			jQuery('.closeButton').fadeIn();
		}
	});

	jQuery('.closeButton').on('click', function () {
		jQuery('.contact-form').fadeOut();
		jQuery('.closeButton').fadeOut();
	});

	*/

	// FULLSCREEN FUNCTIONALITY

	if (window.matchMedia('(min-width: 1280px)').matches) {

		var current_href = jQuery(location).attr('href');

		if (currentLang === 'vi') {
			jQuery('.rooms-lila .room-info').css('font-size', '.9em');
			jQuery('.rooms-jasmine .room-info').css('font-size', '.9em');
		}

		// Page name function

		var pageName = function () {
			if (window.location.href.indexOf("rooms") > -1 || window.location.href.indexOf("homestay") > -1) {
				return 'rooms';
			} else if (window.location.href.indexOf("story") > -1 || window.location.href.indexOf("chuyen") > -1) {
				return 'story';
			} else if (window.location.href.indexOf("reservations") > -1 || window.location.href.indexOf("dat") > -1) {
				return 'reservations';
			} else if (window.location.href.indexOf("restaurant") > -1 || window.location.href.indexOf("hang") > -1) {
				return 'restaurant';
			} else if (window.location.href.indexOf("drinks") > -1 || window.location.href.indexOf("quan") > -1) {
				return 'drinks';
			} else if (window.location.href.indexOf("breakfast") > -1 || window.location.href.indexOf("sang") > -1) {
				return 'breakfast';
			} else if (window.location.href.indexOf("wine") > -1 || window.location.href.indexOf("ruou") > -1) {
				return 'wine';
			} else if (window.location.href.indexOf("contact") > -1 || window.location.href.indexOf("lien") > -1) {
				return 'contact';
			} else {
				return 'home';
			}
		}; // End page name function

		// Accordion

		var openAccordion = function () {

			// Accordion open
			if (pageName() === 'home') {
				// jQuery('.link-home > ul').show();
				jQuery('.link-home > a').addClass('activePage');
			} else if (pageName() === 'story') {
				jQuery('.link-story > a').addClass('activePage');
			} else if (pageName() === 'rooms') {
				jQuery('.link-bnb > ul').show();
				jQuery('.link-bnb > a').addClass('activePage');
			} else if (pageName() === 'reservations') {
				jQuery('.link-reservations > a').addClass('activePage');
			} else if (pageName() === 'restaurant') {
				jQuery('.link-menu > ul').show();
				jQuery('.link-menu > a').addClass('activePage');
				jQuery('.link-restaurant > a').addClass('activePage');
			} else if (pageName() === 'drinks') {
				jQuery('.link-menu > ul').show();
				jQuery('.link-menu > a').addClass('activePage');
				jQuery('.link-drinks > a').addClass('activePage');
			} else if (pageName() === 'breakfast') {
				jQuery('.link-menu > ul').show();
				jQuery('.link-menu > a').addClass('activePage');
				jQuery('.link-breakfast > a').addClass('activePage');
			} else if (pageName() === 'wine') {
				jQuery('.link-menu > ul').show();
				jQuery('.link-menu > a').addClass('activePage');
				jQuery('.link-wine > a').addClass('activePage');
			} else if (pageName() === 'contact') {
				jQuery('.link-contact > a').addClass('activePage');
			}
		}; // End accordion function
		openAccordion();

		// Home fullpage.js

		if (pageName() === 'home') {

			var homeLinks = jQuery('.link-home > ul > li');

			jQuery('.home-booking .content').removeClass('content-white');
			jQuery('.home-booking .link-button-light').addClass('link-button');
			jQuery('.home-booking .link-button-light').removeClass('link-button-light');

			function initialization() {
				var myFullpage = new fullpage('#fullpage', {
					fadingEffect: false,
					licenseKey: 'A3290806-C2474DD7-B7A3D34F-92B6E4CD',
					fadingEffectKey: 'ZW1haWRhbGF0LmNvbV9LQ2JabUZrYVc1blJXWm1aV04wcGp2',
					anchors: ['home-cuisine', 'home-cafe', 'home-bnb', 'home-atmosphere', 'home-booking'],
					lazyLoad: true,
					verticalCentered: false,

					onLeave: function (origin, destination, direction) {
						var leavingSection = this;

						// Highlight menu links and change backgrounds
						if (destination.index == 0) {
							jQuery('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/duck_1920_01.jpg)');
							jQuery(homeLinks[0]).addClass('activeSection');
							jQuery(homeLinks).not(homeLinks[0]).removeClass('activeSection');
						} else if (destination.index == 1) {
							jQuery('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/brioche_1920.jpg)');
							jQuery(homeLinks).not(homeLinks[1]).removeClass('activeSection');
							jQuery(homeLinks[1]).addClass('activeSection');
						} else if (destination.index == 2) {
							jQuery('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/room_1920.jpg)');
							jQuery(homeLinks).not(homeLinks[2]).removeClass('activeSection');
							jQuery(homeLinks[2]).addClass('activeSection');
						} else if (destination.index == 3) {
							jQuery('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/table_1920_01.jpg)');
							jQuery(homeLinks).not(homeLinks[3]).removeClass('activeSection');
							jQuery(homeLinks[3]).addClass('activeSection');
						} else if (destination.index == 4) {
							jQuery('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/flower_1920_01.jpg)');
							jQuery(homeLinks).not(homeLinks[4]).removeClass('activeSection');
							jQuery(homeLinks[4]).addClass('activeSection');
						}
					},
					afterRender: function(){
						var firstSection = fullpage_api.getActiveSection();
						if (firstSection.index === 0) {
							jQuery('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/duck_1920_01.jpg)');
							jQuery(homeLinks[0]).addClass('activeSection');
						};
					}
				});
			}

			//fullPage.js initialization
			initialization();

			fullpage_api.setScrollingSpeed(1500);
		}

		jQuery('.moveSectionDown').each(function () {
			jQuery(this).on('click', function () {
				fullpage_api.moveSectionDown();
			});
		});

		// BNB fullpage.js

		if (pageName() === 'rooms') {

			var bnbLinks = jQuery('.link-bnb > ul > li');

			function initialization() {
				var myFullpage = new fullpage('#fullpage', {
					fadingEffect: true,
					licenseKey: 'A3290806-C2474DD7-B7A3D34F-92B6E4CD',
					fadingEffectKey: 'ZW1haWRhbGF0LmNvbV9LQ2JabUZrYVc1blJXWm1aV04wcGp2',
					anchors: ['bnb-intro', 'rooms-ivy', 'rooms-clara', 'rooms-may', 'rooms-lila', 'rooms-jasmine'],
					lazyLoad: true,
					controlArrows: true,
					slidesNavigation: true,
					verticalCentered: false,

					onLeave: function (origin, destination, direction) {
						var leavingSection = this;

						if (origin.index == 0 && direction == 'down') {
							jQuery('.room-button-container').css('opacity', 1);
						} else if (origin.index == 1 && direction == 'up') {
							jQuery('.room-button-container').css('opacity', 0);
						}

						// Highlight menu links
						if (destination.index == 1) {
							jQuery(bnbLinks[0]).addClass('activeSection');
							jQuery(bnbLinks).not(bnbLinks[0]).removeClass('activeSection');
						} else if (destination.index == 2) {
							jQuery(bnbLinks).not(bnbLinks[1]).removeClass('activeSection');
							jQuery(bnbLinks[1]).addClass('activeSection');
						} else if (destination.index == 3) {
							jQuery(bnbLinks).not(bnbLinks[2]).removeClass('activeSection');
							jQuery(bnbLinks[2]).addClass('activeSection');
						} else if (destination.index == 4) {
							jQuery(bnbLinks).not(bnbLinks[3]).removeClass('activeSection');
							jQuery(bnbLinks[3]).addClass('activeSection');
						} else if (destination.index == 5) {
							jQuery(bnbLinks).not(bnbLinks[4]).removeClass('activeSection');
							jQuery(bnbLinks[4]).addClass('activeSection');
						}

						if (destination.index == 1) {
							jQuery('#moveSectionUp').css('opacity', 0);
						} else {
							jQuery('#moveSectionUp').css('opacity', 1);
						}
						
						if (destination.index == 5) {
							jQuery('.moveSectionDown').css('opacity', 0);
						} else {
							jQuery('.moveSectionDown').css('opacity', 1);
						}
					}
				});
			}

			//fullPage.js initialization
			initialization();

			fullpage_api.setScrollingSpeed(1500);

			document.querySelector('#moveSectionUp').addEventListener('click', function (e) {
				e.preventDefault();
				fullpage_api.moveSectionUp();
			});
		}

		// Menu page scrolling

		if (pageName() === 'restaurant' || pageName() === 'drinks') {

			jQuery.fn.isInViewport = function () {
				var elementTop = jQuery(this).offset().top;
				// console.log("element top " + elementTop);
				var elementBottom = elementTop + jQuery(this).outerHeight();
				// console.log("element bottom " + elementBottom);

				var viewportTop = jQuery(window).scrollTop();
				// console.log("viewport top " + viewportTop);
				var viewportBottom = viewportTop + jQuery(window).height() / 2.5;
				// console.log("viewport bottom " + viewportBottom);

				return elementBottom > viewportTop && elementTop < viewportBottom;
			};

			jQuery(window).on('resize scroll', function () {
				jQuery('.menuSection').each(function () {
					var activeColor = jQuery(this).attr('id');
					if (jQuery(this).isInViewport()) {
						jQuery(this).find('.fixed-image').css('opacity', 1);
					} else {
						jQuery(this).find('.fixed-image').css('opacity', 0);
					}
				});
			});
		};

	} // End match query

}); // End document load function