<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])
    ->name('landing');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');


// Route::get('/', [PageController::class, 'home'])->name('home');

// Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');
