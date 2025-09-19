<?php

namespace App\Repositories;
use App\Feedback;
use App\Interfaces\FeedbackRepositoryInterface;

class FeedbackRepository implements FeedbackRepositoryInterface
{
    /**
     * feedbackIntsert
     *
     * @param  mixed $data
     * @return void
     */
    public function feedbackInsert(array $data){
        return Feedback::create($data);
    }
    
    /**
     * showAll
     *
     * @return void
     */
    public function showAll(){
        return Feedback::all();
    }
}
