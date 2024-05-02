<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;


Route::post('auth/register',[UserController::class,'register']);
Route::post('auth/login',[UserController::class,'login']);