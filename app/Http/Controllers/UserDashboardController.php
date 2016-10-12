<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserDashboardController extends Controller
{
    public function getUsers(){
        $usersUnits = DB::select("SELECT units.id, unitLong, COUNT(username) as total
        FROM units LEFT JOIN users on users.unit_id = units.id WHERE users.isDone = 1 GROUP BY unitLong ORDER BY total DESC");
        
        return view('dashboard.usersUnits', ['usersUnits' => $usersUnits]);
    }

    public function getJabatan(){
        $jabatans = DB::select("SELECT jabatan, COUNT(username) as total 
        FROM jabatans LEFT JOIN users on users.jabatan_id = jabatans.id WHERE users.isDone = 1 GROUP BY jabatan ORDER BY jabatan");
        
        return view('dashboard.jabatan',['jabatans' => $jabatans]);
    }

    public function getUsersPer($unit_id){
        $users = DB::select("SELECT username FROM users WHERE users.unit_id = ? AND users.isDone = 1 ORDER BY username", [$unit_id]);

        return view('dashboard.usersUnitsPer', ['users' => $users]);
    }
}