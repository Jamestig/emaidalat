import $ from 'jquery';
// FULLSCREEN FUNCTIONALITY

if (window.matchMedia('(min-width: 1280px)').matches) {

	var current_href = $(location).attr('href');

	if (currentLang === 'vi') {
		$('.rooms-lila .room-info').css('font-size', '.9em');
		$('.rooms-jasmine .room-info').css('font-size', '.9em');
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
			// $('.link-home > ul').show();
			$('.link-home > a').addClass('activePage');
		} else if (pageName() === 'story') {
			$('.link-story > a').addClass('activePage');
		} else if (pageName() === 'rooms') {
			$('.link-bnb > ul').show();
			$('.link-bnb > a').addClass('activePage');
		} else if (pageName() === 'reservations') {
			$('.link-reservations > a').addClass('activePage');
		} else if (pageName() === 'restaurant') {
			$('.link-menu > ul').show();
			$('.link-menu > a').addClass('activePage');
			$('.link-restaurant > a').addClass('activePage');
		} else if (pageName() === 'drinks') {
			$('.link-menu > ul').show();
			$('.link-menu > a').addClass('activePage');
			$('.link-drinks > a').addClass('activePage');
		} else if (pageName() === 'breakfast') {
			$('.link-menu > ul').show();
			$('.link-menu > a').addClass('activePage');
			$('.link-breakfast > a').addClass('activePage');
		} else if (pageName() === 'wine') {
			$('.link-menu > ul').show();
			$('.link-menu > a').addClass('activePage');
			$('.link-wine > a').addClass('activePage');
		} else if (pageName() === 'contact') {
			$('.link-contact > a').addClass('activePage');
		}
	}; // End accordion function
	openAccordion();

	// Home fullpage.js

	if (pageName() === 'home') {

		var homeLinks = $('.link-home > ul > li');

		$('.home-booking .content').removeClass('content-white');
		$('.home-booking .link-button-light').addClass('link-button');
		$('.home-booking .link-button-light').removeClass('link-button-light');

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
						$('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/duck_1920_01.jpg)');
						$(homeLinks[0]).addClass('activeSection');
						$(homeLinks).not(homeLinks[0]).removeClass('activeSection');
					} else if (destination.index == 1) {
						$('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/brioche_1920.jpg)');
						$(homeLinks).not(homeLinks[1]).removeClass('activeSection');
						$(homeLinks[1]).addClass('activeSection');
					} else if (destination.index == 2) {
						$('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/room_1920.jpg)');
						$(homeLinks).not(homeLinks[2]).removeClass('activeSection');
						$(homeLinks[2]).addClass('activeSection');
					} else if (destination.index == 3) {
						$('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/table_1920_01.jpg)');
						$(homeLinks).not(homeLinks[3]).removeClass('activeSection');
						$(homeLinks[3]).addClass('activeSection');
					} else if (destination.index == 4) {
						$('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/flower_1920_01.jpg)');
						$(homeLinks).not(homeLinks[4]).removeClass('activeSection');
						$(homeLinks[4]).addClass('activeSection');
					}
				},
				afterRender: function () {
					var firstSection = fullpage_api.getActiveSection();
					if (firstSection.index === 0) {
						$('.home-background').css('background-image', 'url(https://emaidalat.com/wp-content/uploads/2018/11/duck_1920_01.jpg)');
						$(homeLinks[0]).addClass('activeSection');
					};
				}
			});
		}

		//fullPage.js initialization
		initialization();

		fullpage_api.setScrollingSpeed(1500);
	}

	$('.moveSectionDown').each(function () {
		$(this).on('click', function () {
			fullpage_api.moveSectionDown();
		});
	});

	// BNB fullpage.js

	if (pageName() === 'rooms') {

		var bnbLinks = $('.link-bnb > ul > li');

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
						$('.room-button-container').css('opacity', 1);
					} else if (origin.index == 1 && direction == 'up') {
						$('.room-button-container').css('opacity', 0);
					}

					// Highlight menu links
					if (destination.index == 1) {
						$(bnbLinks[0]).addClass('activeSection');
						$(bnbLinks).not(bnbLinks[0]).removeClass('activeSection');
					} else if (destination.index == 2) {
						$(bnbLinks).not(bnbLinks[1]).removeClass('activeSection');
						$(bnbLinks[1]).addClass('activeSection');
					} else if (destination.index == 3) {
						$(bnbLinks).not(bnbLinks[2]).removeClass('activeSection');
						$(bnbLinks[2]).addClass('activeSection');
					} else if (destination.index == 4) {
						$(bnbLinks).not(bnbLinks[3]).removeClass('activeSection');
						$(bnbLinks[3]).addClass('activeSection');
					} else if (destination.index == 5) {
						$(bnbLinks).not(bnbLinks[4]).removeClass('activeSection');
						$(bnbLinks[4]).addClass('activeSection');
					}

					if (destination.index == 1) {
						$('#moveSectionUp').css('opacity', 0);
					} else {
						$('#moveSectionUp').css('opacity', 1);
					}

					if (destination.index == 5) {
						$('.moveSectionDown').css('opacity', 0);
					} else {
						$('.moveSectionDown').css('opacity', 1);
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

		$.fn.isInViewport = function () {
			var elementTop = $(this).offset().top;
			// console.log("element top " + elementTop);
			var elementBottom = elementTop + $(this).outerHeight();
			// console.log("element bottom " + elementBottom);

			var viewportTop = $(window).scrollTop();
			// console.log("viewport top " + viewportTop);
			var viewportBottom = viewportTop + $(window).height() / 2.5;
			// console.log("viewport bottom " + viewportBottom);

			return elementBottom > viewportTop && elementTop < viewportBottom;
		};

		$(window).on('resize scroll', function () {
			$('.menuSection').each(function () {
				var activeColor = $(this).attr('id');
				if ($(this).isInViewport()) {
					$(this).find('.fixed-image').css('opacity', 1);
				} else {
					$(this).find('.fixed-image').css('opacity', 0);
				}
			});
		});
	};

} // End match query
