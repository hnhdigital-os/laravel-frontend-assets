
$('.init-slimscroll').on('extension::slimscroll::init',  function(event) {
    element = $(event.currentTarget);

    options = {
        touchScrollStep: 50,
        alwaysVisible: true
    };
    if (element.data('slimscroll-height')) {
        options.height = element.data('slimscroll-height');
    }
    element.slimScroll(options);

    element.trigger('extension::slimscroll::applied');
});
