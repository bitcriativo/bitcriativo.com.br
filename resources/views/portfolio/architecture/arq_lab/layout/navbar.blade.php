<nav class="navigation">
    <a href="{{ route('portfolio.arq_lab') }}">
        <img src={{ asset('portfolio/arq-lab/assets/image/brand.svg') }} />
    </a>

    <ul class="navigation__list">
        <li class="navigation__link"><a href="{{ route('portfolio.arq_lab') }}">Home</a></li>
        <li class="navigation__link"><a href="{{ route('portfolio.arq_lab') }}">About us</a></li>
        <li class="navigation__link"><a href="{{ route('portfolio.arq_lab') }}">Our Process</a></li>
        <li class="navigation__link"><a href="{{ route('portfolio.arq_lab') }}">Photo Gallery</a></li>
        <li class="navigation__link"><a href="{{ route('portfolio.arq_lab') }}">Contact</a></li>
    </ul>
    <div class="hidden lg:inline-flex">
        <a href="#" class="btn">Get a free consultation <i class="ph ph-arrow-up-right"></i></a>
    </div>
    <button id="navigation__toggler_open" class="navigation__toggler">
        <i class="ph ph-list text-2xl"></i>
    </button>
</nav>

<div id="overlay__navigation_mobile" class="hidden overlay__navigation__sidebar"></div>

<nav id="navigation__mobile" class="hidden bg-white z-50 fixed top-0 right-0 w-2/3 h-dvh p-4">
    <div class="flex items-center justify-between">
        <a href="#" class="">
            <img src={{ asset('portfolio/arq-lab/assets/image/brand.svg') }} />
        </a>
        <button id="navigation__toggler_close" class="flex justify-center items-center">
            <i class="ph ph-x text-3xl hover:text-primary hover:cursor-pointer"></i>
        </button>
    </div>
    <ul class="space-y-4 text-end py-8 *:hover:text-primary font-sans">
        <li class=""><a href="{{ route('portfolio.arq_lab') }}">Home</a></li>
        <li class=""><a href="{{ route('portfolio.arq_lab') }}">About us</a></li>
        <li class=""><a href="{{ route('portfolio.arq_lab') }}">Our Process</a></li>
        <li class=""><a href="{{ route('portfolio.arq_lab') }}">Photo Gallery</a></li>
        <li class=""><a href="{{ route('portfolio.arq_lab') }}">Contact</a></li>
    </ul>
</nav>

@push('scripts')
    <script>
        $(function() {
            const navigationTogglerOpen = $('#navigation__toggler_open');
            const navigationTogglerClose = $('#navigation__toggler_close');
            const overlayNavigationMobile = $('#overlay__navigation_mobile');
            const navigationMobile = $('#navigation__mobile');

            navigationTogglerOpen.on('click', ()=> {
                overlayNavigationMobile.fadeIn( "slow" );
                navigationMobile.fadeIn( "slow" );
            })

            navigationTogglerClose.on('click', ()=> {
                overlayNavigationMobile.fadeOut( "slow" );
                navigationMobile.fadeOut( "slow" );
            })
        })
    </script>
@endpush
