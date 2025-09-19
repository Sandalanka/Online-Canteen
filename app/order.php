<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'food_id',
        'user_id',
        'amount',
        'date'
    ];

    public function food(){
        return $this->belongsTo(Food::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
