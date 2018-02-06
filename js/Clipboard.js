/**
 * Clipboard.
 */
$.frontendAssets.register('clipboard', function(event) {
  
  if ($(this).hasClass('clipboard-right')) {
    $(this).after('<button type="button" class="btn" data-clipboard-target="#'+$(this).attr('id')+'"></button');
  }

  $(this).trigger('extension::clipboard::applied');
});
