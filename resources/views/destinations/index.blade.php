<x-layouts.app :title="$title" :description="$description">
    <div class="page-hero">
        <div class="container-lux">
            <x-section-header eyebrow="Destinations" title="From Vienna to every European capital."
                intro="Cross-border chauffeur transfers to eight countries — handled by drivers who know the routes, the tolls, and the shortcuts." />

            <div class="card-grid cols-4">
                @foreach($destinations as $d)
                    <a href="{{ url('/destinations/'.$d['slug']) }}" class="dest-card">
                        <img src="{{ asset('images/destinations/'.($covers[$d['slug']] ?? 'vienna-thumb.jpg')) }}" alt="{{ $d['name'] }}" loading="lazy" width="1000" height="1200">
                        <div class="veil"></div>
                        <div class="info">
                            <p class="eyebrow">Chauffeur transfers</p>
                            <h3>{{ $d['name'] }}</h3>
                            <span class="link">Explore <x-icon name="arrow-right" class="icon sm" /></span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
