(function ($, root, undefined) {
	$(function () {
		
		'use strict';

		$(window).bind("load", function() {
			$('.title').addClass('on');
			$('nav').addClass('on');
			$('.logo').addClass('on');
			$('.content').addClass('on');
		});

		$(".typed").typed({
			strings: [
				"PHP",
				"frontend",
				"JavaScript",
				"Python",
				"systems",
				"full stack",
			],
			typeSpeed: 100,
			startDelay: 0,
			backSpeed: 50,
			backDelay: 1500,
			callback: function() {
				$('.typed-cursor').remove();
			}
		});

		$('[data-toggle="tooltip"]').tooltip();


		$('.post-left.listing').on("click", function(){
			window.location = $(this).data('url');
		});

	});
	
})(jQuery, this);
