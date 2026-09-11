<x-layouts.app :title="$title" :description="$description">

    {{-- HERO --}}
    <section class="image-hero" style="min-height:620px;">
        <img
            src="{{ asset('images/home/hero-vienna.jpg') }}"
            alt="Europe Chauffeur client reviews and luxury chauffeur service"
            width="1920"
            height="1280"
        >

        <div class="veil"></div>

        <div class="container-lux content">
            <p class="eyebrow on-dark">Client Reviews</p>

            <h1 style="max-width:850px;">
                Trusted by travellers
                <span class="italic text-gold" style="display:block;">
                    across Europe.
                </span>
            </h1>

            <p style="
                max-width:700px;
                margin-top:1.5rem;
                color:rgba(255,255,255,.82);
                font-size:1.05rem;
                line-height:1.8;
            ">
                From airport arrivals to multi-country journeys, our clients value
                reliable service, professional chauffeurs and comfortable travel.
            </p>

            <div class="stub-actions" style="margin-top:2rem;">
                <a href="{{ route('contact') }}#book" class="btn-gold">
                    Book Your Journey
                    <x-icon name="arrow-right" class="icon sm" />
                </a>
            </div>
        </div>
    </section>


    {{-- RATING BAR --}}
    <section class="trust-bar">
        <div class="container-lux trust-grid">

            <div class="trust-item">
                <div class="num">4.9★</div>
                <div class="label">Average client rating</div>
            </div>

            <div class="trust-item">
                <div class="num">12+</div>
                <div class="label">Years of experience</div>
            </div>

            <div class="trust-item">
                <div class="num">20+</div>
                <div class="label">European countries served</div>
            </div>

            <div class="trust-item">
                <div class="num">24/7</div>
                <div class="label">Concierge availability</div>
            </div>

        </div>
    </section>


    {{-- REVIEWS CAROUSEL --}}
    <section class="section">
        <div class="container-lux">

            <x-section-header
                eyebrow="Client Voices"
                title="What our guests say."
                intro="A selection of client experiences with Europe Chauffeur."
                align="center"
            />

            <div class="reviews-carousel" data-reviews-carousel>

                <button
                    type="button"
                    class="review-arrow review-prev"
                    aria-label="Previous review"
                    data-review-prev
                >
                    {{-- &#8249; --}}
                    <i class="fa-solid fa-circle-arrow-left"></i>
                </button>

                <div class="reviews-viewport">
                    <div class="reviews-track" data-review-track>

                        @foreach($reviews as $review)

                            <div class="review-slide">

                                <figure class="testimonial">

                                    <div class="stars">
                                        @for($i = 0; $i < 5; $i++)
                                            <x-icon
                                                name="star"
                                                class="icon sm"
                                                style="fill:currentColor;"
                                            />
                                        @endfor
                                    </div>

                                    <blockquote>
                                        &ldquo;{{ $review['quote'] }}&rdquo;
                                    </blockquote>

                                    <figcaption>
                                        <div class="name">
                                            {{ $review['name'] }}
                                        </div>

                                        <div class="role">
                                            {{ $review['role'] }}
                                        </div>
                                    </figcaption>

                                </figure>

                            </div>

                        @endforeach

                    </div>
                </div>

                <button
                    type="button"
                    class="review-arrow review-next"
                    aria-label="Next review"
                    data-review-next
                >
                    {{-- &#8250; --}}
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </button>

                <div class="review-dots" data-review-dots></div>

            </div>

        </div>
    </section>


    {{-- WHY CLIENTS CHOOSE US --}}
    <section class="section bg-card border-y">
        <div class="container-lux">

            <x-section-header
                eyebrow="Why Clients Choose Us"
                title="Service that feels effortless."
                intro="The details our clients value most are the same details we focus on every day."
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

                    <p>
                        Vetted, uniformed and discreet chauffeurs with
                        English-speaking service as standard.
                    </p>
                </div>


                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="sparkles" class="icon md text-gold-deep" />
                        </div>
                        <h3>Luxury Mercedes Fleet</h3>
                    </div>

                    <p>
                        Clean, comfortable luxury veichless for
                        executive, private and group travel.
                    </p>
                </div>


                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="shield-check" class="icon md text-gold-deep" />
                        </div>
                        <h3>Clear Fixed Pricing</h3>
                    </div>

                    <p>
                        All-inclusive quotes with clear pricing and
                        no hidden surprises.
                    </p>
                </div>


                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="clock" class="icon md text-gold-deep" />
                        </div>
                        <h3>24 / 7 Support</h3>
                    </div>

                    <p>
                        Our reservation team is available around the clock
                        for bookings and travel changes.
                    </p>
                </div>


                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="plane" class="icon md text-gold-deep" />
                        </div>
                        <h3>Flight Monitoring</h3>
                    </div>

                    <p>
                        Airport pickup times can adjust around flight delays
                        or early arrivals.
                    </p>
                </div>


                <div class="pillar">
                    <div class="pillar-head">
                        <div class="pillar-icon">
                            <x-icon name="heart-handshake" class="icon md text-gold-deep" />
                        </div>
                        <h3>Personal Service</h3>
                    </div>

                    <p>
                        Every journey is planned around the passenger,
                        route and travel needs.
                    </p>
                </div>

            </div>

        </div>
    </section>


    {{-- STANDARD --}}
    <section class="section">
        <div class="container-lux">

            <div style="max-width:900px;margin:0 auto;text-align:center;">

                <p class="eyebrow">
                    The Europe Chauffeur Standard
                </p>

                <h2 style="
                    margin-top:1rem;
                    font-size:clamp(2rem,4vw,3.5rem);
                ">
                    Reliable from booking to drop-off.
                </h2>

                <div
                    class="gold-rule"
                    style="margin:1.5rem auto 0;"
                ></div>

                <p style="
                    max-width:720px;
                    margin:2rem auto 0;
                    color:var(--muted-foreground);
                    line-height:1.8;
                    font-size:1rem;
                ">
                    Whether the journey is a short airport transfer or a
                    multi-day European itinerary, our aim is the same:
                    professional service, clear communication and a smooth
                    experience from start to finish.
                </p>

            </div>

        </div>
    </section>


    {{-- FINAL CTA --}}
    <section class="cta-band section">
        <div class="glow"></div>

        <div class="container-lux inner">

            <p class="eyebrow on-dark">
                Your Journey Starts Here
            </p>

            <h2>
                Ready to travel with Europe Chauffeur?
            </h2>

            <p class="sub">
                Request your chauffeur booking online or speak directly
                with our reservation team.
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

                <a
                    href="{{ config('site.whatsappUrl') }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-ghost-light"
                >
                    WhatsApp
                </a>

            </div>

        </div>
    </section>


    {{-- CUSTOM CAROUSEL JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const carousel = document.querySelector('[data-reviews-carousel]');

            if (!carousel) return;

            const track = carousel.querySelector('[data-review-track]');
            const slides = Array.from(track.querySelectorAll('.review-slide'));
            const prevButton = carousel.querySelector('[data-review-prev]');
            const nextButton = carousel.querySelector('[data-review-next]');
            const dotsContainer = carousel.querySelector('[data-review-dots]');

            if (!slides.length) return;

            let currentIndex = 0;
            let autoplayTimer = null;

            function visibleSlides() {
                return window.innerWidth <= 767 ? 1 : 2;
            }

            function maxIndex() {
                return Math.max(0, slides.length - visibleSlides());
            }

            function slideWidth() {
                if (!slides[0]) return 0;

                const slide = slides[0];
                const trackStyle = window.getComputedStyle(track);
                const gap = parseFloat(trackStyle.gap) || 0;

                return slide.getBoundingClientRect().width + gap;
            }

            function makeDots() {
                dotsContainer.innerHTML = '';

                const count = maxIndex() + 1;

                for (let i = 0; i < count; i++) {

                    const dot = document.createElement('button');

                    dot.type = 'button';
                    dot.className = 'review-dot';
                    dot.setAttribute('aria-label', 'Go to review ' + (i + 1));

                    dot.addEventListener('click', function () {
                        currentIndex = i;
                        updateCarousel();
                        restartAutoplay();
                    });

                    dotsContainer.appendChild(dot);
                }
            }

            function updateDots() {
                const dots = dotsContainer.querySelectorAll('.review-dot');

                dots.forEach(function (dot, index) {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }

            function updateButtons() {
                if (slides.length <= visibleSlides()) {
                    prevButton.style.display = 'none';
                    nextButton.style.display = 'none';
                    dotsContainer.style.display = 'none';
                    return;
                }

                prevButton.style.display = '';
                nextButton.style.display = '';
                dotsContainer.style.display = '';

                prevButton.disabled = currentIndex === 0;
                nextButton.disabled = currentIndex >= maxIndex();
            }

            function updateCarousel() {

                if (currentIndex > maxIndex()) {
                    currentIndex = maxIndex();
                }

                const move = currentIndex * slideWidth();

                track.style.transform = 'translateX(-' + move + 'px)';

                updateDots();
                updateButtons();
            }

            function nextSlide() {
                if (currentIndex >= maxIndex()) {
                    currentIndex = 0;
                } else {
                    currentIndex++;
                }

                updateCarousel();
            }

            function previousSlide() {
                if (currentIndex <= 0) {
                    currentIndex = maxIndex();
                } else {
                    currentIndex--;
                }

                updateCarousel();
            }

            function startAutoplay() {
                stopAutoplay();

                if (slides.length > visibleSlides()) {
                    autoplayTimer = setInterval(nextSlide, 5000);
                }
            }

            function stopAutoplay() {
                if (autoplayTimer) {
                    clearInterval(autoplayTimer);
                    autoplayTimer = null;
                }
            }

            function restartAutoplay() {
                startAutoplay();
            }

            nextButton.addEventListener('click', function () {
                nextSlide();
                restartAutoplay();
            });

            prevButton.addEventListener('click', function () {
                previousSlide();
                restartAutoplay();
            });

            carousel.addEventListener('mouseenter', stopAutoplay);
            carousel.addEventListener('mouseleave', startAutoplay);

            carousel.addEventListener('touchstart', stopAutoplay, {
                passive: true
            });

            carousel.addEventListener('touchend', startAutoplay, {
                passive: true
            });

            window.addEventListener('resize', function () {
                currentIndex = Math.min(currentIndex, maxIndex());
                makeDots();
                updateCarousel();
                restartAutoplay();
            });

            makeDots();
            updateCarousel();
            startAutoplay();
        });
    </script>

</x-layouts.app>
