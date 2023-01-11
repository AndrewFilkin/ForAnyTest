<?php

namespace App\Http\Controllers\AutocompleteSearch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutocompleteSearchController extends Controller
{
    public function index()
    {
        return view('AutocompleteSearch.index');
    }
}
