<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\LandingHomeController;

Route::get('/', function () {
    return view('welcome');
});


//Home
Route::get('/home', [LandingHomeController::class, 'landingHome']);

