<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Luxury Chauffeur Vienna & Europe | Airport Transfers | Europe Chauffeur' }}</title>
    <meta name="description" content="{{ $description ?? config('site.description') }}">
    <meta name="author" content="{{ config('site.name') }}">
    <meta name="theme-color" content="#141414">
    <meta property="og:site_name" content="{{ config('site.name') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? config('site.name') }}">
    <meta property="og:description" content="{{ $description ?? config('site.description') }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">
    {{-- <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
>
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/responsive-fix.css">
<link rel="stylesheet" href="/css/menu-responsive.css">
    @if(isset($schema))
        <script type="application/ld+json">{!! json_encode($schema) !!}</script>
    @endif
</head>
<body>
    <x-site-header />

    <main style="min-height:100vh;">
        {{ $slot }}
    </main>

    <x-site-footer />
    <x-floating-cta />
    
</body>
</html>
