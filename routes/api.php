<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\QuizController;
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
    Route::post('/user/update', [UserController::class, 'update']);
    // Get feedback
    Route::get('/admin/feedback', [FeedbackController::class, 'index']);
    Route::post('/user/manage/all', [UserController::class, 'getAllUser']);
    Route::get('/user/manage/count', [UserController::class, 'getUserCount']);
    Route::post('/user/manage/profile/add', [UserController::class, 'addAccount']);
    Route::post('/user/manage/profile/ban', [UserController::class, 'manageAccountStatus']);
});

//   FORUM    //
// Forum Pagination
Route::get("/forums/pages/count", [ForumController::class, "paginationCount"]);
// Forum Index Page
Route::post("/forums/get/{id}", [ForumController::class, "index"]);
// Search Forum
Route::post("forums/search", [ForumController::class, "search"]);
// Specific Forum Page
Route::post("/forums/get/specific/{id}", [ForumController::class, "show"]);
// Get all comments of specific forum
Route::post('/comments/get/{id}', [CommentController::class, 'index']);
Route::get('/forums/get/hot', [ForumController::class, 'showHotToday']);
Route::post('/forums/vote/get', [ForumController::class, 'getVote']);



Route::middleware(["auth:sanctum"])->group(function () {
  // Create Forum Page
  Route::post("/forums/create", [ForumController::class, "create"]);
  // Edit Specific Forum Page
  Route::post("/forums/edit", [ForumController::class, "edit"]);
  Route::post("/forums/vote/add", [ForumController::class, "addVote"]);
  Route::post("/forums/vote/get", [ForumController::class, "getVote"]);
  Route::post("/forums/vote/delete", [ForumController::class, "deleteVote"]);
  // Delete Specific Forum Page By Admin
  Route::post("/forums/deleteAdmin", [
    ForumController::class,
    "deletedByAdmin",
  ]);
  // Delete Specific Forum Page
  Route::post("/forums/deleteUser", [ForumController::class, "deletedByUser"]);
  // Create New Comment
  Route::post("/comments/create", [CommentController::class, "store"]);
  // Edit Exisitng Comment
  Route::post("/comments/edit", [CommentController::class, "edit"]);
  // Delete Comment By Admin - Set is_removed_by_admin to 1 (Available for admin only)
  Route::post("/comments/deleteAdmin", [
    CommentController::class,
    "deletedByAdmin",
  ]);
  // Delete Comment By User - Set is_deleted_by_user to 1
  Route::post("/comments/deleteUser", [
    CommentController::class,
    "deletedByUser",
  ]);
  Route::post("/quizzes/get/{id}", [QuizController::class, "index"]);

  // Create feedback
  Route::post("/feeback/create", [FeedbackController::class, "store"]);
  // Route::post('/user-all', [FeedbackController::class, 'getAllUser']);
  // Create Quiz Score
  Route::post("/quiz/create", [QuizController::class, "create"]);
});

Route::post("/quizzes/get-top/", [QuizController::class, "topQuizRecords"]);
Route::post("/score", [QuizController::class, "getScore"]);
Route::post("/quizzes/get/specific/{id}", [QuizController::class, "show"]);
Route::get("/course/get/{id}", [QuizController::class, "getCourse"]);
