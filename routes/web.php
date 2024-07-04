<?php

use App\Http\Controllers\ParkingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SentimentController;
use App\Http\Controllers\SlotParkirController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.users.welcome');
});




// Route::resource('parking'    , SlotParkirController::class);
// Parking Route
Route::get('/home', [ParkingController::class, 'index']);
Route::get('/parking-lots', [ParkingController::class, 'retrieve']);
Route::post('/parking', [ParkingController::class, 'update']);

// Sentiment Route
Route::get('/sentiment', [SentimentController::class, 'index']);

// Profile Route
Route::get('/profile', [ProfileController::class, 'index']);
