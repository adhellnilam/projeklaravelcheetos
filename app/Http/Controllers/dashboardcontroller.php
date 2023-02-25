<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function dashboard()
    {
        return view('layouts.web', ["title"=>"dashboard"]);
    }

    public function home()
    {
        return view('dashboard', ["title"=>"dashboard"]);
    }
}
