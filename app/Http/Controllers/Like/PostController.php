<?php

namespace App\Http\Controllers\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {

//        $user123 = Auth::user();
//        dd($user123->name);

        $posts = Post::all();

        return view('LikeCounter.showPost', compact('posts'));
    }
}
