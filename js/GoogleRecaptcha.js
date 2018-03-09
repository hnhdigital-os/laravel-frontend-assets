/**
 * Google Recaptcha.
 */
$.frontendAssets.register('recaptcha', function(event) {
  var element = $(event.currentTarget);
  var form = element.closest('form');

  element.uniqueId();
  var e_id = element.attr('id').replace('-', '_');
  window[e_id + 'recaptchaCallback'] = function(g_recaptcha_response) {
    if (g_recaptcha_response != '') {
      form.trigger('extension::recaptcha::verified');
    }
  };

  element.addClass('g-recaptcha');
  element.attr('data-sitekey', $('meta[name="g-recaptcha-sitekey"]').attr('content'));
  element.attr('data-callback', e_id + 'recaptchaCallback');
  element.attr('data-size', 'invisible');

  $('#form-contact').submit(function(event) {
    event.preventDefault();
    grecaptcha.reset();
    grecaptcha.execute();
    form.trigger('extension::recaptcha::verifing');
  });

  element.trigger('extension::recaptcha::applied');
});
