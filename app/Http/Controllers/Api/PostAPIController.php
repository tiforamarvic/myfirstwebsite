<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostAPIController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }
}
