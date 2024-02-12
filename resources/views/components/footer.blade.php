<footer id="footer" class="custom-container bg-customDarkGray text-white pb-4 pt-8 md:pt-12 xl:pt-16 flex flex-col items-center justify-center gap-12 md:gap-14 xl:gap-16">
    <div class="flex flex-col items-center justify-center text-center">
        <img class="size-8 md:size-12 xl:size-16 mb-2" src="{{asset('assets/logo/logo-rcp.png')}}" alt="logo">
        <h1 class="font-bold font-cormorant text-xl md:text-2xl xl:text-3xl">Resandhi Cumbhadrika Partnership</h1>
        <h2 class="font-medium font-cormorant text-base md:text-lg xl:text-xl">Attorneys and Counsellors at Law</h2>
    </div>

    <div class="paragraph flex justify-center items-center gap-y-4 gap-x-8 md:gap-x-12 xl:gap-x-16 flex-wrap">
        <a class="hover:text-gold transition" href="{{route('beranda-beranda')}}">Beranda</a>

        <span id="tentang-kami-tim-kami-footer" class="relative">
            <span class="flex items-center gap-1 cursor-pointer transition hover:text-gold">
                Tentang Kami

                <svg id="dropdown-arrow-footer" xmlns="http://www.w3.org/2000/svg" class="size-5 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </span>

            <div id="dropdown-tentang-kami-tim-kami-footer" class="hidden absolute top-[100%] mt-1 text-white bg-customDarkGray w-full">
                <div class="flex flex-col gap-2 p-2 w-full shadow-xl">
                    <a id="footer-tentang-kami" class="flex-none transition hover:text-gold" href="{{ route("beranda-tentang-kami") }}">Tentang Kami</a>

                    <a id="footer-tim-kami" class="flex-none transition hover:text-gold" href="{{route("beranda-tim-kami")}}">Tim Kami</a>
                </div>
            </div>
        </span>

        <a class="hover:text-gold transition" href="{{route('beranda-layanan-kami')}}">Layanan Kami</a>

        <a class="hover:text-gold transition" href="{{route('beranda-artikel')}}">Artikel</a>

        <a class="hover:text-gold transition" href="{{route('beranda-kontak')}}">Kontak</a>
    </div>

    <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-8 xl:gap-16 text-xs md:text-sm text-white">
        <a class="transition hover:text-gold flex items-center gap-2" href="tel:021-5222-2289" target="_blank" rel="noreferrer noopener">
            <svg class="md:size-4 xl:size-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
            </svg>

            <p>+62 21-5222-2289</p>
        </a>

        <a class="transition hover:text-gold flex items-center gap-2" href="https://www.google.com/maps?ll=-6.211448,106.829908&z=18&t=m&hl=en&gl=ID&mapclient=embed&q=Wisma+Kodel+Jl.+H.+R.+Rasuna+Said+RT.10/RW.7,+Kuningan,+Setia+Budi+Kecamatan+Setiabudi,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta+12920" target="_blank" rel="noreferrer noopener">
            <svg class="size-4 md:size-5" viewBox="0 0 12 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 9.5C7.6545 9.5 9 8.1545 9 6.5C9 4.8455 7.6545 3.5 6 3.5C4.3455 3.5 3 4.8455 3 6.5C3 8.1545 4.3455 9.5 6 9.5ZM6 5C6.82725 5 7.5 5.67275 7.5 6.5C7.5 7.32725 6.82725 8 6 8C5.17275 8 4.5 7.32725 4.5 6.5C4.5 5.67275 5.17275 5 6 5Z" />
                <path d="M5.56507 15.3606C5.692 15.4512 5.84408 15.5 6.00007 15.5C6.15605 15.5 6.30813 15.4512 6.43507 15.3606C6.66307 15.1993 12.0218 11.3301 12.0001 6.50009C12.0001 3.19184 9.30831 0.500092 6.00007 0.500092C2.69182 0.500092 6.60283e-05 3.19184 6.60283e-05 6.49634C-0.021684 11.3301 5.33707 15.1993 5.56507 15.3606ZM6.00007 2.00009C8.48182 2.00009 10.5001 4.01834 10.5001 6.50384C10.5158 9.83234 7.20907 12.8211 6.00007 13.8013C4.79182 12.8203 1.48432 9.83084 1.50007 6.50009C1.50007 4.01834 3.51832 2.00009 6.00007 2.00009Z" />
            </svg>

            <p>Wisma Kodel Lt. 9 Jl. H.R. Rasuna Said Kav. B-4 Setiabudi, Jakarta Selatan 12910</p>
        </a>

        <a class="transition hover:text-gold flex items-center gap-2" href="https://www.instagram.com/rcp.law/" target="_blank" rel="noreferrer noopener">
            <svg class="size-4 md:size-5" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.9985 2.92142C4.29485 2.92142 2.91992 4.29635 2.91992 6C2.91992 7.70365 4.29485 9.07858 5.9985 9.07858C7.70215 9.07858 9.07708 7.70365 9.07708 6C9.07708 4.29635 7.70215 2.92142 5.9985 2.92142ZM5.9985 8.00085C4.89675 8.00085 3.99765 7.10174 3.99765 6C3.99765 4.89826 4.89675 3.99915 5.9985 3.99915C7.10024 3.99915 7.99935 4.89826 7.99935 6C7.99935 7.10174 7.10024 8.00085 5.9985 8.00085ZM9.20317 2.07785C8.8054 2.07785 8.48418 2.39907 8.48418 2.79684C8.48418 3.1946 8.8054 3.51582 9.20317 3.51582C9.60093 3.51582 9.92215 3.19611 9.92215 2.79684C9.92227 2.70238 9.90375 2.60884 9.86766 2.52155C9.83157 2.43427 9.77862 2.35496 9.71183 2.28817C9.64504 2.22138 9.56573 2.16843 9.47845 2.13234C9.39116 2.09625 9.29762 2.07773 9.20317 2.07785ZM11.9996 6C11.9996 5.17144 12.0071 4.35039 11.9605 3.52333C11.914 2.56268 11.6948 1.7101 10.9924 1.00763C10.2884 0.303651 9.43732 0.0860042 8.47667 0.0394728C7.64811 -0.00705863 6.82706 0.000446468 6 0.000446468C5.17144 0.000446468 4.35039 -0.00705863 3.52333 0.0394728C2.56268 0.0860042 1.7101 0.305152 1.00763 1.00763C0.303651 1.7116 0.0860043 2.56268 0.0394728 3.52333C-0.00705863 4.35189 0.000446468 5.17294 0.000446468 6C0.000446468 6.82706 -0.00705863 7.64961 0.0394728 8.47667C0.0860043 9.43732 0.305152 10.2899 1.00763 10.9924C1.7116 11.6963 2.56268 11.914 3.52333 11.9605C4.35189 12.0071 5.17294 11.9996 6 11.9996C6.82856 11.9996 7.64962 12.0071 8.47667 11.9605C9.43732 11.914 10.2899 11.6948 10.9924 10.9924C11.6964 10.2884 11.914 9.43732 11.9605 8.47667C12.0086 7.64961 11.9996 6.82856 11.9996 6ZM10.6787 9.53939C10.5691 9.81258 10.437 10.0167 10.2254 10.2269C10.0137 10.4385 9.81108 10.5706 9.53789 10.6802C8.74836 10.9939 6.87359 10.9233 5.9985 10.9233C5.12341 10.9233 3.24714 10.9939 2.45761 10.6817C2.18442 10.5721 1.98028 10.44 1.77014 10.2284C1.5585 10.0167 1.42641 9.81408 1.31684 9.54089C1.00463 8.74986 1.07517 6.87509 1.07517 6C1.07517 5.12491 1.00463 3.24864 1.31684 2.45911C1.42641 2.18592 1.5585 1.98179 1.77014 1.77164C1.98179 1.5615 2.18442 1.42791 2.45761 1.31834C3.24714 1.00613 5.12341 1.07667 5.9985 1.07667C6.87359 1.07667 8.74986 1.00613 9.53939 1.31834C9.81258 1.42791 10.0167 1.56 10.2269 1.77164C10.4385 1.98329 10.5706 2.18592 10.6802 2.45911C10.9924 3.24864 10.9218 5.12491 10.9218 6C10.9218 6.87509 10.9924 8.74986 10.6787 9.53939Z" />
            </svg>

            <p>rcp.law</p>
        </a>
    </div>

    <p class="text-xs">© RCP Law {{ date('Y') }}</p>
</footer>
<a href="https://webcreativs.com/" target="_blank" rel="noreferrer noopener">
    <div class="custom-container bg-gold hover:bg-[linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1))] py-2">
        <p class="paragraph text-center font-medium text-white">
            Dibuat oleh <span class="text-[#344F34] font-bold underline">WebCreativs</span>
        </p>
    </div>
</a>
