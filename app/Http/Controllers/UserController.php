<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use Illuminate\Validation\Rules;

use function Psy\debug;

class UserController extends Controller {
  // get specific user
  public function index(Request $request) {
    return $request->user();
  }

  // check user permission

  public function checkPerms(Request $request) {
    $access = $request->user()->access_level;

    if ($access === 'root') {
      return response()->json(["perm_level" => 3]);
    } elseif ($access === 'admin') {
      return response()->json(["perm_level" => 2]);
    } elseif ($access === 'user') {
      return response()->json(["perm_level" => 1]);
    } else {
      return response()->json(["perm_level" => 0]);
    }
  }

  public function rules() {
    $rules = [
      "id" => "required|numeric",
      "name" => "required",
      "email" => "required|email",
      "phone" => "required",
      "password" => "required",
      "bio" => "required",
    ];

    return $rules;
  }

  public function update(Request $request) {
    $updateUser = User::find($request->id);

    $updateUser->name = $request->newName;
    $updateUser->email = $request->newEmail;
    $updateUser->phone_number = $request->newPhone;
    $updateUser->bio = $request->newBio;

    $updateUser->save();

    return response()->json(
      ["message" => "Your Profile has been Updated."],
      200
    );
  }

  public function getAllUser(Request $request) {
    $users = User::withCount("forum")->get();

    $userData = [];

    foreach ($users as $user) {
      $userData[] = [
        "id" => $user->id,
        "name" => $user->name,
        "email" => $user->email,
        "bio" => $user->bio,
        "phone_number" => $user->phone_number,
        "role" => $user->access_level,
        "email_verified_at" => $user->email_verified_at,
        "is_banned" => $user->is_banned,
        "listing_count" => $user->forum()->count(),
      ];
    }
    return $userData;
  }

  public function getUserCount() {
    $users = User::where("access_level", "user")->count();
    $admins = User::where("access_level", "admin")->count();

    return response()->json([
      "users" => $users,
      "admins" => $admins,
    ]);
  }

  public function addAccount(Request $request){
    $request->validate([
      "name" => ["required", "string", "max:255"],
      "email" => [
        "required",
        "string",
        "email",
        "max:255",
        "unique:" . User::class,
      ],
      "password" => ["required", Rules\Password::defaults()],
    ]);

    $user = User::create([
      "name" => $request->name,
      "email" => $request->email,
      "password" => Hash::make($request->password),
      "bio" => '',
      "phone_number" => $request->phone,
      "access_level" => $request->role,
    ]);
    return response()->noContent();
  }
}
