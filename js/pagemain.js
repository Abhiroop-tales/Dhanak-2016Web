jQuery(document).ready(function(){

	// NiceScroll
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//For the folding panel content
	$(".cd-fold-content").niceScroll({
		cursorcolor: "#424242", // change cursor color in hex
		cursoropacitymin: 0, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
		cursoropacitymax: 1, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
		cursorwidth: "5px", // cursor width in pixel (you can also write "5px")
		cursorborder: "1px solid #fff", // css definition for cursor border
		cursorborderradius: "5px",
		hwacceleration: true
	});
	//For the vertical sidebar containing the event categories
	$(".cd-side-navigation ul").niceScroll({
		cursorcolor: "#424242", // change cursor color in hex
		cursoropacitymin: 0.3, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
		cursoropacitymax: 1, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
		cursorwidth: "5px", // cursor width in pixel (you can also write "5px")
		cursorborder: "1px solid #fff", // css definition for cursor border
		cursorborderradius: "5px",
		hwacceleration: true
	});
	//For the main events list section
	$(".cd-section").niceScroll({
		cursorcolor: "#424242", // change cursor color in hex
		cursoropacitymin: 0.5, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
		cursoropacitymax: 1, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
		cursorwidth: "5px", // cursor width in pixel (you can also write "5px")
		cursorborder: "1px solid #fff", // css definition for cursor border
		cursorborderradius: "5px",
		hwacceleration: true
	});
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//Setting the active tab on dhanaknav
	$("li#EventsTab").addClass("activeli");



	//set some variables
	var isAnimating = false,
		firstLoad = false,
		newScaleValue = 1;

	//cache DOM elements
	var dashboard = $('.cd-side-navigation'),
		mainContent = $('.cd-main'),
		loadingBar = $('#cd-loading-bar');

	var gallery = $('.cd-main .cd-gallery'),
		foldingPanel = $('.cd-folding-panel'),
		main3DContent = $('.cd-main .cd-3Dmain'),
		// these are from the outer layout
		//////////////////////////////////////////////////
		cdsection = $(".cd-section"),
		cdsidenav = $(".cd-side-navigation");
		//////////////////////////////////////////////////


	//select a new section (event category)
	dashboard.on('click', 'a', function(event){
		event.preventDefault();
		var target = $(this),
		//detect which section user has chosen
		sectionTarget = target.data('menu');

		if( !target.hasClass('selected') && !isAnimating ) {
			//if user has selected a section different from the one alredy visible - load the new content
			triggerAnimation(sectionTarget, true);
		}

		firstLoad = true;
	});

	//detect the 'popstate' event - e.g. user clicking the back button
	$(window).on('popstate', function() {
  	if( firstLoad ) {
	    /*
	    Safari emits a popstate event on page load - check if firstLoad is true before animating
	    If it's false - the page has just been loaded
	    */
      	var newPageArray = location.pathname.split('/'),
        //this is the url of the page to be loaded
        newPage = newPageArray[newPageArray.length - 1].replace('.php', '');
      	if( !isAnimating ) triggerAnimation(newPage, false);
    }
    firstLoad = true;
	});

	//start animation
	function triggerAnimation(newSection, bool) {
		isAnimating =  true;
		newSection = ( newSection == '' ) ? 'index' : newSection;

		//update dashboard
		dashboard.find('*[data-menu="'+newSection+'"]').addClass('selected').parent('li').siblings('li').children('.selected').removeClass('selected');
		//trigger loading bar animation
		initializeLoadingBar(newSection);
		//load new content
		loadNewContent(newSection, bool);
	}

	function initializeLoadingBar(section) {
		var	selectedItem =  dashboard.find('.selected'),
			barHeight = selectedItem.outerHeight(),
			barTop = selectedItem.offset().top,
			windowHeight = $(window).height(),
			maxOffset = ( barTop + barHeight/2 > windowHeight/2 ) ? barTop : windowHeight- barTop - barHeight,
			scaleValue = ((2*maxOffset+barHeight)/barHeight).toFixed(3)/1 + 0.001;

		//place the loading bar next to the selected dashboard element
		loadingBar.data('scale', scaleValue).css({
		    height: barHeight,
		    top: barTop
		}).attr('class', '').addClass('loading '+section);
	}

	function loadNewContent(newSection, bool) {
		setTimeout(function(){
			//animate loading bar
			loadingBarAnimation();

			//create a new section element and insert it into the DOM
			var section = $('<section class="cd-section overflow-hidden '+newSection+'"></section>').appendTo(mainContent);

			//load the new content from the proper php file
			section.load(newSection+'.php .cd-section > *', function(event){
				//finish up the animation and then make the new section visible
				var scaleMax = loadingBar.data('scale');

				loadingBar.velocity('stop').velocity({
					scaleY: scaleMax
				}, 400, function(){
					//add the .visible class to the new section element -> it will cover the old one
					section.prev('.visible').removeClass('visible').end().addClass('visible').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
						resetAfterAnimation(section);
					});

					//if browser doesn't support transition
					if( $('.no-csstransitions').length > 0 ) {
						resetAfterAnimation(section);
					}

					var url = newSection+'.php';

					if(url!=window.location && bool){
				        //add the new page to the window.history
				        //if the new page was triggered by a 'popstate' event, don't add it
				        window.history.pushState({path: url},'',url);
				    }
				});
			});

		}, 50);
	}

	function loadingBarAnimation() {
		var scaleMax = loadingBar.data('scale');
		if( newScaleValue + 1 < scaleMax) {
			newScaleValue = newScaleValue + 1;
		} else if ( newScaleValue + 0.5 < scaleMax ) {
			newScaleValue = newScaleValue + 0.5;
		}

		loadingBar.velocity({
			scaleY: newScaleValue
		}, 100, loadingBarAnimation);
	}

	function resetAfterAnimation(newSection) {
		//once the new section animation is over, remove the old section and make the new one scrollable
		newSection.removeClass('overflow-hidden').prev('.cd-section').remove();
		isAnimating =  false;

		$(".cd-section").niceScroll({
			cursorcolor: "#424242", // change cursor color in hex
			cursoropacitymin: 0, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
			cursoropacitymax: 1, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
			cursorwidth: "5px", // cursor width in pixel (you can also write "5px")
			cursorborder: "1px solid #fff", // css definition for cursor border
			cursorborderradius: "5px",
			hwacceleration: true,
			zindex : 9
		});

		//reset your loading bar
		resetLoadingBar();
	}

	function resetLoadingBar() {
		loadingBar.removeClass('loading').velocity({
			scaleY: 1
		}, 1);
	}

	//Scroll Down button code was here.removed it cuz not needed here.
	//It is a martyr. It is no longer needed but it showed the pathway for the fix. ##RESPECT##
	//mainContent.on leads the way - was shown by this martyr

	//3D folding panel JS code
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
	/* open folding content */
	mainContent.on('click', '.cd-gallery a', function(event){
		// alert("gallery clicked");
		event.preventDefault();
		openItemInfo($(this).attr('href'));
	});

	// gallery.on('click', 'a', function(event){
	// 	// alert("gallery clicked");
	// 	event.preventDefault();
	// 	openItemInfo($(this).attr('href'));
	// });

	/* close folding content -close by close button OR close by clicking outside the modal */
	foldingPanel.on('click', '.cd-close', function(event){
		//alert("folding panel close");
		event.preventDefault();
		toggleContent('', false);
	});
	mainContent.on('click','.cd-gallery',function(event){
		// alert("gallery 2 clicked");
		/* detect click on .cd-gallery::before when the .cd-folding-panel is open */
		if($(event.target).is('.cd-gallery') && $('.fold-is-open').length > 0 )
			{
				// alert("into fold is open if")
				toggleContent('', false);
			}
	})
	// gallery.on('click', function(event){
	// 	// alert("gallery 2 clicked");
	// 	/* detect click on .cd-gallery::before when the .cd-folding-panel is open */
	// 	if($(event.target).is('.cd-gallery') && $('.fold-is-open').length > 0 )
	// 		{
	// 			// alert("into fold is open if")
	// 			toggleContent('', false);
	// 		}
	// })

	function openItemInfo(rl3d) {
		// var mq = viewportSize();
		// if( gallery.offset().top > $(window).scrollTop() && mq != 'mobile') {
		// 	/* if content is visible above the .cd-gallery - scroll before opening the folding panel */
		// 	$('body,html').animate({
		// 		'scrollTop': gallery.offset().top
		// 	}, 100, function(){
		// 					toggleContent(rl3d, true);
		// 			});
		// 	} else if( gallery.offset().top + gallery.height() < $(window).scrollTop() + $(window).height()  && mq != 'mobile' ) {
		// 	/* if content is visible below the .cd-gallery - scroll before opening the folding panel */
		// 	$('body,html').animate({
		// 		'scrollTop': gallery.offset().top + gallery.height() - $(window).height()
		// 	}, 100, function(){
		// 					toggleContent(rl3d, true);
		// 			});
		// } else {
		// 	toggleContent(rl3d, true);
		// }
		toggleContent(rl3d, true);
	}

	function toggleContent(rl3d, bool) {
		if( bool ) {
			/* load and show new content */
			var foldingContent = foldingPanel.find('.cd-fold-content');
			foldingContent.load(rl3d+' .cd-fold-content > *', function(event){
				setTimeout(function(){
					mainContent.addClass('overflow-hidden');
					$('body').addClass('overflow-hidden');
					foldingPanel.addClass('is-open');
					mainContent.addClass('fold-is-open');
					///////////////////////////////////////////
					cdsection.addClass('fold-is-open');
					cdsidenav.addClass('fold-is-open');
					//////////////////////////////////////////
				}, 200);
				setTimeout(function(){
					foldingPanel.addClass('transit-done');
				}, 700);
			});
		}
		else {
			/* close the folding panel */
			var mq = viewportSize();
			foldingPanel.removeClass('transit-done');
			foldingPanel.removeClass('is-open');

			//scroll to anchor (top) on closing folding panel
			$("#Anchor").velocity('scroll', { container: $(".cd-fold-content") }, 1000);

			mainContent.removeClass('fold-is-open');
			////////////////////////////////////////////////////
			cdsection.removeClass('fold-is-open');
			cdsidenav.removeClass('fold-is-open');
			////////////////////////////////////////////////////

			(mq == 'mobile' || $('.no-csstransitions').length > 0 )
				/* according to the mq, immediately remove the .overflow-hidden or wait for the end of the animation */
				? $('body').removeClass('overflow-hidden')

				: main3DContent.find('.cd-item').eq(0).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					$('body').removeClass('overflow-hidden');
					main3DContent.find('.cd-item').eq(0).off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
				});
		}

	}

	function viewportSize() {
		/* retrieve the content value of .cd-3Dmain::before to check the actua mq */
		return window.getComputedStyle(document.querySelector('.cd-3Dmain'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
	}

  

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
});
