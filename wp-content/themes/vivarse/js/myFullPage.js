jQuery(document).ready(function() {
	jQuery('#page').fullpage({

		// menu: '#upcoming-list',
		anchors: ['intro', 'upcoming', 'test'],
		animateAnchor: false,

		loopHorizontal: false,
		// controlArrows: false,

    fixedElements: '#site-header, .screen-reader-text, .sajdbar',

		paddingTop: 60,

		fitToSection: false,
		fitToSectionDelay: 10000,

		scrollingSpeed: 700,
		easingcss3: 'ease',

  });
});
