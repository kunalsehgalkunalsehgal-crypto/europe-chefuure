@props(['eyebrow' => null, 'title', 'intro' => null, 'align' => 'left', 'tone' => 'dark'])

<div class="section-header section-header-new {{ $align === 'center' ? 'center' : '' }} {{ $tone === 'light' ? 'on-dark' : '' }}">
    @if($eyebrow)
        <p class="eyebrow {{ $tone === 'light' ? 'on-dark' : '' }}">{{ $eyebrow }}</p>
    @endif
    <h2>{{ $title }}</h2>
    <div class="gold-rule mx-auto {{ $align === 'center' ? 'center' : '' }}" style="margin-top: 0.75rem;"></div>
    @if($intro)
        <p class="intro">{{ $intro }}</p>
    @endif
</div>
