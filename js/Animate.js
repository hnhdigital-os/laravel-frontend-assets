/**
 * Animate CSS.
 */
$.fn.extend({
  animateCss: function(animation, animate, options) {

    if (typeof animation == 'object') {
      animation_name = animation[0];
      animation_false = animation[0];
    } else {
      animation_name = animation;
      animation_false = false;
    }

    animate = typeof animate !== 'undefined' ? animate : true;
    options = typeof options !== 'undefined' ? options : {};
    options.on = typeof options.on !== 'undefined' ? options.on : {};

    if (!animate && animation_false != false) {
      animate = true;
      animation_name = animation_false;
    }

    if (animate) {
      var animationEnd =
        'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      $(this)
        .addClass('animated ' + animation_name)
        .one(animationEnd, function() {
          $(this).removeClass('animated ' + animation_name);
          if (typeof options.on.end == 'function') {
            options.on.end.call(this);
          }
        });
    }

    return $(this);
  },
});
