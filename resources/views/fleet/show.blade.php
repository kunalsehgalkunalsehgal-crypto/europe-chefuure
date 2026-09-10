<x-layouts.app :title="$title" :description="$description">
    <div class="page-hero">
        <div class="container-lux">
            <nav class="breadcrumb">
                <a href="{{ url('/') }}">Home</a><span class="sep">/</span>
                <a href="{{ url('/fleet') }}">Fleet</a><span class="sep">/</span>
                <span class="current">{{ $v['name'] }}</span>
            </nav>

            <div class="detail-grid">
                <div>
                    <div class="fleet-card on-light" style="border:0;">
                        <div class="media">
                            <img src="{{ asset('images/fleet/'.$image) }}" alt="{{ $v['name'] }}" width="1200" height="800">
                        </div>
                    </div>
                    <div class="mt-10">
                        <p class="eyebrow">{{ $v['class'] }}</p>
                        <h1 style="margin-top:.75rem;font-size:2.5rem;">{{ $v['name'] }}</h1>
                        <div class="gold-rule " style="margin-top:1.5rem;"></div>
                        <p style="margin-top:2rem;font-size:1rem;line-height:1.7;color:var(--muted-foreground);">
                            The {{ $v['name'] }} is a benchmark of European automotive craftsmanship — the vehicle
                            of choice for {{ strtolower($v['class']) }} chauffeur travel. Driven by a professional
                            chauffeur from Europe Chauffeur, it delivers a quiet, refined and dependable
                            journey anywhere in Europe.
                        </p>

                        <h2 class="mt-12" style="font-size:1.75rem;">Vehicle features</h2>
                        <ul class="check-list">
                            @foreach($features as $f)
                                <li><x-icon name="check" class="icon sm text-gold-deep" style="margin-top:.15rem;flex-shrink:0;" /> {{ $f }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <aside class="sidebar-card">
                    <p class="eyebrow">Specification</p>
                    <dl class="spec-list">
                        <div class="row"><dt>Class</dt><dd>{{ $v['class'] }}</dd></div>
                        <div class="row"><dt>Passengers</dt><dd><x-icon name="users" class="icon sm text-gold-deep" /> Up to {{ $v['pax'] }}</dd></div>
                        <div class="row"><dt>Luggage</dt><dd><x-icon name="badge-check" class="icon sm text-gold-deep" /> {{ $v['luggage'] }} bags</dd></div>
                        <div class="row"><dt>Brand</dt><dd>Mercedes-Benz</dd></div>
                    </dl>
                    {{-- <a href="{{ url('/#book') }}" class="btn-gold btn-block mt-8" style="display:flex;">Book this vehicle <x-icon name="arrow-right" class="icon sm" /></a> --}}
                    <a href="{{ route('contact', ['vehicle' => $v['slug']]) }}"
   class="btn-gold btn-block mt-8"
   style="display:flex;">
    Book this vehicle
    <x-icon name="arrow-right" class="icon sm" />
</a>
                    <a href="{{ config('site.phoneHref') }}" class="btn-ghost-dark btn-block" style="display:flex;margin-top:.75rem;">{{ config('site.phone') }}</a>
                </aside>
            </div>
        </div>
    </div>
</x-layouts.app>
