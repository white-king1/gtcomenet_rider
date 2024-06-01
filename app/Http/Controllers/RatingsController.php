<?php

namespace App\Http\Controllers;

use App\Ratings;
use Illuminate\Http\Request;

class RatingsController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min=1|max=5',
        ]);

        Ratings::create([
            'rider_id' => $id,
            'user_id' => auth()->id(),
            'rating' => $request->rating,
        ]);

        return redirect()->route('some.route');
    }
}
