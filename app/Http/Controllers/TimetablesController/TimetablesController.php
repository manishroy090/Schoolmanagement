<?php

namespace App\Http\Controllers\TimetablesController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimetablesController extends Controller
{
    public function index(){
        return view('admin.dashboard.timetables.timetables');
    }
}
