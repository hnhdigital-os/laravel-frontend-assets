/**
 * Clipboard.
 */
$.frontendAssets.register('clipboard', function(event) {
  if ($(this).hasClass('clipboard-right')) {
    $(this).after('<button type="button" id="#' + $(this).attr('id') + '-clipboard" class="btn" data-clipboard-target="#' + $(this).attr('id') + '"></button');
    new ClipboardJS('#' + $(this).attr('id') + '-clipboard');
  } else {
    new ClipboardJS(event.currentTarget);
  }

  $(this).trigger('extension::clipboard::applied');
});
