<x-layouts.app :title="$title" :description="$intro">
    <div class="page-hero">
        <div class="container-lux max-w-3xl">
            <p class="eyebrow">{{ $eyebrow }}</p>
            <h1>{{ $pageTitle }}</h1>
            <div class="gold-rule " style="margin-top:1.5rem;"></div>
            <p style="margin-top:2rem;font-size:1.05rem;line-height:1.7;color:var(--muted-foreground);">{{ $intro }}</p>
            <p style="margin-top:1.5rem;font-size:.9rem;color:var(--muted-foreground);">
                This page is being crafted with the same attention as every journey we deliver.
                In the meantime, our reservation team is available around the clock — reach us on
                <a href="{{ config('site.phoneHref') }}" class="text-gold-deep">{{ config('site.phone') }}</a>
                or start a booking below.
            </p>
            <div class="stub-actions">
                <a href="{{ url('/#book') }}" class="btn-gold">Book a chauffeur <x-icon name="arrow-right" class="icon sm" /></a>
                <a href="{{ config('site.whatsappUrl') }}" target="_blank" rel="noopener noreferrer" class="btn-ghost-dark">WhatsApp</a>
            </div>
        </div>
    </div>
</x-layouts.app>
