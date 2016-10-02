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
        $surveyQuestion = DB::table('surveys')->leftJoin('questions', 'surveys.id', '=', 'questions.survey_id')->whereIn('survey_id', $surveyChoosen)->get();
        $grouped = $surveyQuestion->groupBy('survey_id');
        return view('surveys.fillSurvey', ['grouped' => $grouped]);
    }

    public function getTerimaKasih(){
        return view('surveys.terimakasih');
    }
}