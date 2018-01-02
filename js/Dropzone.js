/**
 * Dropzone.
 */
$.frontendAssets.register('dropzone', function(event) {
  var element = $(event.currentTarget);

  if (element.find('.dz-message').length == 0) {
    var options = element.data('dropzone-options');
    if (options === '') {
      options = {};
    }
    options['init'] = function() {
      if (typeof element.data('dropzone-init') == 'function') {
        element.data('dropzone-init')();
      }
    };
    element.dropzone(options);

    element.trigger('extension::dropzone::applied');
  }
});
