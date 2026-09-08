<x-layouts.app :title="$title" :description="$description">
    <div class="page-hero">
        <div class="container-lux">
            <nav class="breadcrumb">
                <a href="{{ url('/') }}">Home</a><span class="sep">/</span>
                <a href="{{ url('/services') }}">Services</a><span class="sep">/</span>
                <span class="current">{{ $service['title'] }}</span>
            </nav>

            <div class="detail-grid">
                <div>
                    <x-section-header
                        eyebrow="Service"
                        :title="$service['title']"
                        :intro="$service['short']"
                    />

                    <div class="fleet-card on-light mt-10" style="border:0;">
                        <div class="media">
                            <img
                                src="{{ asset('images/home/'.$service['image']) }}"
                                alt="{{ $service['title'] }}"
                                width="1200"
                                height="800"
                            >
                        </div>
                    </div>

                    <p style="margin-top:2rem;font-size:1rem;line-height:1.7;color:var(--muted-foreground);">
                        {{ $service['content'] }}
                    </p>

                    <h2 class="mt-14" style="font-size:1.75rem;">What's included</h2>
                    <ul class="check-list">
                        @foreach($service['bullets'] as $bullet)
                            <li>
                                <x-icon name="check" class="icon sm text-gold-deep" style="margin-top:.15rem;flex-shrink:0;" />
                                <span>{{ $bullet }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="stub-actions">
                        <a href="{{ url('/#book') }}" class="btn-gold">
                            Request a quote <x-icon name="arrow-right" class="icon sm" />
                        </a>
                        <a href="{{ config('site.phoneHref') }}" class="btn-ghost-dark">
                            {{ config('site.phone') }}
                        </a>
                    </div>
                </div>

                <aside class="sidebar-card">
                    <p class="eyebrow">Related services</p>
                    <ul>
                        @foreach($relatedServices as $relatedService)
                            <li>
                                <a href="{{ url('/services/'.$relatedService['slug']) }}">
                                    <span>{{ $relatedService['title'] }}</span>
                                    <x-icon name="arrow-right" class="icon sm" style="opacity:.4;" />
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</x-layouts.app>
