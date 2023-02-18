const num = $("#main-navigation").offset().top;

$(window).bind("scroll", function () {
    if ($(window).scrollTop() > num) {
        $("#page-container").addClass("page-header-fixed");
    } else {
        // num = $("#page-header").offset().top;
        $("#page-container").removeClass("page-header-fixed");
    }
});
