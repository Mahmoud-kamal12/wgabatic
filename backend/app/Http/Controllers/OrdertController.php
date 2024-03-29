<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\OpenTimes;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Restaurant;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $res = Auth::guard('web')->user();
        $data = $request->all();
        DB::beginTransaction();
        try {
            $restaurant = Restaurant::find($data['restaurant_id']);

            $day = Carbon::now()->englishDayOfWeek;
            $timeNow = Carbon::now()->format("H:i:s");
            $timeRes = getFRomTo($day);

            if ($timeNow < $timeRes['to'] and $timeNow > $timeRes['from']){
            }else{
                return response()->json(["error" => "المطعم مقفول دلوقتى"],500);
            }

            $order = Order::create([
                "address"=> $data['address'],
                "extra"=> $data['extra'],
                "user_id" => $res->id,
                "resturant_id" => $restaurant->id,
            ]);
            $total = 0;
            foreach ($data['meals'] as $id){
                $meal = Meal::find($id["id"]);
                $item = OrderItem::create([
                    'order_id' => $order->id,
                    'meal_id' => $meal->id,
                    'price' => $meal->price,
                    'name' => $meal->name,
                    'quantity' => $id["q"],
                    'description' => $meal->description
                ]);
                $total += (int)$meal->price * $id["q"];
            }
            $order->total = $total;
            $order->save();
            DB::commit();
            return response()->json(["msg" => "success"],200);
        }catch (\Exception $e){
            DB::rollBack();
            return response()->json(["error" => $e->getMessage()],500);
        }

    }
    public function reorder(Request $request)
    {
        $res = Auth::guard('web')->user();
        $data = $request->all();
        DB::beginTransaction();
        try {
            $orderoldnode = Order::where('id' , $request->get('id'))->first();
            $orderold = $orderoldnode->toArray();

            $restaurant = Restaurant::find($orderold['resturant_id']);

            $day = Carbon::now()->englishDayOfWeek;
            $timeNow = Carbon::now()->format("H:i:s");
            $timeRes = getFRomTo($day);

            if ($timeNow < $timeRes['to'] and $timeNow > $timeRes['from']){
            }else{
                return response()->json(["error" => "المطعم مقفول دلوقتى"],500);
            }
            unset($orderold['updated_at']);
            unset($orderold['created_at']);
            unset($orderold['id']);
            $order = Order::create($orderold);
            $total = 0;
            foreach ($orderoldnode->items as $meal){

                $item = OrderItem::create([
                    'order_id' => $meal->order_id,
                    'meal_id' => $meal->meal_id,
                    'price' => $meal->price,
                    'name' => $meal->name,
                    'quantity' => $meal->quantity,
                    'description' => $meal->description
                ]);
            }
            $order->total = $orderold['total'];
            $order->save();
            DB::commit();
            return response()->json(["msg" => "success"],200);
        }catch (\Exception $e){
            DB::rollBack();
            return response()->json(["error" => $e->getMessage()],500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->get('status');
        $order->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
