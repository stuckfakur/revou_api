<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/books', [App\Http\Controllers\Api\BookController::class, 'index']);
Route::get('/books/{id}', [App\Http\Controllers\Api\BookController::class, 'show']);
Route::post('/books', [App\Http\Controllers\Api\BookController::class, 'store']);
Route::put('/books/{id}', [App\Http\Controllers\Api\BookController::class, 'update']);
Route::delete('/books/{id}', [App\Http\Controllers\Api\BookController::class, 'destroy']);

Route::get('/songs', [App\Http\Controllers\Api\SongController::class, 'index']);
Route::get('/songs/{id}', [App\Http\Controllers\Api\SongController::class, 'show']);
Route::post('/songs', [App\Http\Controllers\Api\SongController::class, 'store']);
Route::put('/songs/{id}', [App\Http\Controllers\Api\SongController::class, 'update']);
Route::delete('/songs/{id}', [App\Http\Controllers\Api\SongController::class, 'destroy']);

Route::get('/categories', [App\Http\Controllers\Api\CategoryController::class, 'index']);
Route::get('/categories/{id}', [App\Http\Controllers\Api\CategoryController::class, 'show']);
Route::post('/categories', [App\Http\Controllers\Api\CategoryController::class, 'store']);
Route::put('/categories/{id}', [App\Http\Controllers\Api\CategoryController::class, 'update']);
Route::delete('/categories/{id}', [App\Http\Controllers\Api\CategoryController::class, 'destroy']);

