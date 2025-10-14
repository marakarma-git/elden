<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingHomeController extends Controller
{
    public function landingHome(){
        return view('landing.pages.landing_home');
    }
}
