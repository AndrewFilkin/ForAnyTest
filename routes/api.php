<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestDb\ApiCRUD\ApiCrudController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\LikeCounterController;

Route::post('/createDbMessage', [ApiCrudController::class, 'createMessage'])->name('create.message');

// Регистрация
Route::post('register', [AuthController::class, 'register'])->name('auth.register');

// Аутентификация
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
//Like counter
Route::get('like-counter', [LikeCounterController::class, 'counter'])->name('like.counter');
Route::get('like-delete/{id}', [LikeCounterController::class, 'deleteLike'])->name('delete.counter');

