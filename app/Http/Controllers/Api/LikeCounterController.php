<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\PostUser;
use Cookie;
use Illuminate\Support\Facades\DB;

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

        //save cookie userId
        $cookie = cookie('userAuthId', $userAuth->id, 1);
//        return response('Hello World')->cookie($cookie);


        $user = User::find($userAuth->id);
        $roleIds = [$id];
        $user->posts()->attach($roleIds);

        return response()->json($userAuth->id)->cookie($cookie);
    }

    public function deleteLike(Request $request, $post_id)
    {
        $userAuthId = $request->cookie('userAuthId');
        DB::table('post_users')
            ->where('user_id', $userAuthId)
            ->where('post_id', $post_id)
            ->delete();
        Cookie::forget('userAuthId');
    }

}
