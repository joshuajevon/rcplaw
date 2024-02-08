@extends('template.admin-template')

@section('head')
    {{-- css --}}

    <!-- javascript -->
@endsection

@section('body')
    <div class="flex">
        <x-admin-navigation-bar page="dashboard" />

        <div
            class="flex flex-col justify-start items-start gap-8 sm:gap-12 lg:gap-16 pl-20 w-full c-container py-4 sm:py-6 md:py-8 lg:py-10 xl:py-12 2xl:py-14 ml-[72px] lg:ml-[18rem] mt-16 ">

            <h1 class="text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-medium font-outfit">Dashboard</h1>

            <div class="grid grid-cols-3 gap-16">
                <a href="{{ route('viewsNews') }}"
                    class="group hover:bg-gold flex flex-col bg-white p-6 gap-6 shadow-[0px_4px_4px_rgba(0,0,0,0.25)] hover:text-white">
                    <p class="text-2xl mr-8 font-outfit">Artikel</p>
                    <div class="flex justify-around items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                          </svg>
                        <p class="font-bold text-3xl">{{ $news_count }}</p>
                    </div>
                </a>


            </div>
        </div>
    </div>


@endsection
