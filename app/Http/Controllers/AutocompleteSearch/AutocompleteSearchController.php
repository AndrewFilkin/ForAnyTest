<?php

namespace App\Http\Controllers\AutocompleteSearch;

use App\Contracts\AutocompleteSearchContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AutocompleteSearch\AutocompleteSearch;
use App\Providers\AutocompleteSearchServicesProvider;

class AutocompleteSearchController extends Controller
{



    public function index(Request $request)
    {
        return view('AutocompleteSearch.index');
    }

    public function autocompleteSearch(Request $request, AutocompleteSearchContract $action)
    {
        $filterResult = $action->getAutocompleteSearchQuery($request);
        return response()->json($filterResult);
    }

}
