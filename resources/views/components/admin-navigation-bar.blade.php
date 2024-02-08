<nav class="fixed flex flex-col lg:w-72 shrink-0 min-h-screen bg-[#D9D9D9]">

    <div class="pt-20  lg:px-4 flex flex-col">
        <span
            class="flex justify-center items-center self-center lg:self-start  text-xs text-gray-600 p-2 lg:p-4 w-fit">
            <img class="hidden lg:block w-52" src="{{ asset('assets/logo/logo-rcp-text.png') }}" alt="logo">
        </span>

        <nav aria-label="Main Nav" class="mt-6 flex flex-col items-center gap-2">
            <a href="/"
                class="flex items-center gap-2.5 rounded-lg px-2 lg:px-4 py-2 lg:py-3 text-cWhite hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)] w-fit lg:w-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>

                <span class="hidden lg:inline text-base font-medium"> Home </span>
            </a>

            <a href="{{route('dashboard')}}"
                class="flex items-center gap-2.5 rounded-lg px-2 lg:px-4 py-2 lg:py-3 w-fit lg:w-full @if ($page == 'dashboard') bg-gray-100 text-cGold @else text-cWhite hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)] @endif">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>

                <span class="hidden lg:inline text-base font-medium"> Dashboard </span>
            </a>

            <a href="{{route('viewsNews')}}"
                class="flex items-center gap-2.5 rounded-lg px-2 lg:px-4 py-2 lg:py-3 w-fit lg:w-full @if ($page == 'manage-news') bg-gray-100 text-cGold @else text-cWhite hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)] @endif">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                  </svg>


                <span class="hidden lg:inline text-base font-medium"> Artikel </span>
            </a>

            <form class="w-fit lg:w-full" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="text-black w-full flex items-center gap-2.5 rounded-lg px-2 lg:px-4 py-2 lg:py-3 hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>

                    <span class="hidden lg:inline text-base font-medium"> Logout </span>
                </button>
            </form>
        </nav>

    </div>
</nav>
