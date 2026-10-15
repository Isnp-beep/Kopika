<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;

// Public Routes (Tanpa Token)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

// Protected Routes (Wajib membawa Bearer Token)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/profile', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});