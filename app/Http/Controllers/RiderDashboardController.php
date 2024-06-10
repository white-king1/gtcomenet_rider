<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiderDashboardController extends Controller
{
    public function riderDashboard(){
        return view('rider.rider_dashboard');
    }
}
