<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});


Route::get('/dashboard', function (Request $request) {
  if (is_null($request->user()))
    return response()-> json(["message" => "not yet log in", "route" => ""]);

  if ($request->user()->access_level === 'root'){
    return response()-> json(["message" => "already logged in", "route" => "/admin/"]);
  }

  if ($request->user()->access_level === 'admin'){
    return response()-> json(["message" => "already logged in", "route" => "/admin/"]);
  }
  if ($request->user()->access_level === 'user'){
    return response()-> json(["message" => "already logged in", "route" => "/user/"]);
  }
  else
    return response()-> json(["message" => "not yet log in", "route" => ""]);
});

require __DIR__.'/auth.php';
