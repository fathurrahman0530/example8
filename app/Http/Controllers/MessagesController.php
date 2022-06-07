<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function showMessage($id)
    {
        $messageGroup = Message::where('group_id', $id)->get();

        // dd($messageGroup);
        return view('dashboard.messages');
    }
}
