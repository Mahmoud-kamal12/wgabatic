<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Restaurant extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'phone', 'm_name', 'm_phone', 'contact_email', 'password' , 'cover','logo' , 'pickup_fee','pickup_time','country','city','Latitude','Longitude' , 'description' , 'table_status','delevery','tax'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

     protected $appends = ['table_res'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function orders(){
        return $this->hasMany(Order::class , 'resturant_id');
    }

    public function bookings(){
        return $this->hasMany(Booking::class , 'restaurant_id');
    }

    public function opendayes(){
        return $this->hasMany(OpenTimes::class , 'restaurant_id');
    }

    public function meals(){
        return $this->hasMany(Meal::class);
    }

    public function tables(){
        return $this->hasMany(Table::class);
    }

    public function gettableResAttribute()
{

    return $this->table_status ? "yes":"no";

}

}
