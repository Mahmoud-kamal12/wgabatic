<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenTimes extends Model
{
    use HasFactory;
    protected $fillable = ['day' , 'from' , 'to' , 'restaurant_id'];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class , 'restaurant_id');
    }

}
