<nav class="flex flex-col fixed w-full bg-white z-50">
    {{-- HEADER --}}
    <div class="custom-container border-b border-b-gold flex flex-col xl:flex-row justify-between items-center py-2 text-sm gap-2">
        <div class="font-semibold">
            <p class="paragraph font-cormorant text-center">Wisma Kodel Lt. 9 Jl. H.R. Rasuna Said Kav. B-4 Setiabudi, Jakarta Selatan</p>
        </div>

        <div class="flex gap-4 md:gap-6 xl:gap-8 font-semibold items-center">
            <p class="paragraph font-cormorant">Sen - Jum</p>

            <p class="paragraph font-cormorant">08.00 - 17.00 WIB</p>

            <a href="https://www.instagram.com/rcp.law/" target="_blank" rel="noreferrer noopener">
                <img class="size-3 md:size-3.5 xl:size-4" src="{{asset('assets/logo/socials/whatsapp.svg')}}" alt="whatsapp">
            </a>

            <a href="https://www.instagram.com/rcp.law/" target="_blank" rel="noreferrer noopener">
                <img class="size-3 md:size-3.5 xl:size-4" src="{{asset('assets/logo/socials/instagram.svg')}}" alt="instagram">
            </a>
        </div>

    </div>

    {{-- NAVIGATION --}}
    <div class="custom-container py-2 flex justify-between items-center">
        <div>
            <a href="{{route('beranda')}}">
                <img class="w-24 md:w-30 xl:w-36" src="{{asset('assets/logo/logo-rcp-text.png')}}" alt="Logo">
            </a>
        </div>

        <div class="paragraph hidden lg:flex items-center font-medium gap-12">
            <a id="nav-link-beranda" class="nav-link transition" href="{{route('beranda-beranda')}}">Beranda</a>

            <span id="nav-link-tentang-kami-tim-kami" class="relative">
                <span id="tentang-kami-tim-kami" class="nav-link flex items-center gap-1 cursor-pointer transition {{$page === 'tim-kami' ? 'text-gold' : ''}}">
                    Tentang Kami

                    <svg id="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" class="size-5 transition" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </span>

                <div id="dropdown-tentang-kami-tim-kami" class="hidden absolute top-[100%] mt-1 text-customDarkGray w-full">
                    <div class="flex flex-col gap-2 p-2 bg-white w-full shadow-xl">
                        <a id="nav-link-tentang-kami" class="nav-link flex-none transition" href="{{ route("beranda-tentang-kami") }}">Tentang Kami</a>

                        <a id="nav-link-tim-kami" class="nav-link flex-none transition {{$page === 'tim-kami' ? 'text-gold' : ''}}" href="{{ $page === 'beranda' ? route("beranda-tim-kami") : route("tim-kami") }}">Tim Kami</a>
                    </div>
                </div>
            </span>

            <a id="nav-link-layanan-kami" class="nav-link transition {{$page === 'layanan-kami' ? 'text-gold' : ''}}" href="{{$page === 'beranda' ? '#layanan-kami' : '/layanan-kami'}}">Layanan Kami</a>

            <a id="nav-link-artikel" class="nav-link transition {{$page === 'artikel' ? 'text-gold' : ''}}" href="{{route('beranda-artikel')}}">Artikel</a>

            <a id="nav-link-kontak" class="nav-link transition {{$page === 'kontak' ? 'text-gold' : ''}}" href="{{route('beranda-kontak')}}">Kontak</a>
        </div>

        {{-- MOBILE --}}
        <div id="nav-mobile-toggle" class="size-6 lg:hidden flex flex-col items-center justify-center gap-1.5">
            <span id="toggle-top" class="transition rounded h-0.5 w-full bg-customDarkGray"></span>
            <span id="toggle-middle" class="transition rounded h-0.5 w-full bg-customDarkGray"></span>
            <span id="toggle-bottom" class="transition rounded h-0.5 w-full bg-customDarkGray"></span>
        </div>
    </div>

    <div id="nav-mobile-navlinks" class="hidden">
        <div class="paragraph flex flex-col items-center font-medium pb-1 *:w-full *:text-center">
            <a id="nav-link-beranda-mobile" class="nav-link transition py-3 md:py-3.5 xl:py-4" href="{{route('beranda-beranda')}}">Beranda</a>

            <span id="nav-link-tentang-kami-tim-kami-mobile" class="nav-link py-3 md:py-3.5 xl:py-4 flex justify-center items-center gap-1 cursor-pointer">
                Tentang Kami

                <svg id="dropdown-arrow-mobile" xmlns="http://www.w3.org/2000/svg" class="size-4 lg:size-5 transition" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </span>

            <div id="dropdown-tentang-kami-tim-kami-mobile" class="hidden w-full">
                <span class="flex flex-col items-center">
                    <a id="nav-link-tentang-kami-mobile" class="nav-link flex-none transition py-3 md:py-3.5 xl:py-4" href="{{ route("beranda-tentang-kami") }}">Tentang Kami</a>

                    <a id="nav-link-tim-kami-mobile" class="nav-link flex-none transition py-3 md:py-3.5 xl:py-4 {{$page === 'tim-kami' ? 'text-gold' : ''}}" href="{{ $page === 'beranda' ? route("beranda-tim-kami") : route("tim-kami") }}">Tim Kami</a>
                </span>
            </div>

            <a id="nav-link-layanan-kami-mobile" class="nav-link transition py-3 md:py-3.5 xl:py-4 {{$page === 'layanan-kami' ? 'text-gold' : ''}}" href="{{$page === 'beranda' ? '#layanan-kami' : '/layanan-kami'}}">Layanan Kami</a>

            <a id="nav-link-artikel-mobile" class="nav-link transition py-3 md:py-3.5 xl:py-4 {{$page === 'artikel' ? 'text-gold' : ''}}" href="{{route('beranda-artikel')}}">Artikel</a>

            <a id="nav-link-kontak-mobile" class="nav-link transition py-3 md:py-3.5 xl:py-4 {{$page === 'kontak' ? 'text-gold' : ''}}" href="{{route('beranda-kontak')}}">Kontak</a>
        </div>
    </div>
</nav>
