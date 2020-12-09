<?php
namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        $posts = Post::all();
        return view('services',compact('pages','posts'));
    }
}
