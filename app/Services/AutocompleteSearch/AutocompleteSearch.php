<?php


namespace App\Services\AutocompleteSearch;


use App\Models\User;
use Illuminate\Http\Request;

class AutocompleteSearch
{
    public function getAutocompleteSearchQuery(Request $request)
    {
        $query = $request->get('query');
        $filterResult = User::where('name', 'LIKE', '%' . $query . '%')->get();
        return $filterResult;
    }
}
