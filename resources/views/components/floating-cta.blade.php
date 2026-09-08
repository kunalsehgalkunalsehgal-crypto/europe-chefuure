<div class="floating-cta">
    <a href="{{ config('site.whatsappUrl') }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp us" class="fab-whatsapp">
        <x-icon name="message-circle" class="icon lg" />
    </a>
    <a href="{{ config('site.phoneHref') }}" aria-label="Call us" class="fab-call">
        <x-icon name="phone" class="icon md" />
    </a>
</div>

<div class="mobile-bar">
    <a href="{{ config('site.phoneHref') }}">
        <x-icon name="phone" class="icon sm" /> Call
    </a>
    <a href="{{ config('site.whatsappUrl') }}" target="_blank" rel="noopener noreferrer" class="fab-wa-text">
        <x-icon name="message-circle" class="icon sm" /> WhatsApp
    </a>
    <a href="{{ url('/#book') }}">Book Now</a>
</div>
<div class="mobile-bar-spacer"></div>
