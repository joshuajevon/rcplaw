<nav class="fixed flex flex-col lg:w-72 shrink-0 min-h-screen bg-cGold">
    <div class="flex items-center justify-center lg:justify-start gap-3 bg-white p-2 lg:p-4">
        {{-- <img alt="Man"
                src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                class="h-12 w-12 rounded-full object-cover" /> --}}
        <div class="hidden lg:flex flex-col">
            <p class="text-base font-bold truncate max-w-[250px]">{{ Auth::user()->name }}</p>
            <span class="block text-sm truncate max-w-[250px]">{{ Auth::user()->email }}</span>
        </div>
    </div>

    <div class="py-6 px-2 lg:px-4 flex flex-col">
        <span
            class="flex justify-center items-center self-center lg:self-start rounded-lg bg-gray-100 text-xs text-gray-600 p-2 lg:p-4 w-fit">
            <img class="hidden lg:block w-32" src="{{ asset('assets/logo/asetaset-full.png') }}" alt="logo">
            <img class="block lg:hidden h-8" src="{{ asset('assets/logo/asetaset-icon.png') }}" alt="logo">
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
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
                <span class="hidden lg:inline text-base font-medium"> Manage News </span>
            </a>

            <a href=""
                class="flex items-center gap-2.5 rounded-lg px-2 lg:px-4 py-2 lg:py-3 w-fit lg:w-full @if ($page == 'manage-emails') bg-gray-100 text-cGold @else text-cWhite hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)] @endif">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                </svg>

                <span class="hidden lg:inline text-base font-medium"> Manage Emails </span>
            </a>

            <div class="bg-cWhite h-0.5 w-full my-2"></div>

            <form class="w-fit lg:w-full" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="text-red-700 bg-red-100 w-full flex items-center gap-2.5 rounded-lg px-2 lg:px-4 py-2 lg:py-3 hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)]">
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
