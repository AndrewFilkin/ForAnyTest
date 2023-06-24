<?php

namespace App\Http\Controllers\Cookie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cookie;

class CookieController extends Controller
{
    public function index()
    {
        return view('Cookie.index');
    }

    public function setCookies()
    {
        $cookie = cookie('name12345', 'Hello World', 1);
        return response('Hello World')->cookie($cookie);
    }

    public function getCookies(Request $request)
    {
        $value = $request->cookie('name12345');
        echo $value;
    }

}
