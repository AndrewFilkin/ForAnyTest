<?php


namespace App\Actions;

use App\Contracts\TestContract;


class TestAction implements TestContract
{
    public function testContractFunction()
    {
        return 123;
    }
}
