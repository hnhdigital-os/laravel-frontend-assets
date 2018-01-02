/**
 * Animate CSS.
 */
$.fn.extend({
  animateCss: function(animationName, animate, animationFalse) {
    animate = typeof animate !== 'undefined' ? animate : true;
    animationFalse =
      typeof animationFalse !== 'undefined' ? animationFalse : true;

    if (!animate && animationFalse != false) {
      animate = true;
      animationName = animationFalse;
    }

    if (animate) {
      var animationEnd =
        'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      $(this)
        .addClass('animated ' + animationName)
        .one(animationEnd, function() {
          $(this).removeClass('animated ' + animationName);
        });
    }

    return $(this);
  },
});
