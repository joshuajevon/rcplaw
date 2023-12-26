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
  @yield('head')
</head>
<body>
    @yield('body')
</body>
</html>
