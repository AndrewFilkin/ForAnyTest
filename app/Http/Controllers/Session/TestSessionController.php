<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestSessionController extends Controller
{
    public function index()
    {
        $session = session();
        $session->put('key', 'value');
        $data = $session->get('key');
        dd($session->all());
    }
}
