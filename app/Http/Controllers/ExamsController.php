<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamsController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard.exam.exam');
    }
}
