<footer class="site-footer">
    <div class="container-lux footer-inner">
        <div>
            <a href="{{ url('/') }}" class="footer-logo">
                <img src="{{ asset('images/abcd.png') }}" alt="{{ config('site.name') }}">
            </a>
            <p class="footer-about">
                Premium chauffeur-driven transportation across Europe. Based in Vienna,
                Austria — trusted by executives, VIP travellers and discerning families.
            </p>
            <div class="gold-rule" style="margin-top:2rem;width:6rem;"></div>
            <ul class="footer-contact">
                <li>
                    <x-icon name="phone" class="icon sm text-gold" />
                    <a href="{{ config('site.phoneHref') }}">{{ config('site.phone') }}</a>
                </li>
                <li>
                    <x-icon name="mail" class="icon sm text-gold" />
                    <a href="{{ config('site.emailHref') }}">{{ config('site.email') }}</a>
                </li>
                <li>
                    <x-icon name="mappin" class="icon sm text-gold" />
                    <span>Vienna, Austria — serving all of Europe</span>
                </li>
            </ul>
        </div>

        <div class="footer-col">
            <h4 class="eyebrow">Services</h4>
            <ul>
                @foreach(config('site.services') as $s)
                    <li><a href="{{ url('/services/'.$s['slug']) }}">{{ $s['title'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="footer-col">
            <h4 class="eyebrow">Destinations</h4>
            <ul>
                @foreach(config('site.destinations') as $d)
                    <li><a href="{{ url('/destinations/'.$d['slug']) }}">{{ $d['name'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="footer-col">
            <h4 class="eyebrow">Fleet</h4>
            <ul>
                @foreach(config('site.fleet') as $f)
                    <li><a href="{{ url('/fleet/'.$f['slug']) }}">{{ $f['name'] }}</a></li>
                @endforeach
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/reviews') }}">Reviews</a></li>
                <li><a href="{{ url('/faq') }}">FAQ</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>

    <div class="container-lux">
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} {{ config('site.legalName') }}. All rights reserved. Vienna, Austria.</p>
            <nav>
                <a href="{{ url('/privacy') }}">Privacy Policy</a>
                <a href="{{ url('/terms') }}">Terms &amp; Conditions</a>
                <a href="{{ url('/cookies') }}">Cookie Policy</a>
            </nav>
        </div>
    </div>
</footer>
