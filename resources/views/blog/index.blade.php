<x-layouts.app :title="$title" :description="$description">

    <style>
        .blog-featured {
            display:grid;
            grid-template-columns:1.2fr 1fr;
            background:#fff;
            border:1px solid var(--border);
            overflow:hidden;
        }

        .blog-featured-media {
            min-height:480px;
        }

        .blog-featured-media img {
            width:100%;
            height:100%;
            min-height:480px;
            object-fit:cover;
        }

        .blog-featured-body {
            padding:3.5rem;
            display:flex;
            flex-direction:column;
            justify-content:center;
        }

        .blog-meta {
            display:flex;
            gap:.8rem;
            align-items:center;
            flex-wrap:wrap;
            color:var(--muted-foreground);
            font-size:.78rem;
            margin-top:1rem;
        }

        .blog-dot {
            width:3px;
            height:3px;
            border-radius:50%;
            background:var(--gold);
        }

        .blog-grid {
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:1.5rem;
            margin-top:3rem;
        }

        .blog-card {
            background:#fff;
            border:1px solid var(--border);
            overflow:hidden;
            transition:transform .3s ease, box-shadow .3s ease;
        }

        .blog-card:hover {
            transform:translateY(-5px);
            box-shadow:var(--shadow-lift);
        }

        .blog-card-media {
            aspect-ratio:16/10;
            overflow:hidden;
        }

        .blog-card-media img {
            width:100%;
            height:100%;
            object-fit:cover;
            transition:transform .5s ease;
        }

        .blog-card:hover .blog-card-media img {
            transform:scale(1.03);
        }

        .blog-card-body {
            padding:1.75rem;
        }

        .blog-card h3 {
            margin-top:.8rem;
            font-size:1.55rem;
            line-height:1.15;
        }

        .blog-card p {
            margin-top:1rem;
            color:var(--muted-foreground);
            font-size:.92rem;
            line-height:1.7;
        }

        .blog-read {
            display:inline-flex;
            align-items:center;
            gap:.45rem;
            margin-top:1.4rem;
            font-size:.78rem;
            font-weight:600;
            color:var(--gold-deep);
            text-transform:uppercase;
            letter-spacing:.08em;
        }

        @media (max-width: 991px) {
            .blog-featured {
                grid-template-columns:1fr;
            }

            .blog-featured-media,
            .blog-featured-media img {
                min-height:360px;
            }

            .blog-grid {
                grid-template-columns:repeat(2, 1fr);
            }
        }

        @media (max-width: 767px) {
            .blog-featured-body {
                padding:2rem 1.5rem;
            }

            .blog-featured-body h2 {
                font-size:2rem !important;
            }

            .blog-grid {
                grid-template-columns:1fr;
            }
        }
    </style>


    {{-- HERO --}}
    <section class="image-hero" style="min-height:540px;">
        <img
            src="{{ asset('images/home/hero-vienna.jpg') }}"
            alt="Europe Chauffeur travel journal"
            width="1920"
            height="1280"
        >

        <div class="veil"></div>

        <div class="container-lux content">
            <p class="eyebrow on-dark">The Journal</p>

            <h1 style="max-width:850px;">
                Travel ideas, guides
                <span class="italic text-gold" style="display:block;">
                    and chauffeur insights.
                </span>
            </h1>

            <p style="
                max-width:720px;
                margin-top:1.5rem;
                color:rgba(255,255,255,.82);
                font-size:1.05rem;
                line-height:1.8;
            ">
                Explore Vienna and Europe with practical travel guides,
                destination ideas and chauffeur travel advice.
            </p>
        </div>
    </section>


    {{-- FEATURED POST --}}
    @if($featured)
        <section class="section">
            <div class="container-lux">

                <x-section-header
                    eyebrow="Featured"
                    title="From the Journal"
                    intro="Travel notes and ideas for your next journey."
                />

                <a
                    href="{{ route('blog.show', ['slug' => $featured['slug']]) }}"
                    class="blog-featured"
                    style="margin-top:3rem;"
                >
                    <div class="blog-featured-media">
                        <img
                            src="{{ asset($featured['image']) }}"
                            alt="{{ $featured['title'] }}"
                            width="1200"
                            height="900"
                        >
                    </div>

                    <div class="blog-featured-body">

                        <p class="eyebrow">
                            {{ $featured['category'] }}
                        </p>

                        <h2 style="
                            margin-top:1rem;
                            font-size:2.75rem;
                            line-height:1.08;
                        ">
                            {{ $featured['title'] }}
                        </h2>

                        <p style="
                            margin-top:1.4rem;
                            color:var(--muted-foreground);
                            line-height:1.8;
                        ">
                            {{ $featured['excerpt'] }}
                        </p>

                        <div class="blog-meta">
                            <span>{{ $featured['date'] }}</span>
                            <span class="blog-dot"></span>
                            <span>{{ $featured['read_time'] }}</span>
                        </div>

                        <span class="blog-read">
                            Read Article
                            <x-icon name="arrow-right" class="icon sm" />
                        </span>

                    </div>
                </a>

            </div>
        </section>
    @endif


    {{-- ALL POSTS --}}
    <section class="section bg-card border-y">
        <div class="container-lux">

            <x-section-header
                eyebrow="Latest Articles"
                title="Plan the journey before you travel."
                intro="Guides for airport transfers, business travel, private chauffeur journeys and destinations across Europe."
                align="center"
            />

            <div class="blog-grid">

                @foreach($posts as $post)

                    <article class="blog-card">

                        <a
                            href="{{ route('blog.show', ['slug' => $post['slug']]) }}"
                            class="blog-card-media"
                            style="display:block;"
                        >
                            <img
                                src="{{ asset($post['image']) }}"
                                alt="{{ $post['title'] }}"
                                loading="lazy"
                                width="900"
                                height="600"
                            >
                        </a>

                        <div class="blog-card-body">

                            <p class="eyebrow">
                                {{ $post['category'] }}
                            </p>

                            <h3>
                                <a href="{{ route('blog.show', ['slug' => $post['slug']]) }}">
                                    {{ $post['title'] }}
                                </a>
                            </h3>

                            <p>
                                {{ $post['excerpt'] }}
                            </p>

                            <div class="blog-meta">
                                <span>{{ $post['date'] }}</span>
                                <span class="blog-dot"></span>
                                <span>{{ $post['read_time'] }}</span>
                            </div>

                            <a
                                href="{{ route('blog.show', ['slug' => $post['slug']]) }}"
                                class="blog-read"
                            >
                                Read Article
                                <x-icon name="arrow-right" class="icon sm" />
                            </a>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>
    </section>


    {{-- CTA --}}
    <section class="cta-band section">
        <div class="glow"></div>

        <div class="container-lux inner">

            <p class="eyebrow on-dark">Plan Your Journey</p>

            <h2>
                Have a destination in mind?
            </h2>

            <p class="sub">
                Tell our reservation team where you want to go and
                we will help arrange your chauffeur journey.
            </p>

            <div class="actions">

                <a href="{{ route('contact') }}#book" class="btn-gold">
                    Request a Booking
                    <x-icon name="arrow-right" class="icon sm" />
                </a>

                <a href="{{ route('destinations.index') }}" class="btn-ghost-light">
                    Explore Destinations
                </a>

            </div>

        </div>
    </section>

</x-layouts.app>
