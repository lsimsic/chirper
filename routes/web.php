<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChirpController::class, 'index']);

Route::post('/chirps', [ChirpController::class, 'store']);
Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);
Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);

// The above 4 routes are for the Chirp resource, but we can also use a
// resource route to generate them all at once. Uncomment the line below
// to use a resource route instead of the individual routes above.
//
// Route::resource('chirps', ChirpController::class)
//  ->only(['store', 'edit', 'update', 'destroy']);
