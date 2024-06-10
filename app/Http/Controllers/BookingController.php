<?php

namespace App\Http\Controllers;

use App\ArtImage;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stringable;

class BookingController extends Controller
{
    public function userBooking() {
        return view('user.booking');
    }



    public function postBooking(Request $request)
    {
        $request->validate([
            // 'display_image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
            'images.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
        ]);

        $bookingId = \Str::random(10);


        $post_booking = new Booking();
        $post_booking->booker_id = Auth::user()->id;
        $post_booking->item_description = $request->item_description;
        $post_booking->quantity = $request->quantity;
        $post_booking->location = $request->location;
        $post_booking->booking_id = $bookingId;

        $post_booking->rider_id = Auth::user()->id;


        $post_booking->save();

        foreach ($request->images as $img) {
            if ($img->isValid()) {
                $ext = $img->extension();
                $imageName = time() . uniqid() . '.' . $ext;
                $img->move(public_path('art_images'), $imageName);

                $artImage = new ArtImage();
                $artImage->name = $imageName;
                $artImage->item_id = $post_booking->id;
                $artImage->save();
            } else {
                // Handle file upload error
            }
        }

        // $routeUri = '/user/user/booking_confirmtion/'.$post_booking->id;
        // dd($routeUri);

        return redirect()->route('home')->with('flash_message', 'Booking Successfull..')
        ->with('flash_type', 'alert-success');;
    }

    public function viewBookings(){

         $all_bookings = Booking::latest()->get();


        return view('user.view_bookings', compact('all_bookings'));
    }

    public function justDelivered($id)
    {
        $post_booking = Booking::find($id);

        if (!$post_booking) {
            return redirect()->route('home')->with('error', 'Booking record not found.');
        }

        if ($post_booking->status == 'pending') {

            $post_booking->status = 'delivered';
            $post_booking->save();

        }

        return redirect()->route('view.bookings')->with('flash_message', 'Booking Delivered, Item(s) Delivered..')
        ->with('flash_type', 'alert-success');
    }




public function confirmBooking($id)
{
    $post_booking = ArtImage::with('booking')->where('item_id', $id)->get();


    // dd($post_booking);


    if ($post_booking->isEmpty()) {
        return redirect()->back()->with('error', 'No booking found for this item.');
    }

    // dd(compact('post_booking', 'id'));


    return view('user.confirm_booking', compact('post_booking', 'id'));

    // return redirect()->to($routeUri);
}

public function viewUserBookings(){
    $viewUserB = Booking::where('booker_id', Auth::user()->id)->latest()->get(); //Only orders that have the user id as the auth user id

    return view('user.view_user_bookings', compact('viewUserB'));
}




}
