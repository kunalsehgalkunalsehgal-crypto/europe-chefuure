<x-layouts.app :title="$title" :description="$description">
    <div class="page-hero">
        <div class="container-lux detail-grid" style="grid-template-columns: 1fr 1.2fr;">
            <div>
                <x-section-header eyebrow="Get in Touch" title="Speak with our concierge."
                    intro="Available 24 hours a day. Prefer to book instantly? Use the reservation form beside — we respond within 30 minutes." />

                <ul class="contact-list">
                    <li>
                        <span class="icon-box"><x-icon name="phone" class="icon sm text-gold-deep" /></span>
                        <div>
                            <div class="eyebrow">Phone &middot; WhatsApp</div>
                            <a href="{{ config('site.phoneHref') }}" class="big">{{ config('site.phone') }}</a>
                            <p style="margin-top:.25rem;font-size:.75rem;color:var(--muted-foreground);">Available 24 / 7</p>
                        </div>
                    </li>
                    <li>
                        <span class="icon-box"><x-icon name="mail" class="icon sm text-gold-deep" /></span>
                        <div>
                            <div class="eyebrow">Email</div>
                            <a href="{{ config('site.emailHref') }}" class="big" style="font-size:1.25rem;">{{ config('site.email') }}</a>
                        </div>
                    </li>
                    <li>
                        <span class="icon-box"><x-icon name="mappin" class="icon sm text-gold-deep" /></span>
                        <div>
                            <div class="eyebrow">Office</div>
                            <p style="margin-top:.5rem;">Vienna, Austria</p>
                            <p style="margin-top:.25rem;font-size:.75rem;color:var(--muted-foreground);">Serving all of Europe</p>
                        </div>
                    </li>
                </ul>
            </div>

            <x-booking-widget variant="panel" :fleet="$fleet" />
        </div>
    </div>
</x-layouts.app>
