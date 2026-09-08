<x-layouts.app :title="$title" :description="$description">
    <div class="page-hero">
        <div class="container-lux">
            <x-section-header eyebrow="Chauffeur Services" title="Every journey, curated with precision."
                intro="From airport arrivals to multi-country itineraries, each service is delivered by a professional chauffeur in an immaculate Mercedes-Benz." />

            <div class="card-grid cols-3">
                @foreach($services as $idx => $s)
                    <a href="{{ url('/services/'.$s['slug']) }}" class="tile" style="padding:2rem;">
                        <p class="eyebrow">0{{ $idx + 1 }}</p>
                        <h3 style="margin-top:.75rem;font-size:1.5rem;">{{ $s['title'] }}</h3>
                        <p style="margin-top:.75rem;font-size:.9rem;line-height:1.6;color:var(--muted-foreground);">{{ $s['short'] }}</p>
                        <span class="tile-link" style="margin-top:1.5rem;">Learn more <x-icon name="arrow-right" class="icon sm" /></span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
