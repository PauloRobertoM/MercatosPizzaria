var map;
$(document).ready(function(){
	map = new GMaps({
		el: '#map',
		lat: -5.749878,
		lng: -35.244384
	});

	map.addMarker({
		lat: -5.749878,
		lng: -35.244384,
		title: 'Mercatos Pizzaria',
		infoWindow: {
			content: '<p>Mercatos Pizzaria.</p>'
		}
	});
});