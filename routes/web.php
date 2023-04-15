<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutocompleteSearch\AutocompleteSearchController;
use App\Http\Controllers\SendEmail\SendEmailController;
use App\Http\Controllers\JavaScriptTest\JavaScriptTestController;
use App\Http\Controllers\TestDb\TestDbRelationController;
use App\Http\Controllers\TestQueue\TestQueue;
use App\Http\Controllers\TestRedis\TestRedicController;
use App\Http\Controllers\TestDownloadLibWithComposer\TestDownloadLibMathExecutorController;
use App\Http\Controllers\GenerateShortLink\GenerateShortLinkController;
use App\Http\Controllers\Parsing\ParsingDataWithSiteController;


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

//Test Db relation
Route::get('/test-db-relation', [TestDbRelationController::class, 'index'])->name('testdbrelationcontroller.index');

//Test Queue
Route::get('/test-queue', [TestQueue::class, 'index'])->name('test-queue.index');
Route::post('/send-message', [TestQueue::class, 'sendMessage'])->name('send-message');

//Test Redis
Route::get('/test-redis', [TestRedicController::class, 'index'])->name('test-redis.index');

// Test download php lib with composer - cnxp/math-executor
Route::get('/math-executor', [TestDownloadLibMathExecutorController::class, 'index'])->name('math-executor.index');

//Generate short link
Route::get('/generate-short-link', [GenerateShortLinkController::class, 'index'])->name('generate-short-link.index');
Route::post('/save-short-link', [GenerateShortLinkController::class, 'createAndSaveShortLink'])->name('save-short-link.create');
Route::get('/update-short-link/{code}', [GenerateShortLinkController::class, 'updateShortLinkIndex'])->name('update-short-link.index');
Route::put('/upgrade-short-link/{code}', [GenerateShortLinkController::class, 'updateShortLink'])->name('update-short-link.upgrade');
Route::get('/delete-short-link/{code}', [GenerateShortLinkController::class, 'deleteShortLink'])->name('delete-short-link.delete');
Route::get('/redirect-short-link/{code}', [GenerateShortLinkController::class, 'redirectShortLink'])->name('redirect-short-link.redirect');

//Parsing data with site
Route::get('/parsing-data-with-site', [ParsingDataWithSiteController::class, 'index'])->name('parsing.index');
Route::get('/get-parsing-data-with-site', [ParsingDataWithSiteController::class, 'getParsingData'])->name('get.parsing.data');
