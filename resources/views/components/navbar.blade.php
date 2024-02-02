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
            <a href="/">
                <img class="w-24 md:w-30 xl:w-36" src="{{asset('assets/logo/logo-rcp-text.png')}}" alt="Logo">
            </a>
        </div>

        <div class="paragraph hidden lg:flex items-center font-medium gap-12">
            <a class="{{$page === 'beranda' ? 'text-gold' : ''}}" href="{{route('beranda')}}">Beranda</a>

            <a href="#tentang-kami">Tentang Kami</a>

            <a class="{{$page === 'layanan-kami' ? 'text-gold' : ''}}" href="{{$page === 'beranda' ? '#layanan-kami' : '/'}}">Layanan Kami</a>

            <a href="">Artikel</a>

            <a href="">Kontak</a>
        </div>

        {{-- MOBILE --}}
        <div id="nav-mobile-toggle" class="size-6 lg:hidden flex flex-col items-center justify-center gap-1.5">
            <span id="toggle-top" class="transition rounded h-0.5 w-full bg-customDarkGray"></span>
            <span id="toggle-middle" class="transition rounded h-0.5 w-full bg-customDarkGray"></span>
            <span id="toggle-bottom" class="transition rounded h-0.5 w-full bg-customDarkGray"></span>
        </div>
    </div>

    <div id="nav-mobile-navlinks" class="hidden">
        <div class="paragraph flex flex-col items-center font-medium">
            <a class="{{$page === 'beranda' ? 'text-gold' : ''}} py-4" href="{{route('beranda')}}">Beranda</a>

            <a class="py-4" href="#tentang-kami">Tentang Kami</a>

            <a class="{{$page === 'layanan-kami' ? 'text-gold' : ''}} py-4" href="{{$page === 'beranda' ? '#layanan-kami' : '/'}}">Layanan Kami</a>

            <a class="py-4" href="">Artikel</a>

            <a class="py-4" href="">Kontak</a>
        </div>
    </div>
</nav>
