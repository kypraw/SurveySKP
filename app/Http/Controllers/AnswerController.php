<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Answer;

class AnswerController extends Controller
{
    public function postAnswers(Request $request){
        //var_dump($request['nilaipertanyaan']);
        $answers = $request['nilaipertanyaan']; 
        $user = $request->user();
        $user->isDone = 1;

        foreach($answers as $answer){
            $ansArray = explode(",", $answer);
            $ans = new Answer();
            $ans->user_id = Auth::user()->id;
            $ans->survey_id  = (int)$ansArray[0];
            $ans->question_id  = (int)$ansArray[1];
            $ans->nilai  = (int)$ansArray[2];
            $ans->save();
        };

        $user->save();
        return redirect('surveys');
        
    }
}