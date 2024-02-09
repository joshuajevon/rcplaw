@extends('template.admin-template')

@section('head')
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}?t={{ env('VERSION_TIME') }}">

    <!-- javascript -->
@endsection

@section('body')
    <div class="flex">
        <x-admin-navigation-bar page="manage-news" />

        <div
            class="flex flex-col justify-center items-start gap-8 w-full px-20 py-4 sm:py-6 md:py-8 lg:py-10 xl:py-12 2xl:py-14 ml-[72px] lg:ml-[18rem] mt-16">

            <h1 class="text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-outfit font-medium">Artikel</h1>

            <a class=" flex justify-center items-center gap-1 pr-8" href="{{route('createNews')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" fill="none" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>
                Tambah Artikel
            </a>


            {{-- Search Bar, Sort, Refresh --}}
            <form class="w-full flex flex-row  items-center gap-8">
                {{-- Search Bar --}}
                <div class="self-center w-full">
                    <div class="w-full gap-2 text-base">
                        <div class="py-1 sm:py-2 lg:py-3 px-6 sm:px-7 lg:px-8 flex rounded-full bg-gold text-white">
                            <input autocomplete="false" type="text"
                                class="w-full bg-transparent border-none placeholder:text-white px-0 autofill:shadow-[inset_0_0_0px_1000px_rgb(197,175,102)]"
                                id="search" name="search" placeholder="Pencarian..."
                                >
                            <button type="submit" class="flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                </form>

                <h1 class="font-outfit text-red-500">Tidak ada artikel, silahkan menambahkan artikel.</h1>

        </div>
    </div>

    <script src="{{ asset('js/delete-modal.js') }}"></script>

@endsection
