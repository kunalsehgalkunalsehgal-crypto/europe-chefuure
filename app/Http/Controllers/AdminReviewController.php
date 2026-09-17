<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminReviewController extends Controller
{
    public function index(Request $request): View
    {
        // URL se status lena
        $status = $request->query('status', 'all');

        // Sirf ye statuses allowed hain
        $allowedStatuses = [
            'all',
            'pending',
            'approved',
            'rejected',
        ];

        // Agar galat status URL me aaye
        if (!in_array($status, $allowedStatuses, true)) {
            $status = 'all';
        }


        // Reviews query start
        $query = Review::latest();


        // Agar All nahi hai to status filter laga do
        if ($status !== 'all') {
            $query->where('status', $status);
        }


        // Final reviews nikalo
                // $reviews = $query->get();
$reviews = $query ->paginate(10)->withQueryString();

        // Filter buttons ke counts
        $counts = [
            'all' => Review::count(),

            'pending' => Review::where(
                'status',
                'pending'
            )->count(),

            'approved' => Review::where(
                'status',
                'approved'
            )->count(),

            'rejected' => Review::where(
                'status',
                'rejected'
            )->count(),
        ];


        return view('admin.reviews.index', [
            'reviews' => $reviews,
            'status' => $status,
            'counts' => $counts,
        ]);
    }


    public function approve(Review $review): RedirectResponse
    {
        $review->update([
            'status' => 'approved',
        ]);

        return back()->with(
            'success',
            'Review approved successfully.'
        );
    }


    public function reject(Review $review): RedirectResponse
    {
        $review->update([
            'status' => 'rejected',
        ]);

        return back()->with(
            'success',
            'Review rejected successfully.'
        );
    }


    public function unpublish(Review $review): RedirectResponse
    {
        $review->update([
            'status' => 'pending',
        ]);

        return back()->with(
            'success',
            'Review removed from the website successfully.'
        );
    }
}