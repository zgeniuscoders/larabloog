<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with("user")->inRandomOrder()->take(9)->get();
        return view("index",compact("posts"));
    }
}
