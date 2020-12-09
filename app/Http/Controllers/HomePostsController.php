<?php

namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $post =Post::where('slug', '=', $slug)->firstOrFail();
        return view('posts', compact('post'));
    }
}
