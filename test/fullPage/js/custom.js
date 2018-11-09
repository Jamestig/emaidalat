function initialization() {
	var myFullpage = new fullpage('#fullpage', {
		fadingEffect: true,
		licenseKey: 'A3290806-C2474DD7-B7A3D34F-92B6E4CD',
		fadingEffectKey: 'ZW1haWRhbGF0LmNvbV9LQ2JabUZrYVc1blJXWm1aV04wcGp2',
		anchors: ['homestay', 'breakfast', 'room-ivy', 'room-clara', 'room-may', 'room-lila', 'room-jasmine'],
		menu: '#menu',
		lazyLoad: true,

		onLeave: function (origin, destination, direction) {
			var leavingSection = this;

			//after leaving section 2
			if (origin.index == 1 && direction == 'down') {
				alert("Going to section 3!");
			} else if (origin.index == 1 && direction == 'up') {
				alert("Going to section 1!");
			}
		}
	});
}

//fullPage.js initialization
initialization();
fullpage_api.setScrollingSpeed(1500);
fullpage_api.getActiveSection();

document.querySelector('#moveSectionUp').addEventListener('click', function (e) {
	e.preventDefault();
	fullpage_api.moveSectionUp();
});

document.querySelector('#moveSectionDown').addEventListener('click', function (e) {
	e.preventDefault();
	fullpage_api.moveSectionDown();
});