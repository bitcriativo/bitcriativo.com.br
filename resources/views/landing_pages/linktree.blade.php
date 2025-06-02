<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>EAP Projetos | Links</title>

        <!-- Styles -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css'])
        @endif

        <!-- Vendo CSS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    </head>
    <body class="bg-background-primary min-h-dvh flex flex-col">

       <header data-aos="fade-up" data-aos-delay="300" class="text-center p-8">
            <img class="rounded-full border-2 border-primary w-16 md:w-32 mx-auto" src="{{ asset('assets/images/logo.png') }}" />
            <h2 class="heading-06 mt-4">Bit <span class="text-primary">Criativo</span></h2>
        </header>

        <main data-aos="fade-up" data-aos-delay="300" class="flex-1 flex justify-center items-center">
            <div class="w-full max-w-xs px-2">
                <ul class="space-y-2 w-full">
                    <li>
                        <a href="#" class="btn w-full">Solicitar Orçamento</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}" class="btn w-full">Nosso Site</a>
                    </li>
                </ul>
            </div>
        </main>

        <footer class="text-center py-4">
            Copyright © <a href="{{ route('home') }}" class="border-b border-transparent hover:border-b-primary hover:text-primary">Bit Criativo</a>
        </footer>

        <!-- Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/js/app.js'])
        @endif

        <!-- Script Vendor -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>
    </body>
</html>
