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

    <!-- Testimonials Start -->
    <section>
        <h2 class="text-center justify-start text-slate-800 text-5xl font-normal font-sans leading-[55px] tracking-tight">Testimonials</h2>
        <img src="{{ asset('bip-hora/assets/images/image_testimonials_1.png') }}" />
        <div class="text-center justify-start text-gray-700 text-sm font-bold font-sans leading-none tracking-tight">Most calendars are designed for teams. <br/>Slate is designed for freelancers who want a <br/>simple way to plan their schedule.</div>

        <div class="flex space-x-2 items-center">
            <img src="{{ asset('bip-hora/assets/images/image_testimonials_2.png') }}" />
            <div>
                <div class="justify-start text-gray-700 text-[10.14px] font-bold font-sans leading-none tracking-tight">Organize across</div>
                <div class="justify-start text-slate-800 text-xs font-normal font-sans leading-snug tracking-tight">Ui designer</div>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="#" class="mx-auto px-4 py-2 my-4 bg-blue-500 rounded-[35px] flex-col inline-flex items-center gap-2.5 overflow-hidden justify-start text-white text-lg font-normal font-sans leading-tight tracking-tight">
                More Testimonials
            </a>
        </div>
    </section>
    <!-- Testimonials End -->

    <!-- Contact Start -->
    <section class="my-32">
        <h2 class="text-center justify-start text-slate-800 text-5xl font-normal font-sans leading-[55px] tracking-tight">Contact Us</h2>
        <div class="my-6 text-center justify-start text-gray-700 text-3xl font-normal font-sans leading-10 tracking-tight">Most calendars are <br/>designed for teams. </div>

        <div class="flex space-x-4 justify-center">
            <img src="{{ asset('bip-hora/assets/images/icon_social_network_1.png') }}" />
            <img src="{{ asset('bip-hora/assets/images/icon_social_network_2.png') }}" />
            <img src="{{ asset('bip-hora/assets/images/icon_social_network_3.png') }}" />
        </div>

        <address class="space-y-4 px-4 my-24">
            <div class="flex gap-4">
                <div>
                    <img src="{{ asset('bip-hora/assets/images/icon_pin_map.png') }}"/>
                </div>
                <span class="justify-start text-gray-700 text-base font-normal font-sans leading-snug tracking-tight">6386 Spring St undefined Anchorage, <br/>Georgia 12473 United States</span>
            </div>
            <div class="flex gap-4">
                <div>
                    <img src="{{ asset('bip-hora/assets/images/icon_phone.png') }}"/>
                </div>
                <span class="justify-start text-gray-700 text-base font-normal font-sans leading-snug tracking-tight">(843) 555-0130</span>
            </div>
            <div class="flex gap-4">
                <div>
                    <img src="{{ asset('bip-hora/assets/images/icon_pin_map.png') }}"/>
                </div>
                <span class="justify-start text-gray-700 text-base font-normal font-sans leading-snug tracking-tight">willie.jennings@example.com</span>
            </div>
        </address>
        <div class="p-4">
            <div class="w-full self-stretch px-12 py-12 bg-white rounded-[20px] shadow-[0px_13px_19px_0px_rgba(0,0,0,0.07)] outline outline-offset-[-1px] outline-zinc-300 inline-flex flex-col justify-start items-start gap-11 overflow-hidden">
                <div class="inline-flex justify-start items-center gap-2.5 overflow-hidden">
                    <div class="justify-start text-slate-800 text-xl font-bold font-sans leading-7 tracking-tight">Contact Us</div>
                </div>
                <input class="self-stretch px-5 py-5 bg-neutral-100 rounded-[39px] outline outline-offset-[-1px] outline-gray-200 flex flex-col justify-start items-start gap-12 overflow-hidden text-zinc-900 text-base font-normal font-sans leading-none tracking-tight" type="text" placeholder="Seu nome" />
                <input class="self-stretch px-5 py-5 bg-neutral-100 rounded-[39px] outline outline-offset-[-1px] outline-gray-200 flex flex-col justify-start items-start gap-12 overflow-hidden text-zinc-900 text-base font-normal font-sans leading-none tracking-tight" type="text" placeholder="Seu email" />
                <input class="self-stretch px-5 py-5 bg-neutral-100 rounded-[39px] outline outline-offset-[-1px] outline-gray-200 flex flex-col justify-start items-start gap-12 overflow-hidden text-zinc-900 text-base font-normal font-sans leading-none tracking-tight" type="text" placeholder="Sua mensagem" />
                <textarea class="self-stretch px-5 py-6 bg-neutral-100 outline outline-offset-[-1px] outline-gray-200 inline-flex flex-col justify-start items-start gap-12 overflow-hidden h-36 relative text-zinc-900 text-base font-normal font-sans leading-none tracking-tight" rows="5" placeholder="Sua mensagem"></textarea>
                <a href="#" class="px-4 py-2 my-4 bg-blue-500 rounded-[35px] flex-col inline-flex items-center gap-2.5 overflow-hidden justify-start text-white text-lg font-normal font-sans leading-tight tracking-tight">
                    Enviar
                </a>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    <!-- Footer Start -->
    <footer class="bg-slate-800 inline-flex flex-col justify-start items-center w-full *:my-4 py-24">
        <div class="space-y-4 *:text-center *:justify-start *:text-white not-first:text-base not-first:font-normal *:font-sans *:leading-7 *:tracking-tight">
            <div class="text-xl font-bold">Annette Steward</div>
            <div>Jennie Cooper</div>
            <div>Julie Henry</div>
            <div>Johnny Murphy</div>
            <div>Gregory Mccoy</div>
            <div>Marvin Mckinney</div>
        </div>

        <div class="space-y-4 *:text-center *:justify-start *:text-white not-first:text-base not-first:font-normal *:font-sans *:leading-7 *:tracking-tight">
            <div class="text-xl font-bold">Annette Steward</div>
            <div>Jennie Cooper</div>
            <div>Julie Henry</div>
            <div>Johnny Murphy</div>
            <div>Gregory Mccoy</div>
            <div>Marvin Mckinney</div>
        </div>

        <div class="space-y-4 *:text-center *:justify-start *:text-white not-first:text-base not-first:font-normal *:font-sans *:leading-7 *:tracking-tight">
            <div class="text-xl font-bold">Annette Steward</div>
            <div>Jennie Cooper</div>
            <div>Julie Henry</div>
            <div>Johnny Murphy</div>
            <div>Gregory Mccoy</div>
            <div>Marvin Mckinney</div>
        </div>

        <address class="space-y-4">
            <div class="flex space-x-2 justify-start text-white text-base font-normal font-sans leading-relaxed tracking-tight">
                <div>
                    <img src="{{ asset('bip-hora/assets/images/icon_pin_map.png') }}"/>
                </div>
                <span>6386 Spring St undefined Anchorage, <br/>Georgia 12473 United States</span>
            </div>
            <div class="flex space-x-2 justify-start text-white text-base font-normal font-sans leading-relaxed tracking-tight">
                <div>
                    <img src="{{ asset('bip-hora/assets/images/icon_phone.png') }}"/>
                </div>
                <span>(843) 555-0130</span>
            </div>
        </address>

        <div class="flex space-x-4 justify-center">
            <img src="{{ asset('bip-hora/assets/images/icon_social_network_4.png') }}" />
            <img src="{{ asset('bip-hora/assets/images/icon_social_network_5.png') }}" />
            <img src="{{ asset('bip-hora/assets/images/icon_social_network_6.png') }}" />
        </div>
    </footer>
    <!-- Footer End -->
@endsection
