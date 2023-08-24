<?php


namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use App\Contracts\AutocompleteSearchContract;

class AutocompleteSearchAction implements AutocompleteSearchContract
{
    public function getAutocompleteSearchQuery(Request $request)
    {
        $query = $request->get('query');
        $filterResult = User::where('name', 'LIKE', '%' . $query . '%')->get();
        return $filterResult;
    }
}
