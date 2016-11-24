function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
        scrollwheel: false,
        draggable: false,
        disableDefaultUI: true,        
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false
    };

    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
    
    
    // Multiple Markers
    var markers = [
        ['Bhartiya Jan Sewa Pratishan, Banswara', 23.711083, 74.4557492],
        ['Samtol Foundation, Mumbai', 19.018744, 72.842158],
        ['Seva Sahayog, Pune', 18.506964, 73.838718],
        ['Kamalini Karnabadhir Vidyalaya, Thane',19.181961, 72.978735]
    ];

    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content" style="width:17em;">' +
        '<h4>Bhartiya Jan Sewa Pratishan</h4>' +
        '<p><span class="prefix">Location: </span>Banswara District, Rajasthan</p>' + 
        '<p><span class="prefix"><a href="#1">Find out more</a></p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h4>Samtol Foundation</h4>' +
        '<p><span class="prefix">Location: </span>Thane District Mumbai</p>' + 
        '<p><span class="prefix"><a href="#2">Find out more</a></p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h4>Seva Sahayog, Pune</h4>' +
        '<p><span class="prefix">Location: </span>Pune, Maharashtra</p>' + 
        '<p><span class="prefix"><a href="#3">Find out more</a></p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h4>Kamalini Karnabadhir Vidyalaya, Thane</h4>' +
        '<p><span class="prefix">Location: </span>Thane District, Mumbai</p>' + 
        '<p><span class="prefix"><a href="#4">Find out more</a></p>' +
        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(5);
        google.maps.event.removeListener(boundsListener);
    });
    
}