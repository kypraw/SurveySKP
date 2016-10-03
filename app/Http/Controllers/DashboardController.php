<?php

namespace App\Http\Controllers;
use App\Answer;

class DashboardController extends Controller
{
    public function getDashboard(){
        
        return view('dashboard.dashboard');
    }
}