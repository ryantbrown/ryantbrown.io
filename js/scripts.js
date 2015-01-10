(function ($, root, undefined) {
	// syntax highlight
    // using WP plugin for now
	// hljs.initHighlightingOnLoad();

	// dual screen pop up window
	var pop = function(url, title, w, h) {

		var dualScreenLeft = window.screenLeft != undefined
			? window.screenLeft
			: screen.left;

		var dualScreenTop = window.screenTop != undefined
			? window.screenTop
			: screen.top;

		var width = window.innerWidth
			? window.innerWidth
			: document.documentElement.clientWidth
			? document.documentElement.clientWidth
			: screen.width;

		var height = window.innerHeight
			? window.innerHeight
			: document.documentElement.clientHeight
			? document.documentElement.clientHeight
			: screen.height;

		var left = ((width / 2) - (w / 2)) + dualScreenLeft;
		var top = ((height / 2) - (h / 2)) + dualScreenTop;
		var newWindow = window.open(url,title,'location=no,scrollbars=yes,width='+w+',height='+h+',top='+top+',left='+left);

		if (window.focus) {
			newWindow.focus();
		}
	}

	$(function(){

		'use strict';

		// override share links and open in pop up window
		$('.share a').on("click", function(evt){
			evt.preventDefault();
			pop($(this).attr('href'), $(this).attr('title'), 600, 450);
		});

		// home page auto type
		setTimeout(function(){
			$(".typed").typed({
				strings: [
					"Interactive",
					"PHP",
					"Frontend",
					"JavaScript",
					"Full Stack"
				],
				typeSpeed: 100,
				startDelay: 0,
				backSpeed: 50,
				backDelay: 1500,
				callback: function() {
					$('.typed-cursor').remove();
				}
			});
		}, 2000);

		// enable tooltips
		$('[data-toggle="tooltip"]').tooltip();

		// activate listing links
		$('.post-left.listing').on("click", function(){
			window.location = $(this).data('url');
		});

		// cookie is stored if they have used the sidebar in the last 7 days
		if($.cookie('teased') === undefined) {
			// show the sidebar to let user know it exists
			var tease_swipe = setInterval(function(){
				// only show if its mobile
				if($('.post-sidebar').css('position') == 'fixed') {
					$('.post-sidebar').addClass('half');
					setTimeout(function(){
						$('.post-sidebar').removeClass('half');
					}, 500);
				}
			}, 10000);
		}

		// swipe menu
		$(".post-content").swipe({
			swipeLeft:function(){
				if( ! $('.post-sidebar').hasClass('on')) {
					$('.post-sidebar').addClass('on');
					// stop the tease interval
					clearInterval(tease_swipe);
					// set cookie to disable tease on future page views
					$.cookie('teased', 'yes', {
						expires: 7,
						path: '/'
					});
				}
			},
			swipeRight: function(){
				if($('.post-sidebar').hasClass('on')) {
					$('.post-sidebar').removeClass('on');
				}
			},
			allowPageScroll: "auto"
		});




	});
	
})(jQuery, this);