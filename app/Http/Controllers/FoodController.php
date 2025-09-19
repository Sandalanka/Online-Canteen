<?php

namespace App\Http\Controllers;
use App\food;
use Illuminate\Http\Request;
use App\Interfaces\FoodRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\FoodRequest;

class FoodController extends Controller
{   
    private FoodRepositoryInterface $foodRepositoryInterface;
    
        
       
    /**
     * __construct
     *
     * @param  mixed $foodRepositoryInterface
     * @return void
     */
    public function __construct(FoodRepositoryInterface $foodRepositoryInterface){
       $this->foodRepositoryInterface = $foodRepositoryInterface;
    }
    
    /**
     * add
     *
     * @param  mixed $request
     * @return void
     */
    public function add(FoodRequest $request){
        try{
            DB::beginTransaction();
              $details =[
                'name' => $request->name,
                'price'=> $request->price,
              ];
              $food =$this->foodRepositoryInterface->create($details);
            DB::commit();
            return redirect()->back();
        }catch(\Exception $exception){
            DB::rollback();
            Log::error($exception);
            return $exception;
        }
    }
    
    /**
     * show
     *
     * @return void
     */
    public function show(){
        try{
            $table =$this->foodRepositoryInterface->show();
             return view('food',compact('table'));
        }catch(\Exception $exception){
            Log::error($exception);
            return $exception;
        }
    }
    
    /**
     * showone
     *
     * @return void
     */
    public function showone(){
        try{
            $table =$this->foodRepositoryInterface->show();
            return view('home',compact('table'));
        }catch(\Exception $exception){
            Log::error($exception);
            return $exception;
        }
    }
}
