<?php

namespace App\Http\Controllers\AutocompleteSearch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AutocompleteSearch\AutocompleteSearch;

class AutocompleteSearchController extends Controller
{



    public function index()
    {
        return view('AutocompleteSearch.index');
    }

    public function autocompleteSearch(Request $request)
    {
        $autocompleteSearch = new AutocompleteSearch();

        $filterResult = $autocompleteSearch->getAutocompleteSearchQuery($request);
        return response()->json($filterResult);
    }

}
