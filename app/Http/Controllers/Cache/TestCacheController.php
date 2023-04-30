<?php

namespace App\Http\Controllers\Cache;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TestCacheController extends Controller
{
    public function index()
    {
        Cache::put('my_key', 'value123', now()->addMinute(1));
        Cache::put('my_key1', 'value123', now()->addMinute(1));
        $value = Cache::get('my_key');
        echo $value;
    }
}
