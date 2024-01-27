@extends('template.admin-template')

@section('head')
    {{-- css --}}

    <!-- javascript -->
@endsection

@section('body')
    <div class="flex">
        <x-admin-navigation-bar page="manage-sellers" />

        <div
            class="flex flex-col justify-center items-start gap-8 w-full c-container py-4 sm:py-6 md:py-8 lg:py-10 xl:py-12 2xl:py-14 ml-[72px] lg:ml-[18rem] mt-16">

            <a href="{{ route('viewsNews') }}" class="gold-btn flex justify-center items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>

                Back</a>

            <h1 class="text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold text-cGold">Add News</h1>

            <form
                class="w-full bg-cWhite p-8 shadow-[0px_4.7451px_41.5196px_rgba(41,82,144,0.25)] flex flex-col justify-center items-start gap-6"
                action="{{ route('storeNews') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w-full">
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input type="text" id="title" class="mt-1 w-full" placeholder="Masukkan nama seller" name="title"
                        value="{{ old('title') }}" />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <div class="w-full">
                    <x-input-label for="image" :value="__('Image')" />
                    <x-text-input type="file" id="image" class="mt-1 w-full" placeholder="Masukkan alamat seller"
                        name="image" value="{{ old('image') }}" />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <div class="w-full">
                    <x-input-label for="description" :value="__('Description')" />
                    <x-text-area type="text" id="description" class="mt-1 w-full" placeholder="Masukkan alamat seller"
                        name="description" value="{{ old('description') }}" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="w-full">
                    <x-input-label for="author" :value="__('Author')" />
                    <x-text-input type="text" id="author" class="mt-1 w-full" placeholder="Masukkan nomor handphone seller"
                        name="author" value="{{ old('author') }}" />
                    <x-input-error :messages="$errors->get('author')" class="mt-2" />
                </div>

                <div class="w-full">
                    <x-input-label for="date" :value="__('Date')" />
                    <x-text-input type="date" id="date" class="mt-1 w-full" placeholder="Masukkan nomor handphone seller"
                        name="date" value="{{ old('date') }}" />
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>

                <button type="submit" class="gold-btn px-12">Submit</button>
            </form>
        </div>
    </div>
@endsection


{{-- @foreach ($newss as $news)
        {{$news->title}}
        <img src="{{ asset('/storage/image/'.$news->image) }}" alt="">
        {{$news->description}}
        {{$news->author}}
        {{$news->date}}
    @endforeach --}}
