<?php

use App\Http\Controllers\UserController;
use App\Models\UserModel;
use Illuminate\Support\Facades\Route;

Route::post('/user', [UserController::class, 'registrar']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/t', [UserController::class, 'indexStartingWithT']);
