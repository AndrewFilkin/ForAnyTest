<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutocompleteSearch\AutocompleteSearchController;


Route::get('/', function () {
    return view('index');
});

//autocomplete-search
Route::get('/autocomplete-search', [AutocompleteSearchController::class, 'index'])->name('autocompleteSearch.index');
Route::get('/autocomplete-search-query', [AutocompleteSearchController::class, 'autocompleteSearch'])->name('autocompleteSearch');

