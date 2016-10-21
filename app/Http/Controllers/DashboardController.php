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
        

        $surveys = DB::select("SELECT surveys.id, surveys.title, AVG(answers.nilai) AS averageScore
        FROM surveys LEFT JOIN questions ON questions.survey_id = surveys.id
        LEFT JOIN answers ON answers.question_id = questions.id WHERE answers.nilai IS NOT NULL
        GROUP BY id ORDER BY surveys.id");   
        
        
        $labelsid = [];
        $data   = [];
        foreach($surveys as $survey){
            array_push($labelsid, $survey->id);
            array_push($data, (float)($survey->averageScore));  
        }
        if (count($data) == 0){
            return view('dashboard.surveyEmpty');
        }
        return view('dashboard.dashboardLayanan',['surveys'=>$surveys,'average'=> array_sum($data) / count($data) ,'labelsid'=>json_encode($labelsid), 'data' => json_encode($data)]);
    }

    public function getLayananPer($layanan_id){

        $surveyScore = DB::select("SELECT title, questions.id, pertanyaan, AVG(answers.nilai) AS averageScore
        FROM questions LEFT JOIN surveys ON surveys.id = questions.survey_id
        LEFT JOIN answers ON answers.question_id = questions.id
        WHERE surveys.id = ? GROUP BY pertanyaan ORDER BY averageScore DESC ", [$layanan_id]);
        
        $surveyComment = DB::select("SELECT longname, komentar, comments.created_at 
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

    public function getLayananTotalRespondent(){
        $totalRespondent = DB::select("SELECT surveys.id, surveys.title, COUNT(comments.survey_id) as totalRespondent
        FROM comments LEFT JOIN surveys ON surveys.id =comments.survey_id GROUP BY surveys.id ORDER BY surveys.id");
        
        return view('dashboard.totalRespondent', ['totals'=> $totalRespondent]);
    }

    public function getDaerah(){
        $locations = DB::select("SELECT lokasi, COUNT(username) as total
        FROM lokasis LEFT JOIN users on users.lokasi_id = lokasis.id WHERE users.isDone = 1 GROUP BY lokasi ORDER BY lokasi DESC");

        return view('dashboard.daerah', ['locations' => $locations]);
    }
}