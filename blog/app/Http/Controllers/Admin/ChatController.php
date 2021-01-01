<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Messages;
use App\Events\RedisEvent;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Messages::all();
        return view('admin.messages',compact('messages'));
    }

    public function postSentMessage(Request $request)
    {
        $data = $request->all();
        $data["author"] = Auth::user()->name;
        $messages = Messages::create($data);
        event(
            $e = new RedisEvent($messages)
        );
        return redirect()->back();
    }
}
