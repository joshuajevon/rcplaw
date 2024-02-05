function changeNavbar() {
    let offset = 100;

    let scrollPosition = $(this).scrollTop();
    if (
        scrollPosition >= $("#beranda").offset().top - offset &&
        scrollPosition < $("#tentang-kami").offset().top - offset
    ) {
        $(".nav-link").removeClass("text-gold");
        $("#nav-link-beranda").addClass("text-gold");
        $("#nav-link-beranda-mobile").addClass("text-gold");
    } else if (
        scrollPosition >= $("#tentang-kami").offset().top - offset &&
        scrollPosition < $("#layanan-kami").offset().top - offset
    ) {
        $(".nav-link").removeClass("text-gold");
        $("#nav-link-tentang-kami-tim-kami span").addClass("text-gold");
        $("#nav-link-tentang-kami-tim-kami-mobile").addClass("text-gold");
        $("#nav-link-tentang-kami").addClass("text-gold");
        $("#nav-link-tentang-kami-mobile").addClass("text-gold");
    } else if (
        scrollPosition >= $("#layanan-kami").offset().top - offset &&
        scrollPosition < $("#tim-kami").offset().top - offset
    ) {
        $(".nav-link").removeClass("text-gold");
        $("#nav-link-layanan-kami").addClass("text-gold");
        $("#nav-link-layanan-kami-mobile").addClass("text-gold");
    } else if (
        scrollPosition >= $("#tim-kami").offset().top - offset &&
        scrollPosition < $("#artikel").offset().top - offset
    ) {
        $(".nav-link").removeClass("text-gold");
        $("#nav-link-tentang-kami-tim-kami span").addClass("text-gold");
        $("#nav-link-tentang-kami-tim-kami-mobile").addClass("text-gold");
        $("#nav-link-tim-kami").addClass("text-gold");
        $("#nav-link-tim-kami-mobile").addClass("text-gold");
    } else if (
        scrollPosition >= $("#artikel").offset().top - offset &&
        scrollPosition < $("#kontak").offset().top - offset
    ) {
        $(".nav-link").removeClass("text-gold");
        $("#nav-link-artikel").addClass("text-gold");
        $("#nav-link-artikel-mobile").addClass("text-gold");
    } else {
        $(".nav-link").removeClass("text-gold");
        $("#nav-link-kontak").addClass("text-gold");
        $("#nav-link-kontak-mobile").addClass("text-gold");
    }
}

changeNavbar();

$(window).scroll(function () {
    changeNavbar();
});
