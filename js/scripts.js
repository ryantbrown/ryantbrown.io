(function ($, root, undefined) {

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
		var newWindow = window.open(url,title,'scrollbars=yes,width='+w+',height='+h+',top='+top+',left='+left);

		if (window.focus) {
			newWindow.focus();
		}
	}

	$(function () {

		'use strict';

		$(window).bind("load", function() {
			$('.title').addClass('on');
			$('nav').addClass('on');
			$('.logo').addClass('on');
			$('.content').addClass('on');
		});

		$('.share a').on("click", function(evt){
			evt.preventDefault();
			pop($(this).attr('href'), $(this).attr('title'), 600, 450); //$(this).data('w'), $(this).data('h'));
		});

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

		$('[data-toggle="tooltip"]').tooltip();


		$('.post-left.listing').on("click", function(){
			window.location = $(this).data('url');
		});

		$('body').on('swipeleft', function(){
			if( ! $('.post-sidebar').hasClass('on')) {
				$('.post-sidebar').addClass('on');
			}
		});

		$('.post-sidebar').on('swiperight', function(){
			if($('.post-sidebar').hasClass('on')) {
				$('.post-sidebar').removeClass('on');
			}
		});

	});
	
})(jQuery, this);