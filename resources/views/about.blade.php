    <x-layouts.app :title="$title" :description="$description">

    {{-- HERO --}}
    <section class="image-hero" style="min-height:620px;">
        <img
            src="{{ asset('images/home/hero-vienna.jpg') }}"
            alt="Europe Chauffeur luxury chauffeur service in Vienna"
            width="1920"
            height="1280"
        >
        <div class="veil"></div>

        <div class="container-lux content">
            <p class="eyebrow on-dark">About Europe Chauffeur</p>

            <h1 style="max-width:850px;">
                More Than a Ride.
                <span class="italic text-gold" style="display:block;">
                    A Journey Crafted for You.
                </span>
            </h1>

            <p style="max-width:720px;margin-top:1.5rem;color:rgba(255,255,255,.82);font-size:1.05rem;line-height:1.8;">
                Based in Vienna, Austria, Europe Chauffeur provides premium chauffeur-driven
                travel for airport transfers, business journeys, private tours and
                multi-country trips across Europe.
            </p>

            <div class="stub-actions" style="margin-top:2rem;">
                <a href="{{ route('contact') }}#book" class="btn-gold">
                    Book Your Journey
                    <x-icon name="arrow-right" class="icon sm" />
                </a>

                <a href="{{ route('services.index') }}" class="btn-ghost-light">
                    Explore Services
                </a>
            </div>
        </div>
    </section>


    {{-- WHO WE ARE --}}
    <section class="section">
        <div class="container-lux detail-grid" style="grid-template-columns:1fr 1fr;align-items:center;">

            <div>
                <x-section-header
                    eyebrow="Who We Are"
                    title="Luxury travel, made simple."
                    intro="Every journey should feel comfortable, reliable and personal from the moment you book until the moment you arrive."
                />

                <div style="margin-top:2rem;display:grid;gap:1.25rem;color:var(--muted-foreground);line-height:1.8;font-size:1rem;">
                    <p>
                        Europe Chauffeur is based in Vienna and serves travellers across
                        Austria and Europe. We bring together professional chauffeurs,
                        premium luxury veichless and personal travel planning to
                        make each journey smooth from start to finish.
                    </p>

                    <p>
                        Whether you are arriving at Vienna International Airport, travelling
                        between business meetings, exploring Europe with your family, or
                        planning a multi-city itinerary, we shape the service around your
                        route, timing and travel needs.
                    </p>

                    <p>
                        Our focus is simple: arrive on time, travel in comfort, communicate
                        clearly and take care of the details that matter.
                    </p>
                </div>

                <div class="stub-actions" style="margin-top:2rem;">
                    <a href="{{ route('services.index') }}" class="btn-gold">
                        View Our Services
                        <x-icon name="arrow-right" class="icon sm" />
                    </a>
                </div>
            </div>

            <div class="fleet-card on-light" style="border:0;">
                <div class="media" style="min-height:520px;">
                    <img
                        src="{{ asset('images/home/Private Chauffeur.webp') }}"
                        alt="Private chauffeur service by Europe Chauffeur"
                        loading="lazy"
                        width="1200"
                        height="900"
                        style="width:100%;height:100%;min-height:520px;object-fit:cover;"
                    >
                </div>
            </div>

        </div>
    </section>


    {{-- TRUST NUMBERS --}}
    <section class="trust-bar">
        <div class="container-lux trust-grid">

            <div class="trust-item">
                <div class="num">12+</div>
                <div class="label">Years of experience</div>
            </div>

            <div class="trust-item">
                <div class="num">20+</div>
                <div class="label">European countries served</div>
            </div>

            <div class="trust-item">
                <div class="num">4.9★</div>
                <div class="label">Average client rating</div>
            </div>

            <div class="trust-item">
                <div class="num">24/7</div>
                <div class="label">Concierge availability</div>
            </div>

        </div>
    </section>


    {{-- VALUES --}}
    <section class="section bg-card border-y">
        <div class="container-lux">

            <x-section-header
                eyebrow="What Defines Us"
                title="The details behind every journey."
                intro="Good chauffeur service is not only about the car. It is about timing, comfort, care and knowing that every detail has been considered."
                align="center"
            />

            <div class="pillars" style="margin-top:3.5rem;">

                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="award" class="icon md text-gold-deep" />
                        </div>
                        <h3>Professional Chauffeurs</h3>
                    </div>
                    <p>Vetted, uniformed and discreet chauffeurs with English-speaking service as standard.</p>
                </div>

                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="sparkles" class="icon md text-gold-deep" />
                        </div>
                        <h3>Luxury Mercedes Fleet</h3>
                    </div>
                    <p>Executive sedans and premium vans maintained for a quiet, clean and comfortable journey.</p>
                </div>

                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="shield-check" class="icon md text-gold-deep" />
                        </div>
                        <h3>Clear Fixed Pricing</h3>
                    </div>
                    <p>Transparent, all-inclusive quotes with no surprises around tolls, fuel or waiting time.</p>
                </div>

                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="plane" class="icon md text-gold-deep" />
                        </div>
                        <h3>Flight Monitoring</h3>
                    </div>
                    <p>Airport pickups can be adjusted around delays or early arrivals for a smoother welcome.</p>
                </div>

                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="heart-handshake" class="icon md text-gold-deep" />
                        </div>
                        <h3>Personal Service</h3>
                    </div>
                    <p>From child seats to multi-stop routes, the journey is planned around your needs.</p>
                </div>

                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="globe2" class="icon md text-gold-deep" />
                        </div>
                        <h3>Pan-European Coverage</h3>
                    </div>
                    <p>Vienna is our home, with chauffeur journeys available across major European destinations.</p>
                </div>

            </div>
        </div>
    </section>


    {{-- VIENNA & BEYOND --}}
    <section class="section">
        <div class="container-lux detail-grid" style="grid-template-columns:1fr 1fr;align-items:center;">

            <div class="fleet-card on-light" style="border:0;">
                <div class="media" style="min-height:500px;">
                    <img
                        src="{{ asset('images/home/Customized Tours.webp') }}"
                        alt="Customized chauffeur tours across Europe"
                        loading="lazy"
                        width="1200"
                        height="900"
                        style="width:100%;height:100%;min-height:500px;object-fit:cover;"
                    >
                </div>
            </div>

            <div>
                <x-section-header
                    eyebrow="Vienna & Beyond"
                    title="Vienna is home. Europe is within reach."
                    intro="From city transfers to long-distance journeys, we help you move through Europe without turning the journey into another thing to manage."
                />

                <div style="margin-top:2rem;display:grid;gap:1.25rem;color:var(--muted-foreground);line-height:1.8;">
                    <p>
                        Our chauffeurs regularly connect Vienna with destinations such as
                        Salzburg, Hallstatt, Prague, Budapest, Munich, Venice and Rome.
                    </p>

                    <p>
                        For longer travel, we can support multi-city and cross-border
                        itineraries with route planning, flexible timing and one
                        comfortable chauffeur-driven experience.
                    </p>
                </div>

                <div class="stub-actions" style="margin-top:2rem;">
                    <a href="{{ route('destinations.index') }}" class="btn-gold">
                        Explore Destinations
                        <x-icon name="arrow-right" class="icon sm" />
                    </a>

                    <a href="{{ route('contact') }}" class="btn-ghost-dark">
                        Speak With Us
                    </a>
                </div>
            </div>

        </div>
    </section>


    {{-- FLEET PREVIEW --}}
    {{-- <section class="section bg-obsidian">
        <div class="container-lux">

            <x-section-header
                eyebrow="The Fleet"
                title="luxury veichlecomfort for every kind of journey."
                intro="Choose from executive sedans and spacious premium vans, with the right balance of comfort, luggage space and passenger capacity."
                tone="light"
            />

            <div class="card-grid cols-2" style="margin-top:3.5rem;">

                @foreach(config('site.fleet', []) as $v)
                    @php
                        $fleetImage = config('site.fleet_images.' . $v['slug'], 'e-class.jpg');
                    @endphp

                    <a href="{{ route('fleet.show', ['vehicle' => $v['slug']]) }}" class="fleet-card">
                        <div class="media">
                            <img
                                src="{{ asset('images/fleet/' . $fleetImage) }}"
                                alt="{{ $v['name'] }} chauffeur vehicle"
                                loading="lazy"
                                width="1200"
                                height="800"
                            >
                        </div>

                        <div class="body">
                            <div>
                                <p class="eyebrow">{{ $v['class'] }}</p>
                                <h3 class="text-ivory">{{ $v['name'] }}</h3>
                            </div>

                            <div class="fleet-specs text-ivory">
                                <span>
                                    <x-icon name="users" class="icon sm text-gold" />
                                    {{ $v['pax'] }} pax
                                </span>

                                <span>
                                    <x-icon name="badge-check" class="icon sm text-gold" />
                                    {{ $v['luggage'] }} bags
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

            <div class="flex justify-center" style="margin-top:2rem;">
                <a href="{{ route('fleet.index') }}" class="btn-ghost-light">
                    Explore the Fleet
                    <x-icon name="arrow-right" class="icon sm" />
                </a>
            </div>

        </div>
    </section> --}


    {{-- FINAL CTA --}}
    <section class="cta-band section">
        <div class="glow"></div>

        <div class="container-lux inner">
            <p class="eyebrow on-dark">Travel With Europe Chauffeur</p>

            <h2>Your journey deserves the same care as your destination.</h2>

            <p class="sub">
                Tell us where you are going and how you would like to travel.
                Our reservation team is available around the clock.
            </p>

            <div class="actions">
                <a href="{{ route('contact') }}#book" class="btn-gold">
                    Request a Booking
                    <x-icon name="arrow-right" class="icon sm" />
                </a>

                <a href="{{ config('site.phoneHref') }}" class="btn-ghost-light">
                    <x-icon name="phone" class="icon sm" />
                    {{ config('site.phone') }}
                </a>

                <a
                    href="{{ config('site.whatsappUrl') }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-ghost-light"
                >
                    WhatsApp
                </a>
            </div>

            <div class="meta">
                <span>
                    <x-icon name="mappin" class="icon sm text-gold" />
                    Based in Vienna, Austria
                </span>

                <span>
                    <x-icon name="clock" class="icon sm text-gold" />
                    Available 24 / 7
                </span>
            </div>
        </div>
    </section>

</x-layouts.app>
