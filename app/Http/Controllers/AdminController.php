<?php

namespace App\Http\Controllers;
use App\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class AdminController extends Controller
{
 public function registation(Request $request){
     $table=new admin();
     $table->name=$request['name'];
     $table->ID_number=$request['id'];
     $table->contact=$request['contact'];
     $table->email=$request['email'];
     $table->password=bcrypt($request['password']);
     $table->save();
     return redirect()->back();

 }

 public function adminlogin(Request $request){
   // $data=$request->only('email','password');
     if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
        return redirect()->route('adminshow');
     }
    //return redirect()->route('adminshow');
     return redirect()->back();
   }
}
