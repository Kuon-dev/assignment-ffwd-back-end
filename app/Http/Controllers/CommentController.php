<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Forum;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller {
  // get all comments of a specific forum (forum_id)
  public function index(Request $request) {
    $forumID = $request->forum;
    $comments = Comment::where("forum_id", $forumID)
      ->latest()
      ->skip($request->index * 10)
      ->take(10)
      ->get();

    $commentsCount = Comment::where("forum_id", $forumID)->count();
    //$comments = Comment::latest()->get(); // Get ALL comments
    $userNames = [];

    foreach ($comments as $comment) {
      $user = User::find($comment->user_id);
      if ($user) {
        $userNames[] = $user->name;
      }
    }

    return response()->json([
      "data" => $comments,
      "users" => $userNames,
      "comments_count" => $commentsCount,
    ]);
  }

  // Create and Store new comment
  public function store(Request $request) {
    Log::debug($request->forum);
    $request->validate([
      "message" => ["required", "string", "max:1000"],
    ]);

    $comment = Comment::create([
      "forum_id" => $request->forum,
      "user_id" => $request->user,
      "message" => $request->message,
    ]);

    return response()->json(["message" => "Comment has been added."], 200);
  }


  // Update comment - replacing edit function
  public function edit(Request $request) {
    $updateComment = Comment::find($request->comment);

    $updateComment->message = $request->message;
    $updateComment->save();

    return response()->json(["message" => "Your Comment has been Updated."], 200);
  }


  // edit comment - old code
  public function editLegacy(Request $request, $commentID) {
    $comment = Comment::findOrFail($commentID);

    $request->validate([
      "message" => ["required", "string", "max:1000"],
    ]);

    $comment->message = $request->input("message"); // Unsure correct or not
    $comment->save();

    return response()->json(["message" => "Comment has been Modified."], 200);

    // Possible reference - reset password in NewPasswordController.php
  }

  // delete comment function for user
  //public function deleteByUser(Request $request, $commentID) {
  public function deletedByUser(Request $commentID) {
    $comment = Comment::findOrFail($commentID);

    // Set the is_deleted_by_user flag to 1 in comment table
    $comment->is_deleted_by_user = 1;
    $comment->save();
    //$comment->delete(); // Instead of deleting record, use code to set is_deleted_by_user to 1

    return response()->json(["message" => "Comment has been Deleted."], 200);
  }

  // delete comment function for admin
  //public function deleteByAdmin(Request $request, $commentID) {
  public function deletedByAdmin(Request $commentID) {
    $comment = Comment::findOrFail($commentID);

    // Set the is_removed_by_admin flag to 1 in comment table
    $comment->is_removed_by_admin = 1;
    $comment->save();
    //$comment->delete(); // Instead of deleting record entirely, use code to set is_removed_by_admin to 1

    return response()->json(["message" => "Comment has been Deleted."], 200);
  }
}
