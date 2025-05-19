@extends('layouts.main')

@section('title', 'Bit Criativo | Blog')

@section('content')
    <!--Main Start-->
    <div class="container my-5">
        <header class="text-center my-5 py-5">
            <h1 class="display text-primary">Blog</h1>
            <p class="text">
                <span class="text--large-bold">Dicas práticas, insights e novidades do mundo da tecnologia para pequenos negócios.</span>
                <br/>
                Aqui no nosso blog, você encontra conteúdos simples e objetivos sobre ferramentas, segurança digital, produtividade,
                automações e tudo o que pode ajudar sua empresa a crescer com apoio da tecnologia — sem complicação e sem “tecniquês”.
            </p>
        </header>
         <div class="row">
            <aside class="col-12 col-md-3">
                <input type="text" placeholder="pesquisar ..."/>
                <div class="posts__categories mt-4">
                    <span class="text--large-bold">Categorias</span>
                    <ul class="posts__categories__list d-none">
                        <li>
                            <a href="#">Tecnologias</a>
                        </li>
                        <li>
                            <a href="#">Emprendedorismo</a>
                        </li>
                        <li>
                            <a href="#">Ecommerce</a>
                        </li>
                    </ul>
                </div>
                <div class="posts__tags mt-4">
                    <span class="text--large-bold">Tags</span>
                    <div class="posts__tags__list d-none">
                        <div class="posts__tag">Tecnologia</div>
                        <div class="posts__tag">Emprendedorismo</div>
                    </div>
                </div>
                <div class="posts__instagram row mt-4">
                    <span class="text--large-bold">Instagram</span>
                    <div class="row d-none">
                        <div class="col-3 mt-2">
                            <img src="../assets/image/posts_instagram_1.png" />
                        </div>
                        <div class="col-3 mt-2">
                            <img src="../assets/image/posts_instagram_1.png" />
                        </div>
                        <div class="col-3 mt-2">
                            <img src="../assets/image/posts_instagram_1.png" />
                        </div>
                        <div class="col-3 mt-2">
                            <img src="../assets/image/posts_instagram_1.png" />
                        </div>
                        <div class="col-3 mt-2">
                            <img src="../assets/image/posts_instagram_1.png" />
                        </div>
                        <div class="col-3 mt-2">
                            <img src="../assets/image/posts_instagram_1.png" />
                        </div>
                    </div>
                </div>
            </aside>

            <div class="col-12 col-md-9 text-center mt-5 mt-md-0">
                <h2 class="display">Não possuí posts</h2>
                <a href="{{ route('home') }}" class="btn btn-primary mt-5">Voltar para o início</a>
            </div>

            <div class="col-9 d-none">
                <main class="row">
                    <!--POSTS Start-->
                    <div class="col-6">
                        <!--CARD POST START-->
                        <div class="card card--portfolio mx-auto my-3" style="width: 18rem;">
                            <img src="../assets/image/portfolio_1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                                    content.
                                </p>
                                <a href="#" class="btn btn-primary btn-card--portfolio">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!--POSTS Start-->
                    <div class="col-6">
                        <!--CARD POST START-->
                        <div class="card card--portfolio mx-auto my-3" style="width: 18rem;">
                            <img src="../assets/image/portfolio_1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                                    content.
                                </p>
                                <a href="#" class="btn btn-primary btn-card--portfolio">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!--POSTS Start-->
                    <div class="col-6">
                        <!--CARD POST START-->
                        <div class="card card--portfolio mx-auto my-3" style="width: 18rem;">
                            <img src="../assets/image/portfolio_1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                                    content.
                                </p>
                                <a href="#" class="btn btn-primary btn-card--portfolio">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!--POSTS Start-->
                    <div class="col-6">
                        <!--CARD POST START-->
                        <div class="card card--portfolio mx-auto my-3" style="width: 18rem;">
                            <img src="../assets/image/portfolio_1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                                    content.
                                </p>
                                <a href="#" class="btn btn-primary btn-card--portfolio">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!--POSTS Start-->
                    <div class="col-6">
                        <!--CARD POST START-->
                        <div class="card card--portfolio mx-auto my-3" style="width: 18rem;">
                            <img src="../assets/image/portfolio_1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                                    content.
                                </p>
                                <a href="#" class="btn btn-primary btn-card--portfolio">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!--POSTS Start-->
                    <div class="col-6">
                        <!--CARD POST START-->
                        <div class="card card--portfolio mx-auto my-3" style="width: 18rem;">
                            <img src="../assets/image/portfolio_1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                                    content.
                                </p>
                                <a href="#" class="btn btn-primary btn-card--portfolio">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </main>
                <div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination mx-auto">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
