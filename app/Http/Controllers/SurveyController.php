<?php

namespace App\Http\Controllers;

class SurveyController extends Controller
{
    public function getSurveys(){
        return view('surveys.surveys');
    }
}