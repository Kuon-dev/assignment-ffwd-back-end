<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    //   FORUM SECTION   //
    // get all forum post
    public function index() {
        $forums = Forum::latest()->get();
        
        return response()->json(['data' => $forums]);
    }

    // get specific forum post with comments
    public function show(Request $forumID) {
        $forum = Forum::findOrFail($forumID);
        $comments = Comment::findOrFail($forumID);

        return response()->json(['data' => [$forum, $comments]]);
    }

    // create new forum
    public function create() {
        return response()->json(['message' => 'Your Forum Post has been Created.'], 200);
    }

    // edit forum
    public function edit(Request $forumID) {
        $forum = Forum::findOrFail($forumID);

        return response()->json(['message' => 'Forum Post Updated.'], 200);
    }

    // delete forum
    public function destroy(Request $forumID) {
        $forum = Forum::findOrFail($forumID);
        $forum->delete();

        return response()->json(['message' => 'Forum Post has been Deleted.'], 200);
    }

    //   COMMENT SECTION   //
    // create new comment
    public function createComment(Request $forumID) {
        return response()->json(['message' => 'Your Comment has been Created for Post ' + $forumID], 200);
    }

    // edit comment
    public function editComment(Request $commentID) {
        $comment = Comment::findOrFail($commentID);

        return response()->json(['message' => 'Forum Post Updated.'], 200);
    }

    // delete comment
    public function destroyComment(Request $commentID) {
        $comment = Comment::findOrFail($commentID);
        $comment->delete();

        return response()->json(['message' => 'Comment has been Deleted.'], 200);
    }
}
