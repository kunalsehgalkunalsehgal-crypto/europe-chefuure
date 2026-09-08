<x-layouts.app :title="$title" :description="$intro">

    <div class="page-hero">
        <div class="container-lux max-w-3xl">

            <p class="eyebrow">
                {{ $eyebrow }}
            </p>

            <h1>
                {{ $pageTitle }}
            </h1>

            <div class="gold-rule" style="margin-top:1.5rem;"></div>

            <p style="margin-top:2rem;font-size:1.05rem;line-height:1.7;color:var(--muted-foreground);">
                {{ $intro }}
            </p>


            <div class="faq-list" style="margin-top:2.5rem;">

                @foreach($faqs as $f)

                    <details class="faq-item">

                        <summary>
                            <span class="q">
                                {{ $f['q'] }}
                            </span>

                            <span class="plus">+</span>
                        </summary>

                        <p class="answer">
                            {{ $f['a'] }}
                        </p>

                    </details>

                @endforeach

            </div>

        </div>
    </div>

</x-layouts.app>