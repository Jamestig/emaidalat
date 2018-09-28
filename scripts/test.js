document.addEventListener('DOMContentLoaded', function() {

  // MOBILE FUNCTIONALITY

  // Burger button

  jQuery('#burger-icon').click(function() {
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
  mql.addListener(function(m) {
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

  // Fixed image ratio change to fit container
  var fixedWidth = jQuery('.fixed-image').width();
  var fixedHeight = jQuery(window).height();
  var fixedRatio = (fixedWidth / 4) - (fixedHeight / 3);

  if (fixedRatio >= 43) {
    jQuery('.fixed-image').addClass('image-43');
  }

  // Responsive header function
  jQuery(window).scroll(function() {
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

  // FULLSCREEN FUNCTIONALITY

  // Accordion

  var accordionHidden = jQuery('.accordionInner');
  var pageLinks = jQuery('.accordion > li > a');
  var menuLinks = jQuery('#inner-restaurant > li > a');
  var current_href = jQuery(location).attr('href');
  var currentPage = jQuery(location).attr('href').split('/')[4];
  var prevLink = jQuery('.accordionInner').prev('a');
  var link_href = prevLink.attr('href');
  var openHeader = jQuery('a[href="' + currentPage + '"]');

  // console.log('current href = ' + current_href);
  // console.log('current page = ' + currentPage);
  // console.log('link href = ' + link_href);

  if (window.matchMedia('(min-width: 1280px)').matches) {

    // Accordion open
    if (current_href === 'http://localhost/local_wordpress/') {
      jQuery('#inner-home').show();
      jQuery('#link-home > a').addClass('activePage');
    } else if (current_href === 'http://localhost/local_wordpress/our-story/') {
      jQuery('#inner-story').show();
      jQuery('#link-story > a').addClass('activePage');
    } else if (current_href === 'http://localhost/local_wordpress/our-rooms/') {
      jQuery('#inner-bnb').show();
      jQuery('#link-bnb > a').addClass('activePage');
    } else if (current_href === 'http://localhost/local_wordpress/reservations/') {
      jQuery('#link-reservations > a').addClass('activePage');
    } else if (current_href === 'http://localhost/local_wordpress/restaurant-menu/') {
      jQuery('#inner-restaurant').show();
      jQuery('#link-menu > a').addClass('activePage');
      jQuery('#link-restaurant > a').addClass('activePage');
    } else if (current_href === 'http://localhost/local_wordpress/drinks-desserts-menu/') {
      jQuery('#inner-restaurant').show();
      jQuery('#link-menu > a').addClass('activePage');
      jQuery('#link-drinks > a').addClass('activePage');
    } else if (current_href === 'http://localhost/local_wordpress/breakfast-menu/') {
      jQuery('#inner-restaurant').show();
      jQuery('#link-menu > a').addClass('activePage');
      jQuery('#link-breakfast > a').addClass('activePage');
    } else if (current_href === 'http://localhost/local_wordpress/wine-list/') {
      jQuery('#inner-restaurant').show();
      jQuery('#link-menu > a').addClass('activePage');
      jQuery('#link-wine > a').addClass('activePage');
    } else if (current_href === 'http://localhost/local_wordpress/contact/') {
      jQuery('#link-contact > a').addClass('activePage');
    }

    // Consider using switch statement

    // Fullscreen scroll //
    if (current_href === 'http://localhost/local_wordpress/' || current_href === 'http://localhost/local_wordpress/our-rooms/') {
      var divs = jQuery('.scrollSection');
      var dir = 'up'; // wheel scroll direction
      var div = 0; // current div

      jQuery(document.body).on('DOMMouseScroll mousewheel', function(e) {
        if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
          dir = 'down';
        } else {
          dir = 'up';
        }
        // find currently visible div :
        div = -1;
        divs.each(function(i) {
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

      jQuery(window).resize(function() {
        jQuery('html,body').scrollTop(divs.eq(div).offset().top);
      });

      // Smooth scrolling menu links
      var scrollLink = jQuery('.scroll');

      scrollLink.click(function(e) {
        e.preventDefault();
        jQuery('body,html').animate({
          scrollTop: jQuery(this.hash).offset().top
        }, 1000);
      });
    }

    // Background image and room info swapping

    var windowHeight = jQuery(window).height();
    var windowHalf = (windowHeight / 2) - 50;
    var clientHeight = document.body.clientHeight;
    var pageSections = jQuery('.pageSection').length;
    var sectionHeight = clientHeight / pageSections;
    var backgroundFigure = jQuery('.fixed-image');
    var bookButtons = jQuery('.flex-container-room');

    if (current_href === 'http://localhost/local_wordpress/restaurant-menu/') {
      sectionHeight -= (sectionHeight / 5);
    } else if (current_href === 'http://localhost/local_wordpress/drinks-desserts-menu/') {
      sectionHeight -= (sectionHeight / 6);
    }

    console.log("page sections = " + pageSections);
    console.log("window height = " + windowHeight);
    console.log("client height = " + clientHeight);
    console.log("section height = " + sectionHeight);

    jQuery(backgroundFigure).not(jQuery(backgroundFigure)[0]).hide();

    jQuery(bookButtons).hide();
    jQuery('.flex-container-room').hide();
    jQuery('.room-button-container').hide();

    jQuery('#rooms-ivy .flex-container-room').click(function() {
      alert('Room Ivy');
    });
    jQuery('#rooms-clara .flex-container-room').click(function() {
      alert('Room Clara');
    });
    jQuery('#rooms-may .flex-container-room').click(function() {
      alert('Room may');
    });
    jQuery('#rooms-lila .flex-container-room').click(function() {
      alert('Room lila');
    });
    jQuery('#rooms-jasmine .flex-container-room').click(function() {
      alert('Room jasmine');
    });

    jQuery(window).scroll(function() {

      var scrollbarLocation = jQuery(this).scrollTop();

      //console.log("scroll location = " + scrollbarLocation);

      if (scrollbarLocation > windowHeight + windowHalf) {
        jQuery('.room-button-container').fadeIn();
      } else {
        jQuery('.room-button-container').fadeOut();
        jQuery('.flex-container-room').fadeOut();
      }

      if (scrollbarLocation <= sectionHeight / 2) {
        jQuery(backgroundFigure[0]).fadeIn(1000);
        jQuery(backgroundFigure).not(jQuery(backgroundFigure)[0]).fadeOut(2000);
        //jQuery(scrollLink[0]).addClass('activeSection');
        //jQuery(scrollLink).not(jQuery(scrollLink)[0]).removeClass('activeSection');
      } else if (scrollbarLocation > sectionHeight / 2 && scrollbarLocation <= sectionHeight + (sectionHeight / 2)) {
        jQuery(backgroundFigure[1]).fadeIn(1000);
        jQuery(backgroundFigure).not(jQuery(backgroundFigure)[1]).fadeOut(2000);
        //jQuery(scrollLink[1]).addClass('activeSection');
        //jQuery(scrollLink).not(jQuery(scrollLink)[1]).removeClass('activeSection');
      } else if (scrollbarLocation > sectionHeight + windowHalf && scrollbarLocation <= (sectionHeight * 2) + windowHalf) {
        jQuery(backgroundFigure[2]).fadeIn(1000);
        jQuery(backgroundFigure).not(jQuery(backgroundFigure)[2]).fadeOut(2000);
        jQuery('#rooms-ivy .flex-container-room').fadeIn();
        jQuery('.flex-container-room').not(jQuery('#rooms-ivy .flex-container-room')).fadeOut();
        //jQuery(scrollLink[2]).addClass('activeSection');
        //jQuery(scrollLink).not(jQuery(scrollLink)[2]).removeClass('activeSection');
      } else if (scrollbarLocation > (sectionHeight * 2) + windowHalf && scrollbarLocation <= (sectionHeight * 3) + windowHalf) {
        jQuery(backgroundFigure[3]).fadeIn(1000);
        jQuery(backgroundFigure).not(jQuery(backgroundFigure)[3]).fadeOut(2000);
        jQuery('#rooms-clara .flex-container-room').fadeIn();
        jQuery('.flex-container-room').not(jQuery('#rooms-clara .flex-container-room')).fadeOut();
        jQuery('#home-atmosphere .ribbon-container').fadeIn(500);
        //jQuery(scrollLink[3]).addClass('activeSection');
        //jQuery(scrollLink).not(jQuery(scrollLink)[3]).removeClass('activeSection');
      } else if (scrollbarLocation > (sectionHeight * 3) + windowHalf && scrollbarLocation <= (sectionHeight * 4) + windowHalf) {
        jQuery(backgroundFigure[4]).fadeIn(1000);
        jQuery(backgroundFigure).not(jQuery(backgroundFigure)[4]).fadeOut(2000);
        jQuery('#rooms-may .flex-container-room').fadeIn();
        jQuery('.flex-container-room').not(jQuery('#rooms-may .flex-container-room')).fadeOut();
        jQuery('#home-atmosphere .ribbon-container').fadeOut(200);
        //jQuery(scrollLink[4]).addClass('activeSection');
        //jQuery(scrollLink).not(jQuery(scrollLink)[4]).removeClass('activeSection');
      } else if (scrollbarLocation > (sectionHeight * 4) + windowHalf && scrollbarLocation <= (sectionHeight * 5) + windowHalf) {
        jQuery(backgroundFigure[5]).fadeIn(1000);
        jQuery(backgroundFigure).not(jQuery(backgroundFigure)[5]).fadeOut(2000);
        jQuery('#rooms-lila .flex-container-room').fadeIn();
        jQuery('.flex-container-room').not(jQuery('#rooms-lila .flex-container-room')).fadeOut();
        //jQuery(scrollLink[5]).addClass('activeSection');
        //jQuery(scrollLink).not(jQuery(scrollLink)[5]).removeClass('activeSection');
      } else if (scrollbarLocation > (sectionHeight * 5) + windowHalf && scrollbarLocation <= (sectionHeight * 6) + windowHalf) {
        jQuery(backgroundFigure[6]).fadeIn(1000);
        jQuery(backgroundFigure).not(jQuery(backgroundFigure)[6]).fadeOut(2000);
        jQuery('#rooms-jasmine .flex-container-room').fadeIn();
        jQuery('.flex-container-room').not(jQuery('#rooms-jasmine .flex-container-room')).fadeOut();
      }

    }); // End scroll function
  } // End match query

}); // End document load function
