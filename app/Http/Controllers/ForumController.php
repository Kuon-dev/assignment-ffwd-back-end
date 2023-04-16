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
        
        return view('forums.index', [
            'forums' => $forums,
        ]);
    }

    // get specific forum post with comments
    public function show($forumID) {
        $forum = Forum::findOrFail($forumID);
        $comments = Comment::findOrFail($forumID);

        return view('forum.show', ['forum' => $forum, 'comments' => $comments]);
    }

    // create new forum
    public function create() {
        return view('forum.create');
    }

    // edit forum
    public function edit($forumID) {
        $forum = Forum::findOrFail($forumID);

        return view('forum.edit', compact('forum'));
    }

    // delete forum
    public function destroy($forumID) {
        $forum = Forum::findOrFail($forumID);
        $forum->delete();

        // return redirect('someOtherPage');
    }

    //   COMMENT SECTION   //
    // create new comment
    public function createComment($forumID) {

    }

    // edit comment
    public function editComment($commentID) {
        $comment = Comment::findOrFail($commentID);

        return view('comment.edit', compact('comment'));
    }

    // delete comment
    public function destroyComment($commentID) {
        $comment = Comment::findOrFail($commentID);
        $comment->delete();

        // return redirect('someOtherPage');
    }
}
