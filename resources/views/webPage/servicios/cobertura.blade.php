@extends('webPage.layout.app')

@section('title', 'cobertura')

@section('content')
<main class="" style="width: 100%;margin: auto; max-width: 1560px;">s

    <section class="section_cobertura">
        <h3 class="cobertura_titulo">Consulta nuestra cobertura</h3>
        <div class="cobertura_mapa mapa" id="map" ></div>
    </section>
</main>
<script>
    var citymap = {
        chiclayo: {
            center: {lat: -6.7815551, lng: -79.8841463},
            population: 524442
        }
    };


    function initMap() {
        var latlng = new google.maps.LatLng(-6.7784183,  -79.8839025);
        var draggable = true;
        var myOptions = {
            zoom: 8,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            draggable: draggable,
            zoomControl: true,
            mapTypeControl: false,
            streetViewControl: false,
            scrollwheel: false
           /* styles:
            [
                {
                    'featureType': 'landscape.natural',
                    'stylers':[
                        {'color':'#C0C0C0'}
                    ]
                }
            ]*/
        };
        var map = new google.maps.Map(document.getElementById("map"), myOptions);

       /* var marker = new google.maps.Marker({
            position: latlng, map: map
        });
*/

        for (var city in citymap) {
            // Add the circle for this city to the map.
            var cityCircle = new google.maps.Circle({
                strokeColor: '#147AA0',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: '#1FB8F0',
                fillOpacity: 0.35,
                map: map,
                center: citymap[city].center,
                radius: Math.sqrt(citymap[city].population) * 100
            });
        }
    }


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm1ZqSRdgqDpY2XPEwJb835I71SftfeYA&callback=initMap"
        async defer>
</script>
@endsection

