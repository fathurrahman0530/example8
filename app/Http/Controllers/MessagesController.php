<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Message;
use App\Models\Paticipan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function showMessage($id)
    {
        $dataMessage = Message::join('users', 'messages.user_id', '=', 'users.id')->where('messages.group_id', $id)->get();
        $dataGroup = Group::find($id);
        $userGroup = Paticipan::join('users', 'paticipans.user_id', '=', 'users.id')->where('paticipans.group_id', $id)->get();
        
        $data = [
            'group' => $dataGroup,
            'message' => $dataMessage,
            'userGroup' => $userGroup
        ];

        return view('dashboard.messages', compact('data'));
    }

    public function sendMessage(Request $request)
    {
        $idUser = Auth::user()->id;

        $validateData = $request->validate([
            'message' => 'required'
        ]);

        Message::create([
            'user_id' => $idUser,
            'group_id' => $request->userGroup,
            'message' => $validateData['message']
        ]);

        return redirect('/message/' . $request->userGroup);
    }
}
