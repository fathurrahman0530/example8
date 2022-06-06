<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Group::all();
        return view('dashboard.index', compact('data'));
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function manageRole()
    {
        return view('dashboard.manage');
    }

    public function storeGroup(Request $request)
    {
        // dd($request->all('name_group'));
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = substr(str_shuffle($characters), rand(0, 9), 7);

        $validateData = $request->validate([
            'name_group' => 'required|max:255',
        ]);
        
        Group::create([
            'name_group' => $validateData['name_group'],
            'code' => $code
        ]);

        return redirect('/')->with('success', 'Create Group Successfuly');
    }
}
