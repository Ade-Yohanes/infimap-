


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
        {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/> --}}

        {{-- <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script> --}}

        {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script> --}}

        {{-- leaflet CDN 1.0.3 --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>

        {{-- leaflet draw 0.4.9 --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.9/leaflet.draw.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.9/leaflet.draw.css" />


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{config('config/leaflet')}}" rel="stylesheet">

        {{-- leaflet-locatecontrol --}}
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" /> --}}
        
        <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>

        
          

        
        {{-- Draw CDN --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw-src.css" /> --}}
        {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>  --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw-src.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw-src.map"></script> --}}
        {{-- <img src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/images/spritesheet-2x.png" alt=""> --}}

        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.10/leaflet.draw.css" /> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.3/leaflet.draw.css" /> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.3/leaflet.draw-src.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.10/leaflet.draw-src.js"></script> --}}
        <!-- leaflet draw custom from https://github.com/Leaflet/Leaflet.draw#customizing-language-and-text-in-leafletdraw-->
        
        
        {{-- local leaflet draw js  --}}
        {{-- <script src="js/leaflet-draw/Leaflet.draw.js"></script> --}}

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
        {{-- <link href='//cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/images/layers-2x.png'rel='stylesheet' /> --}}
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
        <link rel="stylesheet" href="css/leaflet-sidebar.css">
        <script src="js/leaflet-sidebar.min.js"></script>
        
        <script src="js/Leaflet.Control.Custom.js"></script>

        <script src="js/leaflet-measure.js"></script>

        
        {{-- date picker --}}
        <link rel="stylesheet" href="Date-picker/datepicker.css">
        <script src="Date-picker/datepicker.js"></script>
        {{-- <script src="Date-picker/jquery-3.4.1.slim.min.js"></script> --}}
        <!-- jQuery is required datepicker -->
        
        {{-- CDN date picker bootstrap 4 --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css" /> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css.map" /> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> --}}
        

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

                .leaflet-sidebar-tabs {
                    height :600%;
                }
               
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
                                    <img src="img/logo-infimap.png" 
                                    width="150px" style="margin: 0px;padding: 0px color:white;"/>
                            
                            </a>
                                <div class="top-right links"> 
                <div class="top-right links"> 
                                <div class="top-right links"> 
                <div class="top-right links"> 
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
                    </div> 
        </div>
                    </div> 
        </div>
        
<!-- optionally define the sidebar content via HTML markup -->

<div class="container">
        <div class="row">
            

                <div id="sidebar" class="leaflet-sidebar collapsed col-6">

                        <!-- nav tabs -->
                        <div class="leaflet-sidebar-tabs">
                            <!-- top aligned tabs -->
                            <ul role="tablist">
                                <li><a href="#home" role="tab"><i class="fa fa-bars "></i></a></li>
                                {{-- <li><a href="#autopan" role="tab"><i class="fa fa-arrows active"></i></a></li> --}}
                            </ul>
                            
                    
                            <!-- bottom aligned tabs -->
                            {{-- <ul role="tablist">
                                <li><a href="https://github.com/nickpeihl/leaflet-sidebar-v2"><i class="fa fa-github"></i></a></li>
                            </ul> --}}
                        </div>
                    
                        <!-- panel content -->
                        <div class="leaflet-sidebar-content">
                            
                            
                            
                            <div class="leaflet-sidebar-pane" id="home">
                                
                    
                                
                                {{-- <p>
                                    <code>Leaflet.control.sidebar({ autopan: true })</code>
                                    makes shure that the map center always stays visible.
                                </p>
                                <p>
                                    The autopan behviour is responsive as well.
                                    Try opening and closing the sidebar from this pane!
                                </p> --}}
                                
                                <div class="accordion" id="accordionExample" role="tablist" >
                                    
                                        <div class="card-header z-depth-1  lighten-4 p-3 mb-2 bg-info text-white" role="tab" id="headingOne">
                                                <h2 class="mb-0">
                                                  <div class="mb-0 text-white  "  data-toggle="collapse" data-target="#collapseOne" >
                                                    1. Select Product
                                                  </div>
                        
                                                </h2>
                                              </div>
                                       
                                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                  <div class="container">
                                                      
                                                        <div class="row">
                                                     
                                                                <div class="card-body b-0%">
                                                                    <div class="container">
                                                                            <div class="img-content">
                                                                                    <div class="img-fluid ">
                                                                                        <img src="img/logo-infimap.png" class="img shadow-sm p-3 mb-5 bg-white rounded" alt="Responsive image" id="infimap">
                                                                                    </div>
                                                                                    <div class="img-fluid">
                                                                                        <img src="img/pixflood.png" class="img shadow-sm p-3 mb-5 bg-white rounded" alt="Responsive image" id="pixflood">
                                                                                    </div>
                                                                            </div>
                                                                                {{-- <img src="..." class="img-fluid" alt="Responsive image"> --}}
                                                                                    
                                                                                    </div>
                                                                                    
                                                                                  </div>
                                                                                 
                                                        
                                                                                </div>


                                                                    </div>
                                                                    
                                                                 
            
            
                                                        </div>
    
    
                                                  </div>
                                                




                                          <div class="card-header z-depth-1  lighten-4 p-3 mb-2 bg-info text-white" id="headingTwo">
                                            <h2 class="mb-0">
                                              <div class="mb-0 text-white  "  data-toggle="collapse" data-target="#collapseOne" >
                                                2. Define Area of Interest
                                              </div>
                    
                                            </h2>
                                          </div>
                                   
                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                              <div class="container">
                                                  
                                                    <div class="row">
                                                 
                                                            <div class="card-body">
                                                      
                                                    
                                                                    <div class="row mx-md-n5 ">
                                                                      
                                                                          <a href="#" class="col-sm px-md-5 p-3 border bg-info text-white" role="button" aria-pressed="true">Draw Polygon </a> 
                                                                          <a href="#" class="col-sm px-md-5 p-3 border bg-info text-white " role="button" aria-pressed="true">Upload Polygon</a>
                                                                    
                                                                    </div>
                                                                    
                                                                  </div>
                                                                 
                                        
                                                                </div>
                                                             
        
        
                                                    </div>


                                              </div>
                                            
                                           
                                        
                    
                    
                    
                                        
                                          <div class=" card-header z-depth-1  lighten-4 p-3 mb-2 bg-info text-white-bold" id="headingTwo">
                                            <h2 class="mb-0">
                                              <div class="mb-0 text-white " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                3. Data Level
                                              </div>
                                            </h2>
                                          </div>
                                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body text-bolt "  >
                                             

                                                                {{-- <div class="card-deck " id="satuan-meter" >
                                                                        <div class="col-sm-6" style="max-width: 18 rem; padding: 1.15%; ">

                                                                            <div class="card border-primary mb-3 border-bottom"   >
                                                                                    <div class="card-body ">
                                                                                      <h5 class="card-title">10 Meters</h5>
                                                                                      <p class="card-text">On demand  </p>
                                                                                      <a href="#" class="btn btn-primary text-white">Get Quote </a>
                                                                                    </div>
                                                                              </div>

                                                                    </div>
                                                                        
                                                                    <div class="col-sm-6" style="max-width: 18 rem; padding: 1.10%;">
                                                                          <div class="card border-dark border-bottom shadow-sm bg-white rounded" >
                                                                                <div class="card-body">
                                                                                  <h5 class="card-title">2 Meters</h5>
                                                                                  <p class="card-text">On demand  </p>
                                                                                  <a href="#" class="btn btn-primary text-white">Get Quote </a>
                                                                                </div>
                                                                          </div>
                                                                    </div>

                                                                    <div class="col-sm-6" style="max-width: 18 rem; padding: 1.10%;">
                                                                          <div class="card border-dark border-bottom " >
                                                                                <div class="card-body">
                                                                                  <h5 class="card-title"> Kilomters</h5>
                                                                                  <p class="card-text">On demand  </p>
                                                                                  <a href="#" class="card-link"><h1>Produck in cart</h1></a>
                                                                                </div>
                                                                          </div>
                                                                    </div>
                                                                </div> --}}

                                                                <div class="row">
                                                                    <div class="container">
                                                                        
                                                                            <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                     <label>Tgl Awal</label>
                                                                                     <div class="input-group date">
                                                                                      <div class="input-group-addon">
                                                                                             <span class="glyphicon glyphicon-th"></span>
                                                                                         </div>
                                                                                         <input placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal">
                                                                                     </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                     <label>Tgl Akhir</label>
                                                                                     <div class="input-group date">
                                                                                      <div class="input-group-addon">
                                                                                             <span class="glyphicon glyphicon-th"></span>
                                                                                         </div>
                                                                                         <input placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir">
                                                                                     </div>
                                                                                    </div>
                                                                                   </div>
                                                                                  </div>

                                                                                  


                                                                    </div>
                                                                        

                                                                 
                                            
                    
                                            </div>
                                          </div>
                                        
                                          
                    
                                          <div class="card-header z-depth-1  lighten-4 p-3 mb-2  bg-info text-white " >   Proses To Check out  </a>
                                            {{-- <div class="card-header p-3 mb-2 bg-info primary"  id="headingThree" > --}}
                                                {{-- <h2 class="mb-0"> --}}
                                                {{-- <div class="mb-0 text-white "  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    3. Proses To Check out
                                                </div>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample"  >
                                                <div class="card-body"> --}}
                    
                                            {{-- </div> --}}
                                          </div>
                                        
                                </div>
                            </div>
                    
                            
                            
                          
                    
                        </div>
                    </div>
                    
                    
                    






            
        </div>
    </div>



       


<div id="searchContainer"></div> 



        
    {{-- maps --}}
 
  
            
        <div class="container-fluid ">




                <div class="row">


                    


                    
        
                        <div id="mapid" style="width: 600px; height: 600px; " class="col-md-12 leaflet-popup-content-wrapper">
                            
                            
  
                            
                            

                       
                        {{-- delete dan export geocode map feature --}}
                        {{-- <div button id='delete' type="button" >Delete Features </div> --}}
                        {{-- <div id='delete' class='btn-outline-primary col-md-1'>Delete Features</div> --}}
                        {{-- <a href='#' id='export'>Export Features</a> --}}
                  

                        
                     

                        

                        </div>




                        <script>
                        
                            var mymap = L.map('mapid').setView([-6.21462, 106.84513],11,15);


                            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                                // maxZoom: 80,
                                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors', measureControl: true
                                
                            }).addTo(mymap);


                            


                            // Add layers to the map
                            // var layerControl=L.control.layers( ({
                            //                 'Satellite Map': L.mapbox.tileLayer('bobbysud.map-l4i2m7nd', {
                            //                     detectRetina: true
                            //                 }),
                            //                 'Mapbox Map': L.mapbox.tileLayer('bobbysud.i2pfp2lb', {
                            //                     detectRetina: true
                            //                 }), 
                            //                 'OSM MAP': L.mapbox.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png',
                            //                 {
                            //                     detectRetina:true
                            //                 }),
                                            
                            //             })
                            // ).addTo(mymap);

                            // draw 0.4.9
                            var editableLayers = new L.FeatureGroup();
mymap.addLayer(editableLayers);

var drawPluginOptions = {
  position: 'topright',
  draw: {
    polygon: true,
    polyline: true,
    circle: false,
    rectangle: false,
    marker: false
  },
  edit: {
    featureGroup: editableLayers, // REQUIRED
    remove: false,
    edit: {
      selectedPathOptions: {
        dashArray: '5, 30',
        fill: true,
        fillColor: '#fe57a1',
        fillOpacity: 0.5,
        // Whether to user the existing layers color
        maintainColor: true
      }
    },
    poly: {
      icon: new L.DivIcon({
        iconSize: new L.Point(12, 12),
        className: 'leaflet-div-icon leaflet-editing-icon my-custom-icon'
      })
    }
  }
};

// Initialise the draw control and pass it the FeatureGroup of editable layers
var drawControl = new L.Control.Draw(drawPluginOptions);
mymap.addControl(drawControl);

mymap.on('draw:created', function(e) {
  var layer = e.layer;
  editableLayers.addLayer(layer);
});
                    



                            
                            // date picker
                            $(function(){
                                $(".datepicker").datepicker({
                                    format: 'yyyy-mm-dd',
                                    autoclose: true,
                                    todayHighlight: true,
                                });
                                })

                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            
                               



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
                            // var popup = L.popup();
                            
                            // function onMapClick(e) {
                            //     popup
                            //         .setLatLng(e.latlng)
                            //         .setContent("You clicked the map at " + e.latlng.toString())
                            //         .openOn(mymap);
                            // }
                            // mymap.on('click', onMapClick);



                            // sidebar

                            var sidebar = L.control.sidebar({ 
                                container: 'sidebar',
                                autopan: true,
                                closeButton: true,
                                 })

                            .addTo(mymap);

                            
                            // add panels dynamically to the sidebar
                                sidebar
                                    // .addPanel({
                                    //     id:   'js-api',
                                    //     tab:  '<i class="fa fa-gear"></i>',
                                    //     title: 'JS API',
                                    //     pane: '<p>The Javascript API allows to dynamically create or modify the panel state.<p/><p><button onclick="sidebar.enablePanel(\'mail\')">enable mails panel</button><button onclick="sidebar.disablePanel(\'mail\')">disable mails panel</button></p><p><button onclick="addUser()">add user</button></b>',
                                    // })
                                    // // add a tab with a click callback, initially disabled
                                    // .addPanel({
                                    //     id:   'mail',
                                    //     tab:  '<i class="fa fa-envelope"></i>',
                                    //     title: 'Messages',
                                    //     button: function() { alert('opened via JS callback') },
                                    //     disabled: true,
                                    // })
                                    // be notified when a panel is opened
                                    sidebar.on('content', function (ev) {
                                        switch (ev.id) {
                                            case 'autopan':
                                            sidebar.options.autopan = true;
                                            break;
                                            default:
                                            sidebar.options.autopan = false;
                                            
                                        }
                                    });

                                    var userid = 0
                                    function addUser() {
                                        sidebar.addPanel({
                                            id:   'user' + userid++,
                                            tab:  '<i class="fa fa-user"></i>',
                                            title: 'User Profile ' + userid,
                                            pane: '<p>user ipsum dolor sit amet</p>',
                                        });
                                    }


                                    

                                    // control custom

                                   
                           
                                // locate 
                                var lc = L.control.locate({
                                        position: 'topright',
                                        flyTo:true,
                                        strings: {
                                            title: "Show me where I am, yo!"
                                        }
                                    }).addTo(mymap);

                                // seacrh
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

                            

                            
        





                             
                            

                            


                </script>
                
                
                </div>
                
                
                        
            </div>
        

            
        </div>
                
            
    
   

</body>




</html>
