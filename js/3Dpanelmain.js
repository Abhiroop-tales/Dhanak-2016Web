//url -> rl3d var change



jQuery(document).ready(function($){
	var gallery = $('.cd-gallery'),
		foldingPanel = $('.cd-folding-panel'),
		mainContent = $('.cd-3Dmain');
		// cd-section is from the outer layout
	  //////////////////////////////////////////////////
		cdsection = $(".cd-section");
		cdsidenav = $(".cd-side-navigation");
		//////////////////////////////////////////////////

	/* open folding content */
	gallery.on('click', 'a', function(event){
		alert("gallery clicked");
		event.preventDefault();
		openItemInfo($(this).attr('href'));
	});

	/* close folding content */
	foldingPanel.on('click', '.cd-close', function(event){
		//alert("folding panel close");
		event.preventDefault();
		toggleContent('', false);
	});

	// Close on escape button - not working
	$(document).keyup(function(event){
    	if(event.which=='27'){
				toggleContent('', false);
	    }
    });

	gallery.on('click', function(event){
		// alert("gallery 2 clicked");
		/* detect click on .cd-gallery::before when the .cd-folding-panel is open */
		if($(event.target).is('.cd-gallery') && $('.fold-is-open').length > 0 )
			{
				// alert("into fold is open if")
				toggleContent('', false);
			}
	})

	function openItemInfo(rl3d) {
		var mq = viewportSize();
		if( gallery.offset().top > $(window).scrollTop() && mq != 'mobile') {
			/* if content is visible above the .cd-gallery - scroll before opening the folding panel */
			$('body,html').animate({
				'scrollTop': gallery.offset().top
			}, 100, function(){
	           	toggleContent(rl3d, true);
	        });
	    } else if( gallery.offset().top + gallery.height() < $(window).scrollTop() + $(window).height()  && mq != 'mobile' ) {
			/* if content is visible below the .cd-gallery - scroll before opening the folding panel */
			$('body,html').animate({
				'scrollTop': gallery.offset().top + gallery.height() - $(window).height()
			}, 100, function(){
	           	toggleContent(rl3d, true);
	        });
		} else {
			toggleContent(rl3d, true);
		}
	}

	function toggleContent(rl3d, bool) {
		if( bool ) {
			/* load and show new content */
			var foldingContent = foldingPanel.find('.cd-fold-content');
			foldingContent.load(rl3d+' .cd-fold-content > *', function(event){
				setTimeout(function(){
					$('body').addClass('overflow-hidden');
					foldingPanel.addClass('is-open');
					mainContent.addClass('fold-is-open');
					///////////////////////////////////////////
					cdsection.addClass('fold-is-open');
					cdsidenav.addClass('fold-is-open');
					//////////////////////////////////////////
				}, 100);

			});
		} else {
			/* close the folding panel */
			var mq = viewportSize();
			foldingPanel.removeClass('is-open');
			mainContent.removeClass('fold-is-open');
			////////////////////////////////////////////////////
			cdsection.removeClass('fold-is-open');
			cdsidenav.removeClass('fold-is-open');
			////////////////////////////////////////////////////

			(mq == 'mobile' || $('.no-csstransitions').length > 0 )
				/* according to the mq, immediately remove the .overflow-hidden or wait for the end of the animation */
				? $('body').removeClass('overflow-hidden')

				: mainContent.find('.cd-item').eq(0).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					$('body').removeClass('overflow-hidden');
					mainContent.find('.cd-item').eq(0).off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
				});
		}

	}

	function viewportSize() {
		/* retrieve the content value of .cd-3Dmain::before to check the actua mq */
		return window.getComputedStyle(document.querySelector('.cd-3Dmain'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
	}
});

//jQuery(window).load(funtion($){
	alert("js loaded");
//});
