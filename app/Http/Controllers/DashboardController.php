<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function manageRole()
    {
        return view('dashboard.manage');
    }
}
