<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;

class UserDashboardController extends Controller
{
    public function getUnits(){
        $usersUnits = DB::select("SELECT units.id, unitLong, COUNT(username) as total
        FROM units LEFT JOIN unit_twos ON unit_twos.unit_id = units.id LEFT JOIN users ON users.unit_two_id = unit_twos.id WHERE users.isDone = 1 GROUP BY unitLong ORDER BY units.id DESC");
        
        return view('dashboard.usersUnitsI', ['usersUnits' => $usersUnits]);
    }

    public function getUsers(){
        $usersUnits = DB::select("SELECT unit_twos.id, eselon_dua, COUNT(username) as total
        FROM unit_twos LEFT JOIN users on users.unit_two_id = unit_twos.id WHERE users.isDone = 1 GROUP BY eselon_dua ORDER BY unit_twos.id DESC");
        
        return view('dashboard.usersUnits', ['usersUnits' => $usersUnits]);
    }

    public function getJabatan(){
        $jabatans = DB::select("SELECT jabatan, COUNT(username) as total 
        FROM jabatans LEFT JOIN users on users.jabatan_id = jabatans.id WHERE users.isDone = 1 GROUP BY jabatan ORDER BY jabatan");
        
        return view('dashboard.jabatan',['jabatans' => $jabatans]);
    }

    public function getUsersPer($unit_two_id){
        $users = DB::select("SELECT id, email, longname FROM users WHERE users.unit_two_id = ? AND users.isDone = 1 ORDER BY username", [$unit_two_id]);

        $paginate = 10;
        $page = Input::get('page', 1);
        //perpotongan array
        $offset = ($page * $paginate) - $paginate;
        $itemForCurrentPage = array_slice($users, $offset, $paginate, true);
        $usersPagination = new LengthAwarePaginator($itemForCurrentPage, count($users), $paginate, $page);
        
        $usersPagination->setPath($unit_two_id);
        return view('dashboard.usersUnitsPer', ['users' => $usersPagination]);
    }
    
    public function getUser($user_id){
        $answers = DB::select("SELECT title, pertanyaan, nilai FROM answers
        LEFT JOIN questions ON question_id = questions.id
        LEFT JOIN surveys ON survey_id = surveys.id
        WHERE user_id = ? ORDER BY survey_id", [$user_id]);

        return view('dashboard.userAnswers', ['answers' => $answers]);
    }
}