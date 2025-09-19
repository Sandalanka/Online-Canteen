<?php

namespace App\Repositories;
use App\Interfaces\AuthRepositoryInterface;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterface
{
    /**
     * summary: user register
     *
     * @param  mixed $data
     * @return void
     */
    public function register(array $data){
        return User::create($data);
    }
        
    /**
     * summary: user login
     *
     * @param  mixed $data
     * @return void
     */
    public function login(array $data){
        $login =false;
        if(Auth::attempt($data)){
           $login =true;
        }
        return $login;
    }  
     
    /**
     * summary: user logout
     *
     * @return void
     */
    public function logout(){
        Auth::logout();
        Session::flush();
    }
}
