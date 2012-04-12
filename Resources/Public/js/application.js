/*
 * © 2012 by Noël Bossart – sagenja.ch
 */
;
(function($){
	$(document).ready(function(){
		$('.fancybox').fancybox({
			prevEffect : 'none',
			nextEffect : 'none',
			
			topRatio: 0.5,
			
			maxHeight: $('body').height()-150,

			closeBtn  : true,
			arrows    : true,
			nextClick : true,
			
			fitToView : true
		});
	});
})(jQuery);
