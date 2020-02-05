<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fronttwoController extends Controller
{
    public function login(){
        return view('front2/login-page');

    }    

    public function documents(){
        return view('front2/documents');

    }    

    public function add_car(){
        return view('front2/add-car');

    }    

       public function car_page(){
        return view('front2/car-page');

    }    

       public function car_search(){
        return view('front2/car-search');

    }    

    public function cars(){
        return view('front2/cars');

    }    

    public function refera_friend(){
        return view('front2/referafriend');

    }    

    public function saved_cars(){
        return view('front2/saved-cars');

    }    


    
}
