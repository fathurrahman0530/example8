<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function showMessage($id)
    {
        $dataMessage = Message::join('users', 'messages.user_id', '=', 'users.id')->where('messages.group_id', $id)->get();
        $dataGroup = Group::find($id);

        $data = [
            'group' => $dataGroup,
            'message' => $dataMessage
        ];
        
        return view('dashboard.messages', compact('data'));
    }
}
