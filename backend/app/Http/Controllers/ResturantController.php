<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Review;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function addreview(Request $request){
        $res = Auth::guard('web')->user();
        $data = $request->all();
        $data['user_id'] = $res->id;
        $meal = Review::create($data);
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

    public function tableadd(Request $request){
        $res = auth()->guard('restaurant')->user();
        $data = $request->all();
        $data['restaurant_id'] = $res->id;
        $meal = Table::create($data);
        return redirect()->back();
    }

    public function tableupdate(Request $request , $id){
        $res = auth()->guard('restaurant')->user();
        $data = $request->all();
        // dd($data , $id);
        $data['restaurant_id'] = $res->id;
        $meal = Table::where('id',$id)->first();
        $meal->update($data);
        return redirect()->back();
    }

    public function tabledelete(Request $request , $id){
        $meal = Table::where('id',$id)->first();
        $meal->delete();
        return redirect()->back();
    }

    public function update(Request $request){
        $res = auth()->guard('restaurant')->user();
        $data = $request->all();
        if ($request->has('logo') && $request->file('logo')){
            $data['logo'] = 'uploads/'.Storage::disk('public')->putFile('media',$request->file('logo'));
        }else{
            unset($data['logo']);
        }

        if ($request->has('cover') && $request->file('cover')){
            $data['cover'] = 'uploads/'.Storage::disk('public')->putFile('media',$request->file('cover'));
        }else{
            unset($data['cover']);
        }
        $res->update($data);
        return redirect()->back();
    }
}
