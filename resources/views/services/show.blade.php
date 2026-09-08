<x-layouts.app :title="$title" :description="$description">
    <div class="page-hero">
        <div class="container-lux">
            <nav class="breadcrumb">
                <a href="{{ url('/') }}">Home</a><span class="sep">/</span>
                <a href="{{ url('/services') }}">Services</a><span class="sep">/</span>
                <span class="current">{{ $svc['title'] }}</span>
            </nav>

            <div class="detail-grid">
                <div>
                    <x-section-header eyebrow="Service" :title="$svc['title']" :intro="$svc['short']" />

                    <p style="margin-top:2rem;font-size:1rem;line-height:1.7;color:var(--muted-foreground);">
                        Europe Chauffeur delivers {{ strtolower($svc['title']) }} from our Vienna base and across
                        Europe. Every reservation is handled personally by our concierge team, matched to
                        the right Mercedes-Benz vehicle, and driven by a chauffeur who understands
                        discretion, punctuality and the finer points of European travel.
                    </p>

                    <h2 class="mt-14" style="font-size:1.75rem;">What's included</h2>
                    <ul class="check-list">
                        @foreach($bullets as $b)
                            <li><x-icon name="check" class="icon sm text-gold-deep" style="margin-top:.15rem;flex-shrink:0;" /> <span>{{ $b }}</span></li>
                        @endforeach
                    </ul>

                    <div class="stub-actions">
                        <a href="{{ url('/#book') }}" class="btn-gold">Request a quote <x-icon name="arrow-right" class="icon sm" /></a>
                        <a href="{{ config('site.phoneHref') }}" class="btn-ghost-dark">{{ config('site.phone') }}</a>
                    </div>
                </div>

                <aside class="sidebar-card">
                    <p class="eyebrow">Related services</p>
                    <ul>
                        @foreach($related as $s)
                            <li><a href="{{ url('/services/'.$s['slug']) }}"><span>{{ $s['title'] }}</span> <x-icon name="arrow-right" class="icon sm" style="opacity:.4;" /></a></li>
                        @endforeach
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</x-layouts.app>
