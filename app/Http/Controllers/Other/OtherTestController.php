<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\TestAction;
use App\Contracts\TestContract;

class OtherTestController extends Controller
{

    public function index(TestContract $action)
    {
        $obj = new TestAction();
        echo $action->testContractFunction();

    }
}
