@extends('template.template')

@section('head')

@endsection

@section('body')
<x-navbar :page="'artikel'" />

<div class="bg-[#EDEDED] font-outfit *:text-customDarkGray pt-24">
    <section id="artikel" class="custom-container pt-12 md:pt-16 xl:pt-20 pb-32 md:pb-48 xl:pb-64 flex flex-col items-center">
        <div class="flex flex-col items-center">
            <img class="size-6 md:size-7 xl:size-8" src="{{asset('assets/logo/logo-rcp.png')}}" alt="logo">

            <h1 class="heading-1 font-cormorant font-bold text-center">Artikel</h1>

            <img src="{{asset('assets/logo/line.svg')}}" alt="line" class="w-8 md:w-12 xl:w-16 mt-2 md:mt-3 xl:mt-4 mb-6 md:mb-7 xl:mb-8">
        </div>

        <div class="flex flex-col w-full gap-6 md:gap-7 xl:gap-8">
            <a href="{{route('beranda-artikel')}}" class="paragraph flex items-center gap-1 md:gap-1.5 xl:gap-2 hover:text-gold transition">
                <svg class="size-3 md:size-3.5 xl:size-4 rotate-180" viewBox="0 0 52 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.249939 22.9997C0.249939 24.0938 0.684536 25.143 1.45812 25.9166C2.23171 26.6901 3.28092 27.1247 4.37494 27.1247H37.0449L26.2099 37.9597C25.4813 38.7417 25.0846 39.776 25.1035 40.8446C25.1223 41.9133 25.5552 42.9329 26.311 43.6887C27.0668 44.4444 28.0864 44.8774 29.1551 44.8962C30.2237 44.9151 31.258 44.5184 32.0399 43.7897L49.9149 25.9147C50.6874 25.1413 51.1213 24.0929 51.1213 22.9997C51.1213 21.9066 50.6874 20.8582 49.9149 20.0847L32.0399 2.20975C31.6623 1.80447 31.2069 1.47941 30.7009 1.25395C30.1949 1.0285 29.6487 0.907265 29.0948 0.897493C28.5409 0.88772 27.9908 0.989605 27.4771 1.19707C26.9635 1.40454 26.4969 1.71333 26.1052 2.10503C25.7135 2.49674 25.4047 2.96332 25.1973 3.47696C24.9898 3.99059 24.8879 4.54075 24.8977 5.09462C24.9075 5.64849 25.0287 6.19471 25.2541 6.70071C25.4796 7.2067 25.8047 7.6621 26.2099 8.03975L37.0449 18.8747H4.37494C2.09794 18.8747 0.249939 20.7227 0.249939 22.9997Z" />
                </svg>

                Kembali
            </a>

            <div class="flex flex-col items-center md:items-start md:flex-row gap-8 md:gap-12 xl:gap-16">
                <div class="flex-none size-48 md:size-64 xl:size-96 flex justify-center items-center overflow-hidden">
                    <img class="object-cover" src="{{ asset('/storage/news/'.$artikel->image) }}" alt="news">
                </div>

                <div class="*:font-cormorant flex flex-col gap-4">
                    <div class="*:font-cormorant flex flex-col gap-1">
                        <h2 class="heading-2 font-bold">{{$artikel->title}}</h2>
                        <h5 class="heading-5 font-bold">Ditulis oleh: {{$artikel->author}} | {{$artikel->date}}</h5>
                    </div>

                    <p class="paragraph font-semibold text-justify">{{$artikel->description}}</p>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="{{asset('js/tentang-kami.js')}}"></script>
@endsection
