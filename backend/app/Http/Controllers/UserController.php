<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile(){
        $user = auth()->guard('web')->user();

        return view('web.user-profile', compact('user'));
    }
}
