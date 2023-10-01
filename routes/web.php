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
use App\Http\Controllers\getDateFromApi\GetDateFromApiController;
use App\Http\Controllers\TestIterator\TestIteratorController;
use App\Http\Controllers\Cache\TestCacheController;
use App\Http\Controllers\Session\TestSessionController;
use App\Http\Controllers\RequestAfterTime\RequestAfterTimeController;
use App\Http\Controllers\Other\OtherTestController;
use App\Http\Controllers\PostApi\PostApiController;
use App\Http\Controllers\Like\LikeController;
use App\Http\Controllers\Like\PostController;
use App\Http\Controllers\Cookie\CookieController;
use App\Http\Controllers\Localization\TestLocalizationController;
use App\Http\Controllers\Pattern\Generative\FactoryMethodController;
use App\Http\Controllers\RabbitMQ\RabbitMqController;

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
//getDateFromApi
Route::get('/get-data-from-api', [GetDateFromApiController::class, 'getParsingData'])->name('get.data.from.api.index');
// Test iterator
Route::get('/test-iterator', [TestIteratorController::class, 'index'])->name('test.iterator.index');
//Test Cache
Route::get('/test-cache', [TestCacheController::class, 'index'])->name('test.cache.index');
//Test Session
Route::get('/test-session', [TestSessionController::class, 'index'])->name('test-session.index');
//Request after a certain time
Route::get('/request-after-time', [RequestAfterTimeController::class, 'index'])->name('request-after-time.index');
//Other test
Route::get('/other-test', [OtherTestController::class, 'index'])->name('other-test.index');
//counter like and post
//Route::get('/post-index', [LikeController::class, 'index'])->name('like-index.index');
Route::get('/like-show-post', [PostController::class, 'show'])->name('like.show.post');
//Cookie test
Route::get('/cookie-test', [CookieController::class, 'index'])->name('cookie.index');
Route::get('/cookie-set', [CookieController::class, 'setCookies'])->name('cookie.set');
Route::get('/cookie-get', [CookieController::class, 'getCookies'])->name('cookie.get');

//test localization
Route::get('/test-localization', [TestLocalizationController::class, 'index'])->name('localization.test.index');
Route::get('/test-localization/{locate}', [TestLocalizationController::class, 'setLocale'])->name('localization.test.setLocale');

// Learn patterns
Route::prefix('pattern/generative')->group(function () {
    Route::get('/', [FactoryMethodController::class, 'index'])->name('pattern.generative.factory.index');
});

//RabbitMQ
Route::prefix('rabbitmq')->group(function () {
    Route::get('/', [RabbitMqController::class, 'index'])->name('send.message.from.rabbitmq');
    Route::get('/send', [RabbitMqController::class, 'sendMessage'])->name('send.message.from.rabbitmq');
    Route::get('/get', [RabbitMqController::class, 'getMessage'])->name('get.message.from.rabbitmq');
});
