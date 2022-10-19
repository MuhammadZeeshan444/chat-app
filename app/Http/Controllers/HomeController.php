<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('email', '!=', Auth()->user()->email)->get();
        return view('home', compact('users'));
    }

    public function chatView($id)
    {
        return view('chat.index', ['chat_user' => User::where('id', $id)->first()]);
    }
}
