<?php

namespace App\Http\Controllers\PostApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostApi;
use Illuminate\Support\Facades\DB;

class PostApiController extends Controller
{
    public function index()
    {
        $items = DB::table('post_apis')->paginate();

        return response()->json($items);
    }
}
