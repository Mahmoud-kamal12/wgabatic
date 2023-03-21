<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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

    public function resetpassrest(Request $request){
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $credentials = $validator->validated();
        $user = Auth::guard('restaurant')->attempt(['email' => \auth()->guard('restaurant')->user()->email , 'password' => $credentials['old_password']]);

        if ($user){
            \auth()->user()->update([
                'password' => $credentials['password'],
            ]);
            $success = "your password changed";
            session()->flash('success' ,$success);
            return  redirect()->back();
        }
        $error = "wrong password";
        session()->flash('error' ,$error);
        return  redirect()->back();
    }
    public function resetpassuser(Request $request){
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $credentials = $validator->validated();
        $user = Auth::guard('restaurant')->attempt(['email' => \auth()->guard('restaurant')->user()->email , 'password' => $credentials['old_password']]);

        if ($user){
            \auth()->user()->update([
                'password' => $credentials['password'],
            ]);
            $success = "your password changed";
            session()->flash('success' ,$success);
            return  redirect()->back();
        }
        $error = "wrong password";
        session()->flash('error' ,$error);
        return  redirect()->back();
    }

}
