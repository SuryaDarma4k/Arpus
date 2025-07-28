<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index']);
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
