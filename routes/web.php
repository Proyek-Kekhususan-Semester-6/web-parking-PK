<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SentimentController;
use App\Http\Controllers\SlotParkirController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;




// Parking Route
Route::get('/home', [ParkingController::class, 'index'])->name("home");
Route::get('/', [ParkingController::class, 'index'])->name("home");
Route::get('/parking-lots', [ParkingController::class, 'retrieve']);
Route::get('/search_parkir', [ParkingController::class, 'search']);
Route::post('/parking', [ParkingController::class, 'update']);

// Sentiment Route
Route::get('/sentiment', [SentimentController::class, 'index'])->name("sentiment");
Route::post('/create-sentiment', [SentimentController::class, 'create']);

// Profile Route
Route::get('/profile', [ProfileController::class, 'index']);


// Admin Route
Route::get('/login', [AdminController::class, 'login'])->middleware("guest");
Route::post('/login/auth', [AdminController::class, 'authenticate'])->middleware("guest");
// Route::get('/register', [AdminController::class, 'register']);

Route::middleware("auth")->group(function () {
  Route::get('/logout', [AdminController::class, 'logout']);
  Route::get('/dashboard', [AdminController::class, 'index']);
  Route::get('/dashboard/parking_lots', [AdminController::class, 'retrieve'])->name('dashboard.parking_lots');

  Route::get('/dashboard/parking_lots/detail/{slotParkir}', [AdminController::class, 'show']);

  Route::get('/dashboard/parking_lots/create', [AdminController::class, 'create'])->name("dashboard.parking_lots.create");
  Route::post('/dashboard/parking_lots/store', [AdminController::class, 'store']);

  Route::get('/dashboard/parking_lots/edit/{slotParkir}', [AdminController::class, 'edit'])->name("dashboard.parking_lots.edit");
  Route::post('/dashboard/parking_lots/update/{slotParkir}', [AdminController::class, 'update']);

  Route::get('/dashboard/parking_lots/delete/{slotParkir}', [AdminController::class, 'destroy']);
});
