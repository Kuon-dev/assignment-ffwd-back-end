<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rules;

class FeedbackController extends Controller
{
    public function index() {
        // $feedback = Feedback::latest()->get();
        
        // return response()->json(['feedbacks' => $feedback]);
    }

    public function store(Request $request): Response
    {
        // Create and Store new feedback 
        $request->validate([
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        //$currentUser = ;
        $quiz = Quiz::latest()->first();
        $feedback = Feedback::create([
            'quiz_id' => $quiz->id,
            'user_id' => $request->user,
            'message' => $request->feedback,
            'rating' => $request->rating,
        ]);

        // event(new Registered($user));

        return response()->noContent();
    }

    public function getFeedbacksFromUser($user_id){
        // Get all feedbacks from one specific user id
        $feedback = Feedback::where('user_id', $user_id)->get();

        return response()->json(['feedback' => $feedback]);
    }

    public function getFeedbacksFromUserCount($user_id){
        // Get total count of feedbacks from one specific user id
        $feedback = Feedback::where('user_id', $user_id)->count();

        return response()->json(['feedback' => $feedback]);
    }
}
