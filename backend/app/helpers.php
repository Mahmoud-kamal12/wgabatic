<?php
require __DIR__.'/../vendor/autoload.php';

use App\Models\OpenTimes;

if (! function_exists('getFRomTo')) {

    function getFRomTo($day){
        $restaurant_id = auth()->user()->id;
        $found = OpenTimes::where("restaurant_id" , $restaurant_id)->where("day" , $day)->first();
        if ($found){
            return ['from' => $found->from , 'to' =>$found->to];
        }else{
            return ['from' => null , 'to' => null];

        }
    }

}
