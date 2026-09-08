<?php

return [
    'name' => 'Europe Chauffeur',
    'legalName' => 'Europe Chauffeur',
    'domain' => 'europechauffeur.com',
    'tagline' => 'Luxury chauffeur services across Europe',
    'description' => 'Premium chauffeur-driven transportation across Europe. Based in Vienna, Austria — airport transfers, business travel, VIP tours, and multi-country journeys in Mercedes-Benz vehicles.',
    'phone' => '+43 660 7730236',
    'phoneHref' => 'tel:+436607730236',
    'whatsapp' => '436607730236',
    'whatsappUrl' => 'https://wa.me/436607730236',
    'email' => 'info@europechauffeur.com',
    'emailHref' => 'mailto:info@europechauffeur.com',
    'address' => [
        'city' => 'Vienna',
        'region' => 'Vienna',
        'country' => 'Austria',
        'countryCode' => 'AT',
    ],
    'hours' => '24 / 7',

    'nav' => [
        ['label' => 'Home', 'href' => '/'],
        ['label' => 'Services', 'href' => '/services'],
        ['label' => 'Fleet', 'href' => '/fleet'],
        ['label' => 'Destinations', 'href' => '/destinations'],
        ['label' => 'About', 'href' => '/about'],
        ['label' => 'Reviews', 'href' => '/reviews'],
        ['label' => 'FAQ', 'href' => '/faq'],
        ['label' => 'Blog', 'href' => '/blog'],
        ['label' => 'Contact', 'href' => '/contact'],
    ],

    'services' => [
        ['slug' => 'airport-transfers', 'title' => 'Airport Transfers', 'short' => "Flight-monitored arrivals & departures across Europe's major hubs."],
        ['slug' => 'business-travel', 'title' => 'Business Travel', 'short' => 'Discreet corporate transport for executives and delegations.'],
        ['slug' => 'private-chauffeur', 'title' => 'Private Chauffeur', 'short' => 'Full-day and hourly chauffeur at your personal disposal.'],
        ['slug' => 'vip-executive', 'title' => 'VIP & Executive Travel', 'short' => 'Uncompromised privacy, protocol and comfort for high-profile clients.'],
        ['slug' => 'sightseeing-tours', 'title' => 'Sightseeing Tours', 'short' => 'Guided city and regional tours in luxury Mercedes vehicles.'],
        ['slug' => 'customized-tours', 'title' => 'Customized Tours', 'short' => 'Multi-day, multi-country itineraries tailored to your preferences.'],
        ['slug' => 'hotel-transfers', 'title' => 'Hotel Transfers', 'short' => 'Seamless door-to-door transfers between hotels, venues and stations.'],
        ['slug' => 'event-transportation', 'title' => 'Event Transportation', 'short' => 'Weddings, galas, conferences and private events across Europe.'],
    ],

    'fleet' => [
        ['slug' => 'mercedes-e-class', 'name' => 'Mercedes E-Class', 'pax' => 3, 'luggage' => 3, 'class' => 'Executive Sedan'],
        ['slug' => 'mercedes-s-class', 'name' => 'Mercedes S-Class', 'pax' => 3, 'luggage' => 3, 'class' => 'First-Class Sedan'],
        ['slug' => 'mercedes-v-class', 'name' => 'Mercedes V-Class', 'pax' => 7, 'luggage' => 7, 'class' => 'Luxury Van'],
        ['slug' => 'mercedes-vito', 'name' => 'Mercedes Vito', 'pax' => 8, 'luggage' => 8, 'class' => 'Business Van'],
    ],

    'fleet_features' => [
        'mercedes-e-class' => ['Leather executive seating', 'Climate control', 'Bottled water', 'Phone chargers', 'Wi-Fi on request'],
        'mercedes-s-class' => ['First-class rear cabin', 'Massage seats', 'Ambient lighting', 'Refreshments', 'Absolute discretion'],
        'mercedes-v-class' => ['Conference-style seating', 'Panoramic roof', 'Generous luggage bay', 'Individual reading lights', 'USB-C charging'],
        'mercedes-vito' => ['Comfortable 8-seat cabin', 'Extra luggage room', 'Ideal for families & groups', 'Roof rails available', 'Child seats on request'],
    ],

    'destinations' => [
        ['slug' => 'austria', 'name' => 'Austria', 'type' => 'country', 'country' => 'Austria', 'cities' => ['vienna', 'salzburg', 'hallstatt']],
        ['slug' => 'germany', 'name' => 'Germany', 'type' => 'country', 'country' => 'Germany', 'cities' => ['munich', 'berlin']],
        ['slug' => 'switzerland', 'name' => 'Switzerland', 'type' => 'country', 'country' => 'Switzerland', 'cities' => ['zurich', 'lucerne']],
        ['slug' => 'italy', 'name' => 'Italy', 'type' => 'country', 'country' => 'Italy', 'cities' => ['venice', 'milan', 'rome']],
        ['slug' => 'czech-republic', 'name' => 'Czech Republic', 'type' => 'country', 'country' => 'Czech Republic', 'cities' => ['prague']],
        ['slug' => 'hungary', 'name' => 'Hungary', 'type' => 'country', 'country' => 'Hungary', 'cities' => ['budapest']],
        ['slug' => 'croatia', 'name' => 'Croatia', 'type' => 'country', 'country' => 'Croatia', 'cities' => []],
        ['slug' => 'slovenia', 'name' => 'Slovenia', 'type' => 'country', 'country' => 'Slovenia', 'cities' => []],
        ['slug' => 'vienna', 'name' => 'Vienna', 'type' => 'city', 'country' => 'Austria', 'cities' => []],
        ['slug' => 'salzburg', 'name' => 'Salzburg', 'type' => 'city', 'country' => 'Austria', 'cities' => []],
        ['slug' => 'prague', 'name' => 'Prague', 'type' => 'city', 'country' => 'Czech Republic', 'cities' => []],
        ['slug' => 'budapest', 'name' => 'Budapest', 'type' => 'city', 'country' => 'Hungary', 'cities' => []],
        ['slug' => 'munich', 'name' => 'Munich', 'type' => 'city', 'country' => 'Germany', 'cities' => []],
        ['slug' => 'zurich', 'name' => 'Zurich', 'type' => 'city', 'country' => 'Switzerland', 'cities' => []],
        ['slug' => 'venice', 'name' => 'Venice', 'type' => 'city', 'country' => 'Italy', 'cities' => []],
    ],

    'destination_covers' => [
        'austria' => 'vienna-thumb.jpg',
        'vienna' => 'vienna-thumb.jpg',
        'salzburg' => 'salzburg-thumb.jpg',
        'czech-republic' => 'prague-thumb.jpg',
        'prague' => 'prague-thumb.jpg',
        'hungary' => 'budapest-thumb.jpg',
        'budapest' => 'budapest-thumb.jpg',
        'germany' => 'salzburg-thumb.jpg',
    ],

    'fleet_images' => [
        'mercedes-e-class' => 'e-class.jpg',
        'mercedes-s-class' => 's-class.jpg',
        'mercedes-v-class' => 'v-class.jpg',
        'mercedes-vito' => 'vito.jpg',
    ],
];
