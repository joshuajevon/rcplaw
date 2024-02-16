$(".jenis-layanan").on("click", function () {
    let dataJenisLayanan = $(this).data("jenis-layanan");

    let detailLayanan = "";

    switch (dataJenisLayanan) {
        case "hukum-perdata":
            detailLayanan = `<p>
    Hukum perdata adalah salah satu cabang hukum yang mengatur hubungan antara orang per orang atau badan hukum perdata dengan orang per orang atau badan hukum perdata lainnya. Hukum perdata mengatur berbagai aspek kehidupan manusia, mulai dari hukum keluarga, hukum perikatan, hukum kekayaan, hukum waris, hukum benda, hukum perjanjian, hukum warisan, dan lain-lain.
    <br><br>
    RCP memberikan layanan hukum perdata yang komprehensif dan profesional. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum perdata, dan kami selalu berkomitmen untuk memberikan layanan terbaik kepada klien kami.
    <br><br>
    Beberapa layanan hukum perdata yang kami tawarkan meliputi:
    <br>
</p>

<ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
    <li>
        Hukum keluarga, seperti perceraian, pengasuhan anak, dan perwalian.
    </li>

    <li>
        Hukum perikatan, seperti perjanjian jual beli, perjanjian sewa menyewa, dan perjanjian utang piutang.
    </li>

    <li>
        Hukum kekayaan, seperti kepemilikan tanah, hak cipta, dan paten.
    </li>

    <li>
        Hukum waris, seperti pembagian harta warisan.
    </li>

    <li>
        Hukum benda, seperti hukum pertanahan dan hukum niaga.
    </li>

    <li>
        Hukum perjanjian, seperti pembuatan dan pelaksanaan perjanjian.
    </li>

    <li>
        Hukum warisan, seperti pembagian harta warisan.
    </li>
</ol>

<br>
<p>
    Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan berbagai masalah hukum perdata yang Anda hadapi.
</p>`;
            break;

        case "hukum-pidana":
            detailLayanan = `<p>Hukum pidana adalah cabang hukum yang mengatur perbuatan yang dilarang oleh hukum dan diancam dengan hukuman. Hukum pidana bertujuan untuk melindungi ketertiban umum dan keamanan masyarakat.
            <br><br>
            RCP memberikan layanan hukum pidana yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum pidana, dan kami selalu berkomitmen untuk membela hak-hak klien kami.
            <br><br>
            Beberapa layanan hukum pidana yang kami tawarkan meliputi:
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultansi hukum pidana, seperti konsultasi tentang hukum pidana, pembuatan surat kuasa, dan pendampingan dalam pemeriksaan polisi.
            </li>

            <li>
                Pembelaan dalam perkara pidana, seperti perkara pidana umum, perkara pidana khusus, dan perkara pidana militer.
            </li>

            <li>
                Proses hukum pidana, seperti prapenuntutan, penuntutan, pemeriksaan di pengadilan, dan eksekusi putusan pengadilan.
            </li>
        </ol>
        <br>

        <p>
            Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda membela diri dalam perkara pidana yang Anda hadapi.
        </p>`;
            break;

        case "hukum-koorporasi-dan-bisnis":
            detailLayanan = `<p>
            Hukum korporasi dan bisnis adalah cabang hukum yang mengatur kegiatan usaha dan perusahaan. Hukum korporasi dan bisnis mengatur berbagai aspek kegiatan usaha, mulai dari pendirian perusahaan, perizinan, kontrak, transaksi bisnis, dan lain-lain.
            <br><br>
            RCP memberikan layanan hukum korporasi dan bisnis yang komprehensif dan profesional. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum korporasi dan bisnis, dan kami selalu berkomitmen untuk membantu klien kami mencapai tujuan bisnisnya.
            <br><br>
            Beberapa layanan hukum korporasi dan bisnis yang kami tawarkan meliputi:
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Pembentukan dan pendirian perusahaan, seperti pendirian perseroan terbatas, firma, dan koperasi.
            </li>

            <li>
                Perizinan usaha, seperti perizinan usaha mikro, kecil, dan menengah (UMKM), perizinan usaha besar, dan perizinan usaha multinasional.
            </li>

            <li>
                Kontrak bisnis, seperti kontrak jual beli, kontrak sewa menyewa, dan kontrak lisensi.
            </li>

            <li>
                Transaksi bisnis, seperti merger, akuisisi, dan divestasi.
            </li>

            <li>
                Hukum pasar modal, seperti penerbitan saham, obligasi, dan right issue.
            </li>
        </ol>

        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda mengembangkan bisnis Anda.</p>`;
            break;

        case "hukum-pertahanan":
            detailLayanan = `<p>
            Hukum pertanahan adalah cabang hukum yang mengatur hubungan hukum antara orang atau badan hukum dengan tanah. Hukum pertanahan mengatur berbagai aspek kepemilikan dan penguasaan tanah, mulai dari perolehan tanah, penguasaan tanah, dan pengalihan tanah.
            <br><br>
            RCP memberikan layanan hukum pertanahan yang profesional dan berpengalaman. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum pertanahan, dan kami selalu berkomitmen untuk membantu klien kami dalam berbagai permasalahan hukum pertanahan.
            <br><br>
            Beberapa layanan hukum pertanahan yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Perolehan tanah, seperti jual beli tanah, hibah tanah, dan waris tanah.
            </li>

            <li>
                Penguasaan tanah, seperti sewa tanah, gadai tanah, dan hak guna usaha.
            </li>

            <li>
                Pengalihan tanah, seperti jual beli tanah, hibah tanah, dan waris tanah.
            </li>

            <li>
                Penyelesaian sengketa tanah, seperti sengketa tanah perdata dan sengketa tanah pidana.
            </li>
        </ol>

        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan berbagai permasalahan hukum.</p>`;
            break;

        case "hukum-keluarga":
            detailLayanan = `<p>
            Hukum keluarga adalah cabang hukum yang mengatur hubungan antara orang-orang yang memiliki hubungan keluarga, seperti suami-istri, orang tua-anak, dan saudara kandung. Hukum keluarga mengatur berbagai aspek kehidupan keluarga, mulai dari pernikahan, perceraian, pengasuhan anak, dan perwalian.
            <br><br>
            RCP memberikan layanan hukum keluarga yang profesional dan berpengalaman. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum keluarga, dan kami selalu berkomitmen untuk membantu klien kami dalam berbagai permasalahan hukum keluarga.
            <br><br>
            Beberapa layanan hukum keluarga yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum keluarga, seperti konsultasi tentang hukum keluarga, pembuatan surat kuasa, dan pendampingan dalam proses perceraian.
            </li>

            <li>
                Penyelesaian sengketa keluarga, seperti sengketa keluarga perdata dan sengketa keluarga pidana.
            </li>

            <li>
                Pembuatan dan pelaksanaan perjanjian keluarga, seperti perjanjian perkawinan, perjanjian wali, dan perjanjian perwalian.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan berbagai permasalahan hukum keluarga yang Anda hadapi.</p>`;
            break;

        case "penyelesaian-sengketa":
            detailLayanan = `<p>
            Penyelesaian sengketa adalah proses untuk menyelesaikan perselisihan antara dua pihak atau lebih. Penyelesaian sengketa dapat dilakukan melalui jalur litigasi atau non-litigasi.
            <br><br>
            RCP memberikan layanan penyelesaian sengketa yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang penyelesaian sengketa, dan kami selalu berkomitmen untuk membantu klien kami mencapai solusi yang adil dan menguntungkan.
            <br><br>
            Beberapa layanan penyelesaian sengketa yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum sengketa, seperti konsultasi tentang hukum sengketa, pembuatan surat kuasa, dan pendampingan dalam proses penyelesaian sengketa.
            </li>

            <li>
                Mediasi, seperti mediasi perdata, mediasi pidana, dan mediasi keluarga.
            </li>

            <li>
                Konsiliasi, seperti konsiliasi perdata, konsiliasi pidana, dan konsiliasi keluarga.
            </li>

            <li>
                Arbitrase, seperti arbitrase perdata, arbitrase pidana, dan arbitrase keluarga.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan berbagai permasalahan hukum sengketa yang Anda hadapi.</p>`;
            break;

        case "hukum-kekayaan-intelektual":
            detailLayanan = `<p>
            Hukum kekayaan intelektual adalah cabang hukum yang mengatur hak kekayaan intelektual, seperti hak cipta, hak paten, hak merek, dan rahasia dagang. Hukum kekayaan intelektual bertujuan untuk melindungi hak kekayaan intelektual dari pihak yang tidak berhak.
            <br><br>
            RCP memberikan layanan hukum kekayaan intelektual yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum kekayaan intelektual, dan kami selalu berkomitmen untuk membantu klien kami melindungi hak kekayaan intelektualnya.
            <br><br>
            Beberapa layanan hukum kekayaan intelektual yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Pendaftaran kekayaan intelektual, seperti pendaftaran hak cipta, hak paten, hak merek, dan rahasia dagang.
            </li>

            <li>
                Pencegahan pelanggaran kekayaan intelektual, seperti penindakan pelanggaran hak cipta, hak paten, hak merek, dan rahasia dagang.
            </li>

            <li>
                Penyelesaian sengketa kekayaan intelektual, seperti sengketa kekayaan intelektual perdata dan sengketa kekayaan intelektual pidana.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda melindungi hak kekayaan intelektual Anda.</p>`;
            break;

        case "sengketa-hasil-pemilihan-umum-legislatif":
            detailLayanan = `<p>
            Sengketa hasil pemilihan umum legislatif adalah perselisihan tentang hasil pemilihan umum legislatif. Sengketa ini dapat terjadi antara partai politik, calon anggota legislatif, atau antara partai politik dan calon anggota legislatif.
            <br><br>
            RCP memberikan layanan penyelesaian sengketa hasil pemilihan umum legislatif yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang penyelesaian sengketa, dan kami selalu berkomitmen untuk membantu klien kami mencapai solusi yang adil dan menguntungkan.
            <br><br>
            Beberapa layanan penyelesaian sengketa hasil pemilihan umum legislatif yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum sengketa, seperti konsultasi tentang hukum sengketa hasil pemilihan umum legislatif, pembuatan surat kuasa, dan pendampingan dalam proses penyelesaian sengketa.
            </li>

            <li>
                Mediasi, seperti mediasi sengketa hasil pemilihan umum legislatif.
            </li>

            <li>
                Konsiliasi, seperti konsiliasi sengketa hasil pemilihan umum legislatif.
            </li>

            <li>
                Arbitrase, seperti arbitrase sengketa hasil pemilihan umum legislatif.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan sengketa hasil pemilihan umum legislatif yang Anda hadapi.</p>`;
            break;

        case "sengketa-hasil-pemilihan-umum-kepala-daerah":
            detailLayanan = `<p>
            Sengketa hasil pemilihan umum kepala daerah adalah perselisihan tentang hasil pemilihan umum kepala daerah. Sengketa ini dapat terjadi antara pasangan calon kepala daerah, partai politik pengusung, atau antara pasangan calon kepala daerah dan partai politik pengusung.
            <br><br>
            RCP memberikan layanan penyelesaian sengketa hasil pemilihan umum kepala daerah yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang penyelesaian sengketa, dan kami selalu berkomitmen untuk membantu klien kami mencapai solusi yang adil dan menguntungkan.
            <br><br>
            Beberapa layanan penyelesaian sengketa hasil pemilihan umum kepala daerah yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum sengketa, seperti konsultasi tentang hukum sengketa hasil pemilihan umum kepala daerah, pembuatan surat kuasa, dan pendampingan dalam proses penyelesaian sengketa.
            </li>

            <li>
                Mediasi, seperti mediasi sengketa hasil pemilihan umum kepala daerah.
            </li>

            <li>
                Konsiliasi, seperti konsiliasi sengketa hasil pemilihan umum kepala daerah.
            </li>

            <li>
                Arbitrase, seperti arbitrase sengketa hasil pemilihan umum kepala daerah.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan sengketa hasil pemilihan umum kepala daerah yang Anda hadapi.</p>`;
            break;

        case "hukum-ketenagakerjaan":
            detailLayanan = `<p>
            Hukum ketenagakerjaan adalah cabang hukum yang mengatur hubungan antara pekerja dan pengusaha. Hukum ketenagakerjaan bertujuan untuk melindungi hak-hak pekerja dan pengusaha.
            <br><br>
            RCP memberikan layanan hukum ketenagakerjaan yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum ketenagakerjaan, dan kami selalu berkomitmen untuk membantu klien kami melindungi hak-hak pekerja dan pengusaha.
            <br><br>
            Beberapa layanan hukum ketenagakerjaan yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum ketenagakerjaan, seperti konsultasi tentang hukum ketenagakerjaan, pembuatan surat kuasa, dan pendampingan dalam proses hukum ketenagakerjaan.
            </li>

            <li>
                Pembuatan dan pelaksanaan perjanjian kerja, seperti perjanjian kerja waktu tertentu (PKWT), perjanjian kerja waktu tidak tertentu (PKWTT), dan perjanjian kerja outsourcing.
            </li>

            <li>
                Penyelesaian perselisihan ketenagakerjaan, seperti perselisihan hubungan industrial, perselisihan antar serikat pekerja atau serikat buruh, dan perselisihan ketenagakerjaan di luar hubungan kerja.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda melindungi hak-hak pekerja dan pengusaha Anda.</p>`;
            break;

        case "hukum-lingkungan":
            detailLayanan = `<p>
            Hukum lingkungan adalah cabang hukum yang mengatur hubungan antara manusia dan lingkungan. Hukum lingkungan bertujuan untuk melindungi lingkungan dari kerusakan.
            <br><br>
            RCP memberikan layanan hukum lingkungan yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum lingkungan, dan kami selalu berkomitmen untuk membantu klien kami melindungi lingkungan.
            <br><br>
            Beberapa layanan hukum lingkungan yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum lingkungan, seperti konsultasi tentang hukum lingkungan, pembuatan surat kuasa, dan pendampingan dalam proses hukum lingkungan.
            </li>

            <li>
                Penasihatan lingkungan, seperti penasihatan tentang dampak lingkungan, penasihatan tentang izin lingkungan, dan penasihatan tentang pengelolaan lingkungan.
            </li>

            <li>
                Penanganan pencemaran lingkungan, seperti penanganan pencemaran air, pencemaran udara, dan pencemaran tanah.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda melindungi lingkungan.</p>`;
            break;

        case "pkpu-dan-kepailitan":
            detailLayanan = `<p>
            PKPU dan kepailitan adalah proses hukum yang bertujuan untuk menyelamatkan perusahaan yang sedang mengalami kesulitan keuangan.
            <br><br>
            RCP memberikan layanan PKPU dan kepailitan yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang PKPU dan kepailitan, dan kami selalu berkomitmen untuk membantu klien kami menyelesaikan masalah keuangan perusahaannya.
            <br><br>
            Beberapa layanan PKPU dan kepailitan yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum PKPU dan kepailitan, seperti konsultasi tentang hukum PKPU dan kepailitan, pembuatan surat kuasa, dan pendampingan dalam proses PKPU dan kepailitan.
            </li>

            <li>
                Pendampingan dalam proses PKPU, seperti pendampingan dalam rapat kreditur, sidang PKPU, dan homologasi perdamaian.
            </li>

            <li>
                Pendampingan dalam proses kepailitan, seperti pendampingan dalam likuidasi perusahaan, pemberesan harta pailit, dan pembagian hasil likuidasi.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan masalah keuangan perusahaan Anda.</p>`;
            break;
    }

    $(".jenis-layanan")
        .removeClass("pointer-events-none font-bold")
        .addClass("opacity-50");
    $(this).removeClass("opacity-50").addClass("pointer-events-none font-bold");

    $("#detail-layanan").html(detailLayanan);
});

$(".jenis-layanan1").on("click", function () {
    let dataJenisLayanan1 = $(this).data("jenis-layanan1");

    let detailLayanan1 = "";

    switch (dataJenisLayanan1) {
        case "hukum-perdata1":
            detailLayanan1 = `<p>
    Hukum perdata adalah salah satu cabang hukum yang mengatur hubungan antara orang per orang atau badan hukum perdata dengan orang per orang atau badan hukum perdata lainnya. Hukum perdata mengatur berbagai aspek kehidupan manusia, mulai dari hukum keluarga, hukum perikatan, hukum kekayaan, hukum waris, hukum benda, hukum perjanjian, hukum warisan, dan lain-lain.
    <br><br>
    RCP memberikan layanan hukum perdata yang komprehensif dan profesional. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum perdata, dan kami selalu berkomitmen untuk memberikan layanan terbaik kepada klien kami.
    <br><br>
    Beberapa layanan hukum perdata yang kami tawarkan meliputi:
    <br>
</p>

<ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
    <li>
        Hukum keluarga, seperti perceraian, pengasuhan anak, dan perwalian.
    </li>

    <li>
        Hukum perikatan, seperti perjanjian jual beli, perjanjian sewa menyewa, dan perjanjian utang piutang.
    </li>

    <li>
        Hukum kekayaan, seperti kepemilikan tanah, hak cipta, dan paten.
    </li>

    <li>
        Hukum waris, seperti pembagian harta warisan.
    </li>

    <li>
        Hukum benda, seperti hukum pertanahan dan hukum niaga.
    </li>

    <li>
        Hukum perjanjian, seperti pembuatan dan pelaksanaan perjanjian.
    </li>

    <li>
        Hukum warisan, seperti pembagian harta warisan.
    </li>
</ol>

<br>
<p>
    Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan berbagai masalah hukum perdata yang Anda hadapi.
</p>`;
            break;

        case "hukum-pidana1":
            detailLayanan1 = `<p>Hukum pidana adalah cabang hukum yang mengatur perbuatan yang dilarang oleh hukum dan diancam dengan hukuman. Hukum pidana bertujuan untuk melindungi ketertiban umum dan keamanan masyarakat.
            <br><br>
            RCP memberikan layanan hukum pidana yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum pidana, dan kami selalu berkomitmen untuk membela hak-hak klien kami.
            <br><br>
            Beberapa layanan hukum pidana yang kami tawarkan meliputi:
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultansi hukum pidana, seperti konsultasi tentang hukum pidana, pembuatan surat kuasa, dan pendampingan dalam pemeriksaan polisi.
            </li>

            <li>
                Pembelaan dalam perkara pidana, seperti perkara pidana umum, perkara pidana khusus, dan perkara pidana militer.
            </li>

            <li>
                Proses hukum pidana, seperti prapenuntutan, penuntutan, pemeriksaan di pengadilan, dan eksekusi putusan pengadilan.
            </li>
        </ol>
        <br>

        <p>
            Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda membela diri dalam perkara pidana yang Anda hadapi.
        </p>`;
            break;

        case "hukum-koorporasi-dan-bisnis1":
            detailLayanan1 = `<p>
            Hukum korporasi dan bisnis adalah cabang hukum yang mengatur kegiatan usaha dan perusahaan. Hukum korporasi dan bisnis mengatur berbagai aspek kegiatan usaha, mulai dari pendirian perusahaan, perizinan, kontrak, transaksi bisnis, dan lain-lain.
            <br><br>
            RCP memberikan layanan hukum korporasi dan bisnis yang komprehensif dan profesional. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum korporasi dan bisnis, dan kami selalu berkomitmen untuk membantu klien kami mencapai tujuan bisnisnya.
            <br><br>
            Beberapa layanan hukum korporasi dan bisnis yang kami tawarkan meliputi:
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Pembentukan dan pendirian perusahaan, seperti pendirian perseroan terbatas, firma, dan koperasi.
            </li>

            <li>
                Perizinan usaha, seperti perizinan usaha mikro, kecil, dan menengah (UMKM), perizinan usaha besar, dan perizinan usaha multinasional.
            </li>

            <li>
                Kontrak bisnis, seperti kontrak jual beli, kontrak sewa menyewa, dan kontrak lisensi.
            </li>

            <li>
                Transaksi bisnis, seperti merger, akuisisi, dan divestasi.
            </li>

            <li>
                Hukum pasar modal, seperti penerbitan saham, obligasi, dan right issue.
            </li>
        </ol>

        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda mengembangkan bisnis Anda.</p>`;
            break;

        case "hukum-pertahanan1":
            detailLayanan1 = `<p>
            Hukum pertanahan adalah cabang hukum yang mengatur hubungan hukum antara orang atau badan hukum dengan tanah. Hukum pertanahan mengatur berbagai aspek kepemilikan dan penguasaan tanah, mulai dari perolehan tanah, penguasaan tanah, dan pengalihan tanah.
            <br><br>
            RCP memberikan layanan hukum pertanahan yang profesional dan berpengalaman. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum pertanahan, dan kami selalu berkomitmen untuk membantu klien kami dalam berbagai permasalahan hukum pertanahan.
            <br><br>
            Beberapa layanan hukum pertanahan yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Perolehan tanah, seperti jual beli tanah, hibah tanah, dan waris tanah.
            </li>

            <li>
                Penguasaan tanah, seperti sewa tanah, gadai tanah, dan hak guna usaha.
            </li>

            <li>
                Pengalihan tanah, seperti jual beli tanah, hibah tanah, dan waris tanah.
            </li>

            <li>
                Penyelesaian sengketa tanah, seperti sengketa tanah perdata dan sengketa tanah pidana.
            </li>
        </ol>

        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan berbagai permasalahan hukum.</p>`;
            break;

        case "hukum-keluarga1":
            detailLayanan1 = `<p>
            Hukum keluarga adalah cabang hukum yang mengatur hubungan antara orang-orang yang memiliki hubungan keluarga, seperti suami-istri, orang tua-anak, dan saudara kandung. Hukum keluarga mengatur berbagai aspek kehidupan keluarga, mulai dari pernikahan, perceraian, pengasuhan anak, dan perwalian.
            <br><br>
            RCP memberikan layanan hukum keluarga yang profesional dan berpengalaman. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum keluarga, dan kami selalu berkomitmen untuk membantu klien kami dalam berbagai permasalahan hukum keluarga.
            <br><br>
            Beberapa layanan hukum keluarga yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum keluarga, seperti konsultasi tentang hukum keluarga, pembuatan surat kuasa, dan pendampingan dalam proses perceraian.
            </li>

            <li>
                Penyelesaian sengketa keluarga, seperti sengketa keluarga perdata dan sengketa keluarga pidana.
            </li>

            <li>
                Pembuatan dan pelaksanaan perjanjian keluarga, seperti perjanjian perkawinan, perjanjian wali, dan perjanjian perwalian.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan berbagai permasalahan hukum keluarga yang Anda hadapi.</p>`;
            break;

        case "penyelesaian-sengketa1":
            detailLayanan1 = `<p>
            Penyelesaian sengketa adalah proses untuk menyelesaikan perselisihan antara dua pihak atau lebih. Penyelesaian sengketa dapat dilakukan melalui jalur litigasi atau non-litigasi.
            <br><br>
            RCP memberikan layanan penyelesaian sengketa yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang penyelesaian sengketa, dan kami selalu berkomitmen untuk membantu klien kami mencapai solusi yang adil dan menguntungkan.
            <br><br>
            Beberapa layanan penyelesaian sengketa yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum sengketa, seperti konsultasi tentang hukum sengketa, pembuatan surat kuasa, dan pendampingan dalam proses penyelesaian sengketa.
            </li>

            <li>
                Mediasi, seperti mediasi perdata, mediasi pidana, dan mediasi keluarga.
            </li>

            <li>
                Konsiliasi, seperti konsiliasi perdata, konsiliasi pidana, dan konsiliasi keluarga.
            </li>

            <li>
                Arbitrase, seperti arbitrase perdata, arbitrase pidana, dan arbitrase keluarga.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan berbagai permasalahan hukum sengketa yang Anda hadapi.</p>`;
            break;

        case "hukum-kekayaan-intelektual1":
            detailLayanan1 = `<p>
            Hukum kekayaan intelektual adalah cabang hukum yang mengatur hak kekayaan intelektual, seperti hak cipta, hak paten, hak merek, dan rahasia dagang. Hukum kekayaan intelektual bertujuan untuk melindungi hak kekayaan intelektual dari pihak yang tidak berhak.
            <br><br>
            RCP memberikan layanan hukum kekayaan intelektual yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum kekayaan intelektual, dan kami selalu berkomitmen untuk membantu klien kami melindungi hak kekayaan intelektualnya.
            <br><br>
            Beberapa layanan hukum kekayaan intelektual yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Pendaftaran kekayaan intelektual, seperti pendaftaran hak cipta, hak paten, hak merek, dan rahasia dagang.
            </li>

            <li>
                Pencegahan pelanggaran kekayaan intelektual, seperti penindakan pelanggaran hak cipta, hak paten, hak merek, dan rahasia dagang.
            </li>

            <li>
                Penyelesaian sengketa kekayaan intelektual, seperti sengketa kekayaan intelektual perdata dan sengketa kekayaan intelektual pidana.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda melindungi hak kekayaan intelektual Anda.</p>`;
            break;

        case "sengketa-hasil-pemilihan-umum-legislatif1":
            detailLayanan1 = `<p>
            Sengketa hasil pemilihan umum legislatif adalah perselisihan tentang hasil pemilihan umum legislatif. Sengketa ini dapat terjadi antara partai politik, calon anggota legislatif, atau antara partai politik dan calon anggota legislatif.
            <br><br>
            RCP memberikan layanan penyelesaian sengketa hasil pemilihan umum legislatif yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang penyelesaian sengketa, dan kami selalu berkomitmen untuk membantu klien kami mencapai solusi yang adil dan menguntungkan.
            <br><br>
            Beberapa layanan penyelesaian sengketa hasil pemilihan umum legislatif yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum sengketa, seperti konsultasi tentang hukum sengketa hasil pemilihan umum legislatif, pembuatan surat kuasa, dan pendampingan dalam proses penyelesaian sengketa.
            </li>

            <li>
                Mediasi, seperti mediasi sengketa hasil pemilihan umum legislatif.
            </li>

            <li>
                Konsiliasi, seperti konsiliasi sengketa hasil pemilihan umum legislatif.
            </li>

            <li>
                Arbitrase, seperti arbitrase sengketa hasil pemilihan umum legislatif.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan sengketa hasil pemilihan umum legislatif yang Anda hadapi.</p>`;
            break;

        case "sengketa-hasil-pemilihan-umum-kepala-daerah1":
            detailLayanan1 = `<p>
            Sengketa hasil pemilihan umum kepala daerah adalah perselisihan tentang hasil pemilihan umum kepala daerah. Sengketa ini dapat terjadi antara pasangan calon kepala daerah, partai politik pengusung, atau antara pasangan calon kepala daerah dan partai politik pengusung.
            <br><br>
            RCP memberikan layanan penyelesaian sengketa hasil pemilihan umum kepala daerah yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang penyelesaian sengketa, dan kami selalu berkomitmen untuk membantu klien kami mencapai solusi yang adil dan menguntungkan.
            <br><br>
            Beberapa layanan penyelesaian sengketa hasil pemilihan umum kepala daerah yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum sengketa, seperti konsultasi tentang hukum sengketa hasil pemilihan umum kepala daerah, pembuatan surat kuasa, dan pendampingan dalam proses penyelesaian sengketa.
            </li>

            <li>
                Mediasi, seperti mediasi sengketa hasil pemilihan umum kepala daerah.
            </li>

            <li>
                Konsiliasi, seperti konsiliasi sengketa hasil pemilihan umum kepala daerah.
            </li>

            <li>
                Arbitrase, seperti arbitrase sengketa hasil pemilihan umum kepala daerah.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan sengketa hasil pemilihan umum kepala daerah yang Anda hadapi.</p>`;
            break;

        case "hukum-ketenagakerjaan1":
            detailLayanan1 = `<p>
            Hukum ketenagakerjaan adalah cabang hukum yang mengatur hubungan antara pekerja dan pengusaha. Hukum ketenagakerjaan bertujuan untuk melindungi hak-hak pekerja dan pengusaha.
            <br><br>
            RCP memberikan layanan hukum ketenagakerjaan yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum ketenagakerjaan, dan kami selalu berkomitmen untuk membantu klien kami melindungi hak-hak pekerja dan pengusaha.
            <br><br>
            Beberapa layanan hukum ketenagakerjaan yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum ketenagakerjaan, seperti konsultasi tentang hukum ketenagakerjaan, pembuatan surat kuasa, dan pendampingan dalam proses hukum ketenagakerjaan.
            </li>

            <li>
                Pembuatan dan pelaksanaan perjanjian kerja, seperti perjanjian kerja waktu tertentu (PKWT), perjanjian kerja waktu tidak tertentu (PKWTT), dan perjanjian kerja outsourcing.
            </li>

            <li>
                Penyelesaian perselisihan ketenagakerjaan, seperti perselisihan hubungan industrial, perselisihan antar serikat pekerja atau serikat buruh, dan perselisihan ketenagakerjaan di luar hubungan kerja.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda melindungi hak-hak pekerja dan pengusaha Anda.</p>`;
            break;

        case "hukum-lingkungan1":
            detailLayanan1 = `<p>
            Hukum lingkungan adalah cabang hukum yang mengatur hubungan antara manusia dan lingkungan. Hukum lingkungan bertujuan untuk melindungi lingkungan dari kerusakan.
            <br><br>
            RCP memberikan layanan hukum lingkungan yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang hukum lingkungan, dan kami selalu berkomitmen untuk membantu klien kami melindungi lingkungan.
            <br><br>
            Beberapa layanan hukum lingkungan yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum lingkungan, seperti konsultasi tentang hukum lingkungan, pembuatan surat kuasa, dan pendampingan dalam proses hukum lingkungan.
            </li>

            <li>
                Penasihatan lingkungan, seperti penasihatan tentang dampak lingkungan, penasihatan tentang izin lingkungan, dan penasihatan tentang pengelolaan lingkungan.
            </li>

            <li>
                Penanganan pencemaran lingkungan, seperti penanganan pencemaran air, pencemaran udara, dan pencemaran tanah.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda melindungi lingkungan.</p>`;
            break;

        case "pkpu-dan-kepailitan1":
            detailLayanan1 = `<p>
            PKPU dan kepailitan adalah proses hukum yang bertujuan untuk menyelamatkan perusahaan yang sedang mengalami kesulitan keuangan.
            <br><br>
            RCP memberikan layanan PKPU dan kepailitan yang profesional dan efektif. Tim kami memiliki pengalaman dan pengetahuan yang luas dalam bidang PKPU dan kepailitan, dan kami selalu berkomitmen untuk membantu klien kami menyelesaikan masalah keuangan perusahaannya.
            <br><br>
            Beberapa layanan PKPU dan kepailitan yang kami tawarkan meliputi:
            <br>
        </p>

        <ol class="*:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
            <li>
                Konsultasi hukum PKPU dan kepailitan, seperti konsultasi tentang hukum PKPU dan kepailitan, pembuatan surat kuasa, dan pendampingan dalam proses PKPU dan kepailitan.
            </li>

            <li>
                Pendampingan dalam proses PKPU, seperti pendampingan dalam rapat kreditur, sidang PKPU, dan homologasi perdamaian.
            </li>

            <li>
                Pendampingan dalam proses kepailitan, seperti pendampingan dalam likuidasi perusahaan, pemberesan harta pailit, dan pembagian hasil likuidasi.
            </li>
        </ol>
        <br>

        <p>Dengan pengalaman dan pengetahuan yang luas, kami yakin dapat membantu Anda menyelesaikan masalah keuangan perusahaan Anda.</p>`;
            break;
    }

    $(".jenis-layanan1")
        .removeClass("pointer-events-none font-bold")
        .addClass("opacity-50");
    $(this).removeClass("opacity-50").addClass("pointer-events-none font-bold");

    $("#detail-layanan1").html(detailLayanan1);
});

