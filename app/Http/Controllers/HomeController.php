<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function home(){
        return view("home.home");
    }
    public function hometest(){
        return view("home.hometest");
    }
    public function test(){
        return view("home.test");
    }
    public function non(){
        return view("home.non");
    }
    // public function slider(){
    //     return view("home.slider");
    // }

    // earth
    public function sidebar(){
        return view("dashboard.sidebar");
    }
    public function property(){
        return view("propertyDetail.property");
    }
    public function trialrun(){
        return view(".trialrun");
    }
}
