@extends('template.template')

@section('head')

@endsection

@section('body')
<x-navbar :page="'tim-kami'" />

<div class="bg-[#EDEDED] font-outfit *:text-customDarkGray pt-24">
    <section id="tim-kami" class="custom-container pt-12 md:pt-16 xl:pt-20 pb-32 md:pb-48 xl:pb-64 flex flex-col items-center">
        <div class="flex flex-col items-center">
            <img class="size-6 md:size-7 xl:size-8" src="{{asset('assets/logo/logo-rcp.png')}}" alt="logo">

            <h1 class="heading-1 font-cormorant font-bold text-center">Tim Kami</h1>

            <img src="{{asset('assets/logo/line.svg')}}" alt="line" class="w-8 md:w-12 xl:w-16 mt-2 md:mt-3 xl:mt-4 mb-6 md:mb-7 xl:mb-8">
        </div>

        <div class="flex flex-col w-full gap-6 md:gap-7 xl:gap-8">
            <a href="{{route('beranda-tim-kami')}}" class="paragraph flex items-center gap-1 md:gap-1.5 xl:gap-2 hover:text-gold transition">
                <svg class="size-3 md:size-3.5 xl:size-4 rotate-180" viewBox="0 0 52 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.249939 22.9997C0.249939 24.0938 0.684536 25.143 1.45812 25.9166C2.23171 26.6901 3.28092 27.1247 4.37494 27.1247H37.0449L26.2099 37.9597C25.4813 38.7417 25.0846 39.776 25.1035 40.8446C25.1223 41.9133 25.5552 42.9329 26.311 43.6887C27.0668 44.4444 28.0864 44.8774 29.1551 44.8962C30.2237 44.9151 31.258 44.5184 32.0399 43.7897L49.9149 25.9147C50.6874 25.1413 51.1213 24.0929 51.1213 22.9997C51.1213 21.9066 50.6874 20.8582 49.9149 20.0847L32.0399 2.20975C31.6623 1.80447 31.2069 1.47941 30.7009 1.25395C30.1949 1.0285 29.6487 0.907265 29.0948 0.897493C28.5409 0.88772 27.9908 0.989605 27.4771 1.19707C26.9635 1.40454 26.4969 1.71333 26.1052 2.10503C25.7135 2.49674 25.4047 2.96332 25.1973 3.47696C24.9898 3.99059 24.8879 4.54075 24.8977 5.09462C24.9075 5.64849 25.0287 6.19471 25.2541 6.70071C25.4796 7.2067 25.8047 7.6621 26.2099 8.03975L37.0449 18.8747H4.37494C2.09794 18.8747 0.249939 20.7227 0.249939 22.9997Z" />
                </svg>

                Kembali
            </a>


            <div id="tim-selector-container" class="w-full flex items-center justify-center border-b-2 border-customDarkGray overflow-x-auto">
                <div id="tim-selector-content" class="flex items-center gap-8 md:gap-12 xl:gap-16 pb-2 *:cursor-pointer">
                    <p class="tim-selector paragraph flex-none uppercase hover:opacity-100 transition font-bold pointer-events-none" data-nama-tim="Fadjar Sukma">Fadjar Sukma, S.H.</p>
                    <p class="tim-selector paragraph flex-none uppercase hover:opacity-100 transition opacity-50" data-nama-tim="Elisabeth Yunita">Elisabeth Yunita, S.H.</p>
                    <p class="tim-selector paragraph flex-none uppercase hover:opacity-100 transition opacity-50" data-nama-tim="Hafidzun Sat Febrian">Hafidzun Sat Febrian, S.H.</p>
                    <p class="tim-selector paragraph flex-none uppercase hover:opacity-100 transition opacity-50" data-nama-tim="Dicke Muhdi Gailea">Dicke Muhdi Gailea, S.H.</p>
                </div>
            </div>


            <div class="pt-4 md:pt-6 xl:pt-8">
                <div id="detail-tim" class="paragraph flex flex-col items-center gap-8 md:gap-12 xl:gap-16">
                    <div class="flex flex-col items-center *:font-cormorant *:font-bold">
                        <p id="tim-position" class="paragraph text-gold">Junior Associate</p>
                        <h3 id="tim-name" class="heading-3">Fadjar Sukma, S.H.</h3>

                        <div class="text-customDarkGray flex justify-center items-center gap-4 md:gap-5 xl:gap-6 mt-2 md:mt-3 xl:mt-4">
                            <a id="whatsapp" href="" class="hover:text-gold transition" target="_blank" rel="noreferrer noopener">
                                <svg class="size-4 md:size-5 xl:size-6" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.2513 1.74603C9.69841 1.19039 9.03991 0.749834 8.31415 0.450065C7.5884 0.150296 6.80992 -0.00268806 6.02412 3.57417e-05C2.73166 3.57417e-05 0.0482413 2.67003 0.0482413 5.94602C0.0482413 6.99601 0.325628 8.01601 0.844221 8.91601L0 12L3.16583 11.172C4.0402 11.646 5.02312 11.898 6.02412 11.898C9.31658 11.898 12 9.22801 12 5.95202C12 4.36202 11.3789 2.86803 10.2513 1.74603ZM6.02412 10.89C5.13166 10.89 4.25729 10.65 3.49146 10.2L3.31055 10.092L1.42915 10.584L1.92965 8.76001L1.80905 8.57401C1.31321 7.78619 1.04993 6.87556 1.04925 5.94602C1.04925 3.22203 3.2804 1.00203 6.01809 1.00203C7.34472 1.00203 8.59296 1.51803 9.52764 2.45403C9.99044 2.91241 10.3572 3.45762 10.6067 4.05808C10.8561 4.65853 10.9833 5.30229 10.9809 5.95202C10.993 8.67601 8.76181 10.89 6.02412 10.89ZM8.74975 7.19401C8.59899 7.12201 7.86332 6.76202 7.73065 6.70802C7.59196 6.66002 7.49548 6.63602 7.39296 6.78002C7.29045 6.93002 7.00703 7.26601 6.92261 7.36201C6.83819 7.46401 6.74774 7.47601 6.59698 7.39801C6.44623 7.32601 5.96382 7.16401 5.39698 6.66002C4.95075 6.26402 4.65528 5.77802 4.56482 5.62802C4.4804 5.47802 4.55276 5.40002 4.63116 5.32202C4.69749 5.25602 4.78191 5.14802 4.85427 5.06402C4.92663 4.98002 4.95678 4.91402 5.00502 4.81802C5.05327 4.71602 5.02915 4.63202 4.99296 4.56002C4.95678 4.48802 4.65528 3.75602 4.53467 3.45603C4.41407 3.16803 4.28744 3.20403 4.19698 3.19803H3.90754C3.80502 3.19803 3.64824 3.23403 3.50955 3.38403C3.37688 3.53403 2.99095 3.89402 2.99095 4.62602C2.99095 5.35802 3.52764 6.06602 3.6 6.16202C3.67236 6.26402 4.65528 7.76401 6.15075 8.40601C6.50653 8.56201 6.78392 8.65201 7.001 8.71801C7.35678 8.83201 7.68241 8.81401 7.94171 8.77801C8.23115 8.73601 8.82814 8.41801 8.94874 8.07001C9.07537 7.72201 9.07538 7.42801 9.03316 7.36201C8.99095 7.29601 8.9005 7.26601 8.74975 7.19401Z" />
                                </svg>
                            </a>

                            <a id="instagram" href="" class="hover:text-gold transition" target="_blank" rel="noreferrer noopener">
                                <svg class="size-4 md:size-5 xl:size-6" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.9985 2.92142C4.29485 2.92142 2.91992 4.29635 2.91992 6C2.91992 7.70365 4.29485 9.07858 5.9985 9.07858C7.70215 9.07858 9.07708 7.70365 9.07708 6C9.07708 4.29635 7.70215 2.92142 5.9985 2.92142ZM5.9985 8.00085C4.89675 8.00085 3.99765 7.10174 3.99765 6C3.99765 4.89826 4.89675 3.99915 5.9985 3.99915C7.10024 3.99915 7.99935 4.89826 7.99935 6C7.99935 7.10174 7.10024 8.00085 5.9985 8.00085ZM9.20317 2.07785C8.8054 2.07785 8.48418 2.39907 8.48418 2.79684C8.48418 3.1946 8.8054 3.51582 9.20317 3.51582C9.60093 3.51582 9.92215 3.19611 9.92215 2.79684C9.92227 2.70238 9.90375 2.60884 9.86766 2.52155C9.83157 2.43427 9.77862 2.35496 9.71183 2.28817C9.64504 2.22138 9.56573 2.16843 9.47845 2.13234C9.39116 2.09625 9.29762 2.07773 9.20317 2.07785ZM11.9996 6C11.9996 5.17144 12.0071 4.35039 11.9605 3.52333C11.914 2.56268 11.6948 1.7101 10.9924 1.00763C10.2884 0.303651 9.43732 0.0860042 8.47667 0.0394728C7.64811 -0.00705863 6.82706 0.000446468 6 0.000446468C5.17144 0.000446468 4.35039 -0.00705863 3.52333 0.0394728C2.56268 0.0860042 1.7101 0.305152 1.00763 1.00763C0.303651 1.7116 0.0860043 2.56268 0.0394728 3.52333C-0.00705863 4.35189 0.000446468 5.17294 0.000446468 6C0.000446468 6.82706 -0.00705863 7.64961 0.0394728 8.47667C0.0860043 9.43732 0.305152 10.2899 1.00763 10.9924C1.7116 11.6963 2.56268 11.914 3.52333 11.9605C4.35189 12.0071 5.17294 11.9996 6 11.9996C6.82856 11.9996 7.64962 12.0071 8.47667 11.9605C9.43732 11.914 10.2899 11.6948 10.9924 10.9924C11.6964 10.2884 11.914 9.43732 11.9605 8.47667C12.0086 7.64961 11.9996 6.82856 11.9996 6ZM10.6787 9.53939C10.5691 9.81258 10.437 10.0167 10.2254 10.2269C10.0137 10.4385 9.81108 10.5706 9.53789 10.6802C8.74836 10.9939 6.87359 10.9233 5.9985 10.9233C5.12341 10.9233 3.24714 10.9939 2.45761 10.6817C2.18442 10.5721 1.98028 10.44 1.77014 10.2284C1.5585 10.0167 1.42641 9.81408 1.31684 9.54089C1.00463 8.74986 1.07517 6.87509 1.07517 6C1.07517 5.12491 1.00463 3.24864 1.31684 2.45911C1.42641 2.18592 1.5585 1.98179 1.77014 1.77164C1.98179 1.5615 2.18442 1.42791 2.45761 1.31834C3.24714 1.00613 5.12341 1.07667 5.9985 1.07667C6.87359 1.07667 8.74986 1.00613 9.53939 1.31834C9.81258 1.42791 10.0167 1.56 10.2269 1.77164C10.4385 1.98329 10.5706 2.18592 10.6802 2.45911C10.9924 3.24864 10.9218 5.12491 10.9218 6C10.9218 6.87509 10.9924 8.74986 10.6787 9.53939Z" />
                                </svg>
                            </a>

                            <a id="email" href="" class="hover:text-gold transition" target="_blank" rel="noreferrer noopener">
                                <svg class="size-4 md:size-5 xl:size-6" viewBox="0 0 23 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9947 9.06438L21.8311 2.89138V15.1669L15.9947 9.06438ZM8.47406 10.1098L10.5236 12.2756C10.8453 12.6083 11.2646 12.8093 11.7229 12.8093H11.7391H11.7514C12.2107 12.8093 12.6301 12.6072 12.9555 12.2722L12.9527 12.2745L15.0022 10.1086L21.2324 16.6224H2.24673L8.47406 10.1098ZM2.23819 1.42783H21.2438L12.1148 11.0801C12.0122 11.1789 11.8851 11.2326 11.7543 11.2326H11.741H11.7286C11.5973 11.2328 11.4698 11.1786 11.3671 11.0789L11.3681 11.0801L2.23819 1.42783ZM1.64895 2.89022L7.48441 9.06323L1.64895 15.1623V2.89022ZM22.1442 0.0705562C21.9165 -0.0680591 21.6489 -0.148918 21.3652 -0.148918H2.11768C1.84267 -0.148838 1.57143 -0.0709347 1.32539 0.0786421L1.33583 0.0728663C1.04128 0.249729 0.79322 0.523342 0.61968 0.862795C0.446141 1.20225 0.354032 1.59402 0.35376 1.99384V16.0541C0.354262 16.6231 0.540165 17.1686 0.870677 17.571C1.20119 17.9734 1.64932 18.1997 2.11673 18.2003H21.3624C21.8298 18.1997 22.2779 17.9734 22.6084 17.571C22.9389 17.1686 23.1248 16.6231 23.1253 16.0541V1.99384C23.1253 1.15407 22.7278 0.426336 22.149 0.076332L22.1385 0.0705562H22.1442Z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <p id="tim-desc" class="paragraph font-cormorant font-semibold text-justify">
                        Fadjar Sukma adalah seorang Sarjana Hukum lulusan Sekolah Tinggi Ilmu Hukum IBLAM, Jakarta. Ia dikenal sebagai sosok yang cerdas dan pekerja keras. Sejak masih mahasiswa, Fadjar sudah bergabung sebagai mahasiswa magang di Resandhi Cumbhadrika Partnership - Attorneys and Counsellors at Law. Selama magang, Fadjar menunjukkan kemampuannya dalam bidang litigasi, baik perdata umum maupun pidana. Ia juga aktif mengikuti berbagai pelatihan dan seminar hukum untuk meningkatkan kompetensinya.
                        <br><br>
                        Setelah lulus kuliah, Fadjar langsung bergabung sebagai Junior Associate di RCP. Dalam waktu singkat, Fadjar sudah mampu menangani berbagai kasus litigasi dengan baik. Ia juga dikenal sebagai sosok yang ramah dan mudah bergaul, sehingga ia cepat diterima oleh tim di RCP.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="{{asset('js/tim-kami.js')}}"></script>
@endsection
