<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/check-user/{phone}',  [UserController::class, 'checkUser']);