<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home(): View
    {
        // 'homeFaqs' => config('site.faqs'),
        // $homeFaqs = [
        //     ['q' => 'How do I book a chauffeur in Vienna or elsewhere in Europe?', 'a' => 'You can book online through our instant quote form, by phone on +43 660 7730236, or on WhatsApp. Bookings are confirmed within 30 minutes, 24 hours a day.'],
        //     ['q' => 'Do you provide airport transfers from Vienna International Airport (VIE)?', 'a' => 'Yes. We monitor every flight in real time, greet you inside the terminal with a name sign, and include waiting time and luggage assistance in the fixed price.'],
        //     ['q' => 'Can I book multi-country journeys across Europe?', 'a' => 'Absolutely. Vienna is our home, but our chauffeurs regularly drive to Salzburg, Prague, Budapest, Munich, Zurich, Venice and beyond. We handle border formalities, tolls and route planning.'],
        //     ['q' => 'What vehicles are in your fleet?', 'a' => 'Our fleet consists exclusively of black Mercedes-Benz vehicles: E-Class and S-Class sedans for 1–3 passengers, and V-Class and Vito vans for up to 8 passengers with generous luggage capacity.'],
        //     ['q' => 'Are your drivers English-speaking?', 'a' => 'Every chauffeur speaks fluent English in addition to German. Several drivers also speak Italian, French, Russian or Arabic — just let us know when booking.'],
        //     ['q' => 'Do you offer fixed prices?', 'a' => 'Yes. Every quote is a fully-inclusive fixed price: chauffeur, vehicle, fuel, tolls, parking, taxes, meet-and-greet and complimentary waiting time. No hidden fees.'],
        // ];

        $destinationCards = [
            ['slug' => 'vienna', 'name' => 'Vienna', 'country_label' => 'Austria', 'img' => 'Vienna.webp'],
            ['slug' => 'salzburg', 'name' => 'Salzburg', 'country_label' => 'Austria', 'img' => 'salzburg.webp'],
            ['slug' => 'prague', 'name' => 'Prague', 'country_label' => 'Czech Republic', 'img' => 'prague.webp'],
            ['slug' => 'budapest', 'name' => 'Budapest', 'country_label' => 'Hungary', 'img' => 'budapest.webp'],
        ];

        $serviceImages = [
            'airport-transfers' => 'Business (1).webp',
            'business-travel' => 'Business Travel.webp',
            'customized-tours' => 'Customized Tours.webp',
            'private-chauffeur' => 'Private Chauffeur.webp',
            'vip-executive' => 'VIP & Executive Travel.webp',
            'sightseeing-tours' => 'Sightseeing Tours (1).webp',
            'customized-tours' => 'Customized Tours.webp',
            'hotel-transfers' => 'Hotel Transfers.webp',
            'event-transportation' => 'Event Transportation.webp',
        ];

        $testimonials = [
            ['quote' => 'Flawless from booking to drop-off. Our chauffeur greeted us with our name inside the terminal and the S-Class was pristine. Europe Chauffeur is now our standard for Vienna travel.', 'name' => 'Alexander M.', 'role' => 'Managing Director, London'],
            ['quote' => 'We booked a five-day itinerary from Vienna to Salzburg, Hallstatt and Prague. Every detail was thought of — from bottled water to route timing around openings. Truly first-class.', 'name' => 'Priya K.', 'role' => 'Private Client, Dubai'],
            ['quote' => 'For our board meeting in Munich we needed absolute reliability. Cars arrived early, drivers were impeccable, invoicing was clear. Highly recommended for corporate travel.', 'name' => 'Michael R.', 'role' => 'COO, Zurich'],
        ];

        $pillars = [
            ['icon' => 'award', 'title' => 'Professional Chauffeurs', 'body' => 'Vetted, uniformed, discreet. English-speaking as standard.'],
            ['icon' => 'sparkles', 'title' => 'Luxury Mercedes Fleet', 'body' => 'Executive sedans and first-class vans, immaculately maintained.'],
            ['icon' => 'shield-check', 'title' => 'Fixed Transparent Pricing', 'body' => 'All-inclusive quotes — no surprises on tolls, waiting or fuel.'],
            ['icon' => 'languages', 'title' => 'English-Speaking Drivers', 'body' => 'Multilingual chauffeurs available on request.'],
            ['icon' => 'plane', 'title' => 'Real-Time Flight Monitoring', 'body' => 'Automatic pickup adjustments for delays or early arrivals.'],
            ['icon' => 'clock', 'title' => '24 / 7 Availability', 'body' => 'Round-the-clock concierge for last-minute changes.'],
            ['icon' => 'heart-handshake', 'title' => 'Personalised Service', 'body' => 'Every journey planned around your preferences.'],
            ['icon' => 'globe2', 'title' => 'Pan-European Coverage', 'body' => 'Cross-border transfers to 20+ countries.'],
            ['icon' => 'badge-check', 'title' => 'Safe & Comfortable', 'body' => 'Insured, licensed and fully compliant across the EU.'],
        ];

        $trust = [
            ['k' => '12+', 'l' => 'Years of experience'],
            ['k' => '20', 'l' => 'European countries served'],
            ['k' => '4.9★', 'l' => 'Average client rating'],
            ['k' => '24/7', 'l' => 'Concierge availability'],
        ];

        return view('home', [
            'title' => 'Luxury Chauffeur Vienna & Europe | Airport Transfers | Europe Chauffeur',
            'description' => 'Premium chauffeur service in Vienna and across Europe. Mercedes-Benz fleet, English-speaking drivers, airport transfers, business travel & VIP tours. Fixed prices, 24/7.',
            // 'homeFaqs' => $homeFaqs,
            'homeFaqs' => config('site.faqs'),
            'destinationCards' => $destinationCards,
            'serviceImages' => $serviceImages,
            'testimonials' => $testimonials,
            'pillars' => $pillars,
            'trust' => $trust,
            'services' => config('site.services'),
            'fleet' => config('site.fleet'),
        ]);
    }

    public function stub(string $eyebrow, string $title, string $intro, string $pageTitle): View
    {
        return view('stub', [
            'eyebrow' => $eyebrow,
            'pageTitle' => $title,
            'intro' => $intro,
            'title' => $pageTitle,
        ]);
    }

    public function about(): View
    {
        return $this->stub(
            'About Europe Chauffeur',
            'More Than a Ride — A Journey Crafted for You.',
            'At Europe Chauffeur, we believe every journey should be comfortable, reliable, and memorable. We provide premium chauffeur services across Europe with professional drivers, luxury vehicles, and personalized travel experiences. Whether it’s an airport transfer, business trip, sightseeing tour, or long-distance travel, we’re committed to making every journey safe, smooth, and stress-free',
            'About Europe Chauffeur — Luxury Chauffeur Service in Vienna'
        );
    }

    public function blog(): View
    {
        return $this->stub(
            'The Journal',
            'A luxury European travel journal.',
            'Curated guides, seasonal itineraries and behind-the-wheel insights from our chauffeurs — spanning Vienna, the Alps, and every European capital we serve.',
            'Luxury Travel Journal | Europe Chauffeur Blog'
        );
    }

    public function reviews(): View
    {
        return $this->stub(
            'Client Reviews',
            'Trusted by discerning travellers across Europe.',
            'A curated collection of verified reviews from executives, VIP guests and families who have travelled with Europe Chauffeur.',
            'Reviews & Testimonials | Europe Chauffeur'
        );
    }

    // public function faq(): View
    // {
    //     return $this->stub(
    //         'Frequently Asked',
    //         'Answers, before you ask.',
    //         'A comprehensive knowledge base covering bookings, pricing, vehicles, coverage, corporate accounts and more.',
    //         'Chauffeur FAQ — Vienna & Europe | Europe Chauffeur'
    //     );
    // }
    public function faq(): View
{
    return view('faq', [
        'eyebrow' => 'Frequently Asked',
        'pageTitle' => 'Answers, before you ask.',
        'intro' => 'A comprehensive knowledge base covering bookings, pricing, vehicles, coverage, corporate accounts and more.',
        'title' => 'Chauffeur FAQ — Vienna & Europe | Europe Chauffeur',
        'faqs' => config('site.faqs', []),
    ]);
}

    public function privacy(): View
    {
        return $this->stub(
            'Legal',
            'Privacy Policy.',
            'Our full privacy policy detailing how Europe Chauffeur collects, uses and protects your personal data in accordance with GDPR is being prepared.',
            'Privacy Policy | Europe Chauffeur'
        );
    }

    public function terms(): View
    {
        return $this->stub(
            'Legal',
            'Terms & Conditions.',
            'The full terms and conditions governing bookings with Europe Chauffeur are being prepared.',
            'Terms & Conditions | Europe Chauffeur'
        );
    }

    public function cookies(): View
    {
        return $this->stub(
            'Legal',
            'Cookie Policy.',
            'Our cookie policy explaining what cookies we use and why is being prepared.',
            'Cookie Policy | Europe Chauffeur'
        );
    }

    // public function contact(): View
    // {
    //     return view('contact', [
    //         'title' => 'Contact Europe Chauffeur — Vienna, Austria',
    //         'description' => 'Contact Europe Chauffeur in Vienna, Austria. Phone +43 660 7730236, WhatsApp, email or book online. 24/7 concierge for luxury chauffeur bookings across Europe.',
    //         'fleet' => config('site.fleet'),
    //     ]);
    // }
    public function contact(): View
{
    $fleet = config('site.fleet', []);

    $selectedVehicle = request()->query('vehicle');

    $vehicleExists = collect($fleet)
        ->contains('slug', $selectedVehicle);

    if (!$vehicleExists) {
        $selectedVehicle = null;
    }

    return view('contact', [
        'title' => 'Contact Europe Chauffeur — Vienna, Austria',
        'description' => 'Contact Europe Chauffeur in Vienna, Austria. Phone +43 660 7730236, WhatsApp, email or book online. 24/7 concierge for luxury chauffeur bookings across Europe.',
        'fleet' => $fleet,
        'selectedVehicle' => $selectedVehicle,
    ]);
}

    // public function storeBooking(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'pickup'   => 'required|string|max:255',
    //         'dropoff'  => 'required|string|max:255',
    //         'date'     => 'required|date',
    //         'time'     => 'required|string',
    //         'pax'      => 'required|integer|min:1|max:20',
    //         'name'     => 'required|string|max:255',
    //         'email'    => 'required|email|max:255',
    //         'phone'    => 'required|string|max:50',
    //     ]);

    //     return redirect()->route('home')->with('success', 'Booking request received. We will confirm within 30 minutes.');
    // }
//     public function storeBooking(Request $request): RedirectResponse
// {
//     $data = $request->validate([
//         'pickup'        => 'required|string|max:255',
//         'dropoff'       => 'required|string|max:255',
//         'pickup_date'   => 'required|date|after_or_equal:today',
//         'pickup_time'   => 'required',
//         'passengers'    => 'required|integer|min:1|max:8',
//         'vehicle'       => 'required|string|max:100',
//         'flight_number' => 'nullable|string|max:100',
//         'name'          => 'required|string|max:255',
//         'email'         => 'required|email|max:255',
//         'phone'         => 'required|string|max:50',
//         'notes'         => 'nullable|string|max:2000',
//     ]);

//     $fleet = collect(config('site.fleet', []));

//     $vehicle = $fleet->firstWhere('slug', $data['vehicle']);

//     $data['vehicle_name'] = $vehicle['name'] ?? $data['vehicle'];

//     Mail::html(
//         view('emails.booking-request', [
//             'booking' => $data,
//         ])->render(),
//         function ($message) use ($data) {
//             $message
//                 ->to(config('site.email'))
//                 ->replyTo($data['email'], $data['name'])
//                 ->subject('New Booking Request - ' . $data['vehicle_name']);
//         }
//     );

//     return redirect()
//         ->to(route('contact') . '#book')
//         ->with('booking_submitted', true);
// }
public function storeBooking(Request $request): RedirectResponse
{
    $data = $request->validate([
        'pickup'        => 'required|string|max:255',
        'dropoff'       => 'required|string|max:255',
        'pickup_date'   => 'required|date|after_or_equal:today',
        'pickup_time'   => 'required|string',
        'passengers'    => 'required|integer|min:1|max:8',
        'vehicle'       => 'required|string|max:100',
        'flight_number' => 'nullable|string|max:100',
        'name'          => 'required|string|max:255',
        'email'         => 'required|email|max:255',
        'phone'         => 'required|string|max:50',
        'notes'         => 'nullable|string|max:2000',
    ]);

    $vehicle = collect(config('site.fleet', []))
        ->firstWhere('slug', $data['vehicle']);

    $data['vehicle_name'] =
        $vehicle['name'] ?? $data['vehicle'];

    try {

        /*
        |--------------------------------------------------------------------------
        | MAIL 1: ADMIN B KO BOOKING DETAILS
        |--------------------------------------------------------------------------
        |
        | From     = B
        | To       = B
        | Reply-To = User A
        |
        */

        Mail::send(
            'emails.booking-request',
            ['booking' => $data],
            function ($message) use ($data) {

                $message
                    ->from(
                        config('mail.from.address'),
                        config('mail.from.name')
                    )
                    ->to(
                        config('mail.from.address'),
                        'Europe Chauffeur'
                    )
                    ->replyTo(
                        $data['email'],
                        $data['name']
                    )
                    ->subject(
                        'New Booking Request - ' .
                        $data['vehicle_name']
                    );
            }
        );


        /*
        |--------------------------------------------------------------------------
        | MAIL 2: USER A KO THANK YOU MAIL
        |--------------------------------------------------------------------------
        |
        | From = B
        | To   = User A
        |
        */

        Mail::send(
            'emails.booking-confirmation',
            ['booking' => $data],
            function ($message) use ($data) {

                $message
                    ->from(
                        config('mail.from.address'),
                        config('mail.from.name')
                    )
                    ->to(
                        $data['email'],
                        $data['name']
                    )
                    ->subject(
                        'We Received Your Booking Request | Europe Chauffeur'
                    );
            }
        );


    } catch (\Throwable $e) {

        report($e);

        return back()
            ->withInput()
            ->with(
                'booking_error',
                'Sorry, your booking request could not be sent. Please try again.'
            );
    }


    return redirect()
        ->to(route('contact') . '#book')
        ->with('booking_submitted', true);
}

    public function servicesIndex(): View
    {
        return view('services.index', [
            'title'       => 'Chauffeur Services | Europe Chauffeur',
            'description' => 'Explore our full range of luxury chauffeur services across Europe — airport transfers, business travel, VIP tours and more.',
            'services'    => config('site.services'),
        ]);
    }

    public function servicesShow(string $service): View
    {
        $services = config('site.services', []);
        $currentService = null;
        $relatedServices = [];

        foreach ($services as $serviceItem) {
            if ($serviceItem['slug'] === $service) {
                $currentService = $serviceItem;
            } else {
                $relatedServices[] = $serviceItem;
            }
        }

        abort_if($currentService === null, 404);

        return view('services.show', [
            'title' => $currentService['title'] . ' | Europe Chauffeur',
            'description' => $currentService['description'],
            'service' => $currentService,
            'relatedServices' => $relatedServices,
        ]);
    }

    public function fleetIndex(): View
    {
        return view('fleet.index', [
            'title'       => 'Our Fleet | Europe Chauffeur',
            'description' => 'Discover our exclusive Mercedes-Benz fleet — E-Class, S-Class, V-Class and Vito — available for luxury chauffeur hire across Europe.',
            'fleet'       => config('site.fleet'),
            // 'fleetImages' => config('site.fleet_images'),
                    'images' => config('site.fleet_images'),

        ]);
    }

    public function fleetShow(string $vehicle): View
    {
        $fleet   = collect(config('site.fleet'));
        $current = $fleet->firstWhere('slug', $vehicle);

        abort_if(!$current, 404);

        return view('fleet.show', [
            'title'        => $current['name'] . ' | Europe Chauffeur',
            'description'  => 'Hire a ' . $current['name'] . ' with a professional chauffeur across Europe.',
            'vehicle'      => $current,
                    'v' => $current,

            'features'     => config('site.fleet_features.' . $vehicle, []),
            // 'fleetImages'  => config('site.fleet_images'),
                    'image' => $images[$vehicle] ?? 'e-class.jpg',

            'fleet'        => $fleet->all(),
        ]);
    }

    public function destinationsIndex(): View
    {
        return view('destinations.index', [
            'title'        => 'Destinations | Europe Chauffeur',
            'description'  => 'Luxury chauffeur transfers to 20+ European countries. Vienna, Salzburg, Prague, Budapest, Munich, Zurich and beyond.',
            'destinations' => config('site.destinations'),
            'covers'       => config('site.destination_covers'),
        ]);
    }

    public function destinationsShow(string $destination): View
    {
        $destinations = collect(config('site.destinations'));
        $current      = $destinations->firstWhere('slug', $destination);
        abort_if(!$current, 404);

        $covers = config('site.destination_covers');
$others = $destinations->where('slug', '!=', $destination) ->take(6) ->values() ->all();
        return view('destinations.show', [
            'title'        => 'Chauffeur to ' . $current['name'] . ' | Europe Chauffeur',
            'description'  => 'Luxury chauffeur service to ' . $current['name'] . '. Fixed prices, professional drivers, Mercedes-Benz fleet.',
            'd'            => $current,
            'image'        => $covers[$destination] ?? 'vienna-thumb.jpg',
            'covers'       => $covers,
            'fleet'        => config('site.fleet'),
            'others' => $others,
        ]);
    }
}
