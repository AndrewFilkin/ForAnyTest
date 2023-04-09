<?php

namespace App\Http\Controllers\TestDownloadLibWithComposer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use NXP\MathExecutor;

class TestDownloadLibMathExecutorController extends Controller
{
    public function index() {
        $executor = new MathExecutor();

        echo $executor->execute('1 + 2 * (2 - (4+10))^2 + sin(10)');
    }
}
