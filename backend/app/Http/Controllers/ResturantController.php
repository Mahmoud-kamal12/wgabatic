<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResturantController extends Controller
{
    public function restaurantProfile(){
        return view('web.resturant-profile');
    }
}
