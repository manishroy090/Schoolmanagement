<?php

namespace App\Http\Controllers\StudentsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index(){
        return view('dashboard.students.students');
    }
}
