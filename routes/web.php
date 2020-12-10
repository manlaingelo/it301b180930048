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
Auth::routes();
Route::get('/', 'WelcomeController@index');
Route::get('/aboutus', 'AboutusController@index');
Route::get('/contactus', 'ContactUsController@index');
Route::get('/services', 'ServicesController@index');

Route::prefix('home')->group(function () {
  Route::get('/', 'HomeController@index');
  Route::get('/profile', 'ProfileController@index');
  Route::get('/schedule', 'SchedulesController@index');
  Route::get('/payment', 'PaymenthistoryController@index');

  Route::get('/{slug}', function($slug){
    $post = TCG\Voyager\Models\Post::where('slug', '=', $slug)->firstOrFail();
    
    auth()->setDefaultDriver(app('VoyagerGuard'));

        if (!Auth::guest()) {
            return view('posts', compact('post'));
        }
        $urlLogin = route('login');
        return redirect()->guest($urlLogin);
    });
    
});

Route::group(['prefix' => 'admin'], function () {
  Voyager::routes();
});