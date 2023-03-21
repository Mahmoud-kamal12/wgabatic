<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
        $res = Auth::guard('web')->user();
        $data['user_id'] = $res->id;
        $booking = Booking::create($data);
        return response()->json(["msg" => "success"]);
//        $data['day'] = Carbon::parse($data['day'])->format("Y-m-d");
//        $data['from'] = Carbon::parse($data['from'])->format("H:i:s");
//        $data['to'] = Carbon::parse($data['to'])->format("H:i:s");
//
//        $bookings = Booking::where("day", $data['day'])
//        ->where("from" , "<=" , $data['from'])->where("to",">=",$data['from'])
//        ->where("from" , "<=" ,  $data['to'])->where("to",">=", $data['to'])->get();
//
//        if ($bookings){
//            return response()->json(["error" => "هذه التربيزه محجوزه فى هذا الوقت"]);
//        }



    }

    public function update(Request $request, $id)
    {
        $order = Booking::find($id);
        $order->status = $request->get('status');
        $order->save();
        return back();
    }
}
