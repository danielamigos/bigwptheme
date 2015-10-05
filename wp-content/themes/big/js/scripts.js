(function ($, root, undefined) {
	
	$(function () {		
		'use strict';
		
	    // DOM ready, take it away
		$('.call-to-action-menu-item').hover(function (event) {
		    $(this).find('.call-to-action-hidden-desription').slideDown();
		}, function () {
		    $(this).find('.call-to-action-hidden-desription').slideUp();
		});
	});
	
})(jQuery, this);
