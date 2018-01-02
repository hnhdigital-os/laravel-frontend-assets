/**
 * Multiple email inputs.
 */
$.frontendAssets.register('multi-email-input', function(event) {
  var element = $(event.currentTarget);

  if (!element.hasClass('multi-email-input-applied')) {
    element.multiEmail();
    element.addClass('multi-email-input-applied');
    element.addClass('bootstrap-multiemail');

    element.trigger('extension::multi-email-input::applied');
  }
});
