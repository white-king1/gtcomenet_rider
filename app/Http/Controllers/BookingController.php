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

        return redirect()->route('confirm.booking',  ['id' => $post_booking->id])->with('flash_message', 'You have successfully Placed an Order..')->with('flash_type', 'alert-success');
    }

    // public function confirmBooking($id){
    //     $post_booking = ArtImage::with('booking')->where('item_id', $id)->get();





    //     return view('user.confirm_booking', compact('post_booking', 'id'));

    // }

//     public function confirmBooking($id, ArtImage $artImage)
// {
//     $post_booking = $artImage->with('booking')->where('item_id', $id)->get();

//     if ($post_booking->isEmpty()) {
//         return redirect()->back()->with('error', 'No booking found for this item.');
//     }

//     return view('user.confirm_booking', compact('post_booking', 'id'));
// }

public function confirmBooking($id)
{
    $post_booking = ArtImage::with('booking')->where('item_id', $id)->get();
    // dd($post_booking);


    if ($post_booking->isEmpty()) {
        return redirect()->back()->with('error', 'No booking found for this item.');
    }

    // dd(compact('post_booking', 'id'));


    return view('user.confirm_booking', compact('post_booking', 'id'));
}




}
