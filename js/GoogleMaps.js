
/**
 * Google Maps.
 */
$.frontendAssets.register('google-maps', function(event) {
  var element = $(event.currentTarget);

  var map_zoom =  element.data('map-zoom');
  if (map_zoom == undefined) {
    map_zoom = 14;
  }

  $.frontendAssets.storage['google-maps'].maps[element.prop('id')] = new google.maps.Map(document.getElementById(element.prop('id')), {
    center: new google.maps.LatLng(element.data('lat'), element.data('lng')),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoom: map_zoom
  });

  var latlng = {lat: element.data('lat'), lng: element.data('lng')};

  var icon_width =  element.data('icon-width');
  if (icon_width == undefined) {
    icon_width = 22;
  }

  var icon_height =  element.data('icon-height');
  if (icon_height == undefined) {
    icon_height = 30;
  }

  var draggable =  (element.data('draggable') != undefined);

  $.frontendAssets.storage['google-maps'].markers[element.prop('id')] = new google.maps.Marker({
    map: $.frontendAssets.storage['google-maps'].maps[element.prop('id')],
    position: latlng,
    draggable: draggable,
    icon: {url: element.data('icon-url'), scaledSize: new google.maps.Size(icon_width, icon_height)},
  });

  element.trigger('extension::google-maps::applied');
}, function() {  
  $.frontendAssets.storage['google-maps'].geocoder = new google.maps.Geocoder();
  $.frontendAssets.storage['google-maps'].maps = {};
  $.frontendAssets.storage['google-maps'].markers = {};
});
