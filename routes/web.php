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

  if ($request->user()->hasRole('root')){
    return response()-> json(["message" => "already logged in", "route" => "/admin/"]);
  }

  if ($request->user()->hasRole('admin')){
    return response()-> json(["message" => "already logged in", "route" => "/admin/"]);
  }
  if ($request->user()->hasRole('user')){
    return response()-> json(["message" => "already logged in", "route" => "/user/"]);
  }
  else
    return response()-> json(["message" => "not yet log in", "route" => ""]);
});

require __DIR__.'/auth.php';
