<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    //   FORUM SECTION   //
    // get all forum post
    public function index() {
        // $forums = Forum::latest()->get();
        
        // return view('pizzas.index', [
        //     'pizzas' => $pizzas,
        // ]);
    }

    // get specific forum post
    public function show($forumID) {
        // $forum = Forum::findOrFail($forumID);

        // return view('forum.show', ['forum' => $forum]);
    }

    // create new forum
    public function create() {
        return view('forum.create');
    }

    // edit forum
    public function edit($forumID) {
        // $forum = Forum::findOrFail($forumID);

        // return view('forum.edit', compact('forum'));
    }

    // delete forum
    public function destroy($forumID) {
        // $forum = Forum::findOrFail($forumID);
        // $forum->delete();

        // return redirect('someOtherPage');
    }

    //   COMMENT SECTION   //
    // 
    public function showComment($forumID) {
        
    }
}
