<?php

namespace App\Http\Controllers;
use App\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public  function order(Request $request) {
$table=new order();
$table->name=$request['name'];
$table->sid=$request['sid'];
$table->date=$request['date'];
$table->food=$request['food'];
$table->amount=$request['amount'];
$table->contact=$request['contact'];
$table->save();
return redirect()->back();
    }


    public function show(){
        $table=order::all();
        return view('admin',compact('table'));
    }
}
