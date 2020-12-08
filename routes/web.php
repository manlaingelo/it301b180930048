<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
middleware('role:superadministrator|administrator|editor|author|contributor')->
*/
Route::get('/', function () {
  $pages = TCG\Voyager\Models\Page::all();
  return view('welcome',compact('pages'));
});
Auth::routes();

Route::prefix('home')->group(function () {
  Route::get('/', function () {
    $posts = TCG\Voyager\Models\Post::all();
    
    return view('home', compact('posts'));
  });
  Route::get('/schedule', function(){
    return view('schedules');
  });
  Route::get('/payment', function(){
    return view('payments');
  });
  Route::get('/profile', function () {
    $route=Auth::routes();
    return view('profile',compact('route'));
  });
});

Route::get('home/{slug}', function($slug){
$post = TCG\Voyager\Models\Post::where('slug', '=', $slug)->firstOrFail();
return view('posts', compact('post'));
});

Route::group(['prefix' => 'admin'], function () {
  Voyager::routes();
});