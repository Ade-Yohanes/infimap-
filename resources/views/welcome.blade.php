


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INFIMAP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- leaflet --}}

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>

        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>



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
                height: 100vh;
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

            #mapid { height: 180px; }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
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

        <div class="content">

        <h1>hellow</h1>

{{-- maps --}}

@section ('maphome')

    <div class="container">
    
    <div class="row">


        <div id="mapid" style="width: 600px; height: 400px; " class="col-md-8 leaflet-popup-content-wrapper"></div>
        <script>
        
            var mymap = L.map('mapid').setView([-6.1753924, 106.8249641], 13);
        
            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox.streets'
            }).addTo(mymap);
        
        
        
            var popup = L.popup();
        
            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent("You clicked the map at " + e.latlng.toString())
                    .openOn(mymap);
            }
        
            mymap.on('click', onMapClick);
        
        </script>
        
        
        <div class="col-md-4 btn-group-vertical">
           

                {{-- <ul><button type="button" class="btn btn-outline-success">REQUEST POINT OF INTEREST</button> </ul>
                <ul><button type="button" class="btn btn-outline-success">REQUEST ROAD NETWORK</button> </ul>
                <ul><button type="button" class="btn btn-outline-success">GEODEMOGRAPHY</button> </ul>
                <ul><button type="button" class="btn btn-outline-success">GEOBUSINESS TOOLS</button> </ul> --}}

                <a class="btn btn-outline-success ml-5 mb-2 p-2" href="https://bathymetrics.shop/#/mappage" target="_blank" rel role="button">REQUEST POINT OF INTEREST</a>
                
                <a class="btn btn-outline-success ml-5 mb-2 p-2" href="#" role="button">REQUEST ROAD NETWORK</a>
                
                <a class="btn btn-outline-success ml-5 mb-2 p-2" href="#" role="button">GEODEMOGRAPHY</a>
                
                <a class="btn btn-outline-success ml-5 mb-2 p-2" href="#" role="button">GEOBUSINESS TOOLS</a>
                
                
        
        
        
        
                
            </main>
    </div>
    
    
</div>

@endsection



@section('footer')
            <div id="sticky-footer" class="ffooter-copyright text-center py-3" center>
                2019 &copy; Ade Yohanes. All rights reserved.
            </div>            
@endsection


</div>

    </body>
</html>
