<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Survey;
use App\Answer;

class DashboardController extends Controller
{
    public function getLayanan(){
        
        $surveys = DB::select("SELECT surveys.id, surveys.title,AVG(answers.nilai) AS averageScore FROM surveys LEFT JOIN answers ON answers.survey_id = surveys.id GROUP BY id");
        //var_dump($surveys);
        $labelsid = [];
        $data   = [];
        foreach($surveys as $survey){
            array_push($labelsid, $survey->id);
            array_push($data, (float)($survey->averageScore));  
        }
        
        return view('dashboard.dashboardLayanan',['surveys'=>$surveys,'average'=> array_sum($data) / count($data) ,'labelsid'=>json_encode($labelsid), 'data' => json_encode($data)]);
    }
}