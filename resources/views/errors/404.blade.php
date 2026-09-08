<x-layouts.app title="Page not found | Europe Chauffeur">
    <div class="flex items-center justify-center" style="min-height:100vh;padding:0 1rem;">
        <div class="max-w-md text-center">
            <p class="eyebrow">Error 404</p>
            <h1 class="mt-4" style="font-size:3.5rem;">Page not found</h1>
            <p class="mt-4" style="font-size:.9rem;color:var(--muted-foreground);">
                The page you're looking for has moved or no longer exists.
            </p>
            <a href="{{ url('/') }}" class="btn-gold mt-8" style="display:inline-flex;">Return home</a>
        </div>
    </div>
</x-layouts.app>
