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

        <!--CSS Vendor-->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />

        <title>@yield('title', 'Laravel')</title>
    </head>
    <body>
        <!-- Navbar START -->
        <div class="container-fluid">
            <nav class="navbar row">
                <div class="navbar-container col-12 col-lg-2 col-xl-4">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/brand.png') }}" class="d-inline-block align-top" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="navbar-list collapsed col-12 col-lg-4">
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
                </div>
                <div class="nav-btns navbar-list collapsed col-12 col-lg-5 col-xl-4 d-flex justify-content-end">
                    <a href="auth/login.html" class="btn btn-ghost">Área do Cliente</a>
                    <a href="#contato" class="btn btn-primary">Solicitar Orçamento</a>
                </div>
            </nav>
        </div>

        @yield('content')

        <!-- FOOTER START -->
        <footer class="footer py-5" >
            <div class="container">
                <div class="row footer__header my-5">
                    <div class="footer__title">Bit Criativo</div>
                    <div class="footer__description">Transformando a tecnologia para pequenas empresas.</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mt-3">
                        <div class="footer__section__title">Siga-nos</div>
                        <ul class="footer__social_networks__list">
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-3">
                        <div class="footer__section__title">Contato</div>
                        <address>
                            <div class="text--small">Email: <br/><span class="text--large-bold">contato@bitcriativo.com.br</span></div>
                            <div class="text--small">Telefone: <br /><span class="text--large-bold">+55 (91) 98556-1718</span></div>
                        </address>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-3">
                        <div class="footer__section__title">Assinar Newsletter</div>
                        <form class="newsletter">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label sr-only">Email</label>
                                <input id="input-newsletter-subscriber-email" class="input newsletter__input" type="email" placeholder="exemplo@gmail.com">
                            </div>
                            <button id="btn-newsletter-subscriber-submit" class="btn btn-primary newsletter__btn" type="button">Inscreve-se <span class="icon-spinner mx-2 d-none"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <script src="{{ asset("assets/js/bundle.js") }}"></script>
    </body>
</html>
