$(document).ready(function () {

	//select a tag elements
	
	function onClick(event) {
		var target = this.hash; // gets the #hash
		$target = $(target); //
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top + 2 // scrolls to the link
		}, 500, 'swing', function () {
			window.location.hash = target;
			$(document).on("scroll", onScroll);
		});
	};


	function onScroll(event) {
		var scrollPosition = $(document).scrollTop();
		$('ul li a').each(function () {
			var currentLink = $(this);
			var refElement = $(currentLink.attr("href"));
			if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
				$('ul liv a.active').removeClass('active');
				$(this).addClass('active');
			} else {
				currentLink.removeClass("active");
			};
		});
	};

});
