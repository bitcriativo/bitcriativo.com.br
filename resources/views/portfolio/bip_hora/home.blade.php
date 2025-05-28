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

    <!-- Features Start -->
    <section>
        <h2 class="text-center justify-start text-slate-800 text-5xl font-normal font-sans leading-[55px] tracking-tight">Features</h2>
        <div class="text-center justify-start text-gray-700 text-3xl font-normal font-sans leading-10 tracking-tight">Most calendars are <br/>designed for teams. </div>
        <img class="mx-auto" src="{{ asset('bip-hora/assets/images/image_feature_1.png') }}"/>

        <div class="my-5">
            <img class="mx-auto" src={{ asset('bip-hora/assets/images/icon_feature_1.png') }} />
            <div class="text-center justify-start text-slate-800 text-xl font-bold font-sans leading-7 tracking-tight">OpenType features <br/>Variable fonts</div>
            <div class="text-center justify-start text-gray-700 text-lg font-normal font-sans leading-normal tracking-tight">Slate helps you see how <br/>many more days you need <br/>to work to reach your <br/>financial goal.</div>
        </div>

        <div class="my-5">
            <img class="mx-auto" src={{ asset('bip-hora/assets/images/icon_feature_2.png') }} />
            <div class="text-center justify-start text-slate-800 text-xl font-bold font-sans leading-7 tracking-tight">Design with real data</div>
            <div class="text-center justify-start text-gray-700 text-lg font-normal font-sans leading-normal tracking-tight">Slate helps you see how <br/>many more days you need <br/>to work to reach your <br/>financial goal.</div>
        </div>

        <div class="my-5">
            <img class="mx-auto" src={{ asset('bip-hora/assets/images/icon_feature_3.png') }} />
            <div class="text-center justify-start text-slate-800 text-xl font-bold font-sans leading-7 tracking-tight">Fastest way to <br/>take action</div>
            <div class="text-center justify-start text-gray-700 text-lg font-normal font-sans leading-normal tracking-tight">Slate helps you see how <br/>many more days you need <br/>to work to reach your <br/>financial goal.</div>
        </div>

        <div>
            <div class="text-center justify-start text-slate-800 text-5xl font-normal font-sans leading-[55px] tracking-tight">Fastest way to <br/>organize </div>
            <div class="text-center justify-start text-gray-700 text-3xl font-normal font-sans leading-10 tracking-tight">Most calendars are <br/>designed for teams. </div>
            <img src="{{ asset('bip-hora/assets/images/image_feature_2.png') }}" />
            <div class="flex justify-center">
                <a href="#" class="mx-auto px-4 py-2 my-4 bg-blue-500 rounded-[35px] flex-col inline-flex items-center gap-2.5 overflow-hidden justify-start text-white text-lg font-normal font-sans leading-tight tracking-tight">
                    Try For Free
                </a>
            </div>
        </div>
    </section>
    <!-- Features End -->

    <!-- Newsletter Start -->
    <section>
        <h2 class="text-center justify-start text-slate-800 text-5xl font-normal font-sans leading-[55px] tracking-tight">Newsletter </h2>
        <p class="text-center justify-start text-gray-700 text-3xl font-normal font-sans leading-10 tracking-tight">Most calendars are designed for teams. <br/>Slate is designed for freelancers</p>
        <img src="{{ asset('bip-hora/assets/images/image_newsletter_1.png') }}" />
        <div>
            <div class="justify-start text-slate-800 text-xl font-bold font-['Graphik'] leading-7 tracking-tight">Subscribe to our Newsletter</div>
            <div class="justify-start text-gray-700 text-lg font-normal font-['Graphik'] leading-normal tracking-tight">Available exclusivery on Figmaland</div>
            <div class="py-6 inline-flex flex-col justify-start items-start gap-3 overflow-hidden">
                <div class="self-stretch px-9 py-5 bg-zinc-100 rounded-[39px] outline outline-1 outline-offset-[-1px] outline-gray-200 flex flex-col justify-start items-start gap-12 overflow-hidden">
                    <div class="justify-start text-zinc-900 text-sm font-normal font-['Roboto'] leading-none tracking-tight">Your Email</div>
                </div>
                <div class="self-stretch px-9 py-4 bg-blue-500 rounded-[35px] flex flex-col justify-start items-center gap-2.5 overflow-hidden">
                    <div class="inline-flex justify-start items-center gap-2.5 overflow-hidden">
                        <div class="justify-start text-white text-xl font-normal font-['Graphik'] leading-tight tracking-tight">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->

    <!-- Partners Start -->
    <section>
        <h2 class="text-center justify-start text-slate-800 text-5xl font-normal font-sans leading-[55px] tracking-tight">Partners</h2>
        <div class="text-center justify-start text-gray-700 text-3xl font-normal font-sans leading-10 tracking-tight">Most calendars are designed for teams. <br/>Slate is designed for freelancers</div>

        <div class="grid grid-cols-1 gap-4">
            <div class="mx-auto border">
                <div class="justify-start text-gray-700 text-base font-normal font-['Graphik'] leading-snug tracking-tight">Client Name</div>
                <img src="{{ asset('bip-hora/assets/images/image_partners_1.png') }}" />
            </div>

            <div class="mx-auto border">
                <div class="justify-start text-gray-700 text-base font-normal font-['Graphik'] leading-snug tracking-tight">Client Name</div>
                <img src="{{ asset('bip-hora/assets/images/image_partners_2.png') }}" />
            </div>

            <div class="mx-auto border">
                <div class="justify-start text-gray-700 text-base font-normal font-['Graphik'] leading-snug tracking-tight">Client Name</div>
                <img src="{{ asset('bip-hora/assets/images/image_partners_3.png') }}" />
            </div>
        </div>
        <div class="flex justify-center">
                <a href="#" class="mx-auto px-4 py-2 my-4 bg-blue-500 rounded-[35px] flex-col inline-flex items-center gap-2.5 overflow-hidden justify-start text-white text-lg font-normal font-sans leading-tight tracking-tight">
                    Try For Free
                </a>
            </div>
    </section>
    <!-- Partners End -->

@endsection
