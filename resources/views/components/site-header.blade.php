@php
    $navItems = config('site.nav');
@endphp
<header class="site-header" id="siteHeader">
    <div class="container-lux header-inner">
        <a href="{{ url('/') }}" class="logo" aria-label="{{ config('site.name') }}">
            <img src="{{ asset('images/logo.png') }}" alt="{{ config('site.name') }}">
        </a>

        <nav class="site-nav">
            @foreach($navItems as $item)
                <a href="{{ url($item['href']) }}" class="{{ request()->is(ltrim($item['href'], '/') ?: '/') ? 'active' : '' }}">{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <div class="header-actions">
            <a href="{{ config('site.phoneHref') }}" class="header-phone">
                <x-icon name="phone" class="icon sm" /> {{ config('site.phone') }}
            </a>
            <a href="{{ url('/#book') }}" class="btn-gold">Book Now</a>
        </div>

        <button type="button" class="menu-toggle" id="menuToggle" aria-label="Toggle menu" aria-expanded="false">
            <x-icon name="menu" class="icon lg" id="menuIconOpen" />
            <x-icon name="x" class="icon lg hidden" id="menuIconClose" />
        </button>
    </div>

    <div class="mobile-nav" id="mobileNav">
        <ul class="container-lux">
            @foreach($navItems as $item)
                <li><a href="{{ url($item['href']) }}">{{ $item['label'] }}</a></li>
            @endforeach
            <li class="mobile-actions">
                <a href="{{ config('site.phoneHref') }}" class="btn-ghost-dark">
                    <x-icon name="phone" class="icon sm" /> {{ config('site.phone') }}
                </a>
                <a href="{{ url('/#book') }}" class="btn-gold">Book Now</a>
            </li>
        </ul>
    </div>
</header>

<script>
(function () {
    var header = document.getElementById('siteHeader');
    var toggle = document.getElementById('menuToggle');
    var nav = document.getElementById('mobileNav');
    var iconOpen = document.getElementById('menuIconOpen');
    var iconClose = document.getElementById('menuIconClose');
    var open = false;

    function onScroll() {
        if (window.scrollY > 24 || open) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    toggle.addEventListener('click', function () {
        open = !open;
        nav.classList.toggle('open', open);
        toggle.setAttribute('aria-expanded', open);
        iconOpen.classList.toggle('hidden', open);
        iconClose.classList.toggle('hidden', !open);
        onScroll();
    });
})();
</script>
