<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Tag;

class PostController extends Controller
{
    //追加
    public function index(Request $request){
        //模範回答を参照し作成
        $query = Post::with('tags')->withCount('comments');

        if ($request->has('tag')) {
            $tagName = $request->tag;
            $query->whereHas('tags', function ($q) use ($tagName) {
                $q->where('name', $tagName);
            });
        }

        $posts = $query->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = Post::with('tags','comments')->latest()->find($id);
        return view('posts.show',compact('post'));
    }

}
