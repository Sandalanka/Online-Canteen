<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Interfaces\FeedbackRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    private FeedbackRepositoryInterface $feedbackRepositoryInterface;
    
        
    /**
     * __construct
     *
     * @param  mixed $feedbackRepositoryInterface
     * @return void
     */
    public function __construct(FeedbackRepositoryInterface $feedbackRepositoryInterface){
       $this->feedbackRepositoryInterface = $feedbackRepositoryInterface;
    }

    public function feedback(Request $request){
        try{
            DB::beginTransaction();
              $details =[
                'email' => $request->email,
                'comment'=> $request->comment,
              ];
              $feedback =$this->feedbackRepositoryInterface->feedbackInsert($details);
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
            $feedback =$this->feedbackRepositoryInterface->showAll();
            return view('fedbackshow',compact('table'));
        }catch(\Exception $exception){
            Log::error($exception);
            return $exception;
        }        
    }
}
