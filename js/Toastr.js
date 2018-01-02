/**
 * Toastr.
 */
if (typeof toastr != 'undefined') {
  if ($('meta[name="toastr"]').length) {
    toastr.options = JSON.parse($('meta[name="toastr"]').attr('content'));
  }
}
