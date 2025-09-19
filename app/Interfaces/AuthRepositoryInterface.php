<?php

namespace App\Interfaces;

interface AuthRepositoryInterface
{    
    /**
     * summary: user register
     *
     * @param  mixed $data
     * @return void
     */
    public function register(array $data);
        
    /**
     * summary: user login
     *
     * @param  mixed $data
     * @return void
     */
    public function login(array $data);   
     
    /**
     * summary: user logout
     *
     * @return void
     */
    public function logout();
}
