<?php

use App\Http\Controllers\CommentController;
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

Route::post('/attendances', [EventAttendanceController::class, 'store']);

Route::get('/attendances', [EventAttendanceController::class, 'index']);

Route::post('/comments', [CommentController::class, 'store']);

Route::get('/comments', [CommentController::class, 'index']);