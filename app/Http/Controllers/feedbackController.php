<?php

namespace App\Http\Controllers;
use App\feedback;
use Illuminate\Http\Request;

class feedbackController extends Controller
{
    public function feedback(Request $request){
        $table =new feedback();
        $table->email=$request['email'];
        $table->comment=$request['comment'];
        $table->save();
        return redirect()->back();
    }

    public function show(){
        $table=feedback::all();
        return view('fedbackshow',compact('table'));
    }
}
