<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>RCP Law</title>

    {{-- Build CSS --}}
    <link rel="stylesheet" href="{{ asset('css/build.css') }}?t={{ env('VERSION_TIME') }}">

    <!-- vite-->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#c4af65">
    <meta name="msapplication-TileColor" content="#ff0000">
    <meta name="theme-color" content="#ffffff">

    <!-- css & js-->
    @yield('head')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body class="bg-cLightGrey">
    <div class="min-h-screen">
        @yield('body')
    </div>

    <a href="https://webcreativs.com/" target="_blank" rel="noreferrer noopener" style="position: relative; z-index: 9999;">
        <div class="custom-container bg-gold hover:bg-[linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2))] py-2 ">
            <p class="paragraph text-center font-medium text-white">
                Dibuat oleh <span class="text-[#344F34] font-bold underline">WebCreativs</span>
            </p>
        </div>
    </a>


</body>

</html>
