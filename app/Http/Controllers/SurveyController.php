<?php

namespace App\Http\Controllers;
Use App\Survey;

class SurveyController extends Controller
{
    public function getSurveys(){
        $surveys = Survey::all();
        return view('surveys.surveys', ['surveys' => $surveys]);
    }

    public function getTerimaKasih(){
        return view('surveys.terimakasih');
    }
}