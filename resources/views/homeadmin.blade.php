@extends('layouts.app')




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



@section ('map')
</div>
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








  