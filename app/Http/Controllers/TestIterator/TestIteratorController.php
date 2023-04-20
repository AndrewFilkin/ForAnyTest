<?php

namespace App\Http\Controllers\TestIterator;

use App\Http\Controllers\Controller;
use ArrayIterator;
use Illuminate\Http\Request;

class TestIteratorController extends Controller
{
    public function index()
    {
        $array = array('apple', 'banana', 'cherry');

        $iterator = new ArrayIterator($array);

        foreach ($iterator as $key => $value) {
            $array[$key] = 'test';
            echo $array[$key] . '<br>';
        }
        echo $array[1];
    }
}
