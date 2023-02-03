<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function userSignUp(StoreUserRequest $request){
        $user = User::create($request->validated());
        if ($user){
            return redirect()->route('web.login');
        }else{
            return redirect()->route('web.user-signup');
        }
    }

    public function userLogin(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)){
            return redirect()->route('web.home');
        }else{
            return redirect()->route('web.login');
        }
    }

    public function resturantSignUpReq(StoreRestaurantRequest $request){
        $user = Restaurant::create($request->validated());
        if ($user){
            return redirect()->route('web.login');
        }else{
            return redirect()->route('web.resturant-signup');
        }
    }

    public function resturantLogin(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('restaurant')->attempt($credentials)){
            return redirect()->route('web.restaurantProfile');
        }else{
            return redirect()->route('web.login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('web.login');
    }

    public function logoutr(Request $request){
        Auth::guard('restaurant')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('web.login');
    }
}
