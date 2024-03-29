<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Cookie;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken(Str::random(60))->accessToken;

        $cookie = cookie('loginData', $token, 30);

        $user->token = $token['name'];
        $user->save();

        return response(['token' => $token])->cookie($cookie);
    }

    public function login(Request $request)
    {

        $userToken = $request->cookie('loginData');

        $tokenData = json_decode($userToken);

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        $results = DB::table('users')
            ->where('token', $tokenData->name)
            ->get();


        if (!$results) {
            return response("Token time out", 422);
        }


        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response(['errors' => ['Invalid credentials']], 422);
        }


        return response('login');
    }
}
