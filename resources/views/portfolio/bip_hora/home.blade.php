@extends('portfolio.bip_hora.layouts.main')

@section('content')
    <!-- Hero Start -->
    <header class="py-8 flex flex-col justify-center px-4 space-y-8" style=" background-image: url('{{ asset('bip-hora/assets/images/bg_hero.png') }}'); background-size: cover; background-position-x: center;">
        <h2 class="display-1">The best products start with Figma</h2>
        <p class="text-center justify-start text-white text-3xl font-normal font-sans leading-10 tracking-tight">Most calendars are designed for teams. </p>
        <div class="flex justify-center">
            <a href="#" class="mx-auto px-4 py-2 my-4 bg-blue-500 rounded-[35px] flex-col inline-flex items-center gap-2.5 overflow-hidden justify-start text-white text-lg font-normal font-sans leading-tight tracking-tight">
                Try For Free
            </a>
        </div>
    </header>
    <!-- Hero End -->

@endsection
