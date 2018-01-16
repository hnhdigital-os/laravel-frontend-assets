/**
 * Autosize texareas.
 */
$.frontendAssets.register('autosize', function(event) {
  autosize($(this));

  $(this).trigger('extension::autosize::applied');
});
