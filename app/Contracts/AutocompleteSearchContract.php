<?php


namespace App\Contracts;


use Illuminate\Http\Request;

interface AutocompleteSearchContract
{
    public function getAutocompleteSearchQuery(Request $request);
}
