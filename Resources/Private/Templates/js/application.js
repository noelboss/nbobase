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
