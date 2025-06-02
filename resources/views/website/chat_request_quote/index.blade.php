<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bit Criativo | Chat - Solicitar Orçamento</title>

        <!-- FAVICON START -->
        <link rel="icon" href="{{ asset("assets/images/favicon.ico") }}" type="image/x-icon">
        <link rel="icon" href="{{ asset("assets/images/favicon-32x32.png") }}" type="image/png">
        <link rel="apple-touch-icon" href="{{ asset("assets/images/apple-touch-icon.png") }}">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Styles -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css'])
        @endif

        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css"
        />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />

        @livewireStyles
    </head>
    <body class="bg-background-primary">

        <livewire:chat-request-quote />

        <!-- Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/js/app.js'])
        @endif
        @livewireScripts
        @stack('scripts')
    </body>
</html>
