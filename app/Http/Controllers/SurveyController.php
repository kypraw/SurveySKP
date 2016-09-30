<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Survey;

class SurveyController extends Controller
{
    public function getSurveys(){
        $surveys = Survey::all();
        return view('surveys.surveys', ['surveys' => $surveys]);
    }

    public function postSurveys(Request $request){
        $surveyArr = implode("," , $request['survey']);
        echo($surveyArr);
    }

    public function getTerimaKasih(){
        return view('surveys.terimakasih');
    }
}