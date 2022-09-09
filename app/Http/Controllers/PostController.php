<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with("user")->paginate(10);
        return view("blog.index",compact("posts"));
    }

    public function show($slug)
    {
        $post = Post::with("user")->where("slug",$slug)->firstOrFail();
        return view("blog.show",compact("post"));
    }
}
