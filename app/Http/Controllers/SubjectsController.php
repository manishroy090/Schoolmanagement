<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function index (){
          return view('admin.dashboard.subject.subject');
    }
}
