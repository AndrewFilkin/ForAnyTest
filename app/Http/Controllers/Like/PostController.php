<?php

namespace App\Http\Controllers\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::all();

        return view('LikeCounter.showPost', compact('posts'));
    }
}
