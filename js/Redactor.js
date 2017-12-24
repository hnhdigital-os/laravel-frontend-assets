
$('.init-redactor').on('extension::redactor::init',  function(event) {
    element = $(event.currentTarget);

    if (!element.hasClass('redactor-applied')) {
        options = {};
        if (element.data('toolbar-buttons')) {
            options['buttons'] = element.data('toolbar-buttons');
        }
        if (element.data('toolbar-plugins')) {
            options['plugins'] = element.data('toolbar-plugins');
        }
        element.redactor(options);
        element.addClass('redactor-applied');
        element.trigger('extension::dropzone::applied');
    }
});