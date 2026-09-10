<x-layouts.app :title="$title" :description="$description">

    <style>
        .article-shell {
            max-width:850px;
            margin:0 auto;
        }

        .article-meta {
            display:flex;
            justify-content:center;
            align-items:center;
            gap:.75rem;
            flex-wrap:wrap;
            color:var(--muted-foreground);
            font-size:.8rem;
            margin-top:1.25rem;
        }

        .article-meta-dot {
            width:3px;
            height:3px;
            background:var(--gold);
            border-radius:50%;
        }

        .article-cover {
            margin-top:3rem;
            border:1px solid var(--border);
            overflow:hidden;
        }

        .article-cover img {
            width:100%;
            max-height:560px;
            object-fit:cover;
        }

        .article-content {
            margin-top:3rem;
        }

        .article-content > p {
            font-size:1.05rem;
            line-height:1.9;
            color:#5f5d58;
        }

        .article-section {
            margin-top:3rem;
        }

        .article-section h2 {
            font-size:2rem;
            margin-bottom:1.25rem;
        }

        .article-section p {
            margin-top:1rem;
            font-size:1rem;
            line-height:1.9;
            color:var(--muted-foreground);
        }

        .article-note {
            margin-top:3rem;
            padding:1.5rem 1.75rem;
            background:var(--muted);
            border-left:3px solid var(--gold);
            color:#5f5d58;
            line-height:1.8;
        }

        .related-blog-grid {
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:1.5rem;
            margin-top:3rem;
        }

        .related-blog-card {
            background:#fff;
            border:1px solid var(--border);
            overflow:hidden;
        }

        .related-blog-card img {
            width:100%;
            aspect-ratio:16/10;
            object-fit:cover;
        }

        .related-blog-card-body {
            padding:1.4rem;
        }

        .related-blog-card h3 {
            margin-top:.65rem;
            font-size:1.35rem;
            line-height:1.2;
        }

        @media (max-width: 900px) {
            .related-blog-grid {
                grid-template-columns:1fr;
            }
        }
    </style>


    {{-- ARTICLE HERO --}}
    <section class="page-hero">
        <div class="container-lux">

            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">/</span>

                <a href="{{ route('blog') }}">Blog</a>
                <span class="sep">/</span>

                <span class="current">
                    {{ $post['category'] }}
                </span>
            </nav>


            <div class="article-shell" style="text-align:center;">

                <p class="eyebrow">
                    {{ $post['category'] }}
                </p>

                <h1 style="
                    margin-top:1rem;
                    font-size:clamp(2.5rem,5vw,4.6rem);
                    line-height:1.05;
                ">
                    {{ $post['title'] }}
                </h1>

                <p style="
                    max-width:700px;
                    margin:1.5rem auto 0;
                    color:var(--muted-foreground);
                    line-height:1.8;
                    font-size:1.02rem;
                ">
                    {{ $post['excerpt'] }}
                </p>

                <div class="article-meta">
                    <span>{{ $post['date'] }}</span>
                    <span class="article-meta-dot"></span>
                    <span>{{ $post['read_time'] }}</span>
                    <span class="article-meta-dot"></span>
                    <span>Europe Chauffeur</span>
                </div>

            </div>


            <div class="article-shell article-cover">
                <img
                    src="{{ asset($post['image']) }}"
                    alt="{{ $post['title'] }}"
                    width="1400"
                    height="900"
                >
            </div>

        </div>
    </section>


    {{-- ARTICLE CONTENT --}}
    <section class="section" style="padding-top:1rem;">
        <div class="container-lux">

            <article class="article-shell article-content">

                <p>
                    {{ $post['intro'] }}
                </p>


                @foreach($post['sections'] as $section)

                    <section class="article-section">

                        <h2>
                            {{ $section['title'] }}
                        </h2>

                        @foreach($section['body'] as $paragraph)
                            <p>
                                {{ $paragraph }}
                            </p>
                        @endforeach

                    </section>

                @endforeach


                <div class="article-note">
                    <strong style="color:var(--foreground);">
                        Planning this journey?
                    </strong>
                    Europe Chauffeur can arrange airport transfers, private chauffeur
                    hire, business travel and customised journeys from Vienna across Europe.
                </div>


                <div class="stub-actions" style="margin-top:2.5rem;">

                    <a href="{{ route('contact') }}#book" class="btn-gold">
                        Request a Booking
                        <x-icon name="arrow-right" class="icon sm" />
                    </a>

                    <a href="{{ route('blog') }}" class="btn-ghost-dark">
                        Back to Journal
                    </a>

                </div>

            </article>

        </div>
    </section>


    {{-- RELATED POSTS --}}
    @if(count($relatedPosts))
        <section class="section bg-card border-y">
            <div class="container-lux">

                <x-section-header
                    eyebrow="Keep Reading"
                    title="More from the Journal."
                    intro="More ideas for travelling through Vienna and Europe."
                    align="center"
                />

                <div class="related-blog-grid">

                    @foreach($relatedPosts as $related)

                        <article class="related-blog-card">

                            <a href="{{ route('blog.show', ['slug' => $related['slug']]) }}">
                                <img
                                    src="{{ asset($related['image']) }}"
                                    alt="{{ $related['title'] }}"
                                    loading="lazy"
                                    width="800"
                                    height="500"
                                >
                            </a>

                            <div class="related-blog-card-body">

                                <p class="eyebrow">
                                    {{ $related['category'] }}
                                </p>

                                <h3>
                                    <a href="{{ route('blog.show', ['slug' => $related['slug']]) }}">
                                        {{ $related['title'] }}
                                    </a>
                                </h3>

                                <a
                                    href="{{ route('blog.show', ['slug' => $related['slug']]) }}"
                                    class="tile-link"
                                    style="margin-top:1rem;"
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
    @endif


    {{-- CTA --}}
    <section class="cta-band section">
        <div class="glow"></div>

        <div class="container-lux inner">

            <p class="eyebrow on-dark">Europe Chauffeur</p>

            <h2>
                Ready to plan your next journey?
            </h2>

            <p class="sub">
                Request a chauffeur booking or speak with our reservation team.
            </p>

            <div class="actions">

                <a href="{{ route('contact') }}#book" class="btn-gold">
                    Request a Booking
                    <x-icon name="arrow-right" class="icon sm" />
                </a>

                <a
                    href="{{ config('site.phoneHref') }}"
                    class="btn-ghost-light"
                >
                    <x-icon name="phone" class="icon sm" />
                    {{ config('site.phone') }}
                </a>

            </div>

        </div>
    </section>

</x-layouts.app>
