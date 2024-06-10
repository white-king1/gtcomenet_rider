<?php

use App\Http\Controllers\RidersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@index' )->name('welcome');
Route::get('/contact_us', 'MainController@contactUs' )->name('contact.us');


// ADMIN MIDDLEWARE AUTHENTICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/', 'DashboardController@index')->name('user.dashboard');
    Route::get('/booking', 'BookingController@userBooking')->name('users.booking');
    Route::post('/post_booking', 'BookingController@postBooking')->name('post.booking');
    Route::get('/booking_confirmtion/{id}', 'BookingController@confirmBooking')->name('confirm.booking');
    Route::post('/just_recieved/{id}', 'HomeController@justReceived')->name('just.recieved');
    Route::post('/just_delivered/{id}', 'BookingController@justDelivered')->name('just.delivered');
    Route::get('/view_bookings', 'BookingController@viewBookings')->name('view.bookings');
    Route::get('/user_bookings', 'BookingController@viewUserBookings')->name('view.userbookings');
    Route::get('/riders', 'RidersController@rideNow')->name('riders.index');


    Route::get('/riders/{id}', 'RidersController@show')->name('riders.show');


    Route::post('/riders/{id}/ratings', 'RatingsController@store')->name('ratings.store');










});

// ADMIN MIDDLEWARE AUTHENTICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('master_admin')->group(function () {
 Route::get('/master_admin_dashboard', 'MasterAdminDashboardController@masterDashboard')->name('master.dashboard');
 Route::get('/all_users', 'MasterAdminDashboardController@allUsers')->name('all.users');

 Route::post('/switched_to_rider/{id}', 'MasterAdminDashboardController@switchRider')->name('switch.rider');
 Route::post('/switched_to_admin/{id}', 'MasterAdminDashboardController@switchAdmin')->name('switch.admin');
 Route::get('/delete_users/{id}', 'MasterAdminDashboardController@deleteUsers')->name('delete.users');



});

// ADMIN MIDDLEWARE AUTHENTICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('rider')->group(function () {
    Route::get('/rider_dashboard', 'RiderDashboardController@riderDashboard')->name('rider.dashboard');

});

// ADMIN MIDDLEWARE AUTHENTICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('admin')->group(function () {

});
