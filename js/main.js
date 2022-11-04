// THIS IS THE MAIN SCRIPT FILE FOR Dhanak index.html
$(document).ready(function(){
  //setting the active tab on dhanaknav
  $("li#HomeTab").addClass("activeli");

  //Show the promo-modal
  $("#promo-modal").modal('show');

  //Lazy Loading of Carousel Images using lazy-bootstrap-carousel-v3.js
  // <script>
  //Start carousel
  $('.carousel').carousel({interval:false});
  // </script>

  //Lazy Loading normal images and backgrounds using lazyload.jquery.js
  // <script type="text/javascript">
  $("div.lazy").lazyload({
    effect : "fadeIn"
    });
  $("img.lazy").lazyload({
    effect : "fadeIn"
    });

  // </script>

  // TimeCircles
  ///////////////////////////////////////////////////////////////////////////////////////
  $("#revealAbout #revealCountDown").TimeCircles();
  $("#revealAbout #revealCountDown").TimeCircles({ time: {
      Days: {  },
      Hours: {  },
      Minutes: { color: "#2D6444" },
      Seconds: {  }
    }});
  $("#About #CountDown").TimeCircles();
  $("#About #CountDown").TimeCircles({ time: {
      Days: {  },
      Hours: {  },
      Minutes: { color: "#2D6444" },
      Seconds: {  }
    }});
  /////////////////////////////////////////////////////////////////////////////////////

});

$(window).load(function(){

    // Loader fade out
    $("#loader").fadeOut("slow");

    //Skrollr initialization
    var s = skrollr.init({
      forceHeight:false
    });


    //Skrollr Disabling for mobiles etc
    //////////////////////////////////////////////////////////////////////////////////////////////
    var winW=$(window).width();
    var flag=1;
    //includes all tablets and devices smaller than that  with touch screens..desktop touch screens are allowed
    //due to the implementation of Modernizr.touch, even small desktop resized windows output true and skrollr is disabled for them
    if((winW<768)||(Modernizr.touch))
    {
      s.destroy();
      flag=0;
    }
    /////////////////////////////////////////////////////////////////////////////////////////////

    //LogoSplash
    //////////////////////////////////////////////////////////////////////////////////
    //The animation is not being done using native jquery animate cuz its a pain in the ass to rewrite the same animation using jquery now
    dur=1.5;
    start=1;
    $("#Logo").css("-webkit-animation","LogoSplash "+dur+"s ease-out "+start+"s");
    $("#Logo").css("animation","LogoSplash "+dur+"s ease-out "+start+"s");
    $("#Logo").css("animation-fill-mode","forwards");
    ////////////////////////////////////////////////////////////////////////////////

    //NeonTitle Bounce
    /////////////////////////////////////////////////////////////////////////////////////////////
    setTimeout(function(){
      anim={
        animations:['fadeIn'],
        dur:1.5,
        delay:2.5,
        iter:1
        }

      $("div.letter").each(function(){
        $(this).animateCss(anim);
        anim.delay+=0.1;
      });
    },0);

    $("div.date p").hide();
    setTimeout(function(){
      $("div.date p").show(1000);
    },3000);
    ////////////////////////////////////////////////////////////////////////////////////////////


    //Sticky Navabar
    /////////////////////////////////////////////////////////////////////////////////////////////
    var stickynav = $("#dhanaknav").waypoint({
      element: document.getElementById("dhanaknav"),
      handler: function(direction){
        $(this.element).toggleClass("stuck");
        obj={
          animations:['slideInDown'],
          dur:'0.5',
          delay:'0',
          iter:'1'
        	}
        $(this.element).animateCss(obj);
        $(".navtags").toggleClass("nodisplay");
      },
      offset:'-40%'
    });
    ////////////////////////////////////////////////////////////////////////////////////////////

    //skrollr-menu
    ///////////////////////////////////////////////////////////////////////////////////////////
    if(flag)
      {
        skrollr.menu.init(s, {

            animate: true,
            easing: 'swing',
            //How long the animation should take in ms.
            duration: function(currentTop, targetTop) {
                //By default, the duration is hardcoded at 500ms.
                // return 1000;

                //But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
                return Math.abs(currentTop - targetTop) * 0.7;
            },

            //If you pass a handleLink function you'll disable `data-menu-top` and `data-menu-offset`.
            //You are in control where skrollr will scroll to. You get the clicked link as a parameter and are expected to return a number.
            // handleLink: function(link) {
            //     return 400;//Hardcoding 400 doesn't make much sense.
            // },

            //By default skrollr-menu will only react to links whose href attribute contains a hash and nothing more, e.g. `href="#foo"`.
            //If you enable `complexLinks`, skrollr-menu also reacts to absolute and relative URLs which have a hash part.
            //The following will all work (if the user is on the correct page):
            //http://example.com/currentPage/#foo
            //http://example.com/currentDir/currentPage.html?foo=bar#foo
            ///?foo=bar#foo
            complexLinks: true,

            //This event is triggered right before we jump/animate to a new hash.
            // change: function(newHash, newTopPosition) {
            //     //Do stuff
            // },

            //Add hash link (e.g. `#foo`) to URL or not.
            updateUrl: false //defaults to `true`.
        });
      }
    //////////////////////////////////////////////////////////////////////////////////////////////

    // CircleType - AboutUs Section
    //////////////////////////////////////////////////////////////////////////////////////////////
    $("div.CircleText").circleType({fitText:true,radius:172});
    jQuery("div.CircleText").fitText(1, { minFontSize: '10.5rem', maxFontSize: '23rem' });
    $("div.CircleText").css("position","absolute");
    $("div.CircleText").css("top","0");
    $("div.CircleText").css("left","50%");

    if(winW<600){
      $("div.CircleText").circleType({fitText:true,radius:222});
      jQuery("div.CircleText").fitText(1, { minFontSize: '8.5rem', maxFontSize: '19rem' });
      $("div.CircleText").css("position","absolute");
      $("div.CircleText").css("top","0");
      $("div.CircleText").css("left","50%");
    }

    if(winW<400){
      $("div.CircleText").circleType({fitText:true,radius:200});
      jQuery("div.CircleText").fitText(1, { minFontSize: '8.5rem', maxFontSize: '13rem' });
      $("div.CircleText").css("position","absolute");
      $("div.CircleText").css("top","0");
      $("div.CircleText").css("left","50%");
    }
    //////////////////////////////////////////////////////////////////////////////////////////////

    // Modal Effects Trigger
    $(".modal").on("show.bs.modal hidden.bs.modal",function(){
      $("body").toggleClass("ModalOpen");
    });
});

//Easy to use function extend for using animate.css
//////////////////////////////////////////////////////////////////////////////////////////////
$.fn.extend({
  animateCss: function(obj) {

    $(this).css("animation-duration", obj.dur + "s");
    $(this).css("animation-delay", obj.delay + "s");
    $(this).css("animation-iteration-count", obj.iter);


    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    var anim = "";
    for (var i = 0; i < obj.animations.length; i++) {
      anim = anim + "$(this).toggleClass('animated ' + obj.animations[" + i + "]).one(animationEnd, function() { "
    }
    for (var i = 0; i < obj.animations.length; i++) {
      anim = anim + "});"
    }

    eval(anim);
  }
});
////////////////////////////////////////////////////////////////////////////////////////////////////////

//THESE DEFINE THE BACKDROP CLASSES FOR THE TRANSPARENT AND FULLSCREEN MODAL
////////////////////////////////////////////////////////////////////////
$(document).ready(function(){
  $(".modal-transparent").on('show.bs.modal', function () {
    setTimeout( function() {
      $(".modal-backdrop").addClass("modal-backdrop-transparent");
    }, 0);
  });
  $(".modal-transparent").on('hidden.bs.modal', function () {
    $(".modal-backdrop").addClass("modal-backdrop-transparent");
  });
  });
/////////////////////////////////////////////////////////////////////////////

// Vertical Navbar Js
////////////////////////////////////////////////////////////////////////////
jQuery(document).ready(function($){
	var	scrolling = false;
	var contentSections = $('.cd-section'),
		verticalNavigation = $('.cd-vertical-nav'),
		navigationItems = verticalNavigation.find('a'),
		navTrigger = $('.cd-nav-trigger'),
		scrollArrow = $('.cd-scroll-down');
		var navigationItem;

		var wp1 = $("#Cover").waypoint({
      handler: function(direction){
        navigationItem = navigationItems.filter('[href^="#'+ "Cover" +'"]');
				navigationItems.removeClass("active");
				// if(direction=="down")
					navigationItem.addClass("active");
      },
			offset:"50%"
    });
		var wp2 = $("#About").waypoint({
      handler: function(direction){
        navigationItem = navigationItems.filter('[href^="#'+ "About" +'"]');
				navigationItems.removeClass("active");
				// if(direction=="down")
					navigationItem.addClass("active");
      },
			offset:"50%"
    });
		var wp3 = $("#Filler").waypoint({
      handler: function(direction){
        navigationItem = navigationItems.filter('[href^="#'+ "Filler" +'"]');
				navigationItems.removeClass("active");
				// if(direction=="down")
					navigationItem.addClass("active");
      },
			offset:"50%"
    });
		var wp4 = $("#Checkout").waypoint({
      handler: function(direction){
        navigationItem = navigationItems.filter('[href^="#'+ "Checkout" +'"]');
				navigationItems.removeClass("active");
				// if(direction=="down")
					navigationItem.addClass("active");
      },
			offset:"50%"
    });
		var wp5 = $("#sponsors").waypoint({
      handler: function(direction){
        navigationItem = navigationItems.filter('[href^="#'+ "sponsors" +'"]');
				navigationItems.removeClass("active");
				// if(direction=="down")
					navigationItem.addClass("active");
      },
			offset:"50%"
    });
		var wp6 = $("#Contact").waypoint({
      handler: function(direction){
        navigationItem = navigationItems.filter('[href^="#'+ "Contact" +'"]');
				navigationItems.removeClass("active");
				// if(direction=="down")
					navigationItem.addClass("active");
      },
			offset:"50%"
    });
		var wp7 = $("#map").waypoint({
      handler: function(direction){
        navigationItem = navigationItems.filter('[href^="#'+ "map" +'"]');
				navigationItems.removeClass("active");
				// if(direction=="down")
					navigationItem.addClass("active");
      },
			offset:"50%"
    });
});
/////////////////////////////////////////////////////////////////////////////


//Skrollr Menu
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*! skrollr-menu 1.0.3 (2015-06-19) | Alexander Prinzhorn - https://github.com/Prinzhorn/skrollr-menu | Free to use under terms of MIT license */
(function(t,e){"use strict";var n=500,a="sqrt",o=1,r="data-menu-top",i="data-menu-offset",u="data-menu-duration",c="data-menu-ignore",l=e.skrollr,s=e.history,f=!!s.pushState,h=function(e){return e!==t&&e?"A"===e.tagName.toUpperCase()?e:h(e.parentNode):!1},p=function(t){if(1===t.which||0===t.button){var e=h(t.target);e&&m(e)&&t.preventDefault()}},m=function(n,a){var o;if(y){if(n.hostname!==e.location.hostname)return!1;if(n.pathname!==t.location.pathname)return!1;o=n.hash}else o=n.getAttribute("href");if(!/^#/.test(o))return!1;if(!a&&null!==n.getAttribute(c))return!1;var l,h;if(h=T?T(n):n.getAttribute(r),null!==h)l=/p$/.test(h)?h.slice(0,-1)/100*t.documentElement.clientHeight:+h*k;else{var p=t.getElementById(o.substr(1));if(!p)return!1;l=v.relativeToAbsolute(p,"top","top");var m=p.getAttribute(i);null!==m&&(l+=+m)}f&&N&&!a&&s.pushState({top:l},"",o);var d=parseInt(n.getAttribute(u),10),q=A(v.getScrollTop(),l);return isNaN(d)||(q=d),E&&E(o,l),S&&!a?v.animateTo(l,{duration:q,easing:b}):g(function(){v.setScrollTop(l)}),!0},d=function(){if(e.location.hash&&t.querySelector){var n=t.querySelector('a[href="'+e.location.hash+'"]');n||(n=t.createElement("a"),n.href=e.location.hash),m(n,!0)}},g=function(t){e.setTimeout(t,1)};l.menu={},l.menu.init=function(r,i){v=r,i=i||{},b=i.easing||a,S=i.animate!==!1,A=i.duration||n,T=i.handleLink,k=i.scale||o,y=i.complexLinks===!0,E=i.change,N=i.updateUrl!==!1,"number"==typeof A&&(A=function(t){return function(){return t}}(A)),l.addEvent(t,"click",p),f&&l.addEvent(e,"popstate",function(t){var e=t.state||{},n=e.top||0;g(function(){v.setScrollTop(n)})},!1),d()},l.menu.click=function(t){m(t)};var v,b,A,S,T,k,y,E,N;g(function(){e.location.hash&&e.scrollTo(0,0)})})(document,window);
///////////////////////////////////////////////////////////////////////////////////////////////////////////

//Google Analytics Data
///////////////////////////////////////////////////////////////////////////
  (function(i,s,o,g,r,a,m){
    i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)
      },i[r].l=1*new Date();
      a=s.createElement(o), m=s.getElementsByTagName(o)[0];
      a.async=1;
      a.src=g;
      m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79735743-1', 'auto');
  ga('send', 'pageview');
////////////////////////////////////////////////////////////////////////////////
