/*
 * © 2012 by Noël Bossart – noelboss.ch
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


		// google maps
		$('.gmap').each(function(){
			var that = this;
			var $t = $(this);

			var myOptions = {
				zoom: 6,
				center: new google.maps.LatLng(47.478232, 9.047241), // Bissfest
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}

			var search = {
				'address': $t.attr('data-address').replace(/\r?\n|\r/g, ", "),
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
				}
			});
		});
	});
})(jQuery);
