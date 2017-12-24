
$('.init-select2').on('extension::select2::init',  function(event) {
    element = $(event.currentTarget);

    options = {};
    if (element.data('select2-placeholder')) {
        options.placeholder = element.data('select2-placeholder');
    }
    if (element.data('select2-allow-clear')) {
        options.allowClear = element.data('select2-allow-clear');
    }
    if (element.data('select2-remote-url')) {
        options.ajax = element.data('select2-remote-data');
        options.escapeMarkup = function (markup) { return markup; };
        options.minimumInputLength = 1;
        if (element.data('select2-remote-min-length')) {
            options.minimumInputLength = element.data('select2-remote-min-length');
        }
    }

    if (element.next().hasClass('select2')) {
        element.next().remove();
    }

    element.select2(options);

    element.trigger('extension::select2::applied');
});
