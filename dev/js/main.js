/**
 * Filename: main.js
 * Author: jgalyon
 * Created: 2018/09/19
 * Description:
 * Main JS functions file for site.
 **/

/**
 * Sticky footer
 */
$(window).on('load resize', function() {

	// sticky footer stuff
	let adminBarHeight = $('#wpadminbar').height();
	let brandWidth = $('.navbar-brand').outerWidth();
	let containerWidth = $('.navbar > .container').width();
	let contentHeight = $('.wrapper').outerHeight();
	let footerHeight = $('footer').outerHeight();
	let mastheadRowHeight = $('.jumbotron .row').outerHeight();
	let mqxs = window.matchMedia('screen and ( max-width: 767px )');
	let navbarWidth = $('.navbar-collapse').outerWidth();
	let toggleWidth = $('.navbar-toggle').outerWidth();
	let windowHeight = $(window).height();

	if((contentHeight + footerHeight) < windowHeight) {
		if($('#wpadminbar').length) {
			$('.wrapper').css('margin-bottom', windowHeight - (contentHeight + footerHeight + adminBarHeight));
		} else {
			$('.wrapper').css('margin-bottom', windowHeight - (contentHeight + footerHeight));
		}
	}

	// Ugh mobile sites
	if(mqxs.matches === true) {
		$('.navbar-brand').css('margin-right', containerWidth - brandWidth - toggleWidth);
	} else {
		$('.navbar-brand').css('margin-right', containerWidth - brandWidth - navbarWidth);
	}

	$('.jumbotron .container').css('padding-bottom', containerWidth * 0.4 - mastheadRowHeight);
});

/**
 * Let 'er rip
 */

$(document).ready(function() {

	// set focus to the search bar when it's been exposed
	// at sizes larger than 767px.
	$('.dropdown').on('shown.bs.dropdown', function(e) {
		var dropdown = $(e.target);

		setTimeout(function() {
			console.log('Search focus!');
			$('.dropdown-menu li .navbar-form .search-query.form-control').focus();
		}, 30);
	});

	// hide the scroll button on page load
	$('.scroll-top').hide();

	$(window).scroll(function showScrollButton() {
		if($(this).scrollTop() > 100) {
			// if the window's position is greater than 100 pixels away from the top
			// of the page, fade the scroll button in
			$('.scroll-top').fadeIn();
		} else {
			// if not, fade the button so it's out of the way
			$('.scroll-top').fadeOut();
		}
	});

	$('.notification-close').click(function() {
		sessionStorage.setItem('notification-closed', 'true');
	});

	const allIframes = $( 'iframe[ src*="//player.vimeo.com" ], iframe[ src*="//www.youtube.com" ], iframe[ src*="//www.google.com/maps" ], object, embed' );

	allIframes.each( function() {

		// clean up the iframe element and add a
		// responsive class to key on later for adding wrappers
		$( this ).removeAttr( 'height width' ).addClass( 'embed-responsive-item' );

		// add a wrapper around the iframe
		$( this ).wrap( '<div class="embed-responsive embed-responsive-16by9"></div>' );
	} );

	// Protect against tabnapping.
	$( 'a[href="_blank"]' ).each( function() {
		$( this ).attr( 'rel', 'noopener noreferrer' );
	} );
});

// set an variable to store the timeout function
var timer;

$(window).on('load resize', function sidebarFix() {

	// what size are we targeting?
	const mqsm = window.matchMedia('screen and ( max-width: 991px )');

	// Save the heading text. We'll need that in a sec.
	const headingText = $('.sidebar-navigation > h2, .sidebar-navigation > button').text();

	// clear the timeout so we can start fresh
	clearTimeout(timer);

	timer = setTimeout(function() {

		if(!mqsm.matches) {
			$('.sidebar-navigation').removeClass('dropdown');

			// Replace the button with a proper heading element
			$('.sidebar-navigation > button').replaceWith('<h2>' + headingText + '</h2>');

			// Fix the menu
			$('.sidebar-navigation > ul').removeClass('dropdown-menu').removeAttr(' aria-labelledby');

		} else {
			// wrap the list in a container div
			$('.sidebar-navigation').addClass('dropdown');

			// Replace the class in the dropdown menu
			$('.sidebar-navigation > ul').addClass('dropdown-menu').attr('aria-labelledby', 'sidebar-nav-btn');

			// Change the heading to a button

			$('.sidebar-navigation > h2').replaceWith('<button class="btn btn-primary dropdown-toggle" type="button" id="sidebar-nav-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' + headingText + '&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>');
		}

	}, 500);

}).trigger('resize');

/**
 * Smooth Scroll
 */

var scroll = new SmoothScroll('a[href*="#"]', {
	// Selectors
	ignore: 'no-scroll', // Selector for links to ignore (must be a valid CSS selector)
	header: null, // Selector for fixed headers (must be a valid CSS selector)

	// Speed & Easing
	speed: 666, // Integer. How fast to complete the scroll in milliseconds
	offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
	easing: 'easeInOutQuint', // Easing pattern to use
	//customEasing: function (time) {}, // Function. Custom easing pattern

	// Callback API
	before: function() {
	}, // Callback to run before scroll
	after: function() {
	} // Callback to run after scroll
});