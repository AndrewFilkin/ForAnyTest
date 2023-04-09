<?php

namespace App\Http\Controllers\TestRedis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestRedicController extends Controller
{
    public function index()
    {
        $data = Redis::set('Name', 'Andrew');
        $data = Redis::set('Fname', 'Filkin');
        Redis::flushall();
        $name = Redis::get('Name');
        dd($name);
    }
}
