<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::select('posts.*', 'categories.name as name')
                 ->join('categories', 'posts.category_id', '=', 'categories.id')
                 ->get();
        return view('home', compact('posts'));
    }
}
