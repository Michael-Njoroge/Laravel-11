<?php

use App\Http\Controllers\Api\V1\CompleteTaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TasksController;
use App\Http\Controllers\Api\V1\UserController;

Route::prefix('v1')->group(function(){
Route::resource('/tasks',TasksController::class);
Route::resource('/users',UserController::class);
Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
