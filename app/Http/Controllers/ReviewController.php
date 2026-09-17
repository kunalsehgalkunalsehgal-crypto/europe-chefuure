<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'country' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',

            'rating' => 'required|integer|min:1|max:5',

            'travel_type' => 'nullable|string|max:100',

            'journey_date' => 'nullable|date',

            'review' => 'required|string|max:2000',
        ]);


        $data['status'] = 'pending';


        Review::create($data);


        return back()->with(
            'review_success',
            'Thank you. Your review has been submitted for approval.'
        );
    }
}