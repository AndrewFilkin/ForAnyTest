<?php

namespace App\Http\Controllers\Cache;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TestCacheController extends Controller
{
    public function index()
    {
//        $data = ['apple', 'orange', 'banana'];
//        Cache::put('my_key', $data, 60);


        $asd = Cache::remember('test', Carbon::now()->addMinute(1), function () {
            return ['apple', 'orange', 'banana'];
        });

//        echo Cache::get('test');


//        Cache::put('my_key', 'value123', now()->addMinute(1));
//        $value = Cache::get('my_key');
//        echo $value;
    }
}
