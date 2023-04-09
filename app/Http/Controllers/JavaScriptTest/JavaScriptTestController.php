<?php

namespace App\Http\Controllers\JavaScriptTest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JavaScriptTestController extends Controller
{
    public function index()
    {
        return view('PageForJavaScriptTest.index');
    }
}
