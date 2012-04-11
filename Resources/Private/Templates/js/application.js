/*
 * © 2012 by Noël Bossart – sagenja.ch
 */
;
(function($){
	$(document).ready(function(){
		// Richtext
		$('.richtext').each(function(i){
			$(this).attr('id', 'richtext'+i);
			new nicEditor({
				buttonList : [
				'bold','italic','underline','strikeThrough','subscript','superscript','html','link'
				]
			}).panelInstance('richtext'+i);
		});
		
		$('[data-toggle]').click(function(e){
			var $t = $($(this).attr('data-toggle'));
			if($t.is(':visible')){
				$t.slideUp(150);
			}else{
				$t.slideDown(100).find('input').val('');
			} 
		});
		
			
		// Slider
		$('.slider').each(function(){
			var $t = $(this);
			var $input = $($t.data('target'));
			var $b = $($t.data('bar'));
			var $p = $b.parent();
			
			var p = $t.data('price'); // total price
			var pc = p/100; // percent
			var status = $t.data('status'); // total payed already
			var share = ($t.data('share') || 0); // exisiting share
			var step = $t.data('step'); // minimal steps
			
			var min = status-share || step; // minimal position
			var v =  (share || step); // current position
			var max = p-status-step;
			
			var options = {
				min: step/pc, // 
				max: ((p-status+share) / pc),
				step: step/pc,
				value: v/pc,
				change: function(event, ui) {
					var v = $t.slider('value');
					updateBar(v);
				}
			};
			
			var updateBar = function(v){
				$input.val((v*pc).toFixed(2));
				var proz = v + (status-share)/pc;
				$b.width(proz + "%");
				console.log(proz*pc);
				$p.removeClass('progress-danger').removeClass('progress-warning').removeClass('progress-success');
				if(proz < 20){
					$p.addClass('progress-danger');
				} else if(proz < 70){
					$p.addClass('progress-warning');
				} 
				if(proz > 99){
					$p.addClass('progress-success');
				}
			}
			updateBar(v/pc);
			$t.slider(options);
		});
		
		$('.error input:eq(0)').focus();

		// Gallery
		$('.nivoSlider').nivoSlider();
		
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
		
		$('.fancybox-thumbs').fancybox({
			prevEffect : 'none',
			nextEffect : 'none',
			
			topRatio: 0.9,
			
			maxHeight: $('body').height()-150,

			closeBtn  : false,
			arrows    : true,
			nextClick : true,
			
			fitToView : true,

			helpers : {
				thumbs : {
					width  : 50,
					height : 50
				}
			}
		});

		// google maps
		$('.gmap').each(function(){

			var that = this;
			var $t = $(this);

			var myOptions = {
				zoom: 6,
				center: new google.maps.LatLng(47.3686498, 8.539182500000038),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}

			var search = {
				'address': $t.attr('data-address'),
				region: 'sgg'
			};
			var address = $t.html();
			var map = new google.maps.Map(that, myOptions);
			var gc  = geocoder = new google.maps.Geocoder();
			var infowindow = new google.maps.InfoWindow();
			var marker;

			gc.geocode( search , function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					marker = new google.maps.Marker({
						map: map,
						position: results[0].geometry.location
					});
					map.setZoom($t.attr('data-zoom')*1);
					map.setCenter(results[0].geometry.location);
					if($t.attr('data-infowindow')){
						infowindow.setContent(address);
						infowindow.open(map, marker);
					}
				} else {
					//console.log([results,status]);
				}
			});
		});
	});


})(jQuery);
