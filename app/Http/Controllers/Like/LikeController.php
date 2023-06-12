<?php

namespace App\Http\Controllers\Like;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        $user = User::find(2);

        $roleIds = [1, 2];
        $user->posts()->attach($roleIds);
    }
}
