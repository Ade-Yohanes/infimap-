<main class="py-4"> 
        @yield('mapid')


<div id="mapid" style="width: 600px; height: 400px;"></div>
<script>

	var mymap = L.map('mapid').setView([-6.1753924, 106.8249641], 13);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

	// L.marker([-6.2018263,106.8071008]).addTo(mymap)
	// 	.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

	// L.circle([51.508, -0.11], 500, {
	// 	color: 'red',
	// 	fillColor: '#f03',
	// 	fillOpacity: 0.5
	// }).addTo(mymap).bindPopup("I am a circle.");

	// L.polygon([
	// 	[51.509, -0.08],
	// 	[51.503, -0.06],
	// 	[51.51, -0.047]
	// ]).addTo(mymap).bindPopup("I am a polygon.");


	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);

</script>


<div class="col-md-4">
    

      <ul><button type="button" class="btn btn-outline-success btn-group-sm">REQUEST POINT OF INTEREST</button> </ul>
      <ul><button type="button" class="btn btn-outline-success">REQUEST ROAD NETWORK</button> </ul>
      <ul><button type="button" class="btn btn-outline-success">GEODEMOGRAPHY</button> </ul>
      <ul><button type="button" class="btn btn-outline-success">GEOBUSINESS TOOLS</button> </ul>
      
</div>



        
    </main>