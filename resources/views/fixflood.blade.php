


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Fixflood</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- leaflet --}}

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{config('config/leaflet')}}" rel="stylesheet">

        {{-- leaflet-locatecontrol --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
        
        <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>

        
          

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

        <!--Add mapbox.js -->
        <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.js'></script>
        <link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.css' rel='stylesheet' />

        <!--Add draw plugin Mapbox-->
        <link rel='stylesheet' href='//api.tiles.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.css' />
        <script src='//api.tiles.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.js'></script>

        {{-- Control Layer  --}}
        <link href='//cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/images/layers-2x.png'rel='stylesheet' />
        <script src=https://cdn.jsdelivr.net/npm/leaflet-panel-layers@1.2.5/dist/leaflet-panel-layers.src.min.js></script>

        {{-- <script scr='resources/leaflet'></script> --}}
       
        {{-- leaflet material design --}}
        {{-- <script src=https://cdn.jsdelivr.net/npm/leaflet-panel-layers@1.2.5/dist/leaflet-panel-layers.src.min.js></script> 
        <script src=https://cdn.jsdelivr.net/npm/leaflet-material-controls@1.0.0/src/leaflet-material.min.js></script> 
        <script src="https://cdn.jsdelivr.net/npm/leaflet-material-controls@1.0.0/src/leaflet-material.min.js"></script> --}}

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        {{-- Leaflet.PolylineMeasure https://github.com/ppete2/Leaflet.PolylineMeasure --}}
        <link rel="stylesheet" href="https://ppete2.github.io/Leaflet.PolylineMeasure/Leaflet.PolylineMeasure.css" />
        <script src="https://ppete2.github.io/Leaflet.PolylineMeasure/Leaflet.PolylineMeasure.js"></script>

        {{-- Locate Control CDN --}}
        <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.68.0/src/L.Control.Locate.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        {{-- Fuse.js untuk search --}}

        <script src="js/fuse.min.js"></script>


        {{-- sidebar v2 --}}
        {{-- <link rel="stylesheet" href="css/leaflet-sidebar.css"> --}}
        {{-- <script src="js/leaflet-sidebar.min.js"></script> --}}
        
        {{-- L.control side-bar  --}}
        <link rel="stylesheet" href="js/L.Control.Sidebar.css">
        <script src="js/L.Control.Sidebar.js"></script>


        {{-- Active layer --}}

        {{-- <script src="js/ActiveLayers.js"></script> --}}


        {{-- <script src="css/leaflet-sidebar.css"></script> --}}


        {{-- <script src="js/Leaflet.Control.Custom.js"></script> --}}

        <script src="js/leaflet-measure.js"></script>

        


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

            /* bottom Export */
            #delete, #export {
                position: absolute;
                top:100px;
                right:10px;
                z-index:100;
                background:white;
                color:black;
                padding:6px;
                border-radius:4px;
                font-family: 'Helvetica Neue';
                cursor: pointer;
                font-size:12px;
                text-decoration:none;
            }
                #export {
                        
                        top:140px;
                    }


                

                html, body, #map {
                    height: 10%;
                }

                /* .lorem {
                    font-style: italic;
                    text-align: justify;
                    color: #AAA;
                } */

                /* .leaflet-sidebar-tabs {
                    height :600%;
                } */
               
                /* card colloms */

                /* .card-columns {
                    column-count: 2;
                }
                 */
                 

                 
                
                
        </style>
    </head>
    <body>
        <div id="app" >
            
                
                    <div class="navbar navbar-expand-md navbar-light bg-white shadow-lg rounded" >
                        <div class="container">
                            @if (Route::has('login'))
                            <a class="navbar-brand"  >
                                    <img src="img/pixflood.png" 
                                    width="150px" style="margin: 0px;padding: 0px color:white;"/>
                            
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
        </div>
        
<!-- optionally define the sidebar content via HTML markup -->




       


<div id="searchContainer"></div> 



        
    {{-- maps --}}
  

        <div id="sidebar"  >
                <h1 class="leaflet-sidebar-header ">
                    <strong></strong><p>Layer</p></strong></h1>
                

                      <!-- Tab panes -->
                      
                      <div class="leaflet-sidebar-content">
                            <div id="example"> <!--Here the layer control menu will be added--></div>
                                  
                      </div>
                    

                     
                       <div class="sidebar-pane" id="">  
                        <h1 class="leaflet-sidebar-header"><p>Legend</p></h1>
                        <div class="leaflet-sidebar-content">
                             
                        </div>
                        <span id="layercontrol"></span>
                                <div id="latlng"></div>
   
                     </div>
                    </div>
                </div>

        </div>
            
        
   
    
    
            
        <div class="container-fluid ">

                <div class="row">

        
                        <div id="mapid" style="width: 600px; height: 600px; " class="col-md-12 leaflet-popup-content-wrapper">
                            
                            
  
                            
                            

                       
                        {{-- delete dan export geocode map feature --}}
                        {{-- <div button id='delete' type="button" class="btn btn-info">Delete Features </div> --}}
                        {{-- <div id='delete' class='btn-outline-primary col-md-1'>Delete Features</div>
                        <a href='#' id='export'>Export Features</a> --}}
                  

                        
                     

                        

                        </div>




                        <script>
                        
                            var mymap = L.map('mapid',{ zoomControl: false }).setView([-6.21462, 106.84513],11,15);


                            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                                // maxZoom: 80,
                                
                           }).addTo(mymap);

                            L.control.zoom({
                                                position: 'topright'
                                            }).addTo(mymap);

                            
                            // Add layers to the map
                            var layer =L.control.layers( ({
                                                'Satellite Map': L.mapbox.tileLayer('bobbysud.map-l4i2m7nd', {
                                                    detectRetina: true
                                                }),
                                                'Mapbox Map': L.mapbox.tileLayer('bobbysud.i2pfp2lb', {
                                                    detectRetina: true
                                                }), 
                                                'OSM MAP': L.mapbox.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png',
                                                {
                                                    detectRetina:true
                                                }),
                                                
                                            })
                                           
                                ).addTo(mymap);
                            
// var overlays = {};

// //Init BaseMaps
// var osm = {
//   "OpenStreetMaps": L.tileLayer(
//     "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
//     {
//       minZoom: 2,
//       maxZoom: 19,
//       id: "osm.streets"
//     }
//   )},
//   var googlestreet = {
//   "Google-Map": L.tileLayer(
//     "https://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}",
//     {
//       minZoom: 2,
//       maxZoom: 19,
//       id: "google.street"
//     }
//   ),
//   var satellite = {
//   "Google-Satellite": L.tileLayer(
//     "https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}",
//     {
//       minZoom: 2,
//       maxZoom: 19,
//       id: "google.satellite"
//     }
//   ),
//   var hybrid = {
//   "Google-Hybrid": L.tileLayer(
//     "https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}",
//     {
//       minZoom: 2,
//       maxZoom: 19,
//       id: "google.hybrid"
//     }
//   )
// };

// var sidebarObject = osm.getContainer();
//                     var a = document.getElementById('example')
//                     function setParent(el, newParent){
//                         newParent.appendChild(el);
//                     }
//                     setParent(sidebarObject, a);

// var sidebarObject = googlestreet.getContainer();
//                     var a = document.getElementById('example2')
//                     function setParent(el, newParent){
//                         newParent.appendChild(el);
//                     }
//                     setParent(sidebarObject, a);

// var sidebarObject = satellite.getContainer();
//                     var a = document.getElementById('example3')
//                     function setParent(el, newParent){
//                         newParent.appendChild(el);
//                     }
//                     setParent(sidebarObject, a);




                            
                            // sidebar

                            var sidebar = L.control.sidebar('sidebar',{
                                            position: 'left',
                                            closeButton: false,
                                            container: 'sidebar',
                                            
                                        });
                                        
                                        mymap.addControl(sidebar);

                                        setTimeout(function () {
                                                sidebar.show();
                                            }, 500);


                                        // create HTML on sidebar content
                                        sidebar.getContainer()
                                        

                            var sidebarObject = layer.getContainer();
                            var a = document.getElementById('example')
                            function setParent(el, newParent){
                                newParent.appendChild(el);
                            }
                            setParent(sidebarObject, a);




                            
                                        
                                            
                            //Render Layer Control & Move to Sidebar

                            // var baselayer = L.control.layers(layaerControl,  {
                            //     collapsed: false
                            // })
                            // .addTo(mymap);

                            
                            /* add a button with click listener */
                                        


                            
// measurControl
// var plugin = L.control.measure({
//         //  control position
//         position: 'topleft',
//         //  weather to use keyboard control for this plugin
//         keyboard: true,
//         //  shortcut to activate measure
//         activeKeyCode: 'M'.charCodeAt(0),
//         //  shortcut to cancel measure, defaults to 'Esc'
//         cancelKeyCode: 27,
//         //  line color
//         lineColor: 'red',
//         //  line weight
//         lineWeight: 2,
//         //  line dash
//         lineDashArray: '6, 6',
//         //  line opacity
//         lineOpacity: 1,
//         //  distance formatter
//         // formatDistance: function (val) {
//         //   return Math.round(1000 * val / 1609.344) / 1000 + 'mile';
//         // }
//       }).addTo(mymap)

      // Error edit

      

                            // //var mymap = L.map('mapElementId', options);
                            // //ar measureControl = L.control.measure(options);
                            //                    // measureControl.addTo(mymap);

                            // var mymap = L.map('mapElementId', {
                            //             measureControl: true
                            // });

        


                            // layer control untuk mengambil json dari map
                            // var featureGroup = L.featureGroup().addTo(mymap);

                            // var drawControl = new L.Control.Draw({
                            //                     edit: {
                            //                         featureGroup: featureGroup
                
                            //                     }
                            //                 }).addTo(mymap);

                            // mymap.on('draw:created', function(e) {
                            
                            // // Each time a feaute is created, it's added to the over arching feature group
                            // featureGroup.addLayer(e.layer);
                            // });


                            // // on click, clear all layers
                            // document.getElementById('delete').onclick = function(e) {
                            // featureGroup.clearLayers();
                            // }

                            // document.getElementById('export').onclick = function(e) {
                            // // Extract GeoJson from featureGroup
                            // var data = featureGroup.toGeoJSON();

                            // // Stringify the GeoJson
                            // var convertedData = 'text/json;charset=utf-8,' + encodeURIComponent(JSON.stringify(data));

                            // // Create export
                            // document.getElementById('export').setAttribute('href', 'data:' + convertedData);
                            // document.getElementById('export').setAttribute('download','data.geojson');
                            // }

                           
                            //jika di klick menampolkan longitut dan langitut
                            var popup = L.popup();
                            
                            // function onMapClick(e) {
                            //     popup
                            //         .setLatLng(e.latlng)
                            //         .setContent("You clicked the map at " + e.latlng.toString())
                            //         .openOn(mymap);
                            // }
                            // mymap.on('click', onMapClick);



                            
                                    
                                    // control custom

                                   
                           
                                // locate 

                                // var lc = L.control.locate({
                                //         position: 'topright',
                                //         flyTo:true,
                                //         strings: {
                                //             title: "Show me where I am, yo!"
                                //         }
                                //     }).addTo(mymap);

                                // var search = L.control.custom({
                                //             position: 'topleft',
                                //             content : '<div class="input-group">'+
                                //                     '    <input type="text" class="form-control input-sm" placeholder="Search">'+
                                //                     '    <span class="input-group-btn">'+
                                //                     '        <button class="btn btn-default btn-xs" type="button">Go!</button>'+
                                //                     '    </span>'+
                                //                     '</div>',
                                //             classes : '',
                                //             style   :
                                //             {
                                //                 position: 'absolute',
                                //                 left: '50px',
                                //                 top: '0px',
                                //                 width: '200px',
                                //             },
                                //         })
                                //         search.addTo(mymap);

                                        
                                       

                                // var options = {
                                //             geojsonServiceAddress: "http://yourgeojsonsearchaddress"
                                //             };
                                //             $("#searchContainer").GeoJsonAutocomplete(options)

            


                            // membuat marker dan poopup keterangan

                            // ........

                            // Draw Controll
                            // var drawnItems = new L.FeatureGroup();
                            //                 mymap.addLayer(drawnItems);
                            
                            // var drawControl = new L.Control.Draw({
                            //     edit: {
                            //         featureGroup: drawnItems
                            //     }
                            // });
                            // mymap.addControl(drawControl);  

                            // //add layer
                            // mymap.on('draw:created', function (e) {
                            //     drawnItems.addLayer(e.layer);
                            // });


                             
                            

                            
//     geojson

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
                            // var myStyle = {
                            //     "color": "#ff7800",
                            //     "weight": 5,
                            //     "opacity": 0.65
                            // };
                            // // mengambil geojson berdasarkan file di dalam direktori public
                            // function popUp(f,l){
                            //     var out = [];
                            //     if (f.properties){
                            //         for(key in f.properties){
                            //             out.push(key+": "+f.properties[key]);
                            //         }
                            //         l.bindPopup(out.join("<br />"));
                            //     }
                            // }
                            // var jsonBekasi = new L.GeoJSON.AJAX(["SHP_data/PROVINSI_DKI_JAKARTA.geojson"],{onEachFeature:popUp,style: myStyle}).addTo(mymap);

                            // // mengambil geojson berdasarkan file di dalam direktori public
                            // function popUp(f,l){
                            //     var out = [];
                            //     if (f.properties){
                            //         for(key in f.properties){
                            //             out.push(key+": "+f.properties[key]);
                            //         }
                            //         l.bindPopup(out.join("<br />"));
                            //     }
                            // }
                            // var jsonBekasi = new L.GeoJSON.AJAX(["SHP_data/Bekasi_Boundary_Disolved.geojson"],{onEachFeature:popUp}).addTo(mymap);

                            // // mengambil geojson berdasarkan file di dalam direktori public
                            // function popUp(f,l){
                            //     var out = [];
                            //     if (f.properties){
                            //         for(key in f.properties){
                            //             out.push(key+": "+f.properties[key]);
                            //         }
                            //         l.bindPopup(out.join("<br />"));
                            //     }
                            // }
                            // var jsonBekasi = new L.GeoJSON.AJAX(["SHP_data/ContourSeribu_05mKMZ.geojson"],{onEachFeature:popUp}).addTo(mymap);



                           


                        
                </script>
                
                </div>
                
                
                        
            </div>
        

            
        </div>
                
            
    
   

</body>




</html>
