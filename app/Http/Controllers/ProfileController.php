<?php

namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route=Auth::routes();
        return view('profile',compact('route'));
    }
}
