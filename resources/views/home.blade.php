<x-layouts.app :title="$title" :description="$description">

    {{-- ============================== HERO ============================== --}}
    <section class="hero">
        <div class="hero-media">
            <img src="{{ asset('images/home/hero-vienna.jpg') }}"
                 alt="Black Mercedes-Benz S-Class chauffeur car at the Vienna State Opera at dusk"
                 width="1920" height="1280">
        </div>
        <div class="hero-veil"></div>

        <div class="container-lux hero-content">
            <div class="hero-grid">
                <div class="hero-text">
                    <h1>
                        Luxury Chauffeur
                        <span class="italic text-gold" style="display:block;">Services Across Europe & Airport Transfers in Vienna</span>
                        <span style="display:block;">&amp; in Vienna.</span>
                        {{-- <span class="italic text-gold" style="display:block;">Services in Vienna</span>
                        <span style="display:block;">&amp; Across Europe.</span> --}}
                    </h1>
                    <p class="lead">
                        Travel Europe in Comfort & Style Europe Chauffeur Based in Vienna, Austria, we provide premium chauffeur services airport transfers vienna, private tours, and tailor-made journeys across Europe with professional drivers and luxury vehicles—ensuring comfort, reliability, and exceptional service every step of the way.
                    </p>
                    <div class="hero-cta">
                        <a href="#book" class="btn-gold">Book Now <x-icon name="arrow-right" class="icon sm" /></a>
                        <a href="{{ url('/services') }}" class="btn-ghost-light">Explore Services</a>
                        <a href="{{ config('site.whatsappUrl') }}" target="_blank" rel="noopener noreferrer" class="btn-ghost-light">WhatsApp Us</a>
                    </div>
                    <div class="hero-badges">
                        <span><x-icon name="shield-check" class="icon sm text-gold" /> Fixed Pricing</span>
                        <span><x-icon name="clock" class="icon sm text-gold" /> 24 / 7 Concierge</span>
                        <span><x-icon name="plane" class="icon sm text-gold" /> Flight Monitoring</span>
                    </div>
                </div>

                <div>
                    <x-booking-widget variant="overlay" :fleet="$fleet" />
                </div>
            </div>
        </div>
    </section>

    {{-- ============================== TRUST BAR ============================== --}}
    <section class="trust-bar">
        <div class="container-lux trust-grid">
            @foreach($trust as $i)
                <div class="trust-item">
                    <div class="num">{{ $i['k'] }}</div>
                    <div class="label">{{ $i['l'] }}</div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ============================== SERVICES ============================== --}}
    <section class="section">
        <div class="container-lux">
            <div class="section-top section-new">
                <x-section-header eyebrow="Chauffeur Services" title="Every journey, curated with precision."
                    intro="From wheels-down at Vienna International to a private tour of the Alps, each service is delivered by a professional chauffeur in an immaculate luxury vehicle — always on time, always discreet." />
                {{-- <div class="flex justify-end">
                    <a href="{{ url('/services') }}" class="btn-ghost-dark">View all services <x-icon name="arrow-right" class="icon sm" /></a>
                </div> --}}
            </div>

            <div class="card-grid cols-4">
                @foreach($services as $idx => $s)
                    <a href="{{ url('/services/'.$s['slug']) }}" class="tile">
                        @if(isset($serviceImages[$s['slug']]))
                            <div class="tile-media">
                                <img src="{{ asset('images/home/'.$serviceImages[$s['slug']]) }}" alt="{{ $s['title'] }}" loading="lazy" width="1200" height="900">
                            </div>
                        @else
                            <div class="tile-media" style="display:grid;place-items:center;">
                                <x-icon name="sparkles" class="icon lg text-gold" />
                            </div>
                        @endif
                        <div class="tile-body">
                            <p class="eyebrow">0{{ $idx + 1 }}</p>
                            <h3>{{ $s['title'] }}</h3>
                            <p>{{ $s['short'] }}</p>
                            <span class="tile-link">Learn more <x-icon name="arrow-right" class="icon sm" /></span>
                        </div>
                    </a>
                @endforeach
               
            </div>
            <div class="flex justify-center" style="
    margin-top: 20px;
">
                    <a href="{{ url('/services') }}" class="btn-ghost-dark">View all services <x-icon name="arrow-right" class="icon sm" /></a>
                </div>
        </div>
    </section>

    {{-- ============================== FLEET ============================== --}}
    <section class="section bg-obsidian">
        <div class="container-lux">
            <div class="section-top section-new">
                <x-section-header eyebrow="The Fleet" title="An exclusively Mercedes-Benz fleet." tone="light"
                    intro="Meticulously maintained, immaculately presented, and refreshed on a rolling schedule. Choose the vehicle that fits your journey — sedan, first-class, or luxury van." />
                {{-- <div class="flex justify-end">
                    <a href="{{ url('/fleet') }}" class="btn-ghost-light">Explore the fleet <x-icon name="arrow-right" class="icon sm" /></a>
                </div> --}}
            </div>

            <div class="card-grid cols-2">
                @php $fleetImages = ['mercedes-e-class' => 'e-class.jpg','mercedes-s-class' => 's-class.jpg','mercedes-v-class' => 'v-class.jpg','mercedes-vito' => 'vito.jpg']; @endphp
                @foreach($fleet as $v)
                    <a href="{{ url('/fleet/'.$v['slug']) }}" class="fleet-card">
                        <div class="media">
                            <img src="{{ asset('images/fleet/'.$fleetImages[$v['slug']]) }}" alt="{{ $v['name'] }} chauffeur vehicle" loading="lazy" width="1200" height="800">
                        </div>
                        <div class="body">
                            <div>
                                <p class="eyebrow">{{ $v['class'] }}</p>
                                <h3 class="text-ivory">{{ $v['name'] }}</h3>
                            </div>
                            <div class="fleet-specs text-ivory">
                                <span><x-icon name="users" class="icon sm text-gold" /> {{ $v['pax'] }} pax</span>
                                <span><x-icon name="badge-check" class="icon sm text-gold" /> {{ $v['luggage'] }} bags</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
             <div class="flex justify-center mt-3">
                    <a href="{{ url('/fleet') }}" class="btn-ghost-light">Explore the fleet <x-icon name="arrow-right" class="icon sm" /></a>
                </div>
        </div>
    </section>

    {{-- ============================== DESTINATIONS ============================== --}}
    <section class="section">
        <div class="container-lux">
            <div class="section-top section-new">
                <x-section-header eyebrow="Destinations" title="From Vienna to every European capital."
                    intro="Cross-border chauffeur transfers to Salzburg, Prague, Budapest, Munich, Zurich, Venice and beyond — handled by drivers who know the routes, the tolls and the shortcuts." />
                {{-- <div class="flex justify-center mt-3">
                    <a href="{{ url('/destinations') }}" class="btn-ghost-dark">All destinations <x-icon name="arrow-right" class="icon sm" /></a>
                </div> --}}
            </div>

            <div class="card-grid cols-4">
                @foreach($destinationCards as $d)
                    <a href="{{ url('/destinations/'.$d['slug']) }}" class="dest-card">
                        <img src="{{ asset('images/destinations/'.$d['img']) }}" alt="{{ $d['name'] }}, {{ $d['country_label'] }} — chauffeur transfers" loading="lazy" width="1000" height="1200">
                        <div class="veil"></div>
                        <div class="info">
                            <p class="eyebrow">{{ $d['country_label'] }}</p>
                            <h3>{{ $d['name'] }}</h3>
                            <span class="link">Chauffeur transfers <x-icon name="arrow-right" class="icon sm" /></span>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex justify-center mt-3">
                    <a href="{{ url('/destinations') }}" class="btn-ghost-dark">All destinations <x-icon name="arrow-right" class="icon sm" /></a>
                </div>
        </div>
    </section>

    {{-- ============================== WHY CHOOSE US ============================== --}}
    <section class="section bg-card border-y">
        <div class="container-lux">
            <x-section-header eyebrow="Why Europe Chauffeur" title="The details that make luxury travel effortless."
                intro="Fine service is felt, not announced. Nine principles guide every journey we deliver." align="center" />

            <div class="pillars">
                @foreach($pillars as $p)
                    <div class="pillar">
                        <div class="pillar-head">
                            <div class="pillar-icon"><x-icon :name="$p['icon']" class="icon md text-gold-deep" /></div>
                            <h3>{{ $p['title'] }}</h3>
                        </div>
                        <p>{{ $p['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================== TESTIMONIALS ============================== --}}
    <section class="section">
        <div class="container-lux">
            <x-section-header eyebrow="Client Voices" title="Trusted by executives, families and VIP travellers."
                intro="A selection of recent guest experiences with Europe Chauffeur." align="center" />

            <div class="card-grid cols-3">
                @foreach($testimonials as $t)
                    <figure class="testimonial">
                        <div class="stars">
                            @for($i = 0; $i < 5; $i++)
                                <x-icon name="star" class="icon sm" style="fill:currentColor;" />
                            @endfor
                        </div>
                        <blockquote>&ldquo;{{ $t['quote'] }}&rdquo;</blockquote>
                        <figcaption>
                            <div class="name">{{ $t['name'] }}</div>
                            <div class="role">{{ $t['role'] }}</div>
                        </figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================== FAQ ============================== --}}
    <section class="section bg-card border-y">
        <div class="container-lux" style="display:grid;gap:3.5rem;">
            <div class="section-top section-new" style="align-items:start;">
                <div>
                    <x-section-header eyebrow="Frequently Asked" title="Answers, before you ask."
                        intro="Everything you need to know before booking your chauffeur in Vienna or across Europe." />
                    <a href="{{ url('/faq') }}" class="btn-ghost-dark" style="margin-top:2rem;display:inline-flex;">All FAQs <x-icon name="arrow-right" class="icon sm" /></a>
                </div>
                <div class="faq-list">
                    @foreach($homeFaqs as $f)
                        <details class="faq-item">
                            <summary>
                                <span class="q">{{ $f['q'] }}</span>
                                <span class="plus">+</span>
                            </summary>
                            <p class="answer">{{ $f['a'] }}</p>
                        </details>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ============================== CTA BAND ============================== --}}
    <section class="cta-band section">
        <div class="glow"></div>
        <div class="container-lux inner">
            <p class="eyebrow on-dark">Reserve your journey</p>
            <h2>Ready to experience Europe in first-class comfort?</h2>
            <p class="sub">Our reservation team is available around the clock. Request a quote online, or reach us directly by phone or WhatsApp.</p>
            <div class="actions">
                <a href="#book" class="btn-gold">Book Now <x-icon name="arrow-right" class="icon sm" /></a>
                <a href="{{ config('site.phoneHref') }}" class="btn-ghost-light"><x-icon name="phone" class="icon sm" /> {{ config('site.phone') }}</a>
                <a href="{{ config('site.whatsappUrl') }}" target="_blank" rel="noopener noreferrer" class="btn-ghost-light">WhatsApp</a>
            </div>
            <div class="meta">
                <span><x-icon name="mappin" class="icon sm text-gold" /> Based in Vienna, Austria</span>
                <span><x-icon name="clock" class="icon sm text-gold" /> Available 24 / 7</span>
            </div>
        </div>
    </section>

</x-layouts.app>
