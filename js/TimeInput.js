
/**
 * Time input.
 */
 $.frontendAssets.register('time-input', function(event) {
  var element = $(event.currentTarget);

  if (this.nodeName.toLowerCase() == 'input') {
    if (element.hasClass('ui-timepicker-input')) {
        element.timepicker('remove');
    } else {
        element.data('original', $("<div />").append(element.clone()).html());
    }
    element.timepicker({});

    element.trigger('extension::time-input::applied');
  }
});
