<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\LoginController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::middleware('auth:sanctum')->group(function(){
Route::get('/blogs',[BlogController::class,'blogList']);
Route::get('/blog/{id}',[BlogController::class,'blog']);
});
