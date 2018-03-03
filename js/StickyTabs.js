if (typeof $.fn.stickyTabs != 'undefined') {
  $(function() {
    $('.nav-tabs').stickyTabs({
      showTabUsingClickTrigger: true,
      showParentTabs: true,
    });
  });
}
