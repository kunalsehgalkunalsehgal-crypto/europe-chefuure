<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>
        Manage Reviews | Europe Chauffeur
    </title>

    <link
        rel="stylesheet"
        href="/css/app.css"
    >

    <style>
        body {
            background: #f4f2ec;
        }

        .admin-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .admin-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .review-admin-card {
            background: #fff;
            border: 1px solid #e6e3da;
            padding: 25px;
            margin-bottom: 20px;
        }

        .review-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px 25px;
            margin-top: 20px;
        }

        .review-message {
            margin-top: 20px;
            padding: 20px;
            background: #f8f7f3;
            line-height: 1.7;
        }

        .review-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .status {
            display: inline-block;
            padding: 6px 12px;
            font-size: 12px;
            text-transform: uppercase;
        }

        .status-pending {
            background: #fff5d6;
            color: #8a6512;
        }

        .status-approved {
            background: #e6f7e8;
            color: #256c32;
        }

        .status-rejected {
            background: #fde8e8;
            color: #a52929;
        }

        .approve-btn,
        .reject-btn {
            border: 0;
            padding: 10px 18px;
            cursor: pointer;
        }

        .approve-btn {
            background: #17181b;
            color: #fff;
        }

        .reject-btn {
            background: transparent;
            border: 1px solid #17181b;
        }

        @media(max-width: 700px) {
            .review-info {
                grid-template-columns: 1fr;
            }

            .admin-head {
                align-items: flex-start;
                flex-direction: column;
            }

            .review-actions {
                flex-direction: column;
            }

            .review-actions form,
            .review-actions button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="admin-wrapper">

    <div class="admin-head">

        <div>
            <p class="eyebrow">
                Europe Chauffeur Admin
            </p>

            <h1>
                Manage Reviews
            </h1>
        </div>

        <a
            href="{{ route('admin.dashboard') }}"
            class="btn-ghost-dark"
        >
            Dashboard
        </a>

    </div>


    @if(session('success'))

        <div style="
            padding:15px;
            margin-bottom:20px;
            background:#e6f7e8;
            color:#256c32;
        ">
            {{ session('success') }}
        </div>

    @endif

{{-- REVIEW FILTERS --}}

<div class="review-filters">

    <a
        href="{{ route('admin.reviews.index') }}"
        class="review-filter {{ $status === 'all' ? 'active' : '' }}"
    >
        All
        <span>{{ $counts['all'] }}</span>
    </a>


    <a
        href="{{ route('admin.reviews.index', ['status' => 'pending']) }}"
        class="review-filter {{ $status === 'pending' ? 'active' : '' }}"
    >
        Pending
        <span>{{ $counts['pending'] }}</span>
    </a>


    <a
        href="{{ route('admin.reviews.index', ['status' => 'approved']) }}"
        class="review-filter {{ $status === 'approved' ? 'active' : '' }}"
    >
        Approved
        <span>{{ $counts['approved'] }}</span>
    </a>


    <a
        href="{{ route('admin.reviews.index', ['status' => 'rejected']) }}"
        class="review-filter {{ $status === 'rejected' ? 'active' : '' }}"
    >
        Rejected
        <span>{{ $counts['rejected'] }}</span>
    </a>

</div>
    @forelse($reviews as $review)

        <div class="review-admin-card">

            <div style="
                display:flex;
                align-items:center;
                justify-content:space-between;
                gap:15px;
                flex-wrap:wrap;
            ">

                <div>

                    <h2>
                        {{ $review->name }}
                    </h2>

                    <div style="
                        color:#cba15e;
                        margin-top:5px;
                    ">
                        {{ str_repeat('★', $review->rating) }}
                    </div>

                </div>


                <span class="
                    status
                    status-{{ $review->status }}
                ">
                    {{ $review->status }}
                </span>

            </div>


            <div class="review-info">

                <div>
                    <strong>Email:</strong>
                    {{ $review->email }}
                </div>

                <div>
                    <strong>Phone:</strong>
                    {{ $review->phone ?? '—' }}
                </div>

                <div>
                    <strong>Location:</strong>

                    {{ $review->city ?? '—' }}

                    @if($review->country)
                        , {{ $review->country }}
                    @endif
                </div>

                <div>
                    <strong>Travel Type:</strong>
                    {{ $review->travel_type ?? '—' }}
                </div>

                <div>
                    <strong>Journey Date:</strong>

                    {{ $review->journey_date
                        ? $review->journey_date->format('d M Y')
                        : '—'
                    }}
                </div>

                <div>
                    <strong>Submitted:</strong>

                    {{ $review->created_at->format('d M Y, h:i A') }}
                </div>

            </div>


            <div class="review-message">

                {{ $review->review }}

            </div>


            {{-- @if($review->status === 'pending')

                <div class="review-actions">

                    <form
                        method="POST"
                        action="{{ route('admin.reviews.approve', $review) }}"
                    >

                        @csrf
                        @method('PATCH')

                        <button
                            type="submit"
                            class="approve-btn"
                        >
                            Approve
                        </button>

                    </form>


                    <form
                        method="POST"
                        action="{{ route('admin.reviews.reject', $review) }}"
                    >

                        @csrf
                        @method('PATCH')

                        <button
                            type="submit"
                            class="reject-btn"
                        >
                            Reject
                        </button>

                    </form>

                </div>

            @endif --}}
            @if($review->status === 'pending')

    <div class="review-actions">

        {{-- APPROVE --}}
        <form
            method="POST"
            action="{{ route('admin.reviews.approve', $review) }}"
        >
            @csrf
            @method('PATCH')

            <button
                type="submit"
                class="approve-btn"
            >
                Approve
            </button>
        </form>


        {{-- REJECT --}}
        <form
            method="POST"
            action="{{ route('admin.reviews.reject', $review) }}"
        >
            @csrf
            @method('PATCH')

            <button
                type="submit"
                class="reject-btn"
            >
                Reject
            </button>
        </form>

    </div>


@elseif($review->status === 'approved')

    <div class="review-actions">

        {{-- REMOVE FROM WEBSITE --}}
        <form
            method="POST"
            action="{{ route('admin.reviews.unpublish', $review) }}"
        >
            @csrf
            @method('PATCH')

            <button
                type="submit"
                class="reject-btn"
            >
                Remove from Website
            </button>
        </form>

    </div>

@endif

        </div>

    @empty

        <div class="review-admin-card">
            No reviews submitted yet.
        </div>

    @endforelse
    <div style="margin-top:30px;">
    {{ $reviews->links() }}
</div>

</div>

</body>
</html>