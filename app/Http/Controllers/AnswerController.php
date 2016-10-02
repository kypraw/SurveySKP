<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function postAnswers(Request $request){
        var_dump($request['nilaipertanyaan']);
    }
}