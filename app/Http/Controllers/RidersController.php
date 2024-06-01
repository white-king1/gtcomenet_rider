<?php

namespace App\Http\Controllers;

use App\Riders;
use Illuminate\Http\Request;
use InvalidArgumentException;

class RidersController extends Controller
{
    public function rideNow()
    {
        $riders = Riders::with('ratings')->get();
        return view('user.ride_now', compact('riders'));
    }

    public function show($id)
    {
        $rider = Riders::with('ratings')->findOrFail($id);
        return view('user.show', compact('rider'));
    }

   
}
