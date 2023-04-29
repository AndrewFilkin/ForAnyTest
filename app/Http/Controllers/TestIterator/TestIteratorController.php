<?php

namespace App\Http\Controllers\TestIterator;

use App\Http\Controllers\Controller;
use ArrayIterator;
use Illuminate\Http\Request;
use App\Models\TestiteratorModel;

class TestIteratorController extends Controller
{


    public function index()
    {
        $mass = [];
        $array = TestiteratorModel::orderBy('numbers')->get();
        foreach ($array as $key=>$item) {
            $mass[$key] = $item->numbers;
        }

        $iterator = new ArrayIterator($mass);
        foreach ($iterator as $key => $value) {
            echo $value . '<br>';
        }

    }
}
