<?php

namespace App\Services\testDbChat;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;


class TestDbChat
{

    public function getMessage()
    {
        $messages = Message::all();
        return $messages;
    }
    public function creareDbMessage(Request $request)
    {
        $objMessage = new Message();
        $objMessage->user_id = 1;
        $objMessage->room_id = 1;
        $objMessage->message = $request->message;
        $objMessage->save();
        return 'ok';


    }
}
