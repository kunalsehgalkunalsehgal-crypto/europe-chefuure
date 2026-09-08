{{--
  Usage: <x-icon name="phone" class="icon md" />
  Replaces lucide-react icons with plain inline SVG (no dependency, no Tailwind).
--}}
@props(['name', 'class' => 'icon md'])

@php
$paths = [
    'phone' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>',
    'mail' => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/>',
    'mappin' => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
    'menu' => '<path d="M4 6h16M4 12h16M4 18h16"/>',
    'x' => '<path d="M18 6 6 18M6 6l12 12"/>',
    'arrow-right' => '<path d="M5 12h14M13 6l6 6-6 6"/>',
    'check' => '<path d="M20 6 9 17l-5-5"/>',
    'clock' => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
    'plane' => '<path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-1 .1-1.3.5l-.6.7c-.4.5-.2 1.2.3 1.5L9 12l-2 3H4l-1 2 3 1 1 3 2-1v-3l3-2 2.7 5.8c.3.5 1 .7 1.5.3l.7-.6c.4-.3.6-.8.5-1.3z"/>',
    'shield-check' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>',
    'users' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
    'badge-check' => '<path d="M12 2 9.5 4.5 6 4l-1 3.5L1.5 9l1.5 3-1.5 3L4 16.5 5 20l3.5-.5L11 22l1-2.5 2.5 2.5 1-2.5 3.5.5 1-3.5 3-1.5-1.5-3 1.5-3-3-1.5-1-3.5-3.5.5z"/><path d="m9 12 2 2 4-4"/>',
    'star' => '<path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.9L12 17.8 5.8 21l1.2-6.9-5-4.9 6.9-1z"/>',
    'award' => '<circle cx="12" cy="8" r="6"/><path d="M9.5 13.5 7 22l5-3 5 3-2.5-8.5"/>',
    'sparkles' => '<path d="M12 2v4M12 18v4M4.9 4.9l2.8 2.8M16.3 16.3l2.8 2.8M2 12h4M18 12h4M4.9 19.1l2.8-2.8M16.3 7.7l2.8-2.8"/>',
    'languages' => '<path d="M5 8h9M9 4v2M13 8a12 12 0 0 1-6 8M7 12a12 12 0 0 0 6 4"/><path d="m14 21 4-9 4 9M15.5 18h5"/>',
    'heart-handshake' => '<path d="M12 5c-1.5-2-4-3-6-2-2.5 1-3.5 4-2 6.5 1.2 2 5 5.5 8 7.5 3-2 6.8-5.5 8-7.5 1.5-2.5.5-5.5-2-6.5-2-1-4.5 0-6 2z"/>',
    'globe2' => '<circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20"/>',
    'message-circle' => '<path d="M21 11.5a8.4 8.4 0 0 1-8.9 8.4 8.6 8.6 0 0 1-3.9-.9L3 20l1.1-4.4A8.4 8.4 0 1 1 21 11.5z"/>',
    'calendar' => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
];
$path = $paths[$name] ?? '';
@endphp

<svg class="{{ $class }}" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    {!! $path !!}
</svg>
