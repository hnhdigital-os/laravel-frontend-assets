
var googlemap_geocoder;
var googlemap_maps = {};
var googlemap_markers = {};

$('.init-google-maps').on('extension::google-maps::init',  function(event) {
    element = $(event.currentTarget);

    if (typeof googlemap_geocoder == 'undefined') {
        googlemap_geocoder = new google.maps.Geocoder();
    }

    map_zoom =  element.data('map-zoom');
    if (map_zoom == undefined) {
        map_zoom = 14;
    }

    googlemap_maps[element.prop('id')] = new google.maps.Map(document.getElementById(element.prop('id')), {
        center: new google.maps.LatLng(element.data('lat'), element.data('lng')),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: map_zoom
    });
    latlng = {lat: element.data('lat'), lng: element.data('lng')};

    icon_width =  element.data('icon-width');
    if (icon_width == undefined) {
        icon_width = 22;
    }
    icon_height =  element.data('icon-height');
    if (icon_height == undefined) {
        icon_height = 30;
    }

    draggable =  (element.data('draggable') != undefined);

    googlemap_markers[element.prop('id')] = new google.maps.Marker({
        map: googlemap_maps[element.prop('id')],
        position: latlng,
        draggable: draggable,
        icon: {url: element.data('icon-url'), scaledSize: new google.maps.Size(icon_width, icon_height)},
    });

    element.trigger('extension::googlemap::applied');
});
