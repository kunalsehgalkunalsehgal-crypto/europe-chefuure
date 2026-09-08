<x-layouts.app :title="$title">

    <section class="section">
        <div class="container-lux">

            <x-section-header
                :eyebrow="$eyebrow"
                :title="$pageTitle"
                :intro="$intro"
            />

            <div class="faq-list">

                @foreach($faqs as $f)

                    <details class="faq-item">
                        <summary>
                            <span class="q">{{ $f['q'] }}</span>
                            <span class="plus">+</span>
                        </summary>

                        <p class="answer">
                            {{ $f['a'] }}
                        </p>
                    </details>

                @endforeach

            </div>

        </div>
    </section>

</x-layouts.app>