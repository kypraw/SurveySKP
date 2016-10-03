<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Answer;
use App\Comment;

class AnswerController extends Controller
{
    public function postAnswers(Request $request){
        $this->validate($request, [
            'nilaipertanyaan' => 'required',
            'komentar' => 'required'
        ]);
        $answers = $request['nilaipertanyaan'];
        $comments = $request['komentar']; 
        $user = $request->user();
                
        foreach($answers as $answer){
            $ansArray = explode(",", $answer);
            $ans = new Answer();
            $ans->user_id = $user->id;
            $ans->survey_id  = (int)$ansArray[0];
            $ans->question_id  = (int)$ansArray[1];
            $ans->nilai  = (int)$ansArray[2];
            $ans->save();
        };
   
        foreach($comments as $surv_id => $comm){      
            $c = new Comment();
            $c->user_id = $user->id;
            $c->survey_id  = $surv_id;
            $c->komentar = $comm;
            $c->save();        
        };             
               
        //$user->isDone = 1;
        //$user->save();
        return redirect('surveys');
        
    }
}