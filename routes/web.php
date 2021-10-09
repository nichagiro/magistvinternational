<?php

use App\Http\Livewire\dashboard;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/dashboard', dashboard::class)->name('dashboard');;

Route::fallback(function () {

    return response(view('status.404'), 404);   

});