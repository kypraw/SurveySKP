<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
Use App\Survey;
use App\Unit;
use App\Jabatan;
use App\Lokasi;

class SurveyController extends Controller
{
    public function getBiodata(){
        $units = Unit::all();
        $jabatans = Jabatan::all();
        $lokasis = Lokasi::all();
        return view('surveys.biodata', ['units' =>$units, 'jabatans' => $jabatans, 'lokasis' => $lokasis]);
    }

    public function postBiodata(Request $request){
        $this->validate($request, [
            'unit_two' => 'required',
            'jabatan' => 'required',
            'lokasi' => 'required'
        ]);

        $request->session()->put('biodata',['unit_two' => $request['unit_two'],
                                            'jabatan' => $request['jabatan'],
                                            'lokasi' => $request['lokasi']
                                            ]);
        return redirect()->route('surveys');
    }

    public function getSurveys(Request $request){
        if(!$request->session()->has('biodata')){
            return redirect()->route('biodata'); 
        }

        $surveys = DB::select('SELECT * from surveys WHERE id BETWEEN 1 AND 20');
        
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

        $serviceDeskQuestion = DB::table('surveys')->leftJoin('questions', 'surveys.id', '=', 'questions.survey_id')->where('surveys.id', 21)->get();
        
        return view('surveys.fillSurvey', ['grouped' => $grouped, 'serviceDesk' => $serviceDeskQuestion]);
    }

    public function getTerimaKasih(){
        return view('surveys.terimakasih');
    }
}