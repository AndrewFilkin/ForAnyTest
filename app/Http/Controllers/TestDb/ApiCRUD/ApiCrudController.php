<?php

namespace App\Http\Controllers\TestDb\ApiCRUD;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Services\testDbChat\TestDbChat;

class ApiCrudController extends Controller
{

    public function createMessage(Request $request)
    {
        $obj = new TestDbChat();
        $answer = $obj->creareDbMessage($request);
        return response()->json($answer);

    }
}
