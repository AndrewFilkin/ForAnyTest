<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\TestAction;
use App\Contracts\TestContract;
use App\Http\Resources\UserResource;

class OtherTestController extends Controller
{

    public function index(TestContract $action)
    {
//        $obj = new TestAction();
//        echo $action->testContractFunction();
        $mas = [
            'title' => 'title',
            'message' => 'mess',
            'name' => 'name'
        ];

        return new UserResource($mas);


    }
}
