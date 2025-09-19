<?php

namespace App\Repositories;
use App\Interfaces\OrderRepositoryInterface;
use App\Order;

class OrderRepository implements OrderRepositoryInterface
{
    /**
     * create
     *
     * @param  mixed $data
     * @return void
     */
    public function create(array $data){
        return Order::create($data);
    }
    
    /**
     * show
     *
     * @return void
     */
    public function show(){
       return Order::all();
    }
}
