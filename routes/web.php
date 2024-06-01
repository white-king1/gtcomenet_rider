<?php

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







});

// ADMIN MIDDLEWARE AUTHENTICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('master_admin')->group(function () {

});

// ADMIN MIDDLEWARE AUTHENTICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('admin')->group(function () {

});
