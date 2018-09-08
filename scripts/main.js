$(document).ready(function () {
	
	//FULLSCREEN FUNCTIONALITY

	if (window.matchMedia('(min-width: 1280px)').matches) {
		
		// Fullscreen scroll //

		var divs = $('.scrollSection');
		var dir = 'up'; // wheel scroll direction
		var div = 0; // current div

		$(document.body).on('DOMMouseScroll mousewheel', function (e) {
			if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
				dir = 'down';
			} else {
				dir = 'up';
			}
			// find currently visible div :
			div = -1;
			divs.each(function (i) {
				if (div < 0 && ($(this).offset().top >= $(window).scrollTop())) {
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
			$('html,body').stop().animate({
				scrollTop: divs.eq(div).offset().top
			}, 800);
			return false;
		});

		$(window).resize(function () {
			$('html,body').scrollTop(divs.eq(div).offset().top);
		});
		
		// Accordion

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
	
	// MOBILE FUNCTIONALITY

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
		var bookButtons = $('.flex-container-room');
		
		//console.log(pageSections);
		//console.log("window height = " + windowHeight);
		//console.log("client height = " + clientHeight);
		//console.log("home height = " + homeHeight);
		
		$(backgroundFigure).not( $(backgroundFigure)[ 0 ]).hide();
		$(bookButtons).hide();
		$('.flex-container-room').hide();
		$('.room-button-container').hide();
		
		$('#rooms-ivy .flex-container-room').click(function(){
			alert('Room Ivy');
		});
		$('#rooms-clara .flex-container-room').click(function(){
			alert('Room Clara');
		});
		$('#rooms-may .flex-container-room').click(function(){
			alert('Room may');
		});
		$('#rooms-lila .flex-container-room').click(function(){
			alert('Room lila');
		});
		$('#rooms-jasmine .flex-container-room').click(function(){
			alert('Room jasmine');
		});

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
				
				if (scrollbarLocation > windowHeight + windowHalf) {
					$('.room-button-container').fadeIn();
				} else {
					$('.room-button-container').fadeOut();
					$('.flex-container-room').fadeOut();
				}
				
				if (scrollbarLocation <= windowHeight / 2) {
					$(backgroundFigure[0]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[0]).fadeOut(2000);
				} else if ( scrollbarLocation > windowHeight / 2 && scrollbarLocation <= windowHeight + (windowHeight / 2) ) {
					$(backgroundFigure[1]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[1]).fadeOut(2000);
				} else if ( scrollbarLocation > windowHeight + windowHalf && scrollbarLocation <= (windowHeight * 2) + windowHalf) {
					$(backgroundFigure[2]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[2]).fadeOut(2000);
					$('#rooms-ivy .flex-container-room').fadeIn();
					$('.flex-container-room').not( $('#rooms-ivy .flex-container-room') ).fadeOut();
				} else if ( scrollbarLocation > (windowHeight * 2) + windowHalf && scrollbarLocation <= (windowHeight * 3) + windowHalf) {
					$(backgroundFigure[3]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[3]).fadeOut(2000);
					$('#rooms-clara .flex-container-room').fadeIn();
					$('.flex-container-room').not( $('#rooms-clara .flex-container-room') ).fadeOut();
					$('#main-home .ribbon-container').fadeIn();
				} else if ( scrollbarLocation > (windowHeight * 3) + windowHalf && scrollbarLocation <= (windowHeight * 4) + windowHalf) {
					$(backgroundFigure[4]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[4]).fadeOut(2000);
					$('#rooms-may .flex-container-room').fadeIn();
					$('.flex-container-room').not( $('#rooms-may .flex-container-room') ).fadeOut();
					$('#main-home .ribbon-container').fadeOut(400);
				} else if ( scrollbarLocation > (windowHeight * 4) + windowHalf && scrollbarLocation <= (windowHeight * 5) + windowHalf) {
					$(backgroundFigure[5]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[5]).fadeOut(2000);
					$('#rooms-lila .flex-container-room').fadeIn();
					$('.flex-container-room').not( $('#rooms-lila .flex-container-room') ).fadeOut();
				} else if ( scrollbarLocation > (windowHeight * 5) + windowHalf && scrollbarLocation <= (windowHeight * 6) + windowHalf) {
					$(backgroundFigure[6]).fadeIn(1000);
					$(backgroundFigure).not( $(backgroundFigure)[6]).fadeOut(2000);
					$('#rooms-jasmine .flex-container-room').fadeIn();
					$('.flex-container-room').not( $('#rooms-jasmine .flex-container-room') ).fadeOut();
				};

			});

		}) // Match query if statement
	}; // End scroll function

});
