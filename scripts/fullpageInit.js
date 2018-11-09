function initialization() {
	var myFullpage = new fullpage('#fullpage', {
		fadingEffect: true,
		licenseKey: 'A3290806-C2474DD7-B7A3D34F-92B6E4CD',
		fadingEffectKey: 'ZW1haWRhbGF0LmNvbV9LQ2JabUZrYVc1blJXWm1aV04wcGp2',
		anchors: ['homestay', 'breakfast', 'room-ivy', 'room-clara', 'room-may', 'room-lila', 'room-jasmine'],
		menu: '#menu',
		lazyLoad: true,
		controlArrows: true
	});
}

//fullPage.js initialization
initialization();

fullpage_api.setScrollingSpeed(1500);

document.querySelector('#moveSectionDown').addEventListener('click', function (e) {
	e.preventDefault();
	fullpage_api.moveSectionDown();
});

document.querySelector('#moveSectionUp').addEventListener('click', function (e) {
	e.preventDefault();
	fullpage_api.moveSectionUp();
});