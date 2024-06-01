<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {


        $userb = Booking::where('booker_id', Auth::user()->id)->latest()->take(3)->get(); //Only orders that have the user id as the auth user id
        $riderb = Booking::where('rider_id', Auth::user()->id)->latest()->take(3)->get(); //Only orders that have the user id as the auth user id


        $wallet = Wallet::where('user_id', Auth::user()->id)->exists();




        if ($wallet == false) {
            $wallet = new Wallet();
            $wallet->user_id = Auth::user()->id;

            $wallet->save();
            return redirect()->route('user.dashboard')->with('flash_message', 'You successfully logged in to your dashboard.')
                ->with('flash_type', 'alert-success');
        }
        return view('user.dashboard', compact('userb', 'riderb', 'wallet'));
    }


    // public function justReceived($booking_id)
    // {
    //     $pt_booking = Booking::find($booking_id);

    //     if (!$pt_booking) {
    //         return redirect()->route('home')->with('error', 'Booking record not found.');
    //     }

    //     if ($pt_booking->status == 'pending') {

    //         $pt_booking->status = 'completed';
    //         $pt_booking->save();
    //         dd( $pt_booking);

    //     }

    //     return redirect()->route('home')->with('info', 'Booking status was not pending.');
    // }
}
