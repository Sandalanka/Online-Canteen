<?php

namespace App\Http\Controllers;
use App\food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function add(Request $request){
        $table=new food();
        $table->name=$request['name'];
        $table->price=$request['price'];
        $table->save();
        return redirect()->back();
    }

    public function show(){
        $table=food::all();
        return view('food',compact('table'));
    }

    public function showone(){
        $table=food::all();
        return view('home',compact('table'));
    }
}
