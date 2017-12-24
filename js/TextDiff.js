
$('.init-text-diff').on('extension::text-diff::init',  function(event) {
    element = $(event.currentTarget);

    options = {
        originalContent: element.find('.pretty-text-original').html(),
        changedContent: element.find('.pretty-text-changed').html(),
        diffContainer: element.find('.pretty-text-container')
    };
    element.prettyTextDiff(options);
    if (element.find('.pretty-text-original').html() == '') {
        element.find('.pretty-text-original').html('<del>{empty value}</del>');
    } else if (element.find('.pretty-text-changed').html() == '') {
        element.find('.pretty-text-original').show();
        element.find('.pretty-text-original').html('<del>' + element.find('.pretty-text-original').html() + '</del><ins>{empty value}</ins>');
        element.find('.pretty-text-changed').html('{empty value}');
        element.find('.pretty-text-container').hide();
    } else {
        element.find('.pretty-text-original').hide();
        element.find('.pretty-text-container').show();
    }

    element.trigger('extension::text-diff::applied');
});