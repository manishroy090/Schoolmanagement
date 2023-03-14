<?php

namespace App\Http\Controllers\HostelsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelsController extends Controller
{
    public function index(){
        return view('admin.dashboard.hostels.hostels');
    }
}
