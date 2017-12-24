
$('.init-dropzone').on('extension::time-input::init',  function(event) {
    element = $(event.currentTarget);

    if (this.nodeName.toLowerCase() == 'input') {
        if (element.hasClass('ui-timepicker-input')) {
            element.timepicker('remove');
        } else {
            element.data('original', $("<div />").append(element.clone()).html());
        }
        element.timepicker({});

        element.trigger('extension::dropzone::applied');
    }
});
