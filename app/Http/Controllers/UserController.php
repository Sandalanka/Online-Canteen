<?php

namespace App\Http\Controllers;
use App\User;
use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{

    public function slogin(Request $request){
     $data=$request->only('email','password');
      if(Auth::attempt($data)){
         return redirect()->route('home');
      }
      return redirect()->back();
    }
    public function home(){
        return redirect()->route('studentshow');
    }

    public function show(){
        $table=User::all();
        return view('studentshow',compact('table'));
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }


}
