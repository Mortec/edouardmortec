/*

edvrdmrtc.js
_________

© EdouardMortec 2018 - http://www.edouardmortec.com

*/



$(document).ready(function(){

	var title2 = $('title').html();
	var title = "E D V A R D  M O R T E C";
	$('title').text(title);

	
	var phoneDetected = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

	
	var isPortrait = false;
	if(window.innerHeight > window.innerWidth){
		isPortrait = true;
	}

	var numSeries = $('.section').length;
	var series = new Array;
	var index = 0;
	$('.section').each( function(i){
		series[i] = this.id;
	});

	$('#Title').text( series[ 0 ] );


	$(window).scroll(function(e) {

		var pos = $(window).scrollTop();
		var h =  Math.floor( $('body').height()/( numSeries ) );
		var op = Math.cos( pos/h * 2 * Math.PI )/2 + 0.5;

		$('#Title').css('opacity', op );

		var newindex = Math.round ( pos/h );
		if ( newindex != index) {
			$('#Title').text( series[ newindex ] );
			index = newindex;

			if ( series[index] == "door" ) { $('title').text( title2 ); }
			else { $('title').text( title); }
		}

	});



	$('#Logo').click(function(e) {
		$.fn.fullpage.moveTo(numSeries);
	});

	$('#tp').click(function(e) {
		$.fn.fullpage.moveTo(1);
	});

	$('.Cover').click(function(e) {
		$.fn.fullpage.moveSlideRight()
	});

	$('.Picture').click(function(e) {
		$.fn.fullpage.moveSlideRight()
	});

	$('.navRight').click(function(e) {
		$.fn.fullpage.moveSlideRight()
	});

	$('.navLeft').click(function(e) {
		$.fn.fullpage.moveSlideLeft()
	});

	  // contact form animations
	$('#mss').click(function() {
	    $('#contactForm').fadeToggle();
	})

	$(document).mouseup(function (e) {
	    var container = $("#contactForm");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        container.fadeOut();
	    }
	});

	$('#contactExit').click(function(e) {
		$("#contactForm").fadeOut();;
	});


	$('#fullpage').fullpage({

		licenseKey : 'OPEN-SOURCE-GPLV3-LICENSE',

		//Navigation
		menu: '#menu',
		lockAnchors: false,
		//anchors:['firstPage', 'secondPage'],

		navigation: !phoneDetected,
		navigationPosition: 'right',
		navigationTooltips: series,
		showActiveTooltip: false,

		slidesNavigation: !phoneDetected,
		slidesNavPosition: 'bottom',

		//Scrolling
		css3: true,
		scrollingSpeed: 650,
		autoScrolling: true,
		fitToSection: true,
		fitToSectionDelay: 700,
		scrollBar: true,
		easing: 'easeInOutCubic',
		easingcss3: 'ease',
		loopBottom: false,
		loopTop: false,
		loopHorizontal: true,
		continuousVertical: false,
		//continuousHorizontal: false,
		//scrollHorizontally: false,
		//interlockedSlides: false,
		//dragAndMove: false,
		//offsetSections: false,
		//resetSliders: false,
		//fadingEffect: false,
		normalScrollElements: '#element1, .element2',
		scrollOverflow: false,
		//scrollOverflowReset: false,
		scrollOverflowOptions: null,
		touchSensitivity: 10,
		normalScrollElementTouchThreshold: 5,
		bigSectionsDestination: null,

		//Accessibility
		keyboardScrolling: true,
		animateAnchor: true,
		recordHistory: true,

		//Design
		controlArrows: false,
		verticalCentered: true,
		//sectionsColor : ['#ccc', '#fff'],
		paddingTop: '0em',
		paddingBottom: '0px',
		fixedElements: '#header, .footer',
		//responsiveWidth: 0,
		//responsiveHeight: 0,
		//responsiveSlides: false,
		//parallax: false,
		//parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

		//Custom selectors
		sectionSelector: '.section',
		slideSelector: '.slide',

		lazyLoading: true,

		//events
		onLeave: function(index, nextIndex, direction){},
		afterLoad: function(anchorLink, index){},
		afterRender: function(){},
		afterResize: function(){},
		afterResponsive: function(isResponsive){},
		afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
		
		onSlideLeave: function( anchorLink, index, slideIndex, direction, nextSlideIndex){
			var leavingSlide = $(this);

			if( slideIndex == 0 ){
				//Leaving the fist slide!!
				$('.navLeft').addClass("active");
				$('.navRight').addClass("active");
			}

		
			if( nextSlideIndex == 0 ){
				//Going to slide to first slide
				$('.navLeft').removeClass("active");
				$('.navRight').removeClass("active");
			}
		}


	});

});