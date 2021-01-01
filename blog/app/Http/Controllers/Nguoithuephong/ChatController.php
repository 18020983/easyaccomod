<?php

namespace App\Http\Controllers\Nguoithuephong;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Phongchothue;
use App\Models\Messages;
use App\Events\RedisEvent;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Messages::all();
        return view('messages',compact('messages'));
    }

    public function postSendMessage(Request $request)
    {
        // $data = $request->all();
        // $data["author"] = "Nhung";   
        // $data["content"] = $request->content;  
        $messages = Messages::create($request->all());
        event(
            $e = new RedisEvent($messages)
        );
        return redirect()->back(); 
    }
}


