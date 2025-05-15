<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- FAVICON START -->
        <link rel="icon" href="{{ asset("assets/images/favicon.ico") }}" type="image/x-icon">
        <link rel="icon" href="{{ asset("assets/images/favicon-32x32.png") }}" type="image/png">
        <link rel="apple-touch-icon" href="{{ asset("assets/images/apple-touch-icon.png") }}">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('title', 'Laravel')</title>
    </head>
    <body>
        <!-- Navbar START -->
        <nav class="navbar">
            <div class="navbar-container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/brand.png') }}" class="d-inline-block align-top" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-list collapsed">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Início <span class="sr-only">(Atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    </ul>
                <div class="nav-btns">
                    <a href="auth/login.html" class="btn btn-ghost">Área do Cliente</a>
                    <a href="#contato" class="btn btn-primary">Solicitar Orçamento</a>
                </div>
            </div>
        </nav>
        @yield('content')

        <script src="{{ asset("assets/js/bundle.js") }}"></script>
    </body>
</html>
