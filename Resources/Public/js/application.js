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
		var $logo = $('.logo');
		$logo.fadeTo(0,0.9).hover(function(){
			$logo.stop().fadeTo(300,1);
		},function(){
			$logo.stop().fadeTo(300,0.9);
		});
	});
})(jQuery);
