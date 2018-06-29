$(function() {
  if (typeof $.fn.stickyTabs != 'undefined') {
    $('.nav-tabs').stickyTabs({
      showTabUsingClickTrigger: true,
      showParentTabs: true,
    });
  }
});
