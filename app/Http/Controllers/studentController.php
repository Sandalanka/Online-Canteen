<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function studentregistation(Request $request){
 
 
        $table=new User();
        $table->name=$request['name'];
        $table->sid=$request['id'];
        $table->faculty=$request['faculty'];
        $table->email=$request['email'];
        $table->password=bcrypt($request['password']);
    
        $table->save();
        return redirect()->back();
    }
    

}
