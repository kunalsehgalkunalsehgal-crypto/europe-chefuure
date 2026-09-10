{{-- @props(['variant' => 'overlay', 'fleet' => []])
@props([ 'variant' => 'overlay', 'fleet' => [], 'selectedVehicle' => null])

<div id="book" class="booking-widget {{ $variant === 'overlay' ? 'overlay' : 'panel' }}">
    <div class="bw-head">
        <div>
            <p class="eyebrow">Reserve your journey</p>
            <h3>Instant Quote</h3>
        </div>
        <span class="bw-note">Confirmed within 30 minutes</span>
    </div>

    @if(session('booking_submitted'))
        <div class="text-center" style="padding: 2.5rem 0;">
            <div style="margin-inline:auto;height:3rem;width:3rem;border-radius:50%;background:rgba(203,161,94,.2);display:grid;place-items:center;">
                <x-icon name="check" class="icon md" />
            </div>
            <h4 style="margin-top:1rem;font-family:var(--font-display);font-size:1.25rem;">Request received</h4>
            <p style="margin-top:.5rem;font-size:.9rem;color:var(--muted-foreground);">
                Our reservation team will confirm your booking shortly.
            </p>
        </div>
    @else
        <form method="POST" action="{{ route('booking.store') }}" class="bw-form">
            @csrf
            <div class="bw-field">
                <label><span class="text-gold-deep"><x-icon name="mappin" class="icon sm" /></span>Pickup Location</label>
                <input required type="text" name="pickup" placeholder="Vienna Airport (VIE)">
            </div>
            <div class="bw-field">
                <label><span class="text-gold-deep"><x-icon name="mappin" class="icon sm" /></span>Drop-off Location</label>
                <input required type="text" name="dropoff" placeholder="Hotel Sacher, Vienna">
            </div>
            <div class="bw-field">
                <label><span class="text-gold-deep"><x-icon name="calendar" class="icon sm" /></span>Pickup Date</label>
                <input required type="date" name="pickup_date">
            </div>
            <div class="bw-field">
                <label><span class="text-gold-deep"><x-icon name="clock" class="icon sm" /></span>Pickup Time</label>
                <input required type="time" name="pickup_time">
            </div>
            <div class="bw-field">
                <label><span class="text-gold-deep"><x-icon name="users" class="icon sm" /></span>Passengers</label>
                <input required type="number" name="passengers" min="1" max="8" value="2">
            </div>
            <div class="bw-field">
                <label><span class="text-gold-deep"><x-icon name="arrow-right" class="icon sm" /></span>Vehicle</label>
                <select name="vehicle">
                    <option value="" disabled selected>Select a vehicle</option>
                    @foreach($fleet as $v)
                        <option value="{{ $v['slug'] }}">{{ $v['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="bw-field full">
                <label><span class="text-gold-deep"><x-icon name="plane" class="icon sm" /></span>Flight Number (optional)</label>
                <input type="text" name="flight_number" placeholder="e.g. OS 234">
            </div>
            <div class="bw-field full">
                <label class="eyebrow" style="display:block;margin-bottom:.5rem;">Special Requests</label>
                <textarea rows="3" name="notes" placeholder="Child seat, English-speaking driver, multi-stop itinerary…"></textarea>
            </div>
            <button type="submit" class="btn-gold bw-submit">
                Request Booking <x-icon name="arrow-right" class="icon sm" />
            </button>
            <p class="bw-fineprint">Fixed prices · No hidden fees · 24/7 support</p>
        </form>
    @endif
</div> --}}
@props([
    'variant' => 'overlay',
    'fleet' => [],
    'selectedVehicle' => null
])

<div id="book" class="booking-widget {{ $variant === 'overlay' ? 'overlay' : 'panel' }}">

    <div class="bw-head">
        <div>
            <p class="eyebrow">Reserve your journey</p>
            <h3>Instant Quote</h3>
        </div>

        <span class="bw-note">
            Confirmed within 30 minutes
        </span>
    </div>


    @if(session('booking_submitted'))

        <div class="text-center" style="padding: 2.5rem 0;">

            <div
                style="
                    margin-inline:auto;
                    height:3rem;
                    width:3rem;
                    border-radius:50%;
                    background:rgba(203,161,94,.2);
                    display:grid;
                    place-items:center;
                "
            >
                <x-icon name="check" class="icon md" />
            </div>

            <h4
                style="
                    margin-top:1rem;
                    font-family:var(--font-display);
                    font-size:1.25rem;
                "
            >
                Request received
            </h4>

            <p
                style="
                    margin-top:.5rem;
                    font-size:.9rem;
                    color:var(--muted-foreground);
                "
            >
                Our reservation team will confirm your booking shortly.
            </p>

        </div>

    @else

        <form
            method="POST"
            action="{{ route('booking.store') }}"
            class="bw-form"
        >

            @csrf


            {{-- Pickup --}}
            <div class="bw-field">

                <label>
                    <span class="text-gold-deep">
                        <x-icon name="mappin" class="icon sm" />
                    </span>

                    Pickup Location
                </label>

                <input
                    required
                    type="text"
                    name="pickup"
                    value="{{ old('pickup') }}"
                    placeholder="Vienna Airport (VIE)"
                >

            </div>


            {{-- Dropoff --}}
            <div class="bw-field">

                <label>
                    <span class="text-gold-deep">
                        <x-icon name="mappin" class="icon sm" />
                    </span>

                    Drop-off Location
                </label>

                <input
                    required
                    type="text"
                    name="dropoff"
                    value="{{ old('dropoff') }}"
                    placeholder="Hotel Sacher, Vienna"
                >

            </div>


            {{-- Date --}}
            <div class="bw-field">

                <label>
                    <span class="text-gold-deep">
                        <x-icon name="calendar" class="icon sm" />
                    </span>

                    Pickup Date
                </label>

                <input
                    required
                    type="date"
                    name="pickup_date"
                    value="{{ old('pickup_date') }}"
                    min="{{ date('Y-m-d') }}"
                >

            </div>


            {{-- Time --}}
            <div class="bw-field">

                <label>
                    <span class="text-gold-deep">
                        <x-icon name="clock" class="icon sm" />
                    </span>

                    Pickup Time
                </label>

                <input
                    required
                    type="time"
                    name="pickup_time"
                    value="{{ old('pickup_time') }}"
                >

            </div>


            {{-- Passengers --}}
            <div class="bw-field">

                <label>
                    <span class="text-gold-deep">
                        <x-icon name="users" class="icon sm" />
                    </span>

                    Passengers
                </label>

                <input
                    required
                    type="number"
                    name="passengers"
                    min="1"
                    max="8"
                    value="{{ old('passengers', 2) }}"
                >

            </div>


            {{-- Vehicle --}}
            <div class="bw-field">

                <label>
                    <span class="text-gold-deep">
                        <x-icon name="arrow-right" class="icon sm" />
                    </span>

                    Vehicle
                </label>

                <select name="vehicle" required>

                    <option
                        value=""
                        disabled
                        @selected(!old('vehicle', $selectedVehicle))
                    >
                        Select a vehicle
                    </option>

                    @foreach($fleet as $v)

                        <option
                            value="{{ $v['slug'] }}"
                            @selected(
                                old('vehicle', $selectedVehicle) === $v['slug']
                            )
                        >
                            {{ $v['name'] }}
                        </option>

                    @endforeach

                </select>

            </div>


            {{-- Flight --}}
            <div class="bw-field full">

                <label>
                    <span class="text-gold-deep">
                        <x-icon name="plane" class="icon sm" />
                    </span>

                    Flight Number (optional)
                </label>

                <input
                    type="text"
                    name="flight_number"
                    value="{{ old('flight_number') }}"
                    placeholder="e.g. OS 234"
                >

            </div>


            {{-- Customer Name --}}
            <div class="bw-field">

                <label>
                    Full Name
                </label>

                <input
                    required
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Your full name"
                >

            </div>


            {{-- Customer Email --}}
            <div class="bw-field">

                <label>
                    Email Address
                </label>

                <input
                    required
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="you@example.com"
                >

            </div>


            {{-- Phone --}}
            <div class="bw-field full">

                <label>
                    Phone Number
                </label>

                <input
                    required
                    type="text"
                    name="phone"
                    value="{{ old('phone') }}"
                    placeholder="+43 660 1234567"
                >

            </div>


            {{-- Notes --}}
            <div class="bw-field full">

                <label
                    class="eyebrow"
                    style="display:block;margin-bottom:.5rem;"
                >
                    Special Requests
                </label>

                <textarea
                    rows="3"
                    name="notes"
                    placeholder="Child seat, English-speaking driver, multi-stop itinerary…"
                >{{ old('notes') }}</textarea>

            </div>


            <button
                type="submit"
                class="btn-gold bw-submit"
            >
                Request Booking

                <x-icon name="arrow-right" class="icon sm" />
            </button>


            <p class="bw-fineprint">
                Fixed prices · No hidden fees · 24/7 support
            </p>

        </form>

    @endif

</div>