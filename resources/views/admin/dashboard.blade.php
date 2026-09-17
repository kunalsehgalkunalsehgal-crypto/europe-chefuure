<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Admin Dashboard | Europe Chauffeur
    </title>

    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    >


    <style>

        body {
            margin: 0;
            background: #f5f3ee;
            color: #17181b;
        }


        .admin-dashboard {
            max-width: 1250px;
            margin: 0 auto;
            padding: 40px 20px 70px;
        }


        .admin-topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 35px;
        }


        .admin-topbar h1 {
            margin: 5px 0 0;
            font-size: 38px;
        }


        .admin-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }


        .admin-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 12px 20px;

            background: #17181b;
            color: #fff;

            border: 1px solid #17181b;

            text-decoration: none;
            cursor: pointer;

            font-size: 14px;
        }


        .admin-btn:hover {
            background: #cba15e;
            border-color: #cba15e;
            color: #17181b;
        }


        .admin-btn-outline {
            background: transparent;
            color: #17181b;
        }


        /* STAT CARDS */

        .dashboard-stats {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;

            margin-bottom: 40px;
        }


        .dashboard-stat {
            background: #fff;

            border: 1px solid #e4e0d7;

            padding: 28px;
        }


        .dashboard-stat .label {
            font-size: 13px;

            text-transform: uppercase;

            letter-spacing: 1px;

            color: #747474;
        }


        .dashboard-stat .number {
            margin-top: 12px;

            font-size: 40px;

            font-weight: 600;
        }


        .dashboard-stat.pending {
            border-top: 4px solid #d5a72e;
        }


        .dashboard-stat.approved {
            border-top: 4px solid #3d8a50;
        }


        .dashboard-stat.rejected {
            border-top: 4px solid #b64444;
        }


        .dashboard-stat.total {
            border-top: 4px solid #17181b;
        }


        /* RECENT REVIEWS */

        .recent-section {
            background: #fff;

            border: 1px solid #e4e0d7;

            padding: 30px;
        }


        .recent-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 20px;

            margin-bottom: 25px;
        }


        .recent-heading h2 {
            margin: 0;
        }


        .recent-review {
            display: grid;

            grid-template-columns:
                1.2fr
                1fr
                120px
                130px;

            gap: 20px;

            align-items: center;

            padding: 18px 0;

            border-bottom:
                1px solid #ece9e2;
        }


        .recent-review:last-child {
            border-bottom: 0;
        }


        .review-name {
            font-weight: 600;
        }


        .review-email {
            margin-top: 4px;

            font-size: 13px;

            color: #777;
        }


        .review-stars {
            color: #cba15e;
        }


        .status-badge {
            display: inline-block;

            padding: 6px 10px;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: .5px;
        }


        .status-pending {
            background: #fff3cf;
            color: #876412;
        }


        .status-approved {
            background: #e6f5e9;
            color: #2d6f3c;
        }


        .status-rejected {
            background: #fde9e9;
            color: #9b3030;
        }


        .empty-reviews {
            padding: 30px 0;

            text-align: center;

            color: #777;
        }


        @media(max-width: 900px) {

            .dashboard-stats {
                grid-template-columns:
                    repeat(2, 1fr);
            }


            .recent-review {
                grid-template-columns:
                    1fr 1fr;
            }

        }


        @media(max-width: 600px) {

            .admin-topbar {
                flex-direction: column;
                align-items: flex-start;
            }


            .admin-actions {
                width: 100%;
                flex-direction: column;
            }


            .admin-actions a,
            .admin-actions form,
            .admin-actions button {
                width: 100%;
            }


            .dashboard-stats {
                grid-template-columns: 1fr;
            }


            .recent-heading {
                flex-direction: column;
                align-items: flex-start;
            }


            .recent-review {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<div class="admin-dashboard">


    {{-- TOP HEADER --}}

    <div class="admin-topbar">

        <div>

            <p class="eyebrow">
                Europe Chauffeur
            </p>

            <h1>
                Admin Dashboard
            </h1>

            <p style="margin-top:8px;color:#777;">

                Welcome,
                {{ auth()->user()->name }}

            </p>

        </div>


        <div class="admin-actions">


            <a
                href="{{ route('admin.reviews.index') }}"
                class="admin-btn"
            >
                Manage Reviews
            </a>


            <form
                method="POST"
                action="{{ route('admin.logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="admin-btn admin-btn-outline"
                >
                    Logout
                </button>

            </form>


        </div>

    </div>



    {{-- REVIEW COUNTS --}}

    <div class="dashboard-stats">


        <div class="dashboard-stat total">

            <div class="label">
                Total Reviews
            </div>

            <div class="number">
                {{ $stats['total'] }}
            </div>

        </div>



        <div class="dashboard-stat pending">

            <div class="label">
                Pending Reviews
            </div>

            <div class="number">
                {{ $stats['pending'] }}
            </div>

        </div>



        <div class="dashboard-stat approved">

            <div class="label">
                Approved Reviews
            </div>

            <div class="number">
                {{ $stats['approved'] }}
            </div>

        </div>



        <div class="dashboard-stat rejected">

            <div class="label">
                Rejected Reviews
            </div>

            <div class="number">
                {{ $stats['rejected'] }}
            </div>

        </div>


    </div>



    {{-- RECENT REVIEWS --}}

    <div class="recent-section">


        <div class="recent-heading">

            <div>

                <p class="eyebrow">
                    Latest Activity
                </p>

                <h2>
                    Recent Reviews
                </h2>

            </div>


            <a
                href="{{ route('admin.reviews.index') }}"
                class="admin-btn admin-btn-outline"
            >
                View All Reviews
            </a>

        </div>



        @forelse($recentReviews as $review)


            <div class="recent-review">


                {{-- CUSTOMER --}}

                <div>

                    <div class="review-name">
                        {{ $review->name }}
                    </div>

                    <div class="review-email">
                        {{ $review->email }}
                    </div>

                </div>



                {{-- REVIEW TYPE --}}

                <div>

                    {{ $review->travel_type ?? 'General Review' }}

                </div>



                {{-- RATING --}}

                <div class="review-stars">

                    {{ str_repeat('★', $review->rating) }}

                </div>



                {{-- STATUS --}}

                <div>

                    <span class="
                        status-badge
                        status-{{ $review->status }}
                    ">

                        {{ $review->status }}

                    </span>

                </div>


            </div>


        @empty


            <div class="empty-reviews">

                No reviews have been submitted yet.

            </div>


        @endforelse


    </div>


</div>


</body>

</html>