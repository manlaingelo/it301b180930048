<?php
namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use Illuminate\Http\Request;
use App\Paymenttypes;
class ServicesController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        $posts = Post::all();
        $payments=Paymenttypes::all();
        return view('services',compact('pages','posts','payments'));
    }
}
