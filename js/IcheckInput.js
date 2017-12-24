
$('.init-icheck-input').on('extension::icheck-input::init',  function(event) {
    element = $(event.currentTarget);

    if (!element.hasClass('icheck-applied')) {
        if (!(element.parent().hasClass('config-icheck-input_flat-green')
            || element.parent().hasClass('iradio_flat-green'))) {
            element.addClass('icheck');
            element.addClass('icheckbox_flat-green');
            element.iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
            element.addClass('icheck-applied');
            element.trigger('extension::icheck-input::applied');
        }
    }
});