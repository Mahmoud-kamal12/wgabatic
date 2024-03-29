<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function about()
    {
        return view('web.about');
    }
    public function home()
    {
        $restaurants = Restaurant::inRandomOrder()->limit(3)->get();
        return view('web.home' , ['mahmoud' => "/assets/photos/imgs/italian-pizza.jpeg" , 'restaurants' => $restaurants]);
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function ordering($id)
    {
        $restaurant = Restaurant::where('id' , $id)->with(['meals','tables'])->first();
    //    dd($restaurant->toArray());
        return view('web.ordering', compact(['restaurant']));
    }
    public function resturants()
    {
        $restaurants = Restaurant::all();
    //    dd($restaurants[0]->toArray());
        return view('web.resturants',compact(['restaurants']));
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
