<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ["number","cap",'restaurant_id' , 'price'];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
