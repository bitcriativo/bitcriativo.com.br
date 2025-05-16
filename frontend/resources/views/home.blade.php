@extends('layouts.main')

@section('title', 'Bit Criativo | Empresa especializada em desenvolvimento de software')

@section('content')
<main class="container">
    <h1 class="sr-only">Bit Criativo</h1>
    <!-- HERO START -->
    <section id="inicio" class="row mt-5 mt-sm-0 section">
        <div class="col-12 col-md-6 hero__call-to-action">
            <h2 class="display">Seu Site Profissional Começa <span class="text-primary">Aqui</span></h2>
            <p class="text">A Bit Criativo cria sites modernos, rápidos e responsivos. Impressione seus clientes e conquiste mais
                vendas com tecnologia de verdade.</p>
            <a href="#servicos" class="btn btn-primary">Comece Agora</a>
        </div>
        <div class="col-12 col-md-6">
            <div class="hero__image">
                <img class="hero__image--1" src="{{ asset('assets/images/hero_1.png') }}" />
                <img class="hero__image--2" src="{{ asset('assets/images/hero_2.png') }}" />
            </div>
        </div>
        <div class="section__label">Tecnologia</div>
    </section>
    <!-- HERO END -->

    <!-- ABOUT US START -->
    <section id="sobre-nos" class="section row section__about-us mt-5">
        <div class="col-12 col-md-6">
            <h2 class="display">Sobre a Bit Criativo</h2>
            <p class="text">Somos uma equipe apaixonada por tecnologia e design, dedicada a ajudar pequenas e médias empresas a
                crescer no digital. Acreditamos que inovação não precisa ser cara — precisa ser inteligente.</p>
            <a href="#contato" class="btn btn-outline">Fale Conosco</a>
        </div>
        <div class="col-12 col-md-6 mt-3 mt-md-0">
            <img class="section__about-us__img" src="{{ asset('assets/images/about_us.png') }}" />
        </div>
        <div class="section__label">Sobre nós</div>
    </section>
    <!-- ABOUT US END -->

    <!-- FEATURES START -->
    <section class="section mt-5">
        <div class="m-auto">
            <div class="row text-center">
                <h2 class="display">Por que escolher nosso <span class="text-primary">desenvolvimento web?</span></h2>
                <p class="text--large">Criamos sites e lojas virtuais que geram resultados de verdade — com performance, design e
                estratégia.</p>
            </div>
            <div class="row">
            <!--Card Feature Start-->
            <div class="col-12 col-md-6 my-3 my-md-5">
                <div class="d-flex">
                    <i class="ph ph-check-circle card-features__icon"></i>
                    <div>
                        <div class="card-features__title">Design que Converte</div>
                        <div class="card-features__description">
                            Layouts modernos, responsivos e centrados na experiência do usuário para aumentar suas vendas e gerar
                            confiança instantânea.
                        </div>
                    </div>
                </div>
            </div>
            <!--Card Feature Start-->
            <div class="col-12 col-md-6 my-3 my-md-5">
                <div class="d-flex">
                    <i class="ph ph-check-circle card-features__icon"></i>
                    <div>
                        <div class="card-features__title">Performance Otimizada</div>
                        <div class="card-features__description">
                            Sites rápidos, leves e otimizados para mecanismos de busca (SEO), aumentando sua visibilidade e retenção
                            de usuários.
                        </div>
                    </div>
                </div>
            </div>
            <!--Card Feature Start-->
            <div class="col-12 col-md-6 my-3 my-md-5">
                <div class="d-flex">
                    <i class="ph ph-check-circle card-features__icon"></i>
                    <div>
                        <div class="card-features__title">E-commerce Sob Medida</div>
                        <div class="card-features__description">
                            Desenvolvemos lojas virtuais personalizadas, com gestão simples, integrações com meios de pagamento e foco
                            total na conversão.
                        </div>
                    </div>
                </div>
            </div>
            <!--Card Feature Start-->
            <div class="col-12 col-md-6 my-3 my-md-5">
                <div class="d-flex">
                    <i class="ph ph-check-circle card-features__icon"></i>
                    <div>
                        <div class="card-features__title">Segurança e Suporte</div>
                        <div class="card-features__description">
                            Seus dados e os de seus clientes protegidos com certificados SSL, backups automáticos e suporte técnico
                            sempre que precisar.
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="section__label">Benefícios</div>
        </div>
    </section>
    <!-- FEATURES END -->
</main>
@endsection
