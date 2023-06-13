<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class LikeCounterController extends Controller
{
    public function counter($id)
    {
        $ip_users = [];
        $users = User::all();

        foreach ($users as $user) {
            $ip_users[] = $user->id;
        }

        $randomKey = array_rand($ip_users);
        $randomIdUser = $ip_users[$randomKey];

        $user = User::find($randomIdUser);
        Auth::login($user);

        $userAuth = Auth::user();
        $user = User::find($userAuth->id);
        $roleIds = [$id];
        $user->posts()->attach($roleIds);

        return response()->json('ok');


//        $post = Post::create([
//            'title' => 'title',
//            'description' => 'description',
//            'text' => 'text_text_text_text_text_text_text',
//            'counter_likes' => 123454321,
//        ]);
    }

    public function deleteLike($id)
    {
//        $post = Post::find($id);
//        $post->delete();

        echo 3;
    }

}
