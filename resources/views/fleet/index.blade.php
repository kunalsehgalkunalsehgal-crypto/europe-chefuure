<x-layouts.app :title="$title" :description="$description">
    <div class="page-hero">
        <div class="container-lux">
            <x-section-header eyebrow="The Fleet" title="An exclusively Mercedes-Benz fleet."
                intro="Meticulously maintained, immaculately presented. Choose the vehicle that fits your journey." />

            <div class="card-grid cols-2">
                @foreach($fleet as $v)
                    <a href="{{ url('/fleet/'.$v['slug']) }}" class="fleet-card on-light">
                        <div class="media">
                            <img src="{{ asset('images/fleet/'.$images[$v['slug']]) }}" alt="{{ $v['name'] }}" loading="lazy" width="1200" height="800">
                        </div>
                        <div class="body">
                            <div>
                                <p class="eyebrow">{{ $v['class'] }}</p>
                                <h3>{{ $v['name'] }}</h3>
                            </div>
                            <div class="fleet-specs text-muted">
                                <span><x-icon name="users" class="icon sm text-gold-deep" /> {{ $v['pax'] }} pax</span>
                                <span><x-icon name="badge-check" class="icon sm text-gold-deep" /> {{ $v['luggage'] }} bags</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
