<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ArqLab</title>

        <!-- Styles  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
        @stack('styles')

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/arq_lab.css'])
        @endif
    </head>
    <body>

        @include('portfolio.architecture.arq_lab.layout.navbar')
        @include('portfolio.architecture.arq_lab.layout.hero')
        @include('portfolio.architecture.arq_lab.layout.about')
        @include('portfolio.architecture.arq_lab.layout.services')

        <!-- Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/js/app.js'])
        @endif
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        @stack('scripts')
    </body>
</html>
