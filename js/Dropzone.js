
$('.init-dropzone').on('extension::dropzone::init',  function(event) {
    element = $(event.currentTarget);

    if (element.find('.dz-message').length == 0) {
        options = element.data('dropzone-options');
        if (options === '') {
            options = {};
        }
        options['init'] = function() {
            if (typeof element.data('dropzone-init') == 'function') {
                element.data('dropzone-init')();
            }
        }        
        element.dropzone(options);

        element.trigger('extension::dropzone::applied');
    }
});
