
$('.init-bs-tooltip').on('extension::bs-tooltip::init',  function(event) {
    $(this).data('toggle', 'tooltip').tooltip();
});
