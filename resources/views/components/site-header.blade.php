{{-- @php
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
</script> --}}
@php
    $navItems = config('site.nav');
@endphp

<header class="site-header" id="siteHeader">
    <div class="container-lux header-inner">

        <a href="{{ url('/') }}" class="logo" aria-label="{{ config('site.name') }}">
            <img src="{{ asset('images/logo.png') }}" alt="{{ config('site.name') }}">
        </a>

        <nav class="site-nav" aria-label="Main navigation">
            @foreach($navItems as $item)
                @php
                    $navPath = trim($item['href'], '/');
                    $isActive = $navPath === ''
                        ? request()->is('/')
                        : request()->is($navPath) || request()->is($navPath . '/*');
                @endphp

                <a href="{{ url($item['href']) }}" class="{{ $isActive ? 'active' : '' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="header-actions">
            <a href="{{ config('site.phoneHref') }}" class="header-phone">
                <x-icon name="phone" class="icon sm" />
                {{ config('site.phone') }}
            </a>

            <a href="{{ url('/#book') }}" class="btn-gold">Book Now</a>
        </div>

        <button
            type="button"
            class="menu-toggle"
            id="menuToggle"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="mobileNav"
        >
            <x-icon name="menu" class="icon lg" id="menuIconOpen" />
            <x-icon name="x" class="icon lg hidden" id="menuIconClose" />
        </button>
    </div>

    <nav
        class="mobile-nav"
        id="mobileNav"
        aria-label="Mobile navigation"
        aria-hidden="true"
    >
        <ul class="container-lux">
            @foreach($navItems as $item)
                @php
                    $navPath = trim($item['href'], '/');
                    $isActive = $navPath === ''
                        ? request()->is('/')
                        : request()->is($navPath) || request()->is($navPath . '/*');
                @endphp

                <li>
                    <a
                        href="{{ url($item['href']) }}"
                        class="mobile-nav-link {{ $isActive ? 'active' : '' }}"
                    >
                        <span>{{ $item['label'] }}</span>
                        <span class="mobile-nav-arrow" aria-hidden="true">
                            <x-icon name="arrow-right" class="icon sm" />
                        </span>
                    </a>
                </li>
            @endforeach

            <li class="mobile-actions">
                <a href="{{ config('site.phoneHref') }}" class="btn-ghost-dark">
                    <x-icon name="phone" class="icon sm" />
                    {{ config('site.phone') }}
                </a>

                <a href="{{ url('/#book') }}" class="btn-gold">
                    Book Now
                    <x-icon name="arrow-right" class="icon sm" />
                </a>
            </li>
        </ul>
    </nav>
</header>

<script>
(function () {
    var header = document.getElementById('siteHeader');
    var toggle = document.getElementById('menuToggle');
    var nav = document.getElementById('mobileNav');
    var iconOpen = document.getElementById('menuIconOpen');
    var iconClose = document.getElementById('menuIconClose');

    if (!header || !toggle || !nav) return;

    var isOpen = false;

    function updateHeaderState() {
        header.classList.toggle('scrolled', window.scrollY > 24 || isOpen);
    }

    function setMenu(openMenu) {
        isOpen = openMenu;

        nav.classList.toggle('open', isOpen);
        header.classList.toggle('menu-is-open', isOpen);

        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        toggle.setAttribute(
            'aria-label',
            isOpen ? 'Close navigation menu' : 'Open navigation menu'
        );

        nav.setAttribute('aria-hidden', isOpen ? 'false' : 'true');

        if (iconOpen) iconOpen.classList.toggle('hidden', isOpen);
        if (iconClose) iconClose.classList.toggle('hidden', !isOpen);

        document.body.classList.toggle('menu-open', isOpen);

        updateHeaderState();
    }

    toggle.addEventListener('click', function () {
        setMenu(!isOpen);
    });

    nav.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            setMenu(false);
        });
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && isOpen) {
            setMenu(false);
            toggle.focus();
        }
    });

    document.addEventListener('click', function (event) {
        if (isOpen && !header.contains(event.target)) {
            setMenu(false);
        }
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1024 && isOpen) {
            setMenu(false);
        }
    });

    window.addEventListener('scroll', updateHeaderState, { passive: true });
    updateHeaderState();
})();
</script>
