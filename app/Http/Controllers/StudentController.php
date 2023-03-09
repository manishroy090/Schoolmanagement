<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studen as Student;
use App\Models\One;
use App\Models\Two;
class StudentController extends Controller
{
    //
    public function index(){
        return view('dashboard.student.student');
    }
}
?>