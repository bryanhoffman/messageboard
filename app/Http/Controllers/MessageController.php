<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $messages = Message::all();

        return view('home', [
            'messages' => $messages,
        ]);
    }

    public function store(Request $request)
    {
        $request->user()->messages()->create([
             'message' => $request->message,
        ]);

        return redirect('/home');
    }
}
