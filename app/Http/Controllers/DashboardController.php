<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Message;
use App\Models\Paticipan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

    public function profile($id)
    {
        $data = User::find($id);
        return view('dashboard.profile', compact('data'));
    }

    public function updateProfile(Request $request)
    {
        $idUser = Auth::user()->id;

        $validateData = $request->validate([
            'email' => 'email:dns',
            'profile' => 'image|file'
        ]);

        $getData = User::find($idUser);

        if (empty($request->file)) {
            if ($request->file('profile')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $validateData['profile'] = $request->file('profile')->store('images');
            }

            if ($request->password != NULL) {
                $password = Hash::make($request->password);
                if ($request->file('profile')) {
                    $getData->update([
                        'fullname' => $request->fullname,
                        'username' => $request->username,
                        'email' => $validateData['email'],
                        'password' => $password,
                        'profile' => $validateData['profile']
                    ]);
                } else {
                    $getData->update([
                        'fullname' => $request->fullname,
                        'username' => $request->username,
                        'email' => $validateData['email'],
                        'password' => $password,
                    ]);
                }
            } else {
                if ($request->file('profile')) {
                    $getData->update([
                        'fullname' => $request->fullname,
                        'username' => $request->username,
                        'email' => $validateData['email'],
                        'profile' => $validateData['profile']
                    ]);
                } else {
                    $getData->update([
                        'fullname' => $request->fullname,
                        'username' => $request->username,
                        'email' => $validateData['email'],
                    ]);
                }
            }
        } else {
            $getData->update([
                'fullname' => $request->fullname,
                'username' => $request->username,
                'email' => $validateData['email']
            ]);
        }

        return redirect('/profile/' . $idUser)->with('success', 'Update Profile Successfuly');
    }

    public function manageRole()
    {
        $data = User::all();
        return view('dashboard.manage', compact('data'));
    }

    public function editUser($id)
    {
        $data = User::find($id);

        return view('dashboard.editUser', compact('data'));
    }

    public function updateUser(Request $request)
    {
        $data = User::find($request->idUser);

        $data->update([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->roleUser
        ]);

        return redirect('/manage-role')->with('success', 'Update User Successfuly');
    }

    public function storeGroup(Request $request)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = substr(str_shuffle($characters), rand(0, 9), 7);

        $validateData = $request->validate([
            'name_group' => 'required|max:255',
        ]);

        Group::create([
            'name_group' => $validateData['name_group'],
            'code' => $code
        ]);

        return redirect('/dashboard')->with('success', 'Create Group Successfuly');
    }

    public function joinGroup(Request $request)
    {
        $validateData = $request->validate([
            'code' => 'required'
        ]);

        $getGroup = Group::where('code', $validateData['code'])->get();

        Paticipan::create([
            'user_id' => Auth::user()->id,
            'group_id' => $getGroup[0]->id
        ]);

        return redirect('/dashboard')->with('success', 'Join Group Successfuly');
    }

    public function updateGroup(Request $request)
    {
        $data = Group::find($request->idGrooup);

        if ($request->file('pictures')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $images = $request->file('pictures')->store('images');
            $data->update([
                'name_group' => $request->name_group,
                'pictures' => $images
            ]);
        } else {
            $data->update([
                'name_group' => $request->name_group
            ]);
        }

        return redirect('/message/' . $request->idGrooup)->with('success', 'Updated Group Successfuly');
    }

    public function leaveGroup(Request $request)
    {
        $getParticipan = Paticipan::where('user_id', $request->idUser)->where('group_id', $request->idGroup)->forceDelete();
        return redirect('/dashboard');
    }

    public function deleteGroup($id)
    {
        Message::where('group_id', $id)->forceDelete();
        Paticipan::where('group_id', $id)->forceDelete();
        Group::find($id)->delete();

        return redirect('/dashboard');
    }

    public function kickUser(Request $request)
    {
        Paticipan::where('group_id', $request->idGroup)->where('user_id', $request->idUser)->forceDelete();

        return redirect('/message/' . $request->idGroup);
    }
}
