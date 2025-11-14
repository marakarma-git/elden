<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\LandingHomeController;

// Route::get('/', function () {
//     return view('welcome');
// });


//Home
Route::get('/', [LandingHomeController::class, 'landing1'])->name('home');
Route::get('/hal-1', [LandingHomeController::class, 'landing1'])->name('hal-1');
Route::get('/hal-2', [LandingHomeController::class, 'landing2'])->name('hal-2');
Route::get('/hal-3', [LandingHomeController::class, 'landing3'])->name('hal-3');
Route::get('/hal-4', [LandingHomeController::class, 'landing4'])->name('hal-4');
Route::get('/hal-5', [LandingHomeController::class, 'landing5'])->name('hal-5');

