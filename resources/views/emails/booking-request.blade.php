<h2>New Booking Request</h2>

<p><strong>Name:</strong> {{ $booking['name'] }}</p>
<p><strong>Email:</strong> {{ $booking['email'] }}</p>
<p><strong>Phone:</strong> {{ $booking['phone'] }}</p>

<hr>

<p><strong>Pickup:</strong> {{ $booking['pickup'] }}</p>
<p><strong>Drop-off:</strong> {{ $booking['dropoff'] }}</p>

<p><strong>Date:</strong> {{ $booking['pickup_date'] }}</p>
<p><strong>Time:</strong> {{ $booking['pickup_time'] }}</p>

<p><strong>Passengers:</strong> {{ $booking['passengers'] }}</p>
<p><strong>Vehicle:</strong> {{ $booking['vehicle_name'] }}</p>

@if(!empty($booking['flight_number']))
    <p>
        <strong>Flight Number:</strong>
        {{ $booking['flight_number'] }}
    </p>
@endif

@if(!empty($booking['notes']))
    <p>
        <strong>Special Requests:</strong><br>
        {{ $booking['notes'] }}
    </p>
@endif