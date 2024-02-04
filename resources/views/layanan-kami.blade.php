@extends('template.template')

@section('head')

@endsection

@section('body')
<x-navbar :page="'layanan-kami'" />

<div class="bg-[#EDEDED] font-outfit *:text-customDarkGray pt-24">
    <section id="tentang-kami" class="custom-container py-12 md:py-16 xl:py-20 flex flex-col items-center">
        <div class="flex flex-col items-center">
            <img class="size-6 md:size-7 xl:size-8" src="{{asset('assets/logo/logo-rcp.png')}}" alt="logo">

            <h1 class="heading-1 font-cormorant font-bold text-center">Layanan Kami</h1>

            <img src="{{asset('assets/logo/line.svg')}}" alt="line" class="w-8 md:w-12 xl:w-16 mt-2 md:mt-3 xl:mt-4 mb-6 md:mb-7 xl:mb-8">
        </div>

        <div class="flex flex-col w-full gap-6 md:gap-7 xl:gap-8">
            <a href="{{route('beranda')}}" class="paragraph flex items-center gap-1 md:gap-1.5 xl:gap-2 hover:text-gold transition">
                <svg class="size-3 md:size-3.5 xl:size-4 rotate-180" viewBox="0 0 52 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.249939 22.9997C0.249939 24.0938 0.684536 25.143 1.45812 25.9166C2.23171 26.6901 3.28092 27.1247 4.37494 27.1247H37.0449L26.2099 37.9597C25.4813 38.7417 25.0846 39.776 25.1035 40.8446C25.1223 41.9133 25.5552 42.9329 26.311 43.6887C27.0668 44.4444 28.0864 44.8774 29.1551 44.8962C30.2237 44.9151 31.258 44.5184 32.0399 43.7897L49.9149 25.9147C50.6874 25.1413 51.1213 24.0929 51.1213 22.9997C51.1213 21.9066 50.6874 20.8582 49.9149 20.0847L32.0399 2.20975C31.6623 1.80447 31.2069 1.47941 30.7009 1.25395C30.1949 1.0285 29.6487 0.907265 29.0948 0.897493C28.5409 0.88772 27.9908 0.989605 27.4771 1.19707C26.9635 1.40454 26.4969 1.71333 26.1052 2.10503C25.7135 2.49674 25.4047 2.96332 25.1973 3.47696C24.9898 3.99059 24.8879 4.54075 24.8977 5.09462C24.9075 5.64849 25.0287 6.19471 25.2541 6.70071C25.4796 7.2067 25.8047 7.6621 26.2099 8.03975L37.0449 18.8747H4.37494C2.09794 18.8747 0.249939 20.7227 0.249939 22.9997Z" />
                </svg>

                Kembali
            </a>

            <div class="flex">
                <div class="flex-none flex flex-col border-r-2 border-customDarkGray w-32 md:w-48 xl:w-64 pr-4 md:pr-6 xl:pr-8">
                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition font-bold pointer-events-none" data-jenis-layanan="hukum-perdata">Hukum Perdata</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="hukum-pidana">Hukum Pidana</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="hukum-koorporasi-dan-bisnis">Hukum Koorporasi dan Bisnis</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="hukum-pertahanan">Hukum Pertahanan</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="hukum-keluarga">Hukum Keluarga</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="penyelesaian-sengketa">Penyelesaian Sengketa</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="hukum-kekayaan-intelektual">Hukum Kekayaan Intelektual</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="sengketa-hasil-pemilihan-umum-legislatif">Sengketa Hasil Pemilihan Umum Legislatif</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="sengketa-hasil-pemilihan-umum-kepala-daerah">Sengketa Hasil Pemilihan Umum Kepala Daerah</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="hukum-ketenagakerjaan">Hukum Ketenagakerjaan</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="hukum-lingkungan">Hukum Lingkungan</p>
                    </div>

                    <div class="py-3 md:py-3.5 xl:py-4">
                        <p class="paragraph jenis-layanan cursor-pointer hover:opacity-100 transition opacity-50" data-jenis-layanan="pkpu-dan-kepailitan">PKPU dan Kepailitan</p>
                    </div>
                </div>

                <div id="detail-layanan" class="paragraph pl-6 md:pl-10 xl:pl-14 *:font-cormorant font-semibold">
                    <p>
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
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="{{asset('js/layanan-kami.js')}}"></script>
@endsection
