<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestDb\ApiCRUD\ApiCrudController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/createDbMessage', [ApiCrudController::class, 'createMessage'])->name('create.message');

// Регистрация
Route::post('register', [AuthController::class, 'register'])->name('auth.register');

// Аутентификация
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

