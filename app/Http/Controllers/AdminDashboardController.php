<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'total' => Review::count(),

            'pending' => Review::where('status', 'pending')->count(),

            'approved' => Review::where('status', 'approved')->count(),

            'rejected' => Review::where('status', 'rejected')->count(),
        ];


        $recentReviews = Review::latest()
            ->take(5)
            ->get();


        return view('admin.dashboard', [
            'stats' => $stats,
            'recentReviews' => $recentReviews,
        ]);
    }
}