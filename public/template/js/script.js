
(function ($) {
    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });

    $(document).ready(function() {
        $('#dataTable').DataTable();
      });
})(jQuery);

