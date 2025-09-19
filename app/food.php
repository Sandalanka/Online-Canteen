<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name',
        'price',
    ];


    public function order(){
        return $this->hasMany(Order::class);
    }
}
