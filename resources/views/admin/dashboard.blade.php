@extends('template.admin-template')

@section('head')
    {{-- css --}}

    <!-- javascript -->
@endsection

@section('body')
    <div class="flex">
        <x-admin-navigation-bar page="dashboard" />

        <div
            class="flex flex-col justify-start items-start gap-8 sm:gap-12 lg:gap-16 w-full c-container py-4 sm:py-6 md:py-8 lg:py-10 xl:py-12 2xl:py-14 ml-[72px] lg:ml-[18rem] mt-16">

            <h1 class="text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold text-cGold">Dashboard</h1>

            <div class="grid grid-cols-3 gap-16">
                <a href=""
                    class="group hover:bg-cGold flex flex-col bg-cDarkGrey p-4 gap-6 shadow-[0px_4px_4px_rgba(0,0,0,0.25)] hover:text-cWhite">
                    <p class="text-xl mr-8">Manage News</p>
                    <div class="flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-12 h-12 text-cGold group-hover:text-cWhite">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        <p class="font-bold text-3xl"></p>
                    </div>
                </a>

                <a href=""
                    class="group hover:bg-cGold flex flex-col bg-cDarkGrey p-4 gap-6 shadow-[0px_4px_4px_rgba(0,0,0,0.25)] hover:text-cWhite">
                    <p class="text-xl mr-8">Manage Emails</p>
                    <div class="flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-12 h-12 text-cGold group-hover:text-cWhite">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                        </svg>
                        <p class="font-bold text-3xl"></p>
                    </div>
                </a>



            </div>
        </div>
    </div>
@endsection
