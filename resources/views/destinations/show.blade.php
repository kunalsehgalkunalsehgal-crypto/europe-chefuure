<x-layouts.app :title="$title" :description="$description">
    <section class="image-hero">
        <img src="{{ asset('images/destinations/'.$image) }}" alt="{{ $d['name'] }}" width="1000" height="1200">
        <div class="veil"></div>
        <div class="container-lux content">
            <p class="eyebrow on-dark">
                {{ $d['type'] === 'city' ? 'City · '.$d['country'] : 'Country' }}
            </p>
            <h1>{{ $d['name'] }}</h1>
        </div>
    </section>

    <div class="section">
        <div class="container-lux detail-grid">
            <div>
                <x-section-header eyebrow="Chauffeur service" :title="'Luxury chauffeur transfers in '.$d['name'].'.'"
                    :intro="'Europe Chauffeur delivers premium chauffeur-driven transportation throughout '.$d['name'].' and to surrounding destinations. From airport arrivals to full-day sightseeing, every journey is handled by a professional driver in a Mercedes-Benz vehicle.'" />

                <h2 class="mt-14" style="font-size:1.75rem;">What we offer in {{ $d['name'] }}</h2>
                <ul class="check-list">
                    @foreach(['Airport & train station transfers','Business & corporate travel','Private sightseeing tours','Multi-day custom itineraries','Cross-border transfers','Event & wedding transportation'] as $x)
                        <li><x-icon name="check" class="icon sm text-gold-deep" style="margin-top:.15rem;flex-shrink:0;" /> {{ $x }}</li>
                    @endforeach
                </ul>

                <div class="stub-actions">
                    <a href="{{ url('/#book') }}" class="btn-gold">Request a quote <x-icon name="arrow-right" class="icon sm" /></a>
                    <a href="{{ config('site.phoneHref') }}" class="btn-ghost-dark">{{ config('site.phone') }}</a>
                </div>
            </div>

            <aside class="sidebar-card">
                <p class="eyebrow">More destinations</p>
                <ul>
                    @foreach($others as $o)
                        <li><a href="{{ url('/destinations/'.$o['slug']) }}"><span>{{ $o['name'] }}</span> <x-icon name="arrow-right" class="icon sm" style="opacity:.4;" /></a></li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-layouts.app>
