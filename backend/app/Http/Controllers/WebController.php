<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function about()
    {
        return view('web.about');
    }
    public function home()
    {
        return view('web.home' , ['mahmoud' => "/assets/photos/imgs/italian-pizza.jpeg"]);

    }
    public function contact()
    {
        return view('web.contact');
    }
    public function ordering()
    {
        return view('web.ordering');
    }
    public function faqs()
    {
        return view('web.faqs');
    }
    public function howItWork()
    {
        return view('web.how-it-work');
    }
    public function login()
    {
        return view('web.login');
    }
    public function userSignUp()
    {
        return view('web.user-signup');
    }
    public function resturantSignUp()
    {
        return view('web.resturant-signup');
    }
}
