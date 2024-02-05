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

        $("#dropdown-tentang-kami-tim-kami-mobile").slideUp();
        $("#dropdown-arrow-mobile").removeClass("rotate-180");
    } else {
        $("#dropdown-tentang-kami-tim-kami").slideUp();
        $("#dropdown-arrow").removeClass("rotate-180");
    }
});

$("#nav-link-tentang-kami-tim-kami").on("click", function () {
    $("#dropdown-tentang-kami-tim-kami").slideToggle();
    $("#dropdown-arrow").toggleClass("rotate-180");
});

$("#nav-link-tentang-kami-tim-kami-mobile").on("click", function () {
    $("#dropdown-tentang-kami-tim-kami-mobile").slideToggle();
    $("#dropdown-arrow-mobile").toggleClass("rotate-180");
});
