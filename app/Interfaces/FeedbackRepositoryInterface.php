<?php

namespace App\Interfaces;

interface FeedbackRepositoryInterface
{    
    /**
     * feedbackIntsert
     *
     * @param  mixed $data
     * @return void
     */
    public function feedbackInsert(array $data);
    
    /**
     * showAll
     *
     * @return void
     */
    public function showAll();
}
