<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostAPIController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Define API routes under the 'api' prefix
Route::prefix('v1')->group(function () {
    // Get all posts
    Route::get('posts', [PostAPIController::class, 'index']); // Adjusted to call the 'index' method in the controller
});