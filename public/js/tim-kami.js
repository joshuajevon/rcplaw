$(".tim-selector").on("click", function () {
    let dataNamaTim = $(this).data("nama-tim");

    switch (dataNamaTim) {
        case "Fadjar Sukma":
            $("#tim-position").html("Junior Associate");
            $("#tim-name").html("Fadjar Sukma, S.H.");

            $("#whatsapp").attr("href", "https://www.example.com");
            $("#instagram").attr("href", "https://www.example.com");
            $("#email").attr("href", "https://www.example.com");

            $("#tim-desc").html(`
            Fadjar Sukma adalah seorang Sarjana Hukum lulusan Sekolah Tinggi Ilmu Hukum IBLAM, Jakarta. Ia dikenal sebagai sosok yang cerdas dan pekerja keras. Sejak masih mahasiswa, Fadjar sudah bergabung sebagai mahasiswa magang di Resandhi Cumbhadrika Partnership - Attorneys and Counsellors at Law. Selama magang, Fadjar menunjukkan kemampuannya dalam bidang litigasi, baik perdata umum maupun pidana. Ia juga aktif mengikuti berbagai pelatihan dan seminar hukum untuk meningkatkan kompetensinya.
                <br><br>
                Setelah lulus kuliah, Fadjar langsung bergabung sebagai Junior Associate di RCP. Dalam waktu singkat, Fadjar sudah mampu menangani berbagai kasus litigasi dengan baik. Ia juga dikenal sebagai sosok yang ramah dan mudah bergaul, sehingga ia cepat diterima oleh tim di RCP.
            `);
            break;

        case "Elisabeth Yunita":
            $("#tim-position").html("Junior Associate");
            $("#tim-name").html("Elisabeth Yunita, S.H.");

            $("#whatsapp").attr("href", "https://www.example.com");
            $("#instagram").attr("href", "https://www.example.com");
            $("#email").attr("href", "https://www.example.com");

            $("#tim-desc").html(`
                Elisabeth Yunita adalah seorang Sarjana Hukum lulusan Sekolah Tinggi Ilmu Hukum IBLAM, Jakarta. Ia dikenal sebagai sosok yang cerdas dan memiliki kemampuan analisis yang tajam. Sejak masih mahasiswa, Elisabeth sudah bergabung sebagai mahasiswa magang di Resandhi Cumbhadrika Partnership - Attorneys and Counsellors at Law. Selama magang, Elisabeth menunjukkan kemampuannya dalam bidang litigasi, khususnya perdata khusus, seperti niaga dan hubungan industrial.
            <br><br>
            Setelah lulus kuliah, Elisabeth langsung bergabung sebagai Junior Associate di RCP. Dalam waktu singkat, Elisabeth sudah mampu menangani berbagai kasus litigasi di bidang niaga dan hubungan industrial. Ia juga dikenal sebagai sosok yang kreatif dan inovatif, sehingga ia sering memberikan ide-ide baru untuk meningkatkan efektivitas penyelesaian kasus.
                `);
            break;

        case "Hafidzun Sat Febrian":
            $("#tim-position").html("Junior Associate");
            $("#tim-name").html("Hafidzun Sat Febrian, S.H.");

            $("#whatsapp").attr("href", "https://www.example.com");
            $("#instagram").attr("href", "https://www.example.com");
            $("#email").attr("href", "https://www.example.com");

            $("#tim-desc").html(`
            Hafidzun Sat Febrian adalah seorang Sarjana Hukum lulusan Sekolah Tinggi Ilmu Hukum IBLAM, Jakarta. Ia dikenal sebagai sosok yang ramah dan mudah bergaul. Sejak masih mahasiswa, Hafidzun sudah bergabung sebagai mahasiswa magang di Resandhi Cumbhadrika Partnership - Attorneys and Counsellors at Law. Selama magang, Hafidzun menunjukkan kemampuannya dalam bidang litigasi, baik perdata umum maupun pidana.
            <br><br>
            Setelah lulus kuliah, Hafidzun langsung bergabung sebagai Junior Associate di RCP. Dalam waktu singkat, Hafidzun sudah mampu menangani berbagai kasus litigasi dengan baik. Ia juga dikenal sebagai sosok yang memiliki kemampuan komunikasi yang baik, sehingga ia sering menjadi penghubung antara klien dan tim hukum di RCP.
                `);
            break;

        case "Dicke Muhdi Gailea":
            $("#tim-position").html("Junior Associate");
            $("#tim-name").html("Dickie Muhdi Gailea, S.H.");

            $("#whatsapp").attr("href", "https://www.example.com");
            $("#instagram").attr("href", "https://www.example.com");
            $("#email").attr("href", "https://www.example.com");

            $("#tim-desc").html(`
            Dicke Muhdi Gailea adalah seorang Sarjana Hukum dari Universitas Gadjah Mada, Yogyakarta.Selama menjadi mahasiswa, Dicke sangat aktif di beberapa organisasi yang bahkan masih ikut serta sampai saat ini, yaitu HimpunanMahasiswa Islam sebagai Wasekjend Pengurus Besar HMI. Dicke adalah orang yang tekun dalam berpikir dan bertindak dalam menyelesaikan persoalan hukum klien.
            <br><br>
            Kompetensinya dapat diandalkan terutama dalam teknik negosiasi dan berargumentasi. Sebelum bergabung dengan Resandhi Cumbhadrika Partnership - Attorneys and Counsellors at Law, Dicke pernah berpengalaman menjadi Associate di Nizar Bachmid & Partners - law firm.
                `);
            break;
    }

    $(".tim-selector")
        .removeClass("pointer-events-none font-bold")
        .addClass("opacity-50");
    $(this).removeClass("opacity-50").addClass("pointer-events-none font-bold");
});

let timSelectorContainer = $("#tim-selector-container");
let timSelectorContent = $("#tim-selector-content");

$(window).resize(function () {
    if (timSelectorContainer.width() == timSelectorContent.width()) {
        timSelectorContainer.removeClass("justify-center");
        timSelectorContainer.addClass("justify-start");
    } else {
        timSelectorContainer.addClass("justify-center");
        timSelectorContainer.removeClass("justify-start");
    }
});
