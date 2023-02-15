<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutocompleteSearch\AutocompleteSearchController;
use App\Http\Controllers\SendEmail\SendEmailController;
use App\Http\Controllers\JavaScriptTest\JavaScriptTestController;


Route::get('/', function () {
    return view('index');
});

//autocomplete-search
Route::get('/autocomplete-search', [AutocompleteSearchController::class, 'index'])->name('autocompleteSearch.index');
Route::get('/autocomplete-search-query', [AutocompleteSearchController::class, 'autocompleteSearch'])->name('autocompleteSearch');

//send email with using Queue
Route::get('/sendmail', [SendEmailController::class, 'index'])->name('sendmail.index');
Route::post('/sendLetter', [SendEmailController::class, 'sendLetter'])->name('sendLetter');

//Test JavaScript
Route::get('/JavaScriptTest', [JavaScriptTestController::class, 'index'])->name('javascripttest.index');
