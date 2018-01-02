
/**
 * Bootstrap Tooltip.
 */
$.frontendAssets.register('bs-tooltip', function(event) {
  $(this).data('toggle', 'tooltip');
  $(this).tooltip();

  $(this).trigger('extension::bs-tooltip::applied');
});
