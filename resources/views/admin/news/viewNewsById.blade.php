@extends('template.admin-template')

@section('head')
    {{-- css --}}

    <!-- javascript -->
@endsection

@section('body')
    <div class="flex">
        <x-admin-navigation-bar page="manage-news" />

        <div
            class="flex flex-col justify-center items-start gap-8 pl-20 w-full c-container py-4 sm:py-6 md:py-8 lg:py-10 xl:py-12 2xl:py-14 ml-[72px] lg:ml-[18rem] mt-16">

            <a href="{{ route('viewsNews') }}" class="gold-btn flex justify-center items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>

                Kembali</a>

            <h1 class="text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-outfit font-medium">Artikel #{{ $news->id }}</h1>

            <form
                class="w-full  p-8  flex flex-col justify-center items-start gap-6"
                action="" >
                <div class="w-full">
                    <img src="{{ asset('/storage/news/'.$news->image) }}" style="width: 50rem" alt="">
                </div>

                <div class="w-full">
                    <h1 class="font-cormorant font-bold text-2xl">{{ $news->title }}</h1>
                    <br>
                    <p class="font-cormorant font-bold text-lg">Ditulis oleh : {{ $news->author }} | {{ date('d F Y', strtotime($news->date)) }}</p>
                    <br>
                    <p class="font-cormorant font-medium text-lg mr-24">{{ $news->description }}</p>
                </div>
            </form>
        </div>
    </div>
@endsection

