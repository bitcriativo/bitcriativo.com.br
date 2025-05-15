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
</main>
@endsection
