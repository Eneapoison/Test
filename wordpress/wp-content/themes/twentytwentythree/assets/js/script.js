jQuery(document).ready(function ($) {
    $(".wpcf7").on("wpcf7mailfailed", function (e) {
        $(".wpcf7-form-control, .wpcf7-form-control-wrap").hide(300);
    });

});