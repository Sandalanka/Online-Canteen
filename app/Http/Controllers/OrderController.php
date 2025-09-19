<?php

namespace App\Http\Controllers;
use App\order;
use Illuminate\Http\Request;
use App\Interfaces\OrderRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
   private OrderRepositoryInterface $orderRepositoryInterface;
    
    /**
     * __construct
     *
     * @param  mixed $orderRepositoryInterface
     * @return void
     */
    public function __construct(OrderRepositoryInterface $orderRepositoryInterface){
       $this->orderRepositoryInterface = $orderRepositoryInterface;
    }

    public  function order(OrderRequest $request) {
        try{
            DB::beginTransaction();
              $details =[
                'user_id' => Auth::id(),
                'food_id'=> $request->food_id,
                'amount' => $request->amount,
                'date'  => Carbon::now()
              ];
              $order =$this->orderRepositoryInterface->create($details);
            DB::commit();
            return redirect()->back();
        }catch(\Exception $exception){
            DB::rollback();
            Log::error($exception);
            return $exception;
        }
    }


    public function show(){
        try{
            $table =$this->orderRepositoryInterface->show();
            return view('admin',compact('table'));
        }catch(\Exception $exception){
            Log::error($exception);
            return $exception;
        }
    }
}
