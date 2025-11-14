<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingHomeController extends Controller
{
    public function landing1(){
        return view('landing.landing1');
    }

    public function landing2(){
        return view('landing.landing2');
    }

    public function landing3(){
        return view('landing.landing3');
    }

    public function landing4(){
        return view('landing.landing4');
    }

    public function landing5(){
        return view('landing.landing5');
    }
}
