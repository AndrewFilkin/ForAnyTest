<?php

namespace App\Http\Controllers\TestDb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\testDbChat\TestDbChat;

class TestDbRelationController extends Controller
{
    public function index()
    {
        $obj = new TestDbChat();
        $messages = $obj->getMessage();
        return view('TestDbRelation.index', compact('messages'));
    }


}
