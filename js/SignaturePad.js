/**
 * Signature Pad.
 */
$.frontendAssets.register('signature-pad', function(event) {
  var element = $(event.currentTarget);

  // Already applied to element.
  if (element.hasClass('signature-pad-applied')) {
    return;
  }

  // Non-canvas detected. Convert it.
  if (!element.is('canvas')) {
    element.replaceWith('<canvas></canvas>');
    var attrs = {};

    $.each(element.get(0).attributes, function(idx, attr) {
        attrs[attr.nodeName] = attr.nodeValue;
    });

    element.replaceWith(function() {
      return $("<canvas />", attrs).append($(this).contents());
    });
  }

  // Create signature pad and assign to element.
  $(element).data('signaturePad', new SignaturePad(element.get(0)));

  // Mark it applied.
  element.addClass('signature-pad-applied');

  // Call applied trigger.
  element.trigger('extension::signature-pad::applied');
});
