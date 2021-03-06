<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Todo ОБРАБОТКА HTTP-ЗАПРОСОВ В ПРИЛОЖЕНИИ LARAVEL VUE.JS С ПОМОЩЬЮ AXIOS https://pusher.com/tutorials/laravel-vue-axios
    public function index()
    {
        return view('posts.index');
    }

    public function get(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return response()->json($post);
    }

    public function delete($id)
    {
        Post::destroy($id);

        return response()->json("ok");
    }
}
