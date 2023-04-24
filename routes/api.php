<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('/user', [UserController::class, 'index']);
    Route::post('/user', [UserController::class, 'checkPerms']);
    Route::post('/user-all', [UserController::class, 'getAllUser']);
});
// Forum Pagination
Route::get('/forums/pages/count', [ForumController::class, 'paginationCount']);

// Forum Index Page
Route::post('/forums/get/{id}', [ForumController::class, 'index']);


// Create Forum Page
Route::post('/forums/create', [ForumController::class, 'create']);
// Specific Forum Page
Route::get('/forums/get', [ForumController::class, 'show']);
// Edit Specific Forum Page
Route::get('/forums/edit', [ForumController::class, 'edit']);
// Delete Specific Forum Page
Route::delete('/forums/delete', [ForumController::class, 'destroy']);
// Create Comment Page
Route::post('/forums/comments/create', [ForumController::class, 'createComment']);
// Edit Specific Comment Page
Route::post('/forums/comments/edit', [ForumController::class, 'editComment']);
// Delete Specific Comment Page
Route::post('/forums/comments/delete', [ForumController::class, 'destroyComment']);


Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/feeback/create', [FeedbackController::class, 'store']);
    // Route::post('/user', [FeedbackController::class, 'checkPerms']);
    // Route::post('/user-all', [FeedbackController::class, 'getAllUser']);
});
