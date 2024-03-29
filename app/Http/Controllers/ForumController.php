<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Forum;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ForumController extends Controller {
  //   FORUM SECTION   //
  // get forum posts
  public function index(Request $request) {
    $forums = Forum::latest()
      ->skip($request->index * 10)
      ->take(10)
      ->get();

    $userNames = [];
    $upVotes = [];
    $downVotes = [];

    foreach ($forums as $forum) {
      $user = User::find($forum->user_id);
      if ($user) {
        $userNames[] = $user->name;
      }

      $upVote = Vote::where("forum_id", $forum->id)
        ->where("is_upvote", "=", 1)
        ->count();

      $downVote = Vote::where("forum_id", $forum->id)
        ->where("is_upvote", "=", 0)
        ->count();

      $upVotes[] = $upVote;
      $downVotes[] = $downVote;
    }

    return response()->json([
      "data" => $forums,
      "users" => $userNames,
      "upVotes" => $upVotes,
      "downVotes" => $downVotes,
    ]);
  }

  // function to get total post count math.ceil(count / 10) return the final count value
  public function paginationCount() {
    $paginationCount = Forum::count();
    return response()->json([["paginationCount" => $paginationCount]]);
  }

  // search forum based on query
  public function search(Request $request) {
    $query = $request->query('q');

    // Perform the search based on the query
    $forums = Forum::where('title', 'like', '%' . $query . '%')
    ->orWhere('content', 'like', '%' . $query . '%')
    ->get();

    $userNames = [];
    $upVotes = [];
    $downVotes = [];

    foreach ($forums as $forum) {
      $user = User::find($forum->user_id);
      if ($user) {
        $userNames[] = $user->name;
      }

      $upVote = Vote::where("forum_id", $forum->id)
        ->where("is_upvote", "=", 1)
        ->count();

      $downVote = Vote::where("forum_id", $forum->id)
        ->where("is_upvote", "=", 0)
        ->count();

      $upVotes[] = $upVote;
      $downVotes[] = $downVote;
    }

    // Return the search results as JSON response
    return response()->json([
      "data" => $forums,
      "users" => $userNames,
      "upVotes" => $upVotes,
      "downVotes" => $downVotes,
    ]);
  }

  // get specific forum post with comments
  public function show(Request $request) {
    $forum = Forum::where("id", $request->forum_id)->get();
    $comments = Comment::where("forum_id", $request->forum_id)->get();
    $user = User::where("id", $forum[0]->user_id)->get()[0];
    $upVote = Vote::where("forum_id", $request->forum_id)
      ->where("is_upvote", "=", 1)
      ->count();

    $downVote = Vote::where("forum_id", $request->forum_id)
      ->where("is_upvote", "=", 0)
      ->count();

    return response()->json([
      "forum" => $forum[0],
      "comment" => $comments,
      "votes" => $upVote - $downVote,
      "user" => $user,
    ]);
  }

  public function showHotToday() {
    $hotTodayForums = Forum::whereDate("created_at", now()->toDateString())
      ->where("is_deleted_by_user", 0)
      ->where("is_removed_by_admin", 0)
      ->withCount([
        "votes as upvotes_count" => function ($query) {
          $query->where("is_upvote", 1);
        },
      ])
      ->orderByDesc("upvotes_count")
      ->limit(10)
      ->get();

    if ($hotTodayForums->isEmpty()) {
      $hotForums = Forum::where("is_deleted_by_user", 0)
        ->where("is_removed_by_admin", 0)
        ->withCount([
          "votes as upvotes_count" => function ($query) {
            $query->where("is_upvote", 1);
          },
        ])
        ->orderByDesc("upvotes_count")
        ->limit(10)
        ->get();
      return response()->json(
        ["data" => $hotForums, "additional" => "No today"],
        200
      );
    }

    return response()->json(["data" => $hotTodayForums], 200);
  }

  // create new forum
  public function create(Request $request) {
    $newForum = Forum::create([
      "user_id" => $request->user_id,
      "title" => $request->title,
      "content" => json_encode($request->content),
      "is_deleted_by_user" => false,
      "is_removed_by_admin" => false,
    ]);
    return response()->json(
      ["message" => "Your Forum Post has been Created."],
      200
    );
  }

  // edit forum
  public function edit(Request $request) {
    $forum = Forum::find($request->forum);
    $forum->content = $request->content;
    $forum->title = $request->title;
    $forum->save();

    return response()->json(["message" => "Forum Post Updated."], 200);
  }

  // Delete forum function for user
  public function deletedByUser(Request $request) {
    $deletedForum = Forum::find($request->forum);

    // Set the is_deleted_by_user flag to 1 in forum table
    $deletedForum->is_deleted_by_user = 1;
    $deletedForum->save();

    return response()->json(["message" => "Forum has been Deleted."], 200);
  }

  // Delete forum function for admin
  public function deletedByAdmin(Request $request) {
    $deletedForum = Forum::find($request->forum);

    // Set the is_removed_by_admin flag to 1 in forum table
    $deletedForum->is_removed_by_admin = 1;
    $deletedForum->save();

    return response()->json(["message" => "Forum has been Removed."], 200);
  }

  public function addVote(Request $request) {
    $vote = Vote::where("forum_id", $request->forum)
      ->where("user_id", $request->user()->id)
      ->get();
    if ($vote->isEmpty()) {
      Vote::create([
        "forum_id" => $request->forum,
        "user_id" => $request->user()->id,
        "is_upvote" => $request->vote,
      ]);
      return response()->noContent();
    } else {
      $vote[0]->delete();
    }
  }

  public function getVote(Request $request) {
    $vote = Vote::where("forum_id", $request->forum)
      ->where("user_id", $request->user()->id)
      ->get();
    return response()->json(["data" => $vote], 200);
  }

  public function deleteVote() {
  }
}
