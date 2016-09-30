<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Survey;

class SurveyController extends Controller
{
    public function getSurveys(){
        $surveys = Survey::all();
        return view('surveys.surveys', ['surveys' => $surveys]);
    }

    public function postSurveys(Request $request){
        $surveyChoosen = $request['survey'];
        //tampilkan pertanyaan dari survey yang dipilih
        $surveyQuestion = DB::table('questions')->whereIn('survey_id', $surveyChoosen)->get();
        return view('surveys.fillSurvey', ['questionArr' => $surveyQuestion]);
    }

    public function getTerimaKasih(){
        return view('surveys.terimakasih');
    }
}