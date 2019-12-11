


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>INFIMAP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- leaflet --}}

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{config('config/leaflet')}}" rel="stylesheet">

        {{-- leaflet-locatecontrol --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
        
        {{-- <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script> --}}

        



        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>

        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>

        {{-- Draw CDN --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>

        {{-- CDN leaflet-ajax --}}
        <script src="//cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/0.2.0/leaflet.ajax.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/0.2.0/leaflet.ajax.min.js"></script>


        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 10vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #mapid { height: auto; }

        </style>
    </head>
    <body>
        <div id="app">
        <div class="flex-left position-ref full-height">
            @if (Route::has('login'))
            <a class="navbar-brand"  >
                    <img src="img/infisea.png" 
                    width="150px" style="margin-left: 85px;margin-top: 5px ; padding: auto color:white; posision:left;"/>
            
            </a>
                <div class="top-right links"> 

                    @auth
                        <a href="{{ url('/homeadmin') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            
        </div>
        </div>
        
    {{-- maps --}}
            
            
            
    <div class="mapid">
        <div class="container-fluid ">


                <div class="row">
        
        
                        <div id="mapid" style="width: 600px; height: 600px; " class="col-md-12 leaflet-popup-content-wrapper"></div>
                        <script>
                        
                            var mymap = L.map('mapid').setView([-6.2386931,106.9056593],11,15);

    
                            
                     
                     
                            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                                // maxZoom: 80,
                                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
                                
                            }).addTo(mymap);

                            

                            //jika di klick menampolkan longitut dan langitut
                            var popup = L.popup();
                            
                            function onMapClick(e) {
                                popup
                                    .setLatLng(e.latlng)
                                    .setContent("You clicked the map at " + e.latlng.toString())
                                    .openOn(mymap);
                            }
                            mymap.on('click', onMapClick);

                        



                            // membuat marker dan poopup keterangan

                            var marker = L.marker([-6.175897, 106.827149]).addTo(mymap);
                            marker.bindPopup("<b>Hello !</b><br>I am a Monas.");

                            var marker = L.marker([-6.201902, 106.807011]).addTo(mymap);
                            marker.bindPopup("<b>Hello !</b><br>I am a Infimap.").openPopup();

                            var marker = L.marker([-6.218647, 106.802645]).addTo(mymap);
                            marker.bindPopup("<b>Hello !</b><br>I am a Gelora Bung karno.");

                            

                            var marker = L.marker([-6.258684, 106.893368]).addTo(mymap);
                            marker.bindPopup("<b>Hello !</b><br>I am a Halim.");


                            var polygon = L.polygon([

                                [-6.171634, 106.823244],

                                [-6.175722, 106.823244],

                                [-6.171805, 106.829166],

                            ]).addTo(mymap);
                                polygon.bindPopup("<b>Monas</b>");


                            // Draw Controll
                            var drawnItems = new L.FeatureGroup();

                                            mymap.addLayer(drawnItems);
                                            var drawControl = new L.Control.Draw({
                                                edit: {
                                                    featureGroup: drawnItems
                                                }
                                            });
                                            mymap.addControl(drawControl);  

                                            //add layer
                                            mymap.on('draw:created', function (e) {
                                                drawnItems.addLayer(e.layer);
                                            });
                                            

                            
                        // draw edit   
                            
    // geojson

//     var geojsonFeature = {
//     "type": "Feature",
//     "properties": {
//         "name": "Coors Field",
//         "amenity": "Baseball Stadium",
//         "popupContent": "This is where the Rockies play!"
//     },
//     "geometry": {
//         "type": "Point",
//         "coordinates": [-104.99404, 39.75621]
//     }
// };L.geoJSON(geojsonFeature).addTo(mymap);


                            // pewarnaan line peta
                            var myStyle = {
                                "color": "#ff7800",
                                "weight": 5,
                                "opacity": 0.65
                            };
                            // mengambil geojson berdasarkan file di dalam direktori public
                            function popUp(f,l){
                                var out = [];
                                if (f.properties){
                                    for(key in f.properties){
                                        out.push(key+": "+f.properties[key]);
                                    }
                                    l.bindPopup(out.join("<br />"));
                                }
                            }
                            var jsonBekasi = new L.GeoJSON.AJAX(["SHP_data/PROVINSI_DKI_JAKARTA.geojson"],{onEachFeature:popUp,style: myStyle}).addTo(mymap);

                            // mengambil geojson berdasarkan file di dalam direktori public
                            function popUp(f,l){
                                var out = [];
                                if (f.properties){
                                    for(key in f.properties){
                                        out.push(key+": "+f.properties[key]);
                                    }
                                    l.bindPopup(out.join("<br />"));
                                }
                            }
                            var jsonBekasi = new L.GeoJSON.AJAX(["SHP_data/Bekasi_Boundary_Disolved.geojson"],{onEachFeature:popUp}).addTo(mymap);

                            // mengambil geojson berdasarkan file di dalam direktori public
                            function popUp(f,l){
                                var out = [];
                                if (f.properties){
                                    for(key in f.properties){
                                        out.push(key+": "+f.properties[key]);
                                    }
                                    l.bindPopup(out.join("<br />"));
                                }
                            }
                            var jsonBekasi = new L.GeoJSON.AJAX(["SHP_data/ContourSeribu_05mKMZ.geojson"],{onEachFeature:popUp}).addTo(mymap);



// line geojson koordinate
var myLines = [{
    "type": "LineString",
    "coordinates": [[-100, 40], [-105, 45], [-110, 55]]
}, {
    "type": "LineString",
    "coordinates": [[-105, 40], [-110, 45], [-115, 55]]
}];

var myLayer = L.geoJSON().addTo(mymap);
myLayer.addData(geojsonFeature);


// Line Geojson kordinate
var myLines = [{
    "type": "LineString",
    "coordinates": [[-100, 40], [-105, 45], [-110, 55]]
}, {
    "type": "LineString",
    "coordinates": [[-105, 40], [-110, 45], [-115, 55]]
}];
// line warna
var myStyle = {
    "color": "#ff7800",
    "weight": 5,
    "opacity": 0.65
};

L.geoJSON(myLines, {
    style: myStyle
}).addTo(mymap);

var states = [{
    "type": "Feature",
    "properties": {"party": "Republican"},
    "geometry": {
        "type": "Polygon",
        "coordinates": [[
            [-104.05, 48.99],
            [-97.22,  48.98],
            [-96.58,  45.94],
            [-104.03, 45.94],
            [-104.05, 48.99]
        ]]
    }
}, {
    "type": "Feature",
    "properties": {"party": "Democrat"},
    "geometry": {
        "type": "Polygon",
        "coordinates": [[
            [-109.05, 41.00],
            [-102.06, 40.99],
            [-102.03, 36.99],
            [-109.04, 36.99],
            [-109.05, 41.00]
        ]]
    }
}];

L.geoJSON(states, {
    style: function(feature) {
        switch (feature.properties.party) {
            case 'Republican': return {color: "#ff0000"};
            case 'Democrat':   return {color: "#0000ff"};
        }
    }
}).addTo(mymap);


var geojsonMarkerOptions = {
    radius: 8,
    fillColor: "#ff7800",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.8
};

L.geoJSON(someGeojsonFeature, {
    pointToLayer: function (feature, latlng) {
        return L.circleMarker(latlng, geojsonMarkerOptions);
    }
}).addTo(mymap);

// Add the iframe in a marker tooltip using the custom feature properties
myLayer.on('layeradd', function(e) {
    var marker = e.layer,
        feature = marker.feature;

    // Create custom popup content from the GeoJSON property 'video'
    var popupContent =  feature.properties.video;

    // bind the popup to the marker http://leafletjs.com/reference.html#popup
    marker.bindPopup(popupContent,{
        closeButton: false,
        minWidth: 320
    });
});

// Add features to the map
myLayer.setGeoJSON(geoJson);addTo(mymap);



var someFeatures = [{
    "type": "Feature",
    "properties": {
        "name": "Coors Field",
        "show_on_map": true
    },
    "geometry": {
        "type": "Point",
        "coordinates": [-104.99404, 39.75621]
    }
}, {
    "type": "Feature",
    "properties": {
        "name": "Busch Field",
        "show_on_map": false
    },
    "geometry": {
        "type": "Point",
        "coordinates": [-104.98404, 39.74621]
    }
}];

L.geoJSON(someFeatures, {
    filter: function(feature, layer) {
        return feature.properties.show_on_map;
    }
}).addTo(mymap);
    

                        
                </script>
                
                
                </div>
                
                
                        
            </div>
        

            
        </div>
                
            
    
    </div>

</body>




</html>
