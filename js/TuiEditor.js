/**
 * Toast UI Editor.
 */
$.frontendAssets.register('tui-editor', function(event) {
  var element = $(event.currentTarget);

  if (!element.hasClass('tui-editor-applied')) {

    editor_id = element.attr('id') + '-tui-editor';

    element.after('<div id="' + editor_id + '"></div>');
    element.css({'display': 'none'});

    var editor = $('#' + editor_id);

    options = {
      el: editor[0],
      height: '300px',
      minHeight: '200px',
      previewStyle: 'vertical',
      initialEditType: 'markdown',
      initialValue: element.val(),
      events: {
        load: function(data) { element.triggerHandler('extension::tui-editor::load', data); },
        change: function(data) {
          if (element.data('tui-editor').getMarkdown() != element.val()) {
            element.val(element.data('tui-editor').getMarkdown());
            element.triggerHandler('extension::tui-editor::change', data);
          }
        },
        stateChange: function(data) { element.triggerHandler('extension::tui-editor::state-change', data); },
        focus: function(data) { element.triggerHandler('extension::tui-editor::focus', data); },
        blur: function(data) { element.triggerHandler('extension::tui-editor::blur', data); },
      },
      hooks: {},
      language: 'en_US',
      useCommandShortcut: true,
      useDefaultHTMLSanitizer: true,
      usageStatistics: false,
      hideModeSwitch: false,
    };

    for (key in options) {
      data_key = key.replace(/([A-Z])/g, function (g) { return '-' + g[0].toLowerCase(); });

      if (typeof options[key] === 'object') {
        continue;
      }

      if (typeof element.data('tui-editor-' + data_key) !== 'undefined') {
        options[key] = element.data('tui-editor-' + data_key);
      }
    };

    // Toolbar
    if (typeof element.data('tui-editor-toolbar-items') !== 'undefined') {
      options.toolbarItems = element.data('tui-editor-toolbar-items').split(',');
    }

    element.data('tui-editor', new tui.Editor(options));
    element.addClass('tui-editor-applied');
    element.trigger('extension::tui-editor::applied');
  }
});
