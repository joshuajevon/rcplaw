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
                                id="search" name="search" placeholder="Pencarian..." value="{{ $result }}"
                                onfocus="this.style.outline='none';" onblur="this.style.outline='';">
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

                @if($newss->count() == 0)
                <h1 class="font-outfit">Maaf, hasil pencarian untuk artikel dengan kata kunci "{{ $result }}" belum tersedia. <a href="{{ route('viewsNews') }}" class="underline text-blue-500">Klik di sini</a> untuk memuat ulang.</h1>
                @else
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($newss as $news)
                        <div class="flex group transition duration-300 ease-in-out transform hover:shadow-lg" onclick="window.location.href = '{{ route('viewNewsById', $news->id) }}';" style="cursor: pointer;">
                            <img src="{{ asset('/storage/news/' . $news->image) }}" alt="" class="w-56 h-56 object-cover">
                            <div class="flex flex-col justify-around items-stretch pl-5 bg-[#3A3A38] text-white bg-opacity-80 group-hover:bg-opacity-100" >
                                <div class="flex flex-row justify-around items-center">
                                    <h1 class="text-xl font-cormorant font-semibold">{{ \Illuminate\Support\Str::limit($news->title, 20) }}</h1>
                                    <div class="flex flex-row gap-3">
                                        <a href="{{ route('editNews', $news->id) }}">
                                            <button type="button" class="focus:outline-none z-100">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>
                                        {{-- <button onclick="event.stopPropagation(); deleteNews({{$news->id}})" type="button" class="focus:outline-none z-100">
                                            <i class="fas fa-trash-alt"></i>
                                        </button> --}}
                                        <button onclick="event.stopPropagation(); openModal('{{ $news->title }}', {{ $news->id }})" type="button" class="focus:outline-none z-100">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-sm">{{ \Illuminate\Support\Str::limit($news->description, 100) }}</p>
                                <div class="flex flex-row items-center justify-around">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('assets/logo/logo-rcp.png') }}" class="w-6 h-6" alt="RCP Logo">
                                        <p class="text-lg font-cormorant">RCP</p>
                                    </div>
                                    <p class="text-lg font-cormorant">{{ date('d F Y', strtotime($news->date)) }} </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endif



            {{-- Bottom Pagination --}}
            <div id="top-pagination" class="pagination">
                <div id="bottom-pagination" class="pagination">
                    {{ $newss->links() }}
                </div>
            </div>
        </div>

        {{-- Modal --}}
        <div id="modal" class="flex items-center justify-center w-screen h-screen bg-black bg-opacity-70 z-10 fixed hidden">
            <div class="flex flex-col items-center bg-[#D9D9D9] rounded-xl px-8 py-16">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-20 mb-4" src="{{ asset('assets/logo/logo-rcp.png') }}" alt="">
                    <h2 class="text-2xl font-semibold text-black text-center">
                        Apakah anda yakin ingin menghapus artikel
                    </h2>
                    <h2 id="modal-title" class="text-2xl font-semibold text-black text-center"></h2>
                    <div class="mt-6 flex justify-end">
                        <x-secondary-button onclick="closeModal()">
                            {{ __('Tidak') }}
                        </x-secondary-button>

                        <form id="confirmDelete" method="POST">
                            @csrf
                            @method('delete')
                            <x-danger-button class="ml-3">
                                {{ __('Iya') }}
                            </x-danger-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/delete-modal.js') }}"></script>

@endsection
