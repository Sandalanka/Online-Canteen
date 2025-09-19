<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\AuthRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{ 
    private AuthRepositoryInterface $authRepositoryInterface;
    
    /**
     * __contrutor
     *
     * @param  mixed $authRepositoryInterface
     * @return void
     */
    public function __construct(AuthRepositoryInterface $authRepositoryInterface){
       $this->authRepositoryInterface = $authRepositoryInterface;
    }

    
    /**
     * userRegister
     *
     * @param  mixed $request
     * @return void
     */
    public function userRegister(UserRegisterRequest $request){
        try{
            DB::beginTransaction();
              $userDetails =[
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'id_number'=> $request->id,
                'contact_number'=> $request->contact,
                'faculty'=> $request->faculty??null,
                'role'=> $request->role??'student',
              ];
              $user =$this->authRepositoryInterface->register($userDetails);
            DB::commit();
            return redirect()->back();
        }catch(\Exception $exception){
            DB::rollback();
            Log::error($exception);
            return $exception;
        }
    }

    public function login(LoginRequest $request){
        try{
            $data=$request->only('email','password');
            $login =$this->authRepositoryInterface->login($data);
            if($login){
              $this->userRedirect();
            }
            return redirect()->back();
        }catch(\Exception $exception){
            Log::error($exception);
            return $exception;
        }
    }

    public function userRedirect(){
        try{
            if(Auth::user()->role=='admin'){
               return Auth::user();
            }
        }catch(\Exception $exception){
            Log::error($exception);
            return $exception;
        }
        return null;
    }

    public function logout(){
        try{
            $this->authRepositoryInterface->logout();
            return redirect('/');
        }catch(\Exception $exception){
            Log::error($exception);
            return $exception;
        }
    }
}
