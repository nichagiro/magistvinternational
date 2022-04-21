<?php

use App\Http\Controllers\IndexController;
use App\Http\Livewire\dashboard;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index'])->middleware('throttle:15,1')->name('');

Route::fallback(function () {
    return response(view('status.404'), 404);   
});


// Auth::routes();
// Route::get('/dashboard', dashboard::class)->name('dashboard');;