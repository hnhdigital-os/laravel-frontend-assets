/**
 * Text diff.
 */
$.frontendAssets.register('text-diff', function(event) {
  var element = $(event.currentTarget);

  element.on('apply', function() {
    var container = $(this);

    // Find the various content containers.
    var original_content = container.find('.pretty-text-original');
    var changed_content = container.find('.pretty-text-changed');
    var diff_container = container.find('.pretty-text-container');

    // Reset the content.
    if (original_content.html().indexOf('{empty value}') >= 0) {
      original_content.html('');
    }

    // Reset the content.
    if (changed_content.html().indexOf('{empty value}') >= 0) {
      changed_content.html('');
    }

    // Original content is empty.
    if (changed_content.html() == '') {
      changed_content.html('{empty value}');
    }

    // Hide the original content and show the diffs.
    if (original_content.html() == '') {
      original_content.html('{empty value}');
    }

    // Set the options for text-diff.
    var options = {
      originalContent: original_content.html(),
      changedContent: changed_content.html(),
      diffContainer: diff_container,
    };

    // Setup the diff.
    container.prettyTextDiff(options);

    original_content.hide();
    diff_container.show();
    container.trigger('extension::text-diff::applied');
  }).trigger('apply');  

});