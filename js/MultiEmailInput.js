
$('.init-multi-email-input').on('extension::multi-email-input::init',  function(event) {
    element = $(event.currentTarget);

    if (!$(this).hasClass('multi-email-input-applied')) {
        $(this).multiEmail();
        $(this).addClass('multi-email-input-applied');
        $(this).addClass('bootstrap-multiemail');

        element.trigger('extension::multi-email-input::applied');
    }
});
