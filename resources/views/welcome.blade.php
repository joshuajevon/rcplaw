@extends('template.template')

@section('head')
<link rel="stylesheet" href="{{ asset('css/pagination.css') }}?t={{ env('VERSION_TIME') }}">
@endsection

@section('body')
<x-navbar :page="'beranda'" />

<div class="bg-[#EDEDED] font-outfit *:text-customDarkGray">
    {{-- BERANDA --}}
    <section id="beranda" class="flex flex-col gap-32 pt-48 pb-20">
        <div class="custom-container flex item-center gap-16">
            <div class="flex-none flex flex-col gap-16 w-2/5">
                <h1 class="title font-cormorant font-bold   leading" style="line-height: 1.5;">
                    Resandhi
                    <br>
                    Cumbhadrika
                    <br>
                    Partnership</h1>

                <form id="form-subscribe" action="{{ route('storeEmail') }}" method="POST" onsubmit="subscribe(event)">
                    @csrf
                    <div class="flex border-2 border-customDarkGray rounded-xl overflow-hidden paragraph bg-[#D9D9D9] *:font-cormorant *:font-bold">
                        <input class="border-none outline-none py-3 pl-4 w-full bg-[#D9D9D9] focus:ring-0" type="text" name="email" id="email" placeholder="Alamat email Anda" value="{{ old('email') }}">
                        <button class="flex-none py-2.5 px-6 bg-gold m-1 rounded-lg hover:bg-[linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1))]" type="submit">Hubungi Kami</button>
                    </div>
                    <p class="text-xs text-red-500 mt-2">Error Message</p>
                </form>
            </div>

            <div class="flex w-full gap-4 h-96">
                <div class="group transition-all h-full overflow-hidden w-1/5 hover:w-96 shadow-lg rounded-2xl relative">
                    <div class="absolute bottom-8 bg-gold h-16 w-full z-10 group-hover:hidden"></div>

                    <div class="absolute z-10 text-white bottom-8 flex justify-center items-center right-0 left-0 mx-auto p-4 font-bold *:font-cormorant gap-2 rotate-180 group-hover:hidden" style="writing-mode: vertical-rl;">
                        <h4 class="heading-4" style="text-orientation: mixed;">PKPU & Kepailitan</h4>
                    </div>

                    <div class="absolute z-10 text-white bottom-4 hidden group-hover:flex flex-col p-4 font-bold *:font-cormorant gap-2">
                        <h5 class="heading-5">PKPU & Kepailitan</h5>
                        <p class="text-xs md:text-sm">PKPU dan kepailitan adalah proses hukum yang bertujuan untuk menyelamatkan perusahaan yang sedang mengalami kesulitan keuangan.</p>
                    </div>

                    <img class="object-cover h-full brightness-50" src="{{asset('assets/beranda/pkpu-&-kepailitan.png')}}" alt="pkpu-&-kepailitan">
                </div>

                <div class="group transition-all h-full overflow-hidden w-1/5 hover:w-96 shadow-lg rounded-2xl relative">
                    <div class="absolute bottom-8 bg-gold h-16 w-full z-10 group-hover:hidden"></div>

                    <div class="absolute z-10 text-white bottom-8 flex justify-center items-center right-0 left-0 mx-auto p-4 font-bold *:font-cormorant gap-2 rotate-180 group-hover:hidden" style="writing-mode: vertical-rl;">
                        <h4 class="heading-4" style="text-orientation: mixed;">Perdata Umum</h4>
                    </div>

                    <div class="absolute z-10 text-white bottom-4 hidden group-hover:flex flex-col p-4 font-bold *:font-cormorant gap-2">
                        <h5 class="heading-5">Perdata Umum</h5>
                        <p class="text-xs md:text-sm">Hukum perdata mengatur berbagai aspek kehidupan manusia, mulai dari hukum keluarga, hukum perikatan, hukum kekayaan, hukum waris, hukum benda, hukum perjanjian, hukum warisan, dan lain-lain.</p>
                    </div>

                    <img class="object-cover h-full brightness-50" src="{{asset('assets/beranda/perdana-umum.png')}}" alt="perdana-umum">
                </div>

                <div class="group transition-all h-full overflow-hidden w-1/5 hover:w-96 shadow-lg rounded-2xl relative">
                    <div class="absolute bottom-8 bg-gold h-16 w-full z-10 group-hover:hidden"></div>

                    <div class="absolute z-10 text-white bottom-8 flex justify-center items-center right-0 left-0 mx-auto p-4 font-bold *:font-cormorant gap-2 rotate-180 group-hover:hidden" style="writing-mode: vertical-rl;">
                        <h4 class="heading-4" style="text-orientation: mixed;">Perselisihan Hubungan Industrial</h4>
                    </div>

                    <div class="absolute z-10 text-white bottom-4 hidden group-hover:flex flex-col p-4 font-bold *:font-cormorant gap-2">
                        <h5 class="heading-5">Perselisihan Hubungan Industrial</h5>
                        <p class="text-xs md:text-sm">Perselisihan Hubungan Industrial (PPHI) adalah perbedaan pendapat yang mengakibatkan pertentangan antara pengusaha atau gabungan pengusaha dengan pekerja/buruh atau serikat pekerja/serikat buruh karena adanya perselisihan mengenai hak, kepentingan, pemutusan hubungan kerja, dan antar serikat pekerja/serikat buruh dalam satu perusahaan.</p>
                    </div>

                    <img class="object-cover h-full brightness-50" src="{{asset('assets/beranda/perselisihan-hubungan-industrial.png')}}" alt="perselisihan-hubungan-industrial">
                </div>

                <div class="group transition-all h-full overflow-hidden w-1/5 hover:w-96 shadow-lg rounded-2xl relative">
                    <div class="absolute bottom-8 bg-gold h-16 w-full z-10 group-hover:hidden"></div>

                    <div class="absolute z-10 text-white bottom-8 flex justify-center items-center right-0 left-0 mx-auto p-4 font-bold *:font-cormorant gap-2 rotate-180 group-hover:hidden" style="writing-mode: vertical-rl;">
                        <h4 class="heading-4" style="text-orientation: mixed;">Pidana Umum dan Pidana Khusus</h4>
                    </div>

                    <div class="absolute z-10 text-white bottom-4 hidden group-hover:flex flex-col p-4 font-bold *:font-cormorant gap-2">
                        <h5 class="heading-5">Pidana Umum dan Pidana Khusus</h5>
                        <p class="text-xs md:text-sm">Hukum pidana adalah cabang hukum yang mengatur perbuatan yang dilarang oleh hukum dan diancam dengan hukuman. Hukum pidana bertujuan untuk melindungi ketertiban umum dan keamanan masyarakat.</p>
                    </div>

                    <img class="object-cover h-full brightness-50" src="{{asset('assets/beranda/pidana-umum-dan-pidana-khusus.png')}}" alt="pidana-umum-dan-pidana-khusus">
                </div>

                <div class="group transition-all h-full overflow-hidden w-1/5 hover:w-96 shadow-lg rounded-2xl relative">
                    <div class="absolute bottom-8 bg-gold h-16 w-full z-10 group-hover:hidden"></div>

                    <div class="absolute z-10 text-white bottom-8 flex justify-center items-center right-0 left-0 mx-auto p-4 font-bold *:font-cormorant gap-2 rotate-180 group-hover:hidden" style="writing-mode: vertical-rl;">
                        <h4 class="heading-4" style="text-orientation: mixed;">Hukum Kekeluargaan dan Waris Islam</h4>
                    </div>

                    <div class="absolute z-10 text-white bottom-4 hidden group-hover:flex flex-col p-4 font-bold *:font-cormorant gap-2">
                        <h5 class="heading-5">Hukum Kekeluargaan dan Waris Islam</h5>
                        <p class="text-xs md:text-sm">Hukum Kekeluargaan dan Waris Islam (HKWI) adalah seperangkat aturan dalam agama Islam yang mengatur kehidupan keluarga Muslim secara menyeluruh, mulai dari pernikahan, perceraian, hak asuh anak, hubungan kekeluargaan, ibadah haji, wakaf, hingga pembagian harta warisan.</p>
                    </div>

                    <img class="object-cover h-full brightness-50" src="{{asset('assets/beranda/hukum-kekeluargaan-dan-waris-islam.png')}}" alt="hukum-kekeluargaan-dan-waris-islam">
                </div>

            </div>
        </div>

        <div class="flex flex-col gap-8">
            <p class="uppercase paragraph font-semibold text-center">Dipercaya oleh banyak Client di Indonesia</p>

            <div class="w-full inline-flex flex-nowrap overflow-hidden">
                <ul class="flex items-center [&_li]:mx-4 [&_img]:max-w-none animate-infinite-scroll-left">
                    @for($i = 1; $i
                    <= 16; $i++) <li>
                        <img loading="lazy" class="h-8 w-auto" src="{{ asset('assets/logo/klien/logo-' . $i . '.png') }}" alt="Logo {{ $i }}" />
                        </li>
                        @endfor
                </ul>
                <ul class="flex items-center [&_li]:mx-4 [&_img]:max-w-none animate-infinite-scroll-left" aria-hidden="true">
                    @for($i = 1; $i
                    <= 16; $i++) <li>
                        <img loading="lazy" class="h-8 w-auto" src="{{ asset('assets/logo/klien/logo-' . $i . '.png') }}" alt="Logo {{ $i }}" />
                        </li>
                        @endfor
                </ul>
            </div>

            <div class="w-full inline-flex flex-nowrap overflow-hidden">
                <ul class="flex items-center [&_li]:mx-4 [&_img]:max-w-none animate-infinite-scroll-right">
                    @for($i = 17; $i
                    <= 33; $i++) <li>
                        <img loading="lazy" class="h-8 w-auto" src="{{ asset('assets/logo/klien/logo-' . $i . '.png') }}" alt="Logo {{ $i }}" />
                        </li>
                        @endfor
                </ul>
                <ul class="flex items-center [&_li]:mx-4 [&_img]:max-w-none animate-infinite-scroll-right" aria-hidden="true">
                    @for($i = 17; $i
                    <= 33; $i++) <li>
                        <img loading="lazy" class="h-8 w-auto" src="{{ asset('assets/logo/klien/logo-' . $i . '.png') }}" alt="Logo {{ $i }}" />
                        </li>
                        @endfor
                </ul>
            </div>

            <div class="w-full inline-flex flex-nowrap overflow-hidden">
                <ul class="flex items-center [&_li]:mx-4 [&_img]:max-w-none animate-infinite-scroll-left">
                    @for($i = 34; $i
                    <= 52; $i++) <li>
                        <img loading="lazy" class="h-8 w-auto" src="{{ asset('assets/logo/klien/logo-' . $i . '.png') }}" alt="Logo {{ $i }}" />
                        </li>
                        @endfor
                </ul>
                <ul class="flex items-center [&_li]:mx-4 [&_img]:max-w-none animate-infinite-scroll-left" aria-hidden="true">
                    @for($i = 34; $i
                    <= 52; $i++) <li>
                        <img loading="lazy" class="h-8 w-auto" src="{{ asset('assets/logo/klien/logo-' . $i . '.png') }}" alt="Logo {{ $i }}" />
                        </li>
                        @endfor
                </ul>
            </div>
        </div>
    </section>


    {{-- TENTANG KAMI --}}
    <section id="tentang-kami" class="py-20 custom-container flex flex-col items-center">
        <div class="flex flex-col items-center">
            <img class="size-6 md:size-7 xl:size-8" src="{{asset('assets/logo/logo-rcp.png')}}" alt="logo">

            <h1 class="heading-1 font-cormorant font-bold text-center">Tentang Kami</h1>

            <img src="{{asset('assets/logo/line.svg')}}" alt="line" class="w-8 md:w-12 xl:w-16 mt-2 md:mt-3 xl:mt-4 mb-6 md:mb-7 xl:mb-8">
        </div>


        <p class="text-center leading-loose"><span class="font-bold">Resandhi Cumbhadrika Partnership (RCP)</span> adalah firma hukum penuh layanan yang beroperasi sejak 2020. Dengan lebih dari 10 tahun pengalaman sebagai pengacara, tim RCP berkomitmen untuk memberikan layanan hukum profesional berstandar internasional. Firma ini menawarkan sumber daya dan keahlian yang dapat dipercayakan untuk membantu klien. Dengan pengetahuan mendalam dalam ilmu hukum dan kredibilitas profesional, RCP bertujuan untuk mempertahankan dan memaksimalkan posisi serta kepentingan hukum klien.</p>

        <span class="border border-b-gold mt-16 mb-12 pb-1">
            <p class="font-bold">Keunggulan Kami</p>
        </span>

        {{-- KEUNGGULAN KAMI --}}
        <div class="flex justify-center gap-20 items-center">
            <div class="flex flex-col items-center gap-2 group">
                <div class="border-b border-b-customDarkGray group-hover:border-b-gold pb-2 group-hover:text-gold transition">
                    <svg class="size-12" viewBox="0 0 43 43" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_13_70)">
                            <path d="M38.2222 33.4445H4.77777V25.4656C3.88821 25.0395 3.07979 24.4614 2.38889 23.7575V33.4445C2.38889 34.078 2.64057 34.6856 3.08857 35.1337C3.53658 35.5817 4.1442 35.8333 4.77777 35.8333H38.2222C38.8558 35.8333 39.4634 35.5817 39.9114 35.1337C40.3594 34.6856 40.6111 34.078 40.6111 33.4445V23.7575C39.9253 24.4642 39.1156 25.0391 38.2222 25.4536V33.4445Z" />
                            <path d="M29.8611 26.7556C30.1779 26.7556 30.4817 26.6298 30.7057 26.4058C30.9297 26.1818 31.0556 25.8779 31.0556 25.5612V19.0395H28.6667V21.5H16.7222V23.8889H28.6667V25.5612C28.6667 25.8779 28.7925 26.1818 29.0165 26.4058C29.2405 26.6298 29.5443 26.7556 29.8611 26.7556Z" />
                            <path d="M39.4167 7.16668H28.6667V5.23168C28.6541 4.46712 28.3391 3.7387 27.7906 3.20589C27.2421 2.67309 26.5049 2.37932 25.7403 2.3889H17.2597C16.4951 2.37932 15.7579 2.67309 15.2094 3.20589C14.6609 3.7387 14.3459 4.46712 14.3333 5.23168V7.16668H3.58333C3.26654 7.16668 2.96273 7.29252 2.73873 7.51652C2.51473 7.74052 2.38889 8.04433 2.38889 8.36112V17.9167C2.38889 19.5006 3.0181 21.0197 4.13811 22.1397C5.25812 23.2597 6.77718 23.8889 8.36111 23.8889H11.9444V25.5611C11.9444 25.8779 12.0703 26.1817 12.2943 26.4057C12.5183 26.6297 12.8221 26.7556 13.1389 26.7556C13.4557 26.7556 13.7595 26.6297 13.9835 26.4057C14.2075 26.1817 14.3333 25.8779 14.3333 25.5611V19.0395H11.9444V21.5H8.36111C7.41075 21.5 6.49931 21.1225 5.82731 20.4505C5.1553 19.7785 4.77777 18.867 4.77777 17.9167V9.55557H38.2222V17.9167C38.2222 18.867 37.8447 19.7785 37.1727 20.4505C36.5007 21.1225 35.5892 21.5 34.6389 21.5H33.4444V23.8889H34.6389C36.2228 23.8889 37.7419 23.2597 38.8619 22.1397C39.9819 21.0197 40.6111 19.5006 40.6111 17.9167V8.36112C40.6111 8.04433 40.4853 7.74052 40.2613 7.51652C40.0373 7.29252 39.7334 7.16668 39.4167 7.16668ZM26.2778 7.16668H16.7222V5.2914C16.7284 5.15303 16.7877 5.02237 16.8879 4.92668C16.988 4.83099 17.1212 4.77765 17.2597 4.77779H25.7522C25.8197 4.7762 25.8868 4.78792 25.9497 4.81228C26.0126 4.83663 26.0701 4.87315 26.1189 4.91973C26.1677 4.96632 26.2069 5.02207 26.2341 5.08379C26.2614 5.14551 26.2762 5.212 26.2778 5.27945V7.16668Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_13_70">
                                <rect width="43" height="43" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>

                <p class="group-hover:text-gold transition text-center">> 10 Tahun</p>
            </div>

            <div class="flex flex-col items-center gap-2 group">
                <div class="border-b border-b-customDarkGray group-hover:border-b-gold pb-2 group-hover:text-gold transition">
                    <svg class="size-12" viewBox="0 0 43 43" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5 11.1979C19.9557 11.1979 18.4746 11.8114 17.3826 12.9034C16.2906 13.9954 15.6771 15.4765 15.6771 17.0209C15.6771 18.5652 16.2906 20.0463 17.3826 21.1383C18.4746 22.2303 19.9557 22.8438 21.5 22.8438C23.0443 22.8438 24.5254 22.2303 25.6174 21.1383C26.7094 20.0463 27.3229 18.5652 27.3229 17.0209C27.3229 15.4765 26.7094 13.9954 25.6174 12.9034C24.5254 11.8114 23.0443 11.1979 21.5 11.1979ZM18.3646 17.0209C18.3646 16.1893 18.6949 15.3918 19.2829 14.8038C19.8709 14.2158 20.6684 13.8854 21.5 13.8854C22.3316 13.8854 23.1291 14.2158 23.7171 14.8038C24.3051 15.3918 24.6354 16.1893 24.6354 17.0209C24.6354 17.8524 24.3051 18.6499 23.7171 19.2379C23.1291 19.8259 22.3316 20.1563 21.5 20.1563C20.6684 20.1563 19.8709 19.8259 19.2829 19.2379C18.6949 18.6499 18.3646 17.8524 18.3646 17.0209Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5 4.03125C19.1571 4.03109 16.8578 4.66459 14.8456 5.86465C12.8334 7.06471 11.1833 8.78665 10.0699 10.8481C8.95656 12.9095 8.42147 15.2337 8.52133 17.5745C8.62118 19.9152 9.35226 22.1854 10.6371 24.1445L6.00209 32.1712C5.87342 32.3947 5.8118 32.6506 5.82459 32.9082C5.83738 33.1658 5.92405 33.4143 6.07423 33.624C6.22442 33.8336 6.43178 33.9957 6.67156 34.0907C6.91134 34.1858 7.1734 34.2098 7.42646 34.1599L12.1099 33.239L13.6525 37.754C13.7356 37.9986 13.8875 38.2141 14.09 38.3746C14.2924 38.5351 14.5369 38.6338 14.794 38.659C15.0511 38.6841 15.31 38.6346 15.5398 38.5163C15.7695 38.3981 15.9602 38.2162 16.0892 37.9923L20.7117 29.9871C21.2367 30.0188 21.7633 30.0188 22.2883 29.9871L26.9108 37.9923C27.0399 38.2161 27.2308 38.398 27.4606 38.5161C27.6905 38.6342 27.9495 38.6835 28.2066 38.6582C28.4638 38.6329 28.7081 38.5339 28.9105 38.3732C29.1128 38.2125 29.2646 37.9969 29.3475 37.7522L30.8848 33.2265L35.5718 34.1581C35.8249 34.2084 36.0873 34.1847 36.3273 34.0899C36.5674 33.995 36.7751 33.833 36.9255 33.6232C37.076 33.4134 37.1628 33.1648 37.1756 32.9069C37.1885 32.6491 37.1268 32.3931 36.9979 32.1694L32.3647 24.1445C33.6496 22.1852 34.3807 19.9149 34.4805 17.574C34.5803 15.2331 34.045 12.9088 32.9315 10.8473C31.8179 8.78581 30.1675 7.06389 28.155 5.86396C26.1426 4.66403 23.843 4.03077 21.5 4.03125ZM11.1979 17.0208C11.1979 14.2886 12.2833 11.6682 14.2153 9.73616C16.1473 7.80415 18.7677 6.71875 21.5 6.71875C24.2323 6.71875 26.8527 7.80415 28.7847 9.73616C30.7167 11.6682 31.8021 14.2886 31.8021 17.0208C31.8021 19.7531 30.7167 22.3735 28.7847 24.3055C26.8527 26.2375 24.2323 27.3229 21.5 27.3229C18.7677 27.3229 16.1473 26.2375 14.2153 24.3055C12.2833 22.3735 11.1979 19.7531 11.1979 17.0208ZM17.888 29.5016C15.8501 28.9114 13.9879 27.8305 12.4646 26.3536L9.80938 30.9528L12.7423 30.3759C13.0611 30.3134 13.3917 30.3684 13.6729 30.5308C13.9542 30.6931 14.1672 30.9519 14.2724 31.2592L15.2399 34.0882L17.888 29.5016ZM27.7565 34.0811L25.112 29.5016C27.1499 28.9113 29.0121 27.8305 30.5354 26.3536L33.187 30.9457L30.2523 30.3616C29.9326 30.2983 29.6008 30.3533 29.3186 30.5165C29.0365 30.6796 28.8232 30.9398 28.7186 31.2485L27.7565 34.0811Z" />
                    </svg>
                </div>

                <p class="group-hover:text-gold transition text-center">Solusi Terbaik</p>
            </div>

            <div class="flex flex-col items-center gap-2 group">
                <div class="border-b border-b-customDarkGray group-hover:border-b-gold pb-2 group-hover:text-gold transition">
                    <svg class="size-12" viewBox="0 0 43 43" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.0833 5.85694C25.0833 4.60098 24.0657 3.58331 22.8097 3.58331H20.1921C18.9343 3.58331 17.9167 4.60098 17.9167 5.85694C17.9167 6.89252 17.2072 7.78119 16.2415 8.16102C16.0892 8.22194 15.9369 8.28644 15.7882 8.35094C14.8368 8.76302 13.7062 8.6376 12.9717 7.90481C12.5453 7.47877 11.9673 7.23945 11.3645 7.23945C10.7618 7.23945 10.1838 7.47877 9.75742 7.90481L7.90483 9.7574C7.4788 10.1837 7.23948 10.7618 7.23948 11.3645C7.23948 11.9672 7.4788 12.5453 7.90483 12.9716C8.63942 13.7062 8.76483 14.835 8.34917 15.7881C8.28386 15.9382 8.22114 16.0893 8.16104 16.2414C7.78121 17.2071 6.89254 17.9166 5.85696 17.9166C4.601 17.9166 3.58333 18.9343 3.58333 20.1903V22.8097C3.58333 24.0656 4.601 25.0833 5.85696 25.0833C6.89254 25.0833 7.78121 25.7928 8.16104 26.7585C8.22196 26.9108 8.28646 27.0631 8.34917 27.2118C8.76304 28.1632 8.63763 29.2937 7.90483 30.0283C7.4788 30.4547 7.23948 31.0327 7.23948 31.6354C7.23948 32.2382 7.4788 32.8162 7.90483 33.2426L9.75742 35.0951C10.1838 35.5212 10.7618 35.7605 11.3645 35.7605C11.9673 35.7605 12.5453 35.5212 12.9717 35.0951C13.7062 34.3606 14.835 34.2351 15.7882 34.649C15.9369 34.7153 16.0892 34.778 16.2415 34.8389C17.2072 35.2188 17.9167 36.1074 17.9167 37.143C17.9167 38.399 18.9343 39.4166 20.1903 39.4166H22.8097C24.0657 39.4166 25.0833 38.399 25.0833 37.143C25.0833 36.1074 25.7928 35.2188 26.7585 34.8371C26.9108 34.778 27.0631 34.7153 27.2118 34.6508C28.1632 34.2351 29.2938 34.3624 30.0265 35.0951C30.2377 35.3064 30.4884 35.4739 30.7643 35.5882C31.0402 35.7026 31.3359 35.7614 31.6346 35.7614C31.9332 35.7614 32.2289 35.7026 32.5049 35.5882C32.7808 35.4739 33.0314 35.3064 33.2426 35.0951L35.0952 33.2426C35.5212 32.8162 35.7605 32.2382 35.7605 31.6354C35.7605 31.0327 35.5212 30.4547 35.0952 30.0283C34.3606 29.2937 34.2352 28.165 34.649 27.2118C34.7153 27.0631 34.778 26.9108 34.839 26.7585C35.2188 25.7928 36.1075 25.0833 37.143 25.0833C38.399 25.0833 39.4167 24.0656 39.4167 22.8097V20.1921C39.4167 18.9361 38.399 17.9184 37.143 17.9184C36.1075 17.9184 35.2188 17.2089 34.8372 16.2432C34.7771 16.091 34.7144 15.9399 34.649 15.7899C34.237 14.8386 34.3624 13.708 35.0952 12.9734C35.5212 12.5471 35.7605 11.969 35.7605 11.3663C35.7605 10.7636 35.5212 10.1855 35.0952 9.75919L33.2426 7.9066C32.8162 7.48057 32.2382 7.24125 31.6355 7.24125C31.0327 7.24125 30.4547 7.48057 30.0283 7.9066C29.2938 8.64119 28.165 8.7666 27.2118 8.35273C27.0618 8.28681 26.9107 8.22349 26.7585 8.16281C25.7928 7.78119 25.0833 6.89073 25.0833 5.85694Z" stroke-width="2" />
                        <path d="M28.6667 21.5C28.6667 23.4007 27.9116 25.2236 26.5676 26.5676C25.2236 27.9116 23.4007 28.6666 21.5 28.6666C19.5993 28.6666 17.7764 27.9116 16.4324 26.5676C15.0884 25.2236 14.3333 23.4007 14.3333 21.5C14.3333 19.5993 15.0884 17.7764 16.4324 16.4324C17.7764 15.0884 19.5993 14.3333 21.5 14.3333C23.4007 14.3333 25.2236 15.0884 26.5676 16.4324C27.9116 17.7764 28.6667 19.5993 28.6667 21.5Z" stroke-width="2" />
                    </svg>
                </div>

                <p class="group-hover:text-gold transition text-center">Efisien & Efektif</p>
            </div>

            <div class="flex flex-col items-center gap-2 group">
                <div class="border-b border-b-customDarkGray group-hover:border-b-gold pb-2 group-hover:text-gold transition">
                    <svg class="size-12" viewBox="0 0 43 43" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8389 5.35347C7.31886 5.11973 6.72727 5.10212 6.19425 5.30453C5.66123 5.50693 5.23043 5.91276 4.9966 6.43277L0.346152 16.7592C0.112136 17.2787 0.0939086 17.8699 0.295474 18.4028C0.49704 18.9358 0.901914 19.3669 1.42115 19.6015L4.62465 21.0442C4.882 21.1604 5.15973 21.2248 5.44196 21.2336C5.72419 21.2425 6.00541 21.1957 6.26954 21.0958C6.53368 20.996 6.77557 20.8451 6.98139 20.6518C7.18721 20.4585 7.35294 20.2265 7.4691 19.9692L12.1196 9.64057C12.3536 9.12106 12.3718 8.5299 12.1702 7.99696C11.9687 7.46402 11.5638 7.03289 11.0446 6.79827L7.8389 5.35347ZM4.02695 18.0987C4.20229 18.1777 4.39148 18.2215 4.58372 18.2274C4.77596 18.2334 4.96749 18.2014 5.14737 18.1333C5.32725 18.0652 5.49196 17.9624 5.63209 17.8306C5.77223 17.6989 5.88505 17.5409 5.9641 17.3655C6.04316 17.1902 6.08691 17.001 6.09285 16.8088C6.09879 16.6165 6.0668 16.425 5.99872 16.2451C5.93064 16.0652 5.8278 15.9005 5.69607 15.7604C5.56433 15.6202 5.40629 15.5074 5.23095 15.4284C4.87685 15.2687 4.47382 15.2563 4.11054 15.3937C3.74725 15.5312 3.45346 15.8074 3.2938 16.1615C3.13414 16.5156 3.12169 16.9186 3.25918 17.2819C3.39667 17.6452 3.67285 17.939 4.02695 18.0987ZM40.8823 19.8832C41.1463 19.783 41.388 19.6317 41.5935 19.4381C41.7991 19.2445 41.9645 19.0123 42.0803 18.7547C42.1961 18.4972 42.26 18.2193 42.2684 17.9371C42.2768 17.6548 42.2295 17.3737 42.1293 17.1097L38.1195 6.52307C38.0195 6.25887 37.8684 6.01696 37.6749 5.81117C37.4814 5.60539 37.2492 5.43976 36.9916 5.32375C36.734 5.20774 36.4561 5.14363 36.1738 5.13508C35.8914 5.12653 35.6101 5.17371 35.346 5.27392L32.063 6.51877C31.7989 6.61897 31.5573 6.7702 31.3517 6.96382C31.1461 7.15744 30.9807 7.38966 30.8649 7.64721C30.7491 7.90477 30.6852 8.18261 30.6768 8.46487C30.6684 8.74713 30.7157 9.02828 30.816 9.29227L34.8279 19.881C35.0298 20.4141 35.4352 20.8451 35.9549 21.0794C36.4746 21.3136 37.066 21.3319 37.5992 21.1302L40.8823 19.8832ZM34.5677 8.17642C34.3879 8.24461 34.2232 8.34755 34.0831 8.47937C33.9431 8.61119 33.8303 8.76931 33.7514 8.9447C33.6724 9.12009 33.6288 9.30931 33.6229 9.50157C33.6171 9.69382 33.6492 9.88534 33.7174 10.0652C33.7856 10.245 33.8885 10.4097 34.0203 10.5498C34.1522 10.6898 34.3103 10.8026 34.4857 10.8815C34.661 10.9605 34.8503 11.0041 35.0425 11.01C35.2348 11.0158 35.4263 10.9837 35.6062 10.9155C35.9694 10.7778 36.263 10.5015 36.4225 10.1472C36.582 9.79303 36.5942 9.38997 36.4565 9.02675C36.3188 8.66352 36.0424 8.36987 35.6882 8.2104C35.334 8.05094 34.9309 8.03871 34.5677 8.17642Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M32.0027 8.83H32.0199C32.1607 8.81771 32.2976 8.77783 32.423 8.71262C32.5483 8.64741 32.6596 8.55816 32.7504 8.44995C32.8413 8.34174 32.9099 8.2167 32.9524 8.08197C32.9949 7.94723 33.0105 7.80544 32.9982 7.6647C32.9859 7.52395 32.946 7.387 32.8808 7.26166C32.8156 7.13633 32.7264 7.02507 32.6182 6.93423C32.5099 6.84339 32.3849 6.77475 32.2502 6.73224C32.1154 6.68972 31.9736 6.67416 31.8329 6.68645H31.8157L31.7598 6.6929L31.5512 6.7144C30.4626 6.81784 29.376 6.94113 28.2919 7.0842C26.3698 7.33575 23.9854 7.72275 22.4266 8.24305C21.6677 8.4946 20.8679 8.98265 20.1046 9.54165C19.2825 10.1528 18.4971 10.8118 17.7525 11.5153C16.3868 12.8041 15.0817 14.1558 13.8417 15.5659C12.9408 16.585 12.7323 18.2104 13.7901 19.3628C14.4781 20.1067 15.5531 21.0484 16.9463 21.4698C18.4018 21.9063 20.0788 21.7364 21.7924 20.4636L23.9402 19.0769C23.9529 19.0686 23.9658 19.0607 23.9789 19.0532C24.2864 19.2403 24.7142 19.5628 25.2259 19.9906C25.7849 20.4593 26.3912 21.0119 26.9567 21.5429C27.5984 22.1479 28.2291 22.7644 28.8487 23.3919L28.9669 23.5145L28.997 23.5446L29.0078 23.5553L29.1346 23.6843L29.2959 23.7682C30.1623 24.1982 31.1148 24.0434 31.8544 23.794C32.6241 23.536 33.3895 23.0974 34.0409 22.6652C34.8572 22.1171 35.6299 21.5069 36.3522 20.8399L36.3909 20.8055L36.4016 20.7947L36.4038 20.7926C36.4038 20.7926 36.2146 20.1261 35.475 19.3478L34.8923 20.0788L34.4 21.4999L29.0078 23.5553L30.1 22.5749L29.5238 21.0334C29.1634 20.6785 28.7993 20.3273 28.4316 19.9799C27.8511 19.4338 27.2104 18.8511 26.6041 18.3459C26.0171 17.8514 25.4065 17.3827 24.897 17.1032C24.0499 16.6388 23.22 16.9828 22.7728 17.273L20.5626 18.7006L20.5325 18.7221C19.3392 19.6165 18.3588 19.6509 17.5655 19.4123C16.7055 19.1543 15.9422 18.5265 15.3725 17.9073C15.194 17.7138 15.1424 17.3418 15.452 16.9914C16.6458 15.633 17.902 14.3309 19.2167 13.0891C19.9498 12.4076 20.6851 11.7776 21.371 11.2767C22.0719 10.765 22.661 10.4317 23.106 10.2834C24.4476 9.8362 26.6428 9.46855 28.5756 9.2127C29.6326 9.07376 30.692 8.95406 31.7533 8.85365L31.9533 8.8343L32.0027 8.83Z" />
                        <path d="M30.373 21.8805C30.0923 21.5959 29.8092 21.3135 29.5238 21.0334L30.1 22.575L29.0078 23.5575L34.4 21.5L34.8923 20.081L35.475 19.35L34.9268 19.2339L34.9203 19.2382L34.8902 19.2661L34.7741 19.3736C34.1683 19.9186 33.5253 20.4207 32.8498 20.8765C32.2693 21.2635 31.6824 21.586 31.1664 21.758C30.7665 21.8934 30.5171 21.9042 30.373 21.8805Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.851 10.8962L10.4275 9.90718L10.0039 8.91818L10.0899 8.88378L10.3329 8.78058C11.5249 8.27442 12.7218 7.77989 13.9234 7.29708C14.8993 6.90311 15.8827 6.52822 16.8732 6.17263C17.3096 6.01783 17.716 5.88453 18.0557 5.78778C18.3481 5.70178 18.7222 5.60718 19.0275 5.60718C19.307 5.60718 19.6015 5.67168 19.8445 5.73618C20.1068 5.80713 20.3949 5.90173 20.6873 6.00923C21.2764 6.22423 21.9407 6.50373 22.5556 6.77463C23.2728 7.09516 23.9839 7.42919 24.6884 7.77653L24.8303 7.84533L24.869 7.86468L24.8819 7.87113C25.1371 7.99857 25.3312 8.22216 25.4215 8.49271C25.5118 8.76326 25.491 9.05861 25.3635 9.31378C25.2361 9.56895 25.0125 9.76304 24.742 9.85336C24.4714 9.94368 24.1761 9.92282 23.9209 9.79538L23.9101 9.78893L23.8757 9.77173L23.7424 9.70723C23.0612 9.37212 22.3738 9.04956 21.6806 8.73973C21.1131 8.48426 20.5373 8.24763 19.9541 8.03023C19.7358 7.94918 19.5142 7.87745 19.2898 7.81523C19.2058 7.79101 19.1204 7.77234 19.0339 7.75933L19.0146 7.76363C18.9716 7.77008 18.8576 7.79373 18.6448 7.85393C18.2889 7.95904 17.9362 8.07447 17.587 8.20008C16.7528 8.49463 15.7272 8.89238 14.7232 9.29443C13.535 9.77032 12.3517 10.2584 11.1735 10.7586L10.9349 10.8596L10.851 10.8962ZM9.4385 10.3307C9.32659 10.0687 9.3233 9.77296 9.42932 9.5085C9.53535 9.24404 9.74203 9.03249 10.0039 8.92033L10.4275 9.90933L10.851 10.8962C10.7212 10.9519 10.5816 10.9815 10.4403 10.9833C10.299 10.985 10.1587 10.9589 10.0275 10.9063C9.89633 10.8538 9.77677 10.7759 9.6757 10.6772C9.57463 10.5784 9.49402 10.4607 9.4385 10.3307ZM5.34705 18.8447C5.44401 18.7421 5.56025 18.6595 5.68913 18.6018C5.81801 18.5441 5.957 18.5123 6.09816 18.5083C6.23932 18.5043 6.37988 18.5282 6.51182 18.5785C6.64376 18.6289 6.76448 18.7047 6.8671 18.8017L6.1275 19.5822L5.39005 20.3648C5.28738 20.2678 5.20483 20.1516 5.14711 20.0227C5.08938 19.8938 5.05762 19.7548 5.05362 19.6137C5.04963 19.4725 5.07349 19.3319 5.12383 19.2C5.17418 19.0681 5.25003 18.9473 5.34705 18.8447ZM15.1725 26.1268L21.113 28.3542C21.6927 28.5714 22.3227 28.6172 22.9278 28.486C23.5328 28.3549 24.0873 28.0523 24.525 27.6146L29.0185 23.1211C29.2204 22.9195 29.4941 22.8064 29.7793 22.8066C30.0646 22.8068 30.3381 22.9203 30.5397 23.1222C30.7412 23.324 30.8544 23.5977 30.8542 23.8829C30.854 24.1682 30.7405 24.4417 30.5386 24.6433L26.0451 29.1368C25.3152 29.8659 24.3909 30.3696 23.3825 30.5876C22.3741 30.8057 21.3243 30.729 20.3583 30.3666L14.2953 28.094L14.2459 28.0704C13.9172 27.8886 13.605 27.6786 13.3128 27.4426C12.9645 27.1738 12.556 26.8406 12.1152 26.4643C11.1283 25.6207 10.1549 24.7613 9.19555 23.8865C8.02314 22.8215 6.85994 21.7465 5.7061 20.6615L5.47175 20.4422L5.39005 20.3648L6.1275 19.5822L6.8671 18.8017L6.94665 18.877L7.1767 19.0941C8.32165 20.1701 9.47552 21.2365 10.6382 22.2933C11.6272 23.1899 12.6484 24.0993 13.5041 24.826C13.9341 25.1894 14.3147 25.499 14.6221 25.7376C14.9059 25.9548 15.0844 26.0752 15.1725 26.1246M7.8905 30.7192C8.07326 30.5012 8.33495 30.3646 8.61824 30.3392C8.90153 30.3138 9.18334 30.4018 9.40195 30.5837L11.4638 32.3037C11.9259 32.6895 12.4867 32.9382 13.0827 33.0218L15.7401 33.3959C15.8831 33.4116 16.0215 33.4558 16.147 33.5259C16.2726 33.596 16.3828 33.6906 16.4712 33.8041C16.5595 33.9176 16.6242 34.0477 16.6614 34.1866C16.6986 34.3255 16.7075 34.4705 16.6877 34.6129C16.6678 34.7554 16.6196 34.8924 16.5458 35.0158C16.472 35.1393 16.3743 35.2467 16.2582 35.3317C16.1422 35.4167 16.0103 35.4776 15.8704 35.5107C15.7304 35.5438 15.5852 35.5484 15.4434 35.5244L12.7839 35.1525C11.7903 35.0129 10.8557 34.5981 10.0856 33.9549L8.0238 32.2349C7.91526 32.1444 7.82564 32.0333 7.76008 31.9081C7.69451 31.7829 7.65429 31.6459 7.64171 31.5051C7.62913 31.3644 7.64443 31.2225 7.68676 31.0876C7.72908 30.9527 7.79758 30.8275 7.88835 30.7192" />
                    </svg>
                </div>

                <p class="group-hover:text-gold transition text-center">Memahami Klien</p>
            </div>

            <div class="flex flex-col items-center gap-2 group">
                <div class="border-b border-b-customDarkGray group-hover:border-b-gold pb-2 group-hover:text-gold transition">
                    <svg class="size-12" viewBox="0 0 43 43" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.5 25.9792C23.9738 25.9792 25.9791 23.9738 25.9791 21.5C25.9791 19.0263 23.9738 17.0209 21.5 17.0209C19.0262 17.0209 17.0208 19.0263 17.0208 21.5C17.0208 23.9738 19.0262 25.9792 21.5 25.9792Z" />
                        <path d="M17.9167 25.0833L11.6458 31.3542M18.8125 18.8125L10.75 10.75" stroke-linejoin="round" />
                        <path d="M30.4583 33.1459C31.9426 33.1459 33.1458 31.9426 33.1458 30.4584C33.1458 28.9741 31.9426 27.7709 30.4583 27.7709C28.974 27.7709 27.7708 28.9741 27.7708 30.4584C27.7708 31.9426 28.974 33.1459 30.4583 33.1459Z" />
                        <path d="M35.8333 24.1875C37.3176 24.1875 38.5208 22.9843 38.5208 21.5C38.5208 20.0157 37.3176 18.8125 35.8333 18.8125C34.349 18.8125 33.1458 20.0157 33.1458 21.5C33.1458 22.9843 34.349 24.1875 35.8333 24.1875Z" />
                        <path d="M33.1458 21.5H25.9791M25.0833 25.0833L28.6666 28.6667" stroke-linejoin="round" />
                        <path d="M34.0417 13.4375C36.5154 13.4375 38.5208 11.4321 38.5208 8.95835C38.5208 6.48458 36.5154 4.47919 34.0417 4.47919C31.5679 4.47919 29.5625 6.48458 29.5625 8.95835C29.5625 11.4321 31.5679 13.4375 34.0417 13.4375Z" />
                        <path d="M30.4583 12.5417L25.0833 17.9167" stroke-linejoin="round" />
                        <path d="M8.95831 11.6459C10.4426 11.6459 11.6458 10.4426 11.6458 8.95837C11.6458 7.47411 10.4426 6.27087 8.95831 6.27087C7.47405 6.27087 6.27081 7.47411 6.27081 8.95837C6.27081 10.4426 7.47405 11.6459 8.95831 11.6459Z" />
                        <path d="M8.95832 38.5208C11.4321 38.5208 13.4375 36.5154 13.4375 34.0417C13.4375 31.5679 11.4321 29.5625 8.95832 29.5625C6.48455 29.5625 4.47916 31.5679 4.47916 34.0417C4.47916 36.5154 6.48455 38.5208 8.95832 38.5208Z" />
                    </svg>
                </div>

                <p class="group-hover:text-gold transition text-center">Berbagai Bidang</p>
            </div>
        </div>
    </section>

    {{-- LAYANAN KAMI --}}
    <section id="layanan-kami" class="py-20 custom-container flex flex-col gap-24">
        <div class="flex items-center">
            <div class="pe-8 me-8 border-e border-e-customDarkGray py-4">
                <h1 class="text-5xl font-cormorant font-bold w-full whitespace-nowrap">Layanan Kami</h1>
            </div>

            <p class="text-sm leading-loose">RCP menjunjung tinggi reputasi terpercaya dengan memahami minat klien dan bekerja sama untuk mencapai tujuan yang diinginkan. Tujuan firma kami adalah untuk membangun hubungan jangka panjang dengan klien kami dengan menyediakan layanan hukum berkualitas tinggi yang efektif dan efisien untuk klien.</p>
        </div>

        <div class="grid grid-cols-4 gap-y-16">
            <div class="flex items-center justify-center border-r border-customDarkGray px-8">
                <span class="flex flex-col gap-4 text-lg font-bold items-center group">
                    <svg class="size-20 group-hover:text-gold transition" viewBox="0 0 110 111" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_7_460)">
                            <path d="M53.5455 63.0402C54.2514 63.0426 54.9493 62.8899 55.5897 62.5929C56.2301 62.2959 56.7974 61.8619 57.2516 61.3214L58.2893 60.0861L61.991 63.1949C63.1921 64.2002 64.7428 64.6882 66.3031 64.5516C67.8635 64.4151 69.3059 63.6652 70.3141 62.4665L84.1242 46.0074C84.6231 45.4131 85 44.7264 85.2334 43.9865C85.4669 43.2465 85.5522 42.4679 85.4845 41.6949C85.4169 40.922 85.1976 40.17 84.8393 39.4818C84.4809 38.7937 83.9904 38.1828 83.3959 37.6843L79.6942 34.5712L80.7297 33.3359C81.1489 32.8511 81.4676 32.2878 81.6671 31.6788C81.8666 31.0697 81.943 30.4271 81.8919 29.7883C81.8408 29.1494 81.6631 28.5271 81.3693 27.9575C81.0754 27.388 80.6713 26.8825 80.1803 26.4706C79.6893 26.0587 79.1213 25.7485 78.5094 25.5581C77.8974 25.3677 77.2537 25.3009 76.6157 25.3616C75.9777 25.4223 75.3581 25.6092 74.793 25.9115C74.2279 26.2138 73.7286 26.6255 73.324 27.1226L72.2885 28.3558L51.7151 11.0931L52.7506 9.85989C53.1587 9.37363 53.467 8.81174 53.658 8.20632C53.849 7.60089 53.9188 6.96378 53.8635 6.33137C53.8083 5.69895 53.629 5.08361 53.3359 4.52048C53.0429 3.95735 52.6417 3.45746 52.1555 3.04935C51.6692 2.64123 51.1073 2.3329 50.5019 2.14194C49.8965 1.95097 49.2594 1.88113 48.627 1.93639C47.9945 1.99165 47.3792 2.17094 46.8161 2.46401C46.2529 2.75708 45.753 3.1582 45.3449 3.64446L44.3094 4.87981L40.6055 1.77317C40.0113 1.27428 39.3246 0.897366 38.5846 0.663959C37.8447 0.430551 37.066 0.345228 36.2931 0.412865C35.5201 0.480501 34.7681 0.699771 34.0799 1.05815C33.3918 1.41652 32.781 1.90698 32.2824 2.50149L18.4766 18.9585C17.4707 20.1593 16.9824 21.7102 17.1189 23.2707C17.2555 24.8312 18.0057 26.2737 19.2049 27.2816L22.9088 30.3904L21.8711 31.6236C21.2785 32.3281 20.8993 33.1871 20.778 34.0997C20.6568 35.0123 20.7985 35.9405 21.1866 36.7753C21.5747 37.6101 22.1929 38.3168 22.9688 38.8124C23.7446 39.3079 24.6458 39.5717 25.5664 39.5728C25.7104 39.5728 25.8522 39.5728 25.9961 39.5534C26.6289 39.4993 27.2447 39.3206 27.8082 39.0274C28.3716 38.7343 28.8714 38.3326 29.2789 37.8454L30.3145 36.6101L36.4848 41.79L23.3664 57.4242C23.0389 57.1496 22.6158 57.0163 22.1901 57.0533C21.7643 57.0904 21.3707 57.2948 21.0955 57.6218L0.378136 82.3031C0.241942 82.4651 0.139015 82.6524 0.0752369 82.8543C0.0114588 83.0561 -0.0119204 83.2686 0.00643537 83.4795C0.0247911 83.6904 0.0845219 83.8956 0.182215 84.0834C0.279907 84.2712 0.413648 84.4379 0.575793 84.574L8.80861 91.4833C9.09945 91.7255 9.46571 91.8585 9.84415 91.8593C9.89142 91.8593 9.93868 91.8593 9.98595 91.8593C10.1968 91.8413 10.402 91.7817 10.5897 91.684C10.7774 91.5863 10.9438 91.4524 11.0795 91.29L31.7969 66.5937C32.0711 66.2659 32.2041 65.8427 32.1667 65.4169C32.1292 64.9911 31.9244 64.5976 31.5971 64.3228L44.7176 48.6865L50.8879 53.8663L49.8438 55.1017C49.021 56.0841 48.6217 57.3529 48.7337 58.6295C48.8457 59.906 49.4598 61.0859 50.441 61.9101C51.3098 62.6418 52.4097 63.0422 53.5455 63.0402ZM81.3248 40.1464C81.5952 40.373 81.8183 40.6506 81.9812 40.9634C82.1442 41.2762 82.2439 41.6181 82.2747 41.9695C82.3054 42.3209 82.2665 42.6749 82.1603 43.0113C82.0541 43.3477 81.8826 43.6598 81.6557 43.9298L67.8455 60.389C67.3874 60.9341 66.7316 61.275 66.0223 61.3371C65.3129 61.3991 64.6079 61.1771 64.0621 60.7199L60.3711 57.6111L77.6338 37.0398L81.3248 40.1464ZM75.7926 29.1894C76.0694 28.8693 76.461 28.671 76.8828 28.6372C77.3047 28.6034 77.7229 28.737 78.047 29.009C78.3712 29.281 78.5754 29.6696 78.6155 30.0909C78.6555 30.5121 78.5283 30.9323 78.2611 31.2605L54.7852 59.2439C54.6493 59.406 54.4827 59.5396 54.2951 59.6373C54.1075 59.735 53.9025 59.7947 53.6918 59.8131C53.4811 59.8314 53.2688 59.808 53.0671 59.7443C52.8654 59.6805 52.6783 59.5777 52.5164 59.4415C52.1898 59.1667 51.9853 58.7737 51.9479 58.3484C51.9104 57.9232 52.043 57.5005 52.3166 57.1728L75.7926 29.1894ZM21.2695 24.813C20.7245 24.3548 20.3835 23.6991 20.3215 22.9898C20.2594 22.2804 20.4814 21.5754 20.9387 21.0296L34.7488 4.57259C34.9754 4.30221 35.253 4.07914 35.5658 3.91616C35.8787 3.75317 36.2205 3.65346 36.5719 3.62273C36.9233 3.592 37.2773 3.63085 37.6137 3.73707C37.9501 3.84328 38.2622 4.01477 38.5322 4.24173L42.2383 7.34837L24.9756 27.9197L21.2695 24.813ZM26.8039 35.7701C26.6681 35.9326 26.5016 36.0667 26.3139 36.1648C26.1262 36.2628 25.9209 36.3229 25.71 36.3414C25.499 36.36 25.2864 36.3367 25.0844 36.273C24.8825 36.2092 24.6951 36.1062 24.533 35.9699C24.2062 35.6947 24.0017 35.3012 23.9643 34.8757C23.9269 34.4501 24.0595 34.027 24.3332 33.699L47.8135 5.7177C47.9441 5.54007 48.1099 5.39114 48.3004 5.28014C48.4909 5.16914 48.7022 5.09842 48.9212 5.07236C49.1401 5.04631 49.3621 5.06548 49.5733 5.12867C49.7846 5.19187 49.9806 5.29775 50.1493 5.43977C50.318 5.58179 50.4557 5.75692 50.554 5.95431C50.6523 6.15171 50.709 6.36718 50.7206 6.58737C50.7323 6.80757 50.6986 7.02781 50.6217 7.23447C50.5447 7.44112 50.4262 7.62979 50.2734 7.7888L26.8039 35.7701ZM9.64005 87.9771L3.88224 83.141L22.5242 60.9218L28.2842 65.7558L9.64005 87.9771ZM29.1199 62.256L25.8285 59.4931L38.9469 43.8589L42.2404 46.6197L29.1199 62.256ZM32.3791 34.1394L49.6418 13.5681L70.2131 30.8286L52.9504 51.4021L32.3791 34.1394Z" />
                            <path d="M105.166 100.722H103.555V91.5907C103.555 91.1633 103.385 90.7535 103.083 90.4513C102.781 90.1491 102.371 89.9794 101.943 89.9794H58.9746C58.5473 89.9794 58.1374 90.1491 57.8352 90.4513C57.533 90.7535 57.3633 91.1633 57.3633 91.5907V100.722H55.752C54.4702 100.723 53.2414 101.232 52.3351 102.139C51.4288 103.045 50.9191 104.274 50.918 105.556V108.778C50.918 109.206 51.0877 109.615 51.3899 109.918C51.6921 110.22 52.1019 110.39 52.5293 110.39H108.389C108.816 110.39 109.226 110.22 109.528 109.918C109.83 109.615 110 109.206 110 108.778V105.556C109.998 104.274 109.488 103.045 108.582 102.139C107.676 101.233 106.448 100.723 105.166 100.722ZM60.5859 93.202H100.332V100.722H60.5859V93.202ZM106.777 107.167H54.1406V105.556C54.1406 105.128 54.3104 104.718 54.6126 104.416C54.9148 104.114 55.3246 103.944 55.752 103.944H105.166C105.593 103.945 106.003 104.115 106.305 104.417C106.607 104.719 106.777 105.128 106.777 105.556V107.167Z" />
                            <path d="M98.3576 78.3542C98.4937 78.5163 98.6604 78.6501 98.8482 78.7478C99.036 78.8455 99.2412 78.9052 99.4521 78.9236C99.663 78.9419 99.8754 78.9185 100.077 78.8548C100.279 78.791 100.466 78.688 100.629 78.5519L107.153 73.0755C107.473 72.7987 107.672 72.4071 107.706 71.9852C107.739 71.5634 107.606 71.1452 107.334 70.821C107.062 70.4968 106.673 70.2927 106.252 70.2526C105.831 70.2125 105.41 70.3398 105.082 70.6069L98.5553 76.0833C98.2283 76.3585 98.0239 76.7521 97.9868 77.1779C97.9497 77.6036 98.0831 78.0267 98.3576 78.3542Z" />
                            <path d="M94.918 75.8813C95.1027 75.954 95.2995 75.9912 95.4981 75.9909C95.8236 75.9913 96.1417 75.893 96.4102 75.7088C96.6787 75.5247 96.885 75.2635 97.002 74.9596L99.4318 68.6733C99.586 68.2744 99.5753 67.8307 99.4023 67.4397C99.2292 67.0486 98.908 66.7424 98.5091 66.5882C98.1102 66.4341 97.6665 66.4447 97.2755 66.6178C96.8844 66.7908 96.5782 67.1121 96.424 67.511L93.9941 73.7995C93.9179 73.9968 93.8814 74.2072 93.8866 74.4187C93.8918 74.6302 93.9386 74.8386 94.0244 75.0319C94.1102 75.2253 94.2333 75.3999 94.3866 75.5456C94.54 75.6913 94.7205 75.8054 94.918 75.8813Z" />
                            <path d="M100.195 82.1698C100.266 82.5362 100.463 82.8663 100.751 83.1037C101.039 83.3412 101.4 83.4713 101.774 83.4718C101.878 83.4713 101.982 83.4612 102.085 83.4417L108.698 82.1419C108.906 82.1011 109.103 82.0199 109.28 81.9027C109.456 81.7856 109.607 81.6349 109.725 81.4592C109.843 81.2836 109.925 81.0864 109.967 80.879C110.009 80.6715 110.01 80.4579 109.969 80.2502C109.928 80.0426 109.847 79.845 109.73 79.6687C109.613 79.4925 109.462 79.341 109.286 79.223C109.111 79.105 108.913 79.0228 108.706 78.981C108.498 78.9392 108.285 78.9386 108.077 78.9794L101.464 80.2792C101.045 80.3618 100.676 80.6073 100.438 80.9618C100.2 81.3163 100.112 81.7508 100.195 82.1698Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_7_460">
                                <rect width="110" height="110" fill="white" transform="translate(0 0.389526)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <p class="text-center group-hover:text-gold transition">Hukum Pidana</p>
                </span>
            </div>

            <div class="flex items-center justify-center border-r border-customDarkGray px-8">
                <span class="flex flex-col gap-4 text-lg font-bold items-center group">
                    <svg class="size-20 group-hover:text-gold transition" viewBox="0 0 84 84" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M36.4832 26.0692C40.1509 26.6274 44.1267 26.6261 47.7939 26.0653L50.943 17.9832L33.3276 17.9893L36.4832 26.0692ZM45.7485 29.2684L51.3083 75.678L41.9741 83.7791L32.6354 75.6846L38.1637 29.2345C39.4711 29.3657 40.7998 29.4392 42.1399 29.4388C43.354 29.4383 44.5594 29.3772 45.7485 29.2684Z" />
                        <path d="M29.4152 12.1706H54.5285L56.9281 8.36084H27.0157L29.4152 12.1706ZM83.3077 12.0412C82.1098 7.95147 79.1634 4.65852 75.3507 2.5307C73.448 1.46944 71.357 0.720253 69.1892 0.334213C68.4138 0.195999 67.6325 0.108849 66.8451 0.0630722C66.5167 0.0441437 65.6559 0.00320435 65.5229 0.000564575V0.00012207H18.4758L18.4754 0.000564575C18.3428 0.00320435 17.4829 0.0441437 17.1546 0.0630722C16.3677 0.108849 15.5858 0.195999 14.8104 0.334213C12.6427 0.720253 10.5516 1.46944 8.6494 2.5307C4.83622 4.65852 1.88987 7.95147 0.692388 12.0412C-0.46168 15.9816 0.122511 20.2905 2.25331 23.8397C4.41089 27.4337 8.18482 30.0197 12.5189 30.5792C16.5764 31.103 20.8066 29.7627 23.6698 26.9592C26.4144 24.2719 27.5042 20.4344 26.4739 16.8048C25.494 13.3507 22.6455 10.4301 18.8661 9.8099C15.4066 9.24251 11.702 10.6638 10.0062 13.6716C8.98237 15.4882 8.86599 17.7441 9.95125 19.562C10.9515 21.2382 12.8579 22.4518 14.9287 22.2783C15.9991 22.189 17.0655 21.7572 17.8025 20.9996C18.0099 20.7862 18.1904 20.5489 18.3359 20.2932C18.4394 20.1105 18.4998 20.0717 18.317 19.9617C18.1036 19.8336 17.9748 19.6875 17.7628 19.838C17.5102 20.0176 17.2742 20.2249 17.01 20.3882C16.5963 20.6435 16.0231 20.7487 15.5387 20.7663C14.5079 20.8033 13.625 20.3746 12.9184 19.6813C12.1352 18.8974 11.8184 17.4839 12.1703 16.4024C12.5009 15.3869 13.2749 14.5273 14.2212 13.9797C15.3092 13.3502 16.6286 13.172 17.869 13.4167C18.9654 13.6328 19.9661 14.2508 20.6644 14.8931C21.3132 15.5789 21.8327 16.3276 22.1532 17.2049C22.8538 19.124 22.5587 21.2981 21.3118 22.9536C20.0585 24.6175 18.0316 25.7298 15.9299 26.0793C13.6924 26.4508 11.3542 25.9732 9.48944 24.7359C7.77612 23.5993 6.46919 21.913 5.71459 20.0665C4.20493 16.3721 4.95953 12.0398 7.61171 8.99117C9.6677 6.6283 12.5651 5.09693 15.6722 4.40013C16.9449 4.11446 18.2546 4.00749 19.562 4.00749H64.4376C65.745 4.00749 67.0547 4.11446 68.3275 4.40013C71.4346 5.09693 74.3324 6.6283 76.3879 8.99117C79.0401 12.0398 79.7947 16.3721 78.2851 20.0665C77.5309 21.913 76.224 23.5993 74.5107 24.7359C72.6454 25.9732 70.3073 26.4508 68.0703 26.0793C65.9681 25.7298 63.9412 24.6175 62.6878 22.9536C61.4414 21.2981 61.1458 19.124 61.8469 17.2049C62.1669 16.3276 62.6869 15.5789 63.3358 14.8931C64.0336 14.2508 65.0343 13.6328 66.1311 13.4167C67.3711 13.172 68.6909 13.3502 69.7785 13.9797C70.7247 14.5273 71.4987 15.3869 71.8294 16.4024C72.1813 17.4839 71.8645 18.8974 71.0817 19.6813C70.3747 20.3746 69.4922 20.8033 68.4609 20.7663C67.9765 20.7487 67.4034 20.6435 66.9901 20.3882C66.7255 20.2249 66.4895 20.0176 66.2369 19.838C66.0249 19.6875 65.896 19.8336 65.6827 19.9617C65.4998 20.0717 65.5603 20.1105 65.6637 20.2932C65.8092 20.5489 65.9898 20.7862 66.1976 20.9996C66.9342 21.7572 68.0005 22.189 69.071 22.2783C71.1422 22.4518 73.0481 21.2382 74.0489 19.562C75.1341 17.7441 75.0177 15.4882 73.9934 13.6716C72.2977 10.6638 68.593 9.24251 65.134 9.8099C61.3541 10.4301 58.5057 13.3507 57.5257 16.8048C56.4959 20.4344 57.5853 24.2719 60.3298 26.9592C63.1931 29.7627 67.4232 31.103 71.4807 30.5792C75.8148 30.0197 79.5888 27.4337 81.7463 23.8397C83.8771 20.2905 84.4618 15.9816 83.3077 12.0412ZM25.8251 36.2179C25.8251 34.5985 24.448 33.2859 22.7494 33.2859C21.0504 33.2859 19.6733 34.5985 19.6733 36.2179V71.5918H21.297L25.8251 36.2179ZM58.1182 36.2179C58.1182 34.5985 59.4958 33.2859 61.1943 33.2859C62.8933 33.2859 64.2705 34.5985 64.2705 36.2179V71.5918H62.6467L58.1182 36.2179Z" />
                    </svg>

                    <p class="text-center group-hover:text-gold transition">Hukum Korporasi
                        dan Bisnis</p>
                </span>
            </div>

            <div class="flex items-center justify-center border-r border-customDarkGray px-8">
                <span class="flex flex-col gap-4 text-lg font-bold items-center group">
                    <svg class="size-20 group-hover:text-gold transition" viewBox="0 0 85 85" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M48.4383 36.2727C50.1978 36.5826 52.1051 36.5817 53.8646 36.2704L55.3752 31.7841L46.9245 31.7877L48.4383 36.2727ZM52.8832 38.0488L55.5506 63.8096L51.0725 66.9103L46.5924 63.8131L49.2444 38.03C49.8718 38.1025 50.5093 38.1433 51.1521 38.1433C51.7348 38.1428 52.3126 38.1088 52.8832 38.0488ZM65.4794 36.2655C67.2393 36.5754 69.1462 36.575 70.9057 36.2637L72.4167 31.7774L63.9656 31.7805L65.4794 36.2655ZM69.9247 38.0416L72.5917 63.8028L68.114 66.9031L63.6339 63.8064L66.2859 38.0228C66.9133 38.0958 67.5504 38.1365 68.1932 38.1361C68.7759 38.1361 69.3541 38.1021 69.9247 38.0416ZM31.3972 36.2799C33.1567 36.5893 35.0641 36.5889 36.8231 36.2776L38.3341 31.7913L29.8834 31.7944L31.3972 36.2799ZM35.8421 38.0555L38.5091 63.8167L34.0314 66.9175L29.5513 63.8203L32.2033 38.0367C32.8307 38.1097 33.4678 38.1504 34.1106 38.15C34.6933 38.15 35.2716 38.1159 35.8421 38.0555ZM14.3557 36.2866C16.1152 36.5965 18.0226 36.5956 19.782 36.2843L21.2926 31.798L12.8419 31.8016L14.3557 36.2866ZM18.8006 38.0626L21.468 63.8234L16.9899 66.9242L12.5098 63.827L15.1618 38.0438C15.7892 38.1164 16.4267 38.1571 17.0695 38.1571C17.6522 38.1567 18.2301 38.1227 18.8006 38.0626Z" />
                        <path d="M12.2338 15.9898L72.7649 15.9614L42.4961 4.26896L12.2338 15.9898ZM0.610519 16.722L42.4949 0.499977L84.3895 16.6827V16.6843C84.3895 18.2742 83.3771 19.5629 82.1281 19.5635L2.87395 19.6007C1.62407 19.6012 0.610519 18.312 0.610519 16.722ZM76.9507 22.3791L8.04037 22.4116C8.04077 24.1669 9.15949 25.5895 10.5389 25.5885L74.4542 25.5585C75.8336 25.558 76.9511 24.1344 76.9507 22.3791ZM71.1147 84.2521L71.1134 80.3606L13.9227 80.387L13.9239 84.2789L71.1147 84.2521ZM2.56249 84.2789C2.56209 82.1294 3.93095 80.3865 5.61979 80.3859L7.61562 80.3849L7.6144 77.2272C7.61399 75.0502 9.00031 73.2851 10.7107 73.2841L74.3214 73.2541C76.0322 73.2536 77.4193 75.0172 77.4197 77.1941L77.4209 80.3518L79.4159 80.3508C81.1052 80.3503 82.4749 82.0916 82.4757 84.2412L74.3636 84.2453L74.3616 77.1461L10.6729 77.176L10.6749 84.2753L2.56249 84.2789Z" />
                    </svg>

                    <p class="group-hover:text-gold transition text-center">Hukum Pertahanan</p>
                </span>
            </div>

            <div class="flex items-center justify-center px-8">
                <span class="flex flex-col gap-4 text-lg font-bold items-center group">
                    <svg class="size-20 group-hover:text-gold transition" viewBox="0 0 97 79" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_7_409)">
                            <path d="M95.3364 47.9208C95.7113 47.9208 96.0709 47.8004 96.336 47.5861C96.6011 47.3719 96.75 47.0812 96.75 46.7782V40.6844C96.75 40.3814 96.6011 40.0908 96.336 39.8765C96.0709 39.6622 95.7113 39.5419 95.3364 39.5419H1.66357C1.28867 39.5419 0.929123 39.6622 0.664026 39.8765C0.39893 40.0908 0.25 40.3814 0.25 40.6844L0.25 46.7782C0.25 47.0812 0.39893 47.3719 0.664026 47.5861C0.929123 47.8004 1.28867 47.9208 1.66357 47.9208H3.73682V70.0106H1.66357C1.28867 70.0106 0.929123 70.131 0.664026 70.3453C0.39893 70.5595 0.25 70.8502 0.25 71.1532L0.25 77.2469C0.25 77.55 0.39893 77.8406 0.664026 78.0549C0.929123 78.2691 1.28867 78.3895 1.66357 78.3895H95.3364C95.7113 78.3895 96.0709 78.2691 96.336 78.0549C96.6011 77.8406 96.75 77.55 96.75 77.2469V71.1532C96.75 70.8502 96.6011 70.5595 96.336 70.3453C96.0709 70.131 95.7113 70.0106 95.3364 70.0106H93.2632V47.9208H95.3364ZM3.07715 41.827H93.9229V45.6356H3.07715V41.827ZM93.9229 76.1044H3.07715V72.2958H93.9229V76.1044ZM90.436 70.0106H6.56396V47.9208H90.436V70.0106Z" />
                            <path d="M7.03516 34.6669H40.9609C41.8354 34.6661 42.6738 34.3849 43.2921 33.8851C43.9105 33.3853 44.2583 32.7077 44.2593 32.0009C44.2537 28.5207 42.879 25.1321 40.3338 22.3251C37.7887 19.518 34.205 17.438 30.1009 16.3856C32.0152 15.3312 33.4612 13.8087 34.2267 12.0414C34.9922 10.2742 35.0369 8.35515 34.3543 6.56582C33.6718 4.7765 32.2978 3.21105 30.434 2.09906C28.5702 0.987077 26.3146 0.387085 23.998 0.387085C21.6815 0.387085 19.4259 0.987077 17.5621 2.09906C15.6983 3.21105 14.3243 4.7765 13.6418 6.56582C12.9592 8.35515 13.0039 10.2742 13.7694 12.0414C14.5349 13.8087 15.9809 15.3312 17.8952 16.3856C13.7911 17.438 10.2074 19.518 7.66229 22.3251C5.11713 25.1321 3.74239 28.5207 3.73682 32.0009C3.73781 32.7077 4.08564 33.3853 4.70398 33.8851C5.32232 34.3849 6.16069 34.6661 7.03516 34.6669ZM15.9878 9.14931C15.9878 7.86876 16.4576 6.61696 17.3378 5.55221C18.2179 4.48747 19.469 3.6576 20.9327 3.16755C22.3963 2.67751 24.0069 2.54929 25.5608 2.79911C27.1146 3.04894 28.5419 3.66558 29.6622 4.57107C30.7824 5.47656 31.5453 6.63023 31.8544 7.88618C32.1635 9.14213 32.0048 10.444 31.3986 11.627C30.7923 12.8101 29.7656 13.8213 28.4483 14.5328C27.131 15.2442 25.5823 15.6239 23.998 15.6239C21.8744 15.6219 19.8384 14.9391 18.3367 13.7253C16.835 12.5115 15.9903 10.8659 15.9878 9.14931ZM23.998 17.9091C28.6202 17.9135 33.0514 19.3996 36.3197 22.0414C39.5881 24.6831 41.4266 28.2649 41.4321 32.0009C41.4321 32.1019 41.3825 32.1988 41.2941 32.2702C41.2058 32.3416 41.0859 32.3817 40.9609 32.3817H7.03516C6.91019 32.3817 6.79034 32.3416 6.70197 32.2702C6.61361 32.1988 6.56396 32.1019 6.56396 32.0009C6.56945 28.2649 8.40801 24.6831 11.6763 22.0414C14.9447 19.3996 19.3759 17.9135 23.998 17.9091Z" />
                            <path d="M56.0391 34.6669H89.9648C90.8393 34.6661 91.6777 34.3849 92.296 33.8851C92.9144 33.3853 93.2622 32.7077 93.2632 32.0009C93.2576 28.5207 91.8829 25.1321 89.3377 22.3251C86.7926 19.518 83.2089 17.438 79.1048 16.3856C81.0192 15.3312 82.4651 13.8087 83.2306 12.0414C83.9961 10.2742 84.0408 8.35515 83.3582 6.56582C82.6757 4.7765 81.3017 3.21105 79.4379 2.09906C77.5741 0.987077 75.3185 0.387085 73.002 0.387085C70.6854 0.387085 68.4298 0.987077 66.566 2.09906C64.7022 3.21105 63.3282 4.7765 62.6457 6.56582C61.9631 8.35515 62.0078 10.2742 62.7733 12.0414C63.5388 13.8087 64.9848 15.3312 66.8991 16.3856C62.795 17.438 59.2113 19.518 56.6662 22.3251C54.121 25.1321 52.7463 28.5207 52.7407 32.0009C52.7417 32.7077 53.0895 33.3853 53.7079 33.8851C54.3262 34.3849 55.1646 34.6661 56.0391 34.6669ZM64.9917 9.14931C64.9917 7.86876 65.4615 6.61696 66.3417 5.55221C67.2218 4.48747 68.4729 3.6576 69.9366 3.16755C71.4002 2.67751 73.0108 2.54929 74.5647 2.79911C76.1185 3.04894 77.5458 3.66558 78.6661 4.57107C79.7863 5.47656 80.5492 6.63023 80.8583 7.88618C81.1674 9.14213 81.0087 10.444 80.4025 11.627C79.7962 12.8101 78.7695 13.8213 77.4522 14.5328C76.1349 15.2442 74.5862 15.6239 73.002 15.6239C70.8783 15.6219 68.8423 14.9391 67.3406 13.7253C65.8389 12.5115 64.9942 10.8659 64.9917 9.14931ZM73.002 17.9091C77.6241 17.9135 82.0553 19.3996 85.3237 22.0414C88.592 24.6831 90.4305 28.2649 90.436 32.0009C90.436 32.1019 90.3864 32.1988 90.298 32.2702C90.2097 32.3416 90.0898 32.3817 89.9648 32.3817H56.0391C55.9141 32.3817 55.7942 32.3416 55.7059 32.2702C55.6175 32.1988 55.5679 32.1019 55.5679 32.0009C55.5734 28.2649 57.4119 24.6831 60.6803 22.0414C63.9486 19.3996 68.3798 17.9135 73.002 17.9091Z" />
                            <path d="M14.5742 66.9637C14.9491 66.9637 15.3087 66.8434 15.5738 66.6291C15.8389 66.4148 15.9878 66.1242 15.9878 65.8212V52.1102C15.9878 51.8072 15.8389 51.5166 15.5738 51.3023C15.3087 51.088 14.9491 50.9677 14.5742 50.9677C14.1993 50.9677 13.8398 51.088 13.5747 51.3023C13.3096 51.5166 13.1606 51.8072 13.1606 52.1102V65.8212C13.1606 66.1242 13.3096 66.4148 13.5747 66.6291C13.8398 66.8434 14.1993 66.9637 14.5742 66.9637Z" />
                            <path d="M25.8828 66.9637C26.2577 66.9637 26.6173 66.8434 26.8824 66.6291C27.1475 66.4148 27.2964 66.1242 27.2964 65.8212V52.1102C27.2964 51.8072 27.1475 51.5166 26.8824 51.3023C26.6173 51.088 26.2577 50.9677 25.8828 50.9677C25.5079 50.9677 25.1484 51.088 24.8833 51.3023C24.6182 51.5166 24.4692 51.8072 24.4692 52.1102V65.8212C24.4692 66.1242 24.6182 66.4148 24.8833 66.6291C25.1484 66.8434 25.5079 66.9637 25.8828 66.9637Z" />
                            <path d="M37.1914 66.9637C37.5663 66.9637 37.9259 66.8434 38.191 66.6291C38.4561 66.4148 38.605 66.1242 38.605 65.8212V52.1102C38.605 51.8072 38.4561 51.5166 38.191 51.3023C37.9259 51.088 37.5663 50.9677 37.1914 50.9677C36.8165 50.9677 36.457 51.088 36.1919 51.3023C35.9268 51.5166 35.7778 51.8072 35.7778 52.1102V65.8212C35.7778 66.1242 35.9268 66.4148 36.1919 66.6291C36.457 66.8434 36.8165 66.9637 37.1914 66.9637Z" />
                            <path d="M48.5 66.9637C48.8749 66.9637 49.2345 66.8434 49.4996 66.6291C49.7646 66.4148 49.9136 66.1242 49.9136 65.8212V52.1102C49.9136 51.8072 49.7646 51.5166 49.4996 51.3023C49.2345 51.088 48.8749 50.9677 48.5 50.9677C48.1251 50.9677 47.7655 51.088 47.5005 51.3023C47.2354 51.5166 47.0864 51.8072 47.0864 52.1102V65.8212C47.0864 66.1242 47.2354 66.4148 47.5005 66.6291C47.7655 66.8434 48.1251 66.9637 48.5 66.9637Z" />
                            <path d="M59.8086 66.9637C60.1835 66.9637 60.543 66.8434 60.8081 66.6291C61.0732 66.4148 61.2222 66.1242 61.2222 65.8212V52.1102C61.2222 51.8072 61.0732 51.5166 60.8081 51.3023C60.543 51.088 60.1835 50.9677 59.8086 50.9677C59.4337 50.9677 59.0741 51.088 58.809 51.3023C58.5439 51.5166 58.395 51.8072 58.395 52.1102V65.8212C58.395 66.1242 58.5439 66.4148 58.809 66.6291C59.0741 66.8434 59.4337 66.9637 59.8086 66.9637Z" />
                            <path d="M71.1172 66.9637C71.4921 66.9637 71.8516 66.8434 72.1167 66.6291C72.3818 66.4148 72.5308 66.1242 72.5308 65.8212V52.1102C72.5308 51.8072 72.3818 51.5166 72.1167 51.3023C71.8516 51.088 71.4921 50.9677 71.1172 50.9677C70.7423 50.9677 70.3827 51.088 70.1176 51.3023C69.8525 51.5166 69.7036 51.8072 69.7036 52.1102V65.8212C69.7036 66.1242 69.8525 66.4148 70.1176 66.6291C70.3827 66.8434 70.7423 66.9637 71.1172 66.9637Z" />
                            <path d="M82.4258 66.9637C82.8007 66.9637 83.1602 66.8434 83.4253 66.6291C83.6904 66.4148 83.8394 66.1242 83.8394 65.8212V52.1102C83.8394 51.8072 83.6904 51.5166 83.4253 51.3023C83.1602 51.088 82.8007 50.9677 82.4258 50.9677C82.0509 50.9677 81.6913 51.088 81.4262 51.3023C81.1611 51.5166 81.0122 51.8072 81.0122 52.1102V65.8212C81.0122 66.1242 81.1611 66.4148 81.4262 66.6291C81.6913 66.8434 82.0509 66.9637 82.4258 66.9637Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_7_409">
                                <rect width="96.5" height="78" fill="white" transform="translate(0.25 0.389526)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <p class="group-hover:text-gold transition text-center">Hukum Keluarga</p>
                </span>
            </div>

            <div class="flex items-center justify-center border-r border-customDarkGray px-8">
                <span class="flex flex-col gap-4 text-lg font-bold items-center  group">
                    <svg class="size-20 group-hover:text-gold transition" viewBox="0 0 91 81" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M45.5 8.67534C39.7452 8.67534 34.1098 9.06866 28.7419 9.81637V13.4543C34.0953 12.6998 39.733 12.303 45.5 12.303C51.2671 12.303 56.9047 12.6998 62.2582 13.4543V9.81637C56.8902 9.06866 51.2552 8.67534 45.5 8.67534ZM62.2582 76.6672H28.7419V80.4015H62.2582V76.6672ZM59.1508 69.1688H31.8489V72.903H59.1508V69.1688ZM31.8489 20.3228H59.1508V16.5885H31.8489V20.3228ZM54.176 24.087H50.9396V65.4046H54.176V24.087ZM47.1181 24.087H43.8816V65.4046H47.1181V24.087ZM40.0601 65.4046H36.8236V24.087H40.0601V65.4046Z" />
                        <path d="M77.9031 40.8473L77.1745 11.7099C77.301 11.7172 77.4268 11.7164 77.5518 11.7035L83.4876 40.9834C81.6541 40.9017 79.7882 40.8602 77.9031 40.8473ZM70.344 40.9834L76.3214 11.5002C76.4308 11.549 76.541 11.5884 76.6519 11.6201L75.9211 40.8473C74.0386 40.8602 72.1753 40.9017 70.344 40.9834ZM15.0789 40.8473L14.3481 11.6201C14.459 11.5884 14.5692 11.549 14.6786 11.5002L20.656 40.9834C18.825 40.9017 16.9614 40.8602 15.0789 40.8473ZM7.51235 40.9834L13.4486 11.7035C13.5732 11.7164 13.699 11.7172 13.8254 11.7099L13.0969 40.8473C11.2118 40.8602 9.34593 40.9017 7.51235 40.9834ZM85.8802 41.1165L78.2584 11.5225C78.7455 11.3192 79.181 10.9601 79.507 10.473C80.4964 10.8561 81.4819 11.2554 82.4631 11.6753C82.521 11.5392 82.7257 11.1942 82.689 11.0705C82.6248 10.8518 81.9212 10.5227 81.7602 10.4101C77.4639 7.39962 72.6464 5.30631 67.7975 3.83016C62.6094 2.25086 57.3012 1.2836 51.9496 0.861168C41.3206 0.0223007 30.4734 1.15349 20.2806 4.81283C17.8124 5.69878 15.3515 6.75721 13.0253 8.06301C11.9715 8.6545 10.9165 9.25797 9.90383 9.93977C9.43236 10.2569 8.96942 10.5937 8.50499 10.925C8.23791 11.1155 8.27056 11.1039 8.4245 11.4296C8.59328 11.7866 8.68565 11.6072 9.02395 11.4626C9.54661 11.2396 10.0644 11.0012 10.5912 10.7915C10.8857 10.6746 11.181 10.5621 11.4759 10.4474C11.8038 10.9473 12.246 11.3153 12.7415 11.5225L5.11976 41.1165C3.71092 41.203 2.31357 41.3018 0.942932 41.4272C3.79994 46.8011 8.61628 50.3402 14.0881 50.3402C19.5595 50.3402 24.3758 46.8011 27.2329 41.4272C25.857 41.3014 24.4545 41.2025 23.0404 41.1161L15.317 11.0996C15.9936 10.5308 16.4024 9.64317 16.4495 8.69944C18.0984 8.1927 19.7628 7.74545 21.4313 7.35469C31.8129 4.92283 42.5102 4.23718 53.0773 4.93823C58.4278 5.29304 63.7523 6.03432 69.0119 7.22842C70.8804 7.65257 72.7247 8.15974 74.552 8.73368C74.6072 9.66457 75.0145 10.5377 75.683 11.0996L67.9596 41.1161C66.5455 41.2025 65.143 41.3014 63.7671 41.4272C66.6242 46.8011 71.4405 50.3402 76.9119 50.3402C82.3837 50.3402 87.2001 46.8011 90.0571 41.4272C88.6864 41.3018 87.2891 41.203 85.8802 41.1165Z" />
                    </svg>

                    <p class="group-hover:text-gold transition text-center">Penyelesaian
                        Sengketa</p>
                </span>
            </div>

            <div class="flex items-center justify-center border-r border-customDarkGray px-8">
                <span class="flex flex-col gap-4 text-lg font-bold items-center  group">
                    <svg class="size-20 group-hover:text-gold transition" viewBox="0 0 86 85" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_7_447)">
                            <path d="M83.6323 14.3172C82.7741 13.8219 81.7543 13.6876 80.7971 13.9438C79.8398 14.2 79.0235 14.8257 78.5273 15.6835L76.1035 19.882C75.5555 19.8368 75.006 19.9482 74.519 20.2033C74.0319 20.4585 73.6274 20.8468 73.3526 21.323L71.0533 25.3074V12.4512H79.7691C80.0994 12.4512 80.4161 12.32 80.6496 12.0865C80.8831 11.853 81.0143 11.5363 81.0143 11.2061V6.22559C81.0125 4.57557 80.3565 2.99359 79.1901 1.82654C78.0236 0.659497 76.442 0.00263628 74.792 0H16.6865C15.0359 0.00175782 13.4535 0.65823 12.2863 1.82537C11.1192 2.99252 10.4627 4.575 10.4609 6.22559V72.5488H1.74512C1.41489 72.5488 1.09819 72.68 0.864686 72.9135C0.631182 73.147 0.5 73.4637 0.5 73.7939L0.5 78.7744C0.501758 80.425 1.15823 82.0075 2.32537 83.1746C3.49252 84.3418 5.075 84.9982 6.72559 85H64.8311C66.4816 84.9982 68.0641 84.3418 69.2313 83.1746C70.3984 82.0075 71.0549 80.425 71.0566 78.7744V46.8845L71.0799 46.8479L80.4183 30.673L82.2162 31.709C82.3112 31.7642 82.3804 31.8547 82.4087 31.9608C82.437 32.0669 82.4221 32.1799 82.3673 32.2751L77.3868 40.9079C77.3051 41.0496 77.252 41.206 77.2307 41.3683C77.2094 41.5305 77.2203 41.6953 77.2627 41.8533C77.3051 42.0113 77.3782 42.1594 77.4778 42.2892C77.5774 42.4189 77.7017 42.5278 77.8434 42.6096C77.9851 42.6913 78.1415 42.7444 78.3037 42.7657C78.4659 42.787 78.6307 42.7761 78.7887 42.7337C78.9468 42.6913 79.0949 42.6182 79.2246 42.5186C79.3544 42.419 79.4633 42.2947 79.545 42.153L84.5255 33.5202C84.9105 32.8531 85.0149 32.0604 84.8157 31.3164C84.6164 30.5723 84.1299 29.9379 83.463 29.5524L81.665 28.5148L82.7026 26.7169C82.978 26.2417 83.1125 25.6979 83.0905 25.1491C83.0684 24.6002 82.8907 24.069 82.5781 23.6174L85.002 19.4238C85.4975 18.565 85.6316 17.5445 85.3747 16.5869C85.1179 15.6292 84.4911 14.8128 83.6323 14.3172ZM74.792 2.49023C75.7824 2.49111 76.732 2.88494 77.4323 3.58526C78.1326 4.28559 78.5265 5.23518 78.5273 6.22559V9.96094H71.0566V6.22559C71.0575 5.23518 71.4513 4.28559 72.1517 3.58526C72.852 2.88494 73.8016 2.49111 74.792 2.49023ZM6.72559 82.5098C5.73518 82.5089 4.78559 82.1151 4.08526 81.4147C3.38494 80.7144 2.99111 79.7648 2.99023 78.7744V75.0391H58.6055V78.7744C58.604 80.1222 59.0423 81.4337 59.8539 82.5098H6.72559ZM64.8311 82.5098C63.8406 82.5089 62.8911 82.1151 62.1907 81.4147C61.4904 80.7144 61.0966 79.7648 61.0957 78.7744V73.7939C61.0957 73.4637 60.9645 73.147 60.731 72.9135C60.4975 72.68 60.1808 72.5488 59.8506 72.5488H12.9512V6.22559C12.9521 5.23518 13.3459 4.28559 14.0462 3.58526C14.7465 2.88494 15.6961 2.49111 16.6865 2.49023H69.8115C69.0011 3.56673 68.564 4.87816 68.5664 6.22559V29.6188L61.7349 41.4524C61.5421 41.783 61.4171 42.1486 61.3672 42.528C61.3173 42.9074 61.3436 43.293 61.4443 43.6621C61.4891 43.8283 61.5492 43.99 61.6236 44.1452L54.9066 55.7779C52.9102 59.2398 51.8665 63.1687 51.8818 67.1649C51.884 67.3821 51.943 67.5949 52.0529 67.7822C52.1628 67.9695 52.3197 68.1249 52.5082 68.2328C52.6967 68.3407 52.9101 68.3974 53.1272 68.3974C53.3444 68.3973 53.5578 68.3404 53.7462 68.2324C57.2139 66.2487 60.0936 63.381 62.0918 59.9217L68.5664 48.714V78.7744C68.5655 79.7648 68.1717 80.7144 67.4714 81.4147C66.771 82.1151 65.8215 82.5089 64.8311 82.5098ZM63.5179 45.8353L66.3933 47.4954L59.9336 58.6766C58.5583 61.0584 56.7082 63.1322 54.4982 64.7693C54.8127 62.0372 55.6839 59.3986 57.0582 57.0164L63.5179 45.8353ZM68.9233 45.6028C68.8962 45.65 68.86 45.6914 68.8168 45.7245C68.7736 45.7577 68.7243 45.782 68.6717 45.796C68.6191 45.81 68.5642 45.8135 68.5103 45.8063C68.4563 45.7991 68.4043 45.7813 68.3572 45.7539L64.0408 43.2637C63.9935 43.2366 63.952 43.2005 63.9187 43.1574C63.8854 43.1143 63.8609 43.065 63.8467 43.0124C63.8325 42.9598 63.8289 42.9049 63.836 42.8508C63.8431 42.7968 63.8608 42.7447 63.8881 42.6976L75.5092 22.5682C75.5365 22.521 75.5728 22.4797 75.6161 22.4467C75.6594 22.4136 75.7088 22.3895 75.7615 22.3756C75.7966 22.3654 75.8329 22.3603 75.8694 22.3606C75.9424 22.3607 76.014 22.3802 76.077 22.4171L80.3934 24.9073C80.4883 24.9625 80.5575 25.0531 80.5859 25.1592C80.6142 25.2653 80.5993 25.3783 80.5444 25.4734L78.8843 28.3488L68.9233 45.6028ZM82.8438 18.1737L80.561 22.1282L78.4028 20.8831L80.6855 16.9336C80.8507 16.6474 81.1227 16.4385 81.4418 16.3529C81.7609 16.2673 82.101 16.3119 82.3872 16.4771C82.6734 16.6422 82.8823 16.9142 82.9679 17.2333C83.0535 17.5525 83.0089 17.8925 82.8438 18.1787V18.1737Z" />
                            <path d="M29.898 10.102C30.9256 12.2342 31.133 14.6699 30.4808 16.9452C29.9426 18.8893 30.0117 20.9516 30.6788 22.8554C31.3458 24.7592 32.5789 26.4136 34.2128 27.5967C35.3241 28.4012 36.5886 28.9691 37.9282 29.2652L40.4799 29.8529C40.6634 29.895 40.8541 29.895 41.0377 29.8529L43.5894 29.2652C44.9276 28.9709 46.1914 28.406 47.3031 27.605C48.9374 26.4218 50.1709 24.7672 50.8383 22.8631C51.5056 20.959 51.5749 18.8964 51.0368 16.9518C50.3846 14.6765 50.592 12.2409 51.6195 10.1086L51.749 9.848C51.9291 9.48457 51.9988 9.07632 51.9494 8.67372C51.9 8.27112 51.7337 7.89182 51.4711 7.58272C51.2084 7.27362 50.8609 7.04827 50.4716 6.93452C50.0823 6.82078 49.6681 6.82363 49.2804 6.94273L48.7425 7.10874C47.6885 7.43043 46.5923 7.5927 45.4902 7.59019C44.0292 7.58654 42.5831 7.29663 41.2336 6.73687C41.0821 6.67358 40.9196 6.64099 40.7555 6.64099C40.5913 6.64099 40.4288 6.67358 40.2773 6.73687C38.9299 7.29578 37.4861 7.58567 36.0273 7.59019C34.9261 7.59022 33.831 7.42571 32.7784 7.1021L32.2405 6.93608C31.8528 6.81699 31.4386 6.81414 31.0493 6.92788C30.66 7.04163 30.3125 7.26698 30.0498 7.57608C29.7872 7.88518 29.6209 8.26448 29.5715 8.66708C29.5221 9.06968 29.5917 9.47793 29.7719 9.84136L29.898 10.102ZM36.024 10.0804C37.6405 10.0767 39.2435 9.78663 40.7588 9.22378C42.273 9.78624 43.8749 10.0763 45.4902 10.0804C46.7147 10.079 47.9333 9.91142 49.1127 9.58237C48.0518 12.1237 47.8821 14.9492 48.6313 17.5993C49.0348 19.0589 48.982 20.607 48.4799 22.0357C47.9777 23.4644 47.0503 24.7051 45.8223 25.5913C44.9841 26.1935 44.0315 26.6178 43.0232 26.838L40.7521 27.361L38.4794 26.838C37.4762 26.6161 36.5289 26.1918 35.6953 25.5913C34.4664 24.7055 33.5381 23.4646 33.0353 22.0356C32.5325 20.6065 32.4794 19.0578 32.883 17.5976C33.6322 14.9476 33.4625 12.122 32.4016 9.58071C33.582 9.91061 34.8017 10.0787 36.0273 10.0804H36.024Z" />
                            <path d="M34.2294 33.9519C34.2292 34.1155 34.2612 34.2775 34.3237 34.4286C34.3862 34.5798 34.4779 34.7172 34.5936 34.8328C34.7093 34.9485 34.8466 35.0402 34.9978 35.1027C35.1489 35.1652 35.3109 35.1972 35.4745 35.197H61.5107C61.841 35.197 62.1577 35.0658 62.3912 34.8323C62.6247 34.5988 62.7559 34.2821 62.7559 33.9519C62.7559 33.6217 62.6247 33.305 62.3912 33.0715C62.1577 32.838 61.841 32.7068 61.5107 32.7068H35.4745C35.1443 32.7068 34.8276 32.838 34.5941 33.0715C34.3606 33.305 34.2294 33.6217 34.2294 33.9519Z" />
                            <path d="M18.3467 35.1953H27.4493C27.7795 35.1953 28.0962 35.0641 28.3297 34.8306C28.5633 34.5971 28.6944 34.2804 28.6944 33.9502C28.6944 33.62 28.5633 33.3033 28.3297 33.0698C28.0962 32.8363 27.7795 32.7051 27.4493 32.7051H18.3467C18.0165 32.7051 17.6998 32.8363 17.4662 33.0698C17.2327 33.3033 17.1016 33.62 17.1016 33.9502C17.1016 34.2804 17.2327 34.5971 17.4662 34.8306C17.6998 35.0641 18.0165 35.1953 18.3467 35.1953Z" />
                            <path d="M18.3467 43.4961H56.5303C56.8605 43.4961 57.1772 43.3649 57.4107 43.1314C57.6442 42.8979 57.7754 42.5812 57.7754 42.251C57.7754 41.9208 57.6442 41.6041 57.4107 41.3705C57.1772 41.137 56.8605 41.0059 56.5303 41.0059H18.3467C18.0165 41.0059 17.6998 41.137 17.4662 41.3705C17.2327 41.6041 17.1016 41.9208 17.1016 42.251C17.1016 42.5812 17.2327 42.8979 17.4662 43.1314C17.6998 43.3649 18.0165 43.4961 18.3467 43.4961Z" />
                            <path d="M18.3467 51.7969H53.21C53.5402 51.7969 53.8569 51.6657 54.0904 51.4322C54.3239 51.1987 54.4551 50.882 54.4551 50.5518C54.4551 50.2215 54.3239 49.9048 54.0904 49.6713C53.8569 49.4378 53.5402 49.3066 53.21 49.3066H18.3467C18.0165 49.3066 17.6998 49.4378 17.4662 49.6713C17.2327 49.9048 17.1016 50.2215 17.1016 50.5518C17.1016 50.882 17.2327 51.1987 17.4662 51.4322C17.6998 51.6657 18.0165 51.7969 18.3467 51.7969Z" />
                            <path d="M49.8896 57.6074H18.3467C18.0165 57.6074 17.6998 57.7386 17.4662 57.9721C17.2327 58.2056 17.1016 58.5223 17.1016 58.8525C17.1016 59.1828 17.2327 59.4995 17.4662 59.733C17.6998 59.9665 18.0165 60.0977 18.3467 60.0977H49.8896C50.2199 60.0977 50.5366 59.9665 50.7701 59.733C51.0036 59.4995 51.1348 59.1828 51.1348 58.8525C51.1348 58.5223 51.0036 58.2056 50.7701 57.9721C50.5366 57.7386 50.2199 57.6074 49.8896 57.6074Z" />
                            <path d="M31.6279 65.9082H18.3467C18.0165 65.9082 17.6998 66.0394 17.4662 66.2729C17.2327 66.5064 17.1016 66.8231 17.1016 67.1533C17.1016 67.4835 17.2327 67.8002 17.4662 68.0338C17.6998 68.2673 18.0165 68.3984 18.3467 68.3984H31.6279C31.9582 68.3984 32.2749 68.2673 32.5084 68.0338C32.7419 67.8002 32.873 67.4835 32.873 67.1533C32.873 66.8231 32.7419 66.5064 32.5084 66.2729C32.2749 66.0394 31.9582 65.9082 31.6279 65.9082Z" />
                            <path d="M49.8896 65.9082H36.6084C36.2782 65.9082 35.9615 66.0394 35.728 66.2729C35.4945 66.5064 35.3633 66.8231 35.3633 67.1533C35.3633 67.4835 35.4945 67.8002 35.728 68.0338C35.9615 68.2673 36.2782 68.3984 36.6084 68.3984H49.8896C50.2199 68.3984 50.5366 68.2673 50.7701 68.0338C51.0036 67.8002 51.1348 67.4835 51.1348 67.1533C51.1348 66.8231 51.0036 66.5064 50.7701 66.2729C50.5366 66.0394 50.2199 65.9082 49.8896 65.9082Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_7_447">
                                <rect width="85" height="85" fill="white" transform="translate(0.5)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <p class="group-hover:text-gold transition text-center">Hukum Kekayaan
                        Intelektual</p>
                </span>
            </div>

            <div class="flex items-center justify-center border-r border-customDarkGray px-8">
                <span class="flex flex-col gap-4 text-lg font-bold items-center  group">
                    <svg class="size-20 group-hover:text-gold transition" viewBox="0 0 84 69" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4775 7.62939e-06H69.5222V3.07385H14.4775V7.62939e-06ZM11.9642 5.97036L72.0358 5.9707C81.9866 5.9707 87.0025 18.5468 79.9596 25.8742C72.9163 33.2013 60.8291 27.9821 60.8291 17.63H63.7833C63.7833 25.2549 72.6861 29.0946 77.8705 23.7004C83.0543 18.3072 79.3653 9.04453 72.0358 9.04453H11.9642C4.63404 9.04453 0.944366 18.3072 6.12914 23.7004C11.3136 29.0946 20.2163 25.2556 20.2163 17.63H23.1708C23.1708 27.9828 11.0833 33.2013 4.04005 25.8742C-3.00226 18.5468 2.01336 5.9707 11.9642 5.9707V5.97036ZM54.8703 17.63H57.8244V59.9551H66.3943V63.029H54.8703V17.63ZM29.1297 17.63V63.029H17.6043V59.9551H26.1752V17.63H29.1297ZM34.8692 69H14.498V65.9265H31.9141V17.63H34.8683L34.8692 69ZM46.3473 69H37.6526V17.63H40.6078V65.9265H43.3922L43.3915 17.63H46.3473V69ZM52.0856 65.9265H69.5016V69H49.1314C49.1314 51.8769 49.1307 34.7535 49.1307 17.63H52.0856V65.9265ZM69.5222 17.63C69.5222 19.9537 72.2345 21.1204 73.812 19.4786C75.391 17.8365 74.2686 15.0152 72.0358 15.0152H11.9642C9.73134 15.0152 8.60962 17.8368 10.187 19.4786C11.7651 21.1204 14.4775 19.9537 14.4775 17.63H17.432C17.432 22.6799 11.5345 25.2275 8.0986 21.6521C4.6617 18.0764 7.11033 11.9414 11.9642 11.9414H72.0358C76.889 11.9414 79.3383 18.076 75.902 21.6521C72.4651 25.2275 66.568 22.6803 66.568 17.63H69.5222Z" />
                    </svg>

                    <p class="group-hover:text-gold transition text-center">Sengketa Hasil
                        Pemilihan Umum</p>
                </span>
            </div>

            <a href="{{route("layanan-kami")}}" class="flex items-center justify-center px-8">
                <span class="flex flex-col gap-4 text-lg font-bold items-center  group">
                    <svg class="size-12 group-hover:text-gold transition" viewBox=" 0 0 52 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.249939 22.9997C0.249939 24.0938 0.684536 25.143 1.45812 25.9166C2.23171 26.6901 3.28092 27.1247 4.37494 27.1247H37.0449L26.2099 37.9597C25.4813 38.7417 25.0846 39.776 25.1035 40.8446C25.1223 41.9133 25.5552 42.9329 26.311 43.6887C27.0668 44.4444 28.0864 44.8774 29.1551 44.8962C30.2237 44.9151 31.258 44.5184 32.0399 43.7897L49.9149 25.9147C50.6874 25.1413 51.1213 24.0929 51.1213 22.9997C51.1213 21.9066 50.6874 20.8582 49.9149 20.0847L32.0399 2.20975C31.6623 1.80447 31.2069 1.47941 30.7009 1.25395C30.1949 1.0285 29.6487 0.907265 29.0948 0.897493C28.5409 0.88772 27.9908 0.989605 27.4771 1.19707C26.9635 1.40454 26.4969 1.71333 26.1052 2.10503C25.7135 2.49674 25.4047 2.96332 25.1973 3.47696C24.9898 3.99059 24.8879 4.54075 24.8977 5.09462C24.9075 5.64849 25.0287 6.19471 25.2541 6.70071C25.4796 7.2067 25.8047 7.6621 26.2099 8.03975L37.0449 18.8747H4.37494C2.09794 18.8747 0.249939 20.7227 0.249939 22.9997Z" />
                    </svg>

                    <p class="group-hover:text-gold transition text-center">Selengkapnya</p>
                </span>
            </a>
        </div>
    </section>

    {{-- TIM KAMI --}}
    <section id="tim-kami" class="py-20 custom-container flex flex-col items-center gap-8">
        <div class="flex flex-col items-center">
            <img class="size-6 md:size-7 xl:size-8" src="{{asset('assets/logo/logo-rcp.png')}}" alt="logo">

            <h1 class="heading-1 font-cormorant font-bold text-center">Tim Kami</h1>

            <img src="{{asset('assets/logo/line.svg')}}" alt="line" class="w-8 md:w-12 xl:w-16 mt-2 md:mt-3 xl:mt-4 mb-6 md:mb-7 xl:mb-8">
        </div>

        <div class="flex flex-col items-center gap-16">
            <div class="flex gap-8">
                <div class="flex-none">
                    <img class="w-64 rounded-2xl border border-gold" src="{{asset('assets/tim/WILHELMUS.png')}}" alt="Wilhemus">

                    <div class="flex justify-center items-start gap-4 -mt-4 md:-mt-5 xl:-mt-6">
                        <a id="whatsapp" href="" class="text-white hover:text-gold transition bg-gold hover:bg-customDarkGray hover:-translate-y-2 flex justify-center items-center p-3 rounded-xl" target="_blank" rel="noreferrer noopener">
                            <svg class="size-4 md:size-5 xl:size-6" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.2513 1.74603C9.69841 1.19039 9.03991 0.749834 8.31415 0.450065C7.5884 0.150296 6.80992 -0.00268806 6.02412 3.57417e-05C2.73166 3.57417e-05 0.0482413 2.67003 0.0482413 5.94602C0.0482413 6.99601 0.325628 8.01601 0.844221 8.91601L0 12L3.16583 11.172C4.0402 11.646 5.02312 11.898 6.02412 11.898C9.31658 11.898 12 9.22801 12 5.95202C12 4.36202 11.3789 2.86803 10.2513 1.74603ZM6.02412 10.89C5.13166 10.89 4.25729 10.65 3.49146 10.2L3.31055 10.092L1.42915 10.584L1.92965 8.76001L1.80905 8.57401C1.31321 7.78619 1.04993 6.87556 1.04925 5.94602C1.04925 3.22203 3.2804 1.00203 6.01809 1.00203C7.34472 1.00203 8.59296 1.51803 9.52764 2.45403C9.99044 2.91241 10.3572 3.45762 10.6067 4.05808C10.8561 4.65853 10.9833 5.30229 10.9809 5.95202C10.993 8.67601 8.76181 10.89 6.02412 10.89ZM8.74975 7.19401C8.59899 7.12201 7.86332 6.76202 7.73065 6.70802C7.59196 6.66002 7.49548 6.63602 7.39296 6.78002C7.29045 6.93002 7.00703 7.26601 6.92261 7.36201C6.83819 7.46401 6.74774 7.47601 6.59698 7.39801C6.44623 7.32601 5.96382 7.16401 5.39698 6.66002C4.95075 6.26402 4.65528 5.77802 4.56482 5.62802C4.4804 5.47802 4.55276 5.40002 4.63116 5.32202C4.69749 5.25602 4.78191 5.14802 4.85427 5.06402C4.92663 4.98002 4.95678 4.91402 5.00502 4.81802C5.05327 4.71602 5.02915 4.63202 4.99296 4.56002C4.95678 4.48802 4.65528 3.75602 4.53467 3.45603C4.41407 3.16803 4.28744 3.20403 4.19698 3.19803H3.90754C3.80502 3.19803 3.64824 3.23403 3.50955 3.38403C3.37688 3.53403 2.99095 3.89402 2.99095 4.62602C2.99095 5.35802 3.52764 6.06602 3.6 6.16202C3.67236 6.26402 4.65528 7.76401 6.15075 8.40601C6.50653 8.56201 6.78392 8.65201 7.001 8.71801C7.35678 8.83201 7.68241 8.81401 7.94171 8.77801C8.23115 8.73601 8.82814 8.41801 8.94874 8.07001C9.07537 7.72201 9.07538 7.42801 9.03316 7.36201C8.99095 7.29601 8.9005 7.26601 8.74975 7.19401Z" />
                            </svg>
                        </a>

                        <a id="instagram" href="" class="text-white hover:text-gold transition bg-gold hover:bg-customDarkGray hover:-translate-y-2 flex justify-center items-center p-3 rounded-xl" target="_blank" rel="noreferrer noopener">
                            <svg class="size-4 md:size-5 xl:size-6" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.9985 2.92142C4.29485 2.92142 2.91992 4.29635 2.91992 6C2.91992 7.70365 4.29485 9.07858 5.9985 9.07858C7.70215 9.07858 9.07708 7.70365 9.07708 6C9.07708 4.29635 7.70215 2.92142 5.9985 2.92142ZM5.9985 8.00085C4.89675 8.00085 3.99765 7.10174 3.99765 6C3.99765 4.89826 4.89675 3.99915 5.9985 3.99915C7.10024 3.99915 7.99935 4.89826 7.99935 6C7.99935 7.10174 7.10024 8.00085 5.9985 8.00085ZM9.20317 2.07785C8.8054 2.07785 8.48418 2.39907 8.48418 2.79684C8.48418 3.1946 8.8054 3.51582 9.20317 3.51582C9.60093 3.51582 9.92215 3.19611 9.92215 2.79684C9.92227 2.70238 9.90375 2.60884 9.86766 2.52155C9.83157 2.43427 9.77862 2.35496 9.71183 2.28817C9.64504 2.22138 9.56573 2.16843 9.47845 2.13234C9.39116 2.09625 9.29762 2.07773 9.20317 2.07785ZM11.9996 6C11.9996 5.17144 12.0071 4.35039 11.9605 3.52333C11.914 2.56268 11.6948 1.7101 10.9924 1.00763C10.2884 0.303651 9.43732 0.0860042 8.47667 0.0394728C7.64811 -0.00705863 6.82706 0.000446468 6 0.000446468C5.17144 0.000446468 4.35039 -0.00705863 3.52333 0.0394728C2.56268 0.0860042 1.7101 0.305152 1.00763 1.00763C0.303651 1.7116 0.0860043 2.56268 0.0394728 3.52333C-0.00705863 4.35189 0.000446468 5.17294 0.000446468 6C0.000446468 6.82706 -0.00705863 7.64961 0.0394728 8.47667C0.0860043 9.43732 0.305152 10.2899 1.00763 10.9924C1.7116 11.6963 2.56268 11.914 3.52333 11.9605C4.35189 12.0071 5.17294 11.9996 6 11.9996C6.82856 11.9996 7.64962 12.0071 8.47667 11.9605C9.43732 11.914 10.2899 11.6948 10.9924 10.9924C11.6964 10.2884 11.914 9.43732 11.9605 8.47667C12.0086 7.64961 11.9996 6.82856 11.9996 6ZM10.6787 9.53939C10.5691 9.81258 10.437 10.0167 10.2254 10.2269C10.0137 10.4385 9.81108 10.5706 9.53789 10.6802C8.74836 10.9939 6.87359 10.9233 5.9985 10.9233C5.12341 10.9233 3.24714 10.9939 2.45761 10.6817C2.18442 10.5721 1.98028 10.44 1.77014 10.2284C1.5585 10.0167 1.42641 9.81408 1.31684 9.54089C1.00463 8.74986 1.07517 6.87509 1.07517 6C1.07517 5.12491 1.00463 3.24864 1.31684 2.45911C1.42641 2.18592 1.5585 1.98179 1.77014 1.77164C1.98179 1.5615 2.18442 1.42791 2.45761 1.31834C3.24714 1.00613 5.12341 1.07667 5.9985 1.07667C6.87359 1.07667 8.74986 1.00613 9.53939 1.31834C9.81258 1.42791 10.0167 1.56 10.2269 1.77164C10.4385 1.98329 10.5706 2.18592 10.6802 2.45911C10.9924 3.24864 10.9218 5.12491 10.9218 6C10.9218 6.87509 10.9924 8.74986 10.6787 9.53939Z" />
                            </svg>
                        </a>

                        <a id="email" href="" class="text-white hover:text-gold transition bg-gold hover:bg-customDarkGray hover:-translate-y-2 flex justify-center items-center p-3 rounded-xl" target="_blank" rel="noreferrer noopener">
                            <svg class="size-4 md:size-5 xl:size-6" viewBox="0 0 23 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.9947 9.06438L21.8311 2.89138V15.1669L15.9947 9.06438ZM8.47406 10.1098L10.5236 12.2756C10.8453 12.6083 11.2646 12.8093 11.7229 12.8093H11.7391H11.7514C12.2107 12.8093 12.6301 12.6072 12.9555 12.2722L12.9527 12.2745L15.0022 10.1086L21.2324 16.6224H2.24673L8.47406 10.1098ZM2.23819 1.42783H21.2438L12.1148 11.0801C12.0122 11.1789 11.8851 11.2326 11.7543 11.2326H11.741H11.7286C11.5973 11.2328 11.4698 11.1786 11.3671 11.0789L11.3681 11.0801L2.23819 1.42783ZM1.64895 2.89022L7.48441 9.06323L1.64895 15.1623V2.89022ZM22.1442 0.0705562C21.9165 -0.0680591 21.6489 -0.148918 21.3652 -0.148918H2.11768C1.84267 -0.148838 1.57143 -0.0709347 1.32539 0.0786421L1.33583 0.0728663C1.04128 0.249729 0.79322 0.523342 0.61968 0.862795C0.446141 1.20225 0.354032 1.59402 0.35376 1.99384V16.0541C0.354262 16.6231 0.540165 17.1686 0.870677 17.571C1.20119 17.9734 1.64932 18.1997 2.11673 18.2003H21.3624C21.8298 18.1997 22.2779 17.9734 22.6084 17.571C22.9389 17.1686 23.1248 16.6231 23.1253 16.0541V1.99384C23.1253 1.15407 22.7278 0.426336 22.149 0.076332L22.1385 0.0705562H22.1442Z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="*:font-cormorant font-bold">
                    <p class="paragraph text-gold">Managing Partner</p>
                    <h4 class="heading-4">WILHELMUS RIO RESANDHI, S.H., M.H.</h4>
                    <p class="paragraph mt-4">
                        Wilhelmus Rio Resandhi bergabung dengan Resandhi Cumbhadrika Partnership - Attorneys and Counsellors at Law pada awal berdirinya pada tahun 2020. Memperoleh gelar Sarjana Hukum dari Universitas Gadjah Mada, Yogyakarta dan Magister Ilmu Hukum Litigasi di Universitas Gadjah Mada - Kampus Jakarta.
                        <br><br>
                        Bidang keahlian Wilhelmus Rio Resandhi meliputi Hukum Ketenagakerjaan, Penyelesaian Sengketa, Hukum Perusahaan, Hukum Perdata, Hukum Pidana, Hak Kekayaan Intelektual, Litigasi, Pasar Modal, Sengketa Hasil Pemilihan Umum, dan PKPU dan Kepailitan.
                        <br><br>
                        Sebelum mendirikan Resandhi Cumbhadrika Partnership - Attorneys and Counsellors at Law, Rio membangun karir profesionalnya melalui beberapa posisi pekerjaan, yang meliputi :
                    </p>

                    <ol class="paragraph *:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
                        <li>
                            Managing Partner di Rio Resandhi & Partners
                        </li>

                        <li>
                            Pengalaman di Perusahaan swasta di bidang pertambangan & perkebunan, makanan & minuman, logistik & transportasi, otomotif, perkapalan, lelang, perawatan kesehatan, dan perbankan.
                        </li>
                    </ol>
                    <br>
                    <p class="paragraph">
                        Asosiasi Profesional dan Keanggotaan :
                    </p>
                    <ol class="paragraph *:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
                        <li>
                            Perhimpunan Advokat Indonesia (PERADI) DPC Jakarta Selatan
                        </li>

                        <li>
                            Asosiasi Advokat Indonesia (AAI) DPC Jakarta Selatan
                        </li>

                        <li>
                            Himpunan Kurator dan Pengurus Indonesia (HKPI)
                        </li>

                        <li>
                            Pendidikan Profesi Konsultan Hukum Pasar Modal.
                        </li>
                    </ol>
                </div>
            </div>

            <div class="flex gap-8">
                <div class="flex-none order-2">
                    <img class="w-64 rounded-2xl border border-gold" src="{{asset('assets/tim/CHITTO.png')}}" alt="Chitto">

                    <div class="flex justify-center items-start gap-4 -mt-4 md:-mt-5 xl:-mt-6">
                        <a id="whatsapp" href="" class="text-white hover:text-gold transition bg-gold hover:bg-customDarkGray hover:-translate-y-2 flex justify-center items-center p-3 rounded-xl" target="_blank" rel="noreferrer noopener">
                            <svg class="size-4 md:size-5 xl:size-6" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.2513 1.74603C9.69841 1.19039 9.03991 0.749834 8.31415 0.450065C7.5884 0.150296 6.80992 -0.00268806 6.02412 3.57417e-05C2.73166 3.57417e-05 0.0482413 2.67003 0.0482413 5.94602C0.0482413 6.99601 0.325628 8.01601 0.844221 8.91601L0 12L3.16583 11.172C4.0402 11.646 5.02312 11.898 6.02412 11.898C9.31658 11.898 12 9.22801 12 5.95202C12 4.36202 11.3789 2.86803 10.2513 1.74603ZM6.02412 10.89C5.13166 10.89 4.25729 10.65 3.49146 10.2L3.31055 10.092L1.42915 10.584L1.92965 8.76001L1.80905 8.57401C1.31321 7.78619 1.04993 6.87556 1.04925 5.94602C1.04925 3.22203 3.2804 1.00203 6.01809 1.00203C7.34472 1.00203 8.59296 1.51803 9.52764 2.45403C9.99044 2.91241 10.3572 3.45762 10.6067 4.05808C10.8561 4.65853 10.9833 5.30229 10.9809 5.95202C10.993 8.67601 8.76181 10.89 6.02412 10.89ZM8.74975 7.19401C8.59899 7.12201 7.86332 6.76202 7.73065 6.70802C7.59196 6.66002 7.49548 6.63602 7.39296 6.78002C7.29045 6.93002 7.00703 7.26601 6.92261 7.36201C6.83819 7.46401 6.74774 7.47601 6.59698 7.39801C6.44623 7.32601 5.96382 7.16401 5.39698 6.66002C4.95075 6.26402 4.65528 5.77802 4.56482 5.62802C4.4804 5.47802 4.55276 5.40002 4.63116 5.32202C4.69749 5.25602 4.78191 5.14802 4.85427 5.06402C4.92663 4.98002 4.95678 4.91402 5.00502 4.81802C5.05327 4.71602 5.02915 4.63202 4.99296 4.56002C4.95678 4.48802 4.65528 3.75602 4.53467 3.45603C4.41407 3.16803 4.28744 3.20403 4.19698 3.19803H3.90754C3.80502 3.19803 3.64824 3.23403 3.50955 3.38403C3.37688 3.53403 2.99095 3.89402 2.99095 4.62602C2.99095 5.35802 3.52764 6.06602 3.6 6.16202C3.67236 6.26402 4.65528 7.76401 6.15075 8.40601C6.50653 8.56201 6.78392 8.65201 7.001 8.71801C7.35678 8.83201 7.68241 8.81401 7.94171 8.77801C8.23115 8.73601 8.82814 8.41801 8.94874 8.07001C9.07537 7.72201 9.07538 7.42801 9.03316 7.36201C8.99095 7.29601 8.9005 7.26601 8.74975 7.19401Z" />
                            </svg>
                        </a>

                        <a id="instagram" href="" class="text-white hover:text-gold transition bg-gold hover:bg-customDarkGray hover:-translate-y-2 flex justify-center items-center p-3 rounded-xl" target="_blank" rel="noreferrer noopener">
                            <svg class="size-4 md:size-5 xl:size-6" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.9985 2.92142C4.29485 2.92142 2.91992 4.29635 2.91992 6C2.91992 7.70365 4.29485 9.07858 5.9985 9.07858C7.70215 9.07858 9.07708 7.70365 9.07708 6C9.07708 4.29635 7.70215 2.92142 5.9985 2.92142ZM5.9985 8.00085C4.89675 8.00085 3.99765 7.10174 3.99765 6C3.99765 4.89826 4.89675 3.99915 5.9985 3.99915C7.10024 3.99915 7.99935 4.89826 7.99935 6C7.99935 7.10174 7.10024 8.00085 5.9985 8.00085ZM9.20317 2.07785C8.8054 2.07785 8.48418 2.39907 8.48418 2.79684C8.48418 3.1946 8.8054 3.51582 9.20317 3.51582C9.60093 3.51582 9.92215 3.19611 9.92215 2.79684C9.92227 2.70238 9.90375 2.60884 9.86766 2.52155C9.83157 2.43427 9.77862 2.35496 9.71183 2.28817C9.64504 2.22138 9.56573 2.16843 9.47845 2.13234C9.39116 2.09625 9.29762 2.07773 9.20317 2.07785ZM11.9996 6C11.9996 5.17144 12.0071 4.35039 11.9605 3.52333C11.914 2.56268 11.6948 1.7101 10.9924 1.00763C10.2884 0.303651 9.43732 0.0860042 8.47667 0.0394728C7.64811 -0.00705863 6.82706 0.000446468 6 0.000446468C5.17144 0.000446468 4.35039 -0.00705863 3.52333 0.0394728C2.56268 0.0860042 1.7101 0.305152 1.00763 1.00763C0.303651 1.7116 0.0860043 2.56268 0.0394728 3.52333C-0.00705863 4.35189 0.000446468 5.17294 0.000446468 6C0.000446468 6.82706 -0.00705863 7.64961 0.0394728 8.47667C0.0860043 9.43732 0.305152 10.2899 1.00763 10.9924C1.7116 11.6963 2.56268 11.914 3.52333 11.9605C4.35189 12.0071 5.17294 11.9996 6 11.9996C6.82856 11.9996 7.64962 12.0071 8.47667 11.9605C9.43732 11.914 10.2899 11.6948 10.9924 10.9924C11.6964 10.2884 11.914 9.43732 11.9605 8.47667C12.0086 7.64961 11.9996 6.82856 11.9996 6ZM10.6787 9.53939C10.5691 9.81258 10.437 10.0167 10.2254 10.2269C10.0137 10.4385 9.81108 10.5706 9.53789 10.6802C8.74836 10.9939 6.87359 10.9233 5.9985 10.9233C5.12341 10.9233 3.24714 10.9939 2.45761 10.6817C2.18442 10.5721 1.98028 10.44 1.77014 10.2284C1.5585 10.0167 1.42641 9.81408 1.31684 9.54089C1.00463 8.74986 1.07517 6.87509 1.07517 6C1.07517 5.12491 1.00463 3.24864 1.31684 2.45911C1.42641 2.18592 1.5585 1.98179 1.77014 1.77164C1.98179 1.5615 2.18442 1.42791 2.45761 1.31834C3.24714 1.00613 5.12341 1.07667 5.9985 1.07667C6.87359 1.07667 8.74986 1.00613 9.53939 1.31834C9.81258 1.42791 10.0167 1.56 10.2269 1.77164C10.4385 1.98329 10.5706 2.18592 10.6802 2.45911C10.9924 3.24864 10.9218 5.12491 10.9218 6C10.9218 6.87509 10.9924 8.74986 10.6787 9.53939Z" />
                            </svg>
                        </a>

                        <a id="email" href="" class="text-white hover:text-gold transition bg-gold hover:bg-customDarkGray hover:-translate-y-2 flex justify-center items-center p-3 rounded-xl" target="_blank" rel="noreferrer noopener">
                            <svg class="size-4 md:size-5 xl:size-6" viewBox="0 0 23 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.9947 9.06438L21.8311 2.89138V15.1669L15.9947 9.06438ZM8.47406 10.1098L10.5236 12.2756C10.8453 12.6083 11.2646 12.8093 11.7229 12.8093H11.7391H11.7514C12.2107 12.8093 12.6301 12.6072 12.9555 12.2722L12.9527 12.2745L15.0022 10.1086L21.2324 16.6224H2.24673L8.47406 10.1098ZM2.23819 1.42783H21.2438L12.1148 11.0801C12.0122 11.1789 11.8851 11.2326 11.7543 11.2326H11.741H11.7286C11.5973 11.2328 11.4698 11.1786 11.3671 11.0789L11.3681 11.0801L2.23819 1.42783ZM1.64895 2.89022L7.48441 9.06323L1.64895 15.1623V2.89022ZM22.1442 0.0705562C21.9165 -0.0680591 21.6489 -0.148918 21.3652 -0.148918H2.11768C1.84267 -0.148838 1.57143 -0.0709347 1.32539 0.0786421L1.33583 0.0728663C1.04128 0.249729 0.79322 0.523342 0.61968 0.862795C0.446141 1.20225 0.354032 1.59402 0.35376 1.99384V16.0541C0.354262 16.6231 0.540165 17.1686 0.870677 17.571C1.20119 17.9734 1.64932 18.1997 2.11673 18.2003H21.3624C21.8298 18.1997 22.2779 17.9734 22.6084 17.571C22.9389 17.1686 23.1248 16.6231 23.1253 16.0541V1.99384C23.1253 1.15407 22.7278 0.426336 22.149 0.076332L22.1385 0.0705562H22.1442Z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="*:font-cormorant font-bold">
                    <p class="paragraph text-gold text-end">Partner</p>
                    <h4 class="heading-4 text-end">CHITTO CUMBHADRIKA, S.H., S.I.P., M.H.</h4>
                    <p class="paragraph mt-4">
                        Chitto Cumbhadrika memperoleh gelar Sarjana dan Magisternya di Universitas Gadjah Mada, Yogyakarta, serta memperoleh gelar Sarja. Selama menjadi mahasiswa hukum di UGM, Chitto dipercaya untuk mengemban peran utama sebagai Director di Asian Law Students's Association (ALSA) Local Chapter UGM 2009/2010, himpunan mahasiswa hukum terkemuka se-Asia.
                        <br><br>
                        Chitto memiliki pengalaman yang luas di bidang Hukum Pidana, Hukum Perdata, Hukum Tata Negara, Hukum Pertanahan dan Pembebasan Tanah, Korporasi Umum, Hukum Perbankan, PKPU dan Kepailitan, Keuangan, serta Hukum Ketenagakerjaan dan Hukum Keluarga.
                        <br><br>
                        Selain sebagai Advokat, ia mendedikasikan waktunya untuk mengajar sebagai Dosen di STIH IBLAM, dengan harapan dapat membagikan keahliannya kepada para pemuda.
                        <br><br>
                        Asosiasi Profesional dan Keanggotaan :
                    </p>

                    <ol class="paragraph *:font-cormorant list-decimal pl-4 md:pl-6 xl:pl-8">
                        <li>
                            Perhimpunan Advokat Indonesia (PERADI) DPC Jakarta Pusat
                        </li>

                        <li>
                            Anggota Asosiasi Advokat Indonesia (AAI) DPC Jakarta Selatan
                        </li>

                        <li>
                            Pendidikan Profesi Konsultan Hukum Pasar Modal
                        </li>

                        <li>
                            Asosiasi Auditor Hukum Indonesia (ASAHI)
                        </li>

                        <li>
                            Pusat Mediator Indonesia - Universitas Gadjah Mada
                        </li>

                        <li>
                            Himpunan Kurator dan Pengurus Indonesia (HKPI)
                        </li>

                        <li>
                            Asosiasi Industri Perlengkapan dan Pakaian Olahraga Indonesia (EQUINOC) (Ketua Bidang Peraturan Perundang-undangan)
                        </li>

                        <li>
                            Divisi Koordinasi Internal pada Komite Advokat Muda PERADI (Anggota)
                        </li>

                        <li>
                            Divisi Seni, Olahraga dan Budaya DPN PERADI (Anggota).
                        </li>
                    </ol>
                </div>
            </div>

            <div class="flex gap-16">
                <div class="flex flex-col items-center *:font-cormorant font-bold">
                    <p class="paragraph text-gold">Junior Associate</p>
                    <h5 class="heading-5">Fadjar Sukma, S.H.</h5>
                </div>

                <div class="flex flex-col items-center *:font-cormorant font-bold">
                    <p class="paragraph text-gold">Junior Associate</p>
                    <h5 class="heading-5">Elisabeth Yunita, S.H.</h5>
                </div>

                <div class="flex flex-col items-center *:font-cormorant font-bold">
                    <p class="paragraph text-gold">Junior Associate</p>
                    <h5 class="heading-5">Hafidzun Sat Febrian, S.H.</h5>
                </div>

                <div class="flex flex-col items-center *:font-cormorant font-bold">
                    <p class="paragraph text-gold">Junior Associate</p>
                    <h5 class="heading-5">Dicke Muhdi Gailea, S.H.</h5>
                </div>
            </div>

            <a href="{{route('tim-kami')}}" class="paragraph flex items-center gap-1 md:gap-1.5 xl:gap-2 hover:text-gold transition">
                Selengkapnya
                <svg class="size-3 md:size-3.5 xl:size-4" viewBox="0 0 52 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.249939 22.9997C0.249939 24.0938 0.684536 25.143 1.45812 25.9166C2.23171 26.6901 3.28092 27.1247 4.37494 27.1247H37.0449L26.2099 37.9597C25.4813 38.7417 25.0846 39.776 25.1035 40.8446C25.1223 41.9133 25.5552 42.9329 26.311 43.6887C27.0668 44.4444 28.0864 44.8774 29.1551 44.8962C30.2237 44.9151 31.258 44.5184 32.0399 43.7897L49.9149 25.9147C50.6874 25.1413 51.1213 24.0929 51.1213 22.9997C51.1213 21.9066 50.6874 20.8582 49.9149 20.0847L32.0399 2.20975C31.6623 1.80447 31.2069 1.47941 30.7009 1.25395C30.1949 1.0285 29.6487 0.907265 29.0948 0.897493C28.5409 0.88772 27.9908 0.989605 27.4771 1.19707C26.9635 1.40454 26.4969 1.71333 26.1052 2.10503C25.7135 2.49674 25.4047 2.96332 25.1973 3.47696C24.9898 3.99059 24.8879 4.54075 24.8977 5.09462C24.9075 5.64849 25.0287 6.19471 25.2541 6.70071C25.4796 7.2067 25.8047 7.6621 26.2099 8.03975L37.0449 18.8747H4.37494C2.09794 18.8747 0.249939 20.7227 0.249939 22.9997Z" />
                </svg>
            </a>
        </div>
    </section>

    {{-- ARTIKEL --}}
    <section id="artikel" class="py-20 custom-container flex flex-col gap-24">
        <div class="flex items-center">
            <div class="pe-8 me-8 border-e border-e-customDarkGray py-4">
                <h1 class="text-5xl font-cormorant font-bold w-full whitespace-nowrap">Artikel</h1>
            </div>

            <p class="text-sm leading-loose">Jelajahi dunia hukum melalui artikel-artikel kami. Temukan wawasan terbaru dalam litigasi, kepailitan dan lain sebagainya. Kami hadirkan solusi praktis dan pandangan mendalam untuk membimbing Anda melalui kompleksitas masalah hukum. Mulailah eksplorasi Anda sekarang untuk mendapatkan pengetahuan yang berharga!</p>
        </div>

        <div class="px-8 grid grid-cols-2 gap-16">
            @forelse($news as $n)
            <a href="{{route("artikel", $n->id)}}">
                <div class="bg-customDarkGray text-white flex shadow-xl hover:scale-105 transition">
                    <div class="flex-none size-56 flex justify-center items-center overflow-hidden">
                        <img class="object-cover" src="{{asset('assets/news.png')}}" alt="news">
                    </div>

                    <div class="py-4 px-6 flex flex-col justify-between">
                        <div class="*:font-cormorant flex flex-col gap-2">
                            <h4 class="heading-4 font-bold">{{$n->title}}</h4>
                            <p class="paragraph font-medium line-clamp-3">{{$n->description}}</p>
                        </div>

                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <img class="size-6 md:size-7" src="{{asset('assets/logo/logo-rcp.png')}}" alt="logo">
                                <p class="text-xs md:text-sm font-cormorant font-semibold">RCP</p>
                            </div>

                            <p class="font-cormorant text-xs md:text-sm font-semibold">{{$n->date}}</p>
                        </div>
                    </div>
                </div>
            </a>
            @empty
            <p class="paragraph">Maaf, saat ini artikel masih sedang dalam proses pembuatan</p>
            @endforelse

        </div>

        <div id="bottom-pagination" class="pagination">
            {{ $news->links() }}
        </div>
    </section>

    {{-- KONTAK --}}
    <section id="kontak" class="py-20 custom-container flex flex-col items-center gap-8">
        <div class="flex flex-col items-center">
            <img class="size-6 md:size-7 xl:size-8" src="{{asset('assets/logo/logo-rcp.png')}}" alt="logo">

            <h1 class="heading-1 font-cormorant font-bold text-center">Kontak</h1>

            <img src="{{asset('assets/logo/line.svg')}}" alt="line" class="w-8 md:w-12 xl:w-16 mt-2 md:mt-3 xl:mt-4 mb-6 md:mb-7 xl:mb-8">
        </div>

        <div class="bg-customDarkGray flex w-full border border-gold">
            <div class="w-2/5 flex-none">
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1983.1971427965777!2d106.8299067!3d-6.2116164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f40f56e2d7af%3A0x5cf7c3803a23f8b2!2sWisma%20Kodel%2C%20Jl.%20H.%20R.%20Rasuna%20Said%2C%20RT.10%2FRW.7%2C%20Kuningan%2C%20Setia%20Budi%2C%20Kecamatan%20Setiabudi%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012920!5e0!3m2!1sen!2sid!4v1707136544781!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="flex flex-col gap-8 w-full px-8 pb-8 pt-16">
                <div class="text-white flex flex-col gap-2">
                    <h1 class="heading-1 font-cormorant font-bold">Hubungi Kami</h1>
                    <h5 class="heading-5">Isi form ini dan tim kami akan menghubungi anda</h5>
                </div>

                <form action="{{ route('contact') }}" method="POST" class="paragraph flex flex-col gap-8 w-full">
                    @csrf
                    <div class="flex gap-8 w-full">
                        <div class="flex flex-col gap-2 w-full">
                            <label class="text-white" for="nama-depan">Nama Depan</label>
                            <input class="rounded-lg py-3 w-full" type="text" name="first_name" id="nama-depan" placeholder="Nama depan Anda">
                            <p class="text-xs text-red-500">Error Message</p>
                        </div>

                        <div class="flex flex-col gap-2 w-full">
                            <label class="text-white" for="nama-belakang">Nama Belakang</label>
                            <input class="rounded-lg py-3 w-full" type="text" name="last_name" id="nama-belakang" placeholder="Nama belakang Anda">
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <label class="text-white" for="email">Alamat Email</label>
                        <input class="rounded-lg py-3 w-full" type="text" name="email" id="email" placeholder="Alamat email Anda">
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <label class="text-white" for="subjek">Subjek</label>
                        <input class="rounded-lg py-3 w-full" type="text" name="subject" id="subjek" placeholder="Subjek email Anda">
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <label class="text-white" for="pesan">Pesan</label>
                        <textarea class="rounded-lg py-3 w-full h-48 resize-none" name="mail" id="pesan" placeholder="Pesan Anda"></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="hover:bg-[linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1))] text-xs md:text-sm bg-gold text-white px-12 py-4 rounded-lg">Kirim</button>
                    </div>
                </form>

                <div class="flex justify-between mt-16">
                    <div class="flex gap-8 text-white">
                        <a class="transition hover:text-gold flex items-center gap-2" href="https://www.instagram.com/rcp.law/" target="_blank" rel="noreferrer noopener">
                            <svg class="size-4 md:size-5" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.2513 1.74603C9.69841 1.19039 9.03991 0.749834 8.31415 0.450065C7.5884 0.150296 6.80992 -0.00268806 6.02412 3.57417e-05C2.73166 3.57417e-05 0.0482413 2.67003 0.0482413 5.94602C0.0482413 6.99601 0.325628 8.01601 0.844221 8.91601L0 12L3.16583 11.172C4.0402 11.646 5.02312 11.898 6.02412 11.898C9.31658 11.898 12 9.22801 12 5.95202C12 4.36202 11.3789 2.86803 10.2513 1.74603ZM6.02412 10.89C5.13166 10.89 4.25729 10.65 3.49146 10.2L3.31055 10.092L1.42915 10.584L1.92965 8.76001L1.80905 8.57401C1.31321 7.78619 1.04993 6.87556 1.04925 5.94602C1.04925 3.22203 3.2804 1.00203 6.01809 1.00203C7.34472 1.00203 8.59296 1.51803 9.52764 2.45403C9.99044 2.91241 10.3572 3.45762 10.6067 4.05808C10.8561 4.65853 10.9833 5.30229 10.9809 5.95202C10.993 8.67601 8.76181 10.89 6.02412 10.89ZM8.74975 7.19401C8.59899 7.12201 7.86332 6.76202 7.73065 6.70802C7.59196 6.66002 7.49548 6.63602 7.39296 6.78002C7.29045 6.93002 7.00703 7.26601 6.92261 7.36201C6.83819 7.46401 6.74774 7.47601 6.59698 7.39801C6.44623 7.32601 5.96382 7.16401 5.39698 6.66002C4.95075 6.26402 4.65528 5.77802 4.56482 5.62802C4.4804 5.47802 4.55276 5.40002 4.63116 5.32202C4.69749 5.25602 4.78191 5.14802 4.85427 5.06402C4.92663 4.98002 4.95678 4.91402 5.00502 4.81802C5.05327 4.71602 5.02915 4.63202 4.99296 4.56002C4.95678 4.48802 4.65528 3.75602 4.53467 3.45603C4.41407 3.16803 4.28744 3.20403 4.19698 3.19803H3.90754C3.80502 3.19803 3.64824 3.23403 3.50955 3.38403C3.37688 3.53403 2.99095 3.89402 2.99095 4.62602C2.99095 5.35802 3.52764 6.06602 3.6 6.16202C3.67236 6.26402 4.65528 7.76401 6.15075 8.40601C6.50653 8.56201 6.78392 8.65201 7.001 8.71801C7.35678 8.83201 7.68241 8.81401 7.94171 8.77801C8.23115 8.73601 8.82814 8.41801 8.94874 8.07001C9.07537 7.72201 9.07538 7.42801 9.03316 7.36201C8.99095 7.29601 8.9005 7.26601 8.74975 7.19401Z" />
                            </svg>

                            <p>(021) 5222289 </p>
                        </a>

                        <a class="transition hover:text-gold flex items-center gap-2" href="https://www.instagram.com/rcp.law/" target="_blank" rel="noreferrer noopener">
                            <svg class="size-4 md:size-5" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.9985 2.92142C4.29485 2.92142 2.91992 4.29635 2.91992 6C2.91992 7.70365 4.29485 9.07858 5.9985 9.07858C7.70215 9.07858 9.07708 7.70365 9.07708 6C9.07708 4.29635 7.70215 2.92142 5.9985 2.92142ZM5.9985 8.00085C4.89675 8.00085 3.99765 7.10174 3.99765 6C3.99765 4.89826 4.89675 3.99915 5.9985 3.99915C7.10024 3.99915 7.99935 4.89826 7.99935 6C7.99935 7.10174 7.10024 8.00085 5.9985 8.00085ZM9.20317 2.07785C8.8054 2.07785 8.48418 2.39907 8.48418 2.79684C8.48418 3.1946 8.8054 3.51582 9.20317 3.51582C9.60093 3.51582 9.92215 3.19611 9.92215 2.79684C9.92227 2.70238 9.90375 2.60884 9.86766 2.52155C9.83157 2.43427 9.77862 2.35496 9.71183 2.28817C9.64504 2.22138 9.56573 2.16843 9.47845 2.13234C9.39116 2.09625 9.29762 2.07773 9.20317 2.07785ZM11.9996 6C11.9996 5.17144 12.0071 4.35039 11.9605 3.52333C11.914 2.56268 11.6948 1.7101 10.9924 1.00763C10.2884 0.303651 9.43732 0.0860042 8.47667 0.0394728C7.64811 -0.00705863 6.82706 0.000446468 6 0.000446468C5.17144 0.000446468 4.35039 -0.00705863 3.52333 0.0394728C2.56268 0.0860042 1.7101 0.305152 1.00763 1.00763C0.303651 1.7116 0.0860043 2.56268 0.0394728 3.52333C-0.00705863 4.35189 0.000446468 5.17294 0.000446468 6C0.000446468 6.82706 -0.00705863 7.64961 0.0394728 8.47667C0.0860043 9.43732 0.305152 10.2899 1.00763 10.9924C1.7116 11.6963 2.56268 11.914 3.52333 11.9605C4.35189 12.0071 5.17294 11.9996 6 11.9996C6.82856 11.9996 7.64962 12.0071 8.47667 11.9605C9.43732 11.914 10.2899 11.6948 10.9924 10.9924C11.6964 10.2884 11.914 9.43732 11.9605 8.47667C12.0086 7.64961 11.9996 6.82856 11.9996 6ZM10.6787 9.53939C10.5691 9.81258 10.437 10.0167 10.2254 10.2269C10.0137 10.4385 9.81108 10.5706 9.53789 10.6802C8.74836 10.9939 6.87359 10.9233 5.9985 10.9233C5.12341 10.9233 3.24714 10.9939 2.45761 10.6817C2.18442 10.5721 1.98028 10.44 1.77014 10.2284C1.5585 10.0167 1.42641 9.81408 1.31684 9.54089C1.00463 8.74986 1.07517 6.87509 1.07517 6C1.07517 5.12491 1.00463 3.24864 1.31684 2.45911C1.42641 2.18592 1.5585 1.98179 1.77014 1.77164C1.98179 1.5615 2.18442 1.42791 2.45761 1.31834C3.24714 1.00613 5.12341 1.07667 5.9985 1.07667C6.87359 1.07667 8.74986 1.00613 9.53939 1.31834C9.81258 1.42791 10.0167 1.56 10.2269 1.77164C10.4385 1.98329 10.5706 2.18592 10.6802 2.45911C10.9924 3.24864 10.9218 5.12491 10.9218 6C10.9218 6.87509 10.9924 8.74986 10.6787 9.53939Z" />
                            </svg>

                            <p>rcp.law</p>
                        </a>
                    </div>

                    <img class="size-8" src="{{asset('assets/logo/logo-rcp.png')}}" alt="logo">
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br>
</div>

<script src="{{asset('js/beranda.js')}}"></script>
@endsection
