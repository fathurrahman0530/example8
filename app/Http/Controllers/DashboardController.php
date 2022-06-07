<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Message;
use App\Models\Paticipan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $dataGroup = [];
        $userLogin = Auth::user()->id;
        
        if (Auth::user()->role == 1) {
            $dataGroup = Group::all();
        } else {
            $participan = Paticipan::where('user_id', $userLogin)->get();
            foreach ($participan as $p) {
                $dataGroup[] = Group::find($p->group_id);
            }
        }

        $data = [
            'group' => $dataGroup,
            'message' => Message::all()
        ];
        
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
