@extends('dev.frame')
@section('title')
    Place Autocomplete - Google Maps Sandbox
@endsection
@section('header-styles')
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
    </style>
@endsection()
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="pac-card" id="pac-card">
                    <div id="pac-container">
                        <input id="pac-input" type="text" placeholder="Enter a location">
                    </div>
                </div>
                <div style="height: 500px; width: 500px;" id="map"></div>
                {{--<div id="infowindow-content">--}}
                {{--<img src="" width="16" height="16" id="place-icon">--}}
                {{--<span id="place-name" class="title"></span><br>--}}
                {{--<span id="place-address"></span>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="residential_address">
                    <div class="item">
                        <label for="residential_unit_number">Building Complex</label>
                        <input type="text" id="residential_unit_number" name="residential_unit_number" placeholder="Unit Number" @if(isset($pastApplicationDetails->residential_unit_number))value="{{$pastApplicationDetails->residential_unit_number}}"
                                @endif
                        />
                    </div>
                    <div class="item">
                        <input type="hidden" id="street_number" name="residential_street_number" placeholder="Street Number"/>
                    </div>
                    <div class="item">
                        <label for="residential_street_address">Street Address</label>
                        <input type="text" id="route" name="residential_street_address" placeholder="Street Address" @if(isset($pastApplicationDetails->residential_street_address))value="{{$pastApplicationDetails->residential_street_address}}" @endif required/>
                    </div>
                    <div class="item"><label for="residential_suburb">Suburb</label>
                        <input type="text" id="sublocality_level_1" name="residential_suburb" placeholder="Suburb" @if(isset($pastApplicationDetails->residential_suburb))value="{{$pastApplicationDetails->residential_suburb}}" @endif required/>
                    </div>
                    <div class="item">
                        <label for="residential_city">City</label>
                        <input type="text" id="locality" name="residential_city" placeholder="City" @if(isset($pastApplicationDetails->residential_city))value="{{$pastApplicationDetails->residential_city}}" @endif required/>
                    </div>
                    <div class="item">
                        <label for="residential_zip_code">Postal Code</label>
                        <input type="text" id="residential_zip_code" name="residential_zip_code" placeholder="Postal Code" @if(isset($pastApplicationDetails->residential_zip_code))value="{{$pastApplicationDetails->residential_zip_code}}" @endif required/>
                    </div>
                    <div class="item">
                        <label for="residential_other">Unit Number and extra details (if applicable)</label>
                        <textarea id="residential_other" rows="4" cols="50" type="textarea" name="residential_other" @if(isset($pastApplicationDetails->residential_other))value="{{$pastApplicationDetails->residential_other}}"
                                @endif></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()
@section('custom-scripts')
    <script>
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -25.964428, lng: 28.135958},
                zoom: 13
            });
            var input = document.getElementById('pac-input');
            var autocomplete = new google.maps.places.Autocomplete(input);

            var options = {
                types: ['(cities)'],
                componentRestrictions: {country: "us"}
            };
            // Bind the map's bounds (viewport) property to the autocomplete object,
            // so that the autocomplete requests use the current map bounds for the
            // bounds option in the request.
            autocomplete.bindTo('bounds', map);

            var infowindow = new google.maps.InfoWindow();
            var infowindowContent = document.getElementById('infowindow-content');
            infowindow.setContent(infowindowContent);
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
            });

            autocomplete.addListener('place_changed', function () {
                infowindow.close();
                marker.setVisible(false);
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    // User entered the name of a Place that was not suggested and
                    // pressed the Enter key, or the Place Details request failed.
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);  // Why 17? Because it looks good.
                }
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);
                
                if (place.address_components) {
                    let street_address = place.address_components[0].long_name + ' ' + place.address_components[1].long_name;
                    let suburb = place.address_components[2].long_name;
                    let city = place.address_components[3].short_name;
                    let postal_code = place.address_components[7].short_name;
                    const form = document.querySelector('#residential_address');
                    form.querySelector('#route').value = street_address;
                    form.querySelector('#sublocality_level_1').value = suburb;
                    form.querySelector('#locality').value = city;
                    form.querySelector('#residential_zip_code').value = postal_code;
                }

                // infowindowContent.children['place-icon'].src = place.icon;
                // infowindowContent.children['place-name'].textContent = place.name;
                // infowindowContent.children['place-address'].textContent = address;
                // infowindow.open(map, marker);
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtc10-wXVcJlCt3fC9ABwgKrJrXmWQR38&libraries=places&callback=initMap" async defer></script>
@endsection()