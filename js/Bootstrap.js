
/**
 * Bootstrap Tooltip.
 */
$.frontendAssets.register('bs-tooltip', function(event) {
  $(this).data('toggle', 'tooltip');
  if (typeof $(this).tooltip == 'function') {
    $(this).tooltip('dispose');
  }
  $(this).tooltip();

  $(this).trigger('extension::bs-tooltip::applied');
});
