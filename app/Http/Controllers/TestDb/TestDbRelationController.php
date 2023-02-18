<?php

namespace App\Http\Controllers\TestDb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestDbRelationController extends Controller
{
    public function index() {
        return view('TestDbRelation.index');
    }
}
