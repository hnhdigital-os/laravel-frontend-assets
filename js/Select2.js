/**
 * Select2.
 */
$.frontendAssets.register('select2', function(event) {
  var element = $(event.currentTarget);

  var options = {};

  // Specify the placeholder.
  if (element.data('select2-placeholder')) {
    options.placeholder = element.data('select2-placeholder');
  }

  // Allow clearing of selection.
  if (element.data('select2-allow-clear')) {
    options.allowClear = element.data('select2-allow-clear');
  }

  // Specify ajax in full.
  if (element.data('select2-remote-ajax')) {
    options.ajax = element.data('select2-remote-url');
  }

  // Specify by URL (and other data attributes).
  if (element.data('select2-remote-url')) {

    // Specify remote source of options.
    options.ajax = {
      url: element.data('select2-remote-url'),
      dataType: 'json',
    };

    // Specify data function.
    if (element.data('select2-remote-data')) {
      options.ajax.data = element.data('select2-remote-data');
    }

    // Specify processResults function.
    if (element.data('select2-remote-process-results')) {
      options.ajax.processResults = element.data('select2-remote-process-results');
    }

    // Override the data type.
    if (element.data('select2-remote-data-type')) {
      options.ajax.dataType = element.data('select2-remote-data-type');
    }

    options.escapeMarkup = function(markup) {
      return markup;
    };

    options.minimumInputLength = 1;

    // Override the minimum input length.
    if (element.data('select2-remote-min-length')) {
      options.minimumInputLength = element.data('select2-remote-min-length');
    }

    // Specify the delay.
    if (element.data('select2-remote-delay')) {
      options.delay = element.data('select2-remote-delay');
    }

    // Specify the transport.
    if (element.data('select2-remote-transport')) {
      options.transport = element.data('select2-remote-transport');
    }
  }

  if (element.next().hasClass('select2')) {
    element.next().remove();
  }

  element.select2(options);

  element.trigger('extension::select2::applied');
});
