
/**
 * Redactor.
 */
$.frontendAssets.register('redactor', function(event) {
  var element = $(event.currentTarget);

  if (!element.hasClass('redactor-applied')) {
    var options = {};
    if (element.data('toolbar-buttons')) {
        options['buttons'] = element.data('toolbar-buttons');
    }
    if (element.data('toolbar-plugins')) {
        options['plugins'] = element.data('toolbar-plugins');
    }
    element.redactor(options);
    element.addClass('redactor-applied');
    element.trigger('extension::redactor::applied');
  }
});