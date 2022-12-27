<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResturantController extends Controller
{
    public function restaurantProfile(){
        return view('web.resturant-profile');
    }

    public function menuadd(Request $request){
        $res = auth()->guard('restaurant')->user();
        $data = $request->all();
        $data['restaurant_id'] = $res->id;
        $meal = Meal::create($data);
        return redirect()->back();
    }

    public function menuupdate(Request $request , $id){
        $res = auth()->guard('restaurant')->user();
        $data = $request->all();
        $data['restaurant_id'] = $res->id;
        $meal = Meal::where('id',$id)->first();
        $meal->update($data);
        return redirect()->back();
    }

    public function menudelete(Request $request , $id){
        $meal = Meal::where('id',$id)->first();
        $meal->delete();
        return redirect()->back();
    }

    public function update(Request $request){
        $res = auth()->guard('restaurant')->user();
        $data = $request->all();
        if ($request->has('logo') && $request->file('logo')){
            $data['logo'] = 'uploads/'.Storage::disk('public')->putFile('media',$request->file('logo'));
        }else{
            $data['logo'] = null;
        }

        if ($request->has('cover') && $request->file('cover')){
            $data['cover'] = 'uploads/'.Storage::disk('public')->putFile('media',$request->file('cover'));
        }else{
            $data['cover'] = null;
        }
        $res->update($data);
        return redirect()->back();
    }
}
