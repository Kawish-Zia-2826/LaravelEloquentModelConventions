<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('flights', FlightController::class);
Route::get('show', [ContactController::class, 'show']);
