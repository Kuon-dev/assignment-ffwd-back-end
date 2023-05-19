<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quiz;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QuizController extends Controller {
  // get all quizzes of the current user (user_id)
  public function index(Request $request) {
    $userID = $request->user;
    $title = $request->title;

    Log::debug($userID);
    $test = Quiz::where("user_id", $userID)->get();

    Log::debug($test);

    $quizzes = Quiz::where("user_id", $userID)
      ->where("title", "like", "%{$title}%")
      ->orderByDesc("attempted_date")
      ->latest()
      ->skip($request->index * 10)
      ->take(10)
      ->get();

    // $quizzesCount = Quiz::where("user_id", $userID)
    //     ->where("title", "like", "%{$title}%")
    //     ->count();

    return response()->json([
      "data" => $quizzes,
      // "quizzes_count" => $quizzesCount,
    ]);
  }

  public function create(Request $request) {
    $newQuizScore = Quiz::create([
      "title" => $request->title,
      "user_id" => $request->user_id,
      "score" => $request->score,
      "attempted_date" => $request->attempted_date,
      "completed_time" => $request->completed_time,
    ]);
    return response()->json(
      ["message" => "Quiz Score Record has been Created."],
      200
    );
  }

  // Get single score based on id
  public function getScore(Request $request) {
    Log::debug("test");
    $quizScore = Quiz::where("id", $request->score_id)->get();
    return response()->json([
      "score" => $quizScore,
    ]);
  }

  // get specific quiz record details based on quiz_id
  public function show(Request $request) {
    Log::debug("test");
    $quiz = Quiz::where("id", $request->quiz_id)->get();
    return response()->json([
      "quiz" => $quiz[0],
    ]);
  }

  // get top 10 quiz records of the sleected course based on score and time taken
  public function topQuizRecords(Request $request) {
    $title = $request->title;

    $quizzes = Quiz::where("title", "like", "%{$title}%")
      ->orderByDesc("score")
      ->orderByRaw("TIMESTAMPDIFF(SECOND, attempted_date, completed_time) ASC")
      ->latest()
      ->take(10)
      ->get();

    $userNames = [];

    // Get usernames in User table corresponding to user_id in Quiz table
    foreach ($quizzes as $quiz) {
      $user = User::find($quiz->user_id);
      if ($user) {
        $userNames[] = $user->name;
      }
    }

    return response()->json([
      "data" => $quizzes,
      "users" => $userNames,
    ]);
  }
}
