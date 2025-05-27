<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/bip_hora.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        <nav class="flex justify-between items-center py-2 px-4 bg-slate-800">
            <a>
                <img width="120" src="{{ asset('bip-hora/assets/images/brand.png') }}" />
            </a>
            <button class="hover:cursor-pointer p-2">
                <img width="16" height="16" src="{{ asset('bip-hora/assets/images/icon_menu.svg') }}" />
            </button>
        </nav>

        @yield('content')
    </body>
</html>
