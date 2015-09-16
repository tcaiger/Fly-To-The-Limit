// Contact Page Map

// load map when the page loads
document.addEventListener('DOMContentLoaded', drawMap);

var map;

function drawMap() {

  	var storeLocation = { lat: -45.02925559725228, lng: 168.6642336845398};
    var storeLocation2 = { lat: -44.6951387985969, lng: 169.13439273834229};

    var mapOptions = {

        center: storeLocation,
        zoom: 15,
        scrollwheel: false,
        mapType: google.maps.MapTypeId.ROADMAP,
        draggable: false
    };

    map = new google.maps.Map(document.querySelector('#map-canvas'), mapOptions);

    var marker = new google.maps.Marker({

        position: storeLocation,
        map: map,
        title: 'Our Home'
    });

    var marker = new google.maps.Marker({

        position: storeLocation,
        map: map,
        title: 'Our Home'
    });

    var marker2 = new google.maps.Marker({

        position: storeLocation2,
        map: map,
        title: 'Our 2Home'
    });

    var popupContent = "visit us here at 21 King Street";

    var infowindow = new google.maps.InfoWindow({
        content: popupContent,
        maxWidth: 200
    });

    google.maps.event.addListener(marker, 'click', function() {

       infowindow.open(map,marker,marker2);

    });
 }



