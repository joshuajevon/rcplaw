<nav class="flex flex-col fixed w-full bg-white">
    {{-- HEADER --}}
    <div class="border-b border-b-gold flex justify-between items-center py-2 px-32 text-sm">
        <div class="font-semibold">
            <p class="font-cormorant">Wisma Kodel Lt. 9 Jl. H.R. Rasuna Said Kav. B-4 Setiabudi, Jakarta Selatan</p>
        </div>

        <div class="flex gap-8 font-semibold items-center">
            <p class="font-cormorant">Sen - Jum</p>

            <p class="font-cormorant">08.00 - 17.00 WIB</p>

            <a href="">
                <img class="size-4" src="{{asset('assets/logo/socials/whatsapp.svg')}}" alt="whatsapp">
            </a>

            <a href="">
                <img class="size-4" src="{{asset('assets/logo/socials/instagram.svg')}}" alt="instagram">
            </a>
        </div>

    </div>

    {{-- NAVIGATION --}}
    <div class="px-32 py-2 flex justify-between">
        <div>
            <a href="/">
                <img src="{{asset('assets/logo/logo-rcp-text.png')}}" alt="Logo">
            </a>
        </div>

        <div class="flex items-center font-medium gap-12">
            <a href="">Beranda</a>

            <a href="#tentang-kami">Tentang Kami</a>

            <a href="">Layanan Kami</a>

            <a href="">Artikel</a>

            <a href="">Kontak</a>
        </div>
    </div>
</nav>
