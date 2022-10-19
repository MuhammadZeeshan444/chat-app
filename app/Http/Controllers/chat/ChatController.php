<?php

namespace App\Http\Controllers\chat;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chatStore($sender_id, $receiver_id, Request $request)
    {
        $request->validate([
            'messege' => 'required'
        ]);
        $chat = new Chat;
        $chat->messege = $request->messege;
        $chat->sender_id = $sender_id;
        $chat->receiver_id = $receiver_id;
        $chat->status = '0';

        $chat->save();

        return redirect()->back();


    }
}
