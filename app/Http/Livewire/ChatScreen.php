<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ChatScreen extends Component
{
    public function render()
    {
        $sender_messeges = Chat::where('sender_id', Auth()->user()->id)->get();
        $receiver_messeges = Chat::select('messege', 'receiver_id')->where('sender_id', $sender_messeges[0]->receiver_id)->get();
        $receiver_user = User::find($sender_messeges[0]->receiver_id);
        // dd($sender_messeges, $receiver_messeges, $receiver_user);

        return view('livewire.chat-screen', compact('sender_messeges', 'receiver_messeges', 'receiver_user'));
    }
}
