<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userb = Booking::where('booker_id', Auth::user()->id)->get(); //Only orders that have the user id as the auth user id
       $riderb = Booking::where('rider_id', Auth::user()->id)->get(); //Only orders that have the user id as the auth user id

        if(Auth::user()->usertype == 'admin'){
          return redirect()->route('admin');
        }elseif(Auth::user()->usertype == 'master_admin'){
            return redirect()->route('master_admin');
        } else{
        return view('user.dashboard', compact('userb','riderb',));
    }
    }

    public function justReceived($id)
    {
        $post_booking = Booking::find($id);

        if (!$post_booking) {
            return redirect()->route('home')->with('error', 'Booking record not found.');
        }

        if ($post_booking->status == 'pending' || $post_booking->status == 'delivered') {

            $post_booking->status = 'completed';
            $post_booking->save();

        }


        return redirect()->route('home')->with('flash_message', 'Booking Completed, Item(s) Recieved..')
        ->with('flash_type', 'alert-success');
    }


    // public function justDelivered($id)
    // {
    //     $post_booking = Booking::find($id);

    //     if (!$post_booking) {
    //         return redirect()->route('home')->with('error', 'Booking record not found.');
    //     }

    //     if ($post_booking->status == 'pending') {

    //         $post_booking->status = 'delivered';
    //         $post_booking->save();

    //     }

    //     return redirect()->route('home')->with('flash_message', 'Booking Delivered, Item(s) Delivered..')
    //     ->with('flash_type', 'alert-success');
    // }
}
