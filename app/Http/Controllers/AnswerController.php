<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Answer;
use App\Comment;

class AnswerController extends Controller
{
    public function postAnswers(Request $request){
        $biodata = $request->session()->get('biodata');
       
        $this->validate($request, [
            'nilaipertanyaan' => 'required',
            'komentar' => 'required'
        ]);
        
        $answers = $request['nilaipertanyaan'];
        $comments = $request['komentar']; 
        $user = $request->user();
        
        $user->unit = (int)$biodata['unit'];
        $user->jabatan = (int)$biodata['jabatan'];
        $user->lokasi = (int)$biodata['lokasi'];
        //$user->isDone = 1;
        $user->save();

        foreach($answers as $question_number => $answer){
            $ans = new Answer();
            $ans->user_id = $user->id;
            $ans->question_id  = (int)$question_number;
            if((int)$answer > 0 && (int)$answer <= 5){
                $ans->nilai  = (int)$answer;
            } else {
                continue;
            }                    
            $ans->save();
        };        
        
        foreach($comments as $surv_id => $comm){
            $c = new Comment();
            $c->user_id = $user->id;
            $c->survey_id  = $surv_id;
            $c->komentar = $comm;
                        
            $c->save();          
        };              
               
        return redirect('surveys');
        
    }
}