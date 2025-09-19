<?php

namespace App\Repositories;
use App\Food;
use App\Interfaces\FoodRepositoryInterface;

class FoodRepository implements FoodRepositoryInterface
{
     /**
     * create
     *
     * @param  mixed $data
     * @return void
     */
    public function create(array $data){
        return Food::create($data);
    }
    
    /**
     * show
     *
     * @return void
     */
    public function show(){
       return Food::all();
    }
}
