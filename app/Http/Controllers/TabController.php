<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabController extends Controller
{

    public function index(){
        return view('dashboard.tab.tab');
    }
}
