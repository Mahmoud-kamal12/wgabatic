<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Restaurant;
use App\Models\Review;
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
            $order = Order::create([
                "address"=> $data['address'],
                "extra"=> $data['extra'],
                "user_id" => $res->id,
                "resturant_id" => $restaurant->id,
            ]);
            $total = 0;
            foreach ($data['meals'] as $id){
                $meal = Meal::find($id);
                $item = OrderItem::create([
                    'order_id' => $order->id,
                    'meal_id' => $meal->id,
                    'price' => $meal->price,
                    'name' => $meal->name,
                    'description' => $meal->description
                ]);
                $total += (int)$meal->price;
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
