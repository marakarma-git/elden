<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\LandingHomeController;

Route::get('/', function () {
    return view('welcome');
});


//Home
Route::get('/landing1', [LandingHomeController::class, 'landing1']);
Route::get('/landing2', [LandingHomeController::class, 'landing2']);
Route::get('/landing3', [LandingHomeController::class, 'landing3']);
Route::get('/landing4', [LandingHomeController::class, 'landing4']);
Route::get('/landing5', [LandingHomeController::class, 'landing5']);

