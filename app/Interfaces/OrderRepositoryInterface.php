<?php

namespace App\Interfaces;

interface OrderRepositoryInterface
{
     /**
     * create
     *
     * @param  mixed $data
     * @return void
     */
    public function create(array $data);
    
    /**
     * show
     *
     * @return void
     */
    public function show();
}
