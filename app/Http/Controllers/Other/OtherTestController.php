<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherTestController extends Controller
{

    public function index()
    {
        $q = 7;
        $x = 'q';
        $y = $x;
        echo $$y;

    }
}
