<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FellowshipController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventAttendanceController;

Route::get('/check-user/{phone}', [UserController::class, 'checkUser']);

Route::post('/user', [UserController::class, 'store']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/fellowships', [FellowshipController::class, 'index']);

Route::get('/events', [EventController::class, 'index']);

Route::post('/attendance', [EventAttendanceController::class, 'store']);

Route::get('/attendance', [EventAttendanceController::class, 'index']);