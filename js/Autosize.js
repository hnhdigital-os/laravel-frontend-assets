/**
 * Autosize texareas.
 */
$.frontendAssets.register('autosize', function(event) {
  autosize($(this));

  element.trigger('extension::autosize::applied');
});
