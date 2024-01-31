<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Build CSS --}}
    <link rel="stylesheet" href="{{ asset('css/build.css') }}?t={{ env('VERSION_TIME') }}">

    <!-- vite-->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- css & js-->

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="flex min-h-screen items-center justify-center">
        <div class="flex flex-col items-center justify-center px-6 py-12 lg:px-8 font-cormorant">

            <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                <img class="mx-auto h-15 w-auto" src="{{ asset('assets/logo/logo-rcp.png') }}" alt="Your Company">
                <h2 class="mt-10 text-center text-3xl font-bold leading-9 tracking-tight text-gray-900">Resandhi Cumbhadrika Partnership</h2>
            </div>

            <div class=" sm:mx-auto sm:w-full sm:max-w-sm ">
                <form class="space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                            <h2 class="font-bold text-xl">Email</h2>
                        </label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border border-black py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gold sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">
                                <h2 class="font-bold text-xl">Password</h2>
                            </label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border border-black py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gold sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    @error('email')
                        <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-gold px-3 py-1.5 text-xl font-semibold leading-6 text-black shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 border border-black">Log In</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>
</html>
