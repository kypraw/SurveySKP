<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Survey;
use App\Answer;

class DashboardController extends Controller
{
    public function getLayanan(){
        
        $surveys = DB::select("SELECT surveys.id, surveys.title,AVG(answers.nilai) AS averageScore
        FROM surveys LEFT JOIN answers ON answers.survey_id = surveys.id WHERE answers.nilai IS NOT NULL
        GROUP BY id ORDER BY averageScore DESC");
        //var_dump($surveys);
        $labelsid = [];
        $data   = [];
        foreach($surveys as $survey){
            array_push($labelsid, $survey->id);
            array_push($data, (float)($survey->averageScore));  
        }
        
        return view('dashboard.dashboardLayanan',['surveys'=>$surveys,'average'=> array_sum($data) / count($data) ,'labelsid'=>json_encode($labelsid), 'data' => json_encode($data)]);
    }

    public function getLayananPer($layanan_id){
        $surveyScore = DB::select("SELECT title, questions.id, pertanyaan, AVG(answers.nilai) AS averageScore
        FROM questions LEFT JOIN answers ON answers.question_id = questions.id 
        LEFT JOIN surveys ON surveys.id = answers.survey_id 
        WHERE surveys.id = ? GROUP BY pertanyaan ORDER BY averageScore DESC ", [$layanan_id]);

        $surveyComment = DB::select("SELECT username, komentar, comments.created_at 
        FROM surveys LEFT JOIN comments ON comments.survey_id = surveys.id LEFT JOIN users ON users.id = comments.user_id
        WHERE surveys.id = ? ORDER BY CHAR_LENGTH(komentar) DESC", [$layanan_id]);

        $paginate = 10;
        $page = Input::get('page', 1);
        //perpotongan array
        $offset = ($page * $paginate) - $paginate;
        $itemForCurrentPage = array_slice($surveyComment, $offset, $paginate, true);
        $commentPagination = new LengthAwarePaginator($itemForCurrentPage, count($surveyComment), $paginate, $page);
        
        $commentPagination->setPath($layanan_id);

        return view('dashboard.dashboardLayananPer', ['surveyScore' => $surveyScore, 'commentPagination' => $commentPagination]);
    }
}