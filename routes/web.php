<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ResellersController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index'])->middleware('throttle:15,1')->name('');
Route::get('resellers', [ResellersController::class, 'index'])->middleware('throttle:15,1')->name('resellers');


Route::fallback(function () {
    return response(view('status.404'), 404);   
});


// Auth::routes();
// Route::get('/dashboard', dashboard::class)->name('dashboard');;