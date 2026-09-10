<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booking Request Received | Europe Chauffeur</title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f4f2ec;
    font-family:Arial, Helvetica, sans-serif;
    color:#17181b;
">

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="
        width:100%;
        background:#f4f2ec;
        padding:40px 15px;
    "
>
    <tr>
        <td align="center">


            <table
                width="620"
                cellpadding="0"
                cellspacing="0"
                border="0"
                style="
                    width:100%;
                    max-width:620px;
                    background:#fbfaf7;
                    border:1px solid #e6e3da;
                "
            >


                {{-- HEADER --}}
                <tr>
                    <td
                        align="center"
                        style="
                            background:#17181b;
                            padding:42px 30px 38px;
                        "
                    >

                        <div
                            style="
                                font-size:11px;
                                letter-spacing:4px;
                                text-transform:uppercase;
                                color:#cba15e;
                                margin-bottom:13px;
                            "
                        >
                            Luxury Chauffeur Services
                        </div>

                        <div
                            style="
                                font-family:Georgia, 'Times New Roman', serif;
                                font-size:34px;
                                line-height:1.1;
                                color:#fbfaf7;
                                font-weight:normal;
                            "
                        >
                            Europe Chauffeur
                        </div>

                        <div
                            style="
                                width:60px;
                                height:2px;
                                background:#cba15e;
                                margin:22px auto 0;
                            "
                        ></div>

                    </td>
                </tr>


                {{-- MAIN CONTENT --}}
                <tr>
                    <td style="padding:42px 42px 20px;">

                        <div
                            style="
                                font-size:10px;
                                letter-spacing:3px;
                                text-transform:uppercase;
                                color:#a67c3d;
                                font-weight:bold;
                                margin-bottom:12px;
                            "
                        >
                            Booking Request Received
                        </div>


                        <h1
                            style="
                                margin:0 0 20px;
                                font-family:Georgia, 'Times New Roman', serif;
                                font-size:34px;
                                line-height:1.15;
                                font-weight:normal;
                                color:#17181b;
                            "
                        >
                            Thank you, {{ $booking['name'] }}.
                        </h1>


                        <p
                            style="
                                margin:0 0 14px;
                                font-size:15px;
                                line-height:1.8;
                                color:#5f5d58;
                            "
                        >
                            We have received your chauffeur booking request successfully.
                        </p>

                        <p
                            style="
                                margin:0;
                                font-size:15px;
                                line-height:1.8;
                                color:#5f5d58;
                            "
                        >
                            Our reservation team will review your journey details and
                            contact you shortly to confirm your booking.
                        </p>

                    </td>
                </tr>


                {{-- GOLD SEPARATOR --}}
                <tr>
                    <td style="padding:10px 42px 0;">
                        <div
                            style="
                                height:1px;
                                background:#e3cd9c;
                                width:100%;
                            "
                        ></div>
                    </td>
                </tr>


                {{-- JOURNEY TITLE --}}
                <tr>
                    <td style="padding:32px 42px 15px;">

                        <div
                            style="
                                font-size:10px;
                                letter-spacing:3px;
                                text-transform:uppercase;
                                color:#a67c3d;
                                font-weight:bold;
                                margin-bottom:8px;
                            "
                        >
                            Your Journey
                        </div>

                        <h2
                            style="
                                margin:0;
                                font-family:Georgia, 'Times New Roman', serif;
                                font-weight:normal;
                                font-size:26px;
                                color:#17181b;
                            "
                        >
                            Booking Details
                        </h2>

                    </td>
                </tr>


                {{-- DETAILS CARD --}}
                <tr>
                    <td style="padding:5px 42px 32px;">

                        <table
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            border="0"
                            style="
                                background:#ffffff;
                                border:1px solid #e6e3da;
                            "
                        >


                            {{-- PICKUP --}}
                            <tr>
                                <td
                                    style="
                                        padding:20px 22px;
                                        border-bottom:1px solid #e6e3da;
                                    "
                                >
                                    <div
                                        style="
                                            font-size:10px;
                                            letter-spacing:2px;
                                            color:#a67c3d;
                                            text-transform:uppercase;
                                            margin-bottom:7px;
                                        "
                                    >
                                        Pickup Location
                                    </div>

                                    <div
                                        style="
                                            font-size:15px;
                                            color:#17181b;
                                            line-height:1.5;
                                        "
                                    >
                                        {{ $booking['pickup'] }}
                                    </div>
                                </td>
                            </tr>


                            {{-- DROPOFF --}}
                            <tr>
                                <td
                                    style="
                                        padding:20px 22px;
                                        border-bottom:1px solid #e6e3da;
                                    "
                                >
                                    <div
                                        style="
                                            font-size:10px;
                                            letter-spacing:2px;
                                            color:#a67c3d;
                                            text-transform:uppercase;
                                            margin-bottom:7px;
                                        "
                                    >
                                        Drop-off Location
                                    </div>

                                    <div
                                        style="
                                            font-size:15px;
                                            color:#17181b;
                                        "
                                    >
                                        {{ $booking['dropoff'] }}
                                    </div>
                                </td>
                            </tr>


                            {{-- DATE / TIME --}}
                            <tr>

                                <td style="padding:0;">

                                    <table
                                        width="100%"
                                        cellpadding="0"
                                        cellspacing="0"
                                        border="0"
                                    >
                                        <tr>

                                            <td
                                                width="50%"
                                                valign="top"
                                                style="
                                                    padding:20px 22px;
                                                    border-right:1px solid #e6e3da;
                                                    border-bottom:1px solid #e6e3da;
                                                "
                                            >

                                                <div
                                                    style="
                                                        font-size:10px;
                                                        letter-spacing:2px;
                                                        color:#a67c3d;
                                                        text-transform:uppercase;
                                                        margin-bottom:7px;
                                                    "
                                                >
                                                    Pickup Date
                                                </div>

                                                <div
                                                    style="
                                                        font-size:15px;
                                                        color:#17181b;
                                                    "
                                                >
                                                    {{ $booking['pickup_date'] }}
                                                </div>

                                            </td>


                                            <td
                                                width="50%"
                                                valign="top"
                                                style="
                                                    padding:20px 22px;
                                                    border-bottom:1px solid #e6e3da;
                                                "
                                            >

                                                <div
                                                    style="
                                                        font-size:10px;
                                                        letter-spacing:2px;
                                                        color:#a67c3d;
                                                        text-transform:uppercase;
                                                        margin-bottom:7px;
                                                    "
                                                >
                                                    Pickup Time
                                                </div>

                                                <div
                                                    style="
                                                        font-size:15px;
                                                        color:#17181b;
                                                    "
                                                >
                                                    {{ $booking['pickup_time'] }}
                                                </div>

                                            </td>

                                        </tr>
                                    </table>

                                </td>
                            </tr>


                            {{-- PASSENGERS / VEHICLE --}}
                            <tr>

                                <td style="padding:0;">

                                    <table
                                        width="100%"
                                        cellpadding="0"
                                        cellspacing="0"
                                        border="0"
                                    >
                                        <tr>

                                            <td
                                                width="50%"
                                                valign="top"
                                                style="
                                                    padding:20px 22px;
                                                    border-right:1px solid #e6e3da;
                                                "
                                            >

                                                <div
                                                    style="
                                                        font-size:10px;
                                                        letter-spacing:2px;
                                                        color:#a67c3d;
                                                        text-transform:uppercase;
                                                        margin-bottom:7px;
                                                    "
                                                >
                                                    Passengers
                                                </div>

                                                <div
                                                    style="
                                                        font-size:15px;
                                                        color:#17181b;
                                                    "
                                                >
                                                    {{ $booking['passengers'] }}
                                                </div>

                                            </td>


                                            <td
                                                width="50%"
                                                valign="top"
                                                style="
                                                    padding:20px 22px;
                                                "
                                            >

                                                <div
                                                    style="
                                                        font-size:10px;
                                                        letter-spacing:2px;
                                                        color:#a67c3d;
                                                        text-transform:uppercase;
                                                        margin-bottom:7px;
                                                    "
                                                >
                                                    Vehicle
                                                </div>

                                                <div
                                                    style="
                                                        font-size:15px;
                                                        color:#17181b;
                                                    "
                                                >
                                                    {{ $booking['vehicle_name'] }}
                                                </div>

                                            </td>

                                        </tr>
                                    </table>

                                </td>

                            </tr>

                        </table>


                        {{-- OPTIONAL FLIGHT --}}
                        @if(!empty($booking['flight_number']))

                            <table
                                width="100%"
                                cellpadding="0"
                                cellspacing="0"
                                style="
                                    margin-top:15px;
                                    background:#ffffff;
                                    border:1px solid #e6e3da;
                                "
                            >
                                <tr>
                                    <td style="padding:18px 22px;">

                                        <div
                                            style="
                                                font-size:10px;
                                                letter-spacing:2px;
                                                color:#a67c3d;
                                                text-transform:uppercase;
                                                margin-bottom:7px;
                                            "
                                        >
                                            Flight Number
                                        </div>

                                        <div style="font-size:15px;color:#17181b;">
                                            {{ $booking['flight_number'] }}
                                        </div>

                                    </td>
                                </tr>
                            </table>

                        @endif


                        {{-- OPTIONAL NOTES --}}
                        @if(!empty($booking['notes']))

                            <table
                                width="100%"
                                cellpadding="0"
                                cellspacing="0"
                                style="
                                    margin-top:15px;
                                    background:#ffffff;
                                    border:1px solid #e6e3da;
                                "
                            >
                                <tr>
                                    <td style="padding:18px 22px;">

                                        <div
                                            style="
                                                font-size:10px;
                                                letter-spacing:2px;
                                                color:#a67c3d;
                                                text-transform:uppercase;
                                                margin-bottom:7px;
                                            "
                                        >
                                            Special Requests
                                        </div>

                                        <div
                                            style="
                                                font-size:14px;
                                                line-height:1.7;
                                                color:#5f5d58;
                                            "
                                        >
                                            {{ $booking['notes'] }}
                                        </div>

                                    </td>
                                </tr>
                            </table>

                        @endif

                    </td>
                </tr>


                {{-- NOTE --}}
                <tr>
                    <td style="padding:0 42px 40px;">

                        <div
                            style="
                                background:#f4f2ec;
                                border-left:3px solid #cba15e;
                                padding:18px 20px;
                                font-size:13px;
                                line-height:1.7;
                                color:#68655f;
                            "
                        >
                            Your booking request has been received but is not
                            confirmed yet. Our reservation team will contact you
                            shortly with final confirmation.
                        </div>

                    </td>
                </tr>


                {{-- FOOTER --}}
                <tr>
                    <td
                        align="center"
                        style="
                            background:#17181b;
                            padding:32px 25px;
                        "
                    >

                        <div
                            style="
                                font-family:Georgia, 'Times New Roman', serif;
                                font-size:22px;
                                color:#fbfaf7;
                                margin-bottom:10px;
                            "
                        >
                            Europe Chauffeur
                        </div>

                        <div
                            style="
                                color:#cba15e;
                                font-size:10px;
                                letter-spacing:2px;
                                text-transform:uppercase;
                                margin-bottom:18px;
                            "
                        >
                            Vienna · Austria · Europe
                        </div>

                        <div
                            style="
                                color:#aaa79f;
                                font-size:12px;
                                line-height:1.8;
                            "
                        >
                            {{ config('site.phone') }}
                            <br>

                            {{ config('site.email') }}

                            <br><br>

                            Available 24 / 7
                        </div>

                    </td>
                </tr>


            </table>


            {{-- BOTTOM TEXT --}}
            <div
                style="
                    max-width:620px;
                    margin:18px auto 0;
                    color:#8b8880;
                    font-size:11px;
                    line-height:1.6;
                    text-align:center;
                "
            >
                This email was sent because a booking request was made
                through Europe Chauffeur.
            </div>

        </td>
    </tr>
</table>

</body>
</html>