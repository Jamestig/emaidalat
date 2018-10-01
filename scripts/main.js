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
  function getRatio() {
    var fixedWidth = jQuery('.fixed-image').width();
    var fixedHeight = jQuery(window).height();
    var fixedRatio = (fixedWidth / 4) - (fixedHeight / 3);

    if (fixedRatio >= 43) {
      jQuery('.fixed-image').addClass('image-43');
    }
  }
  getRatio();

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
  if (window.matchMedia('(min-width: 1280px)').matches) {

    var current_href = jQuery(location).attr('href');

    // Page name function

    var pageName = function() {
      if (window.location.href.indexOf("rooms") > -1) {
        return 'rooms';
      } else if (window.location.href.indexOf("story") > -1) {
        return 'story';
      } else if (window.location.href.indexOf("reservations") > -1) {
        return 'reservations';
      } else if (window.location.href.indexOf("restaurant") > -1) {
        return 'restaurant';
      } else if (window.location.href.indexOf("drinks") > -1) {
        return 'drinks';
      } else if (window.location.href.indexOf("breakfast") > -1) {
        return 'breakfast';
      } else if (window.location.href.indexOf("wine") > -1) {
        return 'wine';
      } else if (window.location.href.indexOf("contact") > -1) {
        return 'contact';
      } else {
        return 'home';
      }
    }; // End page name function

    // Accordion

    var openAccordion = function() {

      //var accordionHidden = jQuery('.accordionInner');
      //var pageLinks = jQuery('.accordion > li > a');
      //var menuLinks = jQuery('#inner-restaurant > li > a');
      //var currentPage = jQuery(location).attr('href').split('/')[4];
      //var prevLink = jQuery('.accordionInner').prev('a');
      //var link_href = prevLink.attr('href');
      //var openHeader = jQuery('a[href="' + currentPage + '"]');

      // console.log('current href = ' + current_href);
      // console.log('current page = ' + currentPage);
      // console.log('link href = ' + link_href);

      // Accordion open
      if (pageName() === 'home') {
        jQuery('#inner-home').show();
        jQuery('#link-home > a').addClass('activePage');
      } else if (pageName() === 'story') {
        jQuery('#inner-story').show();
        jQuery('#link-story > a').addClass('activePage');
      } else if (pageName() === 'rooms') {
        jQuery('#inner-bnb').show();
        jQuery('#link-bnb > a').addClass('activePage');
      } else if (pageName() === 'reservations') {
        jQuery('#link-reservations > a').addClass('activePage');
      } else if (pageName() === 'restaurant') {
        jQuery('#inner-restaurant').show();
        jQuery('#link-menu > a').addClass('activePage');
        jQuery('#link-restaurant > a').addClass('activePage');
      } else if (pageName() === 'drinks') {
        jQuery('#inner-restaurant').show();
        jQuery('#link-menu > a').addClass('activePage');
        jQuery('#link-drinks > a').addClass('activePage');
      } else if (pageName() === 'breakfast') {
        jQuery('#inner-restaurant').show();
        jQuery('#link-menu > a').addClass('activePage');
        jQuery('#link-breakfast > a').addClass('activePage');
      } else if (pageName() === 'wine') {
        jQuery('#inner-restaurant').show();
        jQuery('#link-menu > a').addClass('activePage');
        jQuery('#link-wine > a').addClass('activePage');
      } else if (pageName() === 'contact') {
        jQuery('#link-contact > a').addClass('activePage');
      }
    }; // End accordion function
    openAccordion();
    // Consider using switch statement

    // Fullscreen scroll
    if (pageName() === 'home' || pageName() === 'rooms') {
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
    } // End fullscreen scroll if statement

    jQuery(window).resize(function() {
      jQuery('html,body').scrollTop(divs.eq(div).offset().top);
    });

    // Smooth scrolling menu links
    var scrollLink = jQuery('a[href="' + current_href + '"]').siblings('.accordionInner').find('.scroll');

    scrollLink.click(function(e) {
      e.preventDefault();
      jQuery('body,html').animate({
        scrollTop: jQuery(this.hash).offset().top
      }, 1000);
    });

    var windowHeight = jQuery(window).height();
    var windowHalf = (windowHeight / 2) - 50;
    var clientHeight = document.body.clientHeight;
    var pageSections = jQuery('.pageSection').length;
    var sectionHeight = clientHeight / pageSections;
    var backgroundFigure = jQuery('.fixed-image');
    var bookButtons = jQuery('.flex-container-room');

    //console.log("page sections = " + pageSections);
    //console.log("window height = " + windowHeight);
    //console.log("client height = " + clientHeight);
    //console.log("section height = " + sectionHeight);

    // Initial page load actions

    jQuery(backgroundFigure).not(jQuery(backgroundFigure)[0]).hide();

    if (pageName() === 'home') {
      var scrollbarLocation = jQuery(this).scrollTop();
      if (scrollbarLocation < 2) {
        jQuery(scrollLink[0]).addClass('activeSection');
      }
    }

    if (pageName() === 'restaurant') {
      sectionHeight -= (sectionHeight / 5);
    } else if (pageName() === 'drinks') {
      sectionHeight -= (sectionHeight / 6);
    }

    jQuery(bookButtons).hide();
    jQuery('.flex-container-room').hide();
    jQuery('.room-button-container').hide();

    jQuery('#rooms-ivy .flex-container-room').click(function() {
    });
    jQuery('#rooms-clara .flex-container-room').click(function() {
    });
    jQuery('#rooms-may .flex-container-room').click(function() {
    });
    jQuery('#rooms-lila .flex-container-room').click(function() {
    });
    jQuery('#rooms-jasmine .flex-container-room').click(function() {
    });

    jQuery(window).scroll(function() {

      var scrollbarLocation = jQuery(this).scrollTop();

      var viewportSection = function() {
        if (scrollbarLocation <= sectionHeight / 2) {
          return 0;
        } else if (scrollbarLocation > sectionHeight / 2 && scrollbarLocation <= sectionHeight + (sectionHeight / 2)) {
          return 1;
        } else if (scrollbarLocation > sectionHeight + windowHalf && scrollbarLocation <= (sectionHeight * 2) + windowHalf) {
          return 2;
        } else if (scrollbarLocation > (sectionHeight * 2) + windowHalf && scrollbarLocation <= (sectionHeight * 3) + windowHalf) {
          return 3;
        } else if (scrollbarLocation > (sectionHeight * 3) + windowHalf && scrollbarLocation <= (sectionHeight * 4) + windowHalf) {
          return 4;
        } else if (scrollbarLocation > (sectionHeight * 4) + windowHalf && scrollbarLocation <= (sectionHeight * 5) + windowHalf) {
          return 5;
        } else if (scrollbarLocation > (sectionHeight * 5) + windowHalf && scrollbarLocation <= (sectionHeight * 6) + windowHalf) {
          return 6;
        }
      }; // End viewport section function

      var viewportBackground = function() {
        jQuery(backgroundFigure[viewportSection()]).fadeIn(1000);
        jQuery(backgroundFigure).not(jQuery(backgroundFigure)[viewportSection()]).fadeOut(2000);
      };

      var viewportLinkHighlight = function() {
        if (pageName() === 'home') {
          jQuery(scrollLink[viewportSection()]).addClass('activeSection');
          jQuery(scrollLink).not(jQuery(scrollLink)[viewportSection()]).removeClass('activeSection');
        } else if (pageName() === 'rooms') {
          jQuery(scrollLink[viewportSection() - 2]).addClass('activeSection');
          jQuery(scrollLink).not(jQuery(scrollLink)[viewportSection() - 2]).removeClass('activeSection');
        }
      };

      var viewportRoom = function() {
        var ourRooms = jQuery('.flex-container-room');
        var roomSection = viewportSection() - 2;
        jQuery(ourRooms[roomSection]).fadeIn();
        jQuery(ourRooms).not(jQuery(ourRooms[roomSection])).fadeOut();
        //console.log(roomSection);
      };

      switch (viewportSection()) {
        case 0:
          viewportBackground();
          viewportLinkHighlight();
          viewportRoom();
          break;
        case 1:
          viewportBackground();
          viewportLinkHighlight();
          viewportRoom();
          break;
        case 2:
          viewportBackground();
          viewportLinkHighlight();
          viewportRoom();
          jQuery('.previousRoom').css('visibility', 'hidden');
          break;
        case 3:
          viewportBackground();
          viewportLinkHighlight();
          viewportRoom();
          jQuery('#home-atmosphere .ribbon-container').fadeIn(500);
          jQuery('.previousRoom').css('visibility', 'visible');
          break;
        case 4:
          viewportBackground();
          viewportLinkHighlight();
          viewportRoom();
          jQuery('#home-atmosphere .ribbon-container').fadeOut(500);
          break;
        case 5:
          viewportBackground();
          viewportLinkHighlight();
          viewportRoom();
          jQuery('.nextRoom').css('visibility', 'visible');
          break;
        case 6:
          viewportBackground();
          viewportLinkHighlight();
          viewportRoom();
          jQuery('.nextRoom').css('visibility', 'hidden');
          break;
      } // End veiwport switch statement

      if (scrollbarLocation > windowHeight + windowHalf) {
        jQuery('.room-button-container').fadeIn();
      } else {
        jQuery('.room-button-container').fadeOut();
        jQuery('.flex-container-room').fadeOut();
      }
      /*
            if (scrollbarLocation <= sectionHeight / 2) {
              if (scrollPage === 'home') {
                jQuery(scrollLink[0]).addClass('activeSection');
                jQuery(scrollLink).not(jQuery(scrollLink)[0]).removeClass('activeSection');
              }
            } else if (scrollbarLocation > sectionHeight / 2 && scrollbarLocation <= sectionHeight + (sectionHeight / 2)) {
              //jQuery(backgroundFigure[1]).fadeIn(1000);
              //jQuery(backgroundFigure).not(jQuery(backgroundFigure)[1]).fadeOut(2000);
              if (scrollPage === 'home') {
                jQuery(scrollLink[1]).addClass('activeSection');
                jQuery(scrollLink).not(jQuery(scrollLink)[1]).removeClass('activeSection');
              }
            } else if (scrollbarLocation > sectionHeight + windowHalf && scrollbarLocation <= (sectionHeight * 2) + windowHalf) {
              //jQuery(backgroundFigure[2]).fadeIn(1000);
              //jQuery(backgroundFigure).not(jQuery(backgroundFigure)[2]).fadeOut(2000);
              jQuery('#rooms-ivy .flex-container-room').fadeIn();
              jQuery('.flex-container-room').not(jQuery('#rooms-ivy .flex-container-room')).fadeOut();
              if (scrollPage === 'home') {
                jQuery(scrollLink[2]).addClass('activeSection');
                jQuery(scrollLink).not(jQuery(scrollLink)[2]).removeClass('activeSection');
              } else if (scrollPage === 'bnb') {
                jQuery(scrollLink[0]).addClass('activeSection');
                jQuery(scrollLink).not(jQuery(scrollLink)[0]).removeClass('activeSection');
              }
            } else if (scrollbarLocation > (sectionHeight * 2) + windowHalf && scrollbarLocation <= (sectionHeight * 3) + windowHalf) {
              //jQuery(backgroundFigure[3]).fadeIn(1000);
              //jQuery(backgroundFigure).not(jQuery(backgroundFigure)[3]).fadeOut(2000);
              jQuery('#rooms-clara .flex-container-room').fadeIn();
              jQuery('.flex-container-room').not(jQuery('#rooms-clara .flex-container-room')).fadeOut();
              jQuery('#home-atmosphere .ribbon-container').fadeIn(500);
              if (scrollPage === 'home') {
                jQuery(scrollLink[3]).addClass('activeSection');
                jQuery(scrollLink).not(jQuery(scrollLink)[3]).removeClass('activeSection');
              } else if (scrollPage === 'bnb') {
                jQuery(scrollLink[1]).addClass('activeSection');
                jQuery(scrollLink).not(jQuery(scrollLink)[1]).removeClass('activeSection');
              }
            } else if (scrollbarLocation > (sectionHeight * 3) + windowHalf && scrollbarLocation <= (sectionHeight * 4) + windowHalf) {
              ////jQuery(backgroundFigure[4]).fadeIn(1000);
              ////jQuery(backgroundFigure).not(jQuery(backgroundFigure)[4]).fadeOut(2000);
              jQuery('#rooms-may .flex-container-room').fadeIn();
              jQuery('.flex-container-room').not(jQuery('#rooms-may .flex-container-room')).fadeOut();
              jQuery('#home-atmosphere .ribbon-container').fadeOut(200);
              if (scrollPage === 'home') {
                jQuery(scrollLink[4]).addClass('activeSection');
                jQuery(scrollLink).not(jQuery(scrollLink)[4]).removeClass('activeSection');
              } else if (scrollPage === 'bnb') {
                jQuery(scrollLink[2]).addClass('activeSection');
                jQuery(scrollLink).not(jQuery(scrollLink)[2]).removeClass('activeSection');
              }
            } else if (scrollbarLocation > (sectionHeight * 4) + windowHalf && scrollbarLocation <= (sectionHeight * 5) + windowHalf) {
              //jQuery(backgroundFigure[5]).fadeIn(1000);
              //jQuery(backgroundFigure).not(jQuery(backgroundFigure)[5]).fadeOut(2000);
              jQuery('#rooms-lila .flex-container-room').fadeIn();
              jQuery('.flex-container-room').not(jQuery('#rooms-lila .flex-container-room')).fadeOut();
              if (scrollPage === 'bnb') {
                jQuery(scrollLink[3]).addClass('activeSection');
                jQuery(scrollLink).not(jQuery(scrollLink)[3]).removeClass('activeSection');
              }
            } else if (scrollbarLocation > (sectionHeight * 5) + windowHalf && scrollbarLocation <= (sectionHeight * 6) + windowHalf) {
              //jQuery(backgroundFigure[6]).fadeIn(1000);
              //jQuery(backgroundFigure).not(jQuery(backgroundFigure)[6]).fadeOut(2000);
              jQuery('#rooms-jasmine .flex-container-room').fadeIn();
              jQuery('.flex-container-room').not(jQuery('#rooms-jasmine .flex-container-room')).fadeOut();
              if (scrollPage === 'bnb') {
                jQuery(scrollLink[4]).addClass('activeSection');
                jQuery(scrollLink).not(jQuery(scrollLink)[4]).removeClass('activeSection');
              }
            }
          */
    }); // End scroll function

  } // End match query

}); // End document load function
