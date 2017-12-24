
$('.init-date-input').on('extension::date-input::init',  function(event) {
    element = $(event.currentTarget);

    options = {};
    options['zIndexOffset'] = 1001;
    options['format'] = 'dd/mm/yyyy';
    options['todayHighlight'] = true;
    options['todayBtn'] = true;
    element.datepicker(options);

    element.trigger('extension::date-input::applied');
});
