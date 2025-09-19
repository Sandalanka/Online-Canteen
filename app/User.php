<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'id_number',
        'contact_number',
        'faculty'
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
