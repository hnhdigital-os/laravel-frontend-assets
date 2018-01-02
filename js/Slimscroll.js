
/**
 * Slimscroll
 */
$.frontendAssets.register('slimscroll', function(event) {
  var element = $(event.currentTarget);

  var options = {
    touchScrollStep: 50,
    alwaysVisible: true
  };

  if (element.data('slimscroll-height')) {
    options.height = element.data('slimscroll-height');
  }
  element.slimScroll(options);

  element.trigger('extension::slimscroll::applied');
});
