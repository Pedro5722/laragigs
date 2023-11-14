<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listing/{id}', function($id){
    return view('listing',[
        'heading' => 'Search for '. $id,
        'listings' => Listing::find($id)
    ]);
});



Route::get('/hello', function () {
    return "hola Mundo";
});

Route::get('/post/{id}', function ($id) {
    // dump($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');
