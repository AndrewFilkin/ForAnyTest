<?php

namespace App\Http\Controllers\TestQueue;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\TestQueueJob;

class TestQueue extends Controller
{
    public function index()
    {
        return view('TestQueue.index');
    }

    public function sendMessage(Request $request)
    {
//        TestQueueJob::dispatch($request->message)->delay(now()->addMinutes(1)); // wait
        TestQueueJob::dispatch($request->message);
    }

}
