<?php

namespace App\Http\Controllers\RequestAfterTime;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Log;

class RequestAfterTimeController extends Controller
{
    public function index()
    {
        //sail artisan schedule:work
        Log::info('Task is running...');
    }
}
