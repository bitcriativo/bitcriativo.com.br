<nav class="navigation">
    <a href="{{ route('portfolio.arq_lab') }}">
        <img src={{ asset('portfolio/arq-lab/assets/image/brand.png') }} />
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
    <button class="navigation__toggler">
        <i class="ph ph-list text-2xl"></i>
    </button>
</nav>
