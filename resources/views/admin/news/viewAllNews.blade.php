@extends('template.admin-template')

@section('head')
    {{-- css --}}

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
            {{-- <form action="" method="GET"
                class="w-full flex flex-col justify-center items-start gap-8"> --}}
                {{-- Search Bar --}}
                {{-- <div class="self-center w-full">
                    <div class="w-full gap-2 text-base">
                        <div class="py-1 sm:py-2 lg:py-3 px-6 sm:px-7 lg:px-8 flex rounded-full bg-black text-cWhite">
                            <input autocomplete="false" type="text"
                                class="w-full bg-transparent border-none placeholder:text-cWhite px-0 autofill:shadow-[inset_0_0_0px_1000px_rgb(197,175,102)]"
                                id="search" name="search" placeholder="Pencarian..." value="">
                            <button type="submit" class="flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div> --}}


                {{-- Sort and refresh --}}
                {{-- <div class="flex w-full gap-2"> --}}
                    {{-- Sorting --}}
                    {{-- <div class="flex justify-start items-center gap-2">
                        <label class="hidden sm:block text-lg font-bold" for="sortOption">Urutkan:</label>

                        <select class="cursor-pointer rounded-md" name="filter" id="filter"
                            onchange="this.form.submit()">
                            <option value="" selected disabled>-- Pilih Filter --</option>
                            <option value="latest" {{ Request::query('filter') === 'latest' ? 'selected' : '' }}>
                                Terbaru</option>
                            <option value="oldest" {{ Request::query('filter') === 'oldest' ? 'selected' : '' }}>
                                Terlama</option>
                            <option value="updated" {{ Request::query('filter') === 'updated' ? 'selected' : '' }}>
                                Baru Update</option>
                        </select>
                    </div> --}}

                    {{-- Refresh --}}
                    {{-- <a href=""
                        class="flex justify-center items-center p-2 bg-cGold text-cWhite rounded-md transition hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </a>
                </div>
            </form> --}}

            <div class="grid grid-cols-2 gap-4">
                @foreach ($newss as $news)
                <div class="flex group transition duration-300 ease-in-out transform hover:shadow-lg">
                    <img src="{{ asset('/storage/news/' . $news->image) }}" alt="" class="w-56 h-56 object-cover">

                    <a href="{{ route('viewNewsById', $news->id) }}">
                        <div class="flex flex-col justify-around items-stretch pl-5 bg-[#3A3A38] text-white bg-opacity-80 group-hover:bg-opacity-100">
                            <div class="flex flex-row justify-around items-center">
                                <h1 class="text-xl font-cormorant font-semibold">{{ \Illuminate\Support\Str::limit($news->title, 20) }}</h1>
                                <div class="flex flex-row gap-3">
                                    <a href="{{ route('editNews', $news->id) }}">
                                        <button type="button" class="focus:outline-none">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    <button onclick="deleteNews({{$news->id}})" type="button" class="focus:outline-none">
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
                    </a>
                </div>

                @endforeach
            </div>


            {{-- Bottom Pagination --}}
            <div id="top-pagination" class="pagination">

            </div>
        </div>

        {{-- Modal --}}
        <div id="modal" class="flex items-center justify-center w-screen h-screen bg-[#67676780] z-10 fixed hidden">
            <div class="flex flex-col items-center bg-cWhite rounded-xl px-8 py-16">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-20 mb-4" src="{{ asset('assets/admin/trash.svg') }}" alt="">
                    <h2 class="text-2xl font-semibold text-cBlack">
                        {{ __('Are you sure want to delete this news?') }}
                    </h2>
                    <p class="mt-1 text-sm sm:text-base text-gray-500">
                        {{ __('Once this news is deleted, all related resources and data will be permanently deleted.') }}
                    </p>
                    <div class="mt-6 flex justify-end">
                        <x-secondary-button onclick="closeModal()">
                            {{ __('Batal') }}
                        </x-secondary-button>

                        <form action="" id="confirmDelete" method="POST">
                            @csrf
                            @method('delete')
                            <x-danger-button class="ml-3">
                                {{ __('Hapus Asset') }}
                            </x-danger-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/delete-modal.js') }}"></script>
@endsection
