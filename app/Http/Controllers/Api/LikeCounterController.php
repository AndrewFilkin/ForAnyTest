<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class LikeCounterController extends Controller
{
    public function counter()
    {
        $post = Post::create([
            'title' => 'title',
            'description' => 'description',
            'text' => 'text_text_text_text_text_text_text',
            'counter_likes' => 123454321,
        ]);
    }

    public function deleteLike($id)
    {
        $post = Post::find($id);
        $post->delete();
    }

}
