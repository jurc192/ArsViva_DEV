/* My settings for fullPage.js plugin */
jQuery(document).ready(initFullpage);

function initFullpage() {

	// Poglej če je accessibilityMode vklopljen v tem browsing sessionu
	// PAZI -> accMode dobi STRING, ne BOOLEAN
	var accMode = sessionStorage.getItem('accessibilityMode');

	// Zaženi fullPage
	jQuery('#page').fullpage({

		// My default settings
		responsiveWidth: 585,
		fitToSection: false,
		loopHorizontal: false,
		fixedElements: '#site-header, .screen-reader-text, .social-media-sidebar, #accPopup',
		paddingTop: 60,
		fitToSection: false,
		fitToSectionDelay: 10000,
		scrollingSpeed: 700,
		easingcss3: 'ease',

	});

	// Če je accessibilityMode vklopljen naloži ManualScroll
	// Ali če je mobile device screen size
	var mediaQuery = window.matchMedia("(max-width: 600px)");

	if((accMode == 'true') || (mediaQuery.matches)) {
		console.log("accessibilityMode in sessionStorage is: ", accMode);
		jQuery.fn.fullpage.setAutoScrolling(false);
	}

	// Če ne naloži autoScroll
	else {
		console.log("accessibilityMode in sessionStorage is: ", accMode);
		jQuery.fn.fullpage.setAutoScrolling(true);
	}

}


/* Toggle between accessibilityMode on and off */
/* onclick event on sidebar button #accessibilityToggle*/
function toggleMode() {

	var accessibilityMode = sessionStorage.getItem('accessibilityMode');

	// Če je accMode => null ali pa false
	if(accessibilityMode != 'true') {
			sessionStorage.setItem('accessibilityMode', 'true');
			jQuery.fn.fullpage.setAutoScrolling(false);
	}

	// Če je accMode => true
	else {
			sessionStorage.setItem('accessibilityMode', 'false');
			jQuery.fn.fullpage.setAutoScrolling(true);
	}


}
