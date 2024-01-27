<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Temukan Aset-aset dengan Mudah di asetaset.com: Layanan Terpercaya untuk Informasi Aset-aset dalam Status Penundaan Kewajiban Pembayaran Utang atau Pailit">

    <title>asetaset.com</title>

    {{-- Build CSS --}}
    <link rel="stylesheet" href="{{ asset('css/build.css') }}?t={{ env('VERSION_TIME') }}">

    <!-- vite-->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        
    <!-- css & js-->
    @yield('head')
</head>

<body class="bg-cLightGrey">
    <div class="min-h-screen">
        @yield('body')
    </div>

    <div class="ml-[72px] lg:ml-[18rem]">

    </div>

</body>

</html>
