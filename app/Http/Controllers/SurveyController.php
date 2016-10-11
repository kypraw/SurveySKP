<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Survey;

class SurveyController extends Controller
{
    public function getBiodata(){
        return view('surveys.biodata');
    }

    public function postBiodata(Request $request){
        $this->validate($request, [
            'unit' => 'required',
            'jabatan' => 'required',
            'lokasi' => 'required'
        ]);

        $request->session()->put('biodata',['unit' => $request['unit'],
                                            'jabatan' => $request['jabatan'],
                                            'lokasi' => $request['lokasi']
                                            ]);
        return redirect()->route('surveys');
    }

    public function getSurveys(Request $request){
        if(!$request->session()->has('biodata')){
           return redirect()->route('biodata'); 
        }

        $surveys = Survey::all();
        return view('surveys.surveys', ['surveys' => $surveys]);
    }

    public function postSurveys(Request $request){
        $surveyChoosen = $request['survey'];
        
        if(!$surveyChoosen){
            return redirect()->back();
        }
        //tampilkan pertanyaan dari survey yang dipilih
        $surveyQuestion = DB::table('surveys')->leftJoin('questions', 'surveys.id', '=', 'questions.survey_id')->whereIn('survey_id', $surveyChoosen)->get();
        $grouped = $surveyQuestion->groupBy('survey_id');
        return view('surveys.fillSurvey', ['grouped' => $grouped]);
    }

    public function getTerimaKasih(){
        return view('surveys.terimakasih');
    }
}