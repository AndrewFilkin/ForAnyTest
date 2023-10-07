<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\TestAction;
use App\Contracts\TestContract;
use App\Http\Resources\Other\OtherResource;

class OtherTestController extends Controller
{

    public function index(TestContract $action)
    {
//        $obj = new TestAction();
//        echo $action->testContractFunction();
        $data = [];

        return new OtherResource($data);


    }
}
