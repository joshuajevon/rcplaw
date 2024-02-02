$("#nav-mobile-toggle").on("click", function () {
    $("#toggle-top").toggleClass("rotate-45 translate-y-2");
    $("#toggle-middle").toggleClass("opacity-0");
    $("#toggle-bottom").toggleClass("-rotate-45 -translate-y-2");

    $("#nav-mobile-navlinks").slideToggle();
});

$(window).resize(function () {
    if ($(window).width() >= 1024) {
        $("#toggle-top").removeClass("rotate-45 translate-y-2");
        $("#toggle-middle").removeClass("opacity-0");
        $("#toggle-bottom").removeClass("-rotate-45 -translate-y-2");

        $("#nav-mobile-navlinks").slideUp();
    }
});
