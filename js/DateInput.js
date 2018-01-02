/**
 * Data input.
 */
$.frontendAssets.register('date-input', function(event) {
  var element = $(event.currentTarget);

  var options = {};
  options['zIndexOffset'] = 1001;
  options['format'] = 'dd/mm/yyyy';
  options['todayHighlight'] = true;
  options['todayBtn'] = true;
  element.datepicker(options);

  element.trigger('extension::date-input::applied');
});
