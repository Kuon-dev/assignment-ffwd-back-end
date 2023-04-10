<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // get specific user
    public function index(Request $request) {
        return $request->user();
    }

    // check user permission
    public function checkPerms(Request $request) {
        $root = $request->user();
    }
}
